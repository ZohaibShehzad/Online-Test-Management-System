<?php
    include "../database/queries.php";
    $con = new Queries();
    $name = $_POST['name'];
    $post = $_POST['post'];
    $start = $_POST['start_date'];
    $end = $_POST['end_date'];
    $oid = "2";
    $status = "Active";
    //echo $name,$post,$oid,$status;
    $con->insert_Tender($name,$post,$oid,$status,$start,$end);
    header("Location: organizationTenders.php");
    
?>