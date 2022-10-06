<form action="post.php" method="POST">
    <input type="text" name="namalengkap" placeholder="Ex. Nurul" /><br>
    <input type="text" name="kelas" placeholder="Ex. 11 RPL 2" /><br>
    <input type="number" name="NIS" placeholder="Ex. 12345" /><br>

    <input type="submit" name="simpan" placeholder="Simpan Data" />
</form>

<?php
if (isset($_POST["simpan"])) {
    echo "<hr>";
    $nama = $_POST["namalengkap"];
    $kelas = $_POST["kelas"];
    $nis = $_POST["nis"];

    echo "Nama Lengkap : $nama <br>";
    echo "Kelasnya : $kelas <br>";
    echo "NIS : $nis <br>";
}
?>