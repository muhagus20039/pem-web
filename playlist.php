<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>My Playlist</title>
  </head>
  <body>
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mt-2" >
    <div class="container-fluid">
        <span>
            <img src="img/logo.png" alt="" width="45" height="30">
        </span>
        <a class="navbar-brand" href="index.php">Tangga Lagu Indonesia</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link" href="playlist.php">Playlist</a>
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
            <p>My Playlist</p>
        </blockquote>
    </figure>

    <a href="insertplaylist.php">
        <button type="button" class="btn btn-primary" name="btninsert">+ Tambah</button>
    </a>
    <table class="table table-hover table-bordered align-middle mt-2">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Lagu</th>
            <th scope="col">Artis</th>
            <th scope="col">Menu</th>
            </tr>
        </thead>

        <?php
        include 'koneksi.php';

        $query = "SELECT * FROM tb_musik";
                $sql = mysqli_query($konek, $query);
                while ($data = mysqli_fetch_row($sql)) {
                ?>

                    <tr>
                        <td><?php echo $data[0]; ?> </td>
                        <td><?php echo $data[1]; ?> </td>
                        <td><?php echo $data[2]; ?> </td>
                        <td>
                            <a href="<?php echo $data[3] ?>" class="btn btn-primary" target='_blank'>Putar</a>
                            <a href="deleteplaylist.php?id=<?php echo $data[0] ?>" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                <?php
                };




        ?>

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