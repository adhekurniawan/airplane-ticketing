
<?php
  // Load file connect.php
  require_once '../../action/connect.php';
  $query = "SELECT * FROM reservation"; // Query untuk menampilkan semua data siswa
  $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
  $no=1;
  while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
    echo "<tr>";
    echo "<td>".$no."</td>";
    echo "<td>".$data['kode_reservasi']."</td>";    
    echo "<td>".$data['tanggal_reservasi']."</td>";
    echo "<td>".$data['keberangkatan']."</td>";
    echo "<td>
          <a class='fa fa-edit' href='editkeberangkatan.php?id=".$data['id']."'></a>
          <a class='fa fa-trash-o' href='deletpesawat.php?aksi=delete&id=".$data['id']."'></a>
          </td>";
    echo "</tr>";
    $no++;
  }
?>

<?php
  // Load file connect.php
  require_once '../../action/connect.php';
  $query = "SELECT * FROM transportation"; // Query untuk menampilkan semua data siswa
  $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
  $no=1;
  while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
    echo "<tr>";
    echo "<td>".$no."</td>";
    echo "<td>".$data['nama_pesawat']."</td>";    
    echo "<td>".$data['kode']."</td>";
    echo "<td>".$data['deskripsi']."</td>";
    echo "<td>".$data['seat']."</td>";
    echo "<td>
          <a class='fa fa-edit' href='editpesawat.php?id=".$data['id']."'></a>
          <a class='fa fa-trash-o' href='deletpesawat.php?aksi=delete&id=".$data['id']."'></a>
          </td>";
    echo "</tr>";
    $no++;
  }
  ?>