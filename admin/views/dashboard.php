<?php
$con->auth();
$conn = $con->koneksi();

//mengambil data
$admin1 = $conn->query("SELECT * FROM admin");
$petugas1 = $conn->query("SELECT * FROM petugas");
$anggota1 = $conn->query("SELECT * FROM anggota");
$buku1 = $conn->query("SELECT * FROM buku");
$peminjaman1 = $conn->query("SELECT * FROM peminjaman");
$pengembalian1 = $conn->query("SELECT * FROM pengembalian ");

$jml_admin = mysqli_num_rows($admin1);
$jml_petugas = mysqli_num_rows($petugas1);
$jml_anggota = mysqli_num_rows($anggota1);
$jml_buku = mysqli_num_rows($buku1);
$jml_peminjaman = mysqli_num_rows($peminjaman1);
$jml_pengembalian = mysqli_num_rows($pengembalian1);

$org = " Org";
$conn->close();
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="http://localhost:8080/siperpus/assets/css/template.css">

    <title>Dashboard</title>
</head>

<body>
    <h3 class="mt-3 ml-2"><i class="fas fa-tachometer-alt mr-3"></i><b>DASHBOARD</b></h3>

    <div class="card-body mt-0 shadow p-3 mb-4 bg-white rounded">Selamat Datang <b><?php echo $_SESSION['login']['nama']; ?></b>, anda login sebagai <b>Admin</b>. Selalu jaga kerahasiaan username dan password anda.</div>
    <div class="row ml-4 text-white">
        <div class="card bg-primary p-2 shadow rounded" style="width: 21rem;">
            <div class="card-body">
                <div class="card-body-icon">
                    <i class="fas fa-user-cog"></i>
                </div>
                <h5 class="card-title">ADMIN</h5>
                <div class="display-4"><?php echo number_format($jml_admin), ($org); ?></div>
                <a href="index.php?mod=admin">
                    <p class="card-text text-white mt-2">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p>
                </a>
            </div>
        </div>
        <div class=" card bg-success ml-4 p-2 shadow rounded" style="width: 21rem;">
            <div class="card-body">
                <div class="card-body-icon">
                    <i class="fas fa-user-edit"></i>
                </div>
                <h5 class="card-title">PETUGAS</h5>
                <div class="display-4"><?php echo number_format($jml_petugas), ($org); ?></div>
                <a href="index.php?mod=petugas">
                    <p class="card-text text-white mt-2">Lihat Detail<i class="fas fa-angle-double-right ml-2"></i></p>
                </a>
            </div>
        </div>
        <div class="card bg-danger ml-4 p-2 shadow rounded" style="width: 21rem;">
            <div class="card-body pt-3">
                <div class="card-body-icon">
                    <i class="fas fa-user"></i>
                </div>
                <h5 class="card-title">ANGGOTA</h5>
                <div class="display-4"><?php echo number_format($jml_anggota), ($org); ?></div>
                <a href="index.php?mod=anggota">
                    <p class="card-text text-white mt-2">Lihat Detail<i class="fas fa-angle-double-right ml-2"></i></p>
                </a>
            </div>
        </div>
    </div>
    <div class="row mt-4 ml-4 text-white">
        <div class="card bg-secondary p-2 shadow rounded" style="width: 21rem;">
            <div class="card-body">
                <div class="card-body-icon">
                    <i class="fas fa-book"></i>
                </div>
                <h5 class="card-title">JUMLAH BUKU</h5>
                <div class="display-4"><?php echo number_format($jml_buku); ?></div>
                <a href="index.php?mod=buku">
                    <p class="card-text text-white mt-2">Lihat Detail<i class="fas fa-angle-double-right ml-2"></i></p>
                </a>
            </div>
        </div>
        <div class="card bg-warning ml-4 p-2 shadow rounded" style="width: 21rem;">
            <div class="card-body">
                <div class="card-body-icon">
                    <i class="fas fa-book-open"></i>
                </div>
                <h5 class="card-title">RIWAYAT PEMINJAMAN</h5>
                <div class="display-4"><?php echo number_format($jml_peminjaman); ?></div>
                <a href="index.php?mod=peminjaman">
                    <p class="card-text text-white mt-2">Lihat Detail<i class="fas fa-angle-double-right ml-2"></i></p>
                </a>
            </div>
        </div>
        <div class="card bg-info ml-4 p-2 shadow rounded" style="width: 21rem;">
            <div class="card-body">
                <div class="card-body-icon">
                    <i class="fas fa-book-reader"></i>
                </div>
                <h5 class="card-title">RIWAYAT PENGEMBALIAN</h5>
                <div class="display-4"><?php echo number_format($jml_pengembalian); ?></div>
                <a href="index.php?mod=pengembalian">
                    <p class="card-text text-white mt-2">Lihat Detail<i class="fas fa-angle-double-right ml-2"></i></p>
                </a>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</body>

</html>
