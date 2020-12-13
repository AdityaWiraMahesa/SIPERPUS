<h5 class="mb-3"><b><i class="fas fa-user-edit mr-2"></i>UPDATE DATA PETUGAS</b></h5>
<hr class="mb-4">
<form action="index.php?mod=petugas&page=update" method="POST" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-5 ml-2">
            <div class="form-grup">
                <label for="">Username</label>
                <input type="text" name="username" required value="<?= (isset($petugas['Username'])) ? $petugas['Username'] : ''; ?>" class="form-control">
                <input type="hidden" name="id_petugas" value="<?= (isset($petugas['Id_Petugas'])) ? $petugas['Id_Petugas'] : ''; ?>" class="form-control">
                <input type="hidden" name="photo_old" value="<?= (isset($petugas['photo'])) ? $petugas['photo'] : ''; ?>">
                <span class="text-danger"><?= (isset($err['Username'])) ? $err['Username'] : '' ?></span>
            </div>
            <div class="form-grup mt-3">
                <label for="">Password</label>
                <input type="password" name="password" required value="<?= (isset($petugas['password'])) ? $petugas['password'] : ''; ?>" class="form-control">
                <span class="text-danger"><?= (isset($err['password'])) ? $err['password'] : '' ?></span>
            </div>
            <div class="form-grup mt-3">
                <label for="">Nama Lengkap</label>
                <input type="text" name="nama" required class="form-control" value="<?= (isset($petugas['Nama'])) ? $petugas['Nama'] : ''; ?>">
                <span class="text-danger"><?= (isset($err['Nama'])) ? $err['Nama'] : '' ?></span>
            </div>
            <div class="form-grup mt-3">
                <label for="">Alamat</label>
                <input type="text" name="alamat" required value="<?= (isset($petugas['Alamat'])) ? $petugas['Alamat'] : ''; ?>" class="form-control">
                <p style="font-size: 12px;"> Note : Alamat yang ditambahkan merupakan alamat lengkap saat ini dan sesuai dengan yang tertera pada Kartu Tanda Penduduk (KTP)</p>
                <span class="text-danger"><?= (isset($err['Alamat'])) ? $err['Alamat'] : '' ?></span>
            </div>
        </div>
        <div class="col-md-5">
            <div class="form-grup">
                <label for="">Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-control" id="">
                    <option value="">Pilih Jenis Kelamin</option>
                    <option value="Laki-Laki" <?php echo $petugas['Jenis_Kelamin'] == 'Laki-Laki' ? 'selected="selected"' : '' ?>>Laki-Laki</option>
                    <option value="Perempuan" <?php echo $petugas['Jenis_Kelamin'] == 'Perempuan' ? 'selected="selected"' : '' ?>>Perempuan</option>
                </select>
            </div>
            <div class="form-grup mt-3">
                <label for="">No. Telp</label>
                <input type="number" name="no_telp" required value="<?= (isset($petugas['No_telp'])) ? $petugas['No_telp'] : ''; ?>" class="form-control">
                <span class="text-danger"><?= (isset($err['No_telp'])) ? $err['No_telp'] : '' ?></span>
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
                <button type="submit" class="btn btn-danger ml-1 rounded-pill"><a href="http://localhost:8080/siperpus//admin/index.php?mod=petugas" class="text-white"><i class="fas fa-arrow-circle-left mr-2"></i>Back</a></button>
            </div>
        </div>
    </div>
</form>
