<?php

namespace App;
use PDO;
class Koneksi{
    public function __construct()
    {
        try{
            $this->db = new PDO("mysql:host=localhost;dbname=dbuts", "root", "");
        }catch (PDOException $e){
            die ("Error : " . $e->getMessage());
        }
    }
}