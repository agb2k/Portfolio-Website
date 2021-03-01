<?php
$email = $_POST['email'];
$phone = $_POST['phoneNum'];
$enquiry = $_POST['enquiry'];

$host="sql306.epizy.com";
$dbUsername = "epiz_28048002";
$dbPassword = "UEGe9kQ9Qo71";
$dbName = "epiz_28048002_portfolio";

// Create connection
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

if(mysqli_connect_error()){
    die("Connect error (". mysqli_connect_errno().")" . mysqli_connect_error());
} else {
    $INSERT = "INSERT INTO enquiry (email, phone, enquiry) VALUES ('$email', '$phone', '$enquiry')";
    if($conn->query($INSERT)){
        echo "New record is inserted";
        header('Location: http://agb2k.rf.gd/');
        exit;
    }else{
        echo "Error". " $email $phone $enquiry";
    }
    $conn->close();
}