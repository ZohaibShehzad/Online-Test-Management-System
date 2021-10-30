<?php
session_start();
$currentPage = $_SESSION['currentPage'];
    include "../database/queries.php";
    $con = new Queries();

    if($currentPage=="employees"){
        $id = $_COOKIE['id'];
        $emp = $con->delete_Employee($id);
        header("Location: employees.php");
    } else if($currentPage=="organization"){
        $id = $_COOKIE['id'];
        $emp = $con->delete_Organization($id);
        header("Location: organization.php");
    } else if($currentPage=="tender"){
        $id = $_COOKIE['id'];
        $emp = $con->delete_Tender($id);
        header("Location: organizationTenders.php");
    } else if($currentPage=="jobs"){
        $id = $_COOKIE['id'];
        $emp = $con->delete_Job($id);
        header("Location: organizationJobs.php");
    } else if($currentPage=="candidate"){
        $id = $_COOKIE['id'];
        $emp = $con->delete_Candidate($id);
        header("Location: organizationUsers.php");
    }
        
        
?>