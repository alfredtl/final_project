<?php
include_once 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./dist/css/personil.css">
    <title>Personil dan Unit</title>
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
            <a class="navbar-brand navbar-dark d-flex  align-items-center text-white  ms-sm-3 col-6 col-md-4 me-6" aria-label="Bootstrap" href="#"></svg><img class="logo-darmisa text-dark rounded-circle d-flex mx-auto" src="./image/logo_DarMisa.jpg" alt="" title="DarMisa"><span class="fw-bold" style="margin-left: 80px; margin-right: 80px;">DarMisa</span></a>
            
            <!-- <a href="" class="btn-small btn btn-sm rounded-pill text-white mb-0 ms-auto me-2 d-lg-none d-block" title="Login" style="background-color:rgb(218, 37, 29); width: 80px;">Login</a> -->
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="list-burger bi bi-list d-lg-none ms-0" style="color: white; cursor: pointer;"></i></button>
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
            <!--<div class="btn-login col-md-2 col-lg-2 text-end">
                <button type="button" class="btn text-white rounded-pill w-50 me-2" title="Login" style="background-color:rgb(218, 37, 29);">Login</button>
            </div> -->
        </div>
    </nav>
    <!-- =========== Navbar Baru Lagi End =========== -->


    
    <!-- =========== Nav Baru =========== -->
    <header>
        <div id="nav" class="container-fluid" style="font-family: sans-serif;">
            <!-- <div class="row text-center sticky-top">
                <div class="col-12">
                    <nav class="navbar d-flex navbar-expand-lg rounded-pill top-0 z-index-fixed position-absolute justify-content-between p-5 my-0 py-2 start-0 end-0 mx-4" style="background-color:rgb(51, 33, 117);">
                        <div class="nav-content container-fluid d-flex flex-column flex-sm-row justify-content-between px-0">
                            <a class="navbar-brand navbar-dark d-flex  align-items-center text-white  ms-sm-3 col-6 col-md-4 me-6" aria-label="Bootstrap" href="./darmisa.html"></svg><img class="logo-darmisa text-dark rounded-circle" src="./image/logo_DarMisa.jpg" alt="" title="DarMisa"><span class="fw-bold mx-4 ms-5">DarMisa</span></a>
                            <a href="" class="btn btn-sm rounded-pill text-white mb-0 ms-auto d-lg-none d-block" title="Login" style="background-color:rgb(218, 37, 29); width: 80px;">Login</a>
                            <i class="list-burger bi bi-list d-lg-none ms-4" style="color: white; cursor: pointer;"></i>
                            <ul class="nav mb-md-0 mx-auto" style="width: 500px; font-size: 14px;">
                                <li><a href="./home.html" class="nav-link px-2" >Beranda</a></li>
                                <li><a href="./profil.html" class="nav-link px-2 ">Profil</a></li>
                                <li><a href="#" class="nav-link px-2 ">Berita</a></li>
                                <li><a href="#" class="nav-link px-2 ">Personil & Unit</a></li>
                                <li><a href="#" class="nav-link px-2 ">Hubungi Kami</a></li>
                            </ul>
                        </div>
                        <div class="btn-login col-md-2 text-end">
                            <button type="button" class="btn text-white rounded-pill w-50 me-2" title="Login" style="background-color:rgb(218, 37, 29);">Login</button>
                        </div>
                    </nav>
                </div>    -->
            </div>
        </div>
    </header>
    <!-- =========== Nav Baru End =========== -->

        <h1 class="text-center fw-bold mb-5 mt-4">Personil dan Unit</h1>
    <!-- =========== Personil =========== -->
    <!-- <section class="pt-3 pb-4" style="font-family: sans-serif;">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 text-light mx-auto py-4" style="margin-bottom: 100px; border-radius: 25px; background-color: rgb(51, 33, 117);" >
                    <h1 class="text-center text-light fw-bold" style="margin-bottom: 80px;"></h1>
                    <div class="container col-10" style="margin-bottom: 100px;">
                        <h1 class="text-light fw-bold mb-4">Personil</h1>
                        <p class="text-seal text-light lh-lg mb-5">Saat ini Dinas Pemadam Kebakaran Kota Depok memiliki kekuatan personil sebanyak 69 0rang 
                            yang terdiri dari Regu Fire Man (Juru Padam) dan Regu Rescue (Penyelamatan) dimana seluruh personil telah dibagi ke beberapa UPT Damkar 
                            yang tersedia di beberapa Kecamatan untuk selalu bersiaga terhadap bencana kebakaran dan bencana lainnya.</p>
                        <h5 class="text-seal text-light lh-lg">KONDISI PERSONIL YANG DIBUTUHKAN</h5>

                        <table>
                            <tr>
                                <th style="width: 50%;"></th>
                                <th style="width: 50%;">Saat ini</th>
                                <th style="width: 50%;">Dibutuhkan</th>
                            </tr>
                            <tr>
                                <td style="width: 50%;">1. Pemadam</td>
                                <td style="width: 50%;">:20 orang (20 orang bersertifikat)</td>
                                <td style="width: 50%;">172 orang</td>
                            </tr>
                            <tr>
                                <td style="width: 50%;">2. Penyelamat (rescue)</td>
                                <td style="width: 50%;">:12 Org (8 Org bersertifikat)</td>
                                <td style="width: 50%;">12 orang</td>
                            </tr>
                            <tr>
                                <td style="width: 50%;">3. Operator Mobil</td>
                                <td style="width: 50%;">:20 Org (20 Org bersertifikat)</td>
                                <td style="width: 50%;">24 orang</td>
                            </tr>
                            <tr>
                                <td style="width: 50%;">4. Inspektur Kebakaran</td>
                                <td style="width: 50%;">:6 orang</td>
                                <td style="width: 50%;">8 orang</td>
                            </tr>
                            <tr>
                                <td style="width: 50%;">5. Instruktur Kebakaran</td>
                                <td style="width: 50%;">:8 orang</td>
                                <td style="width: 50%;">10 orang</td>
                            </tr>
                            <tr>
                                <td style="width: 50%;">6. Penyuluh Lapangan</td>
                                <td style="width: 50%;">:3 orang</td>
                                <td style="width: 50%;">4 orang</td>
                            </tr>
                            <tr>
                                <td style="width: 50%;">7. Investigator Kebakaran</td>
                                <td style="width: 50%;">:-</td>
                                <td style="width: 50%;">4 orang</td>
                            </tr>
                            <tr>
                                <td style="width: 50%;">8. Caraka Mobil Kebakaran</td>
                                <td style="width: 50%;">:-)</td>
                                <td style="width: 50%;">14 orang</td>
                            </tr>
                            <tr>
                                <td style="width: 50%;">9. Montir Mobil Kebakaran</td>
                                <td style="width: 50%;">:1 orang</td>
                                <td style="width: 50%;">2 orang</td>
                            </tr>
                            <tr>
                                <td style="width: 50%;">10. Operator Komunikasi Kebakaran</td>
                                <td style="width: 50%;">:-</td>
                                <td style="width: 50%;">14 orang</td>
                            </tr>
                            <tr>
                                <td style="border-bottom: 1px solid white; width: 50%;">11. Tenaga Administrasi & Struktural</td>
                                <td style="border-bottom: 1px solid white; width: 50%;">:39 orang</td>
                                <td style="border-bottom: 1px solid white; width: 50%;">69 orang</td>
                            </tr>
                            <tr>
                                <td style="width: 50%;">Jumlah</td>
                                <td style="width: 50%;">:107 orang</td>
                                <td style="width: 50%;">333 orang</td>
                            </tr>
                            <tr>
                                <td style="width: 50%;"></td>
                                <td style="width: 50%;"></td>
                                <td style="width: 50%; color: rgb(51, 33, 117);">.</td>
                            </tr>
                            <tr class="mt-5">
                                <td style="width: 50%;">12. Tenaga Kontrak</td>
                                <td style="width: 50%;">:2 orang</td>
                                <td style="width: 50%;"></td>
                            </tr>
                            <tr>
                                <td style="border-bottom: 1px solid white; width: 50%;">13. Tenaga Pemadam Non PNS </td>
                                <td style="border-bottom: 1px solid white; width: 50%;">130 Org (130 Org Bersertifikat)</td>
                                <td style="border-bottom: 1px solid white; width: 50%;"></td>
                            </tr>
                            <tr>
                                <td style="width: 50%;">Jumlah Keseluruhan</td>
                                <td style="width: 50%;">: 239 orang</td>
                                <td style="width: 50%;"></td>
                            </tr>
                            <var></var>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- =========== Personil End =========== -->





    <!-- =========== Kelengkapan Unit =========== -->
    <!-- <section class="pt-3 pb-4" style="font-family: sans-serif;">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 text-light mx-auto py-4" style="margin-bottom: 100px; border-radius: 25px; background-color: rgb(218, 37, 29);" >
                    <div class="container col-10" style="margin-bottom: 100px;">
                        <h1 class="text-light fw-bold" style="margin-top: 60px; margin-bottom: 50px;">Kelengkapan Unit</h1>
                        <h5 class="text-seal text-light lh-lg">KONDISI KENDARAAN OPERASIONAL</h5>   
                    <table>
                        <tr>
                            <th style="width: 40%;">Jenis Kendaraan</th>
                            <th style="width: 30%;">Saat ini</th>
                            <th style="width: 30%;">Kekurangan</th>
                            <th style="width: 30%;">Satuan</th>
                        </tr>
                        <tr>
                            <td style="width: 40%;">1. Mobil Pompa Kebakaran 3000-5000 Itr</td>
                            <td style="width: 30%;">:25</td>
                            <td style="width: 30%;">18</td>
                            <td style="width: 30%;">Unit</td>
                        </tr> 
                        <tr>
                            <td style="width: 40%;">2. Mobil Rescue</td>
                            <td style="width: 30%;">1</td>
                            <td style="width: 30%;">1</td>
                            <td style="width: 30%;">Unit</td>
                        </tr> 
                        <tr>
                            <td style="width: 40%;">3. Mobil Tangga Kebakaran</td>
                            <td style="width: 30%;">-</td>
                            <td style="width: 30%;">1</td>
                            <td style="width: 30%;">Unit</td>
                        </tr> 
                        <tr>
                            <td style="width: 40%;">4. Mobil Submarsible</td>
                            <td style="width: 30%;">-</td>
                            <td style="width: 30%;">1</td>
                            <td style="width: 30%;">Unit</td>
                        </tr> 
                         <tr>
                            <td style="width: 40%;">5. Mobil Tangki / Supply Air</td>
                            <td style="width: 30%;">3</td>
                            <td style="width: 30%;">2</td>
                            <td style="width: 30%;">Unit</td>
                        </tr> 
                        <tr>
                            <td style="width: 40%;">6. Mobil Komando</td>
                            <td style="width: 30%;">7</td>
                            <td style="width: 30%;">-</td>
                            <td style="width: 30%;">Unit</td>
                        </tr> 
                        <tr>
                            <td style="width: 40%;">7.  Mobil Ambulance</td>
                            <td style="width: 30%;">3</td>
                            <td style="width: 30%;">-</td>
                            <td style="width: 30%;">Unit</td>
                        </tr> 
                        <tr>
                            <td style="width: 40%;">8. Mobil Storing</td>
                            <td style="width: 30%;">1</td>
                            <td style="width: 30%;">1</td>
                            <td style="width: 30%;">Unit</td>
                        </tr> 
                        <tr>
                            <td style="width: 40%;">9. Mobil Pompa Kebakaran Kap. 1000 Itr</td>
                            <td style="width: 30%;">1</td>
                            <td style="width: 30%;">1</td>
                            <td style="width: 30%;">Unit</td>
                        </tr> 
                        <tr>
                            <td style="width: 40%;">10. Portabel Apung</td>
                            <td style="width: 30%;">10</td>
                            <td style="width: 30%;">-</td>
                            <td style="width: 30%;">Unit</td>
                        </tr>
                        <tr>
                            <td style="width: 40%;">11. Mobil Operasional Sekretariat</td>
                            <td style="width: 30%;">2</td>
                            <td style="width: 30%;">1</td>
                            <td style="width: 30%;">Unit</td>
                        </tr>
                        <tr>
                            <td style="width: 40%;">12. Mobil Operasional Penyuluh/Inspektur</td>
                            <td style="width: 30%;">1</td>
                            <td style="width: 30%;">1</td>
                            <td style="width: 30%;">Unit</td>
                        </tr>
                        <tr>
                            <td style="width: 40%;">13. Mobil Operasional Kepala Dinas</td>
                            <td style="width: 30%;">1</td>
                            <td style="width: 30%;">1</td>
                            <td style="width: 30%;">Unit</td>
                        </tr>
                        <tr>
                            <td style="width: 40%;">14. Mobil Operasional Sekretaris Dinas</td>
                            <td style="width: 30%;">1</td>
                            <td style="width: 30%;">-</td>
                            <td style="width: 30%;">Unit</td>
                        </tr>
                        <tr>
                            <td style="width: 40%;">15. Mobil Operasional Kepala Bidang</td>
                            <td style="width: 30%;">1</td>
                            <td style="width: 30%;">-</td>
                            <td style="width: 30%;">Unit</td>
                        </tr>
                        <tr>
                            <td style="width: 40%;">16. Motor Dinas</td>
                            <td style="width: 30%;">13</td>
                            <td style="width: 30%;">12</td>
                            <td style="width: 30%;">Unit</td>
                        </tr>
                        <tr>
                            <td style="width: 40%;">17. Perahu Karet</td>
                            <td style="width: 30%;">3</td>
                            <td style="width: 30%;">3</td>
                            <td style="width: 30%;">Unit</td>
                        </tr>
                        <tr>
                            <td style="width: 40%;">18. Perahu Karet Bermotor</td>
                            <td style="width: 30%;">1</td>
                            <td style="width: 30%;">-</td>
                            <td style="width: 30%;">Unit</td>
                        </tr>
                        <tr>
                            <td style="width: 40%;">19. Perahu Alumunium</td>
                            <td style="width: 30%;">-</td>
                            <td style="width: 30%;">3</td>
                            <td style="width: 30%;">Unit</td>
                        </tr>

                    </div>
                    </table>
            </div>
        </div>
    </section> -->
    <!-- =========== Kelengkapan Unit End =========== -->


    <!-- =========== Personil =========== -->
    <section class="pt-3 pb-4" style="font-family: sans-serif;">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 shadow mx-auto py-4" style="margin-bottom: 100px; border-radius: 25px; background-color: rgb(51, 33, 117); background-color: #fdf9ff;" >
                    <h1 class="text-center fw-bold" style="margin-bottom: 80px;"></h1>
                    <div class="container col-10" style="margin-bottom: 100px;">
                        <p class="text-dark text-tf mb-0">Sumber Daya Dinas Pemadam Kebakaran</p>
                            <p class="text-dark text-tf mb-3">1. Sumber daya manusia</p>

                            <p class="text-dark text-tf mb-5">Berdasarkan data kepegawaian Dinas Pemadam Kebakaran jumlah
                                pegawai seluruhnya sebanyak 97 orang, sebagaimana tabel berikut:</p>


                            <!-- Komposisi Pegawai Menurut Jenjang Pendidikan -->
                            <h5 class="text-dark text-center mb-3"> Komposisi Pegawai Menurut Jenjang Pendidikan</h5>

                            <?php 
                                //INI CODE PHP UNTUK LOOPING BERITANYA. LAKUKAN DI TABEL2 LAINN
                                
                                $sql = "SELECT * FROM kp_jenjangpendidikan";
                                
                                $kp_jenjangpendidikan = [];
                                if ($result = mysqli_query($con, $sql)) {
                                    // Fetch one and one row
                                    while ($row = mysqli_fetch_row($result)) {
                                    $kp_jenjangpendidikan[] = $row;
                                    }
                                    mysqli_free_result($result);
                                }
                            ?>

                            <table style="text-align: center;">
                                <tr>
                                    <th style="border: 1px solid black; width: 5%; text-align: center;">No</th>
                                    <th style="border: 1px solid black; width: 20%; text-align: center;">Jenjang Pendidikan</th>
                                    <th style="border: 1px solid black; width: 10%; text-align: center;">Jumlah (Orang)</th>
                                    <th style="border: 1px solid black; width: 10%; text-align: center;">Presentase (%)</th>
                                    <a href=""></a>
                                </tr>
                            

                            <?php foreach ($kp_jenjangpendidikan as $row): ?>

                                <tr style="height: 40px;">
                                    <td style="border: 1px solid black; text-align: center;"><?= $row[1];?></td>
                                    <td style="border: 1px solid black; text-align: center;"><?= $row[2];?></td>
                                    <td style="border: 1px solid black; text-align: center;"><?= $row[3];?></td>
                                    <td style="border: 1px solid black; text-align: center;"><?= $row[4];?></td>
                                    <td style="text-align: center; width: 5%;">
                                        <a href="./update_jp.php?id=<?= $row[0] ?>" class="btn text-light w-75" style="background-color:rgb(51, 33, 117);">Ubah</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>

                            </table>



                            <!-- Komposisi Pegawai Menurut Status Kepegawaian -->
                            <h5 class="text-center mt-5 mb-3"> Komposisi Pegawai Menurut Status Kepegawaian</h5>

                            <?php 
                                //INI CODE PHP UNTUK LOOPING BERITANYA. LAKUKAN DI TABEL2 LAINN
                                $item = [];
                                $sql = "SELECT * FROM kp_statuskepegawaian";

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
                                    <th style="border: 1px solid black; width: 5%; text-align: center;">No</th>
                                    <th style="border: 1px solid black; width: 20%; text-align: center;">Status Kepegawaian</th>
                                    <th style="border: 1px solid black; width: 10%; text-align: center;">Jumlah (Orang)</th>
                                    <th style="border: 1px solid black; width: 10%; text-align: center;">Presentase (%)</th>
                                    <!-- <th style="border: 1px solid black; width: 5%; text-align: center;"></th> -->

                                </tr>
                            

                            <?php foreach ($item as $row): ?>

                                <tr style="height: 40px;">
                                    <td style="border: 1px solid black; text-align: center;"><?= $row[1];?></td>
                                    <td style="border: 1px solid black; text-align: center;"><?= $row[2];?></td>
                                    <td style="border: 1px solid black; text-align: center;"><?= $row[3];?></td>
                                    <td style="border: 1px solid black; text-align: center;"><?= $row[4];?></td>
                                    <td style="text-align: center; width: 5%;">
                                        <a href="./update_statuskepegawaian.php?id=<?= $row[0] ?>" class="btn text-light w-75" style="background-color:rgb(51, 33, 117);">Ubah</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </table>


                            <!-- Komposisi Pegawai Menurut Jabatan/Bidang Tugas -->
                            <h5 class="text-center mt-5 mb-3"> Komposisi Pegawai Menurut Jabatan/Bidang Tugas</h5>

                            <?php 
                                //INI CODE PHP UNTUK LOOPING BERITANYA. LAKUKAN DI TABEL2 LAINN
                                $item = [];
                                $sql = "SELECT * FROM kp_jbt";

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
                                    <th style="border: 1px solid black; width: 5%; text-align: center;">No</th>
                                    <th style="border: 1px solid black; width: 25%; text-align: center;">Jenjang Pendidikan</th>
                                    <th style="border: 1px solid black; width: 15%; text-align: center;">Jumlah (Orang)</th>
                                    <!-- <th style="border: 1px solid black; width: 5%; text-align: center;"></th> -->

                                </tr>
                            

                            <?php foreach ($item as $row): ?>

                                <tr style="height: 40px;">
                                    <td style="border: 1px solid black; text-align: center;"><?= $row[1];?></td>
                                    <td style="border: 1px solid black; text-align: center;"><?= $row[2];?></td>
                                    <td style="border: 1px solid black; text-align: center;"><?= $row[3];?></td>
                                    <td style="text-align: center; width: 5%;">
                                        <a href="./update_kp_jbt.php?id=<?= $row[0] ?>" class="btn text-light w-75" style="background-color:rgb(51, 33, 117);">Ubah</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </table>


                            <!-- Jumlah dan kondisi armada Dinas Pemadam kebakaran Kabupatem Minahasa -->
                            <h5 class="text-center mt-5 mb-3"> Jumlah dan Kondisi Armada Dinas Pemadam kebakaran Kabupatem Minahasa</h5>

                            <?php 
                                //INI CODE PHP UNTUK LOOPING BERITANYA. LAKUKAN DI TABEL2 LAINN
                                $item = [];
                                $sql = "SELECT * FROM jumlah_kondisiarmada";

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
                                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Jenis</th>
                                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Jumlah (unit/buah)</th>
                                    <th colspan="3" style="border: 1px solid black; width: 10%; text-align: center;">Kondisi Sekarang</th>
                                    <th rowspan="2" style="border: 1px solid black; width: 10%; text-align: center;">Yang Diharapkan Jumlah (unit/buah)</th>
                                    <!-- <th rowspan="2" style="border: 1px solid black; width: 5%; text-align: center;"></th> -->

                                </tr>
                                <tr>
                                <th style="border: 1px solid black; width: 5%; text-align: center;">Baik</th>
                                <th style="border: 1px solid black; width: 5%; text-align: center;">Rusak Ringan / Layak Pakai</th>
                                <th style="border: 1px solid black; width: 5%; text-align: center;">Rusak Berat</th>
                                </tr>
                            

                            <?php foreach ($item as $row): ?>

                                <tr style="height: 40px;">
                                    <td style="border: 1px solid black; text-align: center;"><?= $row[1];?></td>
                                    <td style="border: 1px solid black; text-align: center;"><?= $row[2];?></td>
                                    <td style="border: 1px solid black; text-align: center;"><?= $row[3];?></td>
                                    <td style="border: 1px solid black; text-align: center;"><?= $row[4];?></td>
                                    <td style="border: 1px solid black; text-align: center;"><?= $row[5];?></td>
                                    <td style="border: 1px solid black; text-align: center;"><?= $row[6];?></td>
                                    <td style="text-align: center; width: 5%;">
                                        <a href="./update_jumlah_kondisiarmada.php?id=<?= $row[0] ?>" class="btn text-light w-75" style="background-color:rgb(51, 33, 117);">Ubah</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </table>


                            <!-- <table border="1" class="text-center" style="border: 1px solid white; width: 100%;">
                                <tr>
                                    <th style="border: 1px solid white; width: 10%;">No</th>
                                    <th style="border: 1px solid white; width: 30%;">Jenjang Pendidikan</th>
                                    <th style="border: 1px solid white; width: 30%;">Jumlah (Orang)</th>
                                    <th style="border: 1px solid white; width: 30%;">Prosentase (%)</th>
                                </tr>
                                <tr style="height: 40px;">
                                    <td style="border: 1px solid white; width: 10%;">1</td>
                                    <td style="border: 1px solid white; width: 30%;">Strata 3</td>
                                    <td style="border: 1px solid white; width: 30%;">-</td>
                                    <td style="border: 1px solid white; width: 30%;">-</td>
                                </tr>
                                <tr style="height: 40px;">
                                    <td style="border: 1px solid white; width: 10%;">2</td>
                                    <td style="border: 1px solid white; width: 30%;">Starata 2</td>
                                    <td style="border: 1px solid white; width: 30%;">1</td>
                                    <td style="border: 1px solid white; width: 30%;">5,26</td>
                                </tr>
                                <tr style="height: 40px;">
                                    <td style="border: 1px solid white; width: 10%;">3</td>
                                    <td style="border: 1px solid white; width: 30%;">Strata 1</td>
                                    <td style="border: 1px solid white; width: 30%;">15</td>
                                    <td style="border: 1px solid white; width: 30%;">78,94</td>
                                </tr>
                                <tr style="height: 40px;">
                                    <td style="border: 1px solid white; width: 10%;">4</td>
                                    <td style="border: 1px solid white; width: 30%;">Diploma 3</td>
                                    <td style="border: 1px solid white; width: 30%;">-</td>
                                    <td style="border: 1px solid white; width: 30%;">-</td>
                                </tr>
                                <tr style="height: 40px;">
                                    <td style="border: 1px solid white; width: 10%;">5</td>
                                    <td style="border: 1px solid white; width: 30%;">SLTA Sederajat</td>
                                    <td style="border: 1px solid white; width: 30%;">3</td>
                                    <td style="border: 1px solid white; width: 30%;">15,80</td>
                                </tr>
                                <tr style="height: 40px;">
                                    <td style="border: 1px solid white; width: 10%;">6</td>
                                    <td style="border: 1px solid white; width: 30%;">KSLTA Sederajat</td>
                                    <td style="border: 1px solid white; width: 30%;">Animalia</td>
                                    <td style="border: 1px solid white; width: 30%;">Kingdom</td>
                                </tr>
                                <tr style="height: 40px;">
                                    <td style="border: 1px solid white; width: 10%;">7</td>
                                    <td style="border: 1px solid white; width: 30%;">SD</td>
                                    <td style="border: 1px solid white; width: 30%;">-</td>
                                    <td style="border: 1px solid white; width: 30%;">-</td>
                                </tr>
                                <tr style="height: 40px;">
                                    <td colspan="2" style="border: 1px solid white; width: 10%;">Jumlah</td>
                                    <td style="border: 1px solid white; width: 30%;">19</td>
                                    <td style="border: 1px solid white; width: 30%;">100,00</td>
                                </tr>
                            </table>

                            <h5 class="text-center mb-3 mt-5">Komposisi Pegawai Menurut Status Kepegawaian</h5>
                            <table class="text-center w-100" >
                                <tr>
                                    <th style="border: 1px solid white; width: 10%;">No</th>
                                    <th style="border: 1px solid white; width: 30%;">Status Kepegawaian</th>
                                    <th style="border: 1px solid white; width: 30%;">Jumlah (Orang)</th>
                                    <th style="border: 1px solid white; width: 30%;">Prosentase (%)</th>
                                </tr>
                                <tr style="height: 40px;">
                                    <td style="border: 1px solid white; width: 10%;">1</td>
                                    <td style="border: 1px solid white; width: 30%;">Pegawai Negeri Sipil </td>
                                    <td style="border: 1px solid white; width: 30%;">19</td>
                                    <td style="border: 1px solid white; width: 30%;">19,60</td>
                                </tr>
                                <tr style="height: 40px;">
                                    <td style="border: 1px solid white; width: 10%;">2</td>
                                    <td style="border: 1px solid white; width: 30%;">Pegawai Tidak Tetap</td>
                                    <td style="border: 1px solid white; width: 30%;">78</td>
                                    <td style="border: 1px solid white; width: 30%;">80,40</td>
                                </tr>
                                <tr style="height: 40px;">
                                    <td colspan="2" style="border: 1px solid white; width: 10%;">Jumlah</td>
                                    <td  style="border: 1px solid white; width: 30%;">97</td>
                                    <td style="border: 1px solid white; width: 30%;">100,00</td>
                                </tr>
                            </table> 

                            <h5 class="text-center mb-3 mt-5">Komposisi Pegawai Menurut Jabatan/Bidang Tugas</h5>
                            <table class="text-center w-100" >
                                <tr>
                                    <th style="border: 1px solid white; width: 10%;">No</th>
                                    <th style="border: 1px solid white; width: 45%;">Jabatan/Bidang Tugas</th>
                                    <th style="border: 1px solid white; width: 45%;">Jumlah (Orang)</th>
                                </tr>
                                <tr style="height: 40px;">
                                    <td style="border: 1px solid white; width: 10%;">1</td>
                                    <td style="border: 1px solid white; width: 45%;" class="text-start">Kepala Dinas</td>
                                    <td style="border: 1px solid white; width: 45%;">1</td>
                                </tr>
                                <tr style="height: 40px;">
                                    <td style="border: 1px solid white; width: 10%;">2</td>
                                    <td style="border: 1px solid white; width: 45%;" class="text-start">Sekretaris</td>
                                    <td style="border: 1px solid white; width: 45%;">1</td>
                                </tr>
                                <tr style="height: 40px;">
                                    <td style="border: 1px solid white; width: 10%;">3</td>
                                    <td style="border: 1px solid white; width: 45%;" class="text-start">Kepala Subbagian</td>
                                    <td style="border: 1px solid white; width: 45%;">2</td>
                                </tr>
                                <tr style="height: 40px;">
                                    <td style="border: 1px solid white; width: 10%;">4</td>
                                    <td style="border: 1px solid white; width: 45%;" class="text-start">Kepala Bidang</td>
                                    <td style="border: 1px solid white; width: 45%;">2</td>
                                </tr>
                                <tr style="height: 40px;">
                                    <td style="border: 1px solid white; width: 10%;">5</td>
                                    <td style="border: 1px solid white; width: 45%;" class="text-start">Kepala Seksi</td>
                                    <td style="border: 1px solid white; width: 45%;">6</td>
                                </tr>
                                <tr style="height: 40px;">
                                    <td style="border: 1px solid white; width: 10%;">6</td>
                                    <td style="border: 1px solid white; width: 45%;" class="text-start">Kepala Seksi</td>
                                    <td style="border: 1px solid white; width: 45%;">7</td>
                                </tr>
                                <tr style="height: 40px;">
                                    <td style="border: 1px solid white; width: 10%;">7</td>
                                    <td style="border: 1px solid white; width: 45%;" class="text-start">Danpos/Wadanpos</td>
                                    <td style="border: 1px solid white; width: 45%;">-</td>
                                </tr>
                                <tr style="height: 40px;">
                                    <td style="border: 1px solid white; width: 10%;">8</td>
                                    <td style="border: 1px solid white; width: 45%;" class="text-start">Driver</td>
                                    <td style="border: 1px solid white; width: 45%;">-</td>
                                </tr>
                                <tr style="height: 40px;">
                                    <td style="border: 1px solid white; width: 10%;">9</td>
                                    <td style="border: 1px solid white; width: 45%;" class="text-start">Anggota</td>
                                    <td style="border: 1px solid white; width: 45%;">78</td>
                                </tr>
                                <tr style="height: 40px;">
                                    <td colspan="2" style="border: 1px solid white; width: 10%;">Jumlah</td>
                                    <td style="border: 1px solid white; width: 30%;">97</td>
                                </tr>
                            </table>
                            </br>
                        

                            <h5 class="text-center mb-0 mt-5">Jumlah dan kondisi armada</h5>
                            <h5 class="text-center mb-3">Dinas Pemadam kebakaran Kabupatem Minahasa</h5>
                            <table>
                                <tr>
                                    <th rowspan="2" style="border: 1px solid white; width: 30%; text-align: center;">Jenis</th>
                                    <th rowspan="2" style="border: 1px solid white; text-align: center;">Jumlah (unit/buah)</th>
                                    <th colspan="3" style="border: 1px solid white; text-align: center;">kondisi sekarang</th>
                                    <th rowspan="2" style="border: 1px solid white; width: 15%; text-align: center;">Yang Diharapkan Jumlah (unit/buah)</th>
                                </tr>
                                <tr>
                                    <th style="border: 1px solid white; width: 10%; text-align: center;">Baik</th>
                                    <th style="border: 1px solid white; width: 15%; text-align: center;">Rusak Ringan / Layak Pakai</th>
                                    <th style="border: 1px solid white; width: 10%; text-align: center;">Rusak Berat</th>
                                    <th></th>
                                </tr>
                                <tr style="height: 40px;">
                                    <td style="border: 1px solid white; text-align: center;">Mobil Unit Penyemprot</td>
                                    <td style="border: 1px solid white; text-align: center;">7</td>
                                    <td style="border: 1px solid white; text-align: center;">4</td>
                                    <td style="border: 1px solid white; text-align: center;">3</td>
                                    <td style="border: 1px solid white; text-align: center;">-</td>
                                    <td style="border: 1px solid white; text-align: center;">14</td>
                                </tr>
                                <tr style="height: 40px;">
                                    <td style="border: 1px solid white; text-align: center;">Mobil Suplly Unit</td>
                                    <td style="border: 1px solid white; text-align: center;">-</td>
                                    <td style="border: 1px solid white; text-align: center;">-</td>
                                    <td style="border: 1px solid white; text-align: center;">-</td>
                                    <td style="border: 1px solid white; text-align: center;">-</td>
                                    <td style="border: 1px solid white; text-align: center;">5</td>
                                </tr>
                                <tr style="height: 40px;">
                                    <td style="border: 1px solid white; text-align: center;">Mobil Operasional Bencana</td>
                                    <td style="border: 1px solid white; text-align: center;">-</td>
                                    <td style="border: 1px solid white; text-align: center;">-</td>
                                    <td style="border: 1px solid white; text-align: center;">-</td>
                                    <td style="border: 1px solid white; text-align: center;">-</td>
                                    <td style="border: 1px solid white; text-align: center;">5</td>
                                </tr>
                                <tr style="height: 40px;">
                                    <td style="border: 1px solid white; text-align: center;">Motor Operasional</td>
                                    <td style="border: 1px solid white; text-align: center;">-</td>
                                    <td style="border: 1px solid white; text-align: center;">-</td>
                                    <td style="border: 1px solid white; text-align: center;">-</td>
                                    <td style="border: 1px solid white; text-align: center;">-</td>
                                    <td style="border: 1px solid white; text-align: center;">2</td>
                                </tr>
                            </table> -->

                    <!-- <p class="mb-5"></p> 
                    <p class="text-tf mb-3">2. Sarana dan prasarana</p>

                    <p class="text-tf mb-3">Sarana dan prasarana pendukung yang dimiliki Dinas Pemadam Kebakaran 
                        menurut data Aset tahun 2018 disajikan dalam tabel berikut :</p>
                    <p class="text-tf text-center mb-3">Komposisi Pegawai Menurut Jabatan/Bidang Tugas</p> -->

                    <!--// Tabel 2.4 aset //-->

                    <!-- <p class="mb-5"></p> 
                    <p class="text-tf mb-3">3. Kinerja Pelayanan Dinas Pemadam Kebakaran</p>

                    <p class="text-tf mb-3">Kinerja pelayanan Dinas Pemadam Kebakaran Kabupaten Minahasa tahun 
                        2018-2023 berdasarkan tugas dan fungsi terdiri atas dua indikator yaitu: :</p>
                    <p class="text-tf mb-0">Kinerja pelayanan Dinas Pemadam Kebakaran Kabupaten Minahasa tahun 
                        2018-2023 berdasarkan tugas dan fungsi terdiri atas dua indikator yaitu:</p>
                    <p class="text-tf mb-0">1. Tingkat kemantapan sarana dan prasarana pemadam kebakaran, 
                        meliputi:</p> 
                        a. Cakupan pelayanan bencana kebakaran</p> 
                        b. Jumlah mobil pemadam kebakaran diatas 3000-5000 liter pada 
                        WMK</p> 
                        c. Jumlah aparatur pemadam kebakaran yang bersertifikat</p> 
                        2. Response time rate</p> 
                        Secara umum pencapaian kinerja Dinas Pemadam Kebakaran tahun 
                        2018-2023 disajikan dalam tabel berikut :</p> -->

                
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =========== Personil End =========== -->


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

</body>
</html>