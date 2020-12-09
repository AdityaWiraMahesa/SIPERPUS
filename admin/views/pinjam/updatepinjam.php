<html>
    <head>
        <link rel="stylesheet" href="bootstrap.min.css">
    </head>
    <body>
        <h5 class="ml-2 mb-3"><b> UPDATE DATA PEMINJAMAN</b></h5>
        <form action="index.php?mod=peminjaman&page=update" method="POST">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-grup">
                        <label for="">Id Anggota</label>
                        <input type="number" name="id_anggota" required value="<?= (isset($_POST['Id_Anggota'])) ? $_POST['Id_Anggota'] : ''; ?>" class="form-control">
                        <span class="text-danger"><?= (isset($err['Id_Anggota'])) ? $err['Id_Anggota'] : '' ?></span>
                    </div>
                    <div class="form-grup mt-3">
                        <label for="">Jumlah Buku</label>
                        <input type="number" name="jumlah_pinjam" required value="<?= (isset($_POST['Jumlah_Pinjam'])) ? $_POST['Jumlah_Pinjam'] : ''; ?>" class="form-control">
                        <span class="text-danger"><?= (isset($err['Jumlah_Pinjam'])) ? $err['Jumlah_Pinjam'] : '' ?></span>
                    </div>
                    <div class="form-grup mt-3">
                        <label for="">Kode Buku</label>
                        <input type="number" name="kode_buku" required value="<?= (isset($_POST['Kode_Buku'])) ? $_POST['Kode_Buku'] : ''; ?>" class="form-control">
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
                    <div class="form-grup mt-3">
                        <label for="">Id Petugas</label>
                        <input type="number" name="id_petugas" required value="<?= (isset($_POST['Id_Petugas'])) ? $_POST['Id_Petugas'] : ''; ?>" class="form-control">
                        <span class="text-danger"><?= (isset($err['Id_Petugas'])) ? $err['Id_Petugas'] : '' ?></span>
                    </div>
                    <div class="form-grup mb-2 mt-3">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <button type="reset" class="btn btn-success ml-2">Reset</button>
                        <button type="submit" class="btn btn-danger ml-2"><a href="http://localhost:8080/siperpus/admin/index.php?mod=peminjaman&page=data" class="text-white">Batal</a></button>
                    </div>
                </div>
            </div>
        </form>
    </body>
</html>