<link rel="stylesheet" href="assets/css/style.css">
<form action="proses3.php"  method="POST">
<h2>INPUT KATEGORI</h2>
<a href="indexa.php">Artist</a> |
 <a href="index1.php">Album</a> |
 <a href="index2.php">Played</a> |
 <a href="index3.php">Track</a> |

 <br>
 <a href="input3.php">Tambah Track</a> |
 
    <table>
        <tr>
            <td>Track ID</td>
            <td><input type="text" name="track_id"></td>
        </tr>
        <tr>
            <td>Track Nama</td>
            <td><input type="text" name="track_name"></td>
        </tr>
        <tr>
            <td>Artist ID</td>
            <td><input type="text" name="artist_id"></td>
        </tr>
        <tr>
            <td>Album ID</td>
            <td><input type="text" name="album_id"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_proses" value="SIMPAN"></td>
        </tr>
    </table>
    </form>