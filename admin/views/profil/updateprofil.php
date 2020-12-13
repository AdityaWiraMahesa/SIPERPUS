<h5 class="ml-2 mb-3"><b>UPDATE PROFIL</b></h5>
<form action="index.php?mod=admin&page=updateprofil" method="POST" enctype="multipart/form-data">
    <div class=" row">
        <div class="col-md-5 ml-2">
            <div class="form-grup">
                <label for="">Username</label>
                <input type="text" name="username" required value="<?= (isset($admin['Username'])) ? $admin['Username'] : ''; ?>" class="form-control">
                <input type="hidden" name="id_admin" value="<?= (isset($admin['Id_Admin'])) ? $admin['Id_Admin'] : ''; ?>" class="form-control">
                <input type="hidden" name="photo_old" value="<?= (isset($admin['photo'])) ? $admin['photo'] : ''; ?>">
                <span class="text-danger"><?= (isset($err['Username'])) ? $err['Username'] : '' ?></span>
            </div>
            <div class="form-grup mt-3">
                <label for="">Password</label>
                <input type="password" name="password" required value="<?= (isset($admin['password'])) ? $admin['password'] : ''; ?>" class="form-control">
                <span class="text-danger"><?= (isset($err['Password'])) ? $err['Password'] : '' ?></span>
            </div>
            <div class="form-grup mt-3">
                <label for="">Nama Lengkap</label>
                <input type="text" name="nama_admin" required class="form-control" value="<?= (isset($admin['Nama_Admin'])) ? $admin['Nama_Admin'] : ''; ?>">
                <span class="text-danger"><?= (isset($err['Nama_Admin'])) ? $err['Nama_Admin'] : '' ?></span>
            </div>
            <div class="form-grup mt-3">
                <label for="">Alamat</label>
                <input type="text" name="alamat" required value="<?= (isset($admin['Alamat'])) ? $admin['Alamat'] : ''; ?>" class="form-control">
                <p style="font-size: 12px;" class="text"> Note : Alamat yang ditambahkan merupakan alamat lengkap saat ini dan sesuai dengan yang tertera pada Kartu Tanda Penduduk (KTP)</p>
                <span class="text-danger"><?= (isset($err['Alamat'])) ? $err['Alamat'] : '' ?></span>
            </div>
        </div>
        <div class="col-md-5 ml-5">
            <div class="form-grup">
                <label for="">Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-control" id="">
                    <option value="">Pilih Jenis Kelamin</option>
                    <option value="Laki-Laki" <?php echo $admin['Jenis_Kelamin'] == 'Laki-Laki' ? 'selected="selected"' : '' ?>>Laki-Laki</option>
                    <option value="Perempuan" <?php echo $admin['Jenis_Kelamin'] == 'Perempuan' ? 'selected="selected"' : '' ?>>Perempuan</option>
                </select>
            </div>
            <div class="form-grup mt-3">
                <label for="">No. Telp</label>
                <input type="number" name="no_telp" required value="<?= (isset($admin['No_Telp'])) ? $admin['No_Telp'] : ''; ?>" class="form-control">
                <span class="text-danger"><?= (isset($err['No_Telp'])) ? $err['No_Telp'] : '' ?></span>
            </div>
            <div class="form-group mt-3">
                <label for="">Ganti Photo</label>
                <img src="../media/<?= $admin['photo'] ?>" width="100">
                <input type="file" name="fileToUpload" class="form-control">
                <span class="text-danger"><?= (isset($err['fileToUpload'])) ? $err['fileToUpload'] : ''; ?></span>
            </div>
            <br>
            <div class="form-grup">
                <button type="submit" class="btn btn-primary"><i class="fas fa-edit mr-2"></i>Update</button>
                <button type="reset" class="btn btn-success ml-2"><i class="fas fa-undo mr-2"></i>Reset</button>
                <button type="submit" class="btn btn-danger ml-2"><a href="http://localhost:8080/siperpus/admin/index.php" class="text-white"><i class="fas fa-arrow-circle-left mr-2"></i>Back</a></button>
            </div>
        </div>
    </div>
</form>