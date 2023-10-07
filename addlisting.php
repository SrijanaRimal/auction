<?php require_once('core/init.php');?>

<?php

// error_reporting(E_ALL);
// ini_set('display_errors', 1);

$template=new Template('views/addlisting.php');
$categoryObject = new Category();
$productObject = new Product();
$bidObject = new Bid();
$allcategories = $categoryObject->getAllCategories();

$template->allcategories = $allcategories;


if(isset($_POST['SubmitListing'])){
    $startingPrice = $_POST['StartingPrice'];
    $expectedPrice = $_POST['ExpectedPrice'];
    $endTime = $_POST['EndTime'];
    $categoryId = $_POST['CategoryID'];
    $name = $_POST['ItemName'];
    $discription = $_POST['Description'];
    $image = $_POST['PhotosID'];

    $productId = $productObject->addProduct( $categoryId , $name, $startingPrice, $discription, $image );
    $reponse =  $bidObject->addBid($expectedPrice, $endTime, $startingPrice, $productId);
    
    
    if($reponse == true){
        redirect('success.php?productId='. $productId);   
    }
    else{
        echo("something went wrong");
        
    }

}

$template->categories = $categoryObject->getAllCategories();

echo $template
?>