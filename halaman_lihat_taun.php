<?php include "koneksi.php"; ?>

<form method="post" action="">
    <h3>Cari Film Berdasarkan Tahun</h3>
    Tahun Rilis: <input type="number" name="tahun_rilis" required>
    <input type="submit" value="Cari">
    <input type="button" value="kembali" onclick="window.location.href='menu.php'">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['tahun_rilis'])) {
    $tahun = $_POST['tahun_rilis'];
    $query = "SELECT * FROM film WHERE tahun_rilis = '$tahun'";
    $hasil = mysqli_query($conn, $query);

    if (mysqli_num_rows($hasil) > 0) {
        echo "<h3>Film Tahun $tahun</h3>";
        echo "<table border='1'>
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Genre</th>
            <th>Sutradara</th>
            <th>Tahun</th>
        </tr>";

        $no = 1;
        while ($row = mysqli_fetch_array($hasil)) {
            echo "<tr>
                <td>$no</td>
                <td>{$row['judul_film']}</td>
                <td>{$row['genre']}</td>
                <td>{$row['sutradara']}</td>
                <td>{$row['tahun_rilis']}</td>
            </tr>";
            $no++;
        }
        echo "</table>";
    } else {
        echo "<p><strong>Tidak ada film yang ditemukan untuk tahun $tahun.</strong></p>";
    }
}
?>
