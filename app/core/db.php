<?php

class Database
{
    public function db_connect()
    {

        try {
            $db = new PDO(DNS, USR, PASS);
            if ($db != null) {
                return $db;
            } else {
                return null;
            }
        } catch (PDOException $e) {

            die($e->getMessage());
        }
    }

    public function read($query, $data = [])
    {

        $DB = $this->db_connect();
        $stm = $DB->prepare($query);

        if (count($data) == 0) {
            $stm = $DB->query($query);
            $check = 0;
            if ($stm) {
                $check = 1;
            }
        } else {

            $check = $stm->execute($data);
        }

        if ($check) {
            $data = $stm->fetchAll(PDO::FETCH_ASSOC);
            if (is_array($data) && count($data) > 0) {
                return $data;
            }

            return false;
        } else {
            return false;
        }
    }

    public function write($query, $data = [])
    {

        $DB = $this->db_connect();
        $stm = $DB->prepare($query);

        if (count($data) == 0) {
            $stm = $DB->query($query);
            $check = 0;
            if ($stm) {
                $check = 1;
            }
        } else {

            $check = $stm->execute($data);
        }

        if ($check) {
            return true;
        } else {
            return false;
        }
    }
}
