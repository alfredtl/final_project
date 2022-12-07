<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./dist/css/login.css">

    <!-- icon bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="/docs/5.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    

</head>
<body>

<!-- METODE POST TIDAK AKAN MENAMPILKAN INPUT DI URL -->
<!-- METODE GET AKAN MENAMPILKAN INPUT DI URL -->

<section class="vh-150" style="background-color: #eee;">
    <div class="container py-5 h-150">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-lg-9 col-xl-7">
                <div class="card rounded-3">
                    <div class="card-body p-4">
                        <div class="img col-lg-12 col-sm-12 col-12">
                            <img src="./image/logo-pemadam3.png" class="logo-pemadam w-25 "  alt="">
                        </div>
                    <h4 class="text-center mt-2 mb-3">Login</h4>
                    
<!-- tampil-pesan-aman-gambar ======= dapat diubah-ubah-->
<!-- enctype="multipart/form-data ======= adalah untuk mengupload file" -->

                        <form action="./dist/php/login.php?p=pesan" method="POST" enctype="multipart/form-data">
                            <section class="contact">
                                <div class="container">
                                    <div class="row">
                                        <div class="contact-form">
                                            <div class="row">
                                                <div class="form-item col-12 padd-15 mb-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="nama" placeholder="Name" >
                                                    </div>
                                                </div>
                                                <div class="form-item col-12 padd-15 ">
                                                    <div class="form-group">
                                                        <input type="password" class="form-control" name="password" placeholder="Password" >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="dropdownCheck">
                                                    <label class="form-check-label" for="dropdownCheck">
                                                        Remember me
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-item text-center col-12 padd-15">
                                                    <button type="submit" class="btn w-100 rounded">Login</button>
                                                    <div class="btn-back rounded mb-3"> 
                                                        <a href="./index.php" class="btn-back w-100 list-unstyled text-decoration-none">Back</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <!-- <div class="contact-form">
                                <div class="form-item">
                                    <div class="form-group mb-3">
                                        <input type="text" class="form-control" id="exampleFormControlInput1" name="nama" placeholder="name@example.com">
                                    </div>
                                </div>
                                <div class="contact-form">
                                    <div class="form-group mb-3">
                                        <input type="password" class="form-control" id="exampleFormControlTextarea1" name="password" rows="3"></textarea>
                                    </div>
                                </div>
                                File Upload :
                                <input type="file" name="berkas">
                                <input type="submit" name="kirim" value="submit">
                            </div> -->
                            
                            <p class="text-center mb-1">Dinas Pemadam Kebakaran</p>
                        </form>
                    </div>
                </div>
            </div>
        </div>  
    </div>
</section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
    <script src="./assets/js/core/bootstrap.min.js" type="text/javascript"></script>
    <script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>

</body>
</html>
