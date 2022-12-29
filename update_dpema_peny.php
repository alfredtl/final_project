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

    // TABEL diagram_pema_peny
    $sql = "SELECT * FROM diagram_pema_peny WHERE id='$id'";

    if ($result = mysqli_query($con, $sql)) {
        // echo "<br>data tersedia";
        while($data = mysqli_fetch_assoc($result)) {
            $photo_link = $data['photo_link'];
        }
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
    //echo print_r($data);
    //die();
    mysqli_close($con);

}

if (isset($_POST['submit'])){
    //var_dump($_POST);
    $photo_link = $_POST['photo_link'];

    // Buat koneksi dengan MySQL
    $con = mysqli_connect("localhost","root","","db_berita");

    // //Check connection
    // if (mysqli_connect_errno()) {
    //     echo "Failed to connect to MySQL: " . mysqli_connect_error();
    //     exit();
    // }else{
    //     echo '<br>koneksi berhasil';
    // }

    $sql = "UPDATE diagram_pema_peny SET photo_link='$photo_link' WHERE id='$id'";

    if (mysqli_query($con, $sql)) {
        echo "<br>Data berhasil diupdate";
        // kalau berhasil pake perintah redirect kembali ke halaman personil.php
   
        // kembali ke halaman sebelumnya
        header("Location: ./home.php", TRUE, 301);
        exit();

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
    <title>Update Data</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- icon bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

</head>
<body style="background-color: #f2f2fc;">

    <section class="vh-2" style="padding-bottom: 100px;">
        <div class="container py-1 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-lg-9 col-xl-7">
                    <div class="card shadow rounded-3 mt-5">
                        <div class="card-body p-4">
                            <h2>DATA PEMADAMAN DAN PENYELAMATAN</h2>

                            <?php if(isset($_GET['id'])): ?>
                            <form action="" method="post" enctype="multipart/form-data">

                                <label for="exampleFormControlInput1" class="form-label mt-3">Link Foto :</label>
                                <input type="text" name="photo_link" class="form-control mb-3" value="<?php echo $photo_link; ?>">

                                <div class="row justify-content-start mt-5">
                                    <input class="btn btn-danger me-3 col-md-4 col-sm-12" style="width: 90px;" type="reset" name="submit" value="Reset">
                                    <input class="btn btn-primary me-2 col-md-4 col-sm-12" style="width: 90px;" type="submit" name="submit" value="Submit">
                                </div>
                                    
                                    
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