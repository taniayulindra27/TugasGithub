<?php

namespace App;

class Post extends Koneksi{
    private $id;
    private $date;
    private $slug;
    private $title;
    private $ket;
    private $cat_id;

    public function setId($id){
        return $this->id = $id;
    }

    public function getId(){
        return $this->id;
    }

    public function setDate($date){
        return $this->date = $date;
    }

    public function getDate(){
        return $this->date;
    }

    public function setSlug($slug){
        return $this->slug = $slug;
    }

    public function getSlug(){
        return $this->slug;
    }

    public function setTitle($title){
        return $this->title =$title;
    }

    public function getTitle(){
        return $this->title;
    }
    public function setKet($ket){
        return $this->ket =$ket;
    }

    public function getKet(){
        return $this->ket;
    }
    
    public function setCat_id($cat_id){
        return $this->cat_id =$cat_id;
    }

    public function getCat_id(){
        return $this->cat_id;
    }

    public function getPost(){
        $sql = "SELECT * FROM post order by id desc";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $data = [];
        while ($rows = $stmt->fetch()) {
            $data[] = $rows;
        }

        return $data;
    }
    
    public function store(){
        $date = $this->getDate();
        $slug = $this->getSlug();
        $title = $this->getTitle();
        $ket = $this->getKet();
        $cat_id = $this->getCat_id();

        

        $sql = "INSERT INTO post VALUES('', '$date', '$slug', '$title', '$ket', '$cat_id')";
        $stmt = $this->db->prepare($sql);

        $stmt->execute();
    }

    public function edit($id){
        $sql = "SELECT * FROM post WHERE id='$id'";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetch();

        return $data;
    }

    public function update(){
        $id = $this->getId();
        $date = $this->getDate();
        $slug = $this->getSlug();
        $title = $this->getTitle();
        $ket = $this->getKet();
        $cat_id = $this->getCat_id();

        $sql = "UPDATE post SET date='$date', slug='$slug', title='$title', ket='$ket', cat_id='$cat_id' WHERE id='$id'";
        $stmt = $this->db->prepare($sql);

        $stmt->execute();
    }

    public function delete(){
        $id = $this->getId();

        $sql = "DELETE FROM post WHERE id='$id'";
        $stmt = $this->db->prepare($sql);

        $stmt->execute();        
    }
    
    


    
}