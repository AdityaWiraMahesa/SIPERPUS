<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="./siperpus/assets/admin.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap.min.css">
</head>

<body>
    <div class="row">
        <div class="pull-right mb-2 ml-2">
            <h3 class="mb-5"><b>DATA PETUGAS</b></h3>
            <a href="index.php?mod=petugas&page=add">
                <button class="btn btn-success">Tambah Data</button>
            </a>
        </div>
    </div>
    <div class="row">
        <table class="table table-bordered">
            <thead>
                <tr class="bg-primary text-white">
                    <td>No</td>
                    <td>Nama Lengkap</td>
                    <td>Alamat</td>
                    <td>Jenis Kelamin</td>
                    <td>No. Telp</td>
                    <td>Ubah</td>
                </tr>
            </thead>
            <tbody>
                <?php if ($petugas != NULL) {
                    $no = 1;
                    foreach ($petugas as $row) { ?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><?= $row['Nama'] ?></td>
                            <td><?= $row['Alamat'] ?></td>
                            <td><?= $row['Jenis_Kelamin'] ?></td>
                            <td><?= $row['No_telp'] ?></td>
                            <td>
                                <a href="index.php?mod=petugas&page=edit&id=<?= md5($row['Id_Petugas']) ?>"><i class="fa fa-pencil"></i> </a>
                                <a href="index.php?mod=petugas&page=delete&id=<?= md5($row['Id_Petugas']) ?>"><i class="fa fa-trash"></i> </a>
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
