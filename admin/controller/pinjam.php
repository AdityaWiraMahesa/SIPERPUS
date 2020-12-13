<?php
$con->auth();
$conn = $con->koneksi();
switch (@$_GET['page']) {
    case 'data':
        $sql = "SELECT * FROM peminjaman INNER JOIN detail_pinjam ON peminjaman.no_pinjam=detail_pinjam.no_pinjam INNER JOIN buku ON buku.id_buku=detail_pinjam.id_buku INNER JOIN petugas ON petugas.id_petugas=peminjaman.id_petugas INNER JOIN anggota ON anggota.id_anggota=peminjaman.id_anggota";
        $pinjam = $conn->query($sql);
        $conn->close();
        $content = "views/pinjam/datapinjam.php";
        include_once 'views/template.php';
        break;
    case 'save':
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            //validasi
            if (empty($_POST['id_anggota'])) {
                $err['id_anggota'] = "Id Anggota Wajib Diisi";
            }
            if (empty($_POST['jumlah_buku'])) {
                $err['jumlah_buku'] = "Jumlah Buku Wajib Diisi";
            }
            if (empty($_POST['kode_buku'])) {
                $err['kode_buku'] = "Kode Buku Wajib Diisi";
            }
            if (empty($_POST['judul'])) {
                $err['judul'] = "Judul Buku Wajib Diisi";
            }
            if (empty($_POST['tgl_pinjam'])) {
                $err['tgl_pinjam'] = "Tanggal Pinjam Buku Wajib Diisi";
            }
            if (empty($_POST['tgl_kembali'])) {
                $err['tgl_kembali'] = "Tangal Aktual Kembali Wajib Diisi";
            }

            if (!isset($err)) {
                $query = "SELECT max(No_Pinjam) as maxId FROM peminjaman";
                $hasil = mysqli_query($conn, $query);
                $data = mysqli_fetch_array($hasil);
                $maxid = $data['maxId'];
                $urutan = (int) substr($maxid, 3, 4);
                $urutan++;
                $id = sprintf("%04s", $urutan);

                $sql = "INSERT INTO peminjaman (no_pinjam, tgl_pinjam, aktual_kembali, jumlah_pinjam, id_anggota, id_petugas)
                VALUES ('$id','$_POST[tgl_pinjam]','$_POST[aktual_kembali]','$_POST[jumlah_buku]','$_POST[id_anggota]','$_POST[id_petugas]')";
                $sql1 = "INSERT INTO detail_pinjam (no_pinjam, kode_buku)
                VALUES ('$id','$_POST[id_buku]')";
                if ($conn->query($sql) === TRUE) {
                    header('Location: ' . $con->site_url() . '/admin/index.php?mod=peminjaman');
                }
                if ($conn->query($sql1) === TRUE) {
                    header('Location: ' . $con->site_url() . '/admin/index.php?mod=peminjaman');
                } else {
                    $err['msg'] = "Error: " . $sql . "<br>" . $conn->error;
                }
            }
        } else {
            $err['mgs'] = "Tidak Diijinkan";
        }
        if (isset($err)) {
            $err['mgs'] = "Tidak Diijinkan";
            $content = "views/pinjam/tampilpinjam.php";
            include_once 'views/template.php';
        }
        break;
        case 'update':
        $sql = "UPDATE peminjaman SET no_pinjam='$_POST[no_pinjam]',tgl_pinjam='$_POST[tgl_pinjam]',aktual_kembali='$_POST[aktual_kembali]', jumlah_kembali='$_POST[jumlah_kembali]',id_anggota='$_POST[id_anggota]',id_petugas='$_POST[id_petugas]' WHERE no_pinjam='$_POST[no_pinjam]'";
        $sql1 = "UPDATE detail_pinjam SET no_pinjam='$_POST[no_pinjam]', id_buku='$_POST[id_buku]' WHERE no_pinjam='$_POST[no_pinjam]'";
        if ($conn->query($sql) === TRUE) {
            header('Location: ' . $con->site_url() . '/admin/index.php?mod=peminjaman&page=data');
        }
        if ($conn->query($sql1) === TRUE) {
            header('Location: ' . $con->site_url() . '/admin/index.php?mod=peminjaman&page=data');
        } else {
            $err['msg'] = "Error: " . $sql . "<br>" . $conn->error;
        }
        if (isset($err)) {
            $content = "views/admin/updatepinjam.php";
            include_once 'views/template.php';
        }
        break;
    case 'edit':
        $pinjam = "SELECT * FROM peminjaman WHERE md5(no_pinjam)='$_GET[id]'";
        $pinjam = $conn->query($pinjam);
        $_POST = $pinjam->fetch_assoc();
        /* var_dump($_POST); */
        $content = "views/pinjam/updatepinjam.php";
        include_once 'views/template.php';
        break;
    case 'delete':
        $pinjam = "DELETE from peminjaman WHERE md5(no_pinjam)='$_GET[id]'";
        $pinjam = $conn->query($pinjam);
        header('Location: ' . $con->site_url() . '/admin/index.php?mod=peminjaman&page=data');
        break;
    default:
        $content = "views/pinjam/tampilpinjam.php";
        include_once 'views/template.php';
}
