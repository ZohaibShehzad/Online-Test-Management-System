<?php session_start();
include 'database/queries.php';

$error="";
$con=new Queries();

if(isset($_POST['username']) && isset($_POST['password'])) {
    $username=$_POST['username'];
    $password=$_POST['password'];
    $con->login($username, $password, $error);

}

else {
    $error="Something Went Wrong";
    $_SESSION['error']=$error;
    header('Location: login.php');
}

?>