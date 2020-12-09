<?php
$con->auth();
$conn = $con->koneksi();
switch (@$_GET['page']) {
    case 'data':
        $sql = "SELECT * FROM pengembalian INNER JOIN detail_kembali ON pengembalian.no_kembali=detail_kembali.no_kembali INNER JOIN buku 
        ON buku.kode_buku=detail_kembali.kode_buku INNER JOIN petugas ON petugas.id_petugas=pengembalian.id_petugas INNER JOIN anggota 
        ON anggota.id_anggota=pengembalian.id_anggota";
        $pinjam = $conn->query($sql);
        $conn->close();
        $content = "views/kembali/datakembali.php";
        include_once 'views/template.php';
        break;
    case 'save':
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            //validasi
            if (!is_numeric($_POST['id_anggota'])) {
                $err['id_anggota'] = "Id Anggota Wajib Diisi";
            }
            if (empty($_POST['jumlah_buku'])) {
                $err['jumlah_buku'] = "Jumlah Buku Wajib Diisi";
            }
            if (empty($_POST['kode_buku'])) {
                $err['kode_buku'] = "Kode Buku Wajib Diisi";
            }

            if (!isset($err)) {
                $no_pinjam = 00001;
                $sql = "INSERT INTO peminjaman (no_pinjam, tgl_pinjam, tgl_kembali, jumlah_pinjam, id_anggota, id_petugas)
                VALUES ('$no_pinjam','$_POST[tgl_pinjam]','$_POST[tgl_kembali]','$_POST[jumlah_buku]','$_POST[id_anggota]','$_POST[id_petugas]')";
                $sql1 = "INSERT INTO detail_pinjam (no_pinjam, kode_buku)
                VALUES ('$no_pinjam','$_POST[kode_buku]')";
                if ($conn->query($sql) === TRUE) {
                    header('Location: ' . $con->site_url() . '/admin/index.php?mod=peminjaman');
                }
                if ($conn->query($sql1) === TRUE) {
                    header('Location: ' . $con->site_url() . '/admin/index.php?mod=peminjaman');
                } else {
                    $err['msg'] = "Error: " . $sql . "<br>" . $conn->error;
                }
                $no_pinjam++;
            }
            $no_pinjam++;
        } else {
            $err['mgs'] = "Tidak Diijinkan";
        }
        if (isset($err)) {
            $content = "views/pinjam/tampilpinjam.php";
            include_once 'views/template.php';
        }
        break;
    case 'edit':
        $pinjam = "SELECT * FROM peminjaman WHERE md5(no_pinjam)='$_GET[id]'";
        $pinjam = $conn->query($pinjam);
        $_POST = $pinjam->fetch_assoc();
        $content = "views/pinjam/tampilpinjam.php";
        include_once 'views/template.php';
        break;
    case 'delete':
        $pinjam = "DELETE from peminjaman WHERE md5(no_pinjam)='$_GET[id]'";
        $pinjam = $conn->query($pinjam);
        header('Location: ' . $con->site_url() . '/admin/index.php?mod=peminjaman&page=data');
        break;
    default:
        $content = "views/kembali/tampilkembali.php";
        include_once 'views/template.php';
}
