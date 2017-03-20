<?php
/*
<?php
include('db.php');

$db = new DB();
$db->connect('DBName');

$user = $db->loginUser('Username', 'Password');
u319171765_holes
*/
include ('privateShizzle.php');

class DB {
  
  private $servername;
  private $username;
  private $password;
  private $conn;

   public function __construct() {
    $this->servername = $servername;
    $this->username = $username;
    $this->password = $password;
  }

  public function connect($dbName) {
    try {
      $this->conn = new PDO("mysql:host=$this->servername;dbname=$dbName", $this->username, $this->password);

      $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      return true;
    }
    catch (PDOException $e) {
      return "Connection failed: " . $e->getMessage();
    }
  }

  public function loginUser($username, $password) {
    $this->connect('u319171765_holes');
    try {
      $stmt = $this->conn->prepare('SELECT * FROM users WHERE user = :user');
      $stmt->bindParam(':user', $username);

      $stmt->execute();

      $result = $stmt->fetchAll();

      if ($result[0]) {
        $result = $result[0];

        if (hash('sha256', $password . 'Izzy') == $result['password']) {
          session_start();
          $_SESSION['user'] = $result['user'];

          return true;
        }
      }

      return false;
    }
    catch (PDOException $e) {
      return "Error: " . $e->getMessage();
    }
  }

  public function storeUser($username, $password) {
    $this->connect('u319171765_holes');
    $password = hash('sha256', $password . 'Izzy');

    try {
      $stmt = $this->conn->prepare('INSERT INTO users (user, password) VALUES (:user, :password)');
      $stmt->bindParam(':user', $username);
      $stmt->bindParam(':password', $password);

      $stmt->execute();

      return true;
    }
    catch (PDOException $e) {
      return "Error: " . $e->getMessage();
    }
  }

// New method
  public function addComment($user, $comment, $story, $date1)
  {
    // Connect to db
    $this->connect('u319171765_holes');
    try {
      // Prepare query                                                                              these are variables
      $query = $this->conn->prepare('INSERT INTO `comment` (user, comment, chapter, `date`) VALUES (:user, :comment, :story, :date1)');

      // Insert params to query
      $query->bindParam(':user', $user);
      $query->bindParam(':comment', $comment);
      $query->bindParam(':story', $story);
      $query->bindParam(':date1', $date1);

// Execute query
      $x = $query->execute();
      
      return $x;
    } 
    catch (PDOException $e){ return "Error: " + $e->getMessage();}
  }

  public function selectComment($user)
  {
    // Connect to db
    $this->connect('u319171765_holes');
    try
    {
        $query = $this->conn->prepare('SELECT * FROM `comment` WHERE `user` = :user');
        $query->bindParam(':user', $user);
        $query->execute();

        $result = $query->fetchAll();
        var_dump($result);
        return $result;
    }
    catch (PDOException $e) { return "Error: " + $e->getMessage();}

  }
}