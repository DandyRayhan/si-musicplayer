<?php

 class album {

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
$sql = "SELECT * FROM album";
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
    $artist_name = $_POST['album_name'];


    $sql = " INSERT INTO album VALUES ( :artist_id, :album_id, :album_name)";
    $stmt = $this->db->prepare($sql);
    $stmt->bindParam(":artist_id", $artist_id);
    $stmt->bindParam(":album_id", $album_id);
    $stmt->bindParam(":album_name", $album_name);

    $stmt->execute();
    
}
public function edit($id)
{
    $sql = "SELECT * FROM album WHERE artist_id=:artist_id";
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
    $album_name = $_POST['album_name'];


    $sql = "UPDATE album SET artist_id=:artist_id, album_id=:album_id, album_name=:album_name WHERE artist_id=:artist_id";
    $stmt = $this->db->prepare($sql);
    $stmt->bindParam(":artist_id", $artist_id);
    $stmt->bindParam(":album_id", $album_id);
    $stmt->bindParam(":album_name", $album_name);

    $stmt->execute();
    
}

public function hapus($id)
{
    $sql = "DELETE FROM album WHERE artist_id=:artist_id";
    $stmt = $this->db->prepare($sql);
    $stmt->bindParam(":artist_id", $id);
    $stmt->execute();

    
}
}