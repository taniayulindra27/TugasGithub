<?php

namespace App;

class Photo extends Koneksi{
    private $id;
    private $date;
    private $text;
    private $title;
    private $post_id;

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


    public function setTitle($title){
        return $this->title = $title;
    }

    public function getTitle(){
        return $this->title;
    }
    public function setText($text){
        return $this->text = $text;
    }

    public function getText(){
        return $this->text;
    }
    public function setPost_id($post_id){
        return $this->post_id = $post_id;
    }

    public function getPost_id(){
        return $this->post_id;
    }
    

    public function getPhoto(){
        $sql = "SELECT * FROM photos order by id desc";
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
        $title = $this->getTitle();
        $text = $this->getText();
        $post_id = $this->getPost_id();
        
        

        $sql = "INSERT INTO photos VALUES('', '$date', '$title', '$text', '$post_id')";
        $stmt = $this->db->prepare($sql);

        $stmt->execute();
    }

    public function edit($id){
        $sql = "SELECT * FROM photos WHERE id='$id'";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetch();

        return $data;
    }

    public function update(){
        $id = $this->getId();
        $date = $this->getDate();
        $title = $this->getTitle();
        $text = $this->getText();
        $post_id = $this->getPost_id();

        $sql = "UPDATE photos SET date='$date', title='$title', text='$text', post_id='$post_id', WHERE id='$id'";
        $stmt = $this->db->prepare($sql);

        $stmt->execute();
    }

    public function delete(){
        $id = $this->getId();

        $sql = "DELETE FROM photos WHERE id='$id'";
        $stmt = $this->db->prepare($sql);

        $stmt->execute();        
    }  
}