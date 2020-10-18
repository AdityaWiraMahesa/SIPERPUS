<h4>Tambah Data</h4>
<hr>
<form action="index.php?mod=petugas&page=save" method="POST">
    <div class="col-md-5">
        <div class="form-grup">
            <label for="">Id Petugas</label>
            <input type="number" name="id_petugas" required value="<?=(isset($_POST['id_petugas']))?$_POST['id_petugas']:'';?>" class="form-control">
            <span class="text-danger"><?= (isset($err['id_petugas'])) ? $err['id_petugas'] : '' ?></span>
        </div>
        <div class="form-grup">
            <label for="">Nama Petugas</label>
            <input type="text" name="nama" required class="form-control" value="<?= (isset($_POST['nama'])) ?$_POST['nama'] : ''; ?>">
            <span class="text-danger"><?= (isset($err['nama'])) ? $err['nama'] : '' ?></span>
        </div>
        <div class="form-grup">
            <label for="">Alamat</label>
            <input type="text" name="alamat" required value="<?= (isset($_POST['alamat'])) ? $_POST['alamat'] : ''; ?>" class="form-control">
            <span class="text-danger"><?= (isset($err['alamat'])) ? $err['alamat'] : '' ?></span>
        </div>
    </div>
    <div class="col-md-5">
        <div class="form-grup">
            <label for="">Jenis Kelamin</label>
            <select name="jenis_kelamin" value="<?= (isset($_POST['jenis_kelamin'])) ? $_POST['jenis_kelamin'] : ''; ?>" class="form-control" id="">
                <option value="">Pilih Jenis Kelamin</option>
                <option value="L">Laki-Laki</option>
                <option value="P">Perempuan</option>
            </select>
        </div>
        <div class="form-grup">
            <label for="">No. Telp</label>
            <input type="number" name="no_telp" required value="<?= (isset($_POST['no_telp'])) ? $_POST['no_telp'] : ''; ?>" class="form-control">
            <span class="text-danger"><?= (isset($err['no_telp'])) ? $err['no_telp'] : '' ?></span>
        </div>
        <br>
        <div class="form-grup">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </div>
</form>