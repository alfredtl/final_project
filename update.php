<?php

if(isset($_GET['id'])){
    // ambil id dari url atau method get
    $id = $_GET['id'];

    // Buat koneksi dengan MySQL
    $con = mysqli_connect("localhost","root","","db_berita");

    // Check connection
    // if (mysqli_connect_errno()) {
    //     echo "Failed to connect to MySQL: " . mysqli_connect_error();
    //     exit();
    // }else{
    //     echo '<br>koneksi berhasil';
    // }

    // TABEL BERITA
    $sql = "SELECT * FROM berita WHERE id='$id'";

    if ($result = mysqli_query($con, $sql)) {
        // echo "<br>data tersedia";
        while($data_berita = mysqli_fetch_assoc($result)) {
            $judul = $data_berita['judul'];
            $tempat_kejadian = $data_berita['tempat_kejadian'];
            $tanggal = $data_berita['tanggal'];
            $isi_berita = $data_berita['isi_berita'];
            $photo_link = $data_berita['photo_link'];
        }
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
    //echo print_r($user_data);
    //die();
    mysqli_close($con);

}

if (isset($_POST['submit'])){
    //var_dump($_POST);
    $judul = $_POST['judul'];
    $tempat_kejadian = $_POST['tempat_kejadian'];
    $tanggal = $_POST['tanggal'];
    $isi_berita = $_POST['isi_berita'];
    $photo_link = $_POST['photo_link'];

    // Buat koneksi dengan MySQL
    $con = mysqli_connect("localhost","root","","db_berita");

    // Check connection
    // if (mysqli_connect_errno()) {
    //     echo "Failed to connect to MySQL: " . mysqli_connect_error();
    //     exit();
    // }else{
    //     echo '<br>koneksi berhasil';
    // }

    $sql = "UPDATE berita SET judul='$judul',tempat_kejadian='$tempat_kejadian',tanggal='$tanggal',isi_berita='$isi_berita',
    photo_link='$photo_link' WHERE id='$id' ";

    if (mysqli_query($con, $sql)) {
        echo "<br>Data berhasil diupdate";
        // kalau berhasil pake perintah redirect kembali ke halaman berita.php
   
        // kembali ke halaman sebelumnya
        header("Location: ./berita.php", TRUE, 301);
        exit();

    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
      
    mysqli_close($con);
}
?>



<!-- ==================== Personil & Unit ==================== -->
<?php

// if(isset($_GET['id'])){
//     // ambil id dari url atau method get
//     $id = $_GET['id'];

//     // Buat koneksi dengan MySQL
//     $con = mysqli_connect("localhost","root","","db_berita");

//     // Check connection
//     // if (mysqli_connect_errno()) {
//     //     echo "Failed to connect to MySQL: " . mysqli_connect_error();
//     //     exit();
//     // }else{
//     //     echo '<br>koneksi berhasil';
//     // }

//     // TABEL jenjang pendidikan
//     $sql = "SELECT * FROM kp_jenjangpendidikan WHERE id='$id'";

//     if ($result = mysqli_query($con, $sql)) {
//         // echo "<br>data tersedia";
//         while($data = mysqli_fetch_assoc($result)) {
//             $no = $data['no'];
//             $jenjang_pendidikan = $data['jenjang_pendidikan'];
//             $jumlah = $data['jumlah'];
//             $presentase = $data['presentase'];
//         }
//     } else {
//         echo "Error: " . $sql . "<br>" . mysqli_error($con);
//     }

//     mysqli_close($con);
// }

// if (isset($_POST['submit'])){
//     //var_dump($_POST);
//     $no = $_POST['no_'];
//     $jenjang_pendidikan = $_POST['jenjang_pendidikan'];
//     $jumlah = $_POST['jumlah'];
//     $presentase = $_POST['presentase'];

//     // Buat koneksi dengan MySQL
//     $con = mysqli_connect("localhost","root","","db_berita");

//     // Check connection
//     // if (mysqli_connect_errno()) {
//     //     echo "Failed to connect to MySQL: " . mysqli_connect_error();
//     //     exit();
//     // }else{
//     //     echo '<br>koneksi berhasil';
//     // }

//     $sql = "UPDATE kp_jenjangpendidikan SET no_='$no_',jenjang_pendidikan='$jenjang_pendidikan',jumlah='$jumlah',presentase='$presentase', 
//     WHERE id='$id' ";

//     if (mysqli_query($con, $sql)) {
//         echo "<br>Data berhasil diupdate";
        // kalau berhasil pake perintah redirect kembali ke halaman berita.php
   
        // kembali ke halaman sebelumnya
        // header("Location: ./berita.php", TRUE, 301);
        // exit();

//     } else {
//         echo "Error: " . $sql . "<br>" . mysqli_error($con);
//     }
      
//     mysqli_close($con);
// }
// ?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
    <link rel="stylesheet" href="./dist/css/update.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- icon bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

</head>
<body style="background-color: #f2f2fc;">
    

    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol id="bootstrap" viewBox="0 0 118 94">
            <title>Bootstrap</title>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"></path>
            </symbol>
            <symbol id="home" viewBox="0 0 16 16">
            <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
            </symbol>
            <symbol id="speedometer2" viewBox="0 0 16 16">
            <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
            <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z"/>
            </symbol>
            <symbol id="table" viewBox="0 0 16 16">
            <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z"/>
            </symbol>
            <symbol id="people-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
            </symbol>
            <symbol id="grid" viewBox="0 0 16 16">
            <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z"/>
            </symbol>
    </svg>

    <div class="b-example-divider"></div>


    <!-- =========== Navbar Baru Lagi =========== -->
    <nav class="navbar navbar-expand-lg shadow sticky-top" style="background-color:rgb(51, 33, 117);">
        <div class="container justify-content-between">
            <a class="navbar-brand navbar-dark d-flex  align-items-center text-white  ms-sm-3 col-6 col-md-4 me-6" aria-label="Bootstrap" href="./darmisa.php"></svg><img class="logo-darmisa text-dark rounded-circle" src="./image/logo_DarMisa.jpg" alt="" title="DarMisa"><span class="fw-bold" style="margin-left: 80px; margin-right: 80px;">DarMisa</span></a>
            
            <!-- <a href="./login.html" class="btn-small btn btn-sm rounded-pill text-white mb-0 ms-auto me-2" title="Login" style="background-color:rgb(218, 37, 29); width: 80px;">Login</a> -->
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="list-burger bi bi-list d-lg-none ms-0 text-end" style="color: white; cursor: pointer;"></i></button>
            <div class="collapse navbar-collapse text-center" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item me-4">
                        <a class="nav-link" aria-current="page" href="./home.php">Beranda</a>
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
            <!-- <div class="btn-login col-md-2 col-lg-2 text-end">
                <a class="w-50" href="./login.html"><button type="button" class="btn text-white rounded-pill me-2" title="Login" style="background-color:rgb(218, 37, 29);">Login</button></a> 
            </div> -->
        </div>
    </nav>
    <!-- =========== Navbar Baru Lagi End =========== -->


    <!-- Data Pemadam -->
    <!-- <section class="vh-5" style="padding-top: 80px;  margin-bottom: 100px; background-color: #f2f2fc;">
        <div class="container py-1 h-50">
            <div class="row d-flex justify-content-center align-items-center h-50">
                <div class="col col-lg-9 col-xl-7">
                    <div class="card shadow rounded-3">
                        <div class="card-body p-4">
                            <h2 class="text-center">UPDATE DATA PEMADAMAN</h2>
                            <form action="action.php?p=gambar" method="post" enctype="multipart/form-data">
                                <label for="exampleFormControlInput1" class="form-label">Tanggal</label>
                                <input type="text" name="tanggal" class="form-control mb-3">

                                <label for="exampleFormControlInput1" class="form-label">Upload Foto :</label><br>
                                <input type="file" name="berkas" class="mb-5"><br>
                        
                                <div class="row justify-content-start mt-5">
                                    <input class="btn btn-danger me-3 col-md-4 col-sm-12" style="width: 90px;" type="reset" name="submit" value="Reset">
                                    <input class="btn btn-primary me-2 col-md-4 col-sm-12" style="width: 90px;" type="submit" name="submit" value="Submit">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Data Penyelamatan -->
    <!-- <section class="vh-2" style="margin-bottom: 100px; background-color: #f2f2fc;">
        <div class="container py-1 h-50">
            <div class="row d-flex justify-content-center align-items-center h-50">
                <div class="col col-lg-9 col-xl-7">
                    <div class="card shadow rounded-3">
                        <div class="card-body p-4">
                            <h2 class="text-center">UPDATE DATA PENYELAMATAN</h2>
                            <form action="action.php?p=gambar" method="post" enctype="multipart/form-data">
                                <label for="exampleFormControlInput1" class="form-label">Judul :</label>
                                <input type="text" name="judul kejadian" class="form-control mb-3">

                                <label for="exampleFormControlInput1" class="form-label">Tanggal :</label>
                                <input type="text" name="tanggal kejadian" class="form-control mb-3">

                                <label for="exampleFormControlInput1" class="form-label">Upload foto :</label><br>
                                <input type="file" name="berkas" class="mb-5"><br>


                                <div class="row justify-content-start mt-5">
                                    <input class="btn btn-danger me-3 col-md-4 col-sm-12" style="width: 90px;" type="reset" name="submit" value="Reset">
                                    <input class="btn btn-primary me-2 col-md-4 col-sm-12" style="width: 90px;" type="submit" name="submit" value="Submit">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Galeri -->
    <!-- <section class="vh-2" style="margin-bottom: 100px; background-color: #f2f2fc;">
        <div class="container py-1 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-lg-9 col-xl-7">
                    <div class="card shadow rounded-3">
                        <div class="card-body p-4">
                            <h2 class="text-center">UPDATE GALERI</h2>
                            <form action="action.php?p=gambar" method="post" enctype="multipart/form-data">
                                <label for="exampleFormControlInput1" class="form-label">Judul :</label>
                                <input type="text" name="judul kegiatan" class="form-control mb-3">

                                <label for="exampleFormControlInput1" class="form-label">Tanggal :</label>
                                <input type="text" name="tanggal kegiatan" class="form-control mb-3">

                                <label for="exampleFormControlInput1" class="form-label ">Upload Multiple Foto :</label><br>
                                <div class="mb-0">
                                    <input class="form-control mb-5" name="berkas" type="file" id="formFileMultiple" multiple> 
                                </div>
                                <div class="row justify-content-start mt-5">
                                    <input class="btn btn-danger me-3 col-md-4 col-sm-12" style="width: 90px;" type="reset" name="submit" value="Reset">
                                    <input class="btn btn-primary me-2 col-md-4 col-sm-12" style="width: 90px;" type="submit" name="submit" value="Submit">
                                </div>
                                    
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Berita -->
    <section class="vh-2" style="margin-bottom: 100px; background-color: #f2f2fc;">
        <div class="container py-1 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-lg-9 col-xl-7">
                    <div class="card shadow rounded-3 mt-5">
                        <div class="card-body p-4">
                            <h2 class="text-center">UPDATE BERITA</h2>

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
                                <input type="text" name="judul" class="form-control mb-3" value="<?php echo $judul; ?>">

                                <label for="exampleFormControlInput1" class="form-label">Isi Berita :</label>
                                <!-- <textarea type="text" name="isi_berita" class="form-control mb-3" value="<?php echo $isi_berita; ?>"></textarea> -->
                                <input type="text" name="isi_berita" class="form-control mb-3" value="<?php echo $isi_berita; ?>">

                                <label for="exampleFormControlInput1" class="form-label">Tanggal :</label>
                                <input type="text" name="tanggal" class="form-control mb-3" value="<?php echo $tanggal; ?>">

                                <label for="exampleFormControlInput1" class="form-label">Tempat Kejadian :</label>
                                <input type="text" name="tempat_kejadian" class="form-control mb-3" value="<?php echo $tempat_kejadian; ?>">

                                <!-- <label for="exampleFormControlInput1" class="form-label">Upload Foto :</label><br>
                                <input type="file" name="berkas" class="mb-5" value="<?php echo $photo_link; ?>"><br> -->

                                <label for="exampleFormControlInput1" class="form-label">link foto :</label>
                                <input type="text" name="photo_link" class="form-control mb-3" value="<?php echo $photo_link; ?>">

                                <div class="row justify-content-start mt-5">
                                    <input class="btn btn-danger me-3 col-md-4 col-sm-12" style="width: 90px;" type="reset" name="submit" value="Reset">
                                    <input class="btn btn-primary me-2 col-md-4 col-sm-12" style="width: 90px;" type="submit" name="submit" value="Submit">
                                </div>
                                <?php //setelah tombol submit ini dipencet, dia akan memproses kembali halaman ini lagi bedanya variable $_POST nya akan bernilai jadi 
                                    // block if yang paling atas itu akan diproses.Lihat baris 39. di blok itu, data akan disimpan setelah disimpan akan diredirect balik ke berita.php
                                    //paham yah?
                                ?>

                                    
                                    
                            </form>

                            <?php endif; ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>