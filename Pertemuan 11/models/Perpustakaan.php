<?php
    class Perpustakaan{
        private $mysqli;
        public function __construct($conn)
        {
            $this->mysqli = $conn;
        }

        public function tampil($id=null){
            $db = $this->mysqli->conn;
            $sql = "SELECT * FROM buku ";
            $query = $db->query($sql) or die($db->error);
            return $query;
        }
        public function tampilsort($sort,$field){
            $db = $this->mysqli->conn;
            $sql = "SELECT * FROM buku ORDER BY $field $sort";
            $query = $db->query($sql) or die($db->error);
            return $query;
        }
        public function filter($q,$column){
            $db = $this->mysqli->conn;
            $sql = "SELECT * FROM buku WHERE $column LIKE '%$q%'";
            $query = $db->query($sql) or die($db->error);
            return $query;
        }
    }
?>