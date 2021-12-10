<?php
include_once "BaseModel.php";

class PostModel extends BaseModel
{

    protected $table = "posts";

   function createPost($request) {
       $sql = "INSERT INTO $this->table(title,content,post_time,user_id) values (?,?,?,?)";
       $stmt = $this->connect->prepare($sql);
       $stmt->bindParam(1,$request["title"]);
       $stmt->bindParam(2,$request["content"]);
       $stmt->bindParam(3,$request["post_time"]);
       $stmt->bindParam(4,$request["user_id"]);
       $stmt->execute();
   }

   function updatePost($request) {
       $id= $request["id"];
       $sql = "UPDATE $this->table SET title=?,content =?,post_time=?,user_id=? WHERE id=".$id;
       $stmt = $this->connect->prepare($sql);
       $stmt->bindParam(1,$request["title"]);
       $stmt->bindParam(2,$request["content"]);
       $stmt->bindParam(3,$request["post_time"]);
       $stmt->bindParam(4,$request["user_id"]);
       $stmt->execute();
   }
}