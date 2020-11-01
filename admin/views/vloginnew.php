<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="./siperpus/assets/admin.css">
    <title>Dashboard</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><b>E-PERPUSTAKAAN</b></a>
        <form class="form-inline my-2 my-lg-0 ml-auto">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
        <ul class="nav pull-right navbar-nav navbar-right ml-2">
            <li><a href="../admin/controller/logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
        </ul>
        </div>
    </nav>
    <div class="row no-gutters">
        <div class="col-md-2 bg-dark pr-3 pt-3">
            <ul class="nav flex-column ml-2 mb-5">
                <li class="nav-item">
                    <a class="nav-link active text-white" href="admin/index.php"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
                    <hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="index.php?mod=petugas">Data Petugas</a>
                    <hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="index.php?mod=anggota">Data Anggota</a>
                    <hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="index.php?mod=buku">Data Buku</a>
                    <hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="index.php?mod=peminjaman">Peminjaman</a>
                    <hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="index.php?mod=pengembalian">Pengembalian</a>
                    <hr class="bg-secondary">
                </li>
            </ul>
        </div>
        <div class="col-md-10 p-3 pt-2">
            <h3>DASHBOARD</h3>
            <hr>
            <div class="row ml-2">
                <div class="card bg-info" style="width: 22rem;">
                    <div class="card-body">
                        <h1><b>PETUGAS</b></h1>
                        <a href="index.php?mod=petugas" class="text-white">Lihat Detail >></a>
                    </div>
                </div>
                <div class="card bg-danger ml-2" style="width: 22rem;">
                    <div class="card-body pt-3">
                        <h1><b>ANGGOTA</b></h1>
                        <a href="index.php?mod=anggota" class="text-white">Lihat Detail >></a>
                    </div>
                </div>
                <div class="card bg-success ml-2" style="width: 22rem;">
                    <div class="card-body">
                        <h1><b>BUKU</b></h1>
                        <a href="index.php?mod=buku" class="text-white">Lihat Detail >></a>
                    </div>
                </div>
            </div>
            <div class="row mt-4 ml-2">
                <div class="card bg-primary" style="width: 22rem;">
                    <div class="card-body">
                        <h1><b>PEMINJAMAN</b></h1>
                        <a href="index.php?mod=petugas" class="text-white">Lihat Detail >></a>
                    </div>
                </div>
                <div class="card bg-primary ml-2" style="width: 22rem;">
                    <div class="card-body">
                        <h1>PENGEMBALIAN</h1>
                        <a href="index.php?mod=pengembalian" class="text-white">Lihat Detail >></a>
                    </div>
                </div>
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