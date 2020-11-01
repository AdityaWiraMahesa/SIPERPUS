<?php
if(isset($_POST['username'])){
    //action
    $conn=$con->koneksi();
    $username= $_POST['username']; $id = md5($_POST['password']);
    $sql = "SELECT * FROM petugas WHERE password = '$id' AND username= '$username'";
    $user = $conn->query($sql);
    if($user->num_rows > 0){
        $sess = $user->fetch_array();
        $_SESSION['login']['id'] = $sess['Id_Petugas'];
        $_SESSION['login']['username']=$sess['Username'];
        $url = "http://localhost:8080/siperpus";
        header('Location: http://localhost:8080/siperpus/admin/index.php');
    }else {
        $msg="User dan Password Tidak Ditemukan";
        include_once 'views/v_login.php';
    }
}else {
    include_once 'views/v_login.php';
}
?>
