<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            Rahmat Ardianzah MI-1F
        </title>
        <link rel="stylesheet" type="text/css" href="web.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
        <!--<style>
            #parentpopup {
                background: rgba( 255, 255, 255, 0.4 );
                box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
                backdrop-filter: blur( 9.5px );
                -webkit-backdrop-filter: blur( 9.5px );
                border: 1px solid rgba( 255, 255, 255, 0.18 );
                position : absolute;
                top: 0;
                left : 0;
                right :0;
                bottom :0;

                width : 300px;
                height :200px;
                margin :auto;
            }
            .popupkecil {
                text-align :center;
                font-weight : bolder;
                text-transform : uppercase;
                font-size : 2rem;
                margin-top : 35px;
            }
            .closepopup {
                background-color : #f17373;
                color : #fff;
                position : absolute;
                right : 0;
                width : 30px;
                text-align : center;
            }
        </style>
        <script>
            function tutuppopup(){
                document.getElementById('parentpopup').style.display = "none";
            }
            function bukapopup(){
                document.getElementById('parentpopup').style.display = "inline";
            }
        </script>-->
    </head>
    <body class="tampil">
        <!--Bagian Header-->
        <header>
            <a href="tugas_uts.html" class="logo"><i class="fas fa-utensils"></i>warteg's</a>

            <div id="menu-bar" class="fas fa-bars"></div>

            <nav class="navbar">
                <a href="tugas_uts.html">Home</a>
                <a href="daftar.php">Biodata</a>
                <a href="tugas_uts.html">Profil</a>
                <a href="tugas_uts.html">Pesanan</a>
            </nav>
        </header>
        <div class="tampil-bayar">
            <div class="container-jumlah">
                <h1>Total Pembayaran</h1>
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
                        echo "Pilihan Paket      : " .$menu;
                        echo "<br>";
                        echo "Jumlah Porsi     : " .$jumlah;
                        echo "<br>";
                        echo "Total Harga         : Rp. " .$jumlahTransaksi;
                        echo "<br>";
                        echo "Total Diskon        : " .$jumlahDiskon;
                        echo "<br><br>";
                        echo "Yang harus Anda bayarkan : Rp. " .$total;
                    ?>
                <br>
                <a href="tugas_uts.html" class="bayar">Bayar </a>
                <!--<a href="tugas_uts.html" class="bayar">Bayar </a>
                <input type="button" value='bayar' onclick='bukapopup();'>-->
            </div>
            <!--<div id='parentpopup'>
                <div class='closepopup'>
                    <a href='#' onclick='tutuppopup();'>X</a> 
                </div>
                <div class='popupkecil'>
                    yakin ingin bayar ? <br>
                    <a href="tugas_uts.html"> iya </a>
                </div>
            </div>-->
        </div>
    </body>
</html>