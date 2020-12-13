<h5 class="ml-2 mb-3"><b><i class="fas fa-book mr-2"></i>TAMBAH DATA BUKU</b></h5>
<hr class="mb-4">
<form action="index.php?mod=buku&page=save" method="POST">
    <div class="row">
        <div class="col-md-5 ml-2">
            <div class="card-body mt-0 shadow p-3 mb-4 bg-success rounded"> <b>Note : </b>Mohon mengisi data sesuai dengan yang tertera pada buku</div>
            <div class="form-grup">
                <label for="">Kode Buku</label>
                <input type="text" name="kode_buku" required value="<?= (isset($_POST['kode_buku'])) ? $_POST['kode_buku'] : ''; ?>" class="form-control">
                <input type="hidden" name="id_buku" value="<?= (isset($_POST['id_buku'])) ? $_POST['id_buku'] : ''; ?>" class="form-control">
                <p style="font-size: 12px;">Masukkan kode yang tertera pada buku</p>
                <span class="text-danger"><?= (isset($err['kode_buku'])) ? $err['kode_buku'] : '' ?></span>
            </div>
            <div class="form-grup mt-3">
                <label for="">Judul</label>
                <input type="text" name="judul" required value="<?= (isset($_POST['judul'])) ? $_POST['judul'] : ''; ?>" class="form-control">
                <span class="text-danger"><?= (isset($err['judul'])) ? $err['judul'] : '' ?></span>
            </div>
            <div class="form-grup mt-3">
                <label for="">Pengarang</label>
                <input type="text" name="pengarang" required value="<?= (isset($_POST['pengarang'])) ? $_POST['pengarang'] : ''; ?>" class="form-control">
                <span class="text-danger"><?= (isset($err['pengarang'])) ? $err['pengarang'] : '' ?></span>
            </div>
            <div class="form-grup mt-3">
                <label for="">Penerbit</label>
                <input type="text" name="penerbit" required class="form-control" value="<?= (isset($_POST['penerbit'])) ? $_POST['penerbit'] : ''; ?>">
                <span class="text-danger"><?= (isset($err['penerbit'])) ? $err['penerbit'] : '' ?></span>
            </div>
        </div>
        <div class="col-md-5 ml-5">
            <div class="form-grup">
                <label for="">Tahun Terbit</label>
                <input type="text" name="tahun" required value="<?= (isset($_POST['tahun'])) ? $_POST['tahun'] : ''; ?>" class="form-control">
                <span class="text-danger"><?= (isset($err['tahun'])) ? $err['tahun'] : '' ?></span>
            </div>
            <div class="form-grup mt-3">
                <label for="">Jenis Buku</label>
                <select name="no_jenis_buku" value="<?= (isset($_POST['no_jenis_buku'])) ? $_POST['no_jenis_buku'] : ''; ?>" class="form-control" id="">
                    <option value="">Pilih Jenis Buku</option>
                    <option value="01">Sejarah</option>
                    <option value="02">Fiksi</option>
                    <option value="03">Dongeng</option>
                </select>
            </div>
            <div class="row">
                <div class="input-grup mt-3 ml-3">
                    <label for="">Jumlah Buku</label>
                    <input class="form-control" type="number" name="jumlah" required value="<?= (isset($_POST['jumlah'])) ? $_POST['jumlah'] : ''; ?>" class="form-control">
                    <span class="text-danger"><?= (isset($err['jumlah'])) ? $err['jumlah'] : '' ?></span>
                </div>
                <div class="mt-5">
                    <span class="input-group-text" id="basic-addon2">Buku</span>
                </div>
            </div>

            <br>
            <div class="form-grup">
                <button type="submit" class="btn btn-primary rounded-pill"><i class="fas fa-save mr-2"></i>Save</button>
                <button type="reset" class="btn btn-success ml-1 rounded-pill"><i class="fas fa-undo mr-2"></i>Reset</button>
                <button type="submit" class="btn btn-danger ml-1 rounded-pill"><a href="http://localhost:8080/siperpus/admin/index.php?mod=buku" class="text-white"><i class="fas fa-arrow-circle-left mr-2"></i>Back</a></button>
            </div>
        </div>
    </div>
</form>
