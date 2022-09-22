<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$dbName = 'books';

$con = mysqli_connect($host, $user, $pass, $dbName);
if(isset($con)){
    echo 'yes';
}else{
    echo 'no';
}