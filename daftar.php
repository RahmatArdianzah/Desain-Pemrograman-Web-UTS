<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="dlogin.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
        
        <title>Login Page</title>
    </head>
    <body>
        <div class="container">
            <header>
                <h3>
                    Halaman Login
                </h3>
            </header>
            <form action="prosesLogin.php" method="POST">
                Nama <br>
                <input type="text" name="nama"><br>
                NIM <br>
                <input type="text" name="nim"><br>
                Password <br>
                <input type="password" name="pw"><br><br>
                <input type="submit" name="kirim" value="kirim" class="submit">
                <input type="reset" name="kosongkan" value="kosongkan" class="reset"><br><br>
            </form>
        </div>
    </body>
</html>