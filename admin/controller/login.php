<?php
if(isset($_POST['nama'])){
    //action
    $conn=$con->koneksi();
    $nama= $_POST['nama']; $id = md5($_POST['id']);
    $sql = "SELECT * FROM login_petugas WHERE Password = '$id' AND Nama= '$nama'";
    $user = $conn->query($sql);
    if($user->num_rows > 0){
        $sess = $user->fetch_array();
        $_SESSION['login']['id'] = $sess['Id_Petugas'];
        $_SESSION['login']['nama']=$sess['Nama'];
        //$_SESSION['login']['alamat'] = $sess['Alamat'];
        //$_SESSION['login']['jk'] = $sess['Jenis_Kelamin'];
        //$_SESSION['login']['notelp'] = $sess['No_telp'];
        $url = "http://localhost:8080/siperpus";
        header('Location: http://localhost:8080/siperpus/admin/index.php?mod=petugas');
    }else {
        $msg="User dan Password Tidak Ditemukan";
        include_once 'views/v_login.php';
    }
}else {
    include_once 'views/v_login.php';
}
?>