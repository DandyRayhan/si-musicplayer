<?php

 class musik {

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
$sql = "SELECT * FROM artist";
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
    $artist_name = $_POST['artist_name'];

    $sql = " INSERT INTO artist VALUES ( :artist_id, :artist_name)";
    $stmt = $this->db->prepare($sql);
    $stmt->bindParam(":artist_id", $artist_id);
    $stmt->bindParam(":artist_name", $artist_name);
    $stmt->execute();
    
}
public function edit($id)
{
    $sql = "SELECT * FROM artist WHERE artist_id=:artist_id";
    $stmt = $this->db->prepare($sql);
    $stmt->bindParam(":artist_id", $id);
    $stmt->execute();

    $row = $stmt->fetch();

    return $row;
}

public function update()
{
    $artist_id = $_POST['artist_id'];
    $artist_name = $_POST['artist_name'];

    $sql = "UPDATE artist SET artist_id=:artist_id, artist_name=:artist_name WHERE artist_id=:artist_id";
    $stmt = $this->db->prepare($sql);
    $stmt->bindParam(":artist_id", $artist_id);
    $stmt->bindParam(":artist_name", $artist_name);
    $stmt->execute();
    
}

public function hapus($id)
{
    $sql = "DELETE FROM artist WHERE artist_id=:artist_id";
    $stmt = $this->db->prepare($sql);
    $stmt->bindParam(":artist_id", $id);
    $stmt->execute();

    
}
}