<?php

 class track {

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
$sql = "SELECT * FROM track";
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
    $track_id = $_POST['track_id'];
    $track_name = $_POST['track_name'];
    $artist_id = $_POST['artist_id'];
    $album_id = $_POST['album_id'];

   

    $sql = " INSERT INTO track VALUES ( :track_id, :track_name, :artist_id, :album_id)";
    $stmt = $this->db->prepare($sql);
    $stmt->bindParam(":track_id", $track_id);
    $stmt->bindParam(":track_name", $track_name);
    $stmt->bindParam(":artist_id", $artist_id);
    $stmt->bindParam(":album_id", $album_id);
   
    $stmt->execute();
    
}
public function edit($id)
{
    $sql = "SELECT * FROM track WHERE track_id=:track_id";
    $stmt = $this->db->prepare($sql);
    $stmt->bindParam(":track_id", $id);
    $stmt->execute();

    $row = $stmt->fetch();

    return $row;
}

public function update()
{
    $track_id = $_POST['track_id'];
    $track_name = $_POST['track_name'];
    $artist_id = $_POST['artist_id'];
    $album_id = $_POST['album_id'];



    $sql = "UPDATE track SET track_id=:track_id, track_name=:track_name, artist_id=:artist_id, album_id=:album_id WHERE track_id=:track_id";
    $stmt = $this->db->prepare($sql);
    $stmt->bindParam(":track_id", $track_id);
    $stmt->bindParam(":track_name", $track_name);
    $stmt->bindParam(":artist_id", $artist_id);
    $stmt->bindParam(":album_id", $album_id);
   
   


    $stmt->execute();
    
}

public function hapus($id)
{
    $sql = "DELETE FROM track WHERE track_id=:track_id";
    $stmt = $this->db->prepare($sql);
    $stmt->bindParam(":track_id", $id);
    $stmt->execute();

    
}
}