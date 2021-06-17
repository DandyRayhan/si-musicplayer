<link rel="stylesheet" href="<?php echo ASSET; ?>css/style.css">
<form action="prosesa.php"  method="POST">
<h2>INPUT KATEGORI</h2>
<a href="indexa.php">Artist</a> |
 <a href="index1.php">Album</a> |
 <a href="index2.php">Played</a> |
 <a href="index3.php">Track</a> |

 <br>
 <a href="inputa.php">Tambah Artist</a> |


    <table>
        <tr>
            <td>Artist ID</td>
            <td><input type="text" name="artist_id"></td>
        </tr>
        <tr>
            <td>Artist NAMA</td>
            <td><input type="text" name="artist_name"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_proses" value="SIMPAN"></td>
        </tr>
    </table>
    </form>