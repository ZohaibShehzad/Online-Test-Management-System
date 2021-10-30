<?php
    include "../database/queries.php";
    $con = new Queries();
    $id = $_COOKIE['id'];
    $name = $_POST['name'];
    $cellno = $_POST['cellno'];
    $cnic = $_POST['cnic'];
    $address = $_POST['address'];
    $join = $_POST['joining'];
    $term = $_POST['termination'];
    $dep = $_POST['department'];
    $pos = $_POST['position'];
  //  echo $name,$cellno,$cnic,$address;
    $con->edit_Employee($id,$name,$cellno,$cnic,$address,$dep,$pos,$join);
    header("Location: employees.php");
    
?>