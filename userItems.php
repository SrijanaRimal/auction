<?php require_once('core/init.php');?>

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$template=new Template('views/userItems.php');

$bid = new Bid();
$product = new Product();
$category = new Category();



$template->userProducts = $product->getUserProducts(1);
$template->userBids = $bid->getUserBiddings(3);



$template->categories = $category->getAllCategories();

echo $template
?>