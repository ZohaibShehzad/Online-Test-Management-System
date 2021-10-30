<?php
Class Connection {

    protected $connection;

    function __construct() {
        $dbhost = "localhost"; 
        $dbuname = "stsadmin_1"; 
        $dbpass = "StS@2019$786"; 
        $dbname = "stsadmin_users";
        $this->connection    = mysqli_connect($dbhost,$dbuname,$dbpass,$dbname) or die ("could not connect to mysqli");
    }
    
     
    function escape_string($data){
        $info   = array();
        foreach($data as $key=>$val){
            $info[$key] = mysqli_real_escape_string($this->connection,$val);
        }
        return $info;
    }
}
?>