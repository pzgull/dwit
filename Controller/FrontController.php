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
        if (isset($_GET['a'])) {
            $currRoute = $_GET['a'];
        } else {
            $currRoute = APP_DEFAULT_ROOT;
        }

        $controller = new PageController($pdo);

        switch ($currRoute) {
            case 'connect':
                $methodName = 'connectAction';
                break;
            case 'details':
                $methodName = 'details';
                break;
            case 'participation':
                $methodName = 'participation';
                break;
            case 'like':
                $methodName = 'getLike';
                break;
            case 'success':
                $methodName = 'getLike';
                break;
            case 'failed':
                $methodName = 'getLike';
                break;
            default:
                $methodName = 'displayAction';
                break;
        }
        echo $controller->$methodName();
    }
}