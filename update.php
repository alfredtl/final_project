<?php

if(isset($_GET['id'])){
    // ambil id dari url atau method get
    $id = $_GET['id'];

    // Buat koneksi dengan MySQL
    $con = mysqli_connect("localhost","root","","db_berita");

    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }else{
        echo '<br>koneksi berhasil';
    }

    $sql = "SELECT * FROM berita WHERE id='$id'";

    if ($result = mysqli_query($con, $sql)) {
        echo "<br>data tersedia";
        while($user_data = mysqli_fetch_assoc($result)) {
            $judul = $_POST['judul'];
            $tempat_kejadian = $_POST['tempat_kejadian'];
            $tanggal = $_POST['tanggal'];
            $isi_berita = $_POST['isi_berita'];
            $publish_id = $_POST['publish_id'];
            $photo_link = $_POST['photo_link'];
        }
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }

    mysqli_close($con);
}

if (isset($_POST['submit'])){
    //var_dump($_POST);
    $judul = $_POST['judul'];
    $tempat_kejadian = $_POST['tempat_kejadian'];
    $tanggal = $_POST['tanggal'];
    $isi_berita = $_POST['isi_berita'];
    $publish_id = $_POST['publish_id'];
    $photo_link = $_POST['photo_link'];

    // Buat koneksi dengan MySQL
    $con = mysqli_connect("localhost","root","","db_berita");

    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }else{
        echo '<br>koneksi berhasil';
    }

    $sql = "UPDATE berita SET judul='$judul',tempat_kejadian='$tempat_kejadian',tanggal='$tanggal',isi_berita='$isi_berita',
    publish_id='$publish_id',photo_link='$photo_link' WHERE id='$id' ";

    if (mysqli_query($con, $sql)) {
        echo "<br>Data berhasil diupdate";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
      
    mysqli_close($con);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update data</title>
    <link rel="stylesheet" href="./dist/css/update.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>



    <!-- =========== Navbar Baru Lagi =========== -->
    <nav class="navbar navbar-expand-lg shadow-sm sticky-top" style="background-color:rgb(51, 33, 117);">
        <div class="container justify-content-between">
            <a class="navbar-brand navbar-dark d-flex  align-items-center text-white  ms-sm-3 col-6 col-md-4 me-6" aria-label="Bootstrap" href="./darmisa.php"></svg><img class="logo-darmisa text-dark rounded-circle d-flex mx-auto" src="./image/logo_DarMisa.jpg" alt="" title="DarMisa"><span class="fw-bold" style="margin-left: 70px; margin-right: 70px;">DarMisa</span></a>
            
            <!-- <a href="" class="btn-small btn btn-sm rounded-pill text-white mb-0 ms-auto me-2 d-lg-none d-block" title="Login" style="background-color:rgb(218, 37, 29); width: 80px;">Login</a> -->
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="list-burger bi bi-list d-lg-none ms-0" style="color: white; cursor: pointer;"></i></button>
            <div class="collapse navbar-collapse text-center" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item me-4">
                        <a class="nav-link" aria-current="page" href="./index.php">Beranda</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link" aria-current="page" href="./profil.php">Profil</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link" aria-current="page" href="./berita.php">Berita</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link" aria-current="page" href="./personil.php">Personil & Unit</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link" aria-current="page" href="./kontak.html">Hubungi Kami</a>
                    </li>
                </ul>
            </div>
            <!--<div class="btn-login col-md-2 col-lg-2 text-end">
                <button type="button" class="btn text-white rounded-pill w-50 me-2" title="Login" style="background-color:rgb(218, 37, 29);">Login</button>
            </div> -->
        </div>
    </nav>
    <!-- =========== Navbar Baru Lagi End =========== -->




    <section class="vh-5" style="padding-top: 80px; background-color: #eee;">
        <div class="container py-1 h-50">
            <div class="row d-flex justify-content-center align-items-center h-50">
                <div class="col col-lg-9 col-xl-7">
                    <div class="card rounded-3">
                        <div class="card-body p-4">
                            <h2>UPDATE DATA JUMLAH PENGUNJUNG BULANAN</h2>
                            <form action="action.php?p=gambar" method="post" enctype="multipart/form-data">
                                <label for="exampleFormControlInput1" class="form-label">Tanggal</label>
                                <input type="text" name="tanggal" class="form-control mb-3">

                                <label for="exampleFormControlInput1" class="form-label">Upload Foto :</label><br>
                                <input type="file" name="berkas" class="mb-5"><br>
                        
                                <input class="btn btn-danger me-3" type="reset" name="submit" value="Reset">
                                <input class="btn btn-primary" type="button" name="submit" value="Submit">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="vh-2" style="background-color: #eee;">
        <div class="container py-1 h-50">
            <div class="row d-flex justify-content-center align-items-center h-50">
                <div class="col col-lg-9 col-xl-7">
                    <div class="card rounded-3">
                        <div class="card-body p-4">
                            <h2>UPDATE DATA KEBAKARAN TAHUNAN</h2>
                            <form action="action.php?p=gambar" method="post" enctype="multipart/form-data">
                                <label for="exampleFormControlInput1" class="form-label">Judul :</label>
                                <input type="text" name="judul kejadian" class="form-control mb-3">

                                <label for="exampleFormControlInput1" class="form-label">Tanggal :</label>
                                <input type="text" name="tanggal kejadian" class="form-control mb-3">

                                <label for="exampleFormControlInput1" class="form-label">Upload foto :</label><br>
                                <input type="file" name="berkas" class="mb-5"><br>


                                <input class="btn btn-danger me-3" type="reset" name="submit" value="Reset">
                                <input class="btn btn-primary" type="button" name="submit" value="Submit">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="vh-2" style="background-color: #eee;">
        <div class="container py-1 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-lg-9 col-xl-7">
                    <div class="card rounded-3">
                        <div class="card-body p-4">
                            <h2>UPDATE GALERI</h2>
                            <form action="action.php?p=gambar" method="post" enctype="multipart/form-data">
                                <label for="exampleFormControlInput1" class="form-label">Judul :</label>
                                <input type="text" name="judul kegiatan" class="form-control mb-3">

                                <label for="exampleFormControlInput1" class="form-label">Tanggal :</label>
                                <input type="text" name="tanggal kegiatan" class="form-control mb-3">

                                <label for="exampleFormControlInput1" class="form-label ">Upload Multiple Foto :</label><br>
                                <div class="mb-0">
                                    <input class="form-control mb-5" name="berkas" type="file" id="formFileMultiple" multiple>
                                    <input class="btn btn-danger me-3" type="reset" name="submit" value="Reset">
                                    <input class="btn btn-primary" type="button" name="submit" value="Submit">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="vh-2" style="padding-bottom: 80px; background-color: #eee;">
        <div class="container py-1 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-lg-9 col-xl-7">
                    <div class="card rounded-3">
                        <div class="card-body p-4">
                            <h2>UPDATE BERITA</h2>

                            <?php if(isset($_GET['id'])): ?>
                            <form action="" method="post" enctype="multipart/form-data">
                                <!-- <label for="exampleFormControlInput1" class="form-label">Id :</label><br>
                                <input type="radio" id="berita1" name="fav_language" value="berita1">
                                <label for="berita1">Berita 1</label><br>
                                
                                <input type="radio" id="berita2" name="fav_language" value="berita1">
                                <label for="berita2">Berita 2</label><br>

                                <input type="radio" id="berita3" name="fav_language" value="berita1">
                                <label for="berita3">Berita 3</label><br>

                                <input type="radio" id="berita4" name="fav_language" value="berita1">
                                <label for="berita4">Berita 4</label><br>

                                <input type="radio" id="berita5" name="fav_language" value="berita1">
                                <label for="berita5">Berita 5</label><br>

                                <input type="radio" id="berita6" name="fav_language" value="berita1">
                                <label for="berita6">Berita 6</label><br>

                                <input type="radio" id="berita7" name="fav_language" value="berita1">
                                <label for="berita7">Berita 7</label><br>

                                <input type="radio" id="berita8" name="fav_language" value="berita1">
                                <label for="berita8">Berita 8</label><br> -->



                                <label for="exampleFormControlInput1" class="form-label mt-3">Judul :</label>
                                <input type="text" name="judul kegiatan" class="form-control mb-3" value="<?php echo $judul; ?>">

                                <label for="exampleFormControlInput1" class="form-label">Isi Berita :</label>
                                <input type="text" name="Isi Berita" class="form-control mb-3" value="<?php echo $isi_berita; ?>">

                                <label for="exampleFormControlInput1" class="form-label">Tanggal :</label>
                                <input type="text" name="tanggal kegiatan" class="form-control mb-3" value="<?php echo $tanggal; ?>">

                                <label for="exampleFormControlInput1" class="form-label">Tempat Kejadian :</label>
                                <input type="text" name="tempat kejadian" class="form-control mb-3" value="<?php echo $tempat_kejadian; ?>">

                                <label for="exampleFormControlInput1" class="form-label">Upload Foto :</label><br>
                                <input type="file" name="berkas" class="mb-5" value="<?php echo $photo_link; ?>"><br>

                                <input class="btn btn-danger me-3" type="reset" name="submit" value="Reset">
                                <input class="btn btn-primary" type="submit" name="submit" value="Submit">
                                
                            </form>

                            <?php endif; ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>