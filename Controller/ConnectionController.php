<?php

namespace Controller;

use Model\ConnectionRepository;

class ConnectionController
{
    public function __construct(\PDO $pdo)
    {
        $this->repository = new ConnectionRepository($pdo);
    }

    public function connectAction()
    {
        $connect = $this->repository->login($_POST['pseudo']);
        session_start();
        if($connect['password'] == $_POST['password']){
            $_SESSION['login'] = $_POST['pseudo'];
            return $_SESSION['login'];
        } else {
            session_unset();
            session_destroy();
            return $connect;
        }
    }
}