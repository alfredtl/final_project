<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./dist/css/darmisa.css">
    <title>DarMisa</title>
    <!-- icon bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="/docs/5.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>

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
            <a class="navbar-brand navbar-dark d-flex  align-items-center text-white  ms-sm-3 col-6 col-md-4 me-6" aria-label="Bootstrap" href="#"></svg><img class="logo-darmisa text-dark rounded-circle d-flex mx-auto" src="./image/logo_DarMisa.jpg" alt="" title="DarMisa"><span class="fw-bold" style="margin-left: 70px; margin-right: 70px;">DarMisa</span></a>
            <!--<a href="" class="btn-small btn btn-sm rounded-pill text-white mb-0 ms-auto me-2" title="Login" style="background-color:rgb(218, 37, 29); width: 80px;">Login</a>-->
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
                <button type="button" class="btn text-white rounded-pill w-50 me-0" title="Login" style="background-color:rgb(218, 37, 29);">Login</button>
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
                            <ul class="nav mb-md-0 mx-auto" style="width: 500px; font-size: 18px;">
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
                </div>   
            </div> -->
        </div>
    </header>
    <!-- =========== Nav Baru End =========== -->

    <!-- =========== Profil SEAL =========== -->
    <section class="pt-3 pb-4" style="font-family: sans-serif;">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 text-light mx-auto py-4" style="margin-bottom: 100px; border-radius: 25px; background-color: rgba(255, 185, 1, 1);" >
                    <h1 class="text-center text-dark fw-bold">Social Economic Accelerator Lab</h1>
                    <p class="text-center text-dark fw-bold fs-2">(SEAL)</p>
                        <div class="container col-10">
                            <p class="text-seal text-dark lh-lg">Singhasari SEZ-AWS Economic Acceleratol Lab (SEAL) adalah bagian dari kawasan 
                                ekonomi khusus (KEK) singhasari. KEK digital pertama di Indonesia yang berlokasi 
                                di jawa timue, Indonesia. SEAL adalah inisiatif pengembangan bisnis strategis 
                                antara singhasari special economic zone (singhasari SEZ) dan Amazon web wervices. 
                                Inisiatif ini didukung oleh pemerintah indonesia, KEK singhasari sebagai KEK pertama 
                                di bidang teknologi digital, didukung oleh AWS, memiliki kesamaan visi untuk indonesia, 
                                yaitu mempercepat adopsi teknologi.</p>
                        </div>

                    <!-- foto baris-1 -->
                    <h1 class="text-title text-dark fw-bold fs-4 mt-5" >Steering Commite</h1>
                    <div class="row" style="text-decoration: none;">
                        <div class="col-md-4 position-relative">
                            <div class="p-3 text-center">
                                <h1 class="text-gradient text primary">
                                    <a href="#" class="text-dark" style="text-decoration: none;">
                                        <img src="./image/pp-seal1.jpg" class="rounded" style="width: 140px; font-size: 10px;" alt="">
                                        <p class="mt-2" style="font-size: 20px; font-family: sans-serif;">Dr.Ir. Arief Yahya, M.Sc</p>
                                        <p class="text-secondary" style="font-size: 14px; margin-top: 10px; font-family: sans-serif;">Cairman SEAL</p>
                                    </a>
                                </h1>
                            </div>
                        </div>
                        <div class="col-md-4 position-relative">
                            <div class="p-3 text-center">
                                <h1 class="text-gradient text primary">
                                    <a href="#" class="text-dark" style="text-decoration: none;">
                                        <img src="./image/pp-seal2.jpg" class="rounded" style="width: 140px;" alt="">
                                        <p class="mt-2" style="font-size: 20px; font-family: sans-serif;">Dr. Priyantono Rudito</p>
                                        <p class="text-secondary" style="font-size: 14px; margin-top: 10px; font-family: sans-serif;">Chairman SEAL</p>
                                    </a>
                                </h1>
                            </div>
                        </div>
                        <div class="col-md-4 position-relative">
                            <div class="p-3 text-center">
                                <h1 class="text-gradient text primary">
                                    <a href="#" class="text-dark" style="text-decoration: none;">
                                        <img src="./image/pp-seal3.jpg" class="rounded" style="width: 140px;" alt="">
                                        <p class="mt-2" style="font-size: 20px; font-family: sans-serif;">KRAT David Santoso KR</p>
                                        <p class="text-secondary" style="font-size: 14px; margin-top: 10px; font-family: sans-serif;">Chairman SEAL</p>
                                    </a>
                                </h1>
                            </div>
                        </div>
                    </div>

                    <!-- foto baris-2 -->
                    <div class="row" style="text-decoration: none;">
                        <div class="col-md-6 position-relative">
                            <div class="p-3 text-center">
                                <h1 class="text-gradient text primary">
                                    <a href="#" class="text-dark" style="text-decoration: none;">
                                        <img src="./image/pp-seal4.jpg" class="rounded" style="width: 140px; font-size: 10px;" alt="">
                                        <p class="mt-2" style="font-size: 20px; font-family: sans-serif;">Amar Alpabet</p>
                                        <p class="text-secondary" style="font-size: 14px; margin-top: 10px; font-family: sans-serif;">Lead Startup</p>
                                    </a>
                                </h1>
                            </div>
                        </div>
                        <div class="col-md-6 position-relative">
                            <div class="p-3 text-center">
                                <h1 class="text-gradient text primary">
                                    <a href="#" class="text-dark" style="text-decoration: none;">
                                        <img src="./image/pp-seal5.jpg" class="rounded" style="width: 140px;" alt="">
                                        <p class="mt-2" style="font-size: 20px; font-family: sans-serif;">Nia Limanto</p>
                                        <p class="text-secondary" style="font-size: 14px; margin-top: 10px; font-family: sans-serif;">Project Manager</p>
                                    </a>
                                </h1>
                            </div>
                        </div>
                    </div>

                    <!-- logo seal -->
                    <div class="container col-10">
                        <div class="card w-100 rounded" style="height: 20rem;">
                            <img src="./image/logo-seal.jpeg" class="card-img-top rounded" style="object-fit: cover; height: 300px;" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =========== Profil SEAL End =========== -->


    <!-- =========== Mentor =========== -->
    <div class="container col-10" style="font-family: sans-serif;">
        <div class="row">
            <div class="position-relative">
                <a class="" href=""><img class="w-100" src="./image/logos.jpg" alt=""></a>
            </div>
        </div>
        <h1 class="text-center fw-bold fs-4 mt-5 mb-5">Mentor Manado</h1>
        <section class="pt-3 pb-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 text-light mx-auto py-4" style="margin-bottom: 50px; border-radius: 25px; background-color: rgba(40, 22, 111, 1);" >
                        <div class="row" style="text-decoration: none;">
                            <div class="col-md-6 position-relative">
                                <div class="p-3 text-center">
                                    <h1 class="text-gradient text primary">
                                        <a href="#" class="text-light" style="text-decoration: none;">
                                            <img src="./image/pp-mentor1.jpg" class="rounded" style="width: 140px;" alt="">
                                            <p class="mt-2" style="font-size: 20px; font-family: sans-serif;">Peter J Kambey</p>
                                            <p class="text-secondary" style="font-size: 14px; margin-top: 10px; font-family: sans-serif;">Mentor</p>
                                        </a>
                                    </h1>
                                </div>
                            </div>
                            <div class="col-md-6 position-relative">
                                <div class="p-3 text-center">
                                    <h1 class="text-gradient text primary">
                                        <a href="#" class="text-light" style="text-decoration: none;">
                                            <img src="./image/pp-mentor2.jpg" class="rounded" style="width: 140px;" alt="">
                                            <p class="mt-2" style="font-size: 20px; font-family: sans-serif;">Yudi Anantha</p>
                                            <p class="text-secondary" style="font-size: 14px; margin-top: 10px; font-family: sans-serif;">Asisten Mentor</p>
                                        </a>
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
    </div>
    <!-- =========== Mentor End =========== -->


    <!-- =========== Anggota =========== -->
    <div class="container col-10" style="font-family: sans-serif;">
        <div class="row">
            <div class="position-relative">
                <a class="" href=""><img class="w-100" src="./image/logos.jpg" alt=""></a>
            </div>
        </div>
        <h1 class="text-center fw-bold fs-4 mt-5">Anggota Kelompok</h1>
        <p class="text-center fw-bold mb-5">DarMisa (Tondano)</p>
        <section class="pt-3 pb-4">
            <div class="container">
                <div class="row" style="font-family:Verdana, Geneva, Tahoma, sans-serif;">

                    <!-- Aldy -->
                    <div class="box col-lg-8 text-light mx-auto py-4" style="margin-bottom: 50px; border-radius: 25px; background-image: url(./image/bg-aldy.jpg); object-fit: cover; background-repeat:no-repeat;" >
                        <div class="row" style="text-decoration: none;">
                            <div class="col-md-4 position-relative">
                                <div class="p-3 text-center">
                                    <a href="#" class="text-light" style="text-decoration: none;">
                                        <img src="./image/pp-aldy.jpg" class="rounded-circle" style="width: 230px;" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-8 position-relative">
                                <div class="box-content text-light mx-auto" style="border-radius: 25px;  background-repeat: no-repeat;">
                                    <div class="p-3 fw-bold">                                    
                                        <ul class="list-unstyled lh-lg">
                                            <li>Aldy Paskah Sekeon</li>
                                            <li>No Wa. 085823543297</li>
                                            <li>Gmail : asekeon07@gmail.com</li>
                                            <li>Mahasiswa di Universitas Negeri Manado</li>
                                            <li>Keahlian : UI/UX Designer</li>
                                            <li>Follow My Sosial Media </li>
                                        </ul>
                                        <ul class="nav list-unstyled">
                                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"></a></li>
                                            <li class="me-2"><a class="text-muted mb-2" href="#"><i class="bi bi-facebook" style="color: whitesmoke;" title="facebook"></i></a></li>
                                            <li class="me-2"><a class="text-muted mb-1" href="#"><i class="bi bi-whatsapp" style="color: whitesmoke;" title="Whatsapp"></i></a></li>
                                            <li class="me-2"><a class="text-muted mb-1" href="#"><i class="bi bi-instagram" style="color: whitesmoke;" title="instagram"></i></a></li>
                                            <li class="me-2"><a class="text-muted mb-1" href="#"><i class="bi bi-youtube" style="color: whitesmoke;" title="Youtube"></i></a></li>
                                            <li class="me-2"><a class="text-muted mb-1" href="#"><i class="bi bi-telegram" style="color: whitesmoke;" title="Telegram"></i></a></li>
                                            <li class="me-2"><a class="text-muted mb-1" href="#"><i class="bi bi-tiktok" style="color: whitesmoke;" title="Tiktok"></i></a></li>
                                            <li class="me-2"><a class="text-muted mb-1" href="#"><i class="bi bi-linkedin" style="color: whitesmoke;" title="LinkedIn"></i></a></li>
                                            <li class="me-2"><a class="text-muted mb-1" href="#"><i class="bi bi-github" style="color: whitesmoke;" title="Github"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Alfred -->
                    <div class="box col-lg-8 text-light mx-auto py-4" style="margin-bottom: 50px; border-radius: 25px; background-image: url(./image/bg-alfred.jpg); object-fit: cover; background-repeat:no-repeat;" >
                        <div class="row" style="text-decoration: none;">
                            <div class="col-md-4 position-relative">
                                <div class="p-3 text-center">
                                    <a href="#" class="text-light" style="text-decoration: none;">
                                        <img src="./image/pp-alfred.jpg" class="rounded-circle" style="width: 230px;" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-8 position-relative">
                                <div class="box-content text-light mx-auto" style="border-radius: 25px; background-repeat: no-repeat;">
                                    <div class="p-3 fw-bold">                                    
                                        <ul class="list-unstyled lh-lg">
                                            <li>Alfred Tenda Lumataw</li>
                                            <li>No Wa. 081332768841</li>
                                            <li>Gmail : alfrdt87@gmail.com</li>
                                            <li>Mahasiswa di Universitas Negeri Manado</li>
                                            <li>Keahlian : Front-End</li>
                                            <li>Follow My Sosial Media </li>
                                        </ul>
                                        <ul class="nav list-unstyled">
                                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"></a></li>
                                            <li class="me-2"><a class="text-muted mb-2" href="#"><i class="bi bi-facebook" style="color: whitesmoke;" title="facebook"></i></a></li>
                                            <li class="me-2"><a class="text-muted mb-1" href="#"><i class="bi bi-whatsapp" style="color: whitesmoke;" title="Whatsapp"></i></a></li>
                                            <li class="me-2"><a class="text-muted mb-1" href="#"><i class="bi bi-instagram" style="color: whitesmoke;" title="instagram"></i></a></li>
                                            <li class="me-2"><a class="text-muted mb-1" href="#"><i class="bi bi-youtube" style="color: whitesmoke;" title="Youtube"></i></a></li>
                                            <li class="me-2"><a class="text-muted mb-1" href="#"><i class="bi bi-telegram" style="color: whitesmoke;" title="Telegram"></i></a></li>
                                            <li class="me-2"><a class="text-muted mb-1" href="#"><i class="bi bi-tiktok" style="color: whitesmoke;" title="Tiktok"></i></a></li>
                                            <li class="me-2"><a class="text-muted mb-1" href="#"><i class="bi bi-linkedin" style="color: whitesmoke;" title="LinkedIn"></i></a></li>
                                            <li class="me-2"><a class="text-muted mb-1" href="#"><i class="bi bi-github" style="color: whitesmoke;" title="Github"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Christian -->
                    <div class="box col-lg-8 text-light mx-auto py-4" style="margin-bottom: 50px; border-radius: 25px; background-image: url(./image/bg-christian.jpg); object-fit: cover; background-repeat: no-repeat;">
                        <div class="row" style="text-decoration: none;">
                            <div class="col-md-4 position-relative">
                                <div class="p-3 text-center">
                                    <a href="#" class="text-light" style="text-decoration: none;">
                                        <img src="./image/pp-christian.jpg" class="rounded-circle" style="width: 230px;" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="box col-md-8 position-relative">
                                <div class="box-content-ch text-light mx-auto" style="border-radius: 25px; background-repeat: no-repeat;">
                                    <div class="p-3 fw-bold">                                    
                                        <ul class="list-unstyled lh-lg">
                                            <li>Christian Y. P Pattiruhu</li>
                                            <li>No Wa. 0895802597831</li>
                                            <li>Gmail : fancenican12@gmail.com</li>
                                            <li>Mahasiswa di Universitas Negeri Manado</li>
                                            <li>Keahlian : UI/UX Designer</li>
                                            <li>Follow My Sosial Media </li>
                                        </ul>
                                        <ul class="nav list-unstyled">
                                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"></a></li>
                                            <li class="me-2"><a class="text-muted mb-2" href="#"><i class="bi bi-facebook" style="color: whitesmoke;" title="facebook"></i></a></li>
                                            <li class="me-2"><a class="text-muted mb-1" href="#"><i class="bi bi-whatsapp" style="color: whitesmoke;" title="Whatsapp"></i></a></li>
                                            <li class="me-2"><a class="text-muted mb-1" href="#"><i class="bi bi-instagram" style="color: whitesmoke;" title="instagram"></i></a></li>
                                            <li class="me-2"><a class="text-muted mb-1" href="#"><i class="bi bi-youtube" style="color: whitesmoke;" title="Youtube"></i></a></li>
                                            <li class="me-2"><a class="text-muted mb-1" href="#"><i class="bi bi-telegram" style="color: whitesmoke;" title="Telegram"></i></a></li>
                                            <li class="me-2"><a class="text-muted mb-1" href="#"><i class="bi bi-tiktok" style="color: whitesmoke;" title="Tiktok"></i></a></li>
                                            <li class="me-2"><a class="text-muted mb-1" href="#"><i class="bi bi-linkedin" style="color: whitesmoke;" title="LinkedIn"></i></a></li>
                                            <li class="me-2"><a class="text-muted mb-1" href="#"><i class="bi bi-github" style="color: whitesmoke;" title="Github"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Enjelina -->
                    <div class="box col-lg-8 text-light mx-auto py-4" style="margin-bottom: 50px; border-radius: 25px; background-image: url(./image/bg-Enjelina.jpg); object-fit: cover; background-repeat: no-repeat;">
                        <div class="row" style="text-decoration: none;">
                            <div class="col-md-4 position-relative">
                                <div class="p-3 text-center">
                                    <a href="#" class="text-light" style="text-decoration: none;">
                                        <img src="./image/pp-Enjelina.jpg" class="rounded-circle" style="width: 230px;" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="box col-md-8 position-relative">
                                <div class="box-content text-light mx-auto" style="border-radius: 25px; background-repeat: no-repeat;">
                                    <div class="p-3 fw-bold">                                    
                                        <ul class="list-unstyled lh-lg">
                                            <li>Enjelina</li>
                                            <li>No Wa. 082154711942</li>
                                            <li>Gmail : enjelina578@gmail.com</li>
                                            <li>Mahasiswa di Universitas Negeri Manado</li>
                                            <li>Keahlian : Front-End</li>
                                            <li>Follow My Sosial Media </li>
                                        </ul>
                                        <ul class="nav list-unstyled">
                                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"></a></li>
                                            <li class="me-2"><a class="text-muted mb-2" href="#"><i class="bi bi-facebook" style="color: whitesmoke;" title="facebook"></i></a></li>
                                            <li class="me-2"><a class="text-muted mb-1" href="#"><i class="bi bi-whatsapp" style="color: whitesmoke;" title="Whatsapp"></i></a></li>
                                            <li class="me-2"><a class="text-muted mb-1" href="#"><i class="bi bi-instagram" style="color: whitesmoke;" title="instagram"></i></a></li>
                                            <li class="me-2"><a class="text-muted mb-1" href="#"><i class="bi bi-youtube" style="color: whitesmoke;" title="Youtube"></i></a></li>
                                            <li class="me-2"><a class="text-muted mb-1" href="#"><i class="bi bi-telegram" style="color: whitesmoke;" title="Telegram"></i></a></li>
                                            <li class="me-2"><a class="text-muted mb-1" href="#"><i class="bi bi-tiktok" style="color: whitesmoke;" title="Tiktok"></i></a></li>
                                            <li class="me-2"><a class="text-muted mb-1" href="#"><i class="bi bi-linkedin" style="color: whitesmoke;" title="LinkedIn"></i></a></li>
                                            <li class="me-2"><a class="text-muted mb-1" href="#"><i class="bi bi-github" style="color: whitesmoke;" title="Github"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Felitia -->
                    <div class="box col-lg-8 mx-auto py-4" style="margin-bottom: 50px; border-radius: 25px; background-image: url(./image/bg-felitia.jpg); object-fit: cover; background-repeat: no-repeat; ">
                        <div class="row" style="text-decoration: none;">
                            <div class="col-md-4 position-relative">
                                <div class="p-3 text-center">
                                    <a href="#" class="text-light" style="text-decoration: none;">
                                        <img src="./image/pp-felitia.jpg" class="rounded-circle" style="width: 230px;" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="box col-md-8 position-relative">
                                <div class="box-content text-light mx-auto" style="border-radius: 25px; background-repeat: no-repeat;">
                                    <div class="p-3 fw-bold">                                    
                                        <ul class="list-unstyled lh-lg">
                                            <li>Felitia Mantik</li>
                                            <li>No Wa. 081524432399</li>
                                            <li>Gmail : felitiamantik12@gmail.com</li>
                                            <li>Mahasiswa di Universitas Negeri Manado</li>
                                            <li>Keahlian : Bisnis</li>
                                            <li>Follow My Sosial Media </li>
                                        </ul>
                                        <ul class="nav list-unstyled">
                                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"></a></li>
                                            <li class="me-2"><a class="text-muted mb-2" href="#"><i class="bi bi-facebook" style="color: whitesmoke;" title="facebook"></i></a></li>
                                            <li class="me-2"><a class="text-muted mb-1" href="#"><i class="bi bi-whatsapp" style="color: whitesmoke;" title="Whatsapp"></i></a></li>
                                            <li class="me-2"><a class="text-muted mb-1" href="#"><i class="bi bi-instagram" style="color: whitesmoke;" title="instagram"></i></a></li>
                                            <li class="me-2"><a class="text-muted mb-1" href="#"><i class="bi bi-youtube" style="color: whitesmoke;" title="Youtube"></i></a></li>
                                            <li class="me-2"><a class="text-muted mb-1" href="#"><i class="bi bi-telegram" style="color: whitesmoke;" title="Telegram"></i></a></li>
                                            <li class="me-2"><a class="text-muted mb-1" href="#"><i class="bi bi-tiktok" style="color: whitesmoke;" title="Tiktok"></i></a></li>
                                            <li class="me-2"><a class="text-muted mb-1" href="#"><i class="bi bi-linkedin" style="color: whitesmoke;" title="LinkedIn"></i></a></li>
                                            <li class="me-2"><a class="text-muted mb-1" href="#"><i class="bi bi-github" style="color: whitesmoke;" title="Github"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Indi -->
                    <div class="box col-lg-8 text-light mx-auto py-4" style="margin-bottom: 50px; border-radius: 25px; background-image: url(./image/bg-indi.jpg); object-fit: cover; background-repeat: no-repeat;">
                        <div class="row" style="text-decoration: none;">
                            <div class="col-md-4 position-relative">
                                <div class="p-3 text-center">
                                    <a href="#" class="text-light" style="text-decoration: none;">
                                        <img src="./image/pp-indi.jpg" class="rounded-circle" style="width: 230px;" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="box col-md-8 position-relative">
                                <div class="box-content text-light mx-auto" style="border-radius: 25px; background-repeat: no-repeat;">
                                    <div class="p-3 fw-bold">                                    
                                        <ul class="list-unstyled lh-lg">
                                            <li>Indi Rahayu Ningsi</li>
                                            <li>No Wa. 082259458586</li>
                                            <li>Gmail : indiningsi9@gmail.com</li>
                                            <li>Mahasiswa di Universitas Negeri Manado</li>
                                            <li>Keahlian : UI/UX Designer</li>
                                            <li>Follow My Sosial Media </li>
                                        </ul>
                                        <ul class="nav list-unstyled">
                                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"></a></li>
                                            <li class="me-2"><a class="text-muted mb-2" href="#"><i class="bi bi-facebook" style="color: whitesmoke;" title="facebook"></i></a></li>
                                            <li class="me-2"><a class="text-muted mb-1" href="#"><i class="bi bi-whatsapp" style="color: whitesmoke;" title="Whatsapp"></i></a></li>
                                            <li class="me-2"><a class="text-muted mb-1" href="#"><i class="bi bi-instagram" style="color: whitesmoke;" title="instagram"></i></a></li>
                                            <li class="me-2"><a class="text-muted mb-1" href="#"><i class="bi bi-youtube" style="color: whitesmoke;" title="Youtube"></i></a></li>
                                            <li class="me-2"><a class="text-muted mb-1" href="#"><i class="bi bi-telegram" style="color: whitesmoke;" title="Telegram"></i></a></li>
                                            <li class="me-2"><a class="text-muted mb-1" href="#"><i class="bi bi-tiktok" style="color: whitesmoke;" title="Tiktok"></i></a></li>
                                            <li class="me-2"><a class="text-muted mb-1" href="#"><i class="bi bi-linkedin" style="color: whitesmoke;" title="LinkedIn"></i></a></li>
                                            <li class="me-2"><a class="text-muted mb-1" href="#"><i class="bi bi-github" style="color: whitesmoke;" title="Github"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Jessica -->
                    <div class="box col-lg-8 text-light mx-auto py-4" style="margin-bottom: 50px; border-radius: 25px; background-image: url(./image/bg-jessica.jpg); object-fit: cover; background-repeat: no-repeat;">
                        <div class="row" style="text-decoration: none;">
                            <div class="col-md-4 position-relative">
                                <div class="p-3 text-center">
                                    <a href="#" class="text-light" style="text-decoration: none;">
                                        <img src="./image/pp-jessica.jpg" class="rounded-circle" style="width: 230px;" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="box col-md-8 position-relative">
                                <div class="box-content text-light mx-auto" style="border-radius: 25px; background-repeat: no-repeat;">
                                    <div class="p-3 fw-bold">                                    
                                        <ul class="list-unstyled lh-lg">
                                            <li>Jessica Daniel Joni</li>
                                            <li>No Wa. 085342026526</li>
                                            <li>Gmail : jessicadj1212@gmail.com</li>
                                            <li>Mahasiswa di Universitas Negeri Manado</li>
                                            <li>Keahlian : Front-End</li>
                                            <li>Follow My Sosial Media </li>
                                        </ul>
                                        <ul class="nav list-unstyled">
                                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"></a></li>
                                            <li class="me-2"><a class="text-muted mb-2" href="#"><i class="bi bi-facebook" style="color: whitesmoke;" title="facebook"></i></a></li>
                                            <li class="me-2"><a class="text-muted mb-1" href="#"><i class="bi bi-whatsapp" style="color: whitesmoke;" title="Whatsapp"></i></a></li>
                                            <li class="me-2"><a class="text-muted mb-1" href="#"><i class="bi bi-instagram" style="color: whitesmoke;" title="instagram"></i></a></li>
                                            <li class="me-2"><a class="text-muted mb-1" href="#"><i class="bi bi-youtube" style="color: whitesmoke;" title="Youtube"></i></a></li>
                                            <li class="me-2"><a class="text-muted mb-1" href="#"><i class="bi bi-telegram" style="color: whitesmoke;" title="Telegram"></i></a></li>
                                            <li class="me-2"><a class="text-muted mb-1" href="#"><i class="bi bi-tiktok" style="color: whitesmoke;" title="Tiktok"></i></a></li>
                                            <li class="me-2"><a class="text-muted mb-1" href="#"><i class="bi bi-linkedin" style="color: whitesmoke;" title="LinkedIn"></i></a></li>
                                            <li class="me-2"><a class="text-muted mb-1" href="#"><i class="bi bi-github" style="color: whitesmoke;" title="Github"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Stevren -->
                    <div class="box col-lg-8 text-light mx-auto py-4" style="margin-bottom: 50px; border-radius: 25px; background-image: url(./image/bg-stevren.jpg); object-fit: cover; background-repeat: no-repeat;">
                        <div class="row" style="text-decoration: none;">
                            <div class="col-md-4 position-relative">
                                <div class="p-3 text-center">
                                    <a href="#" class="text-light" style="text-decoration: none;">
                                        <img src="./image/pp-stevren.jpg" class="rounded-circle" style="width: 230px;" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="box col-md-8 position-relative">
                                <div class="box-content-st text-light mx-auto" style="border-radius: 25px; background-repeat: no-repeat;">
                                    <div class="p-3 fw-bold" style="color: rgba(82, 26, 33, 1);">                                    
                                        <ul class="list-unstyled lh-lg">
                                            <li>Stevren Christian Emor</li>
                                            <li>No Wa. 089529967281</li>
                                            <li>Gmail : stevai1112@gmail.com</li>
                                            <li>Mahasiswa di Universitas Negeri Manado</li>
                                            <li>Keahlian : UI/UX Designer</li>
                                            <li>Follow My Sosial Media </li>
                                        </ul>
                                        <ul class="nav list-unstyled">
                                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"></a></li>
                                            <li class="me-2"><a class="text-muted mb-2" href="#"><i class="bi bi-facebook" style="color: rgba(82, 26, 33, 1);" title="facebook"></i></a></li>
                                            <li class="me-2"><a class="text-muted mb-1" href="#"><i class="bi bi-whatsapp" style="color: rgba(82, 26, 33, 1);" title="Whatsapp"></i></a></li>
                                            <li class="me-2"><a class="text-muted mb-1" href="#"><i class="bi bi-instagram" style="color: rgba(82, 26, 33, 1);" title="instagram"></i></a></li>
                                            <li class="me-2"><a class="text-muted mb-1" href="#"><i class="bi bi-youtube" style="color: rgba(82, 26, 33, 1);" title="Youtube"></i></a></li>
                                            <li class="me-2"><a class="text-muted mb-1" href="#"><i class="bi bi-telegram" style="color: rgba(82, 26, 33, 1);" title="Telegram"></i></a></li>
                                            <li class="me-2"><a class="text-muted mb-1" href="#"><i class="bi bi-tiktok" style="color: rgba(82, 26, 33, 1);" title="Tiktok"></i></a></li>
                                            <li class="me-2"><a class="text-muted mb-1" href="#"><i class="bi bi-linkedin" style="color: rgba(82, 26, 33, 1);" title="LinkedIn"></i></a></li>
                                            <li class="me-2"><a class="text-muted mb-1" href="#"><i class="bi bi-github" style="color: rgba(82, 26, 33, 1);" title="Github"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
    </div>
    <!-- =========== Anggota End =========== -->



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