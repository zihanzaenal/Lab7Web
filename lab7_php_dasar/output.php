<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Praktikum</title>
</head>
<body>
<h2>Form Output</h2>
<?php
    $nama = $_POST['nama'];
    echo  "Nama : <b>".$nama."</b>" ;
    ?> <br>
<?php 
    $tgl_lahir = $_POST['tgl_lahir'];
    $rubah = date_format(date_create($tgl_lahir), 'Y');
    $thn_skrg = date('Y');
    $umur = $thn_skrg - $rubah;
    echo 'Tanggal lahir : <b>'.$tgl_lahir.'</b>, Umur : <b>'.$umur.'</b> tahun';
    ?><br>
<?php
    $pekerjaan = $_POST['pekerjaan'];
    if($pekerjaan =='WEB Developer') {
        $gaji = 3000000;
    }
    elseif($pekerjaan =='Graphic Designer') {
        $gaji = 2000000;
    }
    elseif($pekerjaan =='Data Analyst') {
        $gaji = 5000000;
    }
    elseif($pekerjaan =='IT Support') {
        $gaji = 1500000;
    }
    echo "Pekerjaan :<b> ".$pekerjaan."</b> , Gaji : <b>Rp.".$gaji."</b>";
    ?>
</body>
</html>