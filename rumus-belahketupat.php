<form action="rumus-belahketupat.php" method="POST">
    <h1> Rumus Luas dan Keliling Belah Ketupat </h1>
    <p>Sisi :</p>
    <input type="number" name="sisi" placeholder="Ex. 5" /><br>
    <p>Diagonal 1 :</p>
    <input type="number" name="diagonal1" placeholder="Ex. 5" /><br>
    <p>Diagonal 2 :</p>
    <input type="number" name="diagonal2" placeholder="Ex. 5" /><br>
    <input type="submit" name="proses" value="Hitung Luas dan Keliling" />
</form>

<?php
    if ( isset($_POST["proses"]) ) {
        echo "<hr>";
        $sisi = $_POST["sisi"];
        $diagonal1 = $_POST["diagonal1"];
        $diagonal2 = $_POST["diagonal2"];
        $y = 1/2;
        $luas = $y * $diagonal1 * $diagonal2;
        $keliling = 4 * $sisi;

        echo "Diketahui : <br>";
        echo "Sisi : $sisi <br>";
        echo "D1 : $diagonal1 <br>";
        echo "D2 : $diagonal1 <br>";
        echo "Luas Belah Ketupat : $luas <br>";
        echo "Keliling Belah Ketupat : $keliling <br>";
    }
?>