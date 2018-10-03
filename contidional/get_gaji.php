<?php
    error_reporting(0);

    $nama=$_GET[nama];
    $golongan=$_GET[golongan];
    $berkeluarga=$_GET[berkeluarga];
    $anak=$_GET[jmlanak];

    $gajiPokok;
    $tunjanganKel;
    $tunjanganAnak;
    $gajiKotor;
    $pajak;
    $gajiBersih;

    switch($golongan){
        case 1:
            $gajiPokok = 1000000;
            break;
        case 2:
            $gajiPokok = 2000000;
            break;
        case 2:
            $gajiPokok = 3000000;
            break;
    }

    if($berkeluarga == "Sudah") {
        $tunjanganKel = 200000;
    } else {
        $tunjanganKel = 0;
    }

    if($berkeluarga == "Sudah" && $anak == 1){
        $tunjanganAnak = 100000;
    } else if ($berkeluarga == "Sudah" && $anak == 2){
        $tunjanganAnak = 200000;
    } else if ($berkeluarga == "Sudah" && $anak >= 3){
        $tunjanganAnak = 300000;
    } else {
        $tunjanganAnak = 0;
    }

    $gajiKotor = $gajiPokok + $tunjanganKel + $tunjanganAnak;

    switch($golongan){
        case 1:
            $pajak = 0*$gajiKotor;
            break;
        case 2:
            $pajak = 0.025*$gajiKotor;
            break;
        case 2:
            $pajak = 0.05*$gajiKotor;
            break;
    }

    $gajiBersih = $gajiKotor - $pajak;

    print "
        <h3>Hasil Perhitungan Gaji</h3>
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>$nama</td>
            </tr>
             <tr>
                <td>Golongan</td>
                <td>:</td>
                <td>$golongan</td>
            </tr>
             <tr>
                <td>Berkeluarga</td>
                <td>:</td>
                <td>$berkeluarga</td>
            </tr>
             <tr>
                <td>Jumlah Anak</td>
                <td>:</td>
                <td>$anak</td>
            </tr>
            <tr>
                <td>Gaji Bersih</td>
                <td>:</td>
                <td>Rp $gajiBersih</td>
            </tr>
        
        </table>
    ";
?>