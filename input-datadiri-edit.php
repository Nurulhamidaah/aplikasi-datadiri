<?php
include ('./input-config.php');
if ($_SESSION["login"] != TRUE) {
    header('location:login.php');
}

if(isset($_GET["nis"])){
    $nis = $_GET["nis"];
    $check_nis = "SELECT * FROM datadiri2 WHERE nis = '$nis';";
    $query = mysqli_query($mysqli, $check_nis);
    $row = mysqli_fetch_array($query);
}
?>
<div class="container">
<h1>Edit Data</h1>
<form action="input-datadiri-edit.php" method="POST">
<label for="nis">Nomor Induk Siswa :</label>
<input class="form-control" value="<?php echo $row["nis"]; ?>" type="number" name="nis" placeholder="Ex. 12003102" readonly /><br>

<label for="nama">Nama Lengkap :</label>
<input class="form-control" value="<?php echo $row["namalengkap"]; ?>" type="text" name="nama" placeholder="Ex. Nurul hamidah" /><br>

<label for="tanggal_lahir">Tanggal Lahir :</label>
<input class="form-control" value="<?php echo $row["tanggal_lahir"]; ?>" type="date" name="tanggal_lahir" /><br>

<label for="nilai">Nilai : </label><br>
<input class="form-control" value="<?php echo $row["nilai"]; ?>" type="number" name="nilai" placeholer="Ex. 80.56" />

<input class='btn btn-success btn-sm' type="submit" name="edit" value="Edit Data" />
<a class='btn btn-secondary btn-sm' href="input-datadiri.php">Kembali</a>
</form>
</div>

<?php

if(isset($_POST["edit"])){
     $nis = $_POST["nis"];
     $nama = $_POST["nama"];
     $tanggal_lahir = $_POST["tanggal_lahir"];
     $nilai = $_POST["nilai"];

    // EDIT - Memperbaharui Data
    $query = "
        UPDATE datadiri2 SET namalengkap = '$nama',
        tanggal_lahir = '$tanggal_lahir',
        nilai = '$nilai'
        WHERE nis = '$nis';
    ";
     
     $update = mysqli_query($mysqli, $query);

     if($update){
        echo "
        <script>
        alert('Data berhasil ditambahkan');
        window.location='input-datadiri.php';
        </script>
        
        ";
     }else{
        echo "
        <script>
        alert('Data gagal');
        window.location='input-datadiri-edit.php?nis=$nis';
        </script>
        ";  
     }
}