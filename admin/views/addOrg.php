<?php
    include "../database/queries.php";
    $con = new Queries();
    $name = $_POST['name'];
    $nick = $_POST['nick'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $focal = $_POST['focal'];
    $contact = $_POST['contact'];
   // echo $name,$nick,$email,$address;
    $con->insert_Organization($name,$nick,$address,$email,$focal,$contact);
    header("Location: organization.php");
    
?>