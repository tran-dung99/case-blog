<?php
include_once "BaseModel.php";

class UserModel extends BaseModel
{
    protected $table = "users";

    public function checkLogin($email,$password)
    {
        $sql = "SELECT * FROM $this->table WHERE email=? and password=?";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1,$email);
        $stmt->bindParam(2,$password);
        $stmt->execute();
       return $stmt->rowCount() > 0;
    }

    public function getByEmail($request) {
        $email = $request["email"];
        $sql = "SELECT * FROM $this->table WHERE email=?";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1,$email);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function createUser($request) {
        $sql = "INSERT INTO $this->table(name,birthday,address,password,email,image) values (?,?,?,?,?,?)";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1,$request["name"]);
        $stmt->bindParam(2,$request["birthday"]);
        $stmt->bindParam(3,$request["address"]);
        $stmt->bindParam(4,$request["password"]);
        $stmt->bindParam(5,$request["email"]);
        $stmt->bindParam(6,$request["image"]);
        $stmt->execute();
    }

  public function store($request){
        $id= $request["id"];
        $sql = "UPDATE $this->table SET name=?,birthday=?,address=?,email=? WHERE id=".$id;
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1,$request["name"]);
        $stmt->bindParam(2,$request["birthday"]);
        $stmt->bindParam(3,$request["address"]);
        $stmt->bindParam(4,$request["email"]);
        $stmt->execute();
  }

  public function searchUser($key) {
        $sql= "SELECT * FROM $this->table WHERE name like '%$key%'";
        $stmt=$this->connect->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
  }
}