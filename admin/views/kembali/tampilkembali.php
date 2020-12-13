<html>

<head>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>

<body>
    <h5 class="ml-2 mb-3"><i class="fas fa-book-reader mr-2"></i><b>PENGEMBALIAN BUKU</b></h5>
    <hr class="mb-4">
    <form action="index.php?mod=pengembalian&page=save" method="POST">
        <div class="col-md-10">
            <div class="form-grup">
                <label for="">No. Peminjaman</label>
                <input type="number" name="no_pinjam" required class="form-control" value="<?= (isset($_POST['No_Pinjam'])) ? $_POST['No_Pinjam'] : ''; ?>">
                <span class="text-danger"><?= (isset($err['No_Pinjam'])) ? $err['No_Pinjam'] : '' ?></span>
            </div>
            <div class="form-grup mt-3">
                <label for="">Id Anggota</label>
                <input type="text" name="no_kembali" required value="<?= (isset($_POST['No_Kembali'])) ? $_POST['No_Kembali'] : ''; ?>" class="form-control">
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
            <div class="row">
                <div class="input-grup mt-3 col-md-7">
                    <label for="">Keterlambatan</label>
                    <input type="number" name="terlambat" required value="<?= (isset($_POST['Terlambat'])) ? $_POST['Terlambat'] : ''; ?>" class="form-control">
                    <span class="text-danger"><?= (isset($err['Terlambat'])) ? $err['Terlambat'] : '' ?></span>
                </div>
                <div class="mt-5">
                    <span class="input-group-text ml" id="basic-addon2">Hari</span>
                </div>
            </div>
            <div class="mb-2 mt-3">
                <a href="index.php?mod=pengembalian&page=data">Lihat Data Pengembalian Buku</a>
            </div>
            <div class="form-grup">
                <button type="submit" class="btn btn-primary rounded-pill"><i class="fas fa-save mr-2"></i>Save & Cetak</button>
                <button type="reset" class="btn btn-success ml-1 rounded-pill"><i class="fas fa-undo mr-2"></i>Reset</button>
            </div>
        </div>
    </form>
</body>

</html>
