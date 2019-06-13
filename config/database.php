<?php
class Database {
  // Database credentials
  private $db_host = 'localhost';
  private $db_name = 'php_oop_crud_level_1';
  private $db_user = 'root';
  private $db_pass = '';
  public $conn;
  
  public function getConnection() {
    
    $this->conn = null;
    
    try {
      $this->conn = new PDO("mysql:host=" . $this->db_host . ";dbname=" . $this->db_name, $this->db_user, $this->db_pass);
    } catch(PDOException $exception) {
      echo "Connection Error: " . $exception->getMessage();
    }
    
    return $this->conn;
  }
}