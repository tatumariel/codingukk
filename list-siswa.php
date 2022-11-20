<?php
include "config.php";
?>

<html>
    <head>
        <tittle>Pendaftaran Siswa Baru</tittle>
</head>

<body>
    <header>
        <h3>Siswa yang sudah daftar</h3>
</header>

<nav>
    <a href="form-daftar.php">[+] Tambah baru</a>
</nav>

<br>

<table border="1">
    <thead>
        <tr>
            <th>id</th>
            <th>nama</th>
            <th>tanggal lahir</th>
            <th>alamat</th>
</tr>
</thead>
<tbody>

<?php
$sql = "SELECT * FROM tb_akbar";
$query = mysqli_query($db, $sql);

while($siswa = mysqli_fetch_array($query)){
    echo "<tr>";

    echo "<td>".$siswa['id']."</td>";
    echo "<td>".$siswa['nama']."</td>";
    echo "<td>".$siswa['tanggal_lahir']."</td>";
    echo "<td>".$siswa['alamat']."</td>";

    echo "<td>";
    
    echo "<a href='hapus.php?id=".$siswa['id']."'>Hapus</td>";
    echo "</td>";



    echo "</tr>"; 
     }
    ?>

</tbody>
</table>

<p>Total: </php echo mysqli_num_rows($query) ?></p>





</html>