<h5 class="ml-2 mb-3"><b>TAMBAH DATA ANGGOTA</b></h5>
<form action="index.php?mod=anggota&page=save" method="POST">
    <div class="row">
        <div class="col-md-5 ml-2">
            <div class="form-grup">
                <label for="">Username</label>
                <input type="text" name="username" required value="<?= (isset($_POST['username'])) ? $_POST['username'] : ''; ?>" class="form-control">
                <span class="text-danger"><?= (isset($err['username'])) ? $err['username'] : '' ?></span>
            </div>
            <div class="form-grup mt-3">
                <label for="">Password</label>
                <input type="password" name="password" required value="<?= (isset($_POST['password'])) ? $_POST['password'] : ''; ?>" class="form-control">
                <span class="text-danger"><?= (isset($err['password'])) ? $err['password'] : '' ?></span>
            </div>
            <div class="form-grup mt-3">
                <label for="">Id Anggota</label>
                <input type="number" name="id_anggota" required value="<?= (isset($_POST['Id_Anggota'])) ? $_POST['Id_Anggota'] : ''; ?>" class="form-control">
                <span class="text-danger"><?= (isset($err['Id_Anggota'])) ? $err['Id_Anggota'] : '' ?></span>
            </div>
            <div class="form-grup mt-3">
                <label for="">Nama Lengkap</label>
                <input type="text" name="nama_anggota" required class="form-control" value="<?= (isset($_POST['Nama_Anggota'])) ? $_POST['Nama_Anggota'] : ''; ?>">
                <span class="text-danger"><?= (isset($err['Nama_Anggota'])) ? $err['Nama_Anggota'] : '' ?></span>
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
                <select name="jenis_kelamin" value="<?= (isset($_POST['jenis_kelamin'])) ? $_POST['jenis_kelamin'] : ''; ?>" class="form-control" id="">
                    <option value="">Pilih Jenis Kelamin</option>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="form-grup mt-3">
                <label for="">Tanggal Lahir</label>
                <input type="date" name="tgl_lahir" required value="<?= (isset($_POST['Tgl_Lahir'])) ? $_POST['Tgl_Lahir'] : ''; ?>" class="form-control">
                <span class="text-danger"><?= (isset($err['Tgl_Lahir'])) ? $err['Tgl_Lahir'] : '' ?></span>
            </div>
            <div class="form-grup mt-3">
                <label for="">Tanggal Daftar</label>
                <input type="date" name="tgl_daftar" required value="<?= (isset($_POST['Tgl_Daftar'])) ? $_POST['Tgl_Daftar'] : ''; ?>" class="form-control">
                <span class="text-danger"><?= (isset($err['Tgl_Daftar'])) ? $err['Tgl_Daftar'] : '' ?></span>
            </div>
            <br>
            <div class="form-grup">
                <button type="submit" class="btn btn-primary">Save</button>
                <button type="reset" class="btn btn-success ml-2">Reset</button>
                <button type="submit" class="btn btn-danger ml-2"><a href="http://localhost:8080/siperpus/admin/index.php?mod=anggota" class="text-white">Kembali</a></button>
            </div>
        </div>
    </div>
</form>