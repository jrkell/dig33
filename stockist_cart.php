<!-- Header -->
<?php
  $title = "DESPERADOS - Porque no los dos?";
  include 'header.php';
?>

<!-- MAIN CONTENT -->
<main>


<?php
  // create cookie for testing
  /*$in_cart = [1 => 20, 2 => 30];
  
  setcookie('cart_items', json_encode($in_cart), time()+86400*30 , '/'); // create cookie*/
?>
<form method="POST">
  <table>
    <tr>
      <th>Flavour</th>
      <th>Quantity</th>
      <th>Price</th>
      <th>GST</th>
      <th>Total Price</th>
    </tr>

<?php

  
  /*
  $list = $_COOKIE["cart_items"];
  
  $list = json_decode($list, true); 
  
  foreach ($list as $id => $qty) {
    $result = mysqli_fetch_assoc(getProductFromID($id));
    $name = $result["title"];
    $gross_price = number_format((float)$result["price"] * $qty / 1.1, 2, '.', '');
    $gst = number_format((float)$result["price"] * $qty / 11, 2, '.', '');
    $net_price = number_format((float)$result["price"] * $qty, 2, '.', '');

    echo "<tr>";
    echo "<td>$name</td>";
    echo "<td>$qty</td>";
    echo "<td>$$gross_price</td>";
    echo "<td>$$gst</td>";
    echo "<td>$$net_price</td>";
    echo "</tr>";
  }
  
  echo "<tr><td></td><th>TOTAL:</th>";

  echo "</tr>";
*/

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
    

    $name = $result["title"];
    $gross_price = number_format((float)$result["price"] * $qty / 1.1, 2, '.', '');
    $gst = number_format((float)$result["price"] * $qty / 11, 2, '.', '');
    $net_price = number_format((float)$result["price"] * $qty, 2, '.', '');

    echo "<tr>";
    echo "<td>$name</td>";
    echo "<td><input type='number' min='0' max='480' value=$qty step='24' id=$i name=$i onchange='toggleCartButtons()'></td>";
    echo "<td>$$gross_price</td>";
    echo "<td>$$gst</td>";
    echo "<td>$$net_price</td>";
    echo "</tr>";

    $total_gross += $gross_price;
    $total_gst += $gst;
    $total_price += $net_price;
  }

  echo "<tr><td></td><th>TOTAL:</th>";
  echo "<td>$$total_gross</td>";
  echo "<td>$$total_gst</td>";
  echo "<td>$$total_price</td></tr>";

  //echo json_encode($result);
  ?>

  </table>
  <button id="update" type="submit" style="display:none">Update Prices</button>
  <button id="proceed">Proceed to Checkout</button>
</form>
</main>
</body>
<!-- PAGE CONTENT END -->


<!-- Footer -->
<?php
  $title = "DESPERADOS - Porque no los dos?";
  include 'footer.php';
?>
