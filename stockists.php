<!-- Header -->
<?php
  $title = "WHERE TO BUY DESPERADOS - Porque no los dos?";
  include 'header.php';
?>

<!-- MAIN CONTENT -->
<main id="container">

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h1>WHERE TO BUY DESPERADOS</h1>
                <h2>Find your nearest Desperados stockist</h2>
                <p class="text-link"><a href="wholesale.php?signup">Contact us to become a stockist and join the Desperados family.</a></p>
            </div>
        </div>

        <!-- Call to the api function that retrieves all stockists from the database and loops through them to display a list -->
        <?php listStockists() ?>
    </div>
</main>
<!-- PAGE CONTENT END -->


<!-- Footer -->
<?php
  $title = "DESPERADOS - Porque no los dos?";
  include 'footer.php';
?>
