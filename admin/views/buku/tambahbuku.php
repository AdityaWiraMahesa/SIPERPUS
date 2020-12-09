<h5 class="ml-2 mb-3"><b>TAMBAH DATA BUKU</b></h5>
<form action="index.php?mod=buku&page=save" method="POST">
    <div class="col-md-10">
        <div class="form-grup">
            <label for="">Kode Buku</label>
            <input type="number" name="kode_buku" required value="<?= (isset($_POST['Kode_Buku'])) ? $_POST['Kode_Buku'] : ''; ?>" class="form-control">
            <span class="text-danger"><?= (isset($err['Kode_Buku'])) ? $err['Kode_Buku'] : '' ?></span>
        </div>
        <div class="form-grup mt-3">
            <label for="">Judul</label>
            <input type="text" name="judul" required value="<?= (isset($_POST['Judul'])) ? $_POST['Judul'] : ''; ?>" class="form-control">
            <span class="text-danger"><?= (isset($err['Judul'])) ? $err['Judul'] : '' ?></span>
        </div>
        <div class="form-grup mt-3">
            <label for="">Pengarang</label>
            <input type="text" name="pengarang" required value="<?= (isset($_POST['Pengarang'])) ? $_POST['Pengarang'] : ''; ?>" class="form-control">
            <span class="text-danger"><?= (isset($err['Pengarang'])) ? $err['Pengarang'] : '' ?></span>
        </div>
        <div class="form-grup mt-3">
            <label for="">Penerbit</label>
            <input type="text" name="penerbit" required class="form-control" value="<?= (isset($_POST['Penerbit'])) ? $_POST['Penerbit'] : ''; ?>">
            <span class="text-danger"><?= (isset($err['Penerbit'])) ? $err['Penerbit'] : '' ?></span>
        </div>
        <div class="form-grup mt-3">
            <label for="">Tahun</label>
            <input type="text" name="tahun" required value="<?= (isset($_POST['Tahun'])) ? $_POST['Tahun'] : ''; ?>" class="form-control">
            <span class="text-danger"><?= (isset($err['Tahun'])) ? $err['Tahun'] : '' ?></span>
        </div>
        <div class="form-grup mt-3">
            <label for="">Jenis Buku</label>
            <select name="no_jenis_buku" value="<?= (isset($_POST['No_Jenis_Buku'])) ? $_POST['No_Jenis_Buku'] : ''; ?>" class="form-control" id="">
                <option value="">Pilih Jenis Buku</option>
                <option value="01">Sejarah</option>
                <option value="02">Fiksi</option>
                <option value="03">Dongeng</option>
            </select>
        </div>
        <br>
        <div class="form-grup">
            <button type="submit" class="btn btn-primary">Save</button>
            <button type="reset" class="btn btn-success ml-2">Reset</button>
            <button type="submit" class="btn btn-danger ml-2"><a href="http://localhost:8080/siperpus/admin/index.php?mod=buku" class="text-white">Kembali</a></button>
        </div>
    </div>
</form>