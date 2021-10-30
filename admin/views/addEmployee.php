<?php
    include "../database/queries.php";
    $con = new Queries();
    $name = $_POST['name'];
    $cellno = $_POST['cellno'];
    $cnic = $_POST['cnic'];
    $address = $_POST['address'];
    $join = $_POST['joining'];
    $term = $_POST['termination'];
    $dep = $_POST['department'];
    $pos = $_POST['position'];
  //  echo $name,$cellno,$cnic,$address;
    $con->insert_Employee($name,$cellno,$cnic,$address,$dep,$pos,$join);
    header("Location: employees.php");
    
?>