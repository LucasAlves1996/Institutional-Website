<?php

namespace App\Models;

use MyFramework\Model\Model;

class User extends Model
{
    private $id;
    private $name;
    private $email;
    private $password;

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
        $query = "insert into users(name,email,password)values(:name,:email,:password)";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':name', $this->__get('name'));
        $stmt->bindValue(':email', $this->__get('email'));
        $stmt->bindValue(':password', $this->__get('password'));
        $stmt->execute();

        return $this;
    }

    public function read()
    {
        
    }

    public function update()
    {
        
    }

    public function delete()
    {
        
    }

    public function auth()
    {
        $query = "select id, name, email from users where email = :email and password = :password";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':email', $this->__get('email'));
        $stmt->bindValue(':password', $this->__get('password'));
        $stmt->execute();

        $user = $stmt->fetch(\PDO::FETCH_ASSOC);

        if($user['id'])
        {
            $this->__set('id', $user['id']);
            $this->__set('name', $user['name']);
        }

        return $user;
    }
}

?>