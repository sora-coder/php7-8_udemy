<?php
require_once 'app/shop/book.php';
require_once 'app/Review/book.php';

use app\shop\Book;         //あらかじめ記述することでインスタンス製作時にnamespaceを記述しなくても良くなる
use app\Review\Book as BookReview;      //呼び出すクラス名が被った時は名前を付け替える
$book = new Book();


// $book = new app\shop\Book();        //namespaceを指定してインスタンスを作成
echo $book->getPrice(), "\n";
$book_review = new BookReview();
echo $book_review->getPoint();
