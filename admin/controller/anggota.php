<?php
$con->auth();
$conn=$con->koneksi();
switch (@$_GET['page']) {
    case 'add':
        $content = "views/anggota/tambah.php";
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
                $password = md5($_POST['id_login']);
                $sql1 = "INSERT INTO petugas (id_petugas, nama, alamat, jenis_kelamin, no_telp)
                VALUES ('$_POST[id_petugas]','$_POST[nama]','$_POST[alamat]','$_POST[jenis_kelamin]','$_POST[no_telp]')";
                
                $sql2 = "INSERT INTO login_petugas (id_petugas, id_login, username, password, active)
                VALUES ('$_POST[id_petugas]','$_POST[id_login]','$_POST[username]','$password','Y')";
                if ($conn->query($sql1) === TRUE) {
                    header('Location: ' . $con->site_url() . '/admin/index.php?mod=petugas');
                }
                if ($conn->query($sql2) === TRUE) {
                    header('Location: ' . $con->site_url() . '/admin/index.php?mod=petugas');
                } 
                else {
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
        $petugas = "select * from petugas where md5(id_petugas)='$_GET[id]'";
        $petugas = $conn->query($petugas);
        $_POST = $petugas->fetch_assoc();
        var_dump($_POST);
        //$_POST['no_id'] = $_POST['no_peserta_idi'];
        //$_POST['id_dokter'] = md5($_POST['id_dokter']);
        //var_dump($dokter);
        //$petugas="SELECT * FROM login_petugas where md5(Id_Petugas)='$_GET[id]'";
        //$petugas2= "SELECT * FROM login_petugas where md5(Id_Petugas)='$_GET[id]'";
        //$petugas=$conn->query($petugas);
        //$petugas2 = $conn->query($petugas2);
        //$_POST= $petugas->fetch_assoc();
        //$_POST = $petugas2->fetch_assoc();
        //var_dump($_POST);
        //var_dump($petugas2);
        //$id = $_GET['id'];
        //$sql = "SELECT * FROM Petugas where id_petugas = " . $id;
        //$result = $result = $conn -> query($sql);
        //$petugas = $result->fetch_array();

        //var_dump($petugas);
        //if ($result-> num_rows < 1){
        //    die("data tidak tersedia");
        //    return;
        //}
        $content = "views/petugas/update.php";
        include_once 'views/template.php';
    break;
    case 'delete':
        $petugas ="DELETE FROM login_petugas WHERE password ='$_GET[id]";
        $petugas = $conn->query($petugas);
        header('Location: ' . $con->site_url() . '/admin/index.php?mod=petugas');
        break;
    default:
        $sql = "SELECT * FROM anggota";
        $petugas=$conn->query($sql);
        $conn->close();
        $content="views/anggota/tampilanggota.php";
        include_once 'views/template.php';
}
?>