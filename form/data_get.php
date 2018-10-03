<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Form Data Mahasiswa GET</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <h3>FORM INPUTAN DATA MAHASISWA</h3>
    <form method="get" action="submit_get.php">
        <pre>
            Nama            : <input type="text" name="nama" maxlength="20" required>
            Password        : <input type="password" name="sandi" required>
            Jenis Kelamin   : <input type="radio" name="jk" value="pria" checked>pria <input type="radio" name="jk" value="wanita">wanita
            Warga Negara    : <input type="hidden" name="warga" value="WNA"><input type="checkbox" name="warga" value="WNI">WNI 
            Hobby           : <select name="hobby"> 
                                <option value="Membaca">Membaca</option>
                                <option value="Olahraga">Olahraga</option>
                                <option value="Komputer" >Komputer</option>
                              </select>
            keterangan      : 
                              <textarea name="ket" cols="22" rows="7"> </textarea> <br />
            <input type="submit" name="tombol" value="INPUT">       <input type="reset" name="bersih" value="BERSIHKAN">
        </pre>
    </form>
</body>

</html>
