<?php
    include "../database/queries.php";
    $con = new Queries();
    $post = $_POST['post'];
    $oid = "2";
    $tid = "2";
    $vacancies = $_POST['vacancies'];
    //echo $name,$post,$oid,$status;
    $con->insert_Jobs($tid,$post,$oid,$vacancies);
    header("Location: organizationJobs.php");
    
?>