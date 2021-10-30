<?php
include("config.php");
    if(isset($_SESSION['admindata']['admin_loggedin']) && $_SESSION['admindata']['admin_loggedin'] != ""){
        header("Location:".$base_url."dashboard.php");exit;
    }
if(isset($_POST['loginsbmt']) && $_POST['loginsbmt'] == "sbmt"){
    $post   = $_POST;
    unset($post['loginsbmt']);
    $err=0;
    include("validations.php");
    if(!required($post['username'])){
        $err_msg_grp['username']    = set_required_msg("Username");
        $err++;
    }
    if(!required($post['userpass'])){
        $err_msg_grp['userpass']    = set_required_msg("Password");
        $err++;
    }
    if(!$err){
        include("models/admin_model.php");
        if($admin->check_login($post)){
            $admin->do_admin_login($post);
            header("Location:dashboard.php");exit;
        }else{
           $err_msg_grp['login_fail'] = "Username or Password does not exists";
           $err++;
        }
    }
}
include("views/login_view.php");
?>