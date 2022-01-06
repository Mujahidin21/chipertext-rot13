<html>

<head>
    <title>Enkripsi dan Dekripsi</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <center>
        <h1>
            <marquee width="1000" height="40">Selamat Datang di Tugas Kripto kami :)</marquee>
        </h1>
        <h2>ROT13 : Kelompok 3</h2>
        <h3>Enkripsi dan Dekripsi</h3>
        <form action="" method="get">
            Plaintext : :<input type="text" name="kalimat">
            <br><br>
            <input type="submit" value="kirim">
            <input type="reset" value="ulangi">

        </form>
    </center>
    <?php
    $msg = $_GET['kalimat'];
    $key = 13;
    $mode = 'decrypt';
    $letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $trans = '';
    $msg = strtoupper($msg);
    for ($i = 0; $i < strlen($msg); $i++) {
        if (strpos($letters, $msg[$i]) !== false) {
            $num = strpos($letters, $msg[$i]);
            if ($mode == 'encrypt') {
                $num += $key;
            } else {
                $num -= $key;
            }

            $cnt = strlen($letters);
            if ($num >= $cnt) {
                $num -= $cnt;
            } else {
                $num += $cnt;
            }
            if ($num >= $cnt) {
                $num = $num - $cnt;
            }
            $trans .= $letters[$num];
        }
    }
    ?>
    <center>
        <h1 background="white"><?php
                                echo 'Hasil : ';
                                echo $trans . PHP_EOL;
                                ?></h1>
    </center>
</body>

</html>