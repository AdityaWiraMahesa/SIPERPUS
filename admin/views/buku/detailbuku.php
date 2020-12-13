<h5 class="ml-2 mb-3"><i class="fas fa-book mr-2"></i><b>DETAIL DATA BUKU</b></h5>
<hr class="mb-4">
<form action="index.php?mod=buku&page=update" method="POST">
    <div class="row">
        <div class="col-md-5 ml-2">
            <div class="form-grup">
                <label for="">Kode Buku</label>
                <input type="text" name="kode_buku" required value="<?= (isset($_POST['Kode_Buku'])) ? $_POST['Kode_Buku'] : ''; ?>" class="form-control" disabled>
                <input type="hidden" name="id_buku" required value="<?= (isset($_POST['Id_Buku'])) ? $_POST['Id_Buku'] : ''; ?>" class="form-control">
                <p style="font-size: 12px;">Masukkan kode yang tertera pada buku</p>
                <span class="text-danger"><?= (isset($err['Kode_Buku'])) ? $err['Kode_Buku'] : '' ?></span>
            </div>
            <div class="form-grup mt-3">
                <label for="">Judul</label>
                <input type="text" name="judul" required value="<?= (isset($_POST['Judul'])) ? $_POST['Judul'] : ''; ?>" class="form-control" disabled>
                <span class="text-danger"><?= (isset($err['Judul'])) ? $err['Judul'] : '' ?></span>
            </div>
            <div class="form-grup mt-3">
                <label for="">Pengarang</label>
                <input type="text" name="pengarang" required value="<?= (isset($_POST['Pengarang'])) ? $_POST['Pengarang'] : ''; ?>" class="form-control" disabled>
                <span class="text-danger"><?= (isset($err['Pengarang'])) ? $err['Pengarang'] : '' ?></span>
            </div>
            <div class="form-grup mt-3">
                <label for="">Penerbit</label>
                <input type="text" name="penerbit" required class="form-control" value="<?= (isset($_POST['Penerbit'])) ? $_POST['Penerbit'] : ''; ?>" class="form-control" disabled>
                <span class="text-danger"><?= (isset($err['Penerbit'])) ? $err['Penerbit'] : '' ?></span>
            </div>
            <div class="form-grup mt-3">
                <label for="">Tahun Terbit</label>
                <input type="text" name="tahun" required value="<?= (isset($_POST['Tahun'])) ? $_POST['Tahun'] : ''; ?>" class="form-control" disabled>
                <span class="text-danger"><?= (isset($err['Tahun'])) ? $err['Tahun'] : '' ?></span>
            </div>
        </div>
        <div class="col-md-5 ml-5">
            <div class="form-grup">
                <label for="">Jenis Buku</label>
                <select name="no_jenis_buku" value="<?= (isset($_POST['No_Jenis_Buku'])) ? $_POST['No_Jenis_Buku'] : ''; ?>" class="form-control" id="" disabled>
                    <option value="">Pilih Jenis Buku</option>
                    <option value="01" <?php echo $_POST['No_Jenis_Buku'] == '01' ? 'selected="selected"' : '' ?>>Sejarah</option>
                    <option value="02" <?php echo $_POST['No_Jenis_Buku'] == '02' ? 'selected="selected"' : '' ?>>Fiksi</option>
                    <option value="03" <?php echo $_POST['No_Jenis_Buku'] == '03' ? 'selected="selected"' : '' ?>>Dongeng</option>
                </select>
            </div>
            <div class="row">
                <div class="input-grup mt-3 ml-3">
                    <label for="">Jumlah Buku</label>
                    <input class="form-control" type="number" name="jumlah" required value="<?= (isset($_POST['Jumlah'])) ? $_POST['Jumlah'] : ''; ?>" class="form-control" disabled>
                    <span class="text-danger"><?= (isset($err['Jumlah'])) ? $err['Jumlah'] : '' ?></span>
                </div>
                <div class="mt-5">
                    <span class="input-group-text" id="basic-addon2">Buku</span>
                </div>
            </div>

            <br>
            <div class="form-grup">
                <button type="submit" class="btn btn-primary rounded-pill"><a href="http://localhost:8080/siperpus/admin/index.php?mod=buku&page=edit&id=<?= $_GET['id']?>" class="text-white"><i class="fas fa-edit mr-2"></i>Update</a></button>
                <button type="reset" class="btn btn-success ml-1 rounded-pill"><i class="fas fa-undo mr-2"></i>Reset</button>
                <button type="submit" class="btn btn-danger ml-1 rounded-pill"><a href="http://localhost:8080/siperpus/admin/index.php?mod=buku" class="text-white"><i class="fas fa-arrow-circle-left mr-2"></i>Back</a></button>
            </div>
        </div>
    </div>
</form>