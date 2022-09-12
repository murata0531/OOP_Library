<?php

include 'classes/Library.php'; 
$lib_obj = new Library;

if(isset($_POST['save-book'])){
    $book_name = trim(htmlspecialchars($_POST['book-name'], ENT_QUOTES, 'UTF-8'));
    $book_genre = trim(htmlspecialchars($_POST['book-genre'], ENT_QUOTES, 'UTF-8'));
    $book_author = trim(htmlspecialchars($_POST['book-author'], ENT_QUOTES, 'UTF-8'));
    $date_added = trim(htmlspecialchars($_POST['book-date-added'], ENT_QUOTES, 'UTF-8'));

    $lib_obj->add_book($book_name,$book_genre,$book_author,$date_added);

    
}elseif(isset($_POST['update-book'])){
    $book_id = trim(htmlspecialchars($_POST['book_id'], ENT_QUOTES, 'UTF-8'));
    $book_name = trim(htmlspecialchars($_POST['book-name'], ENT_QUOTES, 'UTF-8'));
    $book_genre = trim(htmlspecialchars($_POST['book-genre'], ENT_QUOTES, 'UTF-8'));
    $book_author = trim(htmlspecialchars($_POST['book-author'], ENT_QUOTES, 'UTF-8'));
    $date_added = trim(htmlspecialchars($_POST['book-date-added'], ENT_QUOTES, 'UTF-8'));

    $lib_obj->update_book($book_name,$book_genre,$book_author,$date_added,$book_id);
   
}

?>