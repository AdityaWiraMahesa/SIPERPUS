<h4>Update Data</h4>
<form action="index.php?mod=petugas&page=save" method="POST">
    <div class="col-md-5">
        <div class="form-grup">
            <label for="">Username</label>
            <input type="text" name="Username" required value="<?= (isset($_POST['Username'])) ? $_POST['Username'] : ''; ?>" class="form-control">
            <span class="text-danger"><?= (isset($err['Username'])) ? $err['Username'] : '' ?></span>
        </div>
        <div class="form-grup">
            <label for="">Password</label>
            <input type="text" name="password" required value="<?= (isset($_POST['Password'])) ? $_POST['Password'] : ''; ?>" class="form-control">
            <span class="text-danger"><?= (isset($err['password'])) ? $err['password'] : '' ?></span>
        </div>
        <div class="form-grup">
            <label for="">Id Petugas</label>
            <input type="number" name="Id_Petugas" required value="<?= (isset($_POST['Id_Petugas'])) ? $_POST['Id_Petugas'] : ''; ?>" class="form-control">
            <span class="text-danger"><?= (isset($err['Id_Petugas'])) ? $err['Id_Petugas'] : '' ?></span>
        </div>
        <div class="form-grup">
            <label for="">Nama Petugas</label>
            <input type="text" name="Nama" required class="form-control" value="<?= (isset($_POST['Nama'])) ? $_POST['Nama'] : ''; ?>">
            <span class="text-danger"><?= (isset($err['Nama'])) ? $err['Nama'] : '' ?></span>
        </div>
        <div class="form-grup">
            <label for="">Alamat</label>
            <input type="text" name="Alamat" required value="<?= (isset($_POST['Alamat'])) ? $_POST['Alamat'] : ''; ?>" class="form-control">
            <span class="text-danger"><?= (isset($err['Alamat'])) ? $err['Alamat'] : '' ?></span>
        </div>
    </div>
    <div class="col-md-5">
        <div class="form-grup">
            <label for="">Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-control" id="">
                <option value="">Pilih Jenis Kelamin</option>
                <option value="Laki-laki" <?php echo $_POST['Jenis_Kelamin'] == 'Laki-Laki' ? 'selected="selected"' : '' ?>>Laki-Laki</option>
                <option value="Perempuan" <?php echo $_POST['Jenis_Kelamin'] == 'Perempuan' ? 'selected="selected"' : '' ?>>Perempuan</option>
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
