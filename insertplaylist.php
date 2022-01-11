<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Insert Playlist</title>
  </head>
  <body>
  <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-7 col-lg-5">
                    <div class="card">
                        <div class="card-body">
                            <form action="" method="post">

                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="masukan kode lagu" aria-label="Kode Lagu" aria-describedby="basic-addon1" id="kode_lagu" name="kode_lagu">
                                </div>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="masukan judul lagu" aria-label="lagu" aria-describedby="basic-addon1" id="lagu" name="lagu">
                                </div>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="masukan nama artis" aria-label="artis" aria-describedby="basic-addon1" id="artis" name="artis">
                                </div>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="masukan link lagu" aria-label="dengarkan" aria-describedby="basic-addon1" id="dengarkan" name="dengarkan">
                                </div>

                                <div class="mb-3">
                                    <button class="btn btn-primary form-control" name="btn" value="insert">Tambah</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <?php
        include 'koneksi.php';
        if(isset($_POST['btn'])){
            $kode_lagu = $_POST['kode_lagu'];
            $lagu = $_POST['lagu'];
            $artis = $_POST['artis'];
            $dengarkan = $_POST['dengarkan'];

            $sql = mysqli_query($konek, "INSERT INTO tb_musik VALUES('$kode_lagu','$lagu','$artis','$dengarkan')");

            if($sql){
                header('location:playlist.php');
            }
        }





        ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <style>
        .container{
            margin-top: 150px;
        }
    </style>
  </body>
</html>