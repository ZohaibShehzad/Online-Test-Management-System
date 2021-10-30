<?php
    include 'connection.php';
    echo $cnic = $_POST['p_cnic'];
    echo $name = $_POST['name'];
    echo $father_name = $_POST['fatherName'];
   echo $dob = $_POST['dob'];
    echo $gender = $_POST['ogender'];
     echo $disability = $_POST['dis'];
    echo $email = $_POST['email'];
    echo $postal_address = $_POST['postaladdress'];
    echo $city = $_POST['city'];
    echo $district = $_POST['district'];
    echo $telephone = $_POST['tel'];
    echo $cellno = $_POST['cell'];
   echo $religion = $_POST['rel'];
    echo $serving = $_POST['service']; 
    
    $sql = "UPDATE `userslogin` SET `button`=1 WHERE cnic=$cnic";
 mysqli_query($conn, $sql);
 
    $sql = "INSERT INTO personalinfo (cnic,name, father_name, dob, gender, disability, email, postal_address, city, district, telephone, cellno, religion, serving)
VALUES ('$cnic', '$name', '$father_name', '$dob', '$gender', '$disability', '$email', '$postal_address', '$city', '$district', '$telephone', '$cellno', '$religion','$serving')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
} 



 
    $filename = $_FILES['uploadfile']['name'];
    $filetmpname = $_FILES['uploadfile']['tmp_name'];
    $folder = 'images/';
move_uploaded_file($filetmpname,$folder.$filename);

$fname = $cnic.$filename;
    echo $filename;
    //storind the data in your database
    $sql = "INSERT INTO picture (cnic, img_name,img_dir)
    VALUES ('$cnic', '$fname' , '$folder')";
    
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    


if($_POST['sscdegree']){
    $degree = $_POST['sscdegree'];
    $institute = $_POST['sscinstitute'];
    $major = $_POST['sscmajor'];
    $passingyear = $_POST['sscpassingyear'];
    $totalmarks = $_POST['ssctotalmarks'];
    $marksobtained = $_POST['sscmarksobtained'];
    $grade = $_POST['sscgrade'];
$sql = "INSERT INTO academic (cnic, degree, institute, major, passingyear, totalmarks, marksobtained, grade)
VALUES ('$cnic', '$degree', '$institute', '$major', '$passingyear', '$totalmarks', '$marksobtained', '$grade')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}



if($_POST['hsscdegree']){
    $degree = $_POST['hsscdegree'];
    $institute = $_POST['hsscinstitute'];
    $major = $_POST['hsscmajor'];
    $passingyear = $_POST['hsscpassyear'];
    $totalmarks = $_POST['hssctotalmarks'];
    $marksobtained = $_POST['hsscmarksobtained'];
    $grade = $_POST['hsscgrade'];
$sql = "INSERT INTO academic (cnic, degree, institute, major, passingyear, totalmarks, marksobtained, grade)
VALUES ('$cnic', '$degree', '$institute', '$major', '$passingyear', '$totalmarks', '$marksobtained', '$grade')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}


if($_POST['bscdegree']){
    $degree = $_POST['bscdegree'];
    $institute = $_POST['bscinstitute'];
    $major = $_POST['bscmajor'];
    $passingyear = $_POST['bscpassyear'];
    $totalmarks = $_POST['bsctotalmarks'];
    $marksobtained = $_POST['bscmarksobtained'];
    $grade = $_POST['bscgrade'];
$sql = "INSERT INTO academic (cnic, degree, institute, major, passingyear, totalmarks, marksobtained, grade)
VALUES ('$cnic', '$degree', '$institute', '$major', '$passingyear', '$totalmarks', '$marksobtained', '$grade')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}

if($_POST['mscdegree']){
    $degree = $_POST['mscdegree'];
    $institute = $_POST['mscinstitute'];
    $major = $_POST['mscmajor'];
    $passingyear = $_POST['mscpassyear'];
    $totalmarks = $_POST['msctotalmarks'];
    $marksobtained = $_POST['mscmarksobtained'];
    $grade = $_POST['mscgrade'];
$sql = "INSERT INTO academic (cnic, degree, institute, major, passingyear, totalmarks, marksobtained, grade)
VALUES ('$cnic', '$degree', '$institute', '$major', '$passingyear', '$totalmarks', '$marksobtained', '$grade')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}


if($_POST['phddegree']){
    $degree = $_POST['phddegree'];
    $institute = $_POST['phdinstitute'];
    $major = $_POST['phdmajor'];
    $passingyear = $_POST['phdpassyear'];
    $totalmarks = $_POST['phdtotalmarks'];
    $marksobtained = $_POST['phdmarksobtained'];
    $grade = $_POST['phdgrade'];
$sql = "INSERT INTO academic (degree, institute, major, passingyear, totalmarks, marksobtained, grade,cnic)
VALUES ( '$degree', '$institute', '$major', '$passingyear', '$totalmarks', '$marksobtained', '$grade' ,'$cnic')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}

if($_POST['namelanguage1']){
    $languagename = $_POST['namelanguage1'];
    $lwrite1 = $_POST['lwrite1'];
    $lread1 = $_POST['lread1'];
    $lspeak1 = $_POST['lspeak1'];
    $diploma = $_POST['ldiploma1'];
 
$sql = "INSERT INTO language (l_name, l_read, l_write, l_speak, certificate, cnic)
VALUES ( '$languagename', '$lread1', '$lwrite1', '$lspeak1', '$diploma','$cnic')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}

//the language portion and picture portion is left.
//enter the location before .php. this will be the page where the user will be redirected after submitting.
header("Location: status.php"); 
?>