<!--!DOCTYPE html>
<html lang="en"-->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JAPERA - Solusi untuk Sarang Serangga</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/styles/styles.css">
    <link rel="stylesheet" href="/styles/admin-logistik-styles.css">
    
</head>
<body>
    <div class="sideMenu sideMenu-hover">
        <img class="logo" src="/images/Logo-JAPERA.png" alt="Logo-JAPERA">
        <a href="admin-index.php">Beranda</a>
        <a class="menu-pilihan" href="admin-logistik.php">Kelola Logistik</a>
        <a href="admin-keluhan.php">Keluhan Masuk</a>

        <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
        <a href="">
            <img src="/images/exit-icon.png" alt="exit" class="exit-button">
            Keluar
        </a>
        
    </div>

    <div class="content">
        <h1>Daftar Kebutuhan Logistik</h1>

        <div class="table-content">
            <table>
                <tr>
                    <th>No.</th>
                    <th>Barang</th>
                    <th>Jumlah</th>
                    <th>Total Harga</th>
                </tr>

                <tr>
                    <td>1</td>
                    <td>Cairan antirayap</td>
                    <td>10pc</td>
                    <td>Rp500.000</td>
                </tr>

                <tr>
                    <td>2</td>
                    <td>Cairan antirayap</td>
                    <td>10pc</td>
                    <td>Rp500.000</td>
                </tr>

                <tr>
                    <td>3</td>
                    <td>Cairan antirayap</td>
                    <td>10pc</td>
                    <td>Rp500.000</td>
                </tr>

                <tr>
                    <td>4</td>
                    <td>Cairan antirayap</td>
                    <td>10pc</td>
                    <td>Rp500.000</td>
                </tr>
            </table>

            <h3>Total Harga: Rp2.000.000</h3>

            <br> <br>

            <h3>Form Menambah Kebutuhan</h3> <br>
            <form action="admin-logistik.php">
                <label for="nama-barang">Nama Barang: </label>
                <input type="text"> <br> <br>
                <label for="jumlah">Jumlah Barang: </label>
                <input type="text"> <br> <br>
                <label for="jumlah">Harga Barang: </label>
                <input type="text"> <br> <br> <br> <br>
                <input type="submit" class="submit-button submit-button-hover" value="TAMBAHKAN KEBUTUHAN">
            </form>
        </div>
    </div>

    <div class="footer">
        <img class="footer-logo" src="/images/Logo-JAPERA.png" alt="Logo-JAPERA">
        <div class="footer-kontak">
            <p>Teknik Kimia</p>
            <p>Highway ITS, Sukolilo, Surabaya 60111</p>
            <p>Fax : +62-31-5939363</p>
            <p>Email : cs@japera.com</p>
        </div>
        <div class="footer-kontak">
            <p>Ikuti kami melalui media sosial</p>
            <img src="/images/Instagram.png" alt="instagram">
            <img src="/images/Tiktok.png" alt="tiktok">
            <img src="/images/Facebook.png" alt="facebook">
        </div>
        <br> <br> <br> <br>
    </div>


</body>
</html>