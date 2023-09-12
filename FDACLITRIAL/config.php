<?php
define('DB_DATABASE','fdadatabase');
define('DB_USER','root');
define('DB_PASSWORD','');
define('DB_HOST','localhost');

class DB_Connect {
    private $conn;

    public function connect() {
        // Removed the require_once 'config.php'; as it's unnecessary.
        
        $this->conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
        
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
        
        $this->conn->set_charset("utf8");

        return $this->conn;
    }

    public function __destruct() {
        if ($this->conn) {
            $this->conn->close();
        }
    }
}
?>

