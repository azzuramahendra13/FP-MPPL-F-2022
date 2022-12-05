<?php

session_start();
//require 'functions.php';

if ( !isset($_SESSION["login"]) ) {
    //header("Location:login.php");
    //exit;
}

$it = 1;
$data = $_SESSION["data_tiket_keluhan"];
$tiket_ID = $data["ID"];
$result_biaya_layanan = mysqli_query($conn, "SELECT * FROM biayalayanan WHERE tiket_ID = '$tiket_ID'");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Detail Keluhan</title>
    <style>
        *{
            /* border: 1px solid red; */
        }

        h1, h2, h3, h4, h5, h6, p, a, td, th {
            text-decoration: none;
            color: white;
            font-family: 'Poppins', sans-serif;
        }

        table, td, th {
            border-collapse: collapse;
            padding: 10px;
        }

        table {
            margin-bottom: 5%;
            margin-left: auto;
            margin-right: auto;
        }

        th {
            background-color: #B48944;
        }

        td {
            color: #544021;
        }

        tr {
            border: 1px solid gray;
        }
    </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg fixed-top" style="background-color: #7E643A;">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="images/j2.png" alt="Bootstrap" width="122" height="30" style="margin:10px 100px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="keluhanku.php" style="margin-left: 30px;">Keluhanku</a>
                    </li>
                </ul>
                <div class="dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:#7E643A;">
                        <img src="images/person.png" alt="" width="50" height="50" style="margin:0px 100px">
                    </a>
                    <ul class="dropdown-menu">
                        <li> <a class="dropdown-item" href="myprofile.php">My Profile</a></li>
                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                    </ul>    
                </div>
            </div>
        </div>
    </nav>
<!-- END NAVBAR -->

<!-- body -->
    <div class="body"style="margin: 5rem;">
        <h1 class="d-flex justify-content-center" style="margin:115px 0 35px 0; color:#544021;">Detail Keluhan</h1>

        <div class="container overflow-hidden text-center" style="margin-top: 100px;">
            <div class="row gy-5">
                <div class="col-6">
                    <img class="col-6" src="images/Rayap.png" alt="" width="50px">
                </div>
                <div class="col-6 d-flex align-items-center" style="margin-left: -80px; width: 55%;">
                    <div>
                    <!-- <div class="p-3 border bg-light"> -->
                        <h3 class="d-flex justify-content-start" style="margin:0 0 0 0; color:#544021;">Pembasmian Sarang Rayap</h3><br> 
                        <table>
                            <td>
                                <tr>
                                    
                                    <div class="col d-flex align-items-end">
                                        <div class="row">
                                            <h4 class="d-flex justify-content-start" style="margin:0 0 0 0; color:#544021; font-weight:bold;">ID :&nbsp</h4>
                                        </div>
                                        <div class="row">
                                            <p class="d-flex justify-content-center" style="font:24px Poppins, sans-serif; margin:0 0 0 0; color:#544021;">120974832</p>
                                        </div>
                                    </div>
                                </tr>
                                <tr>

                                    <div class="col d-flex align-items-end">
                                        <div class="row">
                                            <h4 class="d-flex justify-content-start" style="margin:0 0 0 0; color:#544021; font-weight:bold;">Keluhan Dibuat :&nbsp</h4>
                                        </div>
                                        <div class="row">
                                            <p class="d-flex justify-content-center" style="font:24px Poppins, sans-serif; margin:0 0 0 0; color:#544021;">10 September 2022</p>
                                        </div>
                                    </div>
                                </tr>
                                <tr>

                                    <div class="col d-flex align-items-end">
                                        <div class="row">
                                            <h4 class="d-flex justify-content-start" style="margin:0 0 0 0; color:#544021; font-weight:bold;">Estimasi Pembasmian hingga :&nbsp</h4>
                                        </div>
                                        <div class="row">
                                            <p class="d-flex justify-content-center" style="font:24px Poppins, sans-serif; margin:0 0 0 0; color:#544021;">10 Oktober 2022</p>
                                        </div>
                                    </div>
                                </tr>
                                <tr>

                                    <div class="col d-flex align-items-end">
                                        <div class="row">
                                            <h4 class="d-flex justify-content-start" style="margin:0 0 0 0; color:#544021; font-weight:bold;">Jenis Tempat :&nbsp</h4>
                                        </div>
                                        <div class="row">
                                            <p class="d-flex justify-content-center" style="font:24px Poppins, sans-serif; margin:0 0 0 0; color:#544021;">Rumah</p>
                                        </div>
                                    </div>
                                </tr>

                            </td>
                        </table>
                    </div>
                </div>
                <div class="col-6">
                    <h3 style="color:#544021; font-weight:bold; margin-top: 50px;">Foto Sarang : </h3>
                </div>
                <img src="images/sarang.png" alt="" style="width: 500px; text-align: center; margin-top: 100px;">
                
            </div>
        </div>

        <br><br><br><hr><br><br>

        <h3 class="d-flex justify-content-center" style="margin:0 0 0 0; color:#544021;">Status :</h3><br> 
        <p class="d-flex justify-content-center" style="font:24px Poppins, sans-serif; margin:0 0 0 0; color:#E5CC47;">Dalam Proses Pembasmian</p><br><br>   

        <h3 class="d-flex justify-content-center" style="margin:0 0 0 0; color:#544021;">Koordinator Tim Pembasmi :</h3><br> 
        <p class="d-flex justify-content-center" style="font:24px Poppins, sans-serif; margin:0 0 0 0; color:#544021;">John Lorem (+621218998121)</p><br><br>    

        
        <h3 class="d-flex justify-content-center" style="margin:0 0 0 0; color:#544021;">Rincian Biaya Pembasmian :</h3><br><br>
        
        <table class="d-flex justify-content-center">
            <tr>
                <th>No.</th>
                <th>Barang</th>
                <th>Jumlah</th>
                <th>Total Harga</th>
            </tr>
            
            <?php
                
                while($row = mysqli_fetch_assoc($result_biaya_layanan)) {
                    echo "<tr>";
                    echo "  <td>".$it."</td>";
                    $it = $it + 1;
                    echo "  <td>".$row["nama"]."</td>";
                    echo "  <td>".$row["jumlah"]."</td>";
                    echo "  <td>".$row["total_harga"]."</td>";
                    echo "</tr>";    
                }
            ?>
        </table>

        <!--div class="d-flex justify-content-center">
            <img src="img/rincian.png" alt="" height="275px">
        </div-->
    </div>
<!-- body     -->

<!-- footer -->
<div class="row text-white" style="background-color:#7E643A; padding:50px 150px; margin-top:1.5rem;">
        <div class="col">
            <img src="images/Logo-JAPERA.png" alt="" style="width: 200px; margin-left: 20px;">
        </div>
        <div class="col">
            <h6 style="font-weight:250;">Teknik Kimia Street</h6>
            <h6 style="font-weight:250;">Highway ITS, Sukolilo, Surabaya 60111</h6>
            <h6 style="font-weight:250;">Fax : +62-31-5939363</h6>
            <h6 style="font-weight:250;">email : cs@japera.com</h6>
        </div>
        <div class="col" style="margin-right:-250px">
                
                <p>Ikuti kami melalui media sosial:</p>

                <img src="images/Instagram.png" alt="">
                <img src="images/Tiktok.png" alt="" style="margin:0 55px">
                <img src="images/Facebook.png" alt="">

        </div>
    </div>
<!-- end footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
</html>