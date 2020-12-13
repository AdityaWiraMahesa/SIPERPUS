<html>

<head>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>

<body>
    <h5 class="ml-2 mb-3"><i class="fas fa-book-open mr-2"></i><b>PEMINJAMAN BUKU</b></h5>
    <hr class="mb-4">
    <form action="index.php?mod=peminjaman&page=save" method="POST">
        <div class="row">
            <div class="col-md-6 ml-2">
                <div class="form-grup">
                    <label for="">Id Anggota</label>
                    <input type="text" name="id_anggota" required value="<?= (isset($_POST['Id_Anggota'])) ? $_POST['Id_Anggota'] : ''; ?>" class="form-control">
                    <span class="text-danger"><?= (isset($err['Id_Anggota'])) ? $err['Id_Anggota'] : '' ?></span>
                </div>
                <div class="form-grup mt-3">
                    <label for="">Jumlah Buku</label>
                    <input type="number" name="jumlah_pinjam" required value="<?= (isset($_POST['Jumlah_Pinjam'])) ? $_POST['Jumlah_Pinjam'] : ''; ?>" class="form-control">
                    <span class="text-danger"><?= (isset($err['Jumlah_Pinjam'])) ? $err['Jumlah_Pinjam'] : '' ?></span>
                </div>
                <div class="form-grup mt-3">
                    <label for="">Kode Buku</label>
                    <input type="text" name="kode_buku" required value="<?= (isset($_POST['Kode_Buku'])) ? $_POST['Kode_Buku'] : ''; ?>" class="form-control">
                    <p style="font-size: 12px;">Masukkan kode yang tertera pada buku</p>
                    <span class="text-danger"><?= (isset($err['Kode_Buku'])) ? $err['Kode_Buku'] : '' ?></span>
                </div>
                <div class="form-grup mt-3">
                    <label for="">Judul</label>
                    <input type="text" name="judul" required class="form-control" value="<?= (isset($_POST['Judul'])) ? $_POST['Judul'] : ''; ?>">
                    <span class="text-danger"><?= (isset($err['Judul'])) ? $err['Judul'] : '' ?></span>
                </div>
            </div>
            <div class="col-md-5">
                <div class="form-grup">
                    <label for="">Tanggal Pinjam</label>
                    <input type="date" name="tgl_pinjam" required value="<?= (isset($_POST['Tgl_Pinjam'])) ? $_POST['Tgl_Pinjam'] : ''; ?>" class="form-control">
                    <span class="text-danger"><?= (isset($err['Tgl_Pinjam'])) ? $err['Tgl_Pinjam'] : '' ?></span>
                </div>
                <div class="form-grup mt-3">
                    <label for="">Aktual Kembali</label>
                    <input type="date" name="aktual_kembali" required value="<?= (isset($_POST['Aktual_Kembali'])) ? $_POST['Aktual_Kembali'] : ''; ?>" class="form-control">
                    <span class="text-danger"><?= (isset($err['Aktual_Kembali'])) ? $err['Aktual_Kembali'] : '' ?></span>
                </div>
                <div class="mb-2 mt-3">
                    <a href="index.php?mod=peminjaman&page=data">Lihat Data Peminjaman Buku</a>
                </div>
                <div class="form-grup">
                    <button type="submit" class="btn btn-primary rounded-pill"><i class="fas fa-save mr-2"></i>Save & Cetak</button>
                    <button type="reset" class="btn btn-success ml-1 rounded-pill"><i class="fas fa-undo mr-2"></i>Reset</button>
                </div>
            </div>
        </div>
    </form>
</body>

</html>
