<?php 
 include_once "koneksi.php";
?>

<fieldset><legend>Menu Data Film</legend>
<form method="post">
    <table border="0" cellpadding="10">
        <tr>
            <td><input type="button" value="Halaman Input" onclick="window.location.href='halaman_input.php';"></td>
            <td><input type="button" value="Lihat Semua Data" onclick="window.location.href='halaman_lihat.php';"></td>
            <td><input type="button" value="Lihat Berdasarkan Tahun" onclick="window.location.href='halaman_lihat_taun.php';"></td>
          
        </tr>
    </table>
</form>
</fieldset>
<?php 
