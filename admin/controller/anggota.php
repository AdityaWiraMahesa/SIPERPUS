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
            if(empty($_POST['username'])){
                $err['username']="Username Wajib Diisi";
            }
            if (empty($_POST['password'])) {
                $err['password'] = "Password Wajib Diisi";
            }
            if (empty($_POST['nama_anggota'])) {
                $err['nama_anggota'] = "Nama Wajib Diisi";
            }
            if (empty($_POST['alamat'])) {
                $err['alamat'] = "Alamat Wajib Diisi";
            }
            if (empty($_POST['jenis_kelamin'])) {
                $err['jenis_kelamin'] = "Jenis Wajib Diisi";
            }
            if (empty($_POST['tgl_lahir'])) {
                $err['tgl_lahir'] = "Tanggal Lahir Wajib Diisi";
            }
            if (empty($_POST['tgl_daftar'])) {
                $err['tgl_daftar'] = "Tanggal Daftar Wajib Diisi";
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
                $query = "SELECT max(Id_Anggota) as maxId FROM anggota";
                $hasil = mysqli_query($conn, $query);
                $data = mysqli_fetch_array($hasil);
                $maxid = $data['maxId'];
                $urutan = (int) substr($maxid, 3, 3);
                $urutan++;
                $kode = 'AGT';
                $id = $kode . sprintf("%03s", $urutan);

                //save
                if (isset($_POST['photo'])) {
                    $sql = "INSERT INTO anggota (id_anggota, username, password, nama_anggota, jenis_kelamin, tgl_lahir, alamat, tgl_daftar, photo)
                VALUES ('$id','$_POST[username]','$password','$_POST[nama_anggota]','$_POST[jenis_kelamin]','$_POST[tgl_lahir]','$_POST[alamat]','$_POST[tgl_daftar]','$_POST[photo]')";
                } else {
                    $sql = "INSERT INTO anggota (id_anggota, username, password, nama_anggota, jenis_kelamin, tgl_lahir, alamat, tgl_daftar)
                VALUES ('$id','$_POST[username]','$password','$_POST[nama_anggota]','$_POST[jenis_kelamin]','$_POST[tgl_lahir]','$_POST[alamat]','$_POST[tgl_daftar]')";
                }
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
        $sql = "UPDATE anggota SET id_anggota='$_POST[id_anggota]',username='$_POST[username]',password='$password',nama_anggota='$_POST[nama_anggota]', jenis_kelamin='$_POST[jenis_kelamin]',tgl_lahir='$_POST[tgl_lahir]',alamat='$_POST[alamat]', tgl_daftar = '$_POST[tgl_daftar]' WHERE id_anggota='$_POST[id_anggota]'";
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
        $anggota = $anggota->fetch_assoc();
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
