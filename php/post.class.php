<?php
// Class responible for managing the data from post table
class Post extends Db {

  function posts($userId){
    $sql = "SELECT id, content, views_counter, created, updated FROM post WHERE user_id = ? ORDER BY id DESC"; //rows are sorted by descending order
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$userId]);
    $rows = $stmt->fetchAll();

    return $rows;
  }

  function deletePost($id){
    $sql = "DELETE FROM post WHERE id = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$id]);
  }

  function createPost($userId, $content){
    $sql = "INSERT INTO post (user_id, content, created, updated) VALUES (?, ?, ?, ?)";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$userId, $content, date("Y-m-d h:i:s"), date("Y-m-d h:i:s")]);
  }


}
