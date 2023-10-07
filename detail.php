<?php require_once('core/init.php');?>

<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$template=new Template('views/detail.php');

$product = new Product();
$bidObject = new Bid();
$user = new User();

$id = $_GET['id'];

$singleProduct = $product->getSingleProduct($id);
$category_id = $singleProduct->category_id;
$similarProduct = $product->getProductsByCategory($category_id);
$electronicProducts = $product->getProductsByCategory($category_id);
$singleBid=$bidObject->getSingleBid($id);

if(isset($_POST['bidnow'])){
    $currentBid = $_POST['bidValue'];
    if($currentBid <= $singleProduct->current_bid)
    {
        redirect('detail.php?id='.$id.'', 'Your bid must be higher than current bid', 'error');
    }
    else{

        if($product->updateCurrentBid($id, $currentBid))
        {
            if($bidObject->addBid($currentBid, $_SESSION['user_id'], $id)){

                
                redirect('detail.php?id='.$id.'', 'Your bid is submitted successfully', 'success');
            }
        }
    }
}


$template->singleProduct = $singleProduct;
$template->similarProduct = $similarProduct;
$template->electronicProducts = $electronicProducts;
$template->singleBid = $singleBid;
// $template->currentBid = $currentBid;


$category = new Category();
$template->categories = $category->getAllCategories();

echo $template
?>