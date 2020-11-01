<h5>Tambah Data</h5>
<form action="index.php?mod=petugas&page=save" method="POST">
    <div class="col-md-5">
        <div class="form-grup">
            <label for="">Username</label>
            <input type="text" name="username" required value="<?= (isset($_POST['Username'])) ? $_POST['Username'] : ''; ?>" class="form-control">
            <span class="text-danger"><?= (isset($err['Username'])) ? $err['Username'] : '' ?></span>
        </div>
        <div class="form-grup">
            <label for="">Password</label>
            <input type="text" name="password" required value="<?= (isset($_POST['password'])) ? $_POST['password'] : ''; ?>" class="form-control">
            <span class="text-danger"><?= (isset($err['password'])) ? $err['password'] : '' ?></span>
        </div>
        <div class="form-grup">
            <label for="">Id Petugas</label>
            <input type="number" name="id_petugas" required value="<?= (isset($_POST['Id_Petugas'])) ? $_POST['Id_Petugas'] : ''; ?>" class="form-control">
            <span class="text-danger"><?= (isset($err['Id_Petugas'])) ? $err['Id_Petugas'] : '' ?></span>
        </div>
        <div class="form-grup">
            <label for="">Nama Petugas</label>
            <input type="text" name="nama" required class="form-control" value="<?= (isset($_POST['Nama'])) ? $_POST['Nama'] : ''; ?>">
            <span class="text-danger"><?= (isset($err['Nama'])) ? $err['Nama'] : '' ?></span>
        </div>
        <div class="form-grup">
            <label for="">Alamat</label>
            <input type="text" name="alamat" required value="<?= (isset($_POST['Alamat'])) ? $_POST['Alamat'] : ''; ?>" class="form-control">
            <span class="text-danger"><?= (isset($err['Alamat'])) ? $err['Alamat'] : '' ?></span>
        </div>
    </div>
    <div class="col-md-5">
        <div class="form-grup">
            <label for="">Jenis Kelamin</label>
            <select name="jenis_kelamin" value="<?= (isset($_POST['jenis_kelamin'])) ? $_POST['jenis_kelamin'] : ''; ?>" class="form-control" id="">
                <option value="">Pilih Jenis Kelamin</option>
                <option value="Laki-laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <div class="form-grup">
            <label for="">No. Telp</label>
            <input type="number" name="no_telp" required value="<?= (isset($_POST['No_telp'])) ? $_POST['No_telp'] : ''; ?>" class="form-control">
            <span class="text-danger"><?= (isset($err['No_telp'])) ? $err['No_telp'] : '' ?></span>
        </div>
        <br>
        <div class="form-grup">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </div>
</form>
