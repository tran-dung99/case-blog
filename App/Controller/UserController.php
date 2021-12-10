<?php
include_once "App/Models/UserModel.php";

class UserController
{
    protected $userController;

    public function __construct()
    {
        $this->userController = new UserModel();
    }

    public function showAll()
    {
        $users = $this->userController->getAll();
        include_once "App/Views/User/List.php";
    }

    public function Delete()
    {
        if (isset($_REQUEST["id"])) {
            $this->userController->deleteById($_REQUEST["id"]);
            header("location:index.php?page=User-list");
        }
    }

    public function create()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            include_once "App/Views/User/Create.php";
        } else {
            if (isset($_FILES["fileToUpLoad"])) {
                $targetFolder = "upload/";
                $nameImage = time().basename($_FILES["fileUpToLoad"]["name"]);
                $targetFile = $targetFolder . $nameImage;
                if (move_uploaded_file($_FILES["fileToUpLoad"]["tmp_name"], $targetFile)) {
                    echo "Upload file thành công";
                } else {
                    echo "Upload file không thành công";
                }
                $_REQUEST['image'] = $nameImage;
            }
            $this->userController->createUser($_REQUEST);
            header("location:index.php?page=User-list");
        }
    }

    public function detail()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $user = $this->userController->getById($_REQUEST);
            include_once "App/Views/User/Detail.php";
        }
    }

    public function editUser()
    {
        if ($_REQUEST["id"]) {
            $user = $this->userController->getById($_REQUEST);
            include_once "App/Views/User/Update.php";
        }
    }

    public function update()
    {
        if ($_REQUEST["id"]) {
            $this->userController->store($_REQUEST);
            header("location:index.php?page=User-list");
        }
    }

    public function search()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $users = $this->userController->searchUser($_REQUEST["search"]);
            include_once "App/Views/User/List.php";
        }
    }
}