<!-- Header -->
<?php
  $title = "DESPERADOS - Porque no los dos?";
  include 'header.php';
?>

<!-- MAIN CONTENT -->
<main>


<?php
  // create cookie for testing
  $in_cart = [1 => 20, 2 => 30];
  
  setcookie('cart_items', json_encode($in_cart), time()+86400*30 , '/'); // create cookie
?>

  <table>
    <tr>
      <th>Product Name</th>
      <th>Quantity</th>
      <th>Price</th>
      <th>GST</th>
      <th>Total Price</th>
    </tr>

<?php

  
  //$list = stripslashes($_COOKIE["cart_items"]);
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

  ?>

  </table>


</main>
</body>
<!-- PAGE CONTENT END -->


<!-- Footer -->
<?php
  $title = "DESPERADOS - Porque no los dos?";
  include 'footer.php';
?>
