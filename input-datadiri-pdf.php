<?php
    require_once __DIR__ . '/vendor/autoload.php';

    $mpdf = new \Mpdf\Mpdf();

    include('./input-config.php');
    $no = 1;
    $tabledata = "";
    $data = mysqli_query($mysqli, "SELECT * FROM datadiri2 ");
    while($row =mysqli_fetch_array($data)){
        $tabledata .= "
        <tr>
            <td>".$row["nis"]."</td>
            <td>".$row["namalengkap"]."</td>
            <td>".$row["tanggal_lahir"]."</td>
            <td>".$row["nilai"]."</td>
           
        </tr>
        ";
        $no++;
     }
     $tanggal_cetak = data('d M Y - H:i:s');
        $table= "
        <table width='100%' cellpadding=5 border=1 cellspacing=0>
        <tr>
            <th>NIS</th>
            <th>Nama Lengkap</th>
            <th>Tanggal Lahir</th>
            <th>Nilai</th>
           

        </tr>
        $tabledata
        </table>
        ";
    $mpdf->WriteHTML($table );
    $mpdf->Output();