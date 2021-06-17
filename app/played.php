<?php

 class played {

 private $db;

 public function __construct()
 {
 try {

 $this->db =
 new PDO("mysql:host=localhost;dbname=db_musik", "root", "");

 } catch (PDOException $e) {
 die ("Error " . $e->getMessage());
 }
 }

public function tampil()
{
$sql = "SELECT * FROM played";
$stmt = $this->db->prepare($sql);
$stmt->execute();

$data = [];
while ($rows = $stmt->fetch()) {
$data[] = $rows;
}

 return $data;
 }

public function input()
{
    $artist_id = $_POST['artist_id'];
    $album_id = $_POST['album_id'];
    $track_id = $_POST['track_id'];
   

    $sql = " INSERT INTO played VALUES ( :artist_id, :album_id, :track_id)";
    $stmt = $this->db->prepare($sql);
    $stmt->bindParam(":artist_id", $artist_id);
    $stmt->bindParam(":album_id", $album_id);
    $stmt->bindParam(":track_id", $track_id);
   
    $stmt->execute();
    
}
public function edit($id)
{
    $sql = "SELECT * FROM played WHERE artist_id=:artist_id";
    $stmt = $this->db->prepare($sql);
    $stmt->bindParam(":artist_id", $id);
    $stmt->execute();

    $row = $stmt->fetch();

    return $row;
}

public function update()
{
    $artist_id = $_POST['artist_id'];
    $album_id = $_POST['album_id'];
    $track_id = $_POST['track_id'];
   


    $sql = "UPDATE played SET artist_id=:artist_id, album_id=:album_id, track_id=:track_id WHERE artist_id=:artist_id";
    $stmt = $this->db->prepare($sql);
    $stmt->bindParam(":artist_id", $artist_id);
    $stmt->bindParam(":album_id", $album_id);
    $stmt->bindParam(":track_id", $track_id);
   


    $stmt->execute();
    
}

public function hapus($id)
{
    $sql = "DELETE FROM played WHERE artist_id=:artist_id";
    $stmt = $this->db->prepare($sql);
    $stmt->bindParam(":artist_id", $id);
    $stmt->execute();

    
}
}