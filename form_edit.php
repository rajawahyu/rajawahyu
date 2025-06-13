<?php
include "koneksi.php";

$id_film = $_GET['id_film']; // Ambil ID dari URL

$query = "SELECT * FROM film WHERE id_film = '$id_film'";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result);

?>

<h2>Edit Data Film</h2>
<form action="edit_mk.php" method="post">
    <input type="hidden" name="id_film_lama" value="<?= $data['id_film']; ?>">

    <label>ID Film:</label><br>
    <input type="text" name="id_film" value="<?= $data['id_film']; ?>"><br><br>

    <label>Judul Film:</label><br>
    <input type="text" name="judul_film" value="<?= $data['judul_film']; ?>"><br><br>

    <label>Genre:</label><br>
    <input type="text" name="genre" value="<?= $data['genre']; ?>"><br><br>

    <label>Sutradara:</label><br>
    <input type="text" name="sutradara" value="<?= $data['sutradara']; ?>"><br><br>

    <label>Tahun Rilis:</label><br>
    <input type="text" name="tahun_rilis" value="<?= $data['tahun_rilis']; ?>"><br><br>

    <input type="submit" value="Update">
</form>
