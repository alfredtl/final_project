<?php
include_once 'koneksi.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./dist/css/data-kebakaran.css">
    <title>Data Kebakaran</title>
    <!-- icon bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="/docs/5.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

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
            <a class="navbar-brand navbar-dark d-flex  align-items-center text-white  ms-sm-3 col-6 col-md-4 me-6" aria-label="Bootstrap" href="#"></svg><img class="logo-darmisa text-dark rounded-circle" src="./image/logo_DarMisa.jpg" alt="" title="DarMisa"><span class="fw-bold" style="margin-left: 80px; margin-right: 80px;">DarMisa</span></a>
            
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

    
    <!-- =========== Nav Baru =========== -->
    <!-- <header>
        <div id="nav" class="container" style="font-family: sans-serif;">
            <div class="row g-0 text-center sticky-top">
                <div class="col-12">
                    <nav class="navbar d-flex navbar-expand-lg rounded-pill top-0 shadow position-absolute justify-content-between p-5 my-3 py-2 start-0 end-0 mx-4 p-5" style="background-color:rgb(51, 33, 117);">
                        <div class="nav-content container-fluid d-flex flex-column flex-sm-row justify-content-between px-0">
                            <a class="navbar-brand navbar-dark d-flex  align-items-center text-white  ms-sm-3 col-6 col-md-4 me-6" aria-label="Bootstrap" href="./darmisa.html"></svg><img class="logo-darmisa text-dark rounded-circle" src="./image/logo_DarMisa.jpg" alt="" title="DarMisa"><span class="fw-bold mx-4 ms-5">DarMisa</span></a>
                            <a href="" class="btn btn-sm rounded-pill text-white mb-0 ms-auto d-lg-none d-block" title="Login" style="background-color:rgb(218, 37, 29); width: 80px;">Login</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="list-burger bi bi-list d-lg-none ms-4" style="color: white; cursor: pointer;"></i></button>
                            <div class="collapse navbar-collapse" id="navbarNav">   
                                <ul class="nav mb-md-0 mx-auto" style="width: 500px;">
                                    <li><a href="./index.html" class="nav-link px-2 ">Beranda</a></li>
                                    <li><a href="./profil.html" class="nav-link px-2 ">Profil</a></li>
                                    <li><a href="#" class="nav-link px-2 ">Berita</a></li>
                                    <li><a href="#" class="nav-link px-2 ">Personil & Unit</a></li>
                                    <li><a href="#" class="nav-link px-2 ">Hubungi Kami</a></li>
                                </ul>
                            </div> 
                        </div>
                        <div class="btn-login col-md-2 text-end">
                            <button type="button" class="btn text-white rounded-pill w-50 me-2" title="Login" style="background-color:rgb(218, 37, 29);">Login</button>
                        </div>
                    </nav>
                </div>   
            </div> -->
            <!--<div class="container">    
                <div class="row">
                    <div class="text-header col-lg-6 col-sm-12 col-12">
                        <p class="text-moto text-white fw-bolder text-align-sm-center" >Pantang Pulang Sebelum Api Padam</p>
                        <p class="text-moto2 text-align-md-center">Tetap jaga kesehatan dan selalu waspada terhadap bahaya kebakaran</p>
                        <button type="button" class="btn text-white rounded mt-4 me-2"><i class="bi bi-telephone-fill" style="color: rgb(51, 33, 117); margin-right: 10px;"></i> EMERGENCY CALL (0431) 321001</button>
                    </div>
                    <div class="img col-lg-6 col-sm-12 col-12">
                        <img src="./image/logo-pemadam1.png" class="logo-pemadam"  alt="">
                    </div>
                </div>
            </div>
        </div>
    </header> -->
    <!-- =========== Nav Baru End =========== -->

    

    <!-- ========== Data ========== -->
    <section class="data">
        <div id="data1" class="container" style="margin-bottom: 200px;">
            <h5 class="data-content text-center fw-bold mt-5 mb-4" style="font-size: 24px; font-family: sans-serif;">Data Kebakaran Tahun 2022</h5>

            <p class="text-center"><a href="https://docs.google.com/spreadsheets/d/1V5BsI2NlaLqLNvIH1uOAGr_veG8WvUTZvXiTgW-IX6E/edit?usp=sharing">Bulan Januari</a></p>
            <p class="text-center"><a href="https://docs.google.com/spreadsheets/d/14wG_lOhGSqlsZS8wcroVH6agcfdkvrslYSLS_c4oE_0/edit?usp=sharing">Bulan Februari</a></p>
            <p class="text-center"><a href="https://docs.google.com/spreadsheets/d/1XXW-KG2z1EJsAJ736BhaaPAEMjtDhIWvuxOtZ-VRqpI/edit?usp=sharing">Bulan Maret</a></p>
            <p class="text-center"><a href="https://docs.google.com/spreadsheets/d/1jL2vBhhxsjER_43qLBfQGEwOZbW7XoNyETC7RbP1Wy8/edit?usp=sharing">Bulan April</a></p>
            <p class="text-center"><a href="https://docs.google.com/spreadsheets/d/1Nc7t3Y7mwsxgaf8XFSmlnFV20ua92AdNGkNdVLGf4gk/edit?usp=sharing">Bulan Mei</a></p>
            <p class="text-center"><a href="https://docs.google.com/spreadsheets/d/1kcwI71bsnxsxBkX10iqtEu6Zsk-KoMvW6wBa7nXMoOo/edit?usp=sharing">Bulan Juni</a></p>
            <p class="text-center"><a href="https://docs.google.com/spreadsheets/d/16McdP-aJHylAogYrk9eHr-VJs1tKePUrRICyZgEeDhg/edit?usp=sharing">Bulan Juli</a></p>
            <p class="text-center"><a href="https://docs.google.com/spreadsheets/d/1f86CPQny1tXRtwk8T5w_S2x3OblMI0IhVj1Hae_T1bs/edit?usp=sharing">Bulan Agustus</a></p>



            <!-- Pemyelamatan Januari -->
            <h5 class="data-content text-center fw-bold mb-4" style="font-size: 24px; font-family: sans-serif; margin-top: 100px;">Data Penyelamatan Bulan januari</h5>


            <?php 
                //INI CODE PHP UNTUK LOOPING BERITANYA. LAKUKAN DI TABEL2 LAINN
                $item = [];
                $sql = "SELECT * FROM penyelamatan_januari";

                if ($result = mysqli_query($con, $sql)) {
                    // Fetch one and one row
                    while ($row = mysqli_fetch_row($result)) {
                    $item[] = $row;
                    }
                    //mysqli_free_result($result);
                }

            ?>
            
            <table>
                <tr>
                    <th rowspan="2" style="border: 1px solid black; width: 5%; text-align: center;">No</th>
                    <th rowspan="2" style="border: 1px solid black; text-align: center;">Hari/Tanggal</th>
                    <th colspan="3" style="border: 1px solid black; text-align: center;">Penyelamatan</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Pemilik</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Alamat Pemilik</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">No.HP Pengguna Layanan</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Jumlah Unit</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Jenis Objek Evakuasi</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Hasil Pelaksanaan</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Keterangan</th>
                    <!-- <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;"></th>                     -->
                </tr>
                <tr>
                    <th style="border: 1px solid black; width: 10%; text-align: center;">Hewan Berbisa</th>
                    <th style="border: 1px solid black; width: 10%; text-align: center;">Evakuasi</th>
                    <th style="border: 1px solid black; width: 10%; text-align: center;">Lain-lain</th>
                </tr>
            

            <?php foreach ($item as $row): ?>

                <tr style="height: 40px;">
                    <td style="border: 1px solid black; text-align: center;"><?= $row[1];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[2];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[3];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[4];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[5];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[6];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[7];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[8];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[9];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[10];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[11];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[14];?></td>
                   
                    <!-- <td style="border: 1px solid black; text-align: center; ">
                        <a href="./update_peny_jan.php?id=<?= $row['id'] ?>" >Ubah</a> 
                    </td> -->
                </tr>
            <?php endforeach; ?>
            
            </table>



            <!-- Pemadaman Januari -->
            <h5 class="data-content text-center fw-bold mb-4" style="font-size: 24px; font-family: sans-serif; margin-top: 100px;">Data Pemadaman Bulan Januari</h5>

            <?php 
                //INI CODE PHP UNTUK LOOPING BERITANYA. LAKUKAN DI TABEL2 LAINN
                $item = [];
                $sql = "SELECT * FROM pemadaman_januari";

                if ($result = mysqli_query($con, $sql)) {
                    // Fetch one and one row
                    while ($row = mysqli_fetch_row($result)) {
                    $item[] = $row;
                    }
                    //mysqli_free_result($result);
                }
            ?>
            
            <table>
                <tr>
                    <th rowspan="2" style="border: 1px solid black; width: 5%; text-align: center;">No</th>
                    <th rowspan="2" style="border: 1px solid black; text-align: center;">Hari/Tanggal</th>
                    <th colspan="3" rowspan="2" style="border: 1px solid black; text-align: center;">Pemadaman</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Pemilik</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Alamat Pemilik</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Nomor</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">No.HP Pengguna Layanan</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Jumlah Unit</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Jenis Objek Evakuasi</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Keterangan</th>

                </tr>
                <tr>
                    
                </tr>
            

            <?php foreach ($item as $row): ?>

                <tr style="height: 40px;">
                    <td style="border: 1px solid black; text-align: center;"><?= $row[1];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[2];?></td>
                    <td style="border: 1px solid black; text-align: center;" colspan="3"><?= $row[3];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[4];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[5];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[6];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[7];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[8];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[9];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[10];?></td>
                </tr>
            <?php endforeach; ?>
            </table>


            <!-- Pemyelamatan Februari -->
            <h5 class="data-content text-center fw-bold mb-4" style="font-size: 24px; font-family: sans-serif; margin-top: 100px;">Data Penyelamatan Bulan Februari</h5>


            <?php 
                //INI CODE PHP UNTUK LOOPING BERITANYA. LAKUKAN DI TABEL2 LAINN
                $item = [];
                $sql = "SELECT * FROM penyelamatan_februari";

                if ($result = mysqli_query($con, $sql)) {
                    // Fetch one and one row
                    while ($row = mysqli_fetch_row($result)) {
                    $item[] = $row;
                    }
                    //mysqli_free_result($result);
                }
            ?>
            
            <table>
                <tr>
                    <th rowspan="2" style="border: 1px solid black; width: 5%; text-align: center;">No</th>
                    <th rowspan="2" style="border: 1px solid black; text-align: center;">Hari/Tanggal</th>
                    <th colspan="3" style="border: 1px solid black; text-align: center;">Penyelamatan</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Pemilik</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Alamat Pemilik</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">No.HP Pengguna Layanan</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Jumlah Unit</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Jenis Objek Evakuasi</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Hasil Pelaksanaan</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Keterangan</th>
                </tr>
                <tr>
                    <th style="border: 1px solid black; width: 10%; text-align: center;">Hewan Berbisa</th>
                    <th style="border: 1px solid black; width: 10%; text-align: center;">Evakuasi</th>
                    <th style="border: 1px solid black; width: 10%; text-align: center;">Lain-lain</th>
                </tr>
            

            <?php foreach ($item as $row): ?>

                <tr style="height: 40px;">
                    <td style="border: 1px solid black; text-align: center;"><?= $row[1];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[2];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[3];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[4];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[5];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[6];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[7];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[8];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[9];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[10];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[11];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[12];?></td>
                </tr>
            <?php endforeach; ?>
            </table>


            <!-- Pemadaman Februari -->
            <h5 class="data-content text-center fw-bold mb-4" style="font-size: 24px; font-family: sans-serif; margin-top: 100px;">Data Pemadaman Bulan Februari</h5>

            <?php 
                //INI CODE PHP UNTUK LOOPING BERITANYA. LAKUKAN DI TABEL2 LAINN
                $item = [];
                $sql = "SELECT * FROM pemadaman_februari";

                if ($result = mysqli_query($con, $sql)) {
                    // Fetch one and one row
                    while ($row = mysqli_fetch_row($result)) {
                    $item[] = $row;
                    }
                    //mysqli_free_result($result);
                }
            ?>
            
            <table>
                <tr>
                    <th rowspan="2" style="border: 1px solid black; width: 5%; text-align: center;">No</th>
                    <th rowspan="2" style="border: 1px solid black; text-align: center;">Hari/Tanggal</th>
                    <th colspan="3" rowspan="2" style="border: 1px solid black; text-align: center;">Pemadaman</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Pemilik</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Alamat Pemilik</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Nomor</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">No.HP Pengguna Layanan</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Jumlah Unit</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Jenis Objek Evakuasi</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Keterangan</th>

                </tr>
                <tr>
                    
                </tr>
            

            <?php foreach ($item as $row): ?>

                <tr style="height: 40px;">
                    <td style="border: 1px solid black; text-align: center;"><?= $row[1];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[2];?></td>
                    <td style="border: 1px solid black; text-align: center;" colspan="3"><?= $row[3];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[4];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[5];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[6];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[7];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[8];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[9];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[10];?></td>
                </tr>
            <?php endforeach; ?>
            </table>
            

            <!-- Pemyelamatan Maret -->
            <h5 class="data-content text-center fw-bold mb-4" style="font-size: 24px; font-family: sans-serif; margin-top: 100px;">Data Penyelamatan Bulan Maret</h5>


            <?php 
                //INI CODE PHP UNTUK LOOPING BERITANYA. LAKUKAN DI TABEL2 LAINN
                $item = [];
                $sql = "SELECT * FROM penyelamatan_maret";

                if ($result = mysqli_query($con, $sql)) {
                    // Fetch one and one row
                    while ($row = mysqli_fetch_row($result)) {
                    $item[] = $row;
                    }
                    //mysqli_free_result($result);
                }
            ?>
            
            <table>
                <tr>
                    <th rowspan="2" style="border: 1px solid black; width: 5%; text-align: center;">No</th>
                    <th rowspan="2" style="border: 1px solid black; text-align: center;">Hari/Tanggal</th>
                    <th colspan="3" style="border: 1px solid black; text-align: center;">Penyelamatan</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Pemilik</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Alamat Pemilik</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">No.HP Pengguna Layanan</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Jumlah Unit</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Jenis Objek Evakuasi</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Hasil Pelaksanaan</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Keterangan</th>
                </tr>
                <tr>
                    <th style="border: 1px solid black; width: 10%; text-align: center;">Hewan Berbisa</th>
                    <th style="border: 1px solid black; width: 10%; text-align: center;">Evakuasi</th>
                    <th style="border: 1px solid black; width: 10%; text-align: center;">Lain-lain</th>
                </tr>
            

            <?php foreach ($item as $row): ?>

                <tr style="height: 40px;">
                    <td style="border: 1px solid black; text-align: center;"><?= $row[1];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[2];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[3];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[4];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[5];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[6];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[7];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[8];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[9];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[10];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[11];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[12];?></td>
                </tr>
            <?php endforeach; ?>
            </table>


            <!-- Pemadaman Maret -->
            <h5 class="data-content text-center fw-bold mb-4" style="font-size: 24px; font-family: sans-serif; margin-top: 100px;">Data Pemadaman Bulan Maret</h5>

            <?php 
                //INI CODE PHP UNTUK LOOPING BERITANYA. LAKUKAN DI TABEL2 LAINN
                $item = [];
                $sql = "SELECT * FROM pemadaman_maret";

                if ($result = mysqli_query($con, $sql)) {
                    // Fetch one and one row
                    while ($row = mysqli_fetch_row($result)) {
                    $item[] = $row;
                    }
                    //mysqli_free_result($result);
                }
            ?>
            
            <table>
                <tr>
                    <th rowspan="2" style="border: 1px solid black; width: 5%; text-align: center;">No</th>
                    <th rowspan="2" style="border: 1px solid black; text-align: center;">Hari/Tanggal</th>
                    <th colspan="3" rowspan="2" style="border: 1px solid black; text-align: center;">Pemadaman</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Pemilik</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Alamat Pemilik</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Nomor</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">No.HP Pengguna Layanan</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Jumlah Unit</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Jenis Objek Evakuasi</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Keterangan</th>

                </tr>
                <tr>
                    
                </tr>
            

            <?php foreach ($item as $row): ?>

                <tr style="height: 40px;">
                    <td style="border: 1px solid black; text-align: center;"><?= $row[1];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[2];?></td>
                    <td style="border: 1px solid black; text-align: center;" colspan="3"><?= $row[3];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[4];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[5];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[6];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[7];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[8];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[9];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[10];?></td>
                </tr>
            <?php endforeach; ?>
            </table>


            <!-- Pemyelamatan April -->
            <h5 class="data-content text-center fw-bold mb-4" style="font-size: 24px; font-family: sans-serif; margin-top: 100px;">Data Penyelamatan Bulan April</h5>


            <?php 
                //INI CODE PHP UNTUK LOOPING BERITANYA. LAKUKAN DI TABEL2 LAINN
                $item = [];
                $sql = "SELECT * FROM penyelamatan_april";

                if ($result = mysqli_query($con, $sql)) {
                    // Fetch one and one row
                    while ($row = mysqli_fetch_row($result)) {
                    $item[] = $row;
                    }
                    //mysqli_free_result($result);
                }
            ?>
            
            <table>
                <tr>
                    <th rowspan="2" style="border: 1px solid black; width: 5%; text-align: center;">No</th>
                    <th rowspan="2" style="border: 1px solid black; text-align: center;">Hari/Tanggal</th>
                    <th colspan="3" style="border: 1px solid black; text-align: center;">Penyelamatan</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Pemilik</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Alamat Pemilik</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">No.HP Pengguna Layanan</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Jumlah Unit</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Jenis Objek Evakuasi</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Hasil Pelaksanaan</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Keterangan</th>
                </tr>
                <tr>
                    <th style="border: 1px solid black; width: 10%; text-align: center;">Hewan Berbisa</th>
                    <th style="border: 1px solid black; width: 10%; text-align: center;">Evakuasi</th>
                    <th style="border: 1px solid black; width: 10%; text-align: center;">Lain-lain</th>
                </tr>
            

            <?php foreach ($item as $row): ?>

                <tr style="height: 40px;">
                    <td style="border: 1px solid black; text-align: center;"><?= $row[1];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[2];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[3];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[4];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[5];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[6];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[7];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[8];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[9];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[10];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[11];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[12];?></td>
                </tr>
            <?php endforeach; ?>
            </table>
            

            <!-- Pemadaman April -->
            <h5 class="data-content text-center fw-bold mb-4" style="font-size: 24px; font-family: sans-serif; margin-top: 100px;">Data Pemadaman Bulan April</h5>

            <?php 
                //INI CODE PHP UNTUK LOOPING BERITANYA. LAKUKAN DI TABEL2 LAINN
                $item = [];
                $sql = "SELECT * FROM pemadaman_april";

                if ($result = mysqli_query($con, $sql)) {
                    // Fetch one and one row
                    while ($row = mysqli_fetch_row($result)) {
                    $item[] = $row;
                    }
                    //mysqli_free_result($result);
                }
            ?>
            
            <table>
                <tr>
                    <th rowspan="2" style="border: 1px solid black; width: 5%; text-align: center;">No</th>
                    <th rowspan="2" style="border: 1px solid black; text-align: center;">Hari/Tanggal</th>
                    <th colspan="3" rowspan="2" style="border: 1px solid black; text-align: center;">Pemadaman</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Pemilik</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Alamat Pemilik</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Nomor</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">No.HP Pengguna Layanan</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Jumlah Unit</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Jenis Objek Evakuasi</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Keterangan</th>

                </tr>
                <tr>
                    
                </tr>
            

            <?php foreach ($item as $row): ?>

                <tr style="height: 40px;">
                    <td style="border: 1px solid black; text-align: center;"><?= $row[1];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[2];?></td>
                    <td style="border: 1px solid black; text-align: center;" colspan="3"><?= $row[3];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[4];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[5];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[6];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[7];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[8];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[9];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[10];?></td>
                </tr>
            <?php endforeach; ?>
            </table>


            <!-- Pemyelamatan Mei -->
            <h5 class="data-content text-center fw-bold mb-4" style="font-size: 24px; font-family: sans-serif; margin-top: 100px;">Data Penyelamatan Bulan Mei</h5>


            <?php 
                //INI CODE PHP UNTUK LOOPING BERITANYA. LAKUKAN DI TABEL2 LAINN
                $item = [];
                $sql = "SELECT * FROM penyelamatan_mei";

                if ($result = mysqli_query($con, $sql)) {
                    // Fetch one and one row
                    while ($row = mysqli_fetch_row($result)) {
                    $item[] = $row;
                    }
                    //mysqli_free_result($result);
                }
            ?>
            
            <table>
                <tr>
                    <th rowspan="2" style="border: 1px solid black; width: 5%; text-align: center;">No</th>
                    <th rowspan="2" style="border: 1px solid black; text-align: center;">Hari/Tanggal</th>
                    <th colspan="3" style="border: 1px solid black; text-align: center;">Penyelamatan</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Pemilik</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Alamat Pemilik</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">No.HP Pengguna Layanan</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Jumlah Unit</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Jenis Objek Evakuasi</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Hasil Pelaksanaan</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Keterangan</th>
                </tr>
                <tr>
                    <th style="border: 1px solid black; width: 10%; text-align: center;">Hewan Berbisa</th>
                    <th style="border: 1px solid black; width: 10%; text-align: center;">Evakuasi</th>
                    <th style="border: 1px solid black; width: 10%; text-align: center;">Lain-lain</th>
                </tr>
            

            <?php foreach ($item as $row): ?>

                <tr style="height: 40px;">
                    <td style="border: 1px solid black; text-align: center;"><?= $row[1];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[2];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[3];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[4];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[5];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[6];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[7];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[8];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[9];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[10];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[11];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[12];?></td>
                </tr>
            <?php endforeach; ?>
            </table>


            <!-- Pemadaman Mei -->
            <h5 class="data-content text-center fw-bold mb-4" style="font-size: 24px; font-family: sans-serif; margin-top: 100px;">Data Pemadaman Bulan Mei</h5>

            <?php 
                //INI CODE PHP UNTUK LOOPING BERITANYA. LAKUKAN DI TABEL2 LAINN
                $item = [];
                $sql = "SELECT * FROM pemadaman_mei";

                if ($result = mysqli_query($con, $sql)) {
                    // Fetch one and one row
                    while ($row = mysqli_fetch_row($result)) {
                    $item[] = $row;
                    }
                    //mysqli_free_result($result);
                }
            ?>
            
            <table>
                <tr>
                    <th rowspan="2" style="border: 1px solid black; width: 5%; text-align: center;">No</th>
                    <th rowspan="2" style="border: 1px solid black; text-align: center;">Hari/Tanggal</th>
                    <th colspan="3" rowspan="2" style="border: 1px solid black; text-align: center;">Pemadaman</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Pemilik</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Alamat Pemilik</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Nomor</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">No.HP Pengguna Layanan</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Jumlah Unit</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Jenis Objek Evakuasi</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Keterangan</th>

                </tr>
                <tr>
                    
                </tr>
            

            <?php foreach ($item as $row): ?>

                <tr style="height: 40px;">
                    <td style="border: 1px solid black; text-align: center;"><?= $row[1];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[2];?></td>
                    <td style="border: 1px solid black; text-align: center;" colspan="3"><?= $row[3];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[4];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[5];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[6];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[7];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[8];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[9];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[10];?></td>
                </tr>
            <?php endforeach; ?>
            </table>


            <!-- Pemyelamatan Juni -->
            <h5 class="data-content text-center fw-bold mb-4" style="font-size: 24px; font-family: sans-serif; margin-top: 100px;">Data Penyelamatan Bulan Juni</h5>


            <?php 
                //INI CODE PHP UNTUK LOOPING BERITANYA. LAKUKAN DI TABEL2 LAINN
                $item = [];
                $sql = "SELECT * FROM penyelamatan_juni";

                if ($result = mysqli_query($con, $sql)) {
                    // Fetch one and one row
                    while ($row = mysqli_fetch_row($result)) {
                    $item[] = $row;
                    }
                    //mysqli_free_result($result);
                }
            ?>
            
            <table>
                <tr>
                    <th rowspan="2" style="border: 1px solid black; width: 5%; text-align: center;">No</th>
                    <th rowspan="2" style="border: 1px solid black; text-align: center;">Hari/Tanggal</th>
                    <th colspan="3" style="border: 1px solid black; text-align: center;">Penyelamatan</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Pemilik</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Alamat Pemilik</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">No.HP Pengguna Layanan</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Jumlah Unit</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Jenis Objek Evakuasi</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Hasil Pelaksanaan</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Keterangan</th>
                </tr>
                <tr>
                    <th style="border: 1px solid black; width: 10%; text-align: center;">Hewan Berbisa</th>
                    <th style="border: 1px solid black; width: 10%; text-align: center;">Evakuasi</th>
                    <th style="border: 1px solid black; width: 10%; text-align: center;">Lain-lain</th>
                </tr>
            

            <?php foreach ($item as $row): ?>

                <tr style="height: 40px;">
                    <td style="border: 1px solid black; text-align: center;"><?= $row[1];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[2];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[3];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[4];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[5];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[6];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[7];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[8];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[9];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[10];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[11];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[12];?></td>
                </tr>
            <?php endforeach; ?>
            </table>


            <!-- Pemadaman Juni -->
            <h5 class="data-content text-center fw-bold mb-4" style="font-size: 24px; font-family: sans-serif; margin-top: 100px;">Data Pemadaman Bulan Juni</h5>

            <?php 
                //INI CODE PHP UNTUK LOOPING BERITANYA. LAKUKAN DI TABEL2 LAINN
                $item = [];
                $sql = "SELECT * FROM pemadaman_juni";

                if ($result = mysqli_query($con, $sql)) {
                    // Fetch one and one row
                    while ($row = mysqli_fetch_row($result)) {
                    $item[] = $row;
                    }
                    //mysqli_free_result($result);
                }
            ?>
            
            <table>
                <tr>
                    <th rowspan="2" style="border: 1px solid black; width: 5%; text-align: center;">No</th>
                    <th rowspan="2" style="border: 1px solid black; text-align: center;">Hari/Tanggal</th>
                    <th colspan="3" rowspan="2" style="border: 1px solid black; text-align: center;">Pemadaman</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Pemilik</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Alamat Pemilik</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Nomor</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">No.HP Pengguna Layanan</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Jumlah Unit</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Jenis Objek Evakuasi</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Keterangan</th>

                </tr>
                <tr>
                    
                </tr>
            

            <?php foreach ($item as $row): ?>

                <tr style="height: 40px;">
                    <td style="border: 1px solid black; text-align: center;"><?= $row[1];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[2];?></td>
                    <td style="border: 1px solid black; text-align: center;" colspan="3"><?= $row[3];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[4];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[5];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[6];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[7];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[8];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[9];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[10];?></td>
                </tr>
            <?php endforeach; ?>
            </table>


            <!-- Pemyelamatan Juli -->
            <h5 class="data-content text-center fw-bold mb-4" style="font-size: 24px; font-family: sans-serif; margin-top: 100px;">Data Penyelamatan Bulan Juli</h5>


            <?php 
                //INI CODE PHP UNTUK LOOPING BERITANYA. LAKUKAN DI TABEL2 LAINN
                $item = [];
                $sql = "SELECT * FROM penyelamatan_juli";

                if ($result = mysqli_query($con, $sql)) {
                    // Fetch one and one row
                    while ($row = mysqli_fetch_row($result)) {
                    $item[] = $row;
                    }
                    //mysqli_free_result($result);
                }
            ?>
            
            <table>
                <tr>
                    <th rowspan="2" style="border: 1px solid black; width: 5%; text-align: center;">No</th>
                    <th rowspan="2" style="border: 1px solid black; text-align: center;">Hari/Tanggal</th>
                    <th colspan="3" style="border: 1px solid black; text-align: center;">Penyelamatan</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Pemilik</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Alamat Pemilik</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">No.HP Pengguna Layanan</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Jumlah Unit</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Jenis Objek Evakuasi</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Hasil Pelaksanaan</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Keterangan</th>
                </tr>
                <tr>
                    <th style="border: 1px solid black; width: 10%; text-align: center;">Hewan Berbisa</th>
                    <th style="border: 1px solid black; width: 10%; text-align: center;">Evakuasi</th>
                    <th style="border: 1px solid black; width: 10%; text-align: center;">Lain-lain</th>
                </tr>
            

            <?php foreach ($item as $row): ?>

                <tr style="height: 40px;">
                    <td style="border: 1px solid black; text-align: center;"><?= $row[1];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[2];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[3];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[4];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[5];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[6];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[7];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[8];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[9];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[10];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[11];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[12];?></td>
                </tr>
            <?php endforeach; ?>
            </table>


            <!-- Pemadaman Juli -->
            <h5 class="data-content text-center fw-bold mb-4" style="font-size: 24px; font-family: sans-serif; margin-top: 100px;">Data Pemadaman Bulan Juli</h5>

            <?php 
                //INI CODE PHP UNTUK LOOPING BERITANYA. LAKUKAN DI TABEL2 LAINN
                $item = [];
                $sql = "SELECT * FROM pemadaman_juli";

                if ($result = mysqli_query($con, $sql)) {
                    // Fetch one and one row
                    while ($row = mysqli_fetch_row($result)) {
                    $item[] = $row;
                    }
                    //mysqli_free_result($result);
                }
            ?>
            
            <table>
                <tr>
                    <th rowspan="2" style="border: 1px solid black; width: 5%; text-align: center;">No</th>
                    <th rowspan="2" style="border: 1px solid black; text-align: center;">Hari/Tanggal</th>
                    <th colspan="3" rowspan="2" style="border: 1px solid black; text-align: center;">Pemadaman</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Pemilik</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Alamat Pemilik</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Nomor</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">No.HP Pengguna Layanan</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Jumlah Unit</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Jenis Objek Evakuasi</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Keterangan</th>

                </tr>
                <tr>
                    
                </tr>
            

            <?php foreach ($item as $row): ?>

                <tr style="height: 40px;">
                    <td style="border: 1px solid black; text-align: center;"><?= $row[1];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[2];?></td>
                    <td style="border: 1px solid black; text-align: center;" colspan="3"><?= $row[3];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[4];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[5];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[6];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[7];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[8];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[9];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[10];?></td>
                </tr>
            <?php endforeach; ?>
            </table>


            <!-- Pemyelamatan Agustus -->
            <h5 class="data-content text-center fw-bold mb-4" style="font-size: 24px; font-family: sans-serif; margin-top: 100px;">Data Penyelamatan Bulan Agustus</h5>


            <?php 
                //INI CODE PHP UNTUK LOOPING BERITANYA. LAKUKAN DI TABEL2 LAINN
                $item = [];
                $sql = "SELECT * FROM penyelamatan_agustus";

                if ($result = mysqli_query($con, $sql)) {
                    // Fetch one and one row
                    while ($row = mysqli_fetch_row($result)) {
                    $item[] = $row;
                    }
                    //mysqli_free_result($result);
                }
            ?>
            
            <table>
                <tr>
                    <th rowspan="2" style="border: 1px solid black; width: 5%; text-align: center;">No</th>
                    <th rowspan="2" style="border: 1px solid black; text-align: center;">Hari/Tanggal</th>
                    <th colspan="3" style="border: 1px solid black; text-align: center;">Penyelamatan</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Pemilik</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Alamat Pemilik</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">No.HP Pengguna Layanan</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Jumlah Unit</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Jenis Objek Evakuasi</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Hasil Pelaksanaan</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Keterangan</th>
                </tr>
                <tr>
                    <th style="border: 1px solid black; width: 10%; text-align: center;">Hewan Berbisa</th>
                    <th style="border: 1px solid black; width: 10%; text-align: center;">Evakuasi</th>
                    <th style="border: 1px solid black; width: 10%; text-align: center;">Lain-lain</th>
                </tr>
            

            <?php foreach ($item as $row): ?>

                <tr style="height: 40px;">
                    <td style="border: 1px solid black; text-align: center;"><?= $row[1];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[2];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[3];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[4];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[5];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[6];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[7];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[8];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[9];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[10];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[11];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[12];?></td>
                </tr>
            <?php endforeach; ?>
            </table>


            <!-- Pemyelamatan September -->
            <h5 class="data-content text-center fw-bold mb-4" style="font-size: 24px; font-family: sans-serif; margin-top: 100px;">Data Penyelamatan Bulan September</h5>


            <?php 
                //INI CODE PHP UNTUK LOOPING BERITANYA. LAKUKAN DI TABEL2 LAINN
                $item = [];
                $sql = "SELECT * FROM penyelamatan_september";

                if ($result = mysqli_query($con, $sql)) {
                    // Fetch one and one row
                    while ($row = mysqli_fetch_row($result)) {
                    $item[] = $row;
                    }
                    //mysqli_free_result($result);
                }
            ?>
            
            <table>
                <tr>
                    <th rowspan="2" style="border: 1px solid black; width: 5%; text-align: center;">No</th>
                    <th rowspan="2" style="border: 1px solid black; text-align: center;">Hari/Tanggal</th>
                    <th colspan="3" style="border: 1px solid black; text-align: center;">Penyelamatan</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Pemilik</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Alamat Pemilik</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">No.HP Pengguna Layanan</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Jumlah Unit</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Jenis Objek Evakuasi</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Hasil Pelaksanaan</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Keterangan</th>
                </tr>
                <tr>
                    <th style="border: 1px solid black; width: 10%; text-align: center;">Hewan Berbisa</th>
                    <th style="border: 1px solid black; width: 10%; text-align: center;">Evakuasi</th>
                    <th style="border: 1px solid black; width: 10%; text-align: center;">Lain-lain</th>
                </tr>
            

            <?php foreach ($item as $row): ?>

                <tr style="height: 40px;">
                    <td style="border: 1px solid black; text-align: center;"><?= $row[1];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[2];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[3];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[4];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[5];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[6];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[7];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[8];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[9];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[10];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[11];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[12];?></td>
                </tr>
            <?php endforeach; ?>
            </table>


            <!-- Pemadaman September -->
            <h5 class="data-content text-center fw-bold mb-4" style="font-size: 24px; font-family: sans-serif; margin-top: 100px;">Data Pemadaman Bulan September</h5>

            <?php 
                //INI CODE PHP UNTUK LOOPING BERITANYA. LAKUKAN DI TABEL2 LAINN
                $item = [];
                $sql = "SELECT * FROM pemadaman_september";

                if ($result = mysqli_query($con, $sql)) {
                    // Fetch one and one row
                    while ($row = mysqli_fetch_row($result)) {
                    $item[] = $row;
                    }
                    //mysqli_free_result($result);
                }
            ?>
            
            <table>
                <tr>
                    <th rowspan="2" style="border: 1px solid black; width: 5%; text-align: center;">No</th>
                    <th rowspan="2" style="border: 1px solid black; text-align: center;">Hari/Tanggal</th>
                    <th colspan="3" rowspan="2" style="border: 1px solid black; text-align: center;">Pemadaman</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Pemilik</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Alamat Pemilik</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Nomor</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">No.HP Pengguna Layanan</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Jumlah Unit</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Jenis Objek Evakuasi</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Keterangan</th>

                </tr>
                <tr>
                    
                </tr>
            

            <?php foreach ($item as $row): ?>

                <tr style="height: 40px;">
                    <td style="border: 1px solid black; text-align: center;"><?= $row[1];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[2];?></td>
                    <td style="border: 1px solid black; text-align: center;" colspan="3"><?= $row[3];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[4];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[5];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[6];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[7];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[8];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[9];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[10];?></td>
                </tr>
            <?php endforeach; ?>
            </table>


            <!-- Pemyelamatan Oktober -->
            <h5 class="data-content text-center fw-bold mb-4" style="font-size: 24px; font-family: sans-serif; margin-top: 100px;">Data Penyelamatan Bulan Oktober</h5>


            <?php 
                //INI CODE PHP UNTUK LOOPING BERITANYA. LAKUKAN DI TABEL2 LAINN
                $item = [];
                $sql = "SELECT * FROM penyelamatan_oktober";

                if ($result = mysqli_query($con, $sql)) {
                    // Fetch one and one row
                    while ($row = mysqli_fetch_row($result)) {
                    $item[] = $row;
                    }
                    //mysqli_free_result($result);
                }
            ?>
            
            <table>
                <tr>
                    <th rowspan="2" style="border: 1px solid black; width: 5%; text-align: center;">No</th>
                    <th rowspan="2" style="border: 1px solid black; text-align: center;">Hari/Tanggal</th>
                    <th colspan="3" style="border: 1px solid black; text-align: center;">Penyelamatan</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Pemilik</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Alamat Pemilik</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">No.HP Pengguna Layanan</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Jumlah Unit</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Jenis Objek Evakuasi</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Hasil Pelaksanaan</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Keterangan</th>
                </tr>
                <tr>
                    <th style="border: 1px solid black; width: 10%; text-align: center;">Hewan Berbisa</th>
                    <th style="border: 1px solid black; width: 10%; text-align: center;">Evakuasi</th>
                    <th style="border: 1px solid black; width: 10%; text-align: center;">Lain-lain</th>
                </tr>
            

            <?php foreach ($item as $row): ?>

                <tr style="height: 40px;">
                    <td style="border: 1px solid black; text-align: center;"><?= $row[1];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[2];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[3];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[4];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[5];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[6];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[7];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[8];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[9];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[10];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[11];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[12];?></td>
                </tr>
            <?php endforeach; ?>
            </table>


            <!-- Pemadaman Oktober -->
            <h5 class="data-content text-center fw-bold mb-4" style="font-size: 24px; font-family: sans-serif; margin-top: 100px;">Data Pemadaman Bulan Oktober</h5>

            <?php 
                //INI CODE PHP UNTUK LOOPING BERITANYA. LAKUKAN DI TABEL2 LAINN
                $item = [];
                $sql = "SELECT * FROM pemadaman_oktober";

                if ($result = mysqli_query($con, $sql)) {
                    // Fetch one and one row
                    while ($row = mysqli_fetch_row($result)) {
                    $item[] = $row;
                    }
                    //mysqli_free_result($result);
                }
            ?>
            
            <table>
                <tr>
                    <th rowspan="2" style="border: 1px solid black; width: 5%; text-align: center;">No</th>
                    <th rowspan="2" style="border: 1px solid black; text-align: center;">Hari/Tanggal</th>
                    <th colspan="3" rowspan="2" style="border: 1px solid black; text-align: center;">Pemadaman</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Pemilik</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Alamat Pemilik</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Nomor</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">No.HP Pengguna Layanan</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Jumlah Unit</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Jenis Objek Evakuasi</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Keterangan</th>

                </tr>
                <tr>
                    
                </tr>
            

            <?php foreach ($item as $row): ?>

                <tr style="height: 40px;">
                    <td style="border: 1px solid black; text-align: center;"><?= $row[1];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[2];?></td>
                    <td style="border: 1px solid black; text-align: center;" colspan="3"><?= $row[3];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[4];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[5];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[6];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[7];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[8];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[9];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[10];?></td>
                </tr>
            <?php endforeach; ?>
            </table>


            <!-- Pemyelamatan November -->
            <h5 class="data-content text-center fw-bold mb-4" style="font-size: 24px; font-family: sans-serif; margin-top: 100px;">Data Penyelamatan Bulan November</h5>


            <?php 
                //INI CODE PHP UNTUK LOOPING BERITANYA. LAKUKAN DI TABEL2 LAINN
                $item = [];
                $sql = "SELECT * FROM penyelamatan_november";

                if ($result = mysqli_query($con, $sql)) {
                    // Fetch one and one row
                    while ($row = mysqli_fetch_row($result)) {
                    $item[] = $row;
                    }
                    //mysqli_free_result($result);
                }
            ?>
            
            <table>
                <tr>
                    <th rowspan="2" style="border: 1px solid black; width: 5%; text-align: center;">No</th>
                    <th rowspan="2" style="border: 1px solid black; text-align: center;">Hari/Tanggal</th>
                    <th colspan="3" style="border: 1px solid black; text-align: center;">Penyelamatan</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Pemilik</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Alamat Pemilik</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">No.HP Pengguna Layanan</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Jumlah Unit</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Jenis Objek Evakuasi</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Hasil Pelaksanaan</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Keterangan</th>
                </tr>
                <tr>
                    <th style="border: 1px solid black; width: 10%; text-align: center;">Hewan Berbisa</th>
                    <th style="border: 1px solid black; width: 10%; text-align: center;">Evakuasi</th>
                    <th style="border: 1px solid black; width: 10%; text-align: center;">Lain-lain</th>
                </tr>
            

            <?php foreach ($item as $row): ?>

                <tr style="height: 40px;">
                    <td style="border: 1px solid black; text-align: center;"><?= $row[1];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[2];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[3];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[4];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[5];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[6];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[7];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[8];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[9];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[10];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[11];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[12];?></td>
                </tr>
            <?php endforeach; ?>
            </table>


            <!-- Pemadaman November -->
            <h5 class="data-content text-center fw-bold mb-4" style="font-size: 24px; font-family: sans-serif; margin-top: 100px;">Data Pemadaman Bulan November</h5>

            <?php 
                //INI CODE PHP UNTUK LOOPING BERITANYA. LAKUKAN DI TABEL2 LAINN
                $item = [];
                $sql = "SELECT * FROM pemadaman_november";

                if ($result = mysqli_query($con, $sql)) {
                    // Fetch one and one row
                    while ($row = mysqli_fetch_row($result)) {
                    $item[] = $row;
                    }
                    //mysqli_free_result($result);
                }
            ?>
            
            <table>
                <tr>
                    <th rowspan="2" style="border: 1px solid black; width: 5%; text-align: center;">No</th>
                    <th rowspan="2" style="border: 1px solid black; text-align: center;">Hari/Tanggal</th>
                    <th colspan="3" rowspan="2" style="border: 1px solid black; text-align: center;">Pemadaman</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Pemilik</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Alamat Pemilik</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Nomor</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">No.HP Pengguna Layanan</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Jumlah Unit</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Jenis Objek Evakuasi</th>
                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Keterangan</th>

                </tr>
                <tr>
                    
                </tr>
            

            <?php foreach ($item as $row): ?>

                <tr style="height: 40px;">
                    <td style="border: 1px solid black; text-align: center;"><?= $row[1];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[2];?></td>
                    <td style="border: 1px solid black; text-align: center;" colspan="3"><?= $row[3];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[4];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[5];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[6];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[7];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[8];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[9];?></td>
                    <td style="border: 1px solid black; text-align: center;"><?= $row[10];?></td>
                </tr>
            <?php endforeach; ?>

            </table>




            
            <!-- <div class="row">
                <div class="graph">
                    <img src="./image/fuji-famous.jpg" class="data-img d-block mx-auto" alt="">
                </div>
            </div> -->
        </div>



        <!-- <div id="data2" class="container" style="margin-bottom: 200px;">
            <h5 class="data-content text-center fw-bold mt-5 mb-4" style="font-size: 24px; font-family: sans-serif;">JUMLAH PENGUNJUNG WISATA EDUKASI BERDASARKAN JENIS KELAMIN</h5>
            <div class="row">
                <div class="graph">
                    <img src="./image/everest-famous.jpg" class="data-img d-block mx-auto" alt="">
                </div>
            </div>
        </div>

        <div id="data3" class="container" style="margin-bottom: 200px;">
            <h5 class="data-content text-center fw-bold mt-5 mb-4" style="font-size: 24px; font-family: sans-serif;">LAPORAN BULANAN PEMADAM OLEH REDKAR TAHUN 2022</h5>
            <div class="row">
                <div class="graph">
                    <img src="./image/k2-famous.jpg" class="data-img d-block mx-auto" alt="">
                </div>
            </div>
        </div>

        <div id="data4" class="container" style="margin-bottom: 200px;">
            <h5 class="data-content text-center fw-bold mt-5 mb-4" style="font-size: 24px; font-family: sans-serif;">DATA KEBAKARAN DINAS PEMADAM KEBAKARAN</h5>
            <div class="row">
                <div class="graph">
                    <img src="./image/fuji-famous.jpg" class="data-img d-block mx-auto" alt="">
                </div>
            </div>
        </div> -->
    </section>
    <!-- ========== Data End ========== -->



    <!-- ========== Nav lama ========== -->
    <!-- <header>
    <div class="container-fluid sticky-top">
        <nav class="d-flex flex-wrap align-items-center justify-content-md-between py-3 mb-4 border-bottom sticky-top p-5">
          <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
            <span class="fs-4 fw-bold mx-4"> DarMisa</span>
          </a>
    
          <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="#" class="nav-link px-2 link-secondary">Beranda</a></li>
            <li><a href="#" class="nav-link px-2 link-secondary">Profil</a></li>
            <li><a href="#" class="nav-link px-2 link-secondary">Berita</a></li>
            <li><a href="#" class="nav-link px-2 link-secondary">Personil & Unit</a></li>
            <li><a href="#" class="nav-link px-2 link-secondary">Hubungi Kami</a></li>
          </ul>
    
          <div class="col-md-3 text-end">
            <button type="button" class="btn rounded-pill text-white fw-bold w-50 btn-sm-w-100 me-2" style="background-color:rgb(51, 33, 117);">Login</button>
          </div>
        </nav>
    </div>
    </header> -->
        <!-- ========== Nav End ========== -->



         <!-- ========== footer ========== -->
         <div class="container-fluid shadow-lg" style="background-color: #fdf9ff;">
            <footer class="footer py-5 " style="font-family: sans-serif;">
                <div class="row">
                    <div class="justify-content-between col-12 col-md-4 mb-3">
                        <div class="row">
                            <a class="navbar-brand navbar-dark d-flex p-0 align-items-center text-dark w-75 fs-5 ms-sm-3 col-6 col-md-4 me-6 mb-4" href="darmisa.php"></svg><img class="logo-darmisa text-dark" src="./image/logo-seal.jpeg" alt="" title="Social Economic Accelerator Lab"><span a class="fw-bold mx-4" title="DarMisa">DarMisa</span></a>
                        </div>
                        
                        <p class="mb-4">Damkar Information And Reporting Website</p>
                        <p class="fw-bold mb-1">Follow Us</p>
                        <ul class="nav list-unstyled">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"></a></li>
                            <li class=""><a class="text-muted mb-2" href="https://web.facebook.com/dinasdamkar.kabupatenminahasa"><i class="bi bi-facebook" title="facebook"></i></a></li>
                            <!-- <li class="ms-2"><a class="text-muted mb-1" href="https://wa.me/message/XUYOEQ6PQY7SF1"><i class="bi bi-whatsapp" title="Whatsapp"></i></a></li> -->
                            <li class="ms-2"><a class="text-muted mb-1" href="#"><i class="bi bi-instagram" title="instagram"></i></a></li>
                            <li class="ms-2"><a class="text-muted mb-1" href="#"><i class="bi bi-youtube" title="Youtube"></i></a></li>
                        </ul>
                    </div>
          
                    <div class="justify-content-center col-12 col-md-4 mb-3">
                        <h5 class="mb-4">Contact Us</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted lh-lg mb-3 me-4"><i class="bi bi-geo-alt"></i> 8W77+JJ, Kembuan, Kec. Tondano Utara, Kabupaten Minahasa, Sulawesi utara</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted mb-3"><i class="bi bi-telephone"></i> (0431) 321001</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><i class="bi bi-envelope"></i> darmisa.minahasa@gmail.com</a></li>
                        </ul>
                    </div>

                    <!-- <div class="col-12 col-md-3 mb-3">
                        <h5 class="mb-4">Ikuti Akun Sosmed Kami</h5>
                        <ul class="nav list-unstyled">
                            <li class=""><a class="text-muted mb-2" href="#"><i class="bi bi-facebook"></i></a></li>
                            <li class="ms-2"><a class="text-muted mb-1" href="#"><i class="bi bi-whatsapp"></i></a></li>
                            <li class="ms-2"><a class="text-muted mb-1" href="#"><i class="bi bi-instagram"></i></a></li>
                            <li class="ms-2"><a class="text-muted mb-1" href="#"><i class="bi bi-youtube"></i></a></li>
                        </ul>
                    </div> -->
          
                    <div class="justify-content-end col-12 col-md-4 mb-3">
                        <form action="mailto:darmisa.minahasa@gmail.com" enctype="text/plain" method="post">                        
                            <h5 class="mb-4">Critism And Suggestion</h5>
                            <div class="d-flex flex-column flex-sm-row list-unstyled w-100 gap-2 w-100">
                                <label for="newsletter1" class="visually-hidden">comment</label>
                                <!-- <input type="text" class="footer-form text-center" style="border-radius: 25px 0 0 25px;" placeholder="Text Here"> -->
                                <button type="submit" class="btn btn-white bg-dark text-white w-50" style="border-radius: 25px 25px 25px 25px; margin-left: -10px;"><a class="text-muted mb-2" href="alfrdt87@gmail.com"></a>Send <i class="bi bi-send"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </footer>
        </div>

        <div class="container-fluid p-0">
            <footer class="border-bottom border-danger"></footer>
        </div>

        <div class="container-fluid p-0" style="font-family: sans-serif;">
            <footer class="bottom">
                <div class="copy flex-column flex-sm-row justify-content-center align-middle text-bg-dark p-3 py-1 my-0 border-top border-danger">
                    <p>&copy; 2022 DarMisa. All rights reserved.</p>
                </div>
            </footer>
        </div>
          
          
        <!-- ========== footer End ========== -->

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

      <script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
      <script src="./assets/js/core/bootstrap.min.js" type="text/javascript"></script>
      <script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>

</body>
</html>