<?php
session_start();
include 'connection.php';
$error = "";
if(isset($_POST['sp_cnic']) && isset($_POST['password'])){
    $cnic = $_POST['sp_cnic'];
    
    $pass = md5($_POST['password']);
    $postname = $_POST['scale'];
    $sql = "INSERT into userslogin (cnic,password,postname) VALUES ('$cnic','$pass','$postname')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        $_SESSION['super'] = $cnic;
        header('Location: biodataform.php');
    } 
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        $error = "Error: " . $sql . "<br>" . $conn->error;
        $_SESSION['error']= $error;
        header('Location: signuplogin.php');
    }
}
else if(isset($_POST['p_cnic']) && isset($_POST['loginpassword'])){
    $cnic = $_POST['p_cnic'];
    
    $pass = $_POST['loginpassword'];
    $sql = "SELECT * FROM userslogin WHERE cnic = '$cnic' AND password = md5('$pass')";
    $query = mysqli_query($conn, $sql);
    if (mysqli_num_rows($query) > 0) {
        $_SESSION['super'] = $cnic;
        header('Location: biodataform.php');
    }
    else {
        $error = "Invalid Login";
        echo "login error";
        $_SESSION['error']= $error;
        header('Location: signuplogin.php');
    }
    mysqli_free_result($query);
}else{
    echo "here";
header('Location: signuplogin.php');
}
?>
