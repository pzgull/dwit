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
                  `date`,
                  `author`
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

    public function getCategorieAction()
    {
        $sql = "SELECT
                    `id`,
                    `name`
                FROM
                    `categorie`
                WHERE 1
                ;";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_OBJ);
    }

    public function getLikeAction($id = null, $element)
    {
        $sql = "SELECT
                    `id`
                ";
        
        switch ($element) {
            case 'like':
                $sql .= ", `like`";
                break;
            case 'success':
                $sql .= ", `success`";
                break;
            case 'failed':
                $sql .= ", `failed`";
                break;
        }

        $sql .= "FROM `defi` ";

        if ($id != null) {
            $sql .= "WHERE
                        `id` = :id
                    ;";
        }

        $stmt = $this->pdo->prepare($sql);

        if ($id != null) {
            $stmt->bindParam(':id', $id);
        }

        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_OBJ);
    }

    public function getIdCategory($category)
    {
        $sql = 'SELECT `id` FROM `categorie` WHERE `name` = :name ;';
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':name', $category);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function addChallengeAction($titre, $descr, $idCat, $author)
    {
        $sql = 'INSERT INTO
                    `defi`
                      (`titre`, `description`, `id_categorie`, `author`)
                VALUES
                      (:titre, :description, :id_categorie, :author);';
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':titre', $titre);
        $stmt->bindParam(':description', $descr);
        $stmt->bindParam(':id_categorie', $idCat);
        $stmt->bindParam(':author', $author);
        $stmt->execute();
        return $stmt;
    }
}