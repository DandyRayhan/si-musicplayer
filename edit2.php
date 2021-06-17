<link rel="stylesheet" href="assets/css/style.css">
<?php

require_once "app/played.php";

$id = $_GET['id'];

$played = new played();
$row = $played->edit($id);


?>

<form action="proses2.php"  method="POST">
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
            <td>Track ID</td>
            <td><input type="text" name="track_id"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
    </form>