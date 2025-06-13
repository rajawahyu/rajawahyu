<?php 
    session_start(); 
 
if (!isset($_SESSION['username']) || $_SESSION['role'] !== 'admin') { 
   header("location: halaman_lihat.php");
}

    //Memanggil koneksi database 
    include_once "koneksi.php"; 
    //Memanggil data dari database 
    $panggil="SELECT * from film"; 
    $hasil=mysqli_query($conn, $panggil); 
    echo"<h4>DATA FILM</H4>"; 
    echo "<table width='600' border='1'> 
        <tr bgcolor='green'><th>No</th> 
        <th>id film</th> 
        <th>judul film</th>
        <th>genre</th> 
        <th>sutradara</th>
        <th>tahun rilis</th>
        <th>edit</th>
        <th> hapus</th>
        
        
        </tr>";
        
        
    $nomer_urut=0; 
    while($tampil=mysqli_fetch_array($hasil)){ 
        $id_film=$tampil['id_film']; 
        $judul_film=$tampil['judul_film']; 
        $genre=$tampil['genre']; 
        $sutradara=$tampil['sutradara']; 
        $tahun_rilis=$tampil['tahun_rilis'];
            
        //Menambahkan nomor urut dengan perulangan 
        $nomer_urut++; 
        
        echo " 
            <tr> 
            <td>$nomer_urut</td>
            <td>$id_film</td> 
            <td>$judul_film</td>
            <td align='center'>$genre</td> 
            <td align='center'>$sutradara</td> 
            <td align='center'>$tahun_rilis</td>
            <td valign='top'><a href='form_edit.php?id_film=$id_film'>edit</td>
            <td valign='top'><a href='hapus_mk.php?id_film=$id_film'>hapus</td>
            
            
        </tr>";
        }    
        
?> 