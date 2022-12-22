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

    // TABEL JUMLAH KONDISI ARMADA
    $sql = "SELECT * FROM jumlah_kondisiarmada WHERE id='$id'";

    if ($result = mysqli_query($con, $sql)) {
        // echo "<br>data tersedia";
        while($data = mysqli_fetch_assoc($result)) {
            $jenis = $data['jenis'];
            $jumlah = $data['jumlah'];
            $kondisi_baik = $data['kondisi_baik'];
            $kondisi_layak = $data['kondisi_layak'];
            $kondisi_rusak = $data['kondisi_rusak'];
            $diharapkan = $data['diharapkan'];
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
    $jenis = $_POST['jenis'];
    $jumlah = $_POST['jumlah'];
    $kondisi_baik = $_POST['kondisi_baik'];
    $kondisi_layak = $_POST['kondisi_layak'];
    $kondisi_rusak = $_POST['kondisi_rusak'];
    $diharapkan = $_POST['diharapkan'];

    // Buat koneksi dengan MySQL
    $con = mysqli_connect("localhost","root","","db_berita");

    // Check connection
    // if (mysqli_connect_errno()) {
    //     echo "Failed to connect to MySQL: " . mysqli_connect_error();
    //     exit();
    // }else{
    //     echo '<br>koneksi berhasil';
    // }

    $sql = "UPDATE jumlah_kondisiarmada SET jenis='$jenis',jumlah='$jumlah',kondisi_baik='$kondisi_baik',kondisi_layak='$kondisi_layak',
    kondisi_rusak='$kondisi_rusak', diharapkan='$diharapkan' WHERE id='$id' ";

    if (mysqli_query($con, $sql)) {
        echo "<br>Data berhasil diupdate";
        // kalau berhasil pake perintah redirect kembali ke halaman berita.php
   
        // kembali ke halaman sebelumnya
        header("Location: ./personil.php", TRUE, 301);
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
    <title>Update Data Jumlah Kondisi Armada</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- icon bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
<body style="background-color: #f2f2fc;">

    <section style="margin-bottom: 100px;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-50">
                <div class="col col-lg-9 col-xl-7">
                    <div class="card shadow rounded-3 mt-5 mb-5">
                        <div class="card-body p-4">
                            <h2 class="text-center">UPDATE JUMLAH KONDISI ARMADA</h2>

                            <?php if(isset($_GET['id'])): ?>
                            <form action="" method="post" enctype="multipart/form-data">

                                <label for="exampleFormControlInput1" class="form-label mt-3">Jenis :</label>
                                <input type="text" name="jenis" class="form-control mb-3" value="<?php echo $jenis; ?>">

                                <label for="exampleFormControlInput1" class="form-label">Jumlah (unit/buah) :</label>
                                <input type="text" name="jumlah" class="form-control mb-3" value="<?php echo $jumlah; ?>">

                                <label for="exampleFormControlInput1" class="form-label">Kondisi baik :</label>
                                <input type="text" name="kondisi_baik" class="form-control mb-3" value="<?php echo $kondisi_baik; ?>">

                                <label for="exampleFormControlInput1" class="form-label">Kondisi Rusak Ringan/Layak Pakai :</label>
                                <input type="text" name="kondisi_layak" class="form-control mb-3" value="<?php echo $kondisi_layak; ?>">

                                <label for="exampleFormControlInput1" class="form-label">link foto :</label>
                                <input type="text" name="kondisi_rusak" class="form-control mb-3" value="<?php echo $kondisi_rusak; ?>">

                                <label for="exampleFormControlInput1" class="form-label">Jumlah Yang Diharapkan (unit/buah) :</label>
                                <input type="text" name="diharapkan" class="form-control mb-3" value="<?php echo $diharapkan; ?>">

                                <div class="row justify-content-end mt-5">
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