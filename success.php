<?php require_once('core/init.php');?>

<?php 

$template=new Template('views/success.php');

$productObject = new Product();
$id = $_GET['productId'];


 $singleProduct =$productObject->getSingleProduct($id);

$template->singleProduct = $singleProduct;



echo $template
?>