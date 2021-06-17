<link rel="stylesheet" href="assets/css/style.css">
<?php

require_once "app/album.php";

$id = $_GET['id'];

$album = new album();
$row = $album->edit($id);


?>

<form action="proses1.php"  method="POST">
<h2>INPUT KATEGORI</h2>

    <table>
        <tr>
            <td>Artist ID</td>
            <td><input type="text" name="artist_id" value="<?php echo $row['artist_id'];?>"></td>
        </tr>
        <tr>
            <td>Album ID</td>
            <td><input type="text" name="album_id"></td>
        </tr>
        <tr>
            <td>Album Nama</td>
            <td><input type="text" name="album_name"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
    </form>