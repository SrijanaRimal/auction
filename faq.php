<?php require_once('core/init.php');?>

<?php 

  $template=new Template('views/faq.php');
  $category = new Category();
$template->categories = $category->getAllCategories();
  echo$template
  ?>
