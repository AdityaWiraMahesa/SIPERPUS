<h5 class="ml-2 mb-3"><b>TAMBAH DATA PETUGAS</b></h5>
<form action="index.php?mod=petugas&page=save" method="POST">
    <div class="row">
        <div class="col-md-5 ml-2">
            <div class="form-grup">
                <label for="">Username</label>
                <input type="text" name="username" required value="<?= (isset($_POST['Username'])) ? $_POST['Username'] : ''; ?>" class="form-control">
                <span class="text-danger"><?= (isset($err['Username'])) ? $err['Username'] : '' ?></span>
            </div>
            <div class="form-grup mt-3">
                <label for="">Password</label>
                <input type="password" name="password" required value="<?= (isset($_POST['password'])) ? $_POST['password'] : ''; ?>" class="form-control">
                <span class="text-danger"><?= (isset($err['password'])) ? $err['password'] : '' ?></span>
            </div>
            <!-- <div class="form-grup mt-3">
                <label for="">Id Petugas</label>
                <input type="number" name="id_petugas" required value="<?= (isset($_POST['Id_Petugas'])) ? $_POST['Id_Petugas'] : ''; ?>" class="form-control">
                <span class="text-danger"><?= (isset($err['Id_Petugas'])) ? $err['Id_Petugas'] : '' ?></span>
            </div> -->
            <div class="form-grup mt-3">
                <label for="">Nama Lengkap</label>
                <input type="text" name="nama" required class="form-control" value="<?= (isset($_POST['Nama'])) ? $_POST['Nama'] : ''; ?>">
                <span class="text-danger"><?= (isset($err['Nama'])) ? $err['Nama'] : '' ?></span>
            </div>
            <div class="form-grup mt-3">
                <label for="">Alamat</label>
                <input type="text" name="alamat" required value="<?= (isset($_POST['Alamat'])) ? $_POST['Alamat'] : ''; ?>" class="form-control">
                <span class="text-danger"><?= (isset($err['Alamat'])) ? $err['Alamat'] : '' ?></span>
            </div>
        </div>
        <div class="col-md-5 ml-5">
            <div class="form-grup">
                <label for="">Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-control" id="">
                    <option value="">Pilih Jenis Kelamin</option>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="form-grup mt-3">
                <label for="">No. Telp</label>
                <input type="number" name="no_telp" required value="<?= (isset($_POST['No_telp'])) ? $_POST['No_telp'] : ''; ?>" class="form-control">
                <span class="text-danger"><?= (isset($err['No_telp'])) ? $err['No_telp'] : '' ?></span>
            </div>
            <div class="form-grup mt-3">
                <label for="">Tambahkan sebagai</label>
                <select name="jenis_kelamin" class="form-control" id="">
                    <option value="">Pilihan</option>
                    <option value="Admin">Admin</option>
                    <option value="Petugas">Petugas</option>
                </select>
            </div>
            <br>
            <div class="form-grup">
                <button type="submit" class="btn btn-primary">Save</button>
                <button type="reset" class="btn btn-success ml-2">Reset</button>
                <button type="reset" class="btn btn-danger ml-2"><a href="http://localhost:8080/siperpus//admin/index.php?mod=petugas" class="text-white">Kembali</a></button>
            </div>
        </div>
    </div>
</form>
