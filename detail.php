<?php require_once('core/init.php');?>

<?php 

$template=new Template('views/detail.php');
// $category_id= $_GET['category_id'];
$product = new Product();
$bidObject = new Bid();

$id = $_GET['id'];


$singleProduct = $product->getSingleProduct($id);
$category_id = $singleProduct->category_id;
$similarProduct = $product->getProductsByCategory($category_id);
$electronicProducts = $product->getProductsByCategory($category_id);
$singleBid=$bidObject->getSingleBid($id);

$template->singleProduct = $singleProduct;
$template->similarProduct = $similarProduct;
$template->electronicProducts = $electronicProducts;
$template->singleBid = $singleBid;
$template->currentBid = $currentBid;

echo $template
?>