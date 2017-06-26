<?php

class DB extends PDO
{
    public function exe($sql, array $bind = null)
    {
        $stmt = $this->prepare($sql);
        $stmt->execute($bind);
        return $stmt;
    }
}

$db = new DB('mysql:host=localhost; dbname=school_vote; charset=utf8', 'root', '', array(
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
));