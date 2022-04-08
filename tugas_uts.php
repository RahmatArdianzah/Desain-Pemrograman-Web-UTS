<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            Rahmat Ardianzah MI-1F
        </title>
        <link rel="stylesheet" type="text/css" href="web.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <!--Bagian Header-->
        <header>
            <a href="tugas_uts.html" class="logo"><i class="fas fa-utensils"></i>warteg's</a>

            <div id="menu-bar" class="fas fa-bars"></div>

            <nav class="navbar">
                <a href="#home">Home</a>
                <a href="daftar.php">Biodata</a>
                <a href="#gallery">Profil</a>
                <a href="#pemesanan">Pesanan</a>
            </nav>
        </header>
        <!--Bagian landing page-->
        <section class="home" id="home">
            <div class="image">
                <img src="img/ghome.png" alt="">
            </div>
            <div class="content">
                <h3>Hai, Selamat datang</h3>
                <p>
                    warteg's menawarkan berbagai macam menu masakan rumahan.
                    Kamu dapat memilih beberapa paket dan bertransaksi dengan mudah di dalam menu transaksi!
                    Tunggu apa lagi? Yuk segera pesan!
                </p>
                <a href="#pemesanan" class="btn">pesan sekarang</a>
            </div>
        </section>
        <!--Bagian Menu-->
        <section class="gallery" id="gallery">
            <h1>Menu <a class="logo-menu"><i class="fas fa-utensils"></i>warteg's</a></h1>
        
            <div class="box-container">
                <div class="box">
                    <img src="img/gambar2.jpg" alt="">
                    <div class="content">
                        <h3>PAKET 1</h3>
                        <p>nasi padang free es teh <br>Rp. 22.000</p>
                        <!--<a href="#" class="btn">order now</a>-->
                    </div>
                </div>
                <div class="box">
                    <img src="img/gambar3.jpg" alt="">
                    <div class="content">
                        <h3>PAKET 2</h3>
                        <p>nasi lalapan ayam free es teh <br>Rp. 20.000</p>
                        <!--<a href="#" class="btn">order now</a>-->
                    </div>
                </div>
                <div class="box">
                    <img src="img/gambar4.jpeg" alt="">
                    <div class="content">
                        <h3>PAKET 3</h3>
                        <p>nasi lalapan lele free es teh <br>Rp. 18.000</p>
                        <!--<a href="#" class="btn">order now</a>-->
                    </div>
                </div>
                <br><br><br>
                <br><br>
            </div>
        </section>
        <br>
        <!--Pemesanan-->
        <div class="container-pesan">
            <section id="pemesanan">
                <div class="pemesanan-form be-primary p-2">
                    <h1 class="m-heading">pemesanan.</h1>
                    <form class="form" action="#tampil-jumlah" method="post">
                        <label class="teks" >Nama </label>
                        <input class="inputan" type="text" name="nama" placeholder="Nama"><br><br>
                        <label class="teks">Status Pembeli </label>
                        <select class="inputan" name="status">
                            <option value="Member">Member</option>
                            <option value="Non-member">Non-Member</option>
                        </select><br><br>
                        <label class="teks">Paket Menu </label>
                        <select class="inputan" name="menu">
                            <option value="paket1">Paket 1</option>
                            <option value="paket2">Paket 2</option>
                            <option value="paket3">Paket 3</option>
                        </select><br><br>
                        <label class="teks">Jumlah </label>
                        <input class="inputan" type="number" name="jumlah" placeholder="Jumlah"><br><br><br>

                        <input class="kirim" type="submit" name="hitung" value="Checkout"><br><br>
                    </form>
                </div>
            </section>
        </div>
        <div class="container-jumlah">
            <div id="tampil-jumlah">
                <h1 class="m-heading-harga">Total Pesanan</h1><br><br><br>
                <?php
                    if(isset($_POST['nama']) AND isset($_POST['status']) AND isset($_POST['menu']) AND isset($_POST['jumlah'])){
                        $nama=$_POST['nama'];
                        $status=$_POST['status'];
                        $menu=$_POST['menu'];
                        $jumlah=$_POST['jumlah']; 
                        $jumlahTransaksi="";
                        $jumlahDiskon="";
                        $total="";
                    }
    
                    if($status == "Member") {
                        if($menu == "paket1") {
                            if($jumlah == 1) {
                                $diskon = 0.05 * 22000;
                                $harga = 22000 - $diskon; 
                                $jumlahTransaksi = 22000 * $jumlah;
                                $jumlahDiskon = $diskon * $jumlah; 
                                $total = $jumlahTransaksi - $jumlahDiskon; 
                            }else if($jumlah == 2 || $jumlah == 3) {
                                $diskon = 0.07 * 22000;
                                $harga = 22000 - $diskon; 
                                $jumlahTransaksi = 22000 * $jumlah;
                                $jumlahDiskon = $diskon * $jumlah; 
                                $total = $jumlahTransaksi - $jumlahDiskon;
                            }else if($jumlah > 3) {
                                $diskon = 0.1 * 22000;
                                $harga = 22000 - $diskon; 
                                $jumlahTransaksi = 22000 * $jumlah;
                                $jumlahDiskon = $diskon * $jumlah; 
                                $total = $jumlahTransaksi - $jumlahDiskon;
                            }
                        }else if($menu == "paket2") {
                            if($jumlah == 1) {
                                $diskon = 0.05 * 20000;
                                $harga = 20000 - $diskon; 
                                $jumlahTransaksi = 20000 * $jumlah;
                                $jumlahDiskon = $diskon * $jumlah; 
                                $total = $jumlahTransaksi - $jumlahDiskon; 
                            }else if($jumlah == 2 || $jumlah == 3) {
                                $diskon = 0.07 * 20000;
                                $harga = 20000 - $diskon; 
                                $jumlahTransaksi = 20000 * $jumlah;
                                $jumlahDiskon = $diskon * $jumlah; 
                                $total = $jumlahTransaksi - $jumlahDiskon;
                            }else if($jumlah > 3) {
                                $diskon = 0.1 * 20000;
                                $harga = 20000 - $diskon; 
                                $jumlahTransaksi = 20000 * $jumlah;
                                $jumlahDiskon = $diskon * $jumlah; 
                                $total = $jumlahTransaksi - $jumlahDiskon;
                            }
                        }else if($menu == "paket3") {
                            if($jumlah == 1) {
                                $diskon = 0.05 * 18000;
                                $harga = 18000 - $diskon; 
                                $jumlahTransaksi = 18000 * $jumlah;
                                $jumlahDiskon = $diskon * $jumlah; 
                                $total = $jumlahTransaksi - $jumlahDiskon; 
                            }else if($jumlah == 2 || $jumlah == 3) {
                                $diskon = 0.07 * 18000;
                                $harga = 18000 - $diskon; 
                                $jumlahTransaksi = 18000 * $jumlah;
                                $jumlahDiskon = $diskon * $jumlah; 
                                $total = $jumlahTransaksi - $jumlahDiskon;
                            }else if($jumlah > 3) {
                                $diskon = 0.1 * 18000;
                                $harga = 18000 - $diskon; 
                                $jumlahTransaksi = 18000 * $jumlah;
                                $jumlahDiskon = $diskon * $jumlah; 
                                $total = $jumlahTransaksi - $jumlahDiskon;
                            }
                        }
                    }else {
                        if($menu == "paket1") {
                            if($jumlah > 6 && $jumlah < 10) {
                                $jumlahTransaksi = 22000 * $jumlah; 
                                $jumlahDiskon = $jumlahTransaksi * 0.05;
                                $total = $jumlahTransaksi - $jumlahDiskon; 
                            }else if($jumlah > 10) {
                                $jumlahTransaksi = 22000 * $jumlah; 
                                $jumlahDiskon = $jumlahTransaksi * 0.07;
                                $total = $jumlahTransaksi - $jumlahDiskon; 
                            }else {
                                $jumlahTransaksi = 22000 * $jumlah; 
                                $jumlahDiskon = $jumlahTransaksi * 0;
                                $total = $jumlahTransaksi - $jumlahDiskon;
                            }
                        }else if($menu == "paket2") {
                            if($jumlah > 6 && $jumlah < 10) {
                                $jumlahTransaksi = 20000 * $jumlah; 
                                $jumlahDiskon = $jumlahTransaksi * 0.05;
                                $total = $jumlahTransaksi - $jumlahDiskon; 
                            }else if($jumlah > 10) {
                                $jumlahTransaksi = 20000 * $jumlah; 
                                $jumlahDiskon = $jumlahTransaksi * 0.07;
                                $total = $jumlahTransaksi - $jumlahDiskon; 
                            }else {
                                $jumlahTransaksi = 20000 * $jumlah; 
                                $jumlahDiskon = $jumlahTransaksi * 0;
                                $total = $jumlahTransaksi - $jumlahDiskon;
                            }
                        }else if($menu == "paket3") {
                            if($jumlah > 6 && $jumlah < 10) {
                                $jumlahTransaksi = 18000 * $jumlah; 
                                $jumlahDiskon = $jumlahTransaksi * 0.05;
                                $total = $jumlahTransaksi - $jumlahDiskon; 
                            }else if($jumlah > 10) {
                                $jumlahTransaksi = 18000 * $jumlah; 
                                $jumlahDiskon = $jumlahTransaksi * 0.07;
                                $total = $jumlahTransaksi - $jumlahDiskon; 
                            }else {
                                $jumlahTransaksi = 18000 * $jumlah; 
                                $jumlahDiskon = $jumlahTransaksi * 0;
                                $total = $jumlahTransaksi - $jumlahDiskon;
                            }
                        }
                    }
                    echo "Nama Pembeli        : " .$nama;
                    echo "<br>";
                    echo "Status Pembeli      : " .$status;
                    echo "<br>";
                    echo "Total Harga         : " .$jumlahTransaksi;
                    echo "<br>";
                    echo "Total Diskon        : " .$jumlahDiskon;
                    echo "<br><br>";
                    echo "Yang harus Anda bayarkan " .$total;
                ?>
            </div>
        </div>
        <!--footer-->
        <div class="footer">
            <h4>copyright &copy UTS RAHMAT ARDIANZAH</h4>
        </div>
        <script src="script.js">

        </script>
    </body>
</html>