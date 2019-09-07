<?php

namespace App\Models;

use MyFramework\Model\Model;

class SlideShow extends Model
{
    private $id;
    private $title;
    private $text;
    private $img_location;

    public function __get($attribute)
    {
        return $this->$attribute;
    }

    public function __set($attribute, $value)
    {
        $this->$attribute = $value;
    }

    public function read()
    {
        $query = "select * from slide_show";
        $stmt = $this->db->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function update()
    {
        $query = "update slide_show set title = :title, text = :text, img_location = :img_location where id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':title', $this->__get('title'));
        $stmt->bindValue(':text', $this->__get('text'));
        $stmt->bindValue(':img_location', $this->__get('img_location'));
        $stmt->bindValue(':id', $this->__get('id'));
        $stmt->execute();

        header("Location: /");
    }
}

?>