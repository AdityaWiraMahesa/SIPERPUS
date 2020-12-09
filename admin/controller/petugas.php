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
            /* if(!is_numeric($_POST['id_petugas'])){
                $err['id_Petugas']="Id Petugas Wajib Angka";
            } */
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
                $password = md5($_POST['password']);
                /* $query = mysqli_query($koneksi, "SELECT max(Id_Petugas) as Id_PetugasTerbesar FROM petugas");
                $data = mysqli_fetch_array($query);
                $id = $data['Id_PetugasTerbesar'];
                $urutan = (int) substr($id, 3, 3);
                $urutan++;
                $id = sprintf("%04s", $urutan); */
                //save
                $sql = "INSERT INTO petugas (id_petugas, nama, username, password, alamat, jenis_kelamin, no_telp)
                VALUES ('$id','$_POST[nama]','$_POST[username]','$password','$_POST[alamat]','$_POST[jenis_kelamin]','$_POST[no_telp]')";
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
    case 'update':
        $password = md5($_POST['password']);
        $sql = "UPDATE petugas SET id_petugas='$_POST[id_petugas]',username='$_POST[username]',password='$password',nama='$_POST[nama]',
        alamat='$_POST[alamat]',jenis_kelamin='$_POST[jenis_kelamin]',no_telp='$_POST[no_telp]' where id_petugas='$_POST[id_petugas]'";
        if ($conn->query($sql) === TRUE) {
            header('Location: ' . $con->site_url() . '/admin/index.php?mod=petugas');
        } else {
            $err['msg'] = "Error: " . $sql . "<br>" . $conn->error;
        }
        if (isset($err)) {
            $content = "views/petugas/update.php";
            include_once 'views/template.php';
        }
    
    break;
    case 'edit':
        $petugas = "SELECT * FROM petugas WHERE md5(id_petugas)='$_GET[id]'";
        $petugas = $conn->query($petugas);
        $_POST = $petugas->fetch_assoc();
        $content = "views/petugas/update.php";
        include_once 'views/template.php';
    break;
    case 'delete':
        $petugas = "DELETE from petugas WHERE md5(id_petugas)='$_GET[id]'";
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
