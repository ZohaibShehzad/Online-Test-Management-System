<?php
    include "../database/queries.php";
    $con = new Queries();
    $id = $_COOKIE['id'];
    $name = $_POST['name'];
    $post = $_POST['post'];
    $start = $_POST['start_date'];
    $end = $_POST['end_date'];
    $status = "Active";
    //echo $name,$post,$oid,$status;
    $con->edit_Tender($id,$name,$post,$status,$start,$end);
    header("Location: organizationTenders.php");
    
?>