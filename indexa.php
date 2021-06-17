<link rel="stylesheet" href="assets/css/style.css">
<?php

 require_once "app/artist.php";

 $musik = new musik();
 $rows = $musik->tampil();

 if  (isset($_GET['hapus'])){
     $id = $_GET['hapus'];
     $musik->hapus($id);
     header("location:indexa.php");

 }

 ?>
 <a href="index.php"class="active">dashboard</a> |
 <a href="indexa.php">Artist</a> |
 <a href="index1.php">Album</a> |
 <a href="index2.php">Played</a> |
 <a href="index3.php">Track</a> |
 <br>
 <a href="inputa.php">Tambah Artist</a> |

 <table border= "1" >
 <tr>
 <td>ID</td>
 <td>NAMA</td>
 <td>EDIT</td>
 <td>HAPUS</td>
 </tr>
 
 

 <?php foreach ($rows as $row) { ?>

 <tr>
 <td><?php echo $row['artist_id']; ?></td>
 <td><?php echo $row['artist_name']; ?></td>
<td><a href="edita.php?id=<?php echo $row['artist_id'];?>">Edit</a></td>
<td><a href="indexa.php?hapus=<?php echo $row['artist_id'];?>">Hapus</a></td>
 </tr>

 <?php } ?>
 </table>