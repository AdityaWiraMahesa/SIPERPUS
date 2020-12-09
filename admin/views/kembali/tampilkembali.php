<html>

<head>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>

<body>
    <h5>Pengembalian Buku</h5>
    <form action="index.php?mod=pengembalian&page=save" method="POST">
        <div class="col-md-10">
            <div class="form-grup">
                <label for="">No. Pengembalian</label>
                <input type="number" name="no_kembali" required value="<?= (isset($_POST['No_Kembali'])) ? $_POST['No_Kembali'] : ''; ?>" class="form-control">
                <span class="text-danger"><?= (isset($err['No_Kembali'])) ? $err['No_Kembali'] : '' ?></span>
            </div>
            <div class="form-grup mt-3">
                <label for="">Tanggal Kembali</label>
                <input type="date" name="tgl_kembali" required value="<?= (isset($_POST['Tgl_Kembali'])) ? $_POST['Tgl_Kembali'] : ''; ?>" class="form-control">
                <span class="text-danger"><?= (isset($err['Tgl_Kembali'])) ? $err['Tgl_Kembali'] : '' ?></span>
            </div>
            <div class="form-grup mt-3">
                <label for="">Aktual Kembali</label>
                <input type="date" name="aktual_kembali" required value="<?= (isset($_POST['Aktual_Kembali'])) ? $_POST['Aktual_Kembali'] : ''; ?>" class="form-control">
                <span class="text-danger"><?= (isset($err['Aktual_Kembali'])) ? $err['Aktual_Kembali'] : '' ?></span>
            </div>
            <div class="form-grup mt-3">
                <label for="">No. Peminjaman</label>
                <input type="text" name="no_pinjam" required class="form-control" value="<?= (isset($_POST['No_Pinjam'])) ? $_POST['No_Pinjam'] : ''; ?>">
                <span class="text-danger"><?= (isset($err['No_Pinjam'])) ? $err['No_Pinjam'] : '' ?></span>
            </div>
            <div class="row">
                <div class="form-grup col-6 ml-3 pl-0 mt-3">
                    <label for="">Keterlambatan</label>
                    <input type="number" name="terlambat" required value="<?= (isset($_POST['Terlambat'])) ? $_POST['Terlambat'] : ''; ?>" class="form-control">
                    <span class="text-danger"><?= (isset($err['Terlambat'])) ? $err['Terlambat'] : '' ?></span>
                </div>
                <div>
                    <p class="mt-5 pt-1"><b>Hari</b></p>
                </div>
            </div>
            <div class="mb-2 mt-3">
                <a href="index.php?mod=pengembalian&page=data">Lihat Data Pengembalian Buku</a>
            </div>
            <div class="form-grup">
                <button type="submit" class="btn btn-primary">Save & Cetak</button>
                <button type="reset" class="btn btn-success ml-2">Reset</button>
            </div>
        </div>
    </form>
</body>

</html>