<?php
include_once '../config/Config.php';
$con = new Config();
if($con->auth()){
    //fungsi
    switch (@$_GET['mod']){
        case 'admin':
            include_once 'controller/admin.php';
            break;
        case 'petugas':
            include_once 'controller/petugas.php';
            break;
        case 'anggota':
            include_once 'controller/anggota.php';
            break;
        case 'buku':
            include_once 'controller/buku.php';
            break;
        case 'peminjaman':
            include_once 'controller/pinjam.php';
            break;
        case 'pengembalian':
            include_once 'controller/kembali.php';
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
