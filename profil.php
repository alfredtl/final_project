<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./dist/css/profil.css">
    <title>Profil</title>
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
    <nav class="navbar navbar-expand-lg shadow-sm sticky-top" style="background-color:rgb(51, 33, 117);">
        <div class="container justify-content-between">
            <a class="navbar-brand navbar-dark d-flex  align-items-center text-white  ms-sm-3 col-6 col-md-4 me-6" aria-label="Bootstrap" href="./darmisa.html"></svg><img class="logo-darmisa text-dark rounded-circle" src="./image/logo_DarMisa.jpg" alt="" title="DarMisa"><span class="fw-bold" style="margin-left: 80px; margin-right: 80px;">DarMisa</span></a>
            
            <!-- <a href="./login.html" class="btn-small btn btn-sm rounded-pill text-white mb-0 ms-auto me-2" title="Login" style="background-color:rgb(218, 37, 29); width: 80px;">Login</a> -->
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="list-burger bi bi-list d-lg-none ms-0 text-end" style="color: white; cursor: pointer;"></i></button>
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
            <!-- <div class="btn-login col-md-2 col-lg-2 text-end">
                <a class="w-50" href="./login.html"><button type="button" class="btn text-white rounded-pill me-2" title="Login" style="background-color:rgb(218, 37, 29);">Login</button></a> 
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
                                <li><a href="./index.html" class="nav-link px-2" >Beranda</a></li>
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

    <!-- =========== Visi Misi =========== -->
    <section class="pt-3 pb-4" style="font-family: sans-serif;">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 text-light mx-auto py-4" style="margin-bottom: 100px; border-radius: 25px; background-color: rgb(51, 33, 117);" >
                    <h1 class="text-center text-light fw-bold" style="margin-bottom: 80px;">VISI MISI</h1>
                    <div class="container col-10" style="margin-bottom: 100px;">
                        <h1 class="text-center text-light fw-bold">VISI</h1>
                        <p class="text-seal text-center text-light lh-lg mb-5">Dinas Pemadam Kebakaran Kabupaten Minahasa</p>
                        <p class="text-seal text-center text-light lh-lg">"Terciptanya Aparatur Penanggulangan Kebakaran dan Rescue Yang Handal, Beretika dan Profesional Dalam Memajukan Kabupaten Minahasa"</p>
                    </div>
                    <div class="container col-10 mb-5 ">
                        <h1 class="text-center text-light fw-bold">MISI</h1>
                        <p class="text-seal text-center text-light lh-lg mb-5">Dinas Pemadam Kebakaran Kabupaten Minahasa</p>
                        <p class="text-seal text-center text-light lh-lg">
                            <ul class="text-center mx-auto">
                                <li>Membangun sistem penanggulangan kebakaran dan rescue yang handal, terencana, terpadu, terkoordinasi, dan menyeluruh.</li>
                                <li>Meningkatkan kualitas sumber daya aparatur dalam penanggulangan kebakaran.</li>
                                <li>Menciptakan kondisi yang aman/melindungi masyarakat melalui pengurangan risiko bencana kebakaran.</li>
                            </ul>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =========== Visi Misi End =========== -->


    <!-- =========== Sejarah =========== -->
    <section class="pt-3 pb-4" style="font-family: sans-serif;">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 text-light mx-auto py-4" style="margin-bottom: 100px; border-radius: 25px; background-color: rgb(218, 37, 29);" >
                    <h1 class="text-center text-light fw-bold" style="margin-bottom: 80px;">SEJARAH</h1>
                    <div class="container col-10" style="margin-bottom: 100px;">
                        <p class="text-sejarah">Terbitnya Peraturan Pemerintah Nomor 18 tahun 2016 tentang Perangkat Daerah yang ditindaklanjuti dengan keluarnya Peraturan Daerah
                            Kabupaten Minahasa Nomor 4 Tahun 2016  tentang Pembentukan dan Susunan Perangkat Daerah Kabupaten Minahasa berdampak positif bagilayanan publik. Peningkatan status kelembagaan dari salah satu seksi di Bagian Perlengkapan Setda Kabupaten Minahasa menjadi suatu Dinas merupakan antisipasi positif Pemerintah 
                            Kabupaten Minahasa dalam menyediakan sebuah pelayanan prima bagi warganya, khususnya di bidang layanan terhadap bahaya kebakaran yang meliputi pencegahan,
                            penanggulangan kebakaran, dan penyelamatan bencana lainnya. </p>
                            <br>
                        <p class="text-sejarah">Renstra Dinas Pemadam Kebakaran mengacu pada Peraturan Pemerintah Nomor 8 Tahun 2008 tentang tahapan, tata cara penyusunan pengendalian dan evaluasi pelaksanaan rencana pembangunan daerah,
                            perencanaan pembangunan daerah merupakan satu kesatuan dalam sistem perencanaan pembangunan nasional yang dilakukan pemerintah
                            daerah bersama para pemangku kepentingan berdasarkan peran dan kewenangannya, berdasarkan kondisi dan potensi yang dimiliki masingmasing daerah sesuai dinamika pembangunan.</p>
                            <br>
                        <p class="text-sejarah">Perencanaan pembangunan daerah merupakan bagian yang tidak terpisahkan dari sistem perencanaan pembangunan nasional yang diatur dalam Undang-undang Nomor 25 Tahun 2004 tentang Sistem Perencanaan
                            Pembangunan Nasional dan Undang-undang Nomor 23 tahun 2014 tentang Pemerintahan Daerah, yang mengamanatkan kepada perangkat daerah untuk menyusun Rencana Strategis (RENSTRA) dengan koordinasi
                            Badan Perencanaan Penelitian Pembangunan Daerah. Terkait dengan penyusunan Renstra perangkat daerah, Peraturan Menteri Dalam Negeri Nomor 54 Tahun 2010 telah mengatur bahwa RPJMD yang telah
                            ditetapkan dengan peraturan daerah harus menjadi pedoman dalam penyusunan Renstra Perangkat Daerah. Visi, misi, tujuan, strategi dan kebijakan yang tertuang didalam Renstra dirumuskan dalam rangka mewujudkan pencapaian sasaran program yang ditetapkan dalam RPJMD. </p>
                            <br>
                        <p class="text-sejarah">Berdasarkan hal tersebut, maka Dinas Pemadam Kebakaran Kabupaten Minahasa menyusun Rencana Strategis Tahun 2018-2023 yang merupakan dokumen perencanaan lima tahunan yang memuat tujuan, sasaran,
                            strategi, kebijakan, program dan kegiatan pembangunan di bidang Pemadam Kebakaran dan Penyelamatan lainnya berdasarkan kondisi dan potensi daerah di Kabupaten Minahasa.</p>
                            <br>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =========== Sejarah End =========== -->


    <!-- =========== Struktur Organisasi =========== -->
    <section class="pt-3 pb-4" style="font-family: sans-serif;">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 text-light mx-auto py-4" style="margin-bottom: 100px; border-radius: 25px; background-color: rgb(51, 33, 117);" >
                    <h1 class="text-center text-light fw-bold" style="margin-bottom: 80px;">Struktur Organisasi</h1>
                    <div class="container mx-auto col-10" style="margin-bottom: 100px;">
                        <img class="struktur" src="./image/struktur-organisasi1.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- =========== Struktur Organisasi End =========== -->



    <!-- =========== Tugas dan Fungsi =========== -->
    <section class="pt-3 pb-4" style="font-family: sans-serif;">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 text-light mx-auto py-4" style="margin-bottom: 100px; border-radius: 25px; background-color: rgb(218, 37, 29);" >
                    <h1 class="text-center text-light fw-bold" style="margin-bottom: 80px;">Tugas, Fungsi dan Struktur Organisasi Dinas Pemadam Kebakaran</h1>
                    <div class="container col-10" style="margin-bottom: 100px;"> 

                        <p class="text-tf mb-3">Dinas Pemadam Kebakaran mempunyai tugas membantu Walikota dalam melaksanakan urusan pemerintahan bidang ketenteraman dan ketertiban umum sub urusan kebakaran yang menjadi kewenangan daerah dan tugas pembantuan yang ditugaskan kepada daerah.</p>

                        <p class="text-tf mb-3">Dinas Pemadam Kebakaran dalam melaksanakan tugas  menyelenggarakan fungsi :</p>

                        <p class="text-tf mb-0">1. Kepala Dinas</p>
                            Melaksanakan sebagain tugas Bupati di bidang sub urusan kebakaran menyangkut pelayanan dasar masyarakat dalam penyelenggaraan Pencegahan, Pengendalian, Pemadaman, Penyelamatan dan Penanganan bahaya kebakaran.
                            </p>
                        <p class="text-tf mb-0">Dalam melaksanakan tugas Kepala Dinas mempunyai fungsi :</p>
                            a. Penyiapan perumusan di bidang pembinaan dan pengawasan
                            penyelenggaraan pencegahan, pengendalian, pemadaman,
                            penyelamatan dan penanganan bahaya kebakaran ;</p>
                            b. Penyiapan strategi pencapaian standar pelayanan minimal di bidang
                            sub urusan kebakaran;</p>
                            c. Penyiapan penyusunan Standard Operasional Prosedur
                            penyelenggaraan pemadam kebakaran;</p>
                            d. Penyusunan program dan anggaran kegiatan pencegahan,
                            pengendalian, pemadaman kebakaran bangunan, gedung,
                            permukiman penduduk,</p>
                            e. pabrik/industri, hutan, lahan dan perkebunan, penyelamatan dan
                            penanganan bahan berbahaya dan beracun kebakaran;</p>
                            f. Penyusunan rencana kebutuhan sumberdaya manusia pemadam
                            kebakaran berbasis kompetensi dan sertifikasi;</p>
                            g. Penyusunan rencana kebutuhan sarana dan prasarana pemadam
                            kebakaran berbasis standard pelayanan minimal;</p>
                            h. Pelaksanaan kebijakan dibidang koordinasi kegiatan pencegahan,
                            pengendalian, pemadaman, penyelamatan dan penanganan bahan
                            berbahaya dan beracun kebakaran;</p>
                            i. Pelaksanaan koordinasi penyusunan pemetaan dibidang sub urusan
                            kebakaran;</p>
                            j. Pelaksanaan pemantauan, evaluasi dan pelaporan pencegahan,
                            pengendalian, pemadaman, penyelamatan dan penanganan bahan
                            berbahaya dan beracun;</p>
                            k. Fasilitasi penanganan kebakaran bersama seluruh stakeholder;</p>
                            l. Melaksanakan tugas lain yang diberikan oleh Bupati. </p>
                        <p class="text-tf mb-0">2. Sekretariat </p>
                            Sekretariat Dinas adalah memberikan pelayanan administrative dan teknis kepada semua unsur di lingkungan Dinas Pemadam Kebakaran.;</p>
                        <p class="text-tf mb-0">Dalam melaksanakan tugas Sekretaris menyelenggarakan fungsi : </p>
                            a. Koordinasi penyusunan program dan anggaran;</p>
                            b. Penyiapan dan implementasi norma, standard, prosedur dan kriteria
                            penyelenggaraan pencegahan, pengendalian, pemadaman,
                            penyelamatan dan penanganan bahan berbahaya dan beracun;</p>
                            c. Penyiapan penyusunan dan fasilitasi penyelesaian terkait
                            penyelenggaraan pencegahan, pengendalian, pemadaman,
                            penyelamatan dan penanganan bahan berbahaya dan beracun;</p>
                            d. Pelaksanaan pengelolaan keuangan;</p>
                            e. Pengelolaan sarana dan prasarana, urusan tata usaha, rumah
                            tangga dan aset;</p>
                            f. Pengelolaan aparatur sipil negara;</p>
                            g. Pelayanan administrative dan teknis kepada semua unsur
                            dilingkungan Dinas Pemadam kebakaran.</p>
                            h. Melaksanakan tugas lain yang diberikan oleh Kepala Dinas;</p>
                        <p class="text-tf mb-0">Dalam melaksanakan tugas pokok dan fungsinya, Sekretariat
                            membawahi:</p>
                            1. Sub Bagian Umum dan Kepegawaian
                            Sub bagian Umum dan Kepegawaian mempunyai tugas :
                            Melaksanakan urusan persuratan, tata usaha, urusan administrasi
                            ASN, urusan perlengkapan dan rumah tangga dan penataan barang
                            milik Negara/Daerah.</p>
                            Dalam melaksanakan tugas sub Bagian Umum dan kepegawaian
                            menyelenggarakan fungsi :</p>
                            a. Pelaksanaan urusan persuratan dan tata usaha;</p>
                            b. Pelaksanaan urusan kearsipan.</p>
                            c. Penyiapan administrasi ASN.</p>
                            d. Pelaksanaan urusan perlengkapan dan rumah tangga.</p>
                            e. Pelaksanaan urusan penataan barang milik Negara/Daerah.</p>
                            f. Menyampaikan laporan kegiatan kepada Sekretaris</p>
                            2. Sub Bagian Perencanaan Program dan Keuangan</p>
                            Sub bagian Perencanaan Program dan Keuangan mempunyai tugas :</p>
                            Melaksanakan penyiapan koordinasi penyusunan program dan
                            anggaran, pengelolaan data dan informasi, pelaksanaan monitoring
                            dan evaluasi, penyusunan laporan kinerja, pengelolaan keuangan,
                            penatausahaan, akuntansi serta verifikasi dan pembukuan.</p>
                            Dalam melaksanakan tugas sub Bagian Perencanaan Program dan
                            Keuangan menyelenggarakan fungsi :</p>
                            a. Penyiapan koordinasi penyusunan program dan anggaran.</p>
                            b. Pengolahan data, informasi, monitoring dan evaluasi.</p>
                            c. Penataan sistim dan prosedur dan penyusunan laporan kinerja.</p>
                            d. Pelaksanaan anggaran.</p>
                            e. Penyiapan bahan tanggapan atas laporan pemeriksaan
                            keuangan.</p>
                            f. Pelaksanaan urusan perbendaharaan.</p>
                            g. Pelaksanaan verifikasi dan akuntansi.</p>
                            h. Melaksanakan evaluasi kegiatan dan melaporkan hasil kegiatan
                            kepada Sekretaris.</p>
                        <p class="text-tf mb-0">3. Bidang Pencegahan, Peningkatan Kapasitas SDM dan Sarpras</p>
                            Bidang Pencegahan, Peningkatan Kapasitas SDM dan Sarpras
                            mempunyai tugas melaksanakan sebagian tugas Kepala Dinas di Bidang
                            Sub urusan kebakaran menyangkut pelayanan dasar masyarakat dalam
                            penyelenggaraan kebakaran dan peningkatan kapasitas SDM dan sarana
                            prasarana.</p>
                            Dalam melaksanakan tugas Bidang Pencegahan, Peningkatan Kapasitas
                            SDM dan Sarpras menyelenggarakan fungsi :</p>
                            a. Penyiapan perumusan kebijakan dibidang pembinaan dan
                            pengawasan penyelenggaraan pencegahan dan peningkatan
                            kapasitas SDM dan Sarpras.</p>
                            b. Penyiapan strategi pencapaian standard pelayanan minimal di
                            bidang sub urusan kebakaran.</p>
                            c. Penyiapan penyusunan Standard Operasional Prosedur
                            penyelenggaraan pencegahan dan peningkatan kapasitas SDM dan
                            Sarpras.</p>
                            d. Penyusunan program dan anggaran kegiatan pencegahan kebakaran
                            bangunan gedung, permukiman penduduk, pabrik/industri,
                            hutan, lahan dan perkebunan dan penanganan bahan berbahaya dan beracun
                            kebakaran.</p>
                            e. Penyusunan rencana kebutuhan SDM Damkar berbasis kompetensi
                            dan sertifikat serta Sarpras.</p>
                            f. Pelaksanaan kebijakan dibidang koordinasi kegiatan pencegahan
                            dan peningkatan kapasitas SDM serta penyediaan Sarpras.</p>
                            g. Pelaksanaan pemantauan, evaluasi dan pelaporan pencegahan dan
                            ningkatan kapasitas SDM, ketersediaan Sarpras.</p>
                            h. Fasilitasi penanganan kebakaran dan penyediaan sarana prasarana
                            bersama seluruh stakeholder.</p>
                            i. Melaksanakan tugas-tugas lain yang diberikan oleh Kepala Dinas.</p>
                        <p class="text-tf mb-0">Dalam melaksanakan tugas pokok dan fungsinya, Bidang Pencegahan,
                            Peningkatan Kapasitas SDM dan Sarpras membawahi</p>:
                            1. Seksi Pemberdayaan Masyarakat dan Pelatihan
                            Seksi Pemberdayaan Masyarakat dan Pelatihan mempunyai tugas :</p>
                            a. Mengkoordinasikan penyusunan rencana dan program kerja.</p>
                            b. Menyusun Petunjuk Teknis pelaksanaan Pemberdayaan
                            Masyarakat dan Pelatihan.</p>
                            c. Melaksanakan kebijakan di bidang Pemberdayaan Masyarakat
                            dan Pelatihan.</p>
                            d. Melaksanakan Penyuluhan dan Sosialisasi pencegahan bahaya
                            kebakaran.</p>
                            e. Melakukan koordinasi dengan unsur-unsur terkait dalam hal
                            Pemberdayaan Masyarakat dan Pelatihan.</p>
                            f. Melaporkan hasil kegiatan Pemberdayaan Msyarakat dan
                            Pelatihan kepada Kepala Bidang.</p>
                            g. Melaksanakan tugas-tugas lain yang diberikan oleh Kepala Dinas.</p>
                        <p class="text-tf mb-0"> 2.Seksi Inspeksi Proteksi Kebakaran</p>
                            Seksi Inspeksi Proteksi Kebakaran mempunyai tugas :</p>
                            a. Mengkoordinasikan penyusunan rencana dan program kerja.</p>
                            b. Menyusun Petunjuk Teknis pelaksanaan Inspeksi Proteksi
                            Kebakaran.</p>
                            c. Melaksanakan kebijakan di bidang Inspeksi Proteksi Kebakaran.</p>
                            d. Melaksanakan Penyuluhan dan Sosialisasi pencegahan bahaya
                            kebakaran.</p>
                            e. Melakukan pengawasan, pemantauan dan monitoring
                            pelaksanaan kegiatan Proteksi kebakaran.</p>
                            f. Melaporkan hasil kegiatan kepada Kepala Bidang.</p>
                            g. Melaksanakan tugas-tugas lain yang diberikan oleh Kepala Dinas.</p>
                        <p class="text-tf mb-0">3. Seksi Sarana dan Prasarana</p>
                            Seksi Inspeksi Proteksi Kebakaran mempunyai tugas :</p>
                            a. Penyusunan rencana dan program kerja di bidang Sarana dan
                            Prasarana Damkar.</p>
                            b. Mengkoordinasi penyusunan rencana dan program kerja.</p>
                            c. Melakukan pengawasan, pemantauan dan monitoring
                            pelaksanaan kegiatan Sarana dan Prasarana Damkar.</p>
                            d. Melaporkan hasil kegiatan kepada Kepala Bidang.</p>
                            e. Melaksanakan tugas-tugas lain yang diberikan oleh Kepala Dinas.</p>
                        <p class="text-tf mb-0">4. Bidang Pemadaman dan Penyelamatan</p>
                        <p class="text-tf mb-0">Bidang Pemadaman dan Penyelamatan mempunyai tugas melaksanakan
                            sebagian tugas Kepala Dinas di Bidang Sub urusan kebakaran
                            menyangkut pelayanan dasar masyarakat dalam penyelenggaraan
                            pengendalian operasi pemadaman dan penyelamatan.</p>
                            Dalam melaksanakan tugas Bidang Pemadaman dan Penyelamatan
                            menyelenggarakan fungsi :</p>
                            a. Penyiapan perumusan kebijakan dibidang pengendalian operasi
                            pemadaman dan penyelamatan.</p>
                            b. Penyiapan strategi pencapaian standard pelayanan minimal dibidang
                            sub urusan kebakaran.</p>
                            c. Penyiapan penyusunan Standard Operasional Prosedur
                            pengendalian operasi pemadaman dan penyelamatan.</p>
                            d. Penyusunan program dan anggaran kegiatan kesiapsiagaan
                            pengendalian operasi pemadaman kebakaran dan penyelamatan
                            pada kebakaran bangunan, gedung, permukiman penduduk,
                            pabrik/industry, hutan, lahan dan perkebunan dan penanganan
                            bahan berbahaya dan beracun kebakaran.</p>
                            e. Penyusunan rencana kebutuhan sumberdaya bidang pengendalian
                            operasi pemadaman dan penyelamatan.</p>
                            f. Pelaksanaan kebijakan dibidang pengendalian operasi pemadaman
                            dan penyelamatan.</p>
                            g. Pelaksanaan pemantauan, evaluasi dan pelaporan bidang
                            pengendalian operasi pemadaman dan penyelamatan.</p>
                            h. Fasilitasi pengendalian operasi pemadaman kebakaran dan
                            penyelamatan bersama seluruh stakeholder.</p>
                            i. Melaksanakan tugas-tugas lain yang diberikan oleh Kepala Dinas.</p>
                        <p class="text-tf mb-0">Dalam melaksanakan tugas pokok dan fungsinya, Bidang Pemadaman
                            dan Penyelamatan membawakan ;</p>
                            1. Seksi Operasi Pemadaman dan Investigasi</p>
                            Seksi Operasi Pemadaman dan Investigasi mempunyai tugas :</p>
                            a. Penyusunan rencana dan program kerja di bidang pemadaman
                            dan investigasi.</p>
                            b. Melaksanakan operasi pemadaman kebakaran.</p>
                            c. Melaksanakan tugas lain yang diberikan oleh Kepala Bidang</p>
                            d. Melaporkan hasil kegiatan kepada Kepala Bidang.</p>
                            2. Seksi Evakuasi, Penyelamatan dan Perlindungan Hak Sipil
                            Seksi Evakuasi, Penyelamatan dan Perlindungan Hak Sipil
                            mempunyai tugas :</p>
                            a. Penyusunan rencana dan program kerja di bidang Evakuasi,
                            Penyelamatan dan Perlindungan Hak Sipil.</p>
                            b. Melaksanakan evakuasi dan penyelamatan korban kebakaran.</p>
                            c. Memberikan perlindungan bagi korban kebakaran.</p>
                            d. Melaksanakan evaluasi dan melaporkan hasil kegiatan kepada
                            Kepala Bidang.</p>
                            e. Melaksanakan tugas lain yang diberikan oleh Kepala Bidang</p>
                            3. Seksi Kesiapsiagaan dan Komunikasi</p>
                            Seksi Kesiapsiagaan dan Komunikasi mempunyai tugas :</p>
                            a. Penyusunan rencana dan program kerja di bidang Kesiapsiagaan
                            dan Komunikasi.</p>
                            b. Melaksanakan kesiagaan serta menerima laporan terhadap
                            terjadinya bahaya kebakaran.</p>
                            c. Melaksanakan tugas lain yang diberikan oleh Kepala Bidang.</p>
                            d. Melaksanakan evaluasi dan melaporkan hasil kegiatan kepada
                            Kepala Bidang.</p>
                        <p class="text-tf mb-5">STRUKTUR ORGANISASI DINAS PEMADAM KEBAKARAN KABUPATEN MINAHASA</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
                        




    <!-- =========== Tugas dan Fungsi =========== -->
    <!-- <section class="pt-3 pb-4" style="font-family: sans-serif;">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 text-light mx-auto py-4" style="margin-bottom: 100px; border-radius: 25px; background-color: rgb(218, 37, 29);" >
                    <h1 class="text-center text-light fw-bold" style="margin-bottom: 80px;">TUGAS & FUNGSI</h1>
                    <div class="container col-10" style="margin-bottom: 100px;"> 

                        <p class="text-tf mb-5">Dinas Pemadam Kebakaran mempunyai tugas membantu Walikota dalam melaksanakan urusan pemerintahan bidang ketenteraman dan ketertiban umum sub urusan kebakaran yang menjadi kewenangan daerah dan tugas pembantuan yang ditugaskan kepada daerah.</p>

                        <p class="text-tf mb-3">Dinas Pemadam Kebakaran dalam melaksanakan tugas  menyelenggarakan fungsi :</p>

                        <p class="text-tf mb-0">Perumusan kebijakan Bidang Pencegahan, Bidang Operasional dan Penyelamatan, Bidang Prasarana dan Sarana, dan Bidang Pemberdayaan dan Partisipasi Masyarakat;</p>
                        <p class="text-tf mb-0">Perumusan rencana strategis sesuai dengan visi dan misi Walikota;</p>
                        <p class="text-tf mb-0">Pengkoordinasian tugas-tugas dalam rangka pelaksanaan program dan kegiatan Kesekretariatan, Bidang Pencegahan, Bidang Operasional dan Penyelamatan, Bidang Prasarana dan Sarana, dan Bidang Pemberdayaan dan Partisipasi Masyarakat;</p>
                        <p class="text-tf mb-0">Penyelenggaraan pembinaan kepada bawahan dalam lingkup tanggungjawabnya;</p>
                        <p class="text-tf mb-0">penyelenggaraan penyusunan Sasaran Kerja Pegawai;</p>
                        <p class="text-tf mb-0">penyelenggaraan kerjasama Bidang Pencegahan, Bidang Operasional dan Penyelamatan, Bidang Prasarana dan Sarana, dan Bidang Pemberdayaan dan Partisipasi Masyarakat;</p>
                        <p class="text-tf mb-0">penyelenggaraan kesekretariatan Dinas Pemadam Kebakaran;</p>
                        <p class="text-tf mb-0">penyelenggaraan program dan kegiatan Bidang Pencegahan, Bidang Operasional dan Penyelamatan, Bidang Prasarana dan Sarana, dan Bidang Pemberdayaan dan Partisipasi Masyarakat;</p>
                        <p class="text-tf mb-0">penyelenggaraan penilaian kinerja Pegawai;</p>
                        <p class="text-tf mb-0">penyelenggaraan monitoring dan evaluasi program dan kegiatanBidang Pencegahan, Bidang Operasional dan Penyelamatan, Bidang Prasarana dan Sarana, Bidang Pemberdayaan dan Partisipasi Masyarakat, dan UPTD;</p>
                        <p class="text-tf mb-0">penyelenggaraan laporan pelaksanaan program dan kegiatan; dan</p>
                        <p class="text-tf mb-5">pelaksanaan fungsi lain yang diberikan oleh Walikota terkait dengan tugas dan fungsinya.</p>
                        

                        <p class="text-tf mb-0">Sekretariat</p>
                        <p class="text-tf mb-3">Sekretariat mempunyai fungsi :</p>

                        <p class="text-tf mb-0">perencanaan program, kegiatan dan anggaran;</p>
                        <p class="text-tf mb-0">pendistribusian tugas kepada bawahan;</p>
                        <p class="text-tf mb-0">pemberian petunjuk kepada bawahan;</p>
                        <p class="text-tf mb-0">penyeliaan tugas bawahan dalam lingkup tanggungjawabnya;</p>
                        <p class="text-tf mb-0">pelaksanaan kegiatan penyusunan Sasaran Kerja Pegawai;</p>
                        <p class="text-tf mb-0">pengkoordinasian, sinkronisasi, pembinaan, pengawasan dan pengendalian, dan evaluasi tugas-tugas kesekretariatan, Bidang Pencegahan, Bidang Operasional dan Penyelamatan, Bidang Prasarana dan Sarana, dan Bidang Pemberdayaan dan Partisipasi Masyarakat;</p>
                        <p class="text-tf mb-0">pelaksanaan fasilitasi tugas-tugas Bidang Pencegahan, Bidang Operasional dan Penyelamatan, Bidang Prasarana dan Sarana, dan Bidang Pemberdayaan dan Partisipasi Masyarakat;</p>
                        <p class="text-tf mb-0">pelaksanaan koordinasi dengan perangkat daerah lainnya dan instansi terkait;</p>
                        <p class="text-tf mb-0">pelaksanaan kegiatan penyusunan kebijakan di subbagian perencanaan dan evaluasi, keuangan dan aset, umum dan kepegawaian;</p>
                        <p class="text-tf mb-0">pelaksanaan kegiatan Penyusunan Rencana Strategis, Rencana Kerja, dan Rencana Kinerja Tahunan;</p>
                        <p class="text-tf mb-0">pelaksanaan koordinasi dan verifikasi penyusunan Rencana Kegiatan dan Anggaran dan Dokumen Pelaksanaan Anggaran Dinas Pemadam Kebakaran;</p>
                        <p class="text-tf mb-0">pelaksanaan kegiatan fasilitasi Reformasi Birokrasi Dinas Pemadam Kebakaran;</p>
                        <p class="text-tf mb-0">pelaksanaan kegiatan penyusunan Sistem Akuntabilitas Kinerja Instansi Pemerintah Dinas Pemadam Kebakaran;</p>
                        <p class="text-tf mb-0">pelaksanaan kegiatan penyusunan bahan Laporan Keterangan Pertanggungjawaban Walikota;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan penyusunan bahan Laporan Penyelenggaraan Pemerintahan Daerah;</p>
                        <p class="text-tf mb-0">pelaksanaan kegiatan pengelolaan dan penatausahaan keuangan Dinas Pemadam Kebakaran;</p>
                        <p class="text-tf mb-0">pelaksanaan pengelolaan gaji dan tunjangan di lingkungan Dinas Pemadam Kebakaran;</p>
                        <p class="text-tf mb-0">pelaksanaan tatakelola persuratan, kearsipan, kepustakaan, dokumentasi, keprotokolan dan kehumasan Dinas Pemadam Kebakaran;</p>
                        <p class="text-tf mb-0">pelaksanaanpenyediaan jasa komunikasi, sumber daya air dan listrik;</p>
                        <p class="text-tf mb-0">pelaksanaan penyediaan akomodasi dan jamuan rapat/pertemuan, dan kunjungan tamu di lingkungan Dinas Pemadam Kebakaran;</p>
                        <p class="text-tf mb-5">pelaksanaan kegiatan Pengadaan Peralatan gedung kantor, barang inventaris, dan pemeliharaan prasarana dan sarana kantor;</p>
                        

                        <p class="text-tf mb-3">Sekretariat, terdiri atas :</p>

                        <p class="text-tf mb-0">Subbagian Perencanaan dan Evaluasi;</p>
                        <p class="text-tf mb-0">Subbagian Keuangan dan Aset; dan</p>
                        <p class="text-tf mb-0">Subbagian Umum dan Kepegawaian.</p>
                        <p class="text-tf mb-3">Kepala Subbagian Perencanaan dan Evaluasi, mempunyai tugas :</p>

                        <p class="text-tf mb-0">menyiapkan kegiatan penyusunan Rencana Kegiatan dan Anggaran Subbagian Perencanaan dan Evaluasi;</p>
                        <p class="text-tf mb-0">membagi tugas kepada bawahan;</p>
                        <p class="text-tf mb-0">membimbing bawahan dalam lingkup tanggungjawabnya;</p>
                        <p class="text-tf mb-0">memeriksa hasil kerja bawahan;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan penyusunan Sasaran Kerja Pegawai;</p>
                        <p class="text-tf mb-0">menyiapkan pelaksanaan koordinasi;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan penyusunan kebijakan Subbagian Perencanaan dan Evaluasi;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan Penyusunan Rencana Strategis, Rencana Kerja, dan Rencana Kinerja Tahunan;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan koordinasi dan verifikasi penyusunan Rencana Kegiatan dan Anggaran Dinas Pemadam Kebakaran;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan Sistem Akuntabilitas Kinerja Instansi Pemerintah Dinas Pemadam Kebakaran;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan penyusunan bahan bahan Laporan Keterangan Pertanggungjawaban) Walikota;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan penyusunan bahan Laporan Penyelenggaraan Pemerintahan Daerah;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan penyusunan data dan informasi Subbagian Perencanaan dan Evaluasi;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan pengelolaan dan pertanggungjawaban teknis keuangan Subbagian Perencanaan dan Evaluasi;</p>
                        <p class="text-tf mb-0">menyiapkan penilaian kinerja pegawai dalam lingkup tanggungjawabnya;</p>
                        <p class="text-tf mb-0">menyiapkan monitoring dan evaluasi pelaksanaan kegiatan Subbagian Perencanaan dan Evaluasi;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan penyusunan laporan kegiatan Subbagian Perencanaan dan Evaluasi; dan</p>
                        <p class="text-tf mb-5">melaksanakan tugas kedinasan lain yang diberikan oleh pimpinan sesuai tugas dan fungsinya.</p>
                        

                        <p class="text-tf mb-3">Kepala Subbagian Keuangan dan Aset  mempunyai tugas  :</p>

                        <p class="text-tf mb-0">menyiapkan kegiatan penyusunan Rencana Kegiatan dan Anggaran Subbagian Keuangan dan Aset;</p>
                        <p class="text-tf mb-0">membagi tugas kepada bawahan;</p>
                        <p class="text-tf mb-0">membimbing bawahan dalam lingkup tanggungjawabnya;</p>
                        <p class="text-tf mb-0">memeriksa hasil kerja bawahan;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan penyusunan Sasaran Kerja Pegawai;</p>
                        <p class="text-tf mb-0">menyiapkan pelaksanaan koordinasi;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan penyusunan kebijakan Subbagian Keuangan dan Aset;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan penyusunan Daftar Pelaksanaan Anggaran Dinas Pemadam Kebakaran;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan pengelolaan dan penatausahaan keuangan Dinas Pemadam Kebakaran;</p>
                        <p class="text-tf mb-0">menyiapkan pengelolaan gaji dan tunjangan di lingkungan Dinas Pemadam Kebakaran;</p>
                        <p class="text-tf mb-0">melaksanakan penatausahaan barang pakai habis dan barang inventaris;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan penyusunan data dan informasi Subbagian Keuangan dan Aset;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan pengelolaan dan pertanggungjawaban teknis keuangan Subbagian Keuangan dan Aset;</p>
                        <p class="text-tf mb-0">menyiapkan Penilaian kinerja pegawai dalam lingkup tanggumgjawabnya;</p>
                        <p class="text-tf mb-0">menyiapkan monitoring dan evaluasi pelaksanaan kegiatan Subbagian Keuangan dan Aset;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan penyusunan laporan pelaksanaan kegiatan Subbagian Keuangan dan Aset; dan</p>
                        <p class="text-tf mb-5">melaksanakan tugas kedinasan lain yang diberikan oleh pimpinan sesuai tugas dan fungsinya.</p>
                        

                        <p class="text-tf mb-3">Kepala Subbagian Umum dan Kepegawaian mempunyai tugas  :</p>

                        <p class="text-tf mb-0">menyiapkan kegiatan penyusunan Rencana Kegiatan dan Anggaran SubbagianUmum dan Kepegawaian;</p>
                        <p class="text-tf mb-0">membagi tugas kepada bawahan;</p>
                        <p class="text-tf mb-0">membimbing bawahan dalam lingkup tanggungjawabnya;</p>
                        <p class="text-tf mb-0">memeriksa hasil kerja bawahan;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan penyusunan Sasaran Kerja Pegawai;</p>
                        <p class="text-tf mb-0">menyiapkan pelaksanaan koordinasi;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan penyusunan kebijakan Subbagian Umum dan Kepegawaian;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan tatakelola persuratan, kearsipan, kepustakaan, dokumentasi, keprotokolan dan kehumasan Dinas Pemadam Kebakaran;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan Penyediaan Jasa Komunikasi, Sumber Daya Air dan Listrik Dinas Pemadam Kebakaran;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan Penyediaan akomodasi dan jamuan rapat/pertemuan, dan kunjungan tamu di Dinas Pemadam Kebakaran;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan Pengadaan Peralatan gedung kantor, barang inventaris, dan pemeliharaan prasarana dan sarana kantor;</p>
                        <p class="text-tf mb-0">menyiapkan pengelolaan kepegawaian di lingkungan Dinas Pemadam Kebakaran;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan fasilitasi Reformasi Birokrasi Dinas Pemadam Kebakaran;</p>
                        <p class="text-tf mb-0">menyiapkan pengelolaan sistem informasi dan komunikasi Dinas Pemadam Kebakaran;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan penyusunan data dan informasi Subbagian Umum dan Kepegawaian;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan pelayanan data dan informasi Dinas Pemadam Kebakaran;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan pengelolaan dan pertanggungjawaban teknis keuangan Subbagian Umum dan Kepegawaian;</p>
                        <p class="text-tf mb-0">menyiapkan penilaian kinerja pegawai dalam lingkup tanggungjawabnya;</p>
                        <p class="text-tf mb-0">menyiapkan monitoring dan evaluasi pelaksanaan kegiatan Subbagian Umum dan Kepegawaian;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan penyusunan laporan pelaksanaan kegiatan Subbagian Umum dan Kepegawaian; dan</p>
                        <p class="text-tf mb-5">melaksanakan tugas kedinasan lain yang diberikan oleh pimpinan sesuai tugas dan fungsinya.</p>
                        

                        <p class="text-tf mb-0">Bidang Pencegahan</p>
                        <p class="text-tf mb-5">Kepala Bidang Pencegahan mempunyai tugas merencanakan, mengkoordinasikan, membina, mengawasi dan mengendalikan serta mengevaluasi tugas Seksi Bina Teknis Pencegahan, Seksi Inspeksi, dan Seksi Penindakan.</p>

                        

                        <p class="text-tf mb-3">Bidang Pencegahan mempunyai fungsi :</p>

                        <p class="text-tf mb-0">perencanaan program, kegiatan dan anggaran;</p>
                        <p class="text-tf mb-0">pendistribusian tugas kepada bawahan;</p>
                        <p class="text-tf mb-0">pemberian petunjuk kepada bawahan;</p>
                        <p class="text-tf mb-0">penyeliaan tugas bawahan dalam lingkup tanggungjawabnya;</p>
                        <p class="text-tf mb-0">pelaksanaankegiatan penyusunan Sasaran Kerja Pegawai;</p>
                        <p class="text-tf mb-0">pelaksanaan koordinasi dengan perangkat daerah lainnya dan instansi terkait;</p>
                        <p class="text-tf mb-0">pelaksanaan kegiatan penyusunan kebijakan di Bidang Pencegahan;</p>
                        <p class="text-tf mb-0">pelaksanaan kegiatan Seksi Bina Teknis Pencegahan, Seksi Inspeksi, dan Seksi Penindakan;</p>
                        <p class="text-tf mb-0">pelaksanaankegiatan penyusunan data dan informasi di Bidang Pencegahan;</p>
                        <p class="text-tf mb-0">pelaksanaan kegiatan pengelolaan dan pertanggungjawaban keuangan di Bidang Pencegahan;</p>
                        <p class="text-tf mb-0">pelaksanaan penilaian kinerja Pegawai dalam lingkup tanggungjawabnya;</p>
                        <p class="text-tf mb-0">pelaksanaan monitoring dan evaluasi program dan kegiatan;</p>
                        <p class="text-tf mb-0">pelaksanaan penyusunan laporan program dan kegiatan; dan</p>
                        <p class="text-tf mb-5">pelaksanaan tugas kedinasan lain yang diberikan oleh pimpinan sesuai tugas dan fungsinya.</p>
                        

                        <p class="text-tf mb-0">Bidang Pencegahan, terdiri atas:</p>
                        <p class="text-tf mb-0">Seksi Bina Teknis Pencegahan;</p>
                        <p class="text-tf mb-0">Seksi Inspeksi; dan</p>
                        <p class="text-tf mb-5">Seksi Penindakan.</p>
                        

                        <p class="text-tf mb-3">Kepala Seksi Bina Teknis Pencegahan, mempunyai tugas :</p>

                        <p class="text-tf mb-0">menyiapkan kegiatan penyusunan Rencana Kegiatan dan Anggaran Seksi Bina Teknis Pencegahan;</p>
                        <p class="text-tf mb-0">vmembagi tugas kepada bawahan;</p>
                        <p class="text-tf mb-0">membimbing bawahan dalam lingkup tanggungjawabnya;</p>
                        <p class="text-tf mb-0">memeriksa hasil kerja bawahan;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan penyusunan Sasaran Kerja Pegawai;</p>
                        <p class="text-tf mb-0">menyiapkan pelaksanaan koordinasi;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan penyusunankebijakan Seksi Bina Teknis Pencegahan;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan pelayanan teknis upaya pencegahan kebakaran kepada instansi pemerintah, swasta dan masyarakat;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan perancangan keselamatan kebakaran bangunan gedung serta pengangkutan dan pergudangan bahan berbahaya;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan pengawasan, pengendalian, monitoring dan evaluasi perizinan dan non perizinan perencanaan bangunan gedung;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan pengawasan terhadap penerapan persyaratan keselamatan kebakaran pada bangunan gedung dalam masa konstruksi;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan penyusunan data dan informasi Seksi Bina Teknis Pencegahan;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan pengelolaan dan pertanggungjawaban teknis keuangan Seksi Bina Teknis Pencegahan;</p>
                        <p class="text-tf mb-0">menyiapkan Penilaian kinerja pegawai dalam lingkup tanggungjawabnya;</p>
                        <p class="text-tf mb-0">menyiapkan monitoring dan evaluasi pelaksanaan kegiatan Seksi Bina Teknis Pencegahan;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan penyusunan laporan pelaksanaan kegiatan Seksi Bina Teknis Pencegahan; dan</p>
                        <p class="text-tf mb-5">melaksanakan tugas kedinasan lain yang diberikan oleh pimpinan sesuai tugas dan fungsinya.</p>
                        

                        <p class="text-tf mb-3">Seksi Inspeksi, mempunyai tugas :</p>

                        <p class="text-tf mb-0">menyiapkan kegiatan penyusunan Rencana Kegiatan dan Anggaran Seksi Inspeksi;</p>
                        <p class="text-tf mb-0">membagi tugas kepada bawahan;</p>
                        <p class="text-tf mb-0">membimbing bawahan dalam lingkup tanggungjawabnya;</p>
                        <p class="text-tf mb-0">memeriksa hasil kerja bawahan;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan penyusunan Sasaran Kerja Pegawai;</p>
                        <p class="text-tf mb-0">menyiapkan pelaksanaan koordinasi;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan penyusunan kebijakan Seksi Inspeksi;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan pemeriksaan dan pengujian terhadap peralatan proteksi kebakaran pada bangunan gedung;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan pengawasan dan pemeriksaan sewaktu-waktu terhadap kondisi kesiapan keselamatan kebakaran pada bangunan gedung dan penyimpanan, penggunaan serta pengangkutan bahan berbahaya;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan pemeriksaan dan verifikasi kajian teknis keselamatan kebakaran bangunan gedung;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan penyusunan data dan informasi Seksi Inspeksi;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan pengelolaan dan pertanggungjawaban teknis keuangan Seksi Inspeksi;</p>
                        <p class="text-tf mb-0">menyiapkan Penilaian kinerja pegawai dalam lingkup tanggungjawabnya;</p>
                        <p class="text-tf mb-0">menyiapkan monitoring evaluasi pelaksanaan kegiatan Seksi Inspeksi;</p>
                        <p class="text-tf mb-0">Menyiapkan kegiatan penyusunan laporan pelaksanaan kegiatan Seksi Inspeksi; dan</p>
                        <p class="text-tf mb-5">Melaksanakan tugas kedinasan lain yang diberikan oleh pimpinan sesuai tugas dan fungsinya.</p>
                        

                        <p class="text-tf mb-3">Kepala Seksi Penindakan mempunyai tugas :</p>

                        <p class="text-tf mb-0">menyiapkan kegiatan penyusunan Rencana Kegiatan dan Anggaran Penindakan;</p>
                        <p class="text-tf mb-0">membagi tugas kepada bawahan;</p>
                        <p class="text-tf mb-0">membimbing bawahan dalam lingkup tanggungjawabnya;</p>
                        <p class="text-tf mb-0">memeriksa hasil kerja bawahan;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan penyusunan Sasaran Kerja Pegawai;</p>
                        <p class="text-tf mb-0">menyiapkan pelaksanaan koordinasi;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan penyusunan kebijakan Seksi Penindakan;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan pengawasan dan evaluasi terhadap pelaksanaan perizinan dan non perizinan bangunan gedung;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan penyusunan bahan rekomendasi penetapan dan pemberian sanksi atas pelanggaran atau penyalahgunaan perizinan dan non perizinan;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan fasilitasi penegakan peraturan perundang-undangan di bidang penanggulangan kebakaran dan penyelamatan dengan Perangkat Daerah dan/atau instansi terkait;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan monitoring kondisi peralatan proteksi kebakaran pada bangunan gedung baru dan penyimpanan, penggunaan serta pengangkutan bahan berbahaya dalam masa pembinaan;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan penyusunan data dan informasi Seksi Penindakan;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan pengelolaan dan pertanggungjawaban teknis keuangan Seksi Penindakan;</p>
                        <p class="text-tf mb-0">menyiapkan Penilaian kinerja pegawai dalam lingkup tanggungjawabnya;</p>
                        <p class="text-tf mb-0">menyiapkan monitoring dan evaluasi pelaksanaan kegiatan Seksi Penindakan;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan penyusunan laporan pelaksanaan kegiatan Seksi Penindakan; dan</p>
                        <p class="text-tf mb-5">melaksanakan tugas kedinasan lain yang diberikan oleh pimpinan sesuai tugas dan fungsinya.</p>
            

                        <p class="text-tf mb-0">Bidang Operasional dan Penyelamatan</p>
                        <p class="text-tf mb-5">Kepala Bidang Operasional dan Penyelamatan mempunyai tugas merencanakan, mengkoordinasikan, membina, mengawasi dan mengendalikan serta mengevaluasi tugas Seksi Operasi, Seksi Penyelamatan, dan Seksi Komunikasi Operasi dan Penyelamatan.</p>

                        

                        <p class="text-tf mb-3">Bidang Operasional dan Penyelamatan mempunyai fungsi :</p>

                        <p class="text-tf mb-0">perencanaan program, kegiatan dan anggaran;</p>
                        <p class="text-tf mb-0">pendistribusian tugas kepada bawahan;</p>
                        <p class="text-tf mb-0">pemberian petunjuk kepada bawahan;</p>
                        <p class="text-tf mb-0">penyeliaan tugas bawahan dalam lingkup tanggungjawabnya;</p>
                        <p class="text-tf mb-0">pelaksanaan kegiatan penyusunan Sasaran Kerja Pegawai;</p>
                        <p class="text-tf mb-0">pelaksanaan koordinasi dengan perangkat daerah lainnya dan instansi terkait;</p>
                        <p class="text-tf mb-0">pelaksanaan kegiatan penyusunan kebijakan di Bidang Operasional dan Penyelamatan;</p>
                        <p class="text-tf mb-0">pelaksanaan kegiatan Seksi Operasi, Seksi Penyelamatan, dan Seksi Komunikasi Operasi dan Penyelamatan;</p>
                        <p class="text-tf mb-0">pelaksanaan kegiatan penyusunan data dan informasi di Bidang Operasional dan Penyelamatan;</p>
                        <p class="text-tf mb-0">pelaksanaan kegiatan pengelolaan dan pertanggungjawaban keuangan di Bidang Operasional dan Penyelamatan;</p>
                        <p class="text-tf mb-0">pelaksanaan penilaian kinerja Pegawai dalam lingkup tanggungjawabnya;</p>
                        <p class="text-tf mb-0">pelaksanaan monitoring dan evaluasi program dan kegiatan;</p>
                        <p class="text-tf mb-0">pelaksanaan penyusunan laporan program dan kegiatan; dan</p>
                        <p class="text-tf mb-5">pelaksanaan tugas kedinasan lain yang diberikan oleh pimpinan sesuai tugas dan fungsinya.</p>
                        

                        <p class="text-tf mb-0">Bidang Operasional dan Penyelamatan, terdiri atas:</p>
                        <p class="text-tf mb-0">Seksi Operasi;</p>
                        <p class="text-tf mb-0"> Seksi Penyelamatan; dan</p>
                        <p class="text-tf mb-5"> Seksi Seksi Komunikasi Operasi dan Penyelamatan.</p>
                        

                        <p class="text-tf mb-3">Kepala Seksi Operasi mempunyai tugas :</p>

                        <p class="text-tf mb-0">menyiapkan kegiatan penyusunan Rencana Kegiatan dan Anggaran 
                        <p class="text-tf mb-0">Seksi Operasi;</p>
                        <p class="text-tf mb-0">membagi tugas kepada bawahan;</p>
                        <p class="text-tf mb-0">membimbing bawahan dalam lingkup tanggungjawabnya;</p>
                        <p class="text-tf mb-0">memeriksa hasil kerja bawahan;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan penyusunan Sasaran Kerja Pegawai;</p>
                        <p class="text-tf mb-0">menyiapkan pelaksanaan koordinasi;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan penyusunan kebijakan Seksi Operasi;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan kesiapsiagaan dan kesigapan pegawai sebagai petugas pelaksanaan operasi pemadaman;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan pelaksanaan operasi pemadaman;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan bantuan konsultasi dan pendampingan kepada petugas operasional yang mengalami sengketa hukum dalam menjalankan tugas dan kewajibannya;</p>
                        <p class="text-tf mb-0">menyiapkan, pengendalian kegiatan unit-unit operasional, pos cabang pembantu, unit kebakaran, instansi pemerintah, swasta dan masyarakat;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan penyusunan saran tindak, taktik dan strategi operasi;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan analisis dan evaluasi data hasil pengujian di laboratorium maupun pengamatan di lapangan;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan simulasi skenario investigasi kebakaran dan menyusun rekomendasi tindak lanjut hasil investigasi;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan penyusunan data dan informasi Seksi Operasi;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan pengelolaan dan pertanggungjawaban teknis keuangan Seksi Operasi;</p>
                        <p class="text-tf mb-0">menyiapkan Penilaian kinerja pegawai dalam lingkup tangungjawabnya;</p>
                        <p class="text-tf mb-0">menyiapkan monitoring dan evaluasi pelaksanaan kegiatan Seksi Operasi;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan penyusunan laporan pelaksanaan kegiatan Seksi Operasi; dan</p>
                        <p class="text-tf mb-5">melaksanakan tugas kedinasan lain yang diberikan oleh pimpinan sesuai tugas dan fungsinya.</p>
                        

                        <p class="text-tf mb-3">Kepala Seksi Penyelamatan mempunyai tugas :</p>

                        <p class="text-tf mb-0">menyiapkan kegiatan penyusunan Rencana Kegiatan dan Anggaran</p>
                        <p class="text-tf mb-0">Seksi Penyelamatan;</p>
                        <p class="text-tf mb-0">membagi tugas kepada bawahan;</p>
                        <p class="text-tf mb-0">membimbing bawahan dalam lingkup tanggungjawabnya;</p>
                        <p class="text-tf mb-0">memeriksa hasil kerja bawahan;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan penyusunan Sasaran Kerja Pegawai;</p>
                        <p class="text-tf mb-0">menyiapkan pelaksanaan koordinasi;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan penyusunan kebijakan Seksi Penyelamatan;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan fasilitasi penyelamatan pada kecelakaan transportasi, bangunan, air, ketinggian, bahan-bahan berbahaya bencana dan bantuan layanan medis darurat ambulans;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan pemberian bantuan operasi penyelamatan,;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan pembinaan kesiapsiagaan dan kesigapan petugas penyelamatan;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan simulasi penyelamatan pada Instansi Pemerintah, swasta dan masyarakat;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan penyusunan data dan informasi Seksi Penyelamatan;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan pengelolaan dan pertanggungjawaban teknis keuangan Seksi Penyelamatan;</p>
                        <p class="text-tf mb-0">menyiapkan Penilaian kinerja pegawai dalam lingkup tanggungjawabnya;</p>
                        <p class="text-tf mb-0">menyiapkan monitoring danevaluasi pelaksanaan kegiatan Seksi Penyelamatan;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan penyusunan laporan pelaksanaan kegiatan Seksi Penyelamatan; dan</p>
                        <p class="text-tf mb-5">melaksanakan tugas kedinasan lain yang diberikan oleh pimpinan sesuai tugas dan fungsinya.</p>
                        

                        <p class="text-tf mb-3">Kepala Seksi Komunikasi Operasi dan Penyelamatan mempunyai tugas :</p>

                        <p class="text-tf mb-0">menyiapkan kegiatan penyusunan Rencana Kegiatan dan Anggaran Seksi Komunikasi Operasi dan Penyelamatan;</p>
                        <p class="text-tf mb-0">membagi tugas kepada bawahan;</p>
                        <p class="text-tf mb-0">membimbing bawahan dalam lingkup tanggungjawabnya;</p>
                        <p class="text-tf mb-0">memeriksa hasil kerja bawahan;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan penyusunan Sasaran Kerja Pegawai;</p>
                        <p class="text-tf mb-0">menyiapkan pelaksanaan koordinasi;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan penyusunan kebijakan Seksi Komunikasi Operasi dan Penyelamatan;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan pengelolaan pusat komando operasi pemadaman kebakaran dan penyelamatan;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan pengaturan dan pengendalian jalur komunikasi operasi pemadaman kebakaran dan penyelamatan;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan pengelolaan sistem informasi manajemen pemadaman kebakaran dan penyelamatan;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan menghimpun, mengolah dan menyajikan data dan informasi penanggulangan kebakaran dan penyelamatan;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan kerja sama dan kemitraan pelaksanaan pemadaman kebakaran dan penyelamatan;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan jaringan kerja (networking) dalam rangka efektivitas penyelidikan kebakaran;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan penyusunan  data  dan informasi  Seksi  Komunikasi Operasi dan Penyelamatan;</p>
                        <p class="text-tf mb-0">menyiapkan  kegiatan   pengelolaan   dan   pertanggungjawaban   teknis keuangan Seksi Komunikasi Operasi dan Penyelamatan;</p>
                        <p class="text-tf mb-0">menyiapkan Penilaian kinerja pegawai dalam lingkup tanggungjawabnya;</p>
                        <p class="text-tf mb-0">menyiapkan monitoring   dan   evaluasi   pelaksanaan   kegiatan  Seksi Komunikasi Operasi dan Penyelamatan;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan  penyusunan  laporan  pelaksanaan  kegiatan Seksi Komunikasi Operasi dan Penyelamatan; dan</p>
                        <p class="text-tf mb-5">melaksanakan tugas kedinasan lain yang diberikan oleh pimpinan sesuai tugas dan fungsinya.</p>
                        

                        <p class="text-tf mb-0">Sarana dan Prasarana</p>
                        <p class="text-tf mb-5">Kepala Bidang Prasarana dan Sarana mempunyai tugas merencanakan, mengkoordinasikan, membina, mengawasi dan mengendalikan serta mengevaluasi Seksi Sarana, Seksi Prasarana, dan Seksi Analisa Kebutuhan.</p>

                        

                        <p class="text-tf mb-3">Bidang Prasarana dan Sarana mempunyai fungsi :</p>

                        <p class="text-tf mb-0">perencanaan program, kegiatan dan anggaran;</p>
                        <p class="text-tf mb-0">pendistribusian tugas kepada bawahan;</p>
                        <p class="text-tf mb-0">pemberian petunjuk kepada bawahan;</p>
                        <p class="text-tf mb-0">penyeliaan tugas bawahan dalam lingkup tanggungjawabnya;</p>
                        <p class="text-tf mb-0">pelaksanaan kegiatan penyusunan Sasaran Kerja Pegawai;</p>
                        <p class="text-tf mb-0">pelaksanaan koordinasi dengan perangkat daerah lainnya dan instansi terkait;</p>
                        <p class="text-tf mb-0">pelaksanaan kegiatan penyusunan kebijakan di Bidang Sarana dan Prasarana;</p>
                        <p class="text-tf mb-0">pelaksanaan kegiatan Seksi Sarana, Seksi Prasarana, dan Seksi Analisa Kebutuhan;</p>
                        <p class="text-tf mb-0">pelaksanaan kegiatan penyusunan data dan informasi di Bidang
                        <p class="text-tf mb-0">Prasarana dan Sarana;</p>
                        <p class="text-tf mb-0">pelaksanaan kegiatan pengelolaan dan pertanggungjawaban keuangan di Bidang Prasarana dan Sarana;</p>
                        <p class="text-tf mb-0">pelaksanaan penilaian kinerja Pegawai dalam lingkup tanggungjawabnya;</p>
                        <p class="text-tf mb-0">pelaksanaan monitoring dan evaluasi program dan kegiatan;</p>
                        <p class="text-tf mb-0">pelaksanaan penyusunan laporan program dan kegiatan; dan</p>
                        <p class="text-tf mb-5">pelaksanaan tugas kedinasan lain yang diberikan oleh pimpinan sesuai tugas dan fungsinya.</p>
                        

                        <p class="text-tf mb-0">Bidang Prasarana dan Sarana, terdiri atas :</p>
                        <p class="text-tf mb-0">Seksi Sarana;</p>
                        <p class="text-tf mb-0">Seksi Prasarana; dan</p>
                        <p class="text-tf mb-5">Seksi Analisa Kebutuhan.</p>
                        

                        <p class="text-tf mb-3">Kepala Seksi Sarana mempunyai tugas :</p>

                        <p class="text-tf mb-0">menyiapkan kegiatan penyusunan Rencana Kegiatan dan Anggaran Seksi Sarana;</p>
                        <p class="text-tf mb-0">membagi tugas kepada bawahan;</p>
                        <p class="text-tf mb-0">membimbing bawahan dalam lingkup tanggungjawabnya;</p>
                        <p class="text-tf mb-0">memeriksa hasil kerja bawahan;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan penyusunan Sasaran Kerja Pegawai;</p>
                        <p class="text-tf mb-0">menyiapkan pelaksanaan koordinasi;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan penyusunan kebijakan Seksi Sarana;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan penyusunan standarisasi sarana penanggulangan kebakaran dan penyelamatan;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan penyusunan rencana kebutuhan sarana penanggulangan kebakaran dan penyelamatan;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan pengelolaan sarana penanggulangan kebakaran dan penyelamatan;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan monitoring dan evaluasi penggunaan sarana penanggulangan kebakaran dan penyelamatan;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan pemeliharaan dan perawatan sarana penanggulangan kebakaran dan penyelamatan;</p>
                        <p class="text-tf mb-0">Menyiapkan kegiatan pengaturan dan pengendalian penggunaan kendaraan operasional penanggulangan kebakaran dan penyelamatan serta peralatan operasional pendukung lainnya;</p>
                        <p class="text-tf mb-0">Menyiapkan kegiatan pelaksanaan penerimaan, penyimpanan dan distribusi sarana penanggulangan kebakaran dan penyelamatan serta peralatan operasional pendukung lainnya;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan penyusunan data dan informasi Seksi Sarana;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan pengelolaan dan pertanggungjawaban teknis keuangan Seksi Sarana;</p>
                        <p class="text-tf mb-0">menyiapkan Penilaian kinerja pegawai dalam lingkup tanggungjawabnya;</p>
                        <p class="text-tf mb-0">menyiapkan monitoring dan evaluasi pelaksanaan kegiatan Seksi Sarana;</p>
                        <p class="text-tf mb-5">menyiapkan kegiatan penyusunan laporan pelaksanaan kegiatan Seksi Sarana</p>

                        <p class="text-tf mb-5" style="text-indent: 50px;">20. melaksanakan tugas kedinasan lain yang diberikan oleh pimpinan sesuai tugas dan fungsinya.</p>

                        

                        <p class="text-tf mb-3">Kepala Seksi Prasarana mempunyai tugas :</p>

                        <p class="text-tf mb-0">menyiapkan kegiatan penyusunan Rencana Kegiatan dan Anggaran Seksi Prasarana;</p>
                        <p class="text-tf mb-0">membagi tugas kepada bawahan;</p>
                        <p class="text-tf mb-0">membimbing bawahan dalam lingkup tanggungjawabnya;</p>
                        <p class="text-tf mb-0">memeriksa hasil kerja bawahan;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan penyusunan Sasaran Kerja Pegawai;</p>
                        <p class="text-tf mb-0">menyiapkan pelaksanaan koordinasi;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan penyusunan kebijakan Seksi Prasarana;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan penyusunan standardisasi prasarana penanggulangan kebakaran dan penyelamatan;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan penyusunan Detail Engineering Desain, rencana pembangunan dan rencana rehabilitasi total prasarana penanggulangan kebakaran dan penyelamatan;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan pengelolaan prasarana penanggulangan kebakaran dan penyelamatan;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan monitoring dan evaluasi penggunaan prasarana penanggulangan kebakaran dan penyelamatan;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan penyusunan data dan informasi Seksi Prasarana;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan pengelolaan dan pertanggungjawaban teknis keuangan Seksi Prasarana;</p>
                        <p class="text-tf mb-0">menyiapkan Penilaian kinerja pegawai dalam lingkup tanggungjawabnya;</p>
                        <p class="text-tf mb-0">menyiapkan monitoring dan evaluasi pelaksanaan kegiatan Seksi Prasarana;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan penyusunan laporan pelaksanaan kegiatan Seksi Prasarana; dan</p>
                        <p class="text-tf mb-5">melaksanakan tugas kedinasan lain yang diberikan oleh pimpinan sesuai tugas dan fungsinya.</p>
                        

                        <p class="text-tf mb-3">Kepala Seksi Analisa Kebutuhan mempunyai tugas :</p>

                        <p class="text-tf mb-0">menyiapkan kegiatan penyusunan Rencana Kegiatan dan Anggaran Seksi Analisa Kebutuhan;</p>
                        <p class="text-tf mb-0">membagi tugas kepada bawahan;</p>
                        <p class="text-tf mb-0">membimbing bawahan dalam lingkup tanggungjawabnya;</p>
                        <p class="text-tf mb-0">memeriksa hasil kerja bawahan;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan penyusunan Sasaran Kerja Pegawai;</p>
                        <p class="text-tf mb-0">menyiapkan pelaksanaan koordinasi;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan penyusunan kebijakan Seksi Pengolahan Data Kemiskinan;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan penyusunan analisa kebutuhan prasarana dan sarana pemadaman kebakaran dan penyelamatan;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan penyusunan kajian standar operasional pengelolaan prasarana dan sarana penanggulangan kebakaran dan penyelamatan;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan pemeriksaan tingkat kecukupan, kelaikan dan ketepatan penggunaan prasarana dan sarana penanggulangan kebakaran dan penyelamatan;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan penyusunan kajian kelaikan prasarana dan sarana operasi pemadaman kebakaran dan penyelamatan;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan penyusunan data dan informasi Seksi Analisa Kebutuhan;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan pengelolaan dan pertanggungjawaban teknis keuangan Seksi Analisa Kebutuhan;</p>
                        <p class="text-tf mb-0">menyiapkan Penilaian kinerja pegawai dalam lingkup tanggungjawabnya;</p>
                        <p class="text-tf mb-0">menyiapkan monitoring dan evaluasi pelaksanaan kegiatan Seksi Analisa Kebutuhan;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan penyusunan laporan pelaksanaan kegiatan Seksi Analisa Kebutuhan; dan</p>
                        <p class="text-tf mb-5">melaksanakan tugas kedinasan lain yang diberikan oleh pimpinan sesuai tugas dan fungsinya.</p>
                        

                        <p class="text-tf mb-0">Bidang Pemberdayaan dan Partisipasi Masyarakat</p>
                        <p class="text-tf mb-5">Kepala Bidang Pemberdayaan dan Partisipasi Masyarakat mempunyai tugas merencanakan, mengkoordinasikan, membina, mengawasi dan mengendalikan serta mengevaluasi Seksi Informasi dan Publikasi, Seksi Ketahanan, dan Seksi Kerjasama dan Peningkatan Kapasitas.</p>

                        

                        <p class="text-tf mb-3">Bidang Pemberdayaan dan Partisipasi Masyarakat mempunyai fungsi :</p>

                        <p class="text-tf mb-0">perencanaan program, kegiatan dan anggaran;</p>
                        <p class="text-tf mb-0">pendistribusian tugas kepada bawahan;</p>
                        <p class="text-tf mb-0">pemberian petunjuk kepada bawahan;</p>
                        <p class="text-tf mb-0">penyeliaan tugas bawahan dalam lingkup tanggungjawabnya;</p>
                        <p class="text-tf mb-0">pelaksanaan kegiatan penyusunan Sasaran Kerja Pegawai;</p>
                        <p class="text-tf mb-0">pelaksanaan koordinasi dengan perangkat daerah lainnya dan instansi terkait;</p>
                        <p class="text-tf mb-0">pelaksanaan kegiatan penyusunan kebijakan di Bidang Pemberdayaan dan Partisipasi Masyarakat;</p>
                        <p class="text-tf mb-0">pelaksanaan kegiatan Seksi Informasi dan Publikasi, Seksi Ketahanan,dan Seksi Kerjasama dan Peningkatan Kapasitas;</p>
                        <p class="text-tf mb-0">pelaksanaan kegiatan penyusunan data dan informasi di Bidang Pemberdayaan dan Partisipasi Masyarakat;</p>
                        <p class="text-tf mb-0">pelaksanaan kegiatan pengelolaan dan pertanggungjawaban keuangan di bidang Pemberdayaan dan Partisipasi Masyarakat;</p>
                        <p class="text-tf mb-0">pelaksanaan penilaian kinerja Pegawai dalam lingkup tanggungjawabnya;</p>
                        <p class="text-tf mb-0">pelaksanaan monitoring dan evaluasi program dan kegiatan;</p>
                        <p class="text-tf mb-0">pelaksanaan penyusunan laporan program dan kegiatan; dan</p>
                        <p class="text-tf mb-5">pelaksanaan tugas kedinasan lain yang diberikan oleh pimpinan sesuai tugas dan fungsinya.</p>
                        

                        <p class="text-tf mb-0">Bidang Pemberdayaan dan Partisipasi Masyarakat, terdiri atas :</p>
                        <p class="text-tf mb-0">Seksi Informasi dan Publikasi;</p>
                        <p class="text-tf mb-0">Seksi Ketahanan; dan</p>
                        <p class="text-tf mb-5">Seksi Kerjasama dan Peningkatan Kapasitas.</p>
                        

                        <p class="text-tf mb-3">Kepala Seksi Informasi dan Publikasi mempunyai tugas :</p>

                        <p class="text-tf mb-0">menyiapkan kegiatan penyusunan Rencana Kegiatan dan Anggaran Seksi Informasi dan Publikasi;</p>
                        <p class="text-tf mb-0">membagi tugas kepada bawahan;</p>
                        <p class="text-tf mb-0">membimbing bawahan dalam lingkup tanggungjawabnya;</p>
                        <p class="text-tf mb-0">memeriksa hasil kerja bawahan;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan penyusunan Sasaran Kerja Pegawai;</p>
                        <p class="text-tf mb-0">menyiapkan pelaksanaan koordinasi;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan penyusunan kebijakan Seksi Informasi dan Publikasi;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan penyusunan bahan sosialisasi upaya penanggulangan kebakaran dan penyelamatan;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan pelayanan, analisis dan pelaksanaan tindak lanjut pengaduan masyarakat;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan pengelolaan website dan media sosial Dinas Pemadam Kebakaran;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan pengelolaan dokumentasi Dinas Pemadam Kebakaran;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan pelaksanaan publikasi pemberdayaan dan partisipasi masyarakat;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan penyusunan data dan informasi Seksi Informasi dan Publikasi;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan pengelolaan dan pertanggungjawaban teknis keuangan Seksi Informasi dan Publikasi;</p>
                        <p class="text-tf mb-0">menyiapkan Penilaian kinerja pegawai dalam lingkup tanggungjawabnya;</p>
                        <p class="text-tf mb-0">menyiapkan monitoring dan evaluasi pelaksanaan kegiatan Seksi Informasi dan Publikasi;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan penyusunan laporan pelaksanaan kegiatan Seksi Informasi dan Publikasi; dan</p>
                        <p class="text-tf mb-5">melaksanakan tugas kedinasan lain yang diberikan oleh pimpinan sesuai tugas dan fungsinya.</p>
                        

                        <p class="text-tf mb-3">Kepala Seksi Ketahanan mempunyai tugas :</p>

                        <p class="text-tf mb-0">menyiapkan kegiatan penyusunan Rencana Kegiatan dan Anggaran Seksi Ketahanan;</p>
                        <p class="text-tf mb-0">membagi tugas kepada bawahan;</p>
                        <p class="text-tf mb-0">membimbing bawahan dalam lingkup tanggungjawabnya;</p>
                        <p class="text-tf mb-0">memeriksa hasil kerja bawahan;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan penyusunan Sasaran Kerja Pegawai;</p>
                        <p class="text-tf mb-0">menyiapkan pelaksanaan koordinasi;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan penyusunan kebijakan Seksi Ketahanan;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan peningkatan ketahanan masyarakat Iingkungan terhadap bahaya kebakaran;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan fasilitasi pembentukan, pembinaan dan pengembangan serta pendataan sistem keselamatan kebakaran dan bencana yang berbasis lingkungan dan manajemen keselamatan kebakaran gedung;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan pembentukan dan pemberdayaan satuan relawan kebakaran;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan penyusunan data dan informasi Seksi Ketahanan;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan pengelolaan dan pertanggungjawaban teknis keuangan Seksi Ketahanan;</p>
                        <p class="text-tf mb-0">menyiapkan Penilaian kinerja pegawai dalam lingkup tanggungjawabnya;</p>
                        <p class="text-tf mb-0">menyiapkan monitoring dan evaluasi pelaksanaan kegiatan Seksi Ketahanan;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan penyusunan laporan pelaksanaan kegiatan Seksi Ketahanan; dan</p>
                        <p class="text-tf mb-5">melaksanakan tugas kedinasan lain yang diberikan oleh pimpinan sesuai tugas dan fungsinya.</p>
                        

                        <p class="text-tf mb-3">Kepala Seksi Kerjasama dan Peningkatan Kapasitas mempunyai tugas :</p>

                        <p class="text-tf mb-0">menyiapkan kegiatan penyusunan Rencana Kegiatan dan Anggaran Seksi Kerjasama dan Peningkatan Kapasitas;</p>
                        <p class="text-tf mb-0">membagi tugas kepada bawahan;</p>
                        <p class="text-tf mb-0">membimbing bawahan dalam lingkup tanggungjawabnya;</p>
                        <p class="text-tf mb-0">memeriksa hasil kerja bawahan;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan penyusunan Sasaran Kerja Pegawai;</p>
                        <p class="text-tf mb-0">menyiapkan pelaksanaan koordinasi;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan penyusunan kebijakan Seksi Kerjasama dan peningkatan kapasitas;</p>
                        <p class="text-tf mb-0">Menyiapkan kegiatan penyusunan rencana kebutuhan pengembangan dan peningkatan kapasitas;</p>
                        <p class="text-tf mb-0">menyiapkan penyusunan rencana kebutuhan sumberdaya aparatur pemadam kebakaran;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan penyusunan standar kompetensi petugas kebakaran;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan kerja sama pendidikan dan pelatihan keterampilan bagi aparatur pemadam kebakaran;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan pengembangan dan peningkatan kemampuan sumber daya manusia;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan bimbingan teknis petugas pemadam dan penyelamatan;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan penyusunan data dan informasi Seksi Kerjasama dan Peningkatan Kapasitas;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan pengelolaan dan pertanggungjawaban teknis keuangan Seksi Kerjasama dan Peningkatan Kapasitas;</p>
                        <p class="text-tf mb-0">menyiapkan Penilaian kinerja pegawai dalam lingkup tanggungjawabnya;</p>
                        <p class="text-tf mb-0">menyiapkan monitoring dan evaluasi pelaksanaan kegiatan Seksi Kerjasama dan Peningkatan Kapasitas;</p>
                        <p class="text-tf mb-0">menyiapkan kegiatan penyusunan laporan pelaksanaan kegiatan Seksi Kerjasama dan Peningkatan Kapasitas ; dan</p>
                        <p class="text-tf mb-5">melaksanakan tugas kedinasan lain yang diberikan oleh pimpinan sesuai tugas dan fungsinya.</p>
                </div>
            </div>
        </div>
    </section> -->
    <!-- =========== Tugas dan Fungsi End =========== -->


    <!-- =========== Dasar Hukum =========== -->
    <!-- <section class="pt-3 pb-4" style="font-family: sans-serif;">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 text-light mx-auto py-4" style="margin-bottom: 100px; border-radius: 25px; background-color: rgb(51, 33, 117);" >
                    <h1 class="text-center text-light fw-bold" style="margin-bottom: 80px;">Dasar Hukum</h1>
                    <h4 class="text-center text-light fw-bold" style="margin-bottom: 25px;">Peraturan Daerah</h4>
                    <div class="container col-10">
                        <p class="text-dh mb-4">PERDA No.2 Thn 1994 - Penanggulangan Kebakaran Tingkat II</p>
                        
                        <p class="text-dh mb-4">Tentang penanggulangan Kebakaran</p>
                        
                        <p class="text-dh mb-4">PERDA No.5 Thn 2009 - Bangunan Gedung 4</p>
                        
                        <p class="text-dh mb-4">Tentang Bangunan Gedung</p>
                        
                        <p class="text-dh mb-4">Peraturan Daerah nomor 14 tahun 2016</p>
                        
                        <p class="text-dh mb-4">Tentang Pembentukan dan Susunan Perangkat Daerah kota Semarang</p>
                        
                        <p class="text-dh mb-4">KEPMENTK No.186 Thn 1999 - Unit Penanggulangan Kebakaran</p>
                        
                        <p class="text-dh mb-4">Tentang Unit Penanggulangan Kebakaran</p>
                        
                        <p class="text-dh mb-4">Peraturan Menteri Pekerjaan Umum Nomor : 29/PRT/M/2006</p>
                        
                        <p class="text-dh mb-4">Tentang Pedoman Persyaratan Teknis Bangunan Gedung</p>
                        
                        <p class="text-dh mb-4">Peraturan Menteri Pekerjaan Umum Nomor : 24/PRT/M/2008</p>
                        
                        <p class="text-dh mb-4">Tentang Pedoman Pemeliharaan dan Perawatan Bangunan Gedung</p>
                        
                        <p class="text-dh mb-4">Peraturan Menteri Pekerjaan Umum Nomor : 25/PRT/M/2008</p>
                        
                        <p class="text-dh mb-4">Tentang Pedoman Teknis Penyusunan Rencana Induk Sistem Proteksi Kebakaran</p>
                        
                        <p class="text-dh mb-4">PERMEN No.26 Thn 2008 - Proteksi Kebakaran</p>
                        
                        <p class="text-dh mb-4">Tentang Proteksi Kebakaran</p>
                        
                        <p class="text-dh mb-4">Peraturan Menteri Dalam Negeri Nomor 16 Tahun 2009</p>
                        
                        <p class="text-dh mb-5">Tentang Standar Kualifikasi Aparatur Pemadam Kebakaran di Daerah</p>
                    </div>
                    <h4 class="text-center text-light fw-bold" style="margin-bottom: 25px;">Peraturan Menteri</h4>
                    <div class="container col-10">
                        <p class="text-dh mb-4">PERATURAN MENTERI PEKERJAAN UMUM NOMOR: 20/PRT/M/2009</p>
                        
                        <p class="text-dh mb-4">Tentang Pedoman Teknis Manajemen Proteksi Kebakaran di Perkotaan</p> 
                        
                        <p class="text-dh mb-4">Peraturan Menteri Pekerjaan Umum dan Perumahan Rakyat Nomor 05/PRT/M/2016</p>
                        
                        <p class="text-dh mb-4">Tentang Izin Mendirikan Bangunan Gedung</p>
                        
                        <p class="text-dh mb-4">PERMENDAGRI_114_TH_2018_</p>
                        
                        <p class="text-dh mb-4">Tentang Standar Teknis Pelayanan Dasar Pada Standar Pelayanan Minimal Sub Urusan Kebakaran Daerah Kabupaten/Kota</p>
                        
                        <p class="text-dh mb-4">Permendagri_No.13_Th_2019+Lampiran</p>
                        
                        <p class="text-dh mb-5">Tentang Pakaian Dinas Bagi Aparatur Sipil Negara Di Lingkungan Perangkat  Daerah yang Menyelenggarakan Sub Urusan Kebakaran</p>
                    </div>
                    <h4 class="text-center text-light fw-bold" style="margin-bottom: 25px;">Peraturan Walikota</h4>
                    <div class="container col-10">
                        <p class="text-dh mb-4">Peraturan Walikota Semarang Nomor 66 Tahun 2016</p>
                        
                        <p class="text-dh mb-4">Tentang Kedudukan, Susunan Organisasi, Tugas Dan Fungsi, Serta</p>

                        <p class="text-dh mb-4">Tata Kerja Dinas Pemadam Kebakaran Kota Semarang</p>
                        
                        <p class="text-dh mb-4">Peraturan_Walikota_nomor_27_tahun_2018</p>
                        
                        <p class="text-dh mb-5">Tentang Perubahan Tarif Retribusi Pemeriksaan Alat Pemadam Kebakaran di Kota Semarang</p>
                    </div>
                    <h4 class="text-center text-light fw-bold" style="margin-bottom: 25px;">Peraturan Pemerintah</h4>
                    <div class="container col-10">
                        <p class="text-dh mb-4">Peraturan Pemerintah Republik Indonesia Nomor 36 Tahun 2005</p>
                        
                        <p class="text-dh mb-5">Tentang Peraturan Pelaksanaan Undang-Undang Nomor 28 Tahun 2002 Tentang Bangunan Gedung</p>
                    </div>
                    <h4 class="text-center text-light fw-bold" style="margin-bottom: 25px;">Undang - Undang</h4>
                    <div class="container col-10">
                        <p class="text-dh mb-4">UU No.28 Thn 2002 - Bangunan Gedung</p>
                        
                        <p class="text-dh mb-5">Tentang Bangunan Gedung</p>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- =========== Dasar HUkum End =========== -->



    <!-- =========== Dasar Hukum =========== -->
    <section class="pt-3 pb-4" style="font-family: sans-serif;">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 text-light mx-auto py-4" style="margin-bottom: 100px; border-radius: 25px; background-color: rgb(51, 33, 117);" >
                    <h1 class="text-center text-light fw-bold" style="margin-bottom: 40px;">Landasan Hukum</h1>
                    <h5 class="text-center text-light fw-bold mx-auto" style="margin-bottom: 30px;">Rencana Strategis (RENSTRA) Dinas Pemadam Kebakaran disusun
                        berdasarkan aturan perundang-undangan. Dasar hukum penyusunan RENSTRA adalah sebagai berikut :</h5>
                    <div class="container col-10">
                        <p class="text-dh mb-4">1. Undang-Undang Nomor 29 Tahun 1959 tentang Pembentukan Daerah-Daerah Tingkat II di Sulawesi;</p>
                        
                        <p class="text-dh mb-4">2. Undang-Undang Nomor 28 Tahun 1999 tentang Penyelenggaraan Negara yang Bersih dan Bebas dari korupsi, Kolusi dan Nepotisme;</p>
                        
                        <p class="text-dh mb-4">3. Undang-Undang Nomor 28 Tahun 2002 Tentang Bangunan Gedung</p>
                        
                        <p class="text-dh mb-4">4. Undang-Undang Nomor 25 Tahun 2004 Tentang Sistem</p>
                        
                        <p class="text-dh mb-4">5. Perencanaan Pembangunan Nasional</p>
                        
                        <p class="text-dh mb-4">6. Undang-Undang Nomor 32 tahun 2004 tentang Pemerintahan Daerah (sebagaimana telah diubah terakhir kali dengan Undang-Undang Nomor 12 Tahun 2008)</p>
                        
                        <p class="text-dh mb-4">7. Undang-Undang Nomor 33 tahun 2004 tentang Perimbangan Keuangan Antara Pemerintah Pusat dan Pemerintahan Daerah</p>
                        
                        <p class="text-dh mb-4">8. Undang-Undang Nomor 17 Tahun 2007 Tentang Rencana</p>
                        
                        <p class="text-dh mb-4">9. Pembangunan Jangka Panjang Nasional Tahun 2005-2025</p>
                        
                        <p class="text-dh mb-4">10. Peraturan Pemerintah Nomor 36 Tahun 2005 Tentang Peraturan Pelaksanaan UU Nomor 28 Tentang Bangunan Gedung</p>
                        
                        <p class="text-dh mb-4">11. Peraturan Pemerintah Nomor 90 Tahun 2019 tentang Klasifikasi, Kodefikasi dan Nomenklatur Perencanaan Pembangunan dan Keuangan Daerah </p>
                        
                        <p class="text-dh mb-4">12. Peraturan Presiden Nomor 59 tahun 2017 tentang Pelaksanaan Pencapaian Tujuan Pembangunan Berkelanjutan</p>
                        
                        <p class="text-dh mb-4">13. Peraturan Presiden Nomor 99 Tahun 2020 tentang Pengadaan Vaksin dan Pelaksanaan Vaksinasi Dalam Rangka Penanggulangan Pandemi Corona Virus Desease 2019 (Covid -19).</p>
                        
                        <p class="text-dh mb-4">14. Peraturan Menteri Pekerjaan Umum Nomor 26 Tahun 2008 tentang Sistem Proteksi Kebakaran Gedung</p>
                        
                        <p class="text-dh mb-4">15. Peraturan Pemerintah Nomor 6 Tahun 2008 Tentang Pedoman Evaluasi Penyelenggaraan Pembangunan Daerah (Lembaran Negara Republik Indonesia Tahun 2008 Nomor 19, Tambahan Lembaran Negara Republik Indonesia Nomor 4815)</p>
                        
                        <p class="text-dh mb-4">16. Peraturan Pemerintah Republik Indonesia Nomor 8 Tahun 2008 Tentang Tahapan, Tata Cara Penyusunan, Pengendalian dan Evaluasi Pelaksanaan Rencana Pembangunan Daerah;</p>
                        
                        <p class="text-dh mb-4">17. Peraturan Menteri PU Nomor 20 Tahun 2009 tentang Manajemen Kebakaran Kota dan Gedung;</p>

                        <p class="text-dh mb-4">18. Peraturan Menteri Dalam Nomor 16 Tahun 2009 Standar Kualifikasi Aparatur Peraturan Pemadam Kebakaran</p>
                        
                        <p class="text-dh mb-4">19. Peraturan Menteri Dalam Negeri Nomor 54 Tahun 2010 tentang Pelaksanaan Peraturan Pemerintah Nomor 8 Tahun 2008 tentan Tahapan, Tata Cara Penyusunan, Pengendalian, dan Evaluasi Pelaksanaan Rencana Pembangunan Daerah</p>
                        
                        <p class="text-dh mb-4">20. Permen PU Nomor 25/PRT/M/2008 Tentang Pedoman Tehnis Penyusunan RISPK</p>

                        <p class="text-dh mb-4">21. Peraturan Menteri Dalam Negeri Nomor 86 Tahun 2017 tentang Tata Cara Perencanaan, Pengendalian dan Evaluasi Pembangunan Daerah, Tata Cara Evaluasi Rancangan Peraturan Daerah Tentang Rencana Pembangunan Jangka Panjang Daerah dan Rencana Pembangunan Jangka Menengah Daerah, serta Tata Cara Perubahan Rencana Pembangunan Jangka Panjang Daerah, Rencana Pembangunan Jangka Menengah Daerah dan Rencana Kerja Pemerintah Daerah;</p>
                        
                        <p class="text-dh mb-4">22. Peraturan Menteri Dalam Negeri Nomor 114 Tahun 2018 Tentang Standar Teknis Pelayanan Dasar pada Standar Pelayanan Minimal Sub Urusan Kebakaran Daerah Kabupaten/Kota</p>

                        <p class="text-dh mb-4">23. Peraturan Menteri Dalam Negeri Nomor 122 Tahun 2018 Tentang Standarisasi Sarana dan Prasarana Pemadam Kebakaran di Daerah;</p>
                        
                        <p class="text-dh mb-4">24. Peraturan Menteri Dalam Negeri Nomor 13 Tahun 2019 Tentang Pakaian Dinas Pemadam Kebakaran;</p>
                        
                        <p class="text-dh mb-4">25. Peraturan Daerah Nomor 4 Tahun 2016 tentang Pembentukan dan Susunan Organisasi Perangkat Daerah Kabupaten Minahasa;</p>

                        <p class="text-dh mb-4">26. Peraturan Daerah Kabupaten Minahasa Nomor 1 Tahun 2009 Tentang Rencana Pembangunan Jangka Panjang Daerah Kabupaten Minahasa Tahun 2008-2028</p>
                        
                        <p class="text-dh mb-4">27. Peraturan Daerah Nomor 1 Tahun 2019 tentang Rencana Pembangunan Jangka Menengah Daerah (RPJMD) Kabupaten Minahasa Tahun 2018-2023</p>
                        
                        <p class="text-dh mb-4">28. Peraturan Daerah Nomor Tahun 2021 tentang Perubahan Atau Peraturan Daerah Kabupaten Minahasa No. 1 Tahun 2019 tentang Rencana Pembangunan Jangka Menengah Daerah Kabupaten Minahasa Tahun 2018-2023</p>

                        <p class="text-dh mb-4">29. Peraturan Bupati Minahasa Nomor 57 Tahun 2016 Tentang Struktur Organisasi Dan Tata Kerja Dinas Pemadam Kebakaran (Berita Daerah Kabupaten Minahasa Tahun 2016 Nomor 75).</p>
                        
                        <p class="text-dh mb-4"></p>

                        <p class="text-dh mb-4"></p>
                        
                        <p class="text-dh mb-4"></p>
                        
                        <p class="text-dh mb-4"></p>

                        <p class="text-dh mb-4"></p>
                        
                        <p class="text-dh mb-4"></p>
                        
                        <p class="text-dh mb-4"></p>

                        <p class="text-dh mb-4"></p>
                        
                        <p class="text-dh mb-4"></p>
                        
                        <p class="text-dh mb-4"></p>
                </div>
            </div>
        </div>
    </section>
    <!-- =========== Dasar HUkum End =========== -->



    <!-- ========== footer ========== -->
        <div class="container-fluid bg-light">
            <footer class="footer py-5 " style="font-family: sans-serif;">
                <div class="row">
                    <div class="justify-content-between col-12 col-md-4 mb-3">
                        <div class="row">
                            <a class="navbar-brand navbar-dark d-flex p-0 align-items-center text-dark w-75 fs-5 ms-sm-3 col-6 col-md-4 me-6 mb-4" href=""></svg><img class="logo-darmisa text-dark" src="./image/logo-seal.jpeg" alt="" title="Social Economic Accelerator Lab"><span class="fw-bold mx-4" title="DarMisa">DarMisa</span></a>
                        </div>
                        
                        <p class="mb-4">Damkar Information And Reporting Website</p>
                        <p class="fw-bold mb-1">Follow Us</p>
                        <ul class="nav list-unstyled">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"></a></li>
                            <li class=""><a class="text-muted mb-2" href="#"><i class="bi bi-facebook" title="facebook"></i></a></li>
                            <li class="ms-2"><a class="text-muted mb-1" href="#"><i class="bi bi-whatsapp" title="Whatsapp"></i></a></li>
                            <li class="ms-2"><a class="text-muted mb-1" href="#"><i class="bi bi-instagram" title="instagram"></i></a></li>
                            <li class="ms-2"><a class="text-muted mb-1" href="#"><i class="bi bi-youtube" title="Youtube"></i></a></li>
                        </ul>
                    </div>
          
                    <div class="justify-content-center col-12 col-md-4 mb-3">
                        <h5 class="mb-4">Contact Us</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted lh-lg mb-3 me-4"><i class="bi bi-geo-alt"></i> 8W77+JJ, Kembuan, Kec. Tondano Utara, Kabupaten Minahasa, Sulawesi utara</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted mb-3"><i class="bi bi-telephone"></i> (0431) 321001</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><i class="bi bi-envelope"></i> darmisa@gmail.com</a></li>
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
                        <form>
                        <h5 class="mb-4">Critism And Suggestion</h5>
                            <div class="d-flex flex-column flex-sm-row list-unstyled w-100 gap-2">
                                <label for="newsletter1" class="visually-hidden">comment</label>
                                <input type="text" class="footer-form text-center" style="border-radius: 25px 0 0 25px;" placeholder="Text Here">
                                <button class="btn btn-white bg-dark text-white" style="border-radius: 0 25px 25px 0; margin-left: -10px;" type="button"><a class="text-muted mb-2" href="#"></a><i class="bi bi-send"></i></button>
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