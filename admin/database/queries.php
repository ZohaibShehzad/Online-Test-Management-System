<?php

include "config.php";

Class Queries extends Connection{

    function login($username,$password,$error){
        $sql = "SELECT * FROM userslogin WHERE username = '$username' AND password = md5('$password')";
        $query = mysqli_query($this->connection, $sql);
        if (mysqli_num_rows($query) > 0) {
            $_SESSION['super'] = $username;
            header('Location: views/dashboard.php');
        }
        else {
            $error = "Invalid Username or Password";
            $_SESSION['error']= $error;
            header('Location: login.php');
        }
        mysqli_free_result($query);
    }

    function registered_Users(){
        $query = "SELECT * FROM userslogin WHERE active = 1";
        $sql = mysqli_query($this->connection,$query);
        if($sql){
            $row = mysqli_num_rows($sql);
            if($row){
                return $row;
            }
            else{
                return "0";
            }
        }

    }

    function unregistered_Users(){
        $query = "SELECT * FROM userslogin WHERE active = 0";
        $sql = mysqli_query($this->connection,$query);
        if($sql){
            $row = mysqli_num_rows($sql);
            if($row){
                return $row;
            }
            else{
                return "0";
            }
        }

    }

    function get_Users(){
        $query = "SELECT * FROM usersdetail";
        $sql = mysqli_query($this->connection,$query);
        if($sql){
            if(mysqli_num_rows($sql) > 0){
                $row = mysqli_fetch_all($sql,MYSQLI_ASSOC);
                return $row;
            }
            else{
                return "Error";
            }
        }
    }

    function get_Employees(){
        $query = "SELECT * FROM employeedetail";
        $sql = mysqli_query($this->connection,$query);
        if($sql){
            if(mysqli_num_rows($sql) > 0){
                $row = mysqli_fetch_all($sql,MYSQLI_ASSOC);
                return $row;
            }
            else{
                $row = array("id"=>"no data found","Name"=>"no data found","Address"=>"no data found","CNIC"=>"no data found","CellNo"=>"no data found");
                return $row;
            }
        }
    }

    function get_Employee($id){
        $query = "SELECT * FROM employeedetail Where id = '$id'";
        $sql = mysqli_query($this->connection,$query);
        if($sql){
            if(mysqli_num_rows($sql) > 0){
                $row = mysqli_fetch_all($sql,MYSQLI_ASSOC);
                return $row;
            }
            else{
                $row = array("id"=>"no data found","Name"=>"no data found","Address"=>"no data found","CNIC"=>"no data found","CellNo"=>"no data found");
                return $row;
            }
        }
    }

    function insert_Employee($name,$cellno,$cnic,$address,$department,$position,$joining){
        $query = "INSERT INTO employeedetail (Name,Address,CNIC,Cellno,Department,Position,Start_date)
                    VALUES ('$name','$address','$cnic','$cellno','$department','$position','$joining')";
        
        if($this->connection->query($query)){
            echo "New record created successfully";
        } else {
            echo "Error: " . $query . "<br>" . $this->connection->error;
        }
        
    }

    function edit_Employee($id,$name,$cellno,$cnic,$address,$department,$position,$joining){
        $query = "UPDATE employeedetail SET Name='$name', Address ='$address' , CNIC='$cnic',Cellno='$cellno',Department='$department',Position='$position',Start_date='$joining' WHERE id='$id' ";
        
        if($this->connection->query($query)){
            echo "New record created successfully";
        } else {
            echo "Error: " . $query . "<br>" . $this->connection->error;
        }
        
    }

    function delete_Employee($id){
        $query = "DELETE FROM employeedetail WHERE id = '$id'";

        if($this->connection->query($query)){
            echo "Record deleted successfully";
        } else {
            echo "Error: ".$query."<br>".$this->connection->error;
        }
    }

    function get_Organization(){
        $query = "SELECT * FROM organization";
        $sql = mysqli_query($this->connection,$query);
        if($sql){
            if(mysqli_num_rows($sql) > 0){
                $row = mysqli_fetch_all($sql,MYSQLI_ASSOC);
                return $row;
            }
            else{
                return "Error";
            }
        }
    }

    function get_Org($id){
        $query = "SELECT * FROM organization Where id = '$id'";
        $sql = mysqli_query($this->connection,$query);
        if($sql){
            if(mysqli_num_rows($sql) > 0){
                $row = mysqli_fetch_all($sql,MYSQLI_ASSOC);
                return $row;
            }
            else{
                return "Error";
            }
        }
    }

    function insert_Organization($name,$nick,$address,$email,$focal_person,$contact){
        $query = "INSERT INTO organization (nick,name,address,email,focal_person,contact)
                    VALUES ('$nick','$name','$address','$email','$focal_person','$contact')";
        
        if($this->connection->query($query)){
            echo "New record created successfully";
        } else {
            echo "Error: " . $query . "<br>" . $this->connection->error;
        }
        
    }

    function edit_Organization($id,$name,$nick,$address,$email,$focal_person,$contact){
        $query = "UPDATE organization SET nick='$nick',name='$name',address='$address',email='$email',focal_person='$focal_person',contact='$contact' WHERE id='$id'";
        
        if($this->connection->query($query)){
            echo "New record created successfully";
        } else {
            echo "Error: " . $query . "<br>" . $this->connection->error;
        }
        
    }

    function delete_Organization($id){
        $query = "DELETE FROM organization WHERE id = '$id'";

        if($this->connection->query($query)){
            echo "Record deleted successfully";
        } else {
            echo "Error: ".$query."<br>".$this->connection->error;
        }
    }

    function get_Tenders(){
        $query = "SELECT * FROM organizationtenders";
        $sql = mysqli_query($this->connection,$query);
        if($sql){
            if(mysqli_num_rows($sql) > 0){
                $row = mysqli_fetch_all($sql,MYSQLI_ASSOC);
                return $row;
            }
            else{
                return "Error";
            }
        }
    }

    function get_Tenders_Org($oid){
        $query = "SELECT * FROM organizationtenders WHERE oid = '$oid'";
        $sql = mysqli_query($this->connection,$query);
        if($sql){
            if(mysqli_num_rows($sql) > 0){
                $row = mysqli_fetch_all($sql,MYSQLI_ASSOC);
                return $row;
            }
            else{
                return "Error";
            }
        }
    }

    function get_Tender($id){
        $query = "SELECT * FROM organizationtenders WHERE id = '$id'";
        $sql = mysqli_query($this->connection,$query);
        if($sql){
            if(mysqli_num_rows($sql) > 0){
                $row = mysqli_fetch_all($sql,MYSQLI_ASSOC);
                return $row;
            }
            else{
                return "Error";
            }
        }
    }

    function insert_Tender($name,$post,$oid,$status,$start,$end){
        $query = "INSERT INTO organizationtenders (oid,post,status,jobs,start_date,end_date)
                    VALUES ('$oid','$name','$status','$post','$start','$end')";
        
        if($this->connection->query($query)){
            echo "New record created successfully";
        } else {
            echo "Error: " . $query . "<br>" . $this->connection->error;
        }
        
    }

    function edit_Tender($id,$name,$post,$status,$start,$end){
        $query = "UPDATE organizationtenders SET post ='$name',status='$status',jobs='$post',start_date='$start',end_date='$end' WHERE id='$id'";
        
        if($this->connection->query($query)){
            echo "New record created successfully";
        } else {
            echo "Error: " . $query . "<br>" . $this->connection->error;
        }
        
    }

    function delete_Tender($id){
        $query = "DELETE FROM organizationtenders WHERE id = '$id'";

        if($this->connection->query($query)){
            echo "Record deleted successfully";
        } else {
            echo "Error: ".$query."<br>".$this->connection->error;
        }
    }

    function get_Jobs(){
        $query = "SELECT * FROM organizationjobs";
        $sql = mysqli_query($this->connection,$query);
        if($sql){
            if(mysqli_num_rows($sql) > 0){
                $row = mysqli_fetch_all($sql,MYSQLI_ASSOC);
                return $row;
            }
            else{
                return "Error";
            }
        }
    }

    function get_Job($id){
        $query = "SELECT * FROM organizationjobs WHERE id='$id'";
        $sql = mysqli_query($this->connection,$query);
        if($sql){
            if(mysqli_num_rows($sql) > 0){
                $row = mysqli_fetch_all($sql,MYSQLI_ASSOC);
                return $row;
            }
            else{
                return "Error";
            }
        }
    }

    function get_Job_Tender($tid){
        $query = "SELECT * FROM organizationjobs WHERE tid='$tid'";
        $sql = mysqli_query($this->connection,$query);
        if($sql){
            if(mysqli_num_rows($sql) > 0){
                $row = mysqli_fetch_all($sql,MYSQLI_ASSOC);
                return $row;
            }
            else{
                return "Error";
            }
        }
    }

    function insert_Jobs($tid,$post,$oid,$vacancies){
        $query = "INSERT INTO organizationjobs (oid,post,tid,vacancies)
                    VALUES ('$oid','$post','$tid','$vacancies')";
        
        if($this->connection->query($query)){
            echo "New record created successfully";
        } else {
            echo "Error: " . $query . "<br>" . $this->connection->error;
        }
        
    }

    function edit_Jobs($id,$post,$vacancies){
        $query = "UPDATE organizationjobs SET post='$post' vacancies='$vacancies' WHERE id='$id'";
        
        if($this->connection->query($query)){
            echo "New record created successfully";
        } else {
            echo "Error: " . $query . "<br>" . $this->connection->error;
        }
        
    }

    function delete_Job($id){
        $query = "DELETE FROM organizationjobs WHERE id = '$id'";

        if($this->connection->query($query)){
            echo "Record deleted successfully";
        } else {
            echo "Error: ".$query."<br>".$this->connection->error;
        }
    }

    function get_All_Candidates(){
        $query = "SELECT organization.name AS organizationname,organizationjobs.post,organizationusers.* FROM organizationusers INNER JOIN organization ON organizationusers.id=organization.id INNER JOIN organizationjobs ON organizationusers.jid=organizationjobs.id";
        $sql = mysqli_query($this->connection,$query);
        if($sql){
            if(mysqli_num_rows($sql) > 0){
                $row = mysqli_fetch_all($sql,MYSQLI_ASSOC);
                return $row;
            }
            else{
                return "Error";
            }
        }
    }

    function get_Candidate($id){
        $query = "SELECT * FROM organizationusers WHERE id='$id'";
        $sql = mysqli_query($this->connection,$query);
        if($sql){
            if(mysqli_num_rows($sql) > 0){
                $row = mysqli_fetch_all($sql,MYSQLI_ASSOC);
                return $row;
            }
            else{
                return "Error";
            }
        }
    }

    function get_Candidate_Org($jid){
        $query = "SELECT * FROM organizationusers WHERE jid='$jid'";
        $sql = mysqli_query($this->connection,$query);
        if($sql){
            if(mysqli_num_rows($sql) > 0){
                $row = mysqli_fetch_all($sql,MYSQLI_ASSOC);
                return $row;
            }
            else{
                return "Error";
            }
        }
    }

    function delete_Candidate($id){
        $query = "DELETE FROM organizationusers WHERE id = '$id'";

        if($this->connection->query($query)){
            echo "Record deleted successfully";
        } else {
            echo "Error: ".$query."<br>".$this->connection->error;
        }
    }

    function get_All_Tenders(){
        $query = "SELECT organization.name,organization.focal_person,organization.contact,organizationtenders.* FROM organizationtenders INNER JOIN organization ON organizationtenders.oid=organization.id";
        $sql = mysqli_query($this->connection,$query);
        if($sql){
            if(mysqli_num_rows($sql) > 0){
                $row = mysqli_fetch_all($sql,MYSQLI_ASSOC);
                return $row;
            }
            else{
                return "Error";
            }
        }
    }

}
?>