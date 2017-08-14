<?php

namespace Seaon\Database;

class Model
{
    private $db = null;

    public function __construct()
    {
        $user = 'root';
        $password = '';
        $dsn = "mysql:dbname=blog;host=127.0.0.1";
        try {
            $this->db = new \PDO($dsn, $user, $password);
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
    }

    public function select($sql)
    {
        $result = $this->db->query($sql);
        return $result->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function insert($sql)
    {
        $result = $this->db->exec($sql);
        return $result;
    }

    public function delete($sql)
    {
        $result = $this->db->exec($sql);
        return $result;
    }

    public function update($sql)
    {
        $result = $this->db->exec($sql);
        return $result;
    }

}