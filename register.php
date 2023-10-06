<?php require_once('core/init.php');?>

<?php 

$template=new Template('views/register.php');
$userObject = new User();


if(isset($_POST['cmdlogin'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $user =$userObject->login($username , $password);

    redirect('index.php');


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
        redirect('index.php');  
    }
    else{
        echo("Data is not inserted");
        die();
    }

} 




echo $template
?>