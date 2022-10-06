<form action="rumus-segitiga.php" method="POST">
    <h1> Rumus Luas dan Keliling Segitiga </h1>
    <p>Alas :</p>
    <input type="number" name="a" placeholder="Ex. 5" />
    <p>Tinggi :</p>
    <input type="number" name="t" placeholder="Ex. 5" />
    <p>Sisi :</p>
    <input type="number" name="s" placeholder="Ex. 5" /><br>
    <input type="submit" name="proses" value="Hitung Luas dan Keliling" />
</form>

<?php
    if ( isset($_POST["proses"]) ) {
        echo "<hr>";
        $alas = $_POST["a"];
        $tinggi = $_POST["t"];
        $sisi = $_POST["s"];
        $b = 1/2;
        $luas = $b * $alas * $tinggi;
        $keliling = $sisi + $sisi + $sisi;

        echo "Diketahui :<br>";
        echo "Alas : $alas <br>";
        echo "Tinggi : $tinggi <br>";
        echo "Sisi : $sisi <br>";
        echo "Luas Segitiga : $luas <br>";
        echo "Keliling : $keliling <br>";
    }
?>