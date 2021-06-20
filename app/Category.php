<?php

namespace App;

class Category extends Koneksi{
    private $id;
    private $name;
    private $ket;

    public function __construct(){
        Parent::__construct();
    }

    public function setId($id){
        return $this->id = $id;
    }

    public function getId(){
        return $this->id;
    }

    public function setName($name){
        return $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }

    public function setKet($ket){
        return $this->ket = $ket;
    }

    public function getKet(){
        return $this->ket;
    }

    public function getCategory(){
        $sql = "SELECT * FROM category order by id desc";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $data = [];
        while ($rows = $stmt->fetch()) {
            $data[] = $rows;
        }

        return $data;
    }
    
    public function store(){
        $name = $this->getName();
        $ket = $this->getKet();

        $sql = "INSERT INTO category VALUES('', '$name', '$ket')";
        $stmt = $this->db->prepare($sql);

        $stmt->execute();
    }

    public function edit($id){
        $sql = "SELECT * FROM category WHERE id='$id'";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetch();

        return $data;
    }

    public function update(){
        $id = $this->getId();
        $name = $this->getName();
        $ket = $this->getKet();

        $sql = "UPDATE category SET name='$name', ket='$ket' WHERE id='$id'";
        $stmt = $this->db->prepare($sql);

        $stmt->execute();
    }

    public function delete(){
        $id = $this->getId();

        $sql = "DELETE FROM category WHERE id='$id'";
        $stmt = $this->db->prepare($sql);

        $stmt->execute();        
    }
}