<?php

include("config.php");


if(isset($_POST['daftar'])){

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $tanggal = $_POST['tanggal_lahir'];
    $alamat = $_POST['alamat'];

    $sql = "INSERT INTO tb_akbar (id, nama, tanggal_lahir, alamat) VALUE ('$id', '$nama', '$tanggal', '$alamat')";
    $query = mysqli_query($db, $sql);


    if( $query ) {      

        header('Location: index.php?status=sukses');
        
} else {

    header('Location: index.php?status=gagal');
}

} else {
    die("akses dilarang...");

}
?>