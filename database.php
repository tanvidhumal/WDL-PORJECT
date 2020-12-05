<?php

$servername="localhost";
$username="root";
$password="";
$dbname="mybank";

$conn=new mysqli($servername,$username,$password,$dbname);

if ($conn->connect_error){
	die("Connection Failed ".$conn->connect_error);

}

?>