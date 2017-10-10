<?php

namespace Seaon\Database;

class Model
{
    private $db = null;
    protected $user = '';
    protected $password = '';

    public function __construct(array $config)
    {
        $dsn = "mysql:dbname=dev;host=192.168.10.140";

        try {
            $this->db = new \PDO($dsn, $user, $password);
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }

        return $this->db;
    }

    protected function connect()
    {
        $dsn = "mysql:dbname=dev;host=192.168.10.140";

        try {
            $this->db = new \PDO($dsn, $user, $password);
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }

        return $this->db;
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
