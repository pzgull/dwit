<?php
/**
 * Created by PhpStorm.
 * User: Quentin
 * Date: 26/05/2016
 * Time: 16:53
 */

namespace Controller;


class FrontController
{
    public function __construct(\PDO $pdo)
    {
        if (isset($_GET['route'])) {
            $currRoute = $_GET['route'];
        } else {
            $currRoute = APP_DEFAULT_ROOT;
        }

        $controller = new PageController($pdo);

        switch ($currRoute) {
            case 'connect':
                $methodName = 'connectAction';
                break;
            default:
                $methodName = 'displayAction';
                break;
        }
        echo $controller->$methodName();
    }
}