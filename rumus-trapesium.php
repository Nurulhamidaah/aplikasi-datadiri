<form action="rumus-trapesium.php" method="POST">
    <h1> Rumus Luas dan Keliling Trapesium </h1>
    <p>Panjang Sisi Atas :</p>
    <input type="number" name="a" placeholder="Ex. 5" />
    <p>Panjang Sisi Bawah :</p>
    <input type="number" name="b" placeholder="Ex. 5" />
    <p>Tinggi :</p>
    <input type="number" name="t" placeholder="Ex. 5" /><hr>
    <td>AB :</td>
    <input type="number" name="AB" placeholder="Ex. 5" />
    <td>BC :</td>
    <input type="number" name="BC" placeholder="Ex. 5" />
    <td>CD :</td>
    <input type="number" name="CD" placeholder="Ex. 5" />
    <td>AD :</td>
    <input type="number" name="DA" placeholder="Ex. 5" />
    <input type="submit" name="proses" value="Hitung Luas dan Keliling" />
</form>

<?php
    if ( isset($_POST["proses"]) ) {
        echo "<hr>";
        $a = $_POST["a"];
        $b= $_POST["b"];
        $t = $_POST["t"];
        $AB = $_POST["AB"];
        $BC = $_POST["BC"];
        $CD = $_POST["CD"];
        $DA = $_POST["DA"];
        $x = 1/2;
        $luas = 1/2 * ($a + $b) * $t;
        $keliling = $AB + $BC + $CD + $DA;

        echo "Panjang Sisi Atas : $a <br>";
        echo "Panjang Sisi Bawah : $b <br>";
        echo "Tinggi : $t <br>";
        echo "AB : $AB <br>";
        echo "BC : $BC <br>";
        echo "CD : $CD <br>";
        echo "AD : $DA <br>";
        echo "Luas Trapesium : $luas <br>";
        echo "Keliling Trapesium : $keliling <br>";
    }
?>