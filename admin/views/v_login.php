<!DOCTYPE html>
<html lang="en">

<head>
    <title>E-Perpustakaan</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&display=swap">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
</head>

<body class="bg-light">
    <div class="container">
        <div class="row justify-content-center mt-5 flex-col">
            <div class="col-lg-4">
                <div class="card shadow-lg border-0 my-4">
                    <div class="bg-warning pt-4 pb-4 shadow-sm rounded text-white" style="background-image: linear-gradient(30deg, #6EE2F5, #6454F0);">
                        <h4 class=" text-center mb-0 font-weight-bold">SISTEM INFORMASI</h4>
                        <p class=" text-center mb-0"><b>E-PERPUSTAKAAN</b></p>
                    </div>
                    <hr class="mt-1 border">
                    <h5 class="text-center mb-0">LOGIN</h5>
                    <form action="" method="POST" class="ml-4 mr-4 mb-3 mt-1 justify-content-center">
                        <div class=" form-group row pl-3 mb-0">
                            <div>
                                <i class="fas fa-user fa-lg mt-3 pt-4"></i>
                            </div>
                            <div class="col-lg ml-0 pl-2">
                                <label for="username"></label>
                                <input type="text" name="username" placeholder="Username" class="form-control rounded-pill shadow-sm rounded" style="font-size: 15px;">
                            </div>
                        </div>
                        <div class=" form-group row pl-3 mb-3">
                            <div>
                                <i class="fas fa-lock fa-lg mt-3 pt-4"></i>
                            </div>
                            <div class="col-lg ml-0 pl-2">
                                <label for="password"></label>
                                <input type="password" name="password" placeholder="Password" class="form-control rounded-pill shadow-sm rounded mb-2">
                                <span style="font-size: 13px;" class="text-danger"><?= (isset($msg)) ? $msg : ''; ?></span>
                            </div>
                        </div>
                        <div class=" form-group">
                            <div class="custom-control custom-checkbox small">
                                <input type="checkbox" name="" id="customCheckbox" class="custom-control-input">
                                <label for="customCheckbox" class="custom-control-label">Ingat Saya</label>
                                <a href="" class="float-right">Lupa Password?</a>
                            </div>
                        </div>
                        <div class="form-group mb-0">
                            <button class="btn btn-primary text-center rounded-pill btn-block shadow-sm" style="background-image: linear-gradient(30deg, #3499FF, #3A3985);">Login</button>
                            <p class="small text-center my-2"><a href="">Bantuan</a></p>
                        </div>
                    </form>
                    <hr class="mt-0">
                    <p class="small text-center my-1 mb-3">Copyright &copy; 2020, All Right Reserved.</p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
