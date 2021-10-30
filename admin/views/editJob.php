<?php
    include "../database/queries.php";
    $con = new Queries();
    $id = $_COOKIE['id'];
    $post = $_POST['post'];
    $vacancies = $_POST['vacancies'];
    //echo $name,$post,$oid,$status;
    $con->edit_Jobs($id,$post,$vacancies);
    header("Location: organizationJobs.php");
    
?>