<?php
include_once 'db_connection.php';

include_once '../pages/login.php';

if(isset($_POST["frmLogin"])){
    $userLogin=$_POST["inpLog"];
    $userPass=$_POST["inpPass"];

    $findUser="select id from logins where login= :userLogin";
    $state=$connect->prepare($findUser);
    $state->bindValue(":userLogin", $userLogin);
    $state->bindValue(":userPass", $userPass);
    $state->execute($findUser);

    if($state->rowCount()>0){
        $userData=$state->fetch();
        $thisLogin=$userData["login"];
        $thisPass=$userData["password"];
        if($thisLogin==$userLogin && $thisPass==$userPass){
            // $pr=new OAuthProvider();
            // $t=$pr->generateToken(8);
            $thisToken=$$thisLogin;
            setcookie("token", $thisToken, 900);
        }
        else{
            include_once 'pages/register.php';
        }
    }
}




//Create database
function createDataBase(){
    global $connect;
    try{
    $sql="create database curiculum_db";
    $connect->exec($sql);
    }
    catch(PDOException $ex){
        echo "database error - ".$ex->getMessage();
    }
}

//create
function createTableLog(){
    
    try{
        global $connect;
        $sqlLogin="create table logins (
        id integer auto_increment primary key, 
        login varchar(30) unique, 
        pasword varchar(50), 
        isactive bool null, 
        token varchar(50) null
        user_id integer null,
        primary key(id));";

        $connect->exec($sqlLogin);
    }
    catch(PDOException $ex){
        echo "Warning table logins: ".$ex->getMessage();
    }

}
function createTableUsr(){
try{
    global $connect;
    $sqlLogin="create table users (
        id integer auto_increment primary key, 
        name varchar(50), 
        surname varchar(50) null,
        phone varchar(20) null,
        email varchar(50) null,
        adress varchar(80) null,
        linked varchar(50) null,
        university varchar(50) null,
        grade varchar(50) null,
        profile varchar(350) null,
        experiance varchar(350) null,
        photo varbinary null,
        login_id foreign key references (logins.id));"


        $connect->exec($sqlLogin);
}
catch(PDOException $ex){
    echo "Warning table users: ".$ex->getMessage();
}
}

function createTableSkill(){
try{
    global $connect;
    $sqlSkill="create table skills (
        id integer auto_increment primary key, 
        name varchar(50), 
        user_id foreign key references (users.id));"

        $connect->exec($sqlSkill);
}
catch(PDOException $ex){
    echo "Warning table skills: ".$ex->getMessage();
}
}

function seederLog(){
    if(){
        
    }
}