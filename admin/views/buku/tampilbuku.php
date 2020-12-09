<html>

<head>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>

<body>
    <div class="row">
        <div class="pull-right mb-2 ml-2">
            <h3 class="mb-5"><b>DATA BUKU</b></h3>
            <a href="index.php?mod=buku&page=add">
                <button class="btn btn-success">Tambah Data</button>
            </a>
        </div>
    </div>
    <div class="row">
        <table class="table table-bordered">
            <thead>
                <tr class="bg-primary text-white">
                    <td>No</td>
                    <td>Kode Buku</td>
                    <td>Judul</td>
                    <td>Pengarang</td>
                    <td>Penerbit</td>
                    <td>Tahun</td>
                    <td>Jenis Buku</td>
                    <td>No. Rak</td>
                    <td>Ubah</td>
                </tr>
            </thead>
            <tbody>
                <?php if ($buku != NULL) {
                    $no = 1;
                    foreach ($buku as $row) { ?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><?= $row['Kode_Buku'] ?></td>
                            <td><?= $row['Judul'] ?></td>
                            <td><?= $row['Pengarang'] ?></td>
                            <td><?= $row['Penerbit'] ?></td>
                            <td><?= $row['Tahun'] ?></td>
                            <td><?= $row['Jenis_Buku'] ?></td>
                            <td><?= $row['No_Rak'] ?></td>
                            <td>
                                <a href="index.php?mod=buku&page=edit&id=<?= md5($row['Kode_Buku']) ?>"><i class="fa fa-pencil"></i> </a>
                                <a href="index.php?mod=buku&page=delete&id=<?= md5($row['Kode_Buku']) ?>"><i class="fa fa-trash"></i> </a>
                            </td>
                        </tr>
                <?php $no++;
                    }
                } ?>
            </tbody>
        </table>
    </div>
</body>

</html>