<?php
/**
 * Created by PhpStorm.
 * User: Quentin
 * Date: 26/05/2016
 * Time: 16:35
 */

namespace Model;


class PageRepository
{
    private $pdo;

    public function __construct(\PDO $pdo)
    {
        $this->pdo = $pdo;
    }

}