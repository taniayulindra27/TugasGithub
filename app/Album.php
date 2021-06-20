<?php
namespace App;

class album extends Koneksi{
    private $id;
    private $name;
    private $text;
    private $photo_id;

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

    public function setText($text){
        return $this->text = $text;
    }

    public function getText(){
        return $this->text;
    }

    public function setPhotoId($text){
        return $this->text = $text;
    }

    public function getPhotoId(){
        return $this->photo_id;
    }
    public function getAlbum(){
        $sql = "SELECT * FROM album order by id desc";
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
        $text = $this->getText();
        $photo_id = $this->getPhoto_id();
        
        

        $sql = "INSERT INTO album VALUES('', '$name', '$text', '$photo_id')";
        $stmt = $this->db->prepare($sql);

        $stmt->execute();
    }

    public function edit($id){
        $sql = "SELECT * FROM album WHERE id='$id'";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetch();

        return $data;
    }

    public function update(){
        $id = $this->getId();
        $name = $this->getName();
        $text = $this->getText();
        $photo_id = $this->getPhoto_id();

        $sql = "UPDATE album SET name='$name', text='$text', photo_id='$photo_id' WHERE id='$id'";
        $stmt = $this->db->prepare($sql);

        $stmt->execute();
    }

    public function delete(){
        $id = $this->getId();

        $sql = "DELETE FROM album WHERE id='$id'";
        $stmt = $this->db->prepare($sql);

        $stmt->execute();        
    }     
}