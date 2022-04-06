<?php

$host = 'localhost';
$username = 'root';
$password = '';
$dbName = 'personal';
$connection = mysqli_connect($host, $username, $password, $dbName);

if(!$connection){
    echo("database not connected");
    die();
}
if(!empty($_POST)){
    $name=$_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $query="INSERT INTO form( name,email,subject,message) VALUES ('$name','$email','$subject','$message')";
    $response=mysqli_query($connection, $query);
    if($response){
        header(header:'Location:../index.html');
    }else{
        echo("There was a problem");
    }
}

$sql = "SELECT  * FROM form";
$studentResponse = mysqli_query($connection, $sql);
