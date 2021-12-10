<?php
include_once "App/Models/UserModel.php";

class AuthController
{


    protected $authController;

    public function __construct()
    {
        $this->authController = new UserModel();
    }


    function showLogin()
    {  if(!empty($_SESSION["userName"])) {
        header("location:index.php?page=User-list");
    }else
        include_once "App/Views/autho/login.php";
    }

    public function Login($request) {
        $email = $request["email"];
        $password = $request["password"];
       if($this->authController->checkLogin($email,$password)) {
           $_SESSION["user"] = $this->authController->getByEmail($_REQUEST);
           header("location: index.php?page=User-list");

       }else{
           header("location: index.php?page=login");
       }
    }

    public function logout() {
        session_destroy();
        header("location:index.php?page=login");
    }


}