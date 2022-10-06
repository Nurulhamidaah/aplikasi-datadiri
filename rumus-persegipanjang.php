<form action="rumus-persegipanjang.php" method="POST">
    <h1> Rumus Luas dan Keliling Persegi Panjang </h1>
    <p>Panjang :</p>
    <input type="number" name="panjang" placeholder="Ex. 5" />
    <p>Lebar :</p>
    <input type="number" name="lebar" placeholder="Ex. 5" /><br>
    <input type="submit" name="proses" value="Hitung " />
</form>

<?php
    if ( isset($_POST["proses"]) ) {
        echo "<hr>";
        $panjang = $_POST["panjang"];
        $lebar = $_POST["lebar"];
        $luas = $panjang * $lebar;

        echo "Diketahui : <br>";
        echo "panjang : $panjang <br>";
        echo "Lebar : $lebar <br>";
        echo "Luas : $luas <br>";
    }
?>