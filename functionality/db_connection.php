<?php
global $connect;
$host="localhost";
$port=3306;
$dbname="curiculum";
$admin="root";
$passw="";

try{
    global $connect=new PDO("mysql: host=$host; port=$port; dbname=$dbname", $admin, $passw);
    //echo "database connected";
}
catch (PDOException $e){
    echo "no connection because of ".$e->getMessage();
}


