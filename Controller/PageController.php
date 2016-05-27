<?php

namespace Controller;


use Model\PageRepository;

class PageController extends Controller
{
    public function __construct(\PDO $pdo)
    {
        $this->repository = new PageRepository($pdo);
        $this->connect = new ConnectionController($pdo);
    }

    public function connectAction()
    {
        $this->connect->connectAction();
        return $this->render('connection.php');
    }

    public function displayAction()
    {
        return $this->render('connection.php');
    }
}