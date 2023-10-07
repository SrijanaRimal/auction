<?php require_once('core/init.php'); ?>

<?php
$template = new Template('views/front_page.php');

$category = new Category();
$product = new Product();


$template->categories = $category->getAllCategories();
 $template->electronicProducts = $product->getProductsByCategory(1);

$electronicProducts = $product->getElectronicProduct();


$template->allProducts=$product->getAllProducts();
$template->electronicProducts=$electronicProducts;



echo $template;
?>