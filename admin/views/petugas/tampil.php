<div class="row">
    <div class="pull-left">
        <h4>Daftar Petugas</h4>
    </div>
    <div class="pull-right">
        <a href="index.php?mod=petugas&page=add">
            <button class="btn btn-primary">Add</button>
        </a>
    </div>
</div>
<div class="row">
    <table class="table">
        <thead>
            <tr>
                <td>No</td>
                <td>Id Petugas</td>
                <td>Nama</td>
                <td>Alamat</td>
                <td>Jenis Kelamin</td>
                <td>No. Telp</td>
                <td>Ubah</td>
            </tr>
        </thead>
        <tbody>
            <?php if ($petugas != NULL) {
                $no = 1;
                foreach ($petugas as $row) { ?>
                    <tr>
                        <td><?= $no ?></td>
                        <td><?= $row['Id_Petugas'] ?></td>
                        <td><?= $row['Nama'] ?></td>
                        <td><?= $row['Alamat'] ?></td>
                        <td><?= $row['Jenis_Kelamin'] ?></td>
                        <td><?= $row['No_telp'] ?></td>
                        <td>
                            <a href="index.php?mod=petugas&page=edit&id=<?= md5($row['Id_Petugas']) ?>"><i class="fa fa-pencil"></i> </a>
                            <a href="index.php?mod=petugas&page=delete&id=<?= md5($row['Id_Petugas']) ?>"><i class="fa fa-trash"></i> </a>
                        </td>
                    </tr>
            <?php $no++;
                }
            } ?>
        </tbody>
    </table>
</div>