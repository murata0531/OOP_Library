<?php 
include 'Database.php';

class Library extends Database {

    public function add_book($bkName,$bkGenre,$bkAuthor,$bkDate){
        
        $stmt = $this->conn->prepare("INSERT INTO books(book_name,book_genre,book_author,date_added)VALUES(?, ?, ?, cast(? as date))");
        $stmt->bind_param('ssss', $book_name, $book_genre, $book_author, $book_date);

        $book_name = $bkName;
        $book_genre = $bkGenre;
        $book_author = $bkAuthor;
        $book_date = $bkDate;

        if($stmt->execute()){
            $stmt->close();
        	$this->conn->close();
            header('location:Read.php');
        }else{
            die('ERROR: '.$this->conn->error);
        }
    }

    public function display_books(){
        $sql = "SELECT * FROM books";
        $result = $this->conn->query($sql);

        $this->conn->close();

        if($result->num_rows > 0){
            $container = array();
            while($row = $result->fetch_assoc()){
                $container[] = $row;
            }

            return $container;

        }else{
            return FALSE; 
        }
    }

    public function delete_book($id){
        $sql ="DELETE FROM books WHERE book_id = '$id'";
        $result = $this->conn->query($sql);

        $this->conn->close();

        if($result == TRUE){
            header('location:Read.php');
        }else{
            die('ERROR: '.$this->conn->error);
        }
    }

    public function get_one_data($id){
        $sql = "SELECT * FROM books WHERE book_id = '$id'";
        $result = $this->conn->query($sql);

        $this->conn->close();
        
        if($result == FALSE){
            echo "no data found";
        }else{
            return $result->fetch_assoc();
        }

    }

    public function update_book($bkName,$bkGenre,$bkAuthor,$bkDate,$id){
        
        $stmt = $this->conn->prepare("UPDATE books SET book_name = ?, book_genre = ?, book_author = ?, date_added = cast(? as date) WHERE book_id = ?");
        $stmt->bind_param('ssssi', $book_name, $book_genre, $book_author, $book_date, $book_id);

        $book_name = $bkName;
        $book_genre = $bkGenre;
        $book_author = $bkAuthor;
        $book_date = $bkDate;
        $book_id = $id;

        if($stmt->execute()){
            $stmt->close();
        	$this->conn->close();
            header('location:Read.php');
        }else{
            die('ERROR: '.$this->conn->error);
        }
    }
}

?>