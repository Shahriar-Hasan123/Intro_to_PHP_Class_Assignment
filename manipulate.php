<?php
require_once 'Book.php';
require_once 'Customer.php';

$book = new Book(12345687, "Animal Farm", "George Orwell", 19);
$customer = new Customer(101, "Soruv", "Kumar", "skrm@gmail.com");

echo $book;
echo "<br>";
echo $customer;
echo "<br>";

$book->setAvailable(11);
$customer->setEmail('hi@gmail.com');

echo $book;
echo "<br>";
echo $customer;
echo "<br>";

$book->available = 20;
$customer->email = "kumar@gmail.com";

echo $book;
echo "<br>";
echo $customer;
echo "<br>";

if ($book->getCopy()) {
    echo "Copy acquired!<br>";
} else {
    echo "No copies available.<br>";
}

$book->addCopy(7);
echo $book;
