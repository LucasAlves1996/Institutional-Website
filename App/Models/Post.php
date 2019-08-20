<?php

namespace App\Models;

use MyFramework\Model\Model;

class Post extends Model
{
    private $id;
    private $title;
    private $content;
    private $id_user;

    public function __get($attribute)
    {
        return $this->$attribute;
    }

    public function __set($attribute, $value)
    {
        $this->$attribute = $value;
    }

    public function create()
    {
        $query = "insert into posts(title,content,id_user)values(:title,:content,:id_user)";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':title', $this->__get('title'));
        $stmt->bindValue(':content', $this->__get('content'));
        $stmt->bindValue(':id_user', $this->__get('id_user'));
        $stmt->execute();

        return 0;
    }

    public function read()
    {
        $query = "select * from posts order by id desc";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        
        return $stmt->fetchAll();
    }

    public function update()
    {
        
    }

    public function delete()
    {
        
    }
}

?>