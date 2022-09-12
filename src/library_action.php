<?php

include 'classes/Library.php'; 
$lib_obj = new Library;

if(isset($_POST['save-book'])){
    $book_name = trim(htmlspecialchars($_POST['book-name']));
    $book_genre = trim(htmlspecialchars($_POST['book-genre']));
    $book_author = trim(htmlspecialchars($_POST['book-author']));
    $date_added = trim(htmlspecialchars($_POST['book-date-added']));

    $lib_obj->add_book($book_name,$book_genre,$book_author,$date_added);

    
}elseif(isset($_POST['update-book'])){
    $book_id = trim(htmlspecialchars($_POST['book_id']));
    $book_name = trim(htmlspecialchars($_POST['book-name']));
    $book_genre = trim(htmlspecialchars($_POST['book-genre']));
    $book_author = trim(htmlspecialchars($_POST['book-author']));
    $date_added = trim(htmlspecialchars($_POST['book-date-added']));

    $lib_obj->update_book($book_name,$book_genre,$book_author,$date_added,$book_id);
   
}

?>