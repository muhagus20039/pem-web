<!doctype html>

<?php

session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
    exit;
}

include 'koneksi.php';
?>



<html lang="en">
  <head>
    <script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Tangga Lagu Indonesia</title>
  </head>
  <body>
    <div class="container fixed-top">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mt-2">
    <div class="container-fluid">
        <span>
            <img src="img/logo.png" alt="" width="45" height="30">
        </span>
        <a class="navbar-brand" href="#">Tangga Lagu Indonesia</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link" href="#">Playlist</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Lirik</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Dengarkan</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="logout.php">Log Out</a>
            </li>
        </ul>
        <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        </div>
    </div>
    </nav>

    <figure class="text-center mt-4">
        <blockquote class="blockquote">
            <p>Top 10 Billboard This Week</p>
        </blockquote>
    </figure>

    <table class="table table-hover table-bordered align-middle">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Lagu</th>
            <th scope="col">Artis</th>
            <th scope="col">Plays</th>
            <th scope="col">Dengarkan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">1</th>
            <td>abcdefu</td>
            <td>GAYLE</td>
            <td>4.795.710</td>
            <td>
                <a href="https://youtu.be/NaFd8ucHLuo" target='_blank'><span class="iconify" data-icon="ant-design:play-circle-filled"></span></a>
            </td>
            </tr>
            <tr>
            <th scope="row">2</th>
            <td>Sacrifice</td>
            <td>The Weeknd</td>
            <td>4.760.913</td>
            <td>
                <a href="https://youtu.be/VafTMsrnSTU" target='_blank'><span class="iconify" data-icon="ant-design:play-circle-filled"></span></a>
            </td>
            </tr>
            <tr>
            <th scope="row">3</th>
            <td>STAY</td>
            <td>The Kid Laroi, Justin Bieber</td>
            <td>4.554.901</td>
            <td>
                <a href="https://youtu.be/kTJczUoc26U" target='_blank'><span class="iconify" data-icon="ant-design:play-circle-filled"></span></a>
            </td>
            </tr>
            <tr>
            <th scope="row">4</th>
            <td>Heat Waves</td>
            <td>Glass Animals</td>
            <td>4.266.226</td>
            <td>
                <a href="https://youtu.be/mRD0-GxqHVo" target='_blank'><span class="iconify" data-icon="ant-design:play-circle-filled"></span></a>
            </td>
            </tr>
            <tr>
            <th scope="row">5</th>
            <td>Easy on Me</td>
            <td>Adele</td>
            <td>4.012.162</td>
            <td>
                <a href="https://youtu.be/X-yIEMduRXk" target='_blank'><span class="iconify" data-icon="ant-design:play-circle-filled"></span></a>
            </td>
            </tr>
            <tr>
            <th scope="row">6</th>
            <td>Title</td>
            <td>Meghan Trainor</td>
            <td>4.000.162</td>
            <td>
                <a href="https://youtu.be/fD7LIqkKisc" target='_blank'><span class="iconify" data-icon="ant-design:play-circle-filled"></span></a>
            </td>
            </tr>
            <tr>
            <th scope="row">7</th>
            <td>Minefields</td>
            <td>Faouzia & John Legends</td>
            <td>3.812.162</td>
            <td>
                <a href="https://youtu.be/jKIEUdAMtrQ" target='_blank'><span class="iconify" data-icon="ant-design:play-circle-filled"></span></a>
            </td>
            </tr>
            <tr>
            <th scope="row">8</th>
            <td>Bad Habbits</td>
            <td>Ed Sheeran</td>
            <td>3.732.162</td>
            <td>
                <a href="https://youtu.be/orJSJGHjBLI" target='_blank'><span class="iconify" data-icon="ant-design:play-circle-filled"></span></a>
            </td>
            </tr>
            <tr>
            <th scope="row">9</th>
            <td>MONTERO (Call Me by Your Name)</td>
            <td>Lil Nas X</td>
            <td>3.672.162</td>
            <td>
                <a href="https://youtu.be/6swmTBVI83k" target='_blank'><span class="iconify" data-icon="ant-design:play-circle-filled"></span></a>
            </td>
            </tr>
            <tr>
            <th scope="row">10</th>
            <td>I Love You So</td>
            <td>The Walters</td>
            <td>3.412.162</td>
            <td>
                <a href="https://youtu.be/WBRPnyMT164" target='_blank'><span class="iconify" data-icon="ant-design:play-circle-filled"></span></a>
            </td>
            </tr>
        </tbody>
    </table>


    <figure class="text-center mt-4">
        <blockquote class="blockquote">
            <p>Top 10 Billboard Indonesia</p>
        </blockquote>
    </figure>


    </div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>