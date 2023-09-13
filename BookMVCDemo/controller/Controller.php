<?php
require_once 'model/BookModel.php';

class Controller {

    private $bookModel;

    public function __construct() {
        $this->bookModel = new BookModel();
    }

    public function run() {
        if (!isset($_GET['book_id'])) {
            // no special book is requested, we'll show a list of all available books
            $books = $this->bookModel->AllBooks();
            include 'view/booklist.php';
        } else {
            // show the requested book
            $book = $this->bookModel->getBook($_GET['book_id']);
            include 'view/viewbook.php';
        }
    }

}