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
            if (empty($_POST['username'])){
                $err['username']="Username Wajib Diisi";
            }
            if (empty($_POST['password'])) {
                $err['password'] = "Password Wajib Diisi";
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

            //validasi file
            if (!empty($_FILES['fileToUpload']["name"])) {
                $target_dir = "../media/";
                $photo = basename($_FILES["fileToUpload"]["name"]);
                $target_file = $target_dir . $photo;
                $uploadOk = 1;
                $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

                // Check if image file is a actual image or fake image
                if (isset($_POST["submit"])) {
                    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                    if ($check !== false) {
                        $err["fileToUpload"] = "File is an image - " . $check["mime"] . ".";
                        $uploadOk = 1;
                    } else {
                        $err["fileToUpload"] = "File is not an image.";
                        $uploadOk = 0;
                    }
                }

                // Check if file already exists
                if (file_exists($target_file)) {
                    $err["fileToUpload"] = "Sorry, file already exists.";
                    $uploadOk = 0;
                }

                // Check file size
                if ($_FILES["fileToUpload"]["size"] > 1048576) {
                    $err["fileToUpload"] = "Sorry, your file is too large.";
                    $uploadOk = 0;
                }

                // Allow certain file formats
                if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif"
                ) {
                    $err["fileToUpload"] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                    $uploadOk = 0;
                }

                // Check if $uploadOk is set to 0 by an error
                if ($uploadOk == 1) {
                    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                        //$err["fileToUpload"]= "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                        $_POST['photo'] = $photo;
                        if (isset($_POST['photo_old']) && $_POST['photo_old'] != '') {
                            unlink($target_dir . $_POST['photo_old']);
                        }
                    } else {
                        $err["fileToUpload"] = "Sorry, there was an error uploading your file.";
                    }
                }
            }

            if(!isset($err)){
                $password = md5($_POST['password']);
                $query = "SELECT max(Id_Petugas) as maxId FROM petugas";
                $hasil = mysqli_query($conn, $query);
                $data = mysqli_fetch_array($hasil);
                $maxid = $data['maxId'];
                $urutan = (int) substr($maxid, 3, 3);
                $urutan++;
                $kode = 'PTG';
                $id = $kode . sprintf("%03s", $urutan);

                //save
                if (isset($_POST['photo'])) {
                    $sql = "INSERT INTO petugas (id_petugas, nama, username, password, alamat, jenis_kelamin, no_telp, photo)
                VALUES ('$id','$_POST[nama]','$_POST[username]','$password','$_POST[alamat]','$_POST[jenis_kelamin]','$_POST[no_telp]')";
                } else {
                    $sql = "INSERT INTO petugas (id_petugas, nama, username, password, alamat, jenis_kelamin, no_telp)
                VALUES ('$id','$_POST[nama]','$_POST[username]','$password','$_POST[alamat]','$_POST[jenis_kelamin]','$_POST[no_telp]')";
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
        $petugas = $petugas->fetch_assoc();
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
