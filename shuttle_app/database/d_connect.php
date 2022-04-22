<?php 
$server = "localhost";
$username = "root";
$password = "";
$database = "shuttle_service";

$connect = mysqli_connect($server,$username,$password,$database);

if(!$connect){

   dir("Failed to connect with the server. Sorry".mysqli_connect_error()) ;
}

?>