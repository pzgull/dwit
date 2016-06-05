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
        return $this->render('home.php');
    }

    public function displayAction()
    {
        return $this->render('home.php');
    }

    public function displayPage()
    {
        return $this->render('detail.php');
    }

    public function details()
    {
        return json_encode($this->repository->getDetailAction($_GET['id']));
    }

    public function participation()
    {
        return json_encode($this->repository->participationAction($_GET['id']));
    }

    public function getCategorie()
    {
        return json_encode($this->repository->getCategorieAction());
    }
    public function getLike()
    {
        return $this->repository->getLikeAction($_GET['id'], $_GET['a']);
    }

    public function getSuccess()
    {
        $element = '';
        switch ($_GET['a']) {
            case 'getlike':
                $element = 'like';
                break;
            case 'getsuccess':
                $element = 'success';
                break;
            case 'getfailed':
                $element = 'failed';
                break;
        }
        return json_encode($this->repository->getLikeAction($_GET['id'], $element));
    }
    public function addLike()
    {
        $nb = $this->getLike();
        $nb = intval($nb[$_GET['a']]) + 1;
        $this->repository->addLikeAction($_GET['id'], $_GET['a'], $nb);
        return $this->render('detail.php');
    }
    public function addChallenge()
    {
        session_start();
        $idCat = $this->repository->getIdCategory($_POST['category']);
        $this->repository->addChallengeAction($_POST['titre'], $_POST['description'], $idCat, $_SESSION['login']);
        return $this->render('home.php');
    }
}