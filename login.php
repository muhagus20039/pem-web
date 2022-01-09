<!doctype html>
<html lang="en">
  <head>
    <script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="/css/login.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Login</title>
  </head>
  <body>
    <div class="auth">
        <div class="icon text-center">
            <img src="img/logo.png" alt="logo" width="230">
            <h3 class="text-center">
                <blockquote class="blockquote">
                    <h3>Tangga Lagu Indonesia</h3>
                </blockquote>
            </h3>
        </div>
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-7 col-lg-5">
                    <?php
                        if(isset($_GET['pesan'])){
                    ?>
                            <div class="alert alert-danger" role="alert">
                                <strong>Username atau Password anda Salah</strong>
                            </div>
                    <?php    } ?>
                    <div class="card">
                        <div class="card-body">
                            <form action="ceklogin.php" method="post">

                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><span class="iconify" data-icon="carbon:user-avatar"></span></span>
                                    <input type="username" class="form-control" placeholder="Masukan Username" aria-label="Username" aria-describedby="basic-addon1" id="username" name="username">
                                </div>

                                <div class="input-group mb-3">
                                  <span class="input-group-text" id="basic-addon1"><span class="iconify" data-icon="ri:lock-password-fill"></span></span>
                                  <input type="password" class="form-control" id="password" name="password" placeholder="Masukan Password">
                                </div>

                                <div class="mb-3">
                                    <button class="btn btn-primary form-control" name="btnLogin">Login</button>
                                </div>

                                <div class="register">
                                    <p>
                                        Belum punya akun, silahkan <a href="daftar.php">Daftar</a>
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <style>
        .auth{
    margin-top: 200px;
    }

        h3{
            font-family: 'Cookie', cursive;
    }

        h3{
            font-size: 45px;
    }

        p{
            font-size: 15px;
            text-align: center;
        }
  </style>
  </body>
</html>