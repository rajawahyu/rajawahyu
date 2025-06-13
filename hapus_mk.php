<?php 
include "koneksi.php";
if(isset($_GET['id_film'])){
    $id_film = $_GET['id_film'];
    $query = "DELETE FROM film WHERE id_film=$id_film";
    $hasil= mysqli_query($conn, $query);
    /*
    ini kalo pake prepare
    $stmt= mysqli_prepare($conn, $query);

    if ($stmt){
        mysqli_stmt_bind_param($stmt, "s", $id_film);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
    }
        */

}
sleep(1);
header("location: halaman_lihat.php");
exit;
?>