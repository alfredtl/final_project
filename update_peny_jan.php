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
    $sql = "SELECT * FROM penyelamatan_januari WHERE id='$id'";

    if ($result = mysqli_query($con, $sql)) {
        // echo "<br>data tersedia";
        while($user_data = mysqli_fetch_assoc($result)) {
            $tanggal = $user_data['tanggal'];
            $peny_hwn_brbisa = $user_data['peny_hwn_brbisa'];
            $peny_eva = $user_data['peny_eva'];
            $peny_lain = $user_data['peny_lain'];
            $pemilik = $user_data['pemilik'];
            $almt_pemilik = $user_data['almt_pemilik'];
            $no_hp = $user_data['no_hp'];
            $jmlh_unit = $user_data['jmlh_unit'];
            $jns_objk_eva = $user_data['jns_objk_eva'];
            $hsl_plksnn = $user_data['hsl_plksnn'];
            $ket = $user_data['ket'];
        }
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }

    mysqli_close($con);


    
}

if (isset($_POST['submit'])){
    //var_dump($_POST);
    $tanggal = $_POST['tanggal'];
    $peny_hwn_brbisa = $_POST['peny_hwn_brbisa'];
    $peny_eva = $_POST['peny_eva'];
    $peny_lain = $_POST['peny_lain'];
    $pemilik = $_POST['pemilik'];
    $almt_pemilik = $_POST['almt_pemilik'];
    $no_hp = $_POST['no_hp'];
    $jmlh_unit = $_POST['jmlh_unit'];
    $jns_objk_eva = $_POST['jns_objk_eva'];
    $hsl_plksnn = $_POST['hsl_plksnn'];
    $ket = $_POST['ket'];

    // Buat koneksi dengan MySQL
    $con = mysqli_connect("localhost","root","","db_berita");

    // Check connection
    // if (mysqli_connect_errno()) {
    //     echo "Failed to connect to MySQL: " . mysqli_connect_error();
    //     exit();
    // }else{
    //     echo '<br>koneksi berhasil';
    // }

    $sql = "UPDATE penyelamatan_januari SET tanggal='$tanggal', peny_hwn_brbisa='$peny_hwn_brbisa', peny_eva='$peny_eva', peny_lain='$peny_lain', 
    pemilik='$pemilik', almt_pemilik='$almt_pemilik', no_hp='$no_hp', jmlh_unit='$jmlh_unit', jns_objk_eva=''$jns_objk_eva, hsl_plksnn='$hsl_plksnn', 
    ket='$ket'  WHERE id='$id' ";

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
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- icon bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

</head>
<body style="background-color: #f2f2fc;">


    <section class="vh-2" style="padding-bottom: 80px; background-color: #eee;">
        <div class="container py-1 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100 mt-5">
                <div class="col col-lg-9 col-xl-7">
                    <div class="card rounded-3">
                        <div class="card-body p-4">
                            <h2>UPDATE PENYELAMATAN JANUARI</h2>

                            <?php if(isset($_GET['id'])): ?>
                            <form action="" method="post" enctype="multipart/form-data">

                                <label for="exampleFormControlInput1" class="form-label mt-3">Hari/Tanggal :</label>
                                <input type="text" name="tanggal" class="form-control mb-3" value="<?php echo $tanggal; ?>">

                                <label for="exampleFormControlInput1" class="form-label">Penyelamatan Hewan Berbisa :</label>
                                <input type="text" name="peny_hwn_brbisa" class="form-control mb-3" value="<?php echo $peny_hwn_brbisa; ?>">

                                <label for="exampleFormControlInput1" class="form-label">Penyelamatan Evakuasi :</label>
                                <input type="text" name="peny_eva" class="form-control mb-3" value="<?php echo $peny_eva; ?>">

                                <label for="exampleFormControlInput1" class="form-label">Penyelamatan Lain-lain :</label>
                                <input type="text" name="peny_lain" class="form-control mb-3" value="<?php echo $peny_lain; ?>">

                                <label for="exampleFormControlInput1" class="form-label">Pemilik :</label>
                                <input type="text" name="pemilik" class="form-control mb-3" value="<?php echo $pemilik; ?>">

                                <label for="exampleFormControlInput1" class="form-label">Alamat Pemilik :</label>
                                <input type="text" name="almt_pemilik" class="form-control mb-3" value="<?php echo $almt_pemilik; ?>">

                                <label for="exampleFormControlInput1" class="form-label">No.HP Pengguna Layanan :</label>
                                <input type="text" name="no_hp" class="form-control mb-3" value="<?php echo $no_hp; ?>">

                                <label for="exampleFormControlInput1" class="form-label">Jumlah Unit :</label>
                                <input type="text" name="jmlh_unit" class="form-control mb-3" value="<?php echo $jmlh_unit; ?>">

                                <label for="exampleFormControlInput1" class="form-label">Jenis Objek Evakuasi :</label>
                                <input type="text" name="jns_objk_eva" class="form-control mb-3" value="<?php echo $jns_objk_eva; ?>">

                                <label for="exampleFormControlInput1" class="form-label">Hasil Pelaksanaan :</label>
                                <input type="text" name="hsl_plksnn" class="form-control mb-3" value="<?php echo $hsl_plksnn; ?>">

                                <label for="exampleFormControlInput1" class="form-label">Keterangan :</label>
                                <input type="text" name="ket" class="form-control mb-3" value="<?php echo $ket; ?>">

                                <div class="row justify-content-between">
                                    <a href="./data-kebakaran.php" class="btn btn-success col-md-4 col-sm-12" style="width: 90px;">Kembali</a>
                                    <input class="btn btn-danger ms-2 col-md-4 col-sm-12" style="width: 90px;" type="reset" name="submit" value="Reset">
                                    <input class="btn btn-primary ms-2 col-md-4 col-sm-12" style="width: 90px;" type="submit" name="submit" value="Submit">
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