<?php 
require_once('core/init.php');
?>
<?php 

  $template=new Template('views/category.php');
  $categoryObject = new Category();


  $categoryId = $_GET['id'];
  
  $template->category = $categoryObject->getCategory($categoryId);
  $template->categoryProducts = $categoryObject->getCategoryProducts($categoryId);
  $template->categories = $categoryObject->getAllCategories();
  
  echo $template;
  ?>
