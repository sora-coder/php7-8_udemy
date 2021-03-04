<?php
$book = new stdClass();
$book->name = 'PHP入門';
$book->price = 1500;

echo $book->name;

// $book_name = 'PHP入門';
// $book_price = 1500;

$book = [
    'name' => 'PHP入門',
    'price' => 1500
];
echo $book['name'];
