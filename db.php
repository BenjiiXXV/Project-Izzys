<?php
/*
<?php
include('db.php');

$db = new DB();
$db->connect('DBName');

$user = $db->loginUser('Username', 'Password');
u319171765_holes
*/

class DB {
  
  private $servername;
  private $username;
  private $password;
  private $conn;

   public function __construct() {
    $this->servername = "mysql.hostinger.nl";
    $this->username = "u319171765_izzys";
    $this->password = '15051995Bw';
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

      return isset($result[0]);
    }
    catch (PDOException $e) {
      return "Error: " . $e->getMessage();
    }
  }

  public function storeUser($email, $username, $password) {
    $this->connect('u319171765_holes');
    $password = hash('sha256', $password);

    try {
      $stmt = $this->conn->prepare('INSERT INTO `users` (email, `user`, password) VALUES (:email, :user, :password)');
      $stmt->bindParam(':user', $username);
      $stmt->bindParam(':password', $password);
      $stmt->bindParam(':email', $email);

       $x = $stmt->execute();
      
      return $x;
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
    catch (PDOException $e){ return "Error: " . $e->getMessage();}
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
        return $result;
    }
    catch (PDOException $e) { return "Error: " . $e->getMessage();}

  }

  public function selectRead($user)
  {
    // Connect to db
    $this->connect('u319171765_holes');
    try
    {
        $query = $this->conn->prepare('SELECT * FROM `chapter_read` WHERE `user` = :user');
        $query->bindParam(':user', $user);
        $query->execute();

        $result = $query->fetchAll();
        return $result;
    }
    catch (PDOException $e) { return "Error: " . $e->getMessage();}

  }

    public function loadcss($user)
  {
    // Connect to db
    $this->connect('u319171765_holes');
   
    try
    {
       $query = $this->conn->prepare('SELECT * FROM `fonts` WHERE `user` = :user');
       
        if (isset($_SESSION['user'])) {
        $query->bindParam(':user', $user);
   
        } else {
          $Default = 'Default';
        $query->bindParam(':user', $Default);
     
        }
       
        $query->execute();

        $result = $query->fetchAll();
        return $result;
    }
    catch (PDOException $e) { return "Error: " . $e->getMessage();}

  }

  public function loadTitles($page)
  {
    $this->connect('u319171765_holes');
    try
    {
      $query = $this->conn->prepare('SELECT * FROM `title_'.$page.'` ORDER BY `id` ASC');
      $query->execute();
      return $query->fetchAll();
    }
    catch(PDOException $e) { return "Error: " . $e->getMessage(); }
  }
}