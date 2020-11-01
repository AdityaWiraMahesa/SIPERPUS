<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="col-sm-5"></div>
    <div class="col-sm-10 ">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top"></nav>
        <div class="content center">
            <hr>
            <div class="col-sm-offset-4 col-md-4 content-center">
                <h3>LOGIN</h3>
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="username">Username :</label>
                        <input type="text" name="username" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">Password :</label>
                        <input type="password" name="password" class="form-control">
                        <span><?= (isset($msg)) ? $msg : ''; ?></span>
                        <hr>
                    </div>
                    <div class="form-group pull-right">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-sm-8"></div>
</body>


</html>
