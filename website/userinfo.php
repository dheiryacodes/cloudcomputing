<?php

$con = mysqli_connect('localhost','root');

if($con){
    echo"Connection successful";
}else{
  echo"No connection";
}

mysqli_select_db($con ,'userdata');

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$room = $_POST['room'];

$query = "insert into userinfodata (user, email, mobile, room) values('$user','$email','$mobile','$room')";


echo "$query";

mysqli_query( $con, $query);

header('location: index.php')



?>