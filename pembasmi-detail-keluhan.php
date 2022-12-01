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
    <link rel="stylesheet" href="/styles/pembasmi-detail-keluhan-styles.css">
    
</head>
<body>
    <div class="sideMenu sideMenu-hover">
        <img class="logo" src="/images/Logo-JAPERA.png" alt="Logo-JAPERA">
        <a href="admin-index.php">Beranda</a>
        <a href="admin-logistik.php">Kelola Logistik</a>
        <a class="menu-pilihan"  href="admin-keluhan.html">Keluhan Masuk</a>

        <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
        <a href="">
            <img src="/images/exit-icon.png" alt="exit" class="exit-button">
            Keluar
        </a>
        
    </div>

    <div class="content">
        <h1>Detail Keluhan</h1>

        <div class="section-1">
            <img src="/images/Rayap.png" alt="Rayap">
            <div class="detail-1">
                <h3 class="judul-pembasmian">Pembasmian Sarang Rayap</h3>
                <p><b>ID:   </b>#####</p>
                <p><b>Keluhan dibuat:   </b>10 September 2022</p>
                <p><b>Estimasi pembasmian hingga:   </b>10 Oktober 2022</p>
                <p><b>Jenis Tempat: </b>Rumah</p>
            </div>
        </div>

        <div class="section-2">
            <h3>Foto Sarang:</h3>
            <img src="/images/sarang-rayap.png" alt="Sarang rayap">
        </div>

        <hr>

        <div class="section-3">
            <h3>STATUS:</h3>
            <p>Keluhan Baru</p>
            
            <br>

            <h3>Koordinator Tim </h3>
            <form action="admin-keluhan.php">
                <select id="nama-koordinator" name="nama-koordinator">
                  <option value="John Lorem">John Lorem</option>
                  <option value="Jane Lorem">Jane Lorem</option>
                  <option value="fiat">Fiat</option>
                  <option value="audi">Audi</option>
                </select>
                <br> <br> <br>
                <input type="submit" class="submit-button submit-button-hover" value="BERIKAN PEKERJAAN KEPADA KOORDINATOR">
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