<?php
$con->auth();
$conn=$con->koneksi();
switch (@$_GET['page']) {
    case 'add':
        $content = "views/petugas/tambah.php";
        include_once 'views/template.php';
    break;
    case 'save':
        if($_SERVER['REQUEST_METHOD']=="POST"){
            //validasi
            if(!is_numeric($_POST['id_petugas'])){
                $err['id_petugas']="Id Petugas Wajib Angka";
            }
            if (empty($_POST['nama'])) {
                $err['nama'] = "Nama Wajib Diisi";
            }
            if (empty($_POST['alamat'])) {
                $err['alamat'] = "Alamat Wajib Diisi";
            }
            if (empty($_POST['no_telp'])) {
                $err['no_telp'] = "No.Telp Wajib Diisi";
            }

            if(!isset($err)){
                if(!empty($_POST['petugas'])){
                    $sql= " UPDATE petugas SET id_petugas='$_POST[id_petugas]',nama='$_POST[nama]',alamat='$_POST[alamat]',jenis_kelamin='$_POST[jenis_kelamin]',no_telp='$_POST[no_telp]'";
                }else{
                    $sql = "INSERT INTO petugas (id_petugas, nama, alamat, jenis_kelamin, no_telp)
                    VALUES ('$_POST[id_petugas]','$_POST[nama]','$_POST[alamat]','$_POST[jenis_kelamin]','$_POST[no_telp]')";
                }
                if ($conn->query($sql) === TRUE) {
                    header('Location: ' . $con->site_url() . '/admin/index.php?mod=petugas');
                } else {
                    $err['msg'] = "Error: " . $sql . "<br>" . $conn->error;
                }
            }
        }else{
            $err['mgs']="Tidak Diijinkan";
        }
        if(isset($err)){
            $content = "views/petugas/tambah.php";
            include_once 'views/template.php';
        }
    break;
    case 'edit':
        $petugas= "SELECT * FROM petugas where md5(id_petugas)='$_GET[id]'";
        $petugas=$conn->query($petugas);
        $petugas=$petugas->fetch_assoc();
        //var_dump($petugas);
        $content = "views/petugas/update.php";
        include_once 'views/template.php';
    break;
    case 'delete':
        $petugas ="DELETE FROM login_petugas WHERE password ='$_GET[id]";
        $petugas = $conn->query($petugas);
        header('Location: ' . $con->site_url() . '/admin/index.php?mod=petugas');
        break;
    default:
        $sql = "SELECT * FROM petugas";
        $petugas=$conn->query($sql);
        $conn->close();
        $content="views/petugas/tampil.php";
        include_once 'views/template.php';
}
?>
