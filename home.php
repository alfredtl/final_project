<?php
include_once 'koneksi.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css" type="text/css">
    <title>Home | DarMisa</title>
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

    <style>
        .container .container .img .logo-pemadam{
            width: 55%; 
            margin-left: 210px; 
            margin-top: 80px;
            transition: all 0.5s ease;
        }
    </style>
    <!-- <style type="text/css">
        /*#nav{
        height: 650vh;
        transition: all 0.5s ease;
        } */
        body{
            font-family: sans-serif;
        }
        p{
            transition: all 0.5 ease;
        }
        header{
            top: 0;
            padding: 0;
            width: 100%;
            height: 35rem;
            background-image: url('./image/image-home.jpg');
            background-image: url('') ;
            background-image: /*linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),*/ url('');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            transition: all 0.5s ease;
        }
        .navbar .navbar-brand .logo-darmisa{
            display: flex;
            margin: auto;
        }
        .navbar .nav-content .nav{
            display: flex;
        }
        /* .navbar .text-logo{
            margin-left: 70px;
            margin-right: 70px;
        } */
        .navbar .collapse .nav-link{
            color: rgb(181, 174, 205);
            transition: all 0.3s ease;
        }
        .navbar .collapse .nav-link:hover{
            color: whitesmoke;
        }
        .navbar .btn-small{
            display: none;
        }
        .navbar .btn-login{
            display: flex;
        }
        .nav .nav-link{
            color: rgb(181, 174, 205);
            transition: all 0.3s ease;
        }
        .nav .nav-link:hover{
            color: whitesmoke;
        }
        .container{
            width: 100%;
        }
        .container .container{
            margin: auto;
        }
        .container .container .img .logo-pemadam{
            width: 55%; 
            margin-left: 210px; 
            margin-top: 100px;
            transition: all 0.5s ease;
        }
        .container .container .text-header .text-moto{
            margin-top: 100px;  
            font-size: 48px; 
        }
        .container .container .text-header .text-moto2{
            text-align: justify;
            /*color: rgb(133, 129, 147);*/ 
            color: rgba(198, 196, 196, 1);
        }
        .container .container .text-header .btn{
            background-color:rgb(218, 37, 29); 
            width: 320px; 
        }
        .box .box-box{
            width: 95%;
        }
        .data-content{
            margin-top: 20px;
            transition: all 0.5s ease;
        }
        .graph .data-img{
            width: 700px;
            transition: all 0.5 ease;
        }
        .img-news{
            height: 200px;
            object-fit: cover;
            transition: all 0.5s ease;
        }
        .link-terkait{
            width: 100%;
            height: 80vh;
            background-image: /*linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.5)),*/ url('../../image/image-link.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            transition: all 0.5s ease;
        }
        .link-terkait .logo-link{
            margin-top: 100px;
            transition: all 0.5s ease;
        }
        .link-terkait .logo-link .logo{
            width: 200px;
            margin: auto;
            align-items: center;
            justify-content: center;
            transition: all 0.5s ease;
        }
        .logo-darmisa{
            width: 30px;
        }
        .bottom{
            border: 10px red;
            border-radius: 10%;
            transition: all 0.5s ease;
        }
        .btn{
            color: white;
            transition: all 0.5s ease;
        }
        .footer{
            padding: 170px;
        }
        .copy{
            display: flex;
        }

        @media (min-width: 0px) and (max-width: 992px) {
            header{
                height: 100vh;
                transition: all 0.5s ease;
            }
            /* #nav{
                height: 650vh;
                transition: all 0.5 ease;
            } */
            .container .navbar .nav-content .nav{
                flex-direction: column;
                display: none;
                transition: all 0.5s ease;
            }
            .container .navbar .btn-login{
                display: none;
                transition: all 0.5s ease;
            }
            .container .container .text-header .text-moto{
                margin-top: 120px; 
                font-size: 48px; 
                transition: all 0.5s ease;
            }
            .container .container .text-header .btn{
                margin-top: 10px;
                margin-bottom: 0;
                transition: all 0.5s ease;
            }
            .container .container .img .logo-pemadam{
                display: flex;
                margin: auto;
                margin-top: 30px;
                width: 200px;
                display: none;
            }
            .graph .data-img{
                width: 500px;
                transition: all 0.5 ease;
            }
            .graph .img-news{
                height: 200px;
                width: 100%;
                object-fit: cover;
                text-align: center;
                transition: all 0.5s ease;
            }
            .link-terkait{
                height: 40vh;
                transition: all 0.5s ease;
            }
            .link-terkait .logo-link .logo{
                width: 80px;
            }
            .link-terkait .logo-link{
                margin-top: 30px;
                transition: all 0.5s ease;
            }
            .navbar .btn-login{
                display: none;
                transition: all 0.5s ease;
            }
            .navbar .btn-small{
                display: block;
                transition: all 0.5s ease;
            }
        }
        @media (max-width: 767px) {
            /* #nav{
                height: 850vh;
                transition: all 0.5 ease;
            } */
            .container .container .img .logo-pemadam{
                display: flex;
                margin-top: 30px;
                width: 150px;
                transition: all 0.5s ease;
                display: none;
            }
        }
        @media (max-width: 500px) {
            .navbar .navbar-brand .logo-darmisa{
                margin-right: 35px;
                transition: all 0.5s ease;
            }
            /* .navbar .text-logo{
                margin-left: 20px;
            } */
            .container .container .text-header .text-moto{
                margin-top: 100px;
                font-size: 40px;
                transition: all 0.5s ease;
            }
            .container .container .text-header .text-moto2{
                transition: all 0.5s ease;
            }
            .container .container .text-header .btn{
                transition: all 0.5s ease;
            }
            .graph .data-img{
                width: 400px;
                transition: all 0.5 ease;
            }
            .footer{
                padding: 100px;
                transition: all 0.5s ease;
            }
            .copy{
                text-align: center;
                transition: all 0.5s ease;
            }
        }

        @media (min-width: 993px) and (max-width: 1199px) {
            .navbar .navbar-brand .logo-darmisa{
                margin-left: 35px;
                transition: all 0.5s ease;
            }
            .container .container .text-header .text-moto{
                margin-top: 60px;
                margin-left: 35px;
                line-height: 60px;
                transition: all 0.5s ease; 
            }
            .container .container .text-header .text-moto2{
                margin-left: 35px; 
                transition: all 0.5s ease;
            }
            .container .container .text-header .btn{
                margin-left: 35px; 
                transition: all 0.5s ease;
            }
            .box .box-box{
                width: 90%;
                transition: all 0.5s ease;
            }
            .container .container .img .logo-pemadam{
                margin-left: 150px;
                margin-top: 130px;
            }
            .container .container .navbar .btn-login{
                margin-right: 20px;
            }
            .graph .img-news{
                height: 200px;
                width: 100%;
                object-fit: cover;
                text-align: center;
                transition: all 0.5s ease;
            }

        }

        @media (min-width:  1200px) and (max-width: 1399px) {
            .navbar .navbar-brand .logo-darmisa{
                margin-left: 85px;
                transition: all 0.5s ease;
            }
            .container .container .text-header .text-moto{
                margin-top: 60px;
                margin-left: 85px;
                transition: all 0.5s ease; 
            }
            .container .container .text-header .text-moto2{
                margin-left: 85px; 
                transition: all 0.5s ease;
            }
            .container .container .text-header .btn{
                margin-left: 85px; 
                transition: all 0.5s ease;
            }
            .container .container .img .logo-pemadam{
                width: 45%; 
                margin-left: 200px; 
                margin-top: 120px;
                transition: all 0.5s ease;
            }
            .box .box-box{
                width: 83%;
                transition: all 0.5s ease;
            }
            .graph .img-news{
                height: 200px;
                width: 100%;
                object-fit: cover;
                text-align: center;
                transition: all 0.5s ease;
            }
        }
        @media (min-width:  1400px) {
            .navbar .navbar-brand .logo-darmisa{
                margin-left: 85px;
                transition: all 0.5s ease;
            }
            .container .container .text-header .text-moto{
                margin-top: 80px;
                margin-left: 85px;
                transition: all 0.5s ease; 
            }
            .container .container .text-header .text-moto2{
                margin-left: 85px; 
                transition: all 0.5s ease;
            }
            .container .container .text-header .btn{
                margin-left: 85px; 
                transition: all 0.5s ease;
            }
            .container .container .img .logo-pemadam{
                width: 45%; 
                margin-left: 250px; 
                margin-top: 90px;
                transition: all 0.5s ease;
            }
            .box .box-box{
                width: 83%;
                transition: all 0.5s ease;
            }
            .graph .img-news{
                height: 200px;
                width: 100%;
                object-fit: cover;
                text-align: center;
                transition: all 0.5s ease;
            }
        }
    </style> -->

    <!-- coba -->
    <!-- <header>
        <div id="nav" class="container" style="font-family: sans-serif;">
            <div class="row g-0 text-center sticky-top">
                <div class="col-12">
                    <nav class="navbar d-flex navbar-expand-lg rounded-pill position-absolute justify-content-between p-3 my-3 py-2 start-0 end-0 mx-4 sticky-top" style="background-color:rgb(51, 33, 117);">
                        <div class="container justify-content-between">
                            <a class="navbar-brand navbar-dark d-flex  align-items-center text-white  ms-sm-3 col-6 col-md-4 me-6" aria-label="DarMisa" href="./darmisa.html"></svg><img class="logo-darmisa text-dark rounded-circle d-flex ms-3" src="./image/logo_DarMisa.jpg" alt="" title="DarMisa"><span class="text-logo fw-bold">DarMisa</span></a>
                            
                            <a href="" class="btn-small btn btn-sm rounded-pill text-white mb-0 ms-auto me-2" title="Login" style="background-color:rgb(218, 37, 29); width: 80px;">Login</a>
                            
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="list-burger bi bi-list d-lg-none ms-0 text-end" style="color: white; cursor: pointer;"></i></button>
                            <div class="collapse navbar-collapse text-center" id="navbarNav">
                                <ul class="navbar-nav mx-auto">
                                    <li class="nav-item me-4">
                                        <a class="nav-link" aria-current="page" href="./home.html">Beranda</a>
                                    </li>
                                    <li class="nav-item me-4">
                                        <a class="nav-link" aria-current="page" href="./profil.html">Profil</a>
                                    </li>
                                    <li class="nav-item me-4">
                                        <a class="nav-link" aria-current="page" href="#skill">Berita</a>
                                    </li>
                                    <li class="nav-item me-4">
                                        <a class="nav-link" aria-current="page" href="#education">Personil & Unit</a>
                                    </li>
                                    <li class="nav-item me-4">
                                        <a class="nav-link" aria-current="page" href="portofolio.html">Hubungi Kami</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="btn-login col-md-2 col-lg-2 text-end">
                                <button type="button" class="btn text-white rounded-pill w-50 me-0" title="Login" style="background-color:rgb(218, 37, 29);">Login</button>
                            </div>
                        </div>

                    </nav>
                </div>
            </div> 
            <div class="row">
                <div class="text-header col-lg-6 col-sm-12">
                    <p class="text-moto text-white fw-bolder text-align-sm-center" >Pantang Pulang Sebelum Api Padam</p>
                    <p class="" style="color: rgb(133, 129, 147); margin-left: 90px;">Tetap jaga kesehatan dan selalu waspada terhadap bahaya kebakaran</p>
                    <button type="button" class="btn text-white rounded mt-4 me-2" style="background-color:rgb(218, 37, 29); width: 320px; margin-left: 90px;"><i class="bi bi-telephone-fill" style="color: rgb(51, 33, 117); margin-right: 10px;"></i> EMERGENCY CALL (0431) 321001</button>
                </div>
                <div class="img col-lg-6 col-sm-12">
                    <img src="./image/logo-pemadam1.png" class="logo-pemadam" alt="">
                </div>
            </div>
        </div>
    </header>    -->
    <!-- coba end -->


    <!-- =========== Navbar Baru Lagi =========== -->
    <nav class="navbar navbar-expand-lg shadow sticky-top" style="background-color:rgb(51, 33, 117);">
        <div class="container">
            <a class="navbar-brand navbar-dark d-flex  align-items-center text-white  ms-sm-3 col-6 col-md-4 me-6" aria-label="Bootstrap" href="#"></svg><img class="logo-darmisa text-dark rounded-circle" src="./image/logo_DarMisa.jpg" alt="" title="DarMisa"><span class="fw-bold" style="margin-right: 100px;">DarMisa</span></a>
            
            <!-- <a href="./login.php" class="btn-small btn btn-sm rounded-pill text-white mb-0 ms-auto me-2" title="Login" style="background-color:rgb(218, 37, 29); width: 80px;">Login</a> -->
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="list-burger bi bi-list d-lg-none ms-0 text-end" style="color: white; cursor: pointer;"></i></button>
            <div class="collapse navbar-collapse text-center" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item me-3">
                        <a class="nav-link" aria-current="page" href="./home.php">Beranda</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link" aria-current="page" href="./profil.php">Profil</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link" aria-current="page" href="./berita.php">Berita</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link" aria-current="page" href="./personil.php">Personil & Unit</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link" aria-current="page" href="./kontak.html">Hubungi Kami</a>
                    </li>
                    <!-- <li class="nav-item me-3">
                        <a class="nav-link" aria-current="page" href="./update.php">Edit</a>
                    </li> -->
                </ul>
            </div>
            <!-- <div class="btn-login col-md-2 col-lg-2 text-end">
                <a class="w-50" href="./login.php"><button type="button" class="btn text-white rounded-pill w-100 me-2" title="Login" style="background-color:rgb(218, 37, 29);">Login</button></a> 
            </div> -->
        </div>
    </nav>
    <!-- =========== Navbar Baru Lagi End =========== -->

    
    <!-- =========== Nav Baru =========== -->
    
    <header>
        <div id="nav" class="container" style="font-family: sans-serif; ">
            <!-- <div class="row g-0 text-center sticky-top">
                <div class="col-12">
                    <nav class="navbar d-flex navbar-expand-lg rounded-pill top-0 shadow position-absolute justify-content-between p-5 my-3 py-2 start-0 end-0 mx-4 p-5" style="background-color:rgb(51, 33, 117);">
                        <div class="nav-content container-fluid d-flex flex-column flex-sm-row justify-content-between px-0">
                            <a class="navbar-brand navbar-dark d-flex  align-items-center text-white  ms-sm-3 col-6 col-md-4 me-6" aria-label="Bootstrap" href="./darmisa.html"></svg><img class="logo-darmisa text-dark rounded-circle" src="./image/logo_DarMisa.jpg" alt="" title="DarMisa"><span class="fw-bold mx-4 ms-5">DarMisa</span></a>
                            <a href="" class="btn btn-sm rounded-pill text-white mb-0 ms-auto d-lg-none d-block" title="Login" style="background-color:rgb(218, 37, 29); width: 80px;">Login</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="list-burger bi bi-list d-lg-none ms-4" style="color: white; cursor: pointer;"></i></button>
                            <div class="collapse navbar-collapse" id="navbarNav">   
                                <ul class="nav mb-md-0 mx-auto" style="width: 500px;">
                                    <li><a href="./home.html" class="nav-link px-2 ">Beranda</a></li>
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
            <div class="container">    
                <div class="row">
                    <div class="text-header col-lg-6 col-sm-12 col-12">
                        <p class="text-moto text-white fw-bolder text-align-sm-center" >Selamat Datang Di Website Damkar Minahasa</p>
                        <p class="text-moto2 text-align-md-center">Tetap jaga kesehatan dan selalu waspada terhadap bahaya kebakaran</p>
                        <a href="tel:+62 431 321001"> <button type="button" class="btn text-white rounded mt-4 me-2"><i class="bi bi-telephone-fill" style="color: rgb(51, 33, 117); margin-right: 10px;"></i> EMERGENCY CALL (0431) 321001</button> </a>
                    </div>
                    <div class="img col-lg-6 col-sm-12 col-12">
                        <img src="./image/logo-pemadam4.png" class="logo-pemadam"  alt="">
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- =========== Nav Baru End =========== -->

 

    <!-- =========== Box =========== -->
    <section class="box pt-3 pb-4">
        <div class="container">
            <div class="row">
                <div class="box-box z-index-2 mx-auto py-4" style=" margin-top: -50px; margin-bottom: 200px; border-radius: 25px; box-shadow: 5px 5px 20px #000000; text-shadow: 2px 2px 4px #000000; background-color: rgba(40, 22, 111, 1);" >
                    <div class="row" style="text-decoration: none;">
                        <div class="col-md-4 position-relative">
                            <div class="p-3 text-center">
                                <h1 class="text-gradient text primary">
                                    <a href="data-kebakaran.php" class="text-light" style="text-decoration: none;">
                                        <img src="./image/icon-1.jpg" class="rounded-circle" style="width: 70px;" alt="">
                                        <p class="mt-2" style="font-size: 20px; font-family: sans-serif;">Data Kebakaran</p>
                                        <p class="text-secondary" style="font-size: 14px; margin-top: 10px; font-family: sans-serif;">Data Kebakaran Di Wilayah Minahasa</p>
                                    </a>
                                </h1>
                            </div>
                        </div>
                        <div class="col-md-4 position-relative">
                            <div class="p-3 text-center">
                                <h1 class="text-gradient text primary">
                                    <a href="./galeri.php" class="text-light" style="text-decoration: none;">
                                        <img src="./image/icon-2.jpg" class="rounded-circle" style="width: 70px;" alt="">
                                        <p class="mt-2" style="font-size: 20px; font-family: sans-serif;">Gallery</p>
                                        <p class="text-secondary" style="font-size: 14px; margin-top: 10px; font-family: sans-serif;">Gallery Foto Dinas Pemadam Kebakaran Minahasa</p>
                                    </a>
                                </h1>
                            </div>
                        </div>
                        <div class="col-md-4 position-relative">
                            <div class="p-3 text-center">
                                <h1 class="text-gradient text primary">
                                    <a href="./peralatan-kebakaran.html" class="text-light" style="text-decoration: none;">
                                        <img src="./image/icon-3.jpg" class="rounded-circle" style="width: 70px;" alt="">
                                        <p class="mt-2" style="font-size: 20px; font-family: sans-serif;">Peralatan Kebakaran</p>
                                        <p class="text-secondary" style="font-size: 14px; margin-top: 10px; font-family: sans-serif;">Peralatan-peralatan yang terkait dengan Safety dan Kebakaran</p>
                                    </a>
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =========== Box End =========== -->

    <div class="float-start">
            <h1>
                <a class="" style="display: scroll; width: 60px; position: fixed; bottom: 25px; left: 25px; color: rgb(49, 203, 81); " href="https://wa.me/message/XUYOEQ6PQY7SF1" title="Whatsapp"><button class="" style="background-color: rgb(49, 203, 81); height: 65px; width: 80px; border: none; border-radius: 5px;"> <img class="bi bi-whatsapp" src="" alt="" style="color: white;"/></button></a>
            </h1>
    </div>

    <!-- background-color: rgb(49, 203, 81); -->
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



        <!-- ========== Data ========== -->

        <h5 class="data-content text-center fw-bold mt-5 mb-4" style="font-size: 24px; font-family: sans-serif;">DATA PEMADAMAN DAN PENYELAMATAN TAHUN 2022</h5>

        <?php 
            //INI CODE PHP UNTUK LOOPING BERITANYA. LAKUKAN DI TABEL2 LAINN
            $sql = "SELECT * FROM diagram_pema_peny";

            if ($result = mysqli_query($con, $sql)) {
                // Fetch one and one row
                while ($row = mysqli_fetch_row($result)) {
        ?>

        <section class="data">
        <div id="data1" class="container" style="margin-bottom: 200px;">
            <!-- <h5 class="data-content text-center fw-bold mt-5 mb-4" style="font-size: 24px; font-family: sans-serif;">JUMLAH PENGUJUNG WISATA EDUKASI</h5> -->
            <div class="row">
                <div class="graph">
                    <!-- <img src="./image/fuji-famous.jpg" class="data-img d-block mx-auto" alt=""> -->
                    <img src="./image/<?=$row['2']?>" class="data-img d-block shadow mx-auto rounded" alt="" >
                    <div class="text-center mt-3">
                        <a href="./update_dpema_peny.php?id=<?= $row[0] ?>" class="btn text-light w-25" style="background-color:rgb(51, 33, 117);">Ubah</a>
                    </div>
                </div>
            </div>
        </div>

        <?php
            }
            //mysqli_free_result($result);
        }
        ?>
        
        <!-- <div id="data2" class="container" style="margin-bottom: 200px; margin-top: 200px;">
            <h5 class="data-content text-center fw-bold mt-5 mb-4" style="font-size: 24px; font-family: sans-serif;">JUMLAH PENGUNJUNG WISATA EDUKASI BERDASARKAN JENIS KELAMIN</h5>
            <div class="row">
                <div class="graph">
                    <img src="./image/everest-famous.jpg" class="data-img d-block mx-auto" alt="">
                </div> -->


                <!-- <div class="graph d-flex mx-auto text-center justify-content-center align-items-center">
                    <div id="piechart"></div>
                    <div class="chart">
                        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

                        <script type="text/javascript">
                        // Load google charts
                        google.charts.load('current', {'packages':['corechart']});
                        google.charts.setOnLoadCallback(drawChart);

                        // Draw the chart and set the chart values
                        function drawChart() {
                        var data = google.visualization.arrayToDataTable([
                        ['Task', 'Visit per Day'],
                        ['perempuan', 8],
                        /*['Eat', 2],
                        ['TV', 4],
                        ['Gym', 2],*/
                        ['laki-laki', 10]
                        ]);

                        // Optional; add a title and set the width and height of the chart
                        var options = {/*'title':'My Average Day',*/ 'width':1050, 'height':600};

                        // Display the chart inside the <div> element with id="piechart"
                        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                        chart.draw(data, options);
                        }
                        </script>
                    </div>
                </div> -->
            </div>
        </div>

        <!-- <div id="data3" class="container" style="margin-bottom: 200px;">
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

        <div id="data5" class="container berita mx-auto" style="padding-left: 36px; padding-right: 42px;">
            <h5 class="data-content text-center fw-bold mt-5 mb-4" style="font-size: 24px; font-family: sans-serif;">BREAKING NEWS</h5>
            <div class="row">

            <?php 
                //INI CODE PHP UNTUK LOOPING BERITANYA. LAKUKAN DI TABEL2 LAINN
                $sql = "SELECT * FROM berita";

                $berita = [];
                if ($result = mysqli_query($con, $sql)) {
                    // tampilkan satu per satu
                    while ($row = mysqli_fetch_assoc($result)) {
                        $berita[] = $row;
                    }
                    mysqli_free_result($result);
                }
                
                
                if ($result = mysqli_query($con, $sql)) {
                    // Fetch one and one row
                    while ($row = mysqli_fetch_row($result)) {
            ?>

            <?php foreach ($berita as $row): ?>

                <div class="graph col-12 col-md-6 col-lg-3">
                    <a href="./berita.php"><img src="./image/<?=$row['photo_link']?>" class="img-news shadow rounded mb-3" alt=""></a>
                </div>

            <?php endforeach;?>

            <?php
                }
                //mysqli_free_result($result);
            }
            // tutup koneksi
            mysqli_close($con);
            ?>

                <!-- <div class="graph col-12 col-md-6 col-lg-3">
                    <a href="./berita.php"><img src="./image/berita-2.jpg" class="img-news shadow rounded mb-3" alt=""></a>
                </div>
                <div class="graph col-12 col-md-6 col-lg-3">
                    <a href="./berita.php"><img src="./image/berita-3.jpg" class="img-news shadow rounded mb-3" alt=""></a>
                </div>
                <div class="graph col-12 col-md-6 col-lg-3">
                    <a href="./berita.php"><img src="./image/berita-4.jpg" class="img-news shadow rounded mb-3" alt=""></a>
                </div>
                <div class="graph col-12 col-md-6 col-lg-3">
                    <a href="./berita.php"><img src="./image/berita-5.jpg" class="img-news shadow rounded mb-3" alt=""></a>
                </div>
                <div class="graph col-12 col-md-6 col-lg-3">
                    <a href="./berita.php"><img src="./image/berita-6.jpg" class="img-news shadow rounded mb-3" alt=""></a>
                </div>
                <div class="graph col-12 col-md-6 col-lg-3">
                    <a href="./berita.php"><img src="./image/berita-7.jpg" class="img-news rounded mb-3" alt=""></a>
                </div>
                <div class="graph col-12 col-md-6 col-lg-3">
                    <a href="./berita.php"><img src="./image/berita-8.jpg" class="img-news rounded mb-3" alt=""></a>
                </div> -->
            </div>
        </div>
        </section>
        <!-- ========== Data End ========== -->

        
        <!-- ========== Link Terkait ========== -->
        <section class="link-terkait">
            <div class="container mt-5">
                <div class="row">
                    <p class="text-center text-white fw-bold mt-5" style="font-size: 32px; font-family: sans-serif;">LINK TERKAIT</p>
                </div>
                <div class="row">
                    <div class="logo-link text-center col-4 col-md-4">
                        <a href="https://minahasa.go.id/situs/"><img src="./image/logo-link1.png" class="logo" alt=""></a>
                    </div>
                    <div class="logo-link text-center col-4 col-md-4">
                        <a href="https://bnpb.go.id/berita/bpbd-kota-manado"><img src="./image/logo-link2.png" class="logo" alt=""></a>
                    </div>
                    <div class="logo-link text-center col-4 col-md-4">
                        <a href="https://sippn.menpan.go.id/pelayanan-publik/wilayah/pemerintah-provinsi-sulawesi-utara/pemerintah-kabupaten-minahasa/rumah-sakit-umum-daerah-dr-sam-ratulangi-tondano"><img src="./image/logo-link3.png" class="logo" alt=""></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- ========== Link Terkait End ========== -->



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
                            <li class="ms-2"><a class="text-muted mb-1" href="https://www.youtube.com/@damkarminahasa6420"><i class="bi bi-youtube" title="Youtube"></i></a></li>
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