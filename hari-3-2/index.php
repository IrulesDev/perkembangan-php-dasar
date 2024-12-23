<?php
// <!-- ### Challenge: Build a Library Management System

// #### Scenario
// You are tasked with creating a simple Library Management System using Object-Oriented Programming (OOP) principles in PHP. The system should handle books and members and allow basic operations like borrowing and returning books.

// #### Requirements

// 1. *Classes and Objects*:
//    - Create the following classes:
//      - Book
//      - Member
//      - Library

// 2. *Attributes*:
//    - The Book class should have:
//      - title (string)
//      - author (string)
//      - isbn (string, unique identifier)
//      - isBorrowed (boolean)
//    - The Member class should have:
//      - name (string)
//      - memberId (string, unique identifier)
//      - borrowedBooks (array of Book objects)
//    - The Library class should have:
//      - books (array of Book objects)
//      - members (array of Member objects)

// 3. *Methods*:
//    - Book:
//      - A method to toggle the isBorrowed status.
//    - Member:
//      - A method to borrow a book (adds the book to the member's borrowedBooks if it is available).
//      - A method to return a book (removes it from the member's borrowedBooks).
//    - Library:
//      - A method to add books to the library.
//      - A method to register members.
//      - A method to find a book by its ISBN.
//      - A method to check a book's availability.

// 4. *Behavior*:
//    - A member should not be able to borrow more than 3 books at a time.
//    - A book should not be borrowed if it is already borrowed by another member.+++
//    - Borrowed books should be returned before they can be borrowed by another member.

// 5. *Challenge Implementation*:
//    Write the code to demonstrate the following:
//    - Add books to the library.
//    - Register members.
//    - Borrow and return books, following the rules above.
//    - Display a list of all borrowed books and the members who borrowed them.

// #### Example Usage

// php
// $library = new Library();

// // Add books
// $library->addBook(new Book("1984", "George Orwell", "1234567890"));
// $library->addBook(new Book("To Kill a Mockingbird", "Harper Lee", "0987654321"));

// // Register members
// $library->registerMember(new Member("Alice", "MEM001"));
// $library->registerMember(new Member("Bob", "MEM002"));

// // Borrow books
// $alice = $library->findMemberById("MEM001");
// $book = $library->findBookByIsbn("1234567890");
// $alice->borrowBook($book);

// // Return books
// $alice->returnBook($book);

// // Display all borrowed books
// $library->displayBorrowedBooks();
// 

// #### Evaluation Criteria

// 1. *Correct Use of OOP Principles*:
//    - Encapsulation: Proper use of getters/setters where necessary.
//    - Abstraction: Avoid exposing internal details of classes.
//    - Inheritance (optional): If applicable, for extending functionality.
//    - Polymorphism (optional): If applicable, for flexibility.

// 2. *Code Readability*:
//    - Clear method and variable names.
//    - Proper indentation and formatting.
//    - Sufficient comments explaining the code.

// 3. *Functionality*:
//    - Does the system adhere to the rules in the requirements?
//    - Is the demonstration scenario complete and working?



//start


class book{
    //property
    public $title = "";
    public $autor = "";
    public $isbn = "";
    public $isBorrowed = true / false ;

    //method
    public function status($isBorrowed){
        $this->isBorrowed = $isBorrowed;
    }
}

class member extends book{
    //property
    public $name = "";
    public $memberId = "";
    public $browwedBoook = [];

    //method
    public function getName($name){
        $this->$name = $name;
    }
    public function pinjamBuku($book){
        array_push ($this->browwedBoook ,$book);
    }
    public function kembalikanBuku($book){
        $key = array_search($book,$this->browwedBoook);

        if($key !== false){
            unset($this->browwedBoook[$key]);
            echo " buku $book telah dikembalikan oleh $this->name";
        }else{
            echo "$this->name tidak meminjam buku $book";
        }
    }
}
class libraly extends book{
//property
    public $books = [];
    public $member = [];
    //method
    public function addBook($book){
        $this->books [] = $book;
    }
    public function addMember($member){
        $this->member []= $member;
    }
    public function listBook(){
        if (empty($this->books)){
            echo "buku kosong";
        }else{
            echo "buku di libraly ada  : ";
            foreach($this->books as $book);
            echo 80;
        }
    }
}

