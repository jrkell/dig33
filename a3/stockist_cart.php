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
  echo $list;
  $list = json_decode($list); 
  echo $list["1"];
  
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
