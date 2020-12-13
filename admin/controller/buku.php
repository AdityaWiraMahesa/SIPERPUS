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
            if (empty($_POST['kode_buku'])) {
                $err['kode_buku'] = "Kode Buku Wajib Diisi";
            }
            if (empty($_POST['judul'])) {
                $err['judul'] = "Judul Wajib Diisi";
            }
            if (empty($_POST['pengarang'])) {
                $err['pengarang'] = "Pengarang Wajib Diisi";
            }
            if (empty($_POST['penerbit'])) {
                $err['penerbit'] = "Penerbit Wajib Diisi";
            }
            if (empty($_POST['tahun'])) {
                $err['tahun'] = "Tahun Terbit Wajib Diisi";
            }
            if (empty($_POST['jenis_buku'])) {
                $err['jenis_buku'] = "Jenis Buku Wajib Diisi";
            }
            if (empty($_POST['jumlah'])) {
                $err['jumlah'] = "Jumlah Buku Wajib Diisi";
            }

            if (!isset($err)) {
                $query = "SELECT max(Id_Buku) as maxId FROM buku";
                $hasil = mysqli_query($conn, $query);
                $data = mysqli_fetch_array($hasil);
                $maxid = $data['maxId'];
                $urutan = (int) substr($maxid, 2, 4);
                $urutan++;
                $kode = 'BK';
                $id = $kode . sprintf("%04s", $urutan);

                //save
                $sql = "INSERT INTO buku (id_buku, kode_buku, judul, pengarang, penerbit, tahun, jumlah, no_jenis_buku)
                VALUES ('$id','$_POST[kode_buku]','$_POST[judul]','$_POST[pengarang]','$_POST[penerbit]','$_POST[tahun]','$_POST[jumlah]','$_POST[no_jenis_buku]')";
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
        $id = md5($_POST['id_buku']);
        $sql = "UPDATE buku SET id_buku='$_POST[id_buku]',kode_buku='$_POST[kode_buku]',judul='$_POST[judul]',pengarang='$_POST[pengarang]', penerbit='$_POST[penerbit]',
        tahun='$_POST[tahun]',jumlah='$_POST[jumlah]',no_jenis_buku='$_POST[no_jenis_buku]' WHERE id_buku='$_POST[id_buku]'";
        if ($conn->query($sql) === TRUE) {
            header('Location: ' . $con->site_url() . "admin/index.php?mod=buku&page=detail&id=$id");
        } else {
            $err['msg'] = "Error: " . $sql . "<br>" . $conn->error;
        }
        if (isset($err)) {
            $content = "views/buku/updatebuku.php";
            include_once 'views/template.php';
        }
    break;
    case 'edit':
        $buku = "SELECT * FROM buku WHERE md5(id_buku)='$_GET[id]'";
        $buku = $conn->query($buku);
        $_POST = $buku->fetch_assoc();
        $content = "views/buku/updatebuku.php";
        include_once 'views/template.php';
        break;
    case 'delete':
        $buku = "DELETE from buku WHERE md5(id_buku)='$_GET[id]'";
        $buku = $conn->query($buku);
        header('Location: ' . $con->site_url() . '/admin/index.php?mod=buku');
        break;   
    case 'detail':
        $buku = "SELECT * FROM buku WHERE md5(id_buku)='$_GET[id]'";
        $buku = $conn->query($buku);
        $_POST = $buku->fetch_assoc();
        $content = "views/buku/detailbuku.php";
        include_once 'views/template.php';
        break; 
    default:
        $sql = "SELECT * FROM buku INNER JOIN jenis_buku ON jenis_buku.no_jenis_buku=buku.no_jenis_buku ORDER BY Id_Buku ASC";
        $buku = $conn->query($sql);
        $conn->close();
        $content = "views/buku/tampilbuku.php";
        include_once 'views/template.php';
}
