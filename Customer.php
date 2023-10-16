<?php

class Customer
{
    private $id;
    private $firstName;
    private $lastName;
    private $email;

    public function __construct($id, $firstName, $lastName, $email)
    {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
    }
    public function getID()
    {
        return $this->id;
    }
    public function getFirstName()
    {
        return $this->firstName;
    }
    public function getLastName()
    {
        return $this->lastName;
    }
    public function getEmail()
    {
        return $this->email;
    }
    private function setEmail($email)
    {
        $this->email = $email;
    }
    public function __toString()
    {
        return "ID : {$this->id}<br>Name : {$this->firstName} {$this->lastName}<br>Email : {$this->email}<br>";
    }
    public function __get($property)
    {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
        return null;
    }
    public function __set($property, $value)
    {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }
    }
    public function __call($method, $args)
    {
        if (method_exists($this, $method))
            call_user_func_array([$this, $method], $args);
        else
            echo "$method() does not exist<br>";
    }
}
