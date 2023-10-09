<?php require_once('core/init.php');?>

<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

$template=new Template('views/register.php');
$userObject = new User();
$category = new Category();


if(isset($_POST['cmdlogin'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $user =$userObject->login($username , $password);
    if(isset($user->id)){
            $_SESSION['user_id'] = $user->id;
    $_SESSION['username'] = $user->username;
    $_SESSION['name'] = $user->name;
    $_SESSION['is_logged_in'] = true;

        redirect('index.php', "logged in", "success");
    }
    else{
        redirect('register.php', "invalid username or password", "error");
    }


}

if(isset($_POST['register'])){
    $firstName = $_POST['fname'];
    $lastName = $_POST['lname'];
    $address = $_POST['addr'];
    $contactNumber = $_POST['cno'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $register = $userObject->register($firstName, $lastName, $address, $contactNumber, $username, $password);
    if($register == true){
        redirect('index.php', "registered", "success");
    }
    else{
        redirect('register.php', "Something went wrong, please try again", "error");
    }

} 

if(isset($_GET['logout'])){

    session_unset();
    redirect('index.php', "logged out", "error");
}


$template->categories = $category->getAllCategories();

echo $template
?>