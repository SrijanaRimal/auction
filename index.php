<?php require_once('core/init.php'); ?>

<?php
$template = new Template('views/front_page.php');

$category = new Category();
$product = new Product();

$template->categories = $category->getAllCategories();
$template->electronicProducts = $product->getProductsByCategory(1);
   $template->allProducts=$product->getAllProducts();



echo $template;
?>