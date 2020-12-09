<html>

<head>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>

<body>
    <div class="row">
        <div class="pull-right mb-2 ml-2">
            <h3 class="mb-5"><b>DATA PENGEMBALIAN BUKU</b></h3>
        </div>
    </div>
    <div class="row">
        <table class="table table-bordered">
            <thead>
                <tr class="bg-primary text-white">
                    <td>No</td>
                    <td>No. Pengembalian</td>
                    <td>No. Peminjaman</td>
                    <td>Id Anggota</td>
                    <td>Kode Buku</td>
                    <td>Tgl Kembali</td>
                    <td>Aktual Kembali</td>
                    <td>Terlambat</td>
                    <td>Denda</td>
                    <td>Id Petugas</td>
                    <td>Ubah</td>
                </tr>
            </thead>
            <tbody>
                <?php if ($pinjam != NULL) {
                    $no = 1;
                    foreach ($pinjam as $row) { ?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><?= $row['No_Kembali'] ?></td>
                            <td><?= $row['No_Pinjam'] ?></td>
                            <td><?= $row['Id_Anggota'] ?></td>
                            <td><?= $row['Kode_Buku'] ?></td>
                            <td><?= $row['Tgl_Kembali'] ?></td>
                            <td><?= $row['Aktual_Kembali'] ?></td>
                            <td><?= $row['Terlambat'] ?></td>
                            <td><?= $row['Total_Denda'] ?></td>
                            <td><?= $row['Id_Petugas'] ?></td>
                            <td>
                                <a href="index.php?mod=pengembalian&page=edit&id=<?= md5($row['No_Kembali']) ?>"><i class="fa fa-pencil"></i> </a>
                                <a href="index.php?mod=pengembalian&page=delete&id=<?= md5($row['No_Kembali']) ?>"><i class="fa fa-trash"></i> </a>
                            </td>
                        </tr>
                <?php $no++;
                    }
                } ?>
            </tbody>
        </table>
    </div>
    <div class="pull-right">
        <a href="index.php?mod=pengembalian">
            <button class="btn btn-danger">Kembali</button>
        </a>
    </div>
</body>

</html>