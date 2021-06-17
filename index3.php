<link rel="stylesheet" href="assets/css/style.css">
<?php

 require_once "app/track.php";

 $track = new track();
 $rows = $track->tampil();

 if  (isset($_GET['hapus'])){
     $id = $_GET['hapus'];
     $track->hapus($id);
     header("location:index3.php");

 }

 ?>
 <a href="index.php"class="active">dashboard</a> |
 <a href="indexa.php">Artist</a> |
 <a href="index1.php">Album</a> |
 <a href="index2.php">Played</a> |
 <a href="index3.php">Track</a> |
 <br>
 <a href="input3.php">Tambah Track</a> |
 <table border= "1" >
 <tr>
 <td>Track ID</td>
 <td>Track Nama</td>
 <td>Artist ID</td>
 <td>Album ID</td>
 <td>EDIT</td>
 <td>HAPUS</td>
 </tr>


 <?php foreach ($rows as $row) { ?>

 <tr>
 <td><?php echo $row['track_id']; ?></td>
 <td><?php echo $row['track_name']; ?></td>
 <td><?php echo $row['artist_id']; ?></td>
 <td><?php echo $row['Album_id']; ?></td>
<td><a href="edit3.php?id=<?php echo $row['track_id'];?>">Edit</a></td>
<td><a href="index3.php?hapus=<?php echo $row['track_id'];?>">Hapus</a></td>
 </tr>

 <?php } ?>
 </table>