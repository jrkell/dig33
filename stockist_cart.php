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
              <h1>WHOLESALE ORDER FORM</h1>

<?php
  if (isset($_GET["success"])) {
    echo "<div>Account created. Welcome!<br>Place your order below.</div>";
  }
?>
<form method="POST" name="cartForm" action="checkout.php">
  <table class="table table-dark table-striped table-sm" style="max-width: 800px;margin-left:auto; margin-right:auto;">
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

$total_gross = 0;
$total_gst = 0;
$total_price = 0;

  for ($i = 1; $i <= 7; $i++) {
    if (isset($_POST[$i])) {
      $qty = $_POST[$i];
    } else {
      $qty = 0;
    }

    $query = "SELECT product_id, title, price FROM product WHERE product_id=$i;";
    $result = mysqli_fetch_assoc(performQuery($query));

    $img_query = "SELECT * FROM image WHERE title='tn_$i';";
    $img_result = mysqli_fetch_assoc(performQuery($img_query));
    $img = $img_result["url"];
    $img_alt = $img_result["alt_desc"];

    $name = $result["title"];
    $gross_price = number_format((float)$result["price"] * $qty / 1.1, 2, '.', '');
    $gst = number_format((float)$result["price"] * $qty / 11, 2, '.', '');
    $net_price = number_format((float)$result["price"] * $qty, 2, '.', '');

    echo "<tr>";
    echo "<td class='text-left order-form'><img src=$img class='img-fluid' alt='$img_alt'/>$name</td>";
    echo "<td class='align-middle'><input type='number' min='0' max='480' value=$qty step='24' id=$i name=$i onchange='toggleCartButtons()'></td>";
    echo "<td class='align-middle'>$$gross_price</td>";
    echo "<td class='align-middle'>$$gst</td>";
    echo "<td class='align-middle'>$$net_price</td>";
    echo "</tr>";

    $total_gross += $gross_price;
    $total_gst += $gst;
    $total_price += $net_price;
  }

  echo "<tr><td></td><th>TOTAL:</th>";
  echo "<td>$$total_gross</td>";
  echo "<td>$$total_gst</td>";
  echo "<td>$$total_price</td></tr>";


  ?>

  </table>
  <button id="update" type="submit" class="btn btn-dark" style="display:none">Update Prices</button>
  <button id="proceed" class="btn btn-danger">Proceed to Checkout</button>

</form>
</div>
</div>
</div>
</main>

<!-- PAGE CONTENT END -->


<!-- Footer -->
<?php
  $title = "DESPERADOS - Porque no los dos?";
  include 'footer.php';
?>
