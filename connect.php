<?php
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$message = $_POST['message'];
$send = $_POST['send'];
//database connection
$con = mysqli_connect('localhost','root','','contact');
if($conn->connect_error){
    die('Connection Failed  :' $conn->connect_error);
}
else{
    $stmt = $conn->prepare("INSERT INTO contact us(Full name,Email,Message)values(?,?,?) ");
    $stmt->bind_param("sss",$fullname,$email,$message);
    $stmt->execute();
    echo "contact successfully..."  ;
    $stmt->close();
    $conn->close();
    $run=mysqli_query($conn.$stmt);
}
?>