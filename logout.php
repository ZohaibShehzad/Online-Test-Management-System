<?php
session_start();
session_destroy();
header('Location: signuplogin.php');
 ?>