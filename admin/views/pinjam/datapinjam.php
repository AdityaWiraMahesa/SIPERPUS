<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
</head>

<body>
    <div class="row">
        <div class="pull-right mb-2 ml-2">
            <h3 class="mb-5"><i class="fas fa-book mr-2"></i><b>DATA PEMINJAMAN BUKU</b></h3>
        </div>
    </div>
    <div class="row">
        <table class="table table-bordered table-hover mt-2">
            <thead>
                <tr class="bg-light text-blank font-weight-bold">
                    <td>No</td>
                    <td>No. Peminjaman</td>
                    <td>Id Anggota</td>
                    <td>Jumlah Buku</td>
                    <td>Kode Buku</td>
                    <td>Judul</td>
                    <td>Tgl Pinjam</td>
                    <td>Aktual Kembali</td>
                    <td>Id Petugas</td>
                    <td>Ubah</td>
                </tr>
            </thead>
            <tbody>
                <?php if ($pinjam != NULL) {
                    $no = 1;
                    foreach ($pinjam as $row) { ?>
                        <tr>
                            <td class="font-weight-bold"><?= $no ?></td>
                            <td><?= $row['No_Pinjam'] ?></td>
                            <td><?= $row['Id_Anggota'] ?></td>
                            <td><?= $row['Jumlah_Pinjam'] ?></td>
                            <td><?= $row['Kode_Buku'] ?></td>
                            <td><?= $row['Judul'] ?></td>
                            <td><?= $row['Tgl_Pinjam'] ?></td>
                            <td><?= $row['Aktual_Kembali'] ?></td>
                            <td><?= $row['Id_Petugas'] ?></td>
                            <td>
                                <a href="index.php?mod=peminjaman&page=edit&id=<?= md5($row['No_Pinjam']) ?>"><i class="fas fa-edit mr-2"></i> </a>
                                <a href="index.php?mod=peminjaman&page=delete&id=<?= md5($row['No_Pinjam']) ?>"><i class="fas fa-trash text-danger"></i> </a>
                            </td>
                        </tr>
                <?php $no++;
                    }
                } ?>
            </tbody>
        </table>
    </div>
    <div class="pull-right">
        <a href="index.php?mod=peminjaman">
            <button class="btn btn-danger rounded-pill"><i class="fas fa-arrow-circle-left mr-2"></i>Back</button>
        </a>
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
