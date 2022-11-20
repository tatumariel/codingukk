<!DOCTYPE html>
<html>

<head>
    <title>Formulir Pendftaran Siswa</title>
</head>

<body>
    <header>
        <h3>Formulir Pendaftaran Baru</h3>
    </header>
    <form action="proses-pendaftaran.php" method="POST">

        <fieldset>

            <p>
                <label for="id">Id: </label>
                <input type="text" name="id" placeholder="input id lu" />
            </p>
            <p>
                <label for="nama">Nama: </label>
                <input type="text" name="nama" placeholder="input nama lu" />
            </p>
            <p>
                <label for="tanggal_lahir">Tanggal_Lahir: </label>
                <input type="date" name="tanggal_lahir" />
</p>
<p>
    <label for="alamat">alamat </label>
    <input type="text" name="alamat" placeholder="input alamat lu" />
</p>
<p>
<input type="submit" value="Daftar" name="daftar" />
</p>
</fieldset>

</form>

</body>
</html>