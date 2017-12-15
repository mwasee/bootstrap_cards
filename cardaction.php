<?php

$hostname="localhost";
$username="root";
$password="";
$databasename="card";

$conn=new mysqli($hostname,$username,$password,$databasename);

$name=$_POST['name'];
$father=$_POST['father'];
$address=$_POST['address'];
$email=$_POST['email'];
$contact=$_POST['contact'];
//$photo=$_POST['photo'];

$target_dir = "upload/";

$target_file = $target_dir . basename($_FILES['photo']['name']);

$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

$status=move_uploaded_file($_FILES['photo']['tmp_name'], $target_file);

$a="insert into library (name,fathername,address,email,contact,photo) values('$name','$father','$address','$email',$contact,'$target_file')";


if($conn->query($a))
{
echo "<b>SUCCESSFULLY ROW INSERTED. {$status}<br></b>";
}
else{
    echo "OOOPPPS! TRY AGAIN.{$status}<br>";
    echo $conn->error;
    echo $a;
}