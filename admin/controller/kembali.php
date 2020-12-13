<?php
$con->auth();
$conn = $con->koneksi();
switch (@$_GET['page']) {
    case 'data':
        $sql = "SELECT * FROM pengembalian INNER JOIN detail_kembali ON pengembalian.no_kembali=detail_kembali.no_kembali INNER JOIN buku 
        ON buku.id_buku=detail_kembali.id_buku INNER JOIN petugas ON petugas.id_petugas=pengembalian.id_petugas INNER JOIN anggota 
        ON anggota.id_anggota=pengembalian.id_anggota";
        $pinjam = $conn->query($sql);
        $conn->close();
        $content = "views/kembali/datakembali.php";
        include_once 'views/template.php';
        break;
    case 'save':
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            //validasi
            if (!is_numeric($_POST['no_kembali'])) {
                $err['no_kembali'] = "No. Peminjaman Wajib Diisi";
            }
            if (empty($_POST['id_anggota'])) {
                $err['id_anggota'] = "Id Anggota Wajib Diisi";
            }
            if (empty($_POST['tgl_kembali'])) {
                $err['tgl_kembali'] = "Tanggal Kembali Wajib Diisi";
            }
            if (empty($_POST['aktual_kembali'])) {
                $err['aktual_kembali'] = "Aktual Kembali Wajib Diisi";
            }
            if (empty($_POST['terlambat'])) {
                $err['terlambat'] = "Keterlambatan Wajib Diisi";
            }

            if (!isset($err)) {
                $query = "SELECT max(No_Kembali) as maxId FROM pengembalian";
                $hasil = mysqli_query($conn, $query);
                $data = mysqli_fetch_array($hasil);
                $maxid = $data['maxId'];
                $urutan = (int) substr($maxid, 3, 4);
                $urutan++;
                $id = sprintf("%04s", $urutan);

                $sql = "INSERT INTO pengembalian (no_kembali, tgl_kembali, aktual_kembali, total_denda, no_pinjam, id_anggota, id_petugas)
                VALUES ('$id','$_POST[tgl_kembali]','$_POST[aktual_kembali]','$_POST[total_denda]','$_POST[no_pinjam]','$_POST[id_anggota]','$_POST[id_petugas]')";
                $sql1 = "INSERT INTO detail_kembali (no_kembali, id_buku, jumlah_kembali, terlambat, jumlah_denda)
                VALUES ('$id','$_POST[id_buku]','$_POST[jumlah_kembali]','$_POST[terlambat]','$_POST[jumlah_buku]')";
                if ($conn->query($sql) === TRUE) {
                    header('Location: ' . $con->site_url() . '/admin/index.php?mod=pengembalia');
                }
                if ($conn->query($sql1) === TRUE) {
                    header('Location: ' . $con->site_url() . '/admin/index.php?mod=pengembalia');
                } else {
                    $err['msg'] = "Error: " . $sql . "<br>" . $conn->error;
                }
            }
        } else {
            $err['mgs'] = "Tidak Diijinkan";
        }
        if (isset($err)) {
            $content = "views/pinjam/tampilkembali.php";
            include_once 'views/template.php';
        }
        break;
        case 'update':
        $sql = "UPDATE pengembalian SET no_kembali='$_POST[no_kembali]',tgl_kembali='$_POST[tgl_kembali]',aktual_kembali='$_POST[aktual_kembali]', total_denda='$_POST[total_denda]',no_pinjam='$_POST[no_pinjam]',id_anggota='$_POST[id_anggota]',id_petugas='$_POST[id_petugas]' WHERE no_kembali='$_POST[no_kembali]'";
        $sql1 = "UPDATE detail_kembali SET no_kembali='$_POST[no_kembali]', id_buku='$_POST[id_buku]', jumlah_kembali='$_POST[jumlah_kembali]', terlambat='$_POST[terlambat]', total_denda='$_POST[total_denda]' WHERE no_kembali='$_POST[no_kembali]'";
        if ($conn->query($sql) === TRUE) {
            header('Location: ' . $con->site_url() . '/admin/index.php?mod=pengembalian&page=data');
        }
        if ($conn->query($sql1) === TRUE) {
            header('Location: ' . $con->site_url() . '/admin/index.php?mod=pengembalian&page=data');
        } else {
            $err['msg'] = "Error: " . $sql . "<br>" . $conn->error;
        }
        if (isset($err)) {
            $content = "views/admin/updatekembali.php";
            include_once 'views/template.php';
        }
        break;
    case 'edit':
        $pinjam = "SELECT * FROM pengembalian WHERE md5(no_kembali)='$_GET[id]'";
        $pinjam = $conn->query($pinjam);
        $_POST = $pinjam->fetch_assoc();
        $content = "views/kembali/updatekembali.php";
        include_once 'views/template.php';
        break;
    case 'delete':
        $pinjam = "DELETE from pengembalian WHERE md5(no_kembali)='$_GET[id]'";
        $pinjam = $conn->query($pinjam);
        header('Location: ' . $con->site_url() . '/admin/index.php?mod=pengembalian&page=data');
        break;
    default:
        $content = "views/kembali/tampilkembali.php";
        include_once 'views/template.php';
}
