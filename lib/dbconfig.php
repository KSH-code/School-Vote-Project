<?php

class DB extends PDO
{
    public function exe($sql, array $bind = null)
    {
        $stmt = $this->prepare($sql);
        $stmt->execute($bind);
        return $stmt;
    }

    public function transac($sql)
    {
        $status = true;
        try {
            $this->beginTransaction();
            $this->exec($sql);
            $this->commit();
        } catch (Exception $e) {
            $status = $e->getMessage();
        } finally {
            return $status;
        }
    }
    /*
        How to using transaction method
        $status = $db->transac("query");
        echo json_encode(array('result' => $status));
    */
}

$db = new DB('mysql:host=localhost; dbname=school_vote; charset=utf8', 'root', '', array(
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
));