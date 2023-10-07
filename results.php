<?php require_once('core/init.php');?>

<?php 
// error_reporting(E_ALL);
// ini_set('display_errors', 1);

$template=new Template('views/results.php');
$products = new Product();
$category = new Category();

if(isset($_POST['searchBtn'])){
    $searchQuery = $_POST['keyword'];   
    $template->products = $products->getSearchResult($searchQuery);
    $template->searchQuery = $searchQuery;
}
else{
    redirect('index.php');
}

$template->categories = $category->getAllCategories();
echo $template
?>