<?php

use Shop\Book;
use Shop\Product;
use Shop\CD;

require_once __DIR__ . '/autoload.php';

//var_dump(get_class_methods(Book::class));

if(new Book() instanceof Product){
    echo 'Book class have instance in Product class';
}


if(! new Book() instanceof CD){
    echo "<br>Book class doesn't have instance in CD class";
}

echo '<br>' . get_class(new Book());