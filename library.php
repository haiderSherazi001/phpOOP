<?php
class Book{
    public $title;
    public $author;
    public $year;

    function __construct($title,$author,$year){
        $this->title = $title;
        $this->author = $author;
        $this->year = $year;
    }

    function __destruct(){
        echo "The book '{$this->title}' is being destroyed.<br>";
    }
}

class Library{
    public $books = [];
    function addBook(Book $book){
        $this->books[] = $book;
    }
    function findBook($title){
        foreach($this->books as $index => $searchingBook){
            if($this->title === $searchingBook){
                echo "The book {$title} is found!!";
                return;
            }
        }
        echo "The book {$title} is not found!!";
    }
    function removeBook($title){
        foreach($this->books as $index => $searchingBook){
            if($this->title === $searchingBook){
                unset($this->books[$index]);
                $this->books = array_values($this->books);
                echo "Book {$title} removed successfully!!! <br>";
                return;
            }
        }
        echo "Book {$title} not found!!!";
    }

    function listBooks(){
    if (empty($this->books)) {
                echo "No books in the library.<br>";
                return;
            }

            echo "The list of all books is:<br>";
            echo "<ol>";
            foreach ($this->books as $book) {
                // print each book as a list item with title, author and year
                echo "<li>{$book->title} by {$book->author} ({$book->year})</li>";
            }
            echo "</ol>";
}
}

$atomicHabits = new Book("Atomic Habits","James Clear","2018");
$richDadPoorDad = new Book("Rich Dad Poor Dad","Robert Kiyosaki","1997");
$dopamineNation = new Book("Dopamine Nation", "Anna Lembke","2021");

$myLibarary = new Library();
$myLibarary->addBook($atomicHabits);
$myLibarary->addBook($richDadPoorDad);
$myLibarary->addBook($dopamineNation);

$myLibarary->listBooks();

?>