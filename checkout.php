<!-- Header -->
<?php
  $title = "DESPERADOS - Porque no los dos?";
  include 'header.php';
?>

<!-- MAIN CONTENT -->
<main id="container">

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 text-center">
              <h1>CHECKOUT</h1>

<table class="table table-dark">
  <thead class="thead-light">
  <tr>
    <th>Flavour</th>
    <th>Quantity</th>
    <th>Price</th>
    <th>GST</th>
    <th>Total Price</th>
  </tr>
</thead>

<?php



$email = $_COOKIE["stockist_verified"];
$user = mysqli_fetch_assoc(getUser($email, 'stockist'));
$stockist_id = $user['stockist_id'];
$order_id = addOrder($stockist_id);
$order_id = $order_id['LAST_INSERT_ID()'];


  $total_gross = 0;
  $total_gst = 0;
  $total_price = 0;
  for ($i = 1; $i <= 7; $i++) {
    if (isset($_POST[$i])) {
      $qty = $_POST[$i];
      if ($qty>0) {
        $query = "SELECT product_id, title, price FROM product WHERE product_id=$i;";
        $result = mysqli_fetch_assoc(performQuery($query));
        
        

        $name = $result["title"];
        $gross_price = number_format((float)$result["price"] * $qty / 1.1, 2, '.', '');
        $gst = number_format((float)$result["price"] * $qty / 11, 2, '.', '');
        $net_price = number_format((float)$result["price"] * $qty, 2, '.', '');
        $price_each = $result["price"];
        performQuery("INSERT into order_item(order_id, price_each, product_id, qty) VALUES ($order_id, $price_each, $i, $qty);");

        echo "<tr>";
        echo "<td>$name</td>";
        echo "<td>$qty</td>";
        echo "<td>$$gross_price</td>";
        echo "<td>$$gst</td>";
        echo "<td>$$net_price</td>";
        echo "</tr>";

        $total_gross += $gross_price;
        $total_gst += $gst;
        $total_price += $net_price;
      }
    }
  }

  echo "<tr><td></td><th>TOTAL:</th>";
  echo "<td>$$total_gross</td>";
  echo "<td>$$total_gst</td>";
  echo "<td>$$total_price</td></tr>";

  //echo json_encode($result);
  ?>

  </table>

  <script src="https://www.paypal.com/sdk/js?client-id=sb"></script>
  <script>paypal.Buttons().render('article');</script>

<h2><h2>
<article class="text-center paypal"> </article>
</div>
</div>
</div>
</main>
</body>
<!-- PAGE CONTENT END -->


<!-- Footer -->
<?php
  $title = "DESPERADOS - Porque no los dos?";
  include 'footer.php';
?>
