<?php
if(isset($_GET["kodebarang"])){
    $kodebarang = $_GET["kodebarang"];

    $query = "
     DELETE FROM transaksi
     WHERE kodebarang = '$kodebarang';
    ";

    include ('./kwu-config.php');
    $update = mysqli_query($mysqli, $query);

    if($update){
        echo "
        <script>
        alert('Data berhasil dihapus');
        window.location='kwu.php';
        </script>
        ";
    }
}
?>