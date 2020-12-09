<html>

<head>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>

<body>
    <div class="row">
        <div class="pull-right mb-2 ml-2">
            <h3 class="mb-5"><b>DATA ANGGOTA</b></h3>
            <a href="index.php?mod=anggota&page=add">
                <button class="btn btn-success">Tambah Data</button>
            </a>
        </div>
    </div>
    <div class="row">
        <table class="table table-bordered">
            <thead>
                <tr class="bg-primary text-white">
                    <td>No</td>
                    <td>Id Anggota</td>
                    <td>Nama</td>
                    <td>Jenis Kelamin</td>
                    <td>Tgl Lahir</td>
                    <td>Alamat</td>
                    <td>Tgl Daftar</td>
                    <td>Ubah</td>
                </tr>
            </thead>
            <tbody>
                <?php if ($anggota != NULL) {
                    $no = 1;
                    foreach ($anggota as $row) { ?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><?= $row['Id_Anggota'] ?></td>
                            <td><?= $row['Nama_Anggota'] ?></td>
                            <td><?= $row['Jenis_Kelamin'] ?></td>
                            <td><?= $row['Tgl_Lahir'] ?></td>
                            <td><?= $row['Alamat'] ?></td>
                            <td><?= $row['Tgl_Daftar'] ?></td>
                            <td>
                                <a href="index.php?mod=anggota&page=edit&id=<?= md5($row['Id_Anggota']) ?>"><i class="fa fa-pencil"></i> </a>
                                <a href="index.php?mod=anggota&page=delete&id=<?= md5($row['Id_Anggota']) ?>"><i class="fa fa-trash"></i> </a>
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