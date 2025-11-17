<?php
include 'db_connection.php';

class User1 {

    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    // Register function
    public function register($FirstName, $LastName, $email, $password) {

        $pass = password_hash($password, PASSWORD_DEFAULT);

        // ✔ FIXED SQL — NO SINGLE QUOTES ON COLUMN NAMES
        $sql = "INSERT INTO user_data (first_name, last_name, email, password)
                VALUES ('$FirstName', '$LastName', '$email', '$pass')";

        return $this->db->conn->query($sql);
    }

    // Login function
    public function login($email, $password) {

        $sql = "SELECT * FROM user_data WHERE email = '$email'";
        $result = $this->db->conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();

            if (password_verify($password, $row['password'])) {
                return $row;
            }
        }

        return false;
    }
}
?>
