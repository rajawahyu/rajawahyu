<?php 

include "koneksi.php";

$id_film = $_POST['id_film'];
$id_film_lama = $_POST['id_film_lama'];
$judul_film = $_POST['judul_film'];
$genre = $_POST['genre'];
$sutradara = $_POST['sutradara'];
$tahun_rilis= $_POST['tahun_rilis'];


$query = "UPDATE film set id_film = ?, judul_film=?, genre=?, sutradara=?, tahun_rilis=? where id_film =?";
 $stmt= mysqli_prepare($conn, $query);

if($stmt) {
    mysqli_stmt_bind_param($stmt, "ssssss", $id_film, $judul_film, $genre, $sutradara, $tahun_rilis, $id_film_lama);
    $hasil= mysqli_stmt_execute($stmt);

    if($hasil){
        header("location: halaman_lihat.php");
    }else{
        echo "data gagal diedit". mysqli_error($conn);
    }
    mysqli_stmt_close($stmt);
}else{
    echo "gagal menyiapkan query :" .mysqli_error($conn);
}
mysqli_close($conn);

sleep(1);
header("location: halaman_lihat.php");
?>