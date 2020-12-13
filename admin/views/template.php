<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="http://localhost:8080/siperpus/assets/css/template.css">
    <title></title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning shadow" style="background-image: linear-gradient(0deg, #FFCF18, #FF8818);">
        <a class="navbar-brand" href="#"><b>e-Perpustakaan</b></a>
        <form class="form-inline my-2 my-lg-0 ml-auto">
            <input class="form-control mr-sm-2 rounded-pill" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-dark my-2 my-sm-0 rounded-pill" type="submit">Search</button>
        </form>
        <ul class="nav pull-right navbar-nav navbar-right ml-3">
            <li><a href="../admin/controller/logout.php" class="text-dark"><span class="glyphicon glyphicon-log-in"></span><i class="fas fa-sign-out-alt mr-2"></i>Sign Out</a></li>
        </ul>
    </nav>
    <div class="row no-gutters">
        <div class="col-md-2 bg-dark shadow-sm">
            <div class="pt-4 pb-4 text-xl-center" style="background-color: #333;">
                <div class="">
                    <i class="fas fa-user-circle fa-2x text-white"></i>
                </div>
                <div class="mt-3">
                    <p class="mb-0 text-white"><?php echo $_SESSION['login']['nama']; ?></p>
                    <a href="index.php?mod=admin&page=profil&id=<?= md5($_SESSION['login']['id']); ?>"" style=" font-size: 11px;">Edit Profil</a>
                </div>
            </div>
            <ul class="nav flex-column ml-2 mt-3">
                <li class="nav-item">
                    <a class="nav-link active text-white pt-1 pb-1" href="index.php"><i class="fas fa-tachometer-alt mr-3"></i>Dashboard</a>
                    <hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white pt-1 pb-1" href="index.php?mod=admin"><i class="fas fa-user-cog mr-3"></i>Data Admin</a>
                    <hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white pt-1 pb-1" href="index.php?mod=petugas"><i class="fas fa-user-edit mr-3"></i>Data Petugas</a>
                    <hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white pt-1 pb-1" href="index.php?mod=anggota"><i class="fas fa-user mr-3"></i>Data Anggota</a>
                    <hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white pt-1 pb-1" href="index.php?mod=buku"><i class="fas fa-book mr-3"></i>Data Buku</a>
                    <hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white pt-1 pb-1" href="index.php?mod=peminjaman"><i class="fas fa-book-open mr-3"></i>Peminjaman</a>
                    <hr class="bg-secondary">
                </li>
                <li class="nav-item pb-3">
                    <a class="nav-link text-white pt-1 pb-1" href="index.php?mod=pengembalian"><i class="fas fa-book-reader mr-3"></i>Pengembalian</a>
                    <hr class="bg-secondary">
                </li>
            </ul>
        </div>
        <div class="col-md-10 p-3 pt-2">
            <?php include_once $content; ?>
        </div>
    </div>

    <div id="myModal " class="modal fade " role="dialog ">
        <div class="modal-dialog ">
            <!-- Modal content-->
            <div class="modal-content ">
                <div class="modal-header ">
                    <button type="button " class="close " data-dismiss="modal ">&times;</button>
                    <h4 class="modal-title ">Berhasil</h4>
                </div>
                <div class="modal-body ">
                    <p></p>
                </div>
                <div class="modal-footer ">
                    <button type="button " class="btn btn-default " data-dismiss="modal ">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="footer mr-0 bg-dark ">
        <p class="small text-center my-1">&copy;2020. Develop with <i class="fas fa-heart text-danger"></i> by Aditya Wira Mahesa</p>
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
