<html>
    <head>
        <link rel="stylesheet" href="dlogin.css">
    </head>
    <body>
        <div class="container">
            <header>
                <h3>
                    HALLO
                </h3>
            </header>
            <div class="php">
                <?php
                    $nim = $_POST['nim'];
                    $nama = $_POST['nama'];
                    echo "NAMA : ".$nama."<br>";
                    echo "NIM : ".$nim."<br>";
                ?>
            </div>
            <br>
            <li>
                <a href="tugas_uts.html">kembali ke menu / </a>
                <a href="daftar.php">login</a>
            </li>
        </div>
    </body>
</html>