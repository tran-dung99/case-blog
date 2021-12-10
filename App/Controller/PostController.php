<?php
include_once "App/Models/PostModel.php";
class PostController
{
    protected $postController;
    public function __construct()
    {
        $this->postController = new PostModel();
    }

    function getAll() {
        $posts = $this->postController->getAll();
        include_once "App/Views/Post/List.php";
    }

    function add() {
        if($_SERVER["REQUEST_METHOD"] == "GET") {
            include_once "App/Views/Post/Create.php";
        }else {
            $this->postController->createPost($_REQUEST);
            header("location:index.php?page=post-list");
        }
    }

    function delete() {
        if(isset($_REQUEST["id"])) {
            $this->postController->deleteById($_REQUEST);
            header("location:index.php?page=post-list");
        }
    }

    public function detail() {
        $post = $this->postController->getById($_REQUEST);
        include_once "App/Views/Post/Detail.php";
    }

    public function displayUpdate() {
       $post = $this->postController->getById($_REQUEST);
       include_once "App/Views/Post/Update.php";
    }

    public function update() {
        $this->postController->updatePost($_REQUEST);
        header("location:index.php?page=post-list");
    }
}