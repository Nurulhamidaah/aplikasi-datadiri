<form action="rumus-luaslingkaran.php" method="POST">
    <h1> Rumus Luas Lingkaran </h1>
    <h2>Isi Data :</h2>
    <p>Jari Jari Lingkaran</p>
    <input type="number" name="jari" placeholder="Ex. 5"/>
    <input type="submit" name="proses" value="Hitung" />
</form>  

<?php
        if(isset($_POST['proses'])){
            $jari   =$_POST['jari'];
            $phie    =22/7;
            $luas = $phie * $jari * $jari;
            $keliling = 2 * 22/7 * $jari;
            
            echo "Hasil hitung luas lingkaran adalah sebagai berikut:<br />";
            echo "Diketahui;<br />";
            echo "Jari-jari lingkaran = $jari<br />";
            echo "Phie = $phie<br />";
            echo "Maka luas lingkaran sama dengan [ $phie x $jari x $jari ] = $luas";
        }
?>