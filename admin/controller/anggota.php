<?php
$con->auth();
$conn=$con->koneksi();
switch (@$_GET['page']) {
    case 'add':
        $content = "views/anggota/tambahanggota.php";
        include_once 'views/template.php';
    break;
    case 'save':
        if($_SERVER['REQUEST_METHOD']=="POST"){
            //validasi
            if(!is_numeric($_POST['id_anggota'])){
                $err['id_anggota']="Id Anggota Wajib Angka";
            }
            if (empty($_POST['nama'])) {
                $err['nama'] = "Nama Wajib Diisi";
            }
            if (empty($_POST['alamat'])) {
                $err['alamat'] = "Alamat Wajib Diisi";
            }
            if (empty($_POST['jenis_kelamin'])) {
                $err['jenis_kelamin'] = "Alamat Wajib Diisi";
            }
            
            
            if(!isset($err)){
                $password = md5($_POST['password']);
                //save
                $sql = "INSERT INTO anggota (id_anggota, username, password, nama_anggota, jenis_kelamin, tgl_lahir, alamat, tgl_daftar)
                VALUES ('$_POST[id_anggota]','$_POST[username]','$password','$_POST[nama_anggota]','$_POST[jenis_kelamin]','$_POST[tgl_lahir]','$_POST[alamat]','$_POST[tgl_daftar]')";
                    if ($conn->query($sql) === TRUE) {
                        header('Location: ' . $con->site_url() . '/admin/index.php?mod=anggota');
                    } else {
                        $err['msg'] = "Error: " . $sql . "<br>" . $conn->error;
                    }
            }
        }else{
            $err['mgs']="Tidak Diijinkan";
        }
        if(isset($err)){
            $content = "views/anggota/tambahanggota.php";
            include_once 'views/template.php';
        }
    break;
    case 'update':
        $password = md5($_POST['password']);
        $sql = "UPDATE anggota SET id_anggota='$_POST[id_anggota]',username='$_POST[username]',password='$password',nama_anggota='$_POST[nama_anggota]',
        jenis_kelamin='$_POST[jenis_kelamin]',tgl_lahir='$_POST[tgl_lahir]',alamat='$_POST[alamat]', tgl_daftar = '$_POST[tgl_daftar]' WHERE id_anggota='$_POST[id_anggota]'";
        if ($conn->query($sql) === TRUE) {
            header('Location: ' . $con->site_url() . '/admin/index.php?mod=anggota');
        } else {
            $err['msg'] = "Error: " . $sql . "<br>" . $conn->error;
        }
        if (isset($err)) {
            $content = "views/petugas/updateanggota.php";
            include_once 'views/template.php';
        }
    break;
    case 'edit':
        $anggota = "SELECT * FROM anggota WHERE md5(id_anggota)='$_GET[id]'";
        $anggota = $conn->query($anggota);
        $_POST = $anggota->fetch_assoc();
        $content = "views/anggota/updateanggota.php";
        include_once 'views/template.php';
    break;
    case 'delete':
        $anggota = "DELETE from anggota WHERE md5(id_anggota)='$_GET[id]'";
        $anggota = $conn->query($anggota);
        header('Location: ' . $con->site_url() . '/admin/index.php?mod=anggota');
        break;
    default:
        $sql = "SELECT * FROM anggota";
        $anggota=$conn->query($sql);
        $conn->close();
        $content="views/anggota/tampilanggota.php";
        include_once 'views/template.php';
}
