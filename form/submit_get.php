<?php
    error_reporting(0);
    print "
        <h3>DATA INPUTAN MAHASISWA</h3>
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>$_GET[nama]</td>
            </tr>
             <tr>
                <td>Password</td>
                <td>:</td>
                <td>$_GET[sandi]</td>
            </tr>
             <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>$_GET[jk]</td>
            </tr>
             <tr>
                <td>Warga Negara</td>
                <td>:</td>
                <td>$_GET[warga]</td>
            </tr>
             <tr>
                <td>Hobby</td>
                <td>:</td>
                <td>$_GET[hobby]</td>
            </tr>
             <tr>
                <td>Keterangan</td>
                <td>:</td>
                <td>$_GET[ket]</td>
            </tr>
            <tr>
                <td>Status</td>
                <td>:</td>
                <td><input type='text' value='Aktif' readonly></td>
            </tr>
        </table>
    ";
?>
