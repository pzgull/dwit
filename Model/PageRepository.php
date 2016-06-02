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

    public function getDetailAction($id = null)
    {
        $sql = "SELECT
                  `defi`.`id`,
                  `titre`,
                  `description`,
                  `img`,
                  `success`,
                  `failed`,
                  `like`,
                  `name`,
                  `date`
                FROM
                  `defi`
                LEFT JOIN
                  `categorie` ON `defi`.`id_categorie` = `categorie`.`id`
              ";

        if ($id != null) {
            $sql .= "WHERE
                        `defi`.`id` = :id
                    ;";
        }

        $stmt = $this->pdo->prepare($sql);

        if ($id != null) {
            $stmt->bindParam(':id', $id);
        }

        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_OBJ);
    }

    public function participationAction($id = null)
    {
        $sql = "SELECT
                  `pseudo`,
                  `titre`,
                  `name`,
                  `date`
                FROM `defi_user`
                LEFT JOIN `user` ON `defi_user`.`id_user` = `user`.`id`
                LEFT JOIN `defi` ON `defi_user`.`id_defi` = `defi`.`id`
                LEFT JOIN `categorie` ON `defi`.`id_categorie` = `categorie`.`id`
                ";

        if ($id != null) {
            $sql .= "WHERE
                        `user`.`id` = :id
                    ;";
        }

        $stmt = $this->pdo->prepare($sql);

        if ($id != null) {
            $stmt->bindParam(':id', $id);
        }

        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_OBJ);
    }
}