<?php

use MyApp\classes\Product;

include_once('../private/initialize.php'); 

$products = Product::select_all();

// Delete the selected items
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['deleteId'])) {

  Product::delete();
}
 
 ?>
 <!-- Have different page title for each page -->
<?php $page_title = 'Product List'; ?>
<?php include('../private/shared/head.php'); ?>
<body>
  <header>
    <nav>
      <h1>Product List</h1>
      <div id='nav-buttons'>
       <a href="./new_product.php"><button id='add-product-btn' type='button'>ADD</button></a> 
        <button id='delete-product-btn' form='product_list' type='submit' name='delete'>MASS DELETE</button>
      </div>
    </nav>
  </header>
  <hr>
  <main >
  <!-- Get all the products from the database and display them -->
  <form action="" id='product_list' method='POST'>
  <?php foreach ($products as $product) { ?>
    <div class='product-info'> 
      <input type="checkbox" name="deleteId[]" value="<?= $product->id ?>" class="delete-checkbox">
      <div class="data">
      <span><?= $product->sku; ?></span>
      <span><?= $product->name; ?></span>
      <span><?= $product->price; ?>$</span>
      <span><?php
        echo $product->weight_kg != 0.0 ? "Weight: " . $product->weight_kg . "KG" : '';

        echo $product->size != 0 ?  "Size: " . $product->size . "MB" : '';

        echo $product->dimensions != 0 ? "Dimensions: " .$product->dimensions: '';
       ?>
       </span>
       </div>
   </div>
   <?php }; ?>
   </form>
  </main>
  <hr>
<?php include('../private/shared/footer.php'); ?>
</body>
</html>