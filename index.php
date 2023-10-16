<?php
require_once 'Book.php';
require_once 'Customer.php';

$book = new Book(12345687,"Adventures of Tom Sawye","Mark Twain",35);
$customer = new Customer(101, "Shahriar", "Hasan", "shs@gmail.com");

echo $book;
echo "<br>";
echo $customer;
echo "<br>";

$book->setAvailable(4);
$customer->setEmail('hello@gmail.com');

echo $book;
echo "<br>";
echo $customer;
echo "<br>";

$book->available = 10;
$customer->email = "hasan@gmail.com";

echo $book;
echo "<br>";
echo $customer;
echo "<br>";

if ($book->getCopy()) {
    echo "Copy acquired!<br>";
} else {
    echo "No copies available.<br>";
}

$book->addCopy(20);
echo $book;
echo "<br>";

