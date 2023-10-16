<?php

class Book
{
    private $isbn;
    private $title;
    private $author;
    private $available;

    public function __construct($isbn, $title, $author, $available)
    {
        $this->isbn = $isbn;
        $this->title = $title;
        $this->author = $author;
        $this->available = $available;
    }
    public function getIsbn()
    {
        return $this->isbn;
    }
    public function getTitle()
    {
        return $this->title;
    }
    public function getAuthor()
    {
        return $this->author;
    }
    public function getAvailable()
    {
        return $this->available;
    }
    private function setAvailable($available)
    {
        $this->available = $available;
    }
    public function getCopy()
    {
        if ($this->available > 0) {
            $this->available = $this->available - 1;
            return true;
        } else
            return false;
    }
    public function addCopy($num)
    {
        $this->available = $this->available + $num;
    }
    public function __toString()
    {
        return "Title : {$this->title}<br>Author : {$this->author}<br>ISBN : {$this->isbn}<br> Available Copies: {$this->available}<br>";
    }
    public function __get($property)
    {
        if (property_exists($this, $property))
            return $this->$property;
        else
            return null;
    }
    public function __set($property, $value)
    {
        if (property_exists($this, $property))
            $this->$property = $value;
        
    }
    public function __call($method, $args)
    {
        if(method_exists($this,$method))
        call_user_func_array([$this,$method], $args);
        else
            echo "$method() does not exist<br>";
    }
}
