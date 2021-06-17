<link rel="stylesheet" href="assets/css/style.css">
<?php

require_once "app/track.php";

$id = $_GET['id'];

$track = new track();
$row = $track->edit($id);


?>

<form action="proses3.php"  method="POST">
<h2>INPUT KATEGORI</h2>

    <table>
        <tr>
            <td>Track ID</td>
            <td><input type="text" name="track_id" value="<?php echo $row['track_id'];?>"></td>
        </tr>
        <tr>
            <td>Track Nama</td>
            <td><input type="text" name="track_name"></td>
        </tr>
        <tr>
            <td>Artist ID</td>
            <td><input type="text" name="artist_id"></td>
        </tr> <tr>
            <td>Album ID</td>
            <td><input type="text" name="album_id"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
    </form>