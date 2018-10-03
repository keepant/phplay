<!DOCTYPE html>
<html>
<head>
    <title>Gaji Bersih Karyawan</title>

</head>
<body>
    <h2>Perhitungan Gaji Bersih Karyawan</h2>   
    <form method="GET" action="get_gaji.php"> 
        <pre>
            Nama                 : <input type="text" name="nama" require> <br />
            Golongan             : <input type="number" name="golongan" min="1" max="3"> <br />
            Berkeluarga          : <input type="radio" name="berkeluarga" value="Sudah">Sudah <input type="radio" name="berkeluarga" value="Belum">Belum <br />
            Jumlah Anak          : <input type="number" name="jmlanak">
            <br />
            <input type="submit" name="tombol" value="INPUT">       <input type="reset" name="bersih" value="BERSIHKAN">
        </pre>
    </form>
</body>
</html>
