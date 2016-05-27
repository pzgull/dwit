<?php

namespace Model;


class ConnectionRepository
{
    private $pdo;

    public function __construct(\PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function login($pseudo)
    {
        $sql = 'SELECT
                    `pseudo`,
                    `password`
                FROM
                    `user`
                WHERE
                    `pseudo` = :pseudo
                ;';
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':pseudo', $pseudo);
        $stmt->execute();

        $row = $stmt->fetch();
        return $row;

    }
}