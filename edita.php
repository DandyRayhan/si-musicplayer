<link rel="stylesheet" href="assets/css/style.css">
<?php

require_once "app/artist.php";

$id = $_GET['id'];

$musik = new musik();
$row = $musik->edit($id);


?>

<form action="prosesa.php"  method="POST">
<h2>INPUT KATEGORI</h2>

    <table>
        <tr>
            <td>ID</td>
            <td><input type="text" name="artist_id" value="<?php echo $row['artist_id'];?>"></td>
        </tr>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="artist_name"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
    </form>