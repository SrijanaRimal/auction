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
$recommendedProducts = $product->getRecommendedProducts();
    
if(!$recommendedProducts){
    $recommendedProducts = $product->getProductsByCategory($category_id);
}

// Remove singleProduct from recommendedProducts if it is the same
foreach ($recommendedProducts as $key => $recommendedProduct) {
    if ($recommendedProduct->id == $singleProduct->id) {
        unset($recommendedProducts[$key]);
    }
}

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
            if($bidObject->addBid($currentBid, $id)){

                
                redirect('detail.php?id='.$id.'', 'Your bid is submitted successfully', 'success');
            }
        }
    }
}

$template->singleProduct = $singleProduct;
$template->recommendedProducts = $recommendedProducts;
$template->electronicProducts = $electronicProducts;
$template->singleBid = $singleBid;


$category = new Category();
$template->categories = $category->getAllCategories();

echo $template
?>