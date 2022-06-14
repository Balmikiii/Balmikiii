<?php

$con = new mysqli("localhost","root","");
   if($con->connect_errno > 0){
         die('Unable to connect to database [' . $con->connect_error . ']');  } 
     
	 $con->query("CREATE DATABASE IF NOT EXISTS sahil");
	 
             mysqli_select_db($con,"sahil");

             $balmiki="CREATE TABLE IF NOT EXISTS id (
            id int(11) NOT NULL auto_increment,
             name varchar(300)NOT NULL,
             fname varchar(300)NOT NULL,
             dob varchar(100)NOT NULL,
             gender varchar(300)NOT NULL,
             email varchar(255)NOT NULL,
             contact varchar(1000)NOT NULL,
             PRIMARY KEY(id) )";
           $con->query($balmiki);


if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $fname = $_POST['fname'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
}

$mydb = "insert into id (name,fname,dob,gender,email,contact)
 value('$name','$fname','$dob','$gender','$email','$contact')";

 $query = mysqli_query ($con,$mydb);
 echo "success";
 
?>

