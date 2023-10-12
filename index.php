<?php require_once('core/init.php');
// require_once('cosine.php');
 ?>

<?php
$template = new Template('views/front_page.php');

$category = new Category();
$product = new Product();


$template->categories = $category->getAllCategories();
 $template->electronicProducts = $product->getProductsByCategory(2);

$electronicProducts = $product->getElectronicProduct();


$template->allProducts=$product->getAllProducts();



echo $template;
?>