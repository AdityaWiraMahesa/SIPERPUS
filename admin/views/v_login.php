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
    <link rel="stylesheet" href="views/style.css">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center mt-5 flex-col">
            <div class="col-lg-4">
                <div class="card p-4 shadow-lg border-0 my-4">
                    <p class=" text-center mb-0">SISTEM INFORMASI</p>
                    <p class=" text-center mb-0">E-PERPUSTAKAAN</p>
                    <hr>
                    <p class="text-center mb-0">LOGIN</p>
                    <form action="" method="POST">
                        <div class="form-group mb-0">
                            <label for="username"></label>
                            <input type="text" name="username" placeholder="Username" class="form-control rounded-pill" style="font-size: 15px;">
                        </div>
                        <div class="form-group mb-3">
                            <label for="password"></label>
                            <input type="password" name="password" placeholder="Password" class="form-control rounded-pill">
                            <span><?= (isset($msg)) ? $msg : ''; ?></span>
                        </div>
                        <div class=" form-group">
                            <div class="custom-control custom-checkbox small">
                                <input type="checkbox" name="" id="customCheckbox" class="custom-control-input">
                                <label for="customCheckbox" class="custom-control-label">Ingat Saya</label>
                                <a href="" class="float-right">Lupa Password?</a>
                            </div>
                        </div>
                        <button class="btn btn-primary text-center rounded-pill btn-block">Login</button>
                    </form>

                    <p class="small text-center my-3 mb-2"><a href="">Bantuan</a></p>
                    <hr class="mt-0">
                    <p class="small text-center my-1">Copyright &copy; 2020, All Right Reserved.</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
