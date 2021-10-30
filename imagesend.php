<?php
include 'connection.php';
$cnic = '3740592204905';
echo $cnic;$msg = "";


if ($_FILES["uploadfile"]["size"] > 50) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
else {

    
    $filename = $_FILES['uploadfile']['name'];
    $filetmpname = $_FILES['uploadfile']['tmp_name'];
    $folder = 'images/';
move_uploaded_file($filetmpname,$folder.$filename);

echo $cnic;
    //storind the data in your database
    $sql = "INSERT INTO picture (cnic, img_dir)
    VALUES ('$cnic', '$filename')";
    
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
    

?>