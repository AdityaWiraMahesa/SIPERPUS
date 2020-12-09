<?php
$con->auth();
$conn=$con->koneksi();
switch (@$_GET['page']) {
    case 'add':
        $content = "views/admin/tambahadmin.php";
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
                $sql = "INSERT INTO admin (id_admin, username, password, nama_admin, jenis_kelamin, alamat, no_telp)
                VALUES ('$id','$_POST[username]','$password','$_POST[nama_admin]','$_POST[jenis_kelamin]','$_POST[alamat]','$_POST[no_telp]')";
                    if ($conn->query($sql) === TRUE) {
                        header('Location: ' . $con->site_url() . '/admin/index.php?mod=admin');
                    } else {
                        $err['msg'] = "Error: " . $sql . "<br>" . $conn->error;
                    }
            }
        }else{
            $err['mgs']="Tidak Diijinkan";
        }
        if(isset($err)){
            $content = "views/admin/tambahadmin.php";
            include_once 'views/template.php';
        }
    break;    
    case 'update':
        $password = md5($_POST['password']);
        $sql = "UPDATE admin SET id_admin='$_POST[id_admin]',username='$_POST[username]',password='$password',nama_admin='$_POST[nama_admin]',jenis_kelamin='$_POST[jenis_kelamin]',alamat='$_POST[alamat]',no_telp='$_POST[no_telp]' where id_admin='$_POST[id_admin]'";
        if ($conn->query($sql) === TRUE) {
            header('Location: ' . $con->site_url() . '/admin/index.php?mod=admin');
        } else {
            $err['msg'] = "Error: " . $sql . "<br>" . $conn->error;
        }
        if (isset($err)) {
            $content = "views/admin/tampiladmin.php";
            include_once 'views/template.php';
        }
    
    break;
    case 'edit':
        $admin = "SELECT * FROM admin WHERE md5(id_admin)='$_GET[id]'";
        $admin = $conn->query($admin);
        $_POST = $admin->fetch_assoc();
        $content = "views/admin/updateadmin.php";
        include_once 'views/template.php';
    break;
    case 'delete':
        $admin = "DELETE from admin WHERE md5(id_admin)='$_GET[id]'";
        $admin = $conn->query($admin);
        header('Location: ' . $con->site_url() . '/admin/index.php?mod=admin');
        break;
    default:
        $sql = "SELECT * FROM admin";
        $admin=$conn->query($sql);
        $conn->close();
        $content="views/admin/tampiladmin.php";
        include_once 'views/template.php';
}
?>
