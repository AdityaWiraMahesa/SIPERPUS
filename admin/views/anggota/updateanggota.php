<h5 class="ml-2 mb-3"><i class="fas fa-user mr-2"></i><b>UPDATE DATA ANGGOTA</b></h5>
<hr class="mb-4">
<form action="index.php?mod=anggota&page=update" method="POST" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-5 ml-2">
            <div class="form-grup">
                <label for="">Username</label>
                <input type="text" name="username" required value="<?= (isset($anggota['username'])) ? $anggota['username'] : ''; ?>" class="form-control">
                <input type="hidden" name="id_anggota" value="<?= (isset($anggota['Id_Anggota'])) ? $anggota['Id_Anggota'] : ''; ?>" class="form-control">
                <input type="hidden" name="photo_old" value="<?= (isset($anggota['photo'])) ? $anggota['photo'] : ''; ?>">
                <span class="text-danger"><?= (isset($err['username'])) ? $err['username'] : '' ?></span>
            </div>
            <div class="form-grup mt-3">
                <label for="">Password</label>
                <input type="password" name="password" required value="<?= (isset($anggota['Password'])) ? $anggota['password'] : ''; ?>" class="form-control">
                <span class="text-danger"><?= (isset($err['password'])) ? $err['password'] : '' ?></span>
            </div>
            <div class="form-grup mt-3">
                <label for="">Nama Lengkap</label>
                <input type="text" name="nama_anggota" required class="form-control" value="<?= (isset($anggota['Nama_Anggota'])) ? $anggota['Nama_Anggota'] : ''; ?>">
                <span class="text-danger"><?= (isset($err['Nama_Anggota'])) ? $err['Nama_Anggota'] : '' ?></span>
            </div>
            <div class="form-grup mt-3">
                <label for="">Alamat</label>
                <input type="text" name="alamat" required value="<?= (isset($anggota['Alamat'])) ? $anggota['Alamat'] : ''; ?>" class="form-control">
                <p style="font-size: 12px;"> Note : Alamat yang ditambahkan merupakan alamat lengkap saat ini dan sesuai dengan yang tertera pada Kartu Tanda Penduduk (KTP)</p>
                <span class="text-danger"><?= (isset($err['Alamat'])) ? $err['Alamat'] : '' ?></span>
            </div>
            <div class="form-grup mt-3">
                <label for="">Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-control" id="">
                    <option value="">Pilih Jenis Kelamin</option>
                    <option value="Laki-laki" <?php echo $anggota['Jenis_Kelamin'] == 'Laki-Laki' ? 'selected="selected"' : '' ?>>Laki-Laki</option>
                    <option value="Perempuan" <?php echo $anggota['Jenis_Kelamin'] == 'Perempuan' ? 'selected="selected"' : '' ?>>Perempuan</option>
                </select>
            </div>
        </div>
        <div class="col-md-5 ml-5">
            <div class="form-grup mt-3">
                <label for="">Tanggal Lahir</label>
                <input type="date" name="tgl_lahir" required value="<?= (isset($anggota['Tgl_Lahir'])) ? $anggota['Tgl_Lahir'] : ''; ?>" class="form-control">
                <span class="text-danger"><?= (isset($err['Tgl_Lahir'])) ? $err['Tgl_Lahir'] : '' ?></span>
            </div>
            <div class="form-grup mt-3">
                <label for="">Tanggal Daftar</label>
                <input type="date" name="tgl_daftar" required value="<?= (isset($anggota['Tgl_Daftar'])) ? $anggota['Tgl_Daftar'] : ''; ?>" class="form-control">
                <span class="text-danger"><?= (isset($err['Tgl_Daftar'])) ? $err['Tgl_Daftar'] : '' ?></span>
            </div>
            <div class="form-group mt-3">
                <label for="">Ganti Photo</label>
                <img src="../media/<?= $_POST['photo'] ?>" width="100"><br>
                <input type="file" name="fileToUpload" class="border rounded-pill">
                <span class="text-danger"><?= (isset($err['fileToUpload'])) ? $err['fileToUpload'] : ''; ?></span>
            </div>
            <br>
            <div class="form-grup">
                <button type="submit" class="btn btn-primary rounded-pill"><i class="fas fa-edit mr-2"></i>Update</button>
                <button type="reset" class="btn btn-success ml-1 rounded-pill"><i class="fas fa-undo mr-2"></i>Reset</button>
                <button type="submit" class="btn btn-danger ml-1 rounded-pill"><a href="http://localhost:8080/siperpus//admin/index.php?mod=anggota" class="text-white"><i class="fas fa-arrow-circle-left mr-2"></i>Back</a></button>
            </div>
        </div>
    </div>
</form>
