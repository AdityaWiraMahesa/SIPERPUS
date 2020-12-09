<?php
$con->auth();
$conn = $con->koneksi();
switch (@$_GET['page']) {
    case 'add':
        $content = "views/buku/tambahbuku.php";
        include_once 'views/template.php';
        break;
    case 'save':
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            //validasi
            if (!is_numeric($_POST['kode_buku'])) {
                $err['kode_buku'] = "Kode Buku Wajib Angka";
            }
            if (empty($_POST['judul'])) {
                $err['judul'] = "Judul Wajib Diisi";
            }
            if (empty($_POST['pengarang'])) {
                $err['pengarang'] = "Pengarang Wajib Diisi";
            }

            if (!isset($err)) {
                $sql = "INSERT INTO buku (kode_buku, judul, pengarang, penerbit, tahun, no_jenis_buku)
                VALUES ('$_POST[kode_buku]','$_POST[judul]','$_POST[pengarang]','$_POST[penerbit]','$_POST[tahun]','$_POST[no_jenis_buku]')";
                if ($conn->query($sql) === TRUE) {
                    header('Location: ' . $con->site_url() . '/admin/index.php?mod=buku');
                } else {
                    $err['msg'] = "Error: " . $sql . "<br>" . $conn->error;
                }
            }
        } else {
            $err['mgs'] = "Tidak Diijinkan";
        }
        if (isset($err)) {
            $content = "views/buku/tambahbuku.php";
            include_once 'views/template.php';
        }
    break;
    case 'update':
        $sql = "UPDATE buku SET judul='$_POST[judul]',pengarang='$_POST[pengarang]', penerbit='$_POST[penerbit]',
        tahun='$_POST[tahun]',no_jenis_buku='$_POST[no_jenis_buku]' WHERE kode_buku='$_POST[kode_buku]'";
        if ($conn->query($sql) === TRUE) {
            header('Location: ' . $con->site_url() . '/admin/index.php?mod=buku');
        } else {
            $err['msg'] = "Error: " . $sql . "<br>" . $conn->error;
        }
        if (isset($err)) {
            $content = "views/buku/updatebuku.php";
            include_once 'views/template.php';
        }
    break;
    case 'edit':
        $buku = "SELECT * FROM buku WHERE md5(kode_buku)='$_GET[id]'";
        $buku = $conn->query($buku);
        $_POST = $buku->fetch_assoc();
        $content = "views/buku/updatebuku.php";
        include_once 'views/template.php';
        break;
    case 'delete':
        $buku = "DELETE from buku WHERE md5(kode_buku)='$_GET[id]'";
        $buku = $conn->query($buku);
        header('Location: ' . $con->site_url() . '/admin/index.php?mod=buku');
        break;
    default:
        $sql = "SELECT * FROM buku INNER JOIN jenis_buku ON jenis_buku.no_jenis_buku=buku.no_jenis_buku ORDER BY kode_buku ASC";
        $buku = $conn->query($sql);
        $conn->close();
        $content = "views/buku/tampilbuku.php";
        include_once 'views/template.php';
}
