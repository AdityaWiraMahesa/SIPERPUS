<?php
include_once '../config/Config.php';
$con = new Config();
if($con->auth()){
    //fungsi
    switch (@$_GET['mod']){
        case 'petugas':
            include_once 'controller/petugas.php';
            break;
        default:
            include_once 'controller/home.php';
            break;
    }
}else{
    //login
    include_once 'controller/login.php';
}
?>