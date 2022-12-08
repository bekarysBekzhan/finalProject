<?php
$servername = "localhost";
$DBMSuser = "root";
$DBMSpassword = "";
$DBMSname = "webdatabase";

$conn = mysqli_connect($servername, $DBMSuser, $DBMSpassword, $DBMSname);

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}