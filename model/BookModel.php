<?php
require_once 'model/Book.php';

class BookModel {

    public function AllBooks(){
        $books = array(
            1 => new Book(1, 'The Adventures of Tom Sawyer', 'Mark Twain', 'A young boy\'s adventures in the Mississippi Valley'),
            2 => new Book(2, 'The Catcher in the Rye', 'J. D. Salinger', 'A young man\'s experiences in New York City'),
        );
        return $books;
    }

    public function GetBook($id){
        $allBooks = $this->AllBooks();
        return $allBooks[$id];
    }
}