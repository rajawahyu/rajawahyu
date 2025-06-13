<?php 
 include_once "koneksi.php";

 $server = $_SERVER['PHP_SELF'];
?>
<fieldset><legend>isi data film</legend>
<form action="halaman_input.php" method="post">
    <table width="376" border="0" align="left">
        <tr>
            <td width="143">id_film</td>
            <td width="8">:</td>
            <td width="203"><input type="text" name="id_film" id="textfield"></td>
        </tr>
        <tr>
            <td>judul_film</td>
            <td>:</td>
            <td><input type="text" name="judul_film" id="textfield2"></td>
        </tr>
         <tr>
            <td>genre</td>
            <td>:</td>
            <td><input type="text" name="genre" id="textfield3"></td>
        </tr>
         <tr>
            <td>sutradara</td>
            <td>:</td>
            <td><input type="text" name="sutradara" id="textfield4"></td>
        </tr>
         <tr>
            <td>tahun rilis</td>
            <td>:</td>
            <td><input type="number" name="tahun_rilis" id="textfield5"></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><input type="submit" name="submit" id="button" value="simpan">
            <input type="button" value="kembali" onclick="window.location.href='menu.php'">
</form>
    </table>
</form>
</fieldset>

<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $id_film = $_POST['id_film'] ?? '';
    $judul_film = $_POST['judul_film'] ?? '';
    $genre = $_POST['genre'] ?? '';
    $sutradara = $_POST['sutradara'] ?? '';
    $tahun_rilis = $_POST['tahun_rilis'] ?? '';

    $query="INSERT into film (id_film, judul_film, 
    genre, sutradara, tahun_rilis) VALUES 
    ('$id_film','$judul_film','$genre','$sutradara', '$tahun_rilis')"; 
    $hasil= mysqli_query($conn, $query); 
    if ($hasil) { 
        echo "Data berhasil ditambahkan."; 
    } else { 
        echo "Terjadi kesalahan: " . mysqli_error($conn); 
    } 
} 