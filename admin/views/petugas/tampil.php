<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="./siperpus/assets/admin.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
</head>

<body>
    <div class="row">
        <div class="pull-right mb-2 ml-2">
            <h3 class="mb-5"><i class="fas fa-user-edit mr-2"></i><b>DATA PETUGAS</b></h3>
            <a href="index.php?mod=petugas&page=add">
                <button class="btn btn-success rounded-pill"><i class="fas fa-plus-square mr-2"></i>Tambah Data</button>
            </a>
        </div>
    </div>
    <div class="row">
        <table class="table table-bordered table-hover mt-2">
            <thead>
                <tr class="bg-light text-blank font-weight-bold">
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
                            <td class="font-weight-bold"><?= $no ?></td>
                            <td><?= $row['Nama'] ?></td>
                            <td><?= $row['Alamat'] ?></td>
                            <td><?= $row['Jenis_Kelamin'] ?></td>
                            <td><?= $row['No_telp'] ?></td>
                            <td>
                                <a href="index.php?mod=petugas&page=edit&id=<?= md5($row['Id_Petugas']) ?>"><i class="fas fa-edit mr-2"></i></a>
                                <a href="index.php?mod=petugas&page=delete&id=<?= md5($row['Id_Petugas']) ?>"><i class="fa fa-trash text-danger"></i> </a>
                            </td>
                        </tr>
                <?php $no++;
                    }
                } ?>
            </tbody>
        </table>
    </div>
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>
</body>

</html>
