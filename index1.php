<link rel="stylesheet" href="assets/css/style.css">
<?php

 require_once "app/album.php";

 $album = new album();
 $rows = $album->tampil();

 if  (isset($_GET['hapus'])){
     $id = $_GET['hapus'];
     $album->hapus($id);
     header("location:index1.php");

 }

 ?>
 <a href="index.php"class="active">dashboard</a> |
 <a href="indexa.php">Artist</a> |
 <a href="index1.php">Album</a> |
 <a href="index2.php">Played</a> |
 <a href="index3.php">Track</a> |
 <br>
 <a href="input1.php">Tambah Album</a> |

 

 <table border= "1" >
 <tr>
 <td>Artist ID</td>
 <td>Album ID</td>
 <td>Album NAMA</td>
 <td>EDIT</td>
 <td>HAPUS</td>
 </tr>
 

 <?php foreach ($rows as $row) { ?>

 <tr>
 <td><?php echo $row['artist_id']; ?></td>
 <td><?php echo $row['album_id']; ?></td>
 <td><?php echo $row['album_name']; ?></td>
<td><a href="edit1.php?id=<?php echo $row['artist_id'];?>">Edit</a></td>
<td><a href="index1.php?hapus=<?php echo $row['artist_id'];?>">Hapus</a></td>
 </tr>

 <?php } ?>
 </table>