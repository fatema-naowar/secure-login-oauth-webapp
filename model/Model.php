<?php
include_once("DBConn.php");

class Model
{

    // Method to store user during registration
    public function storeUser(array $data)
    {
        try {
            global $mysqli;
            $sql    = "INSERT INTO users (username,description,your_choice,password,role,salt) VALUES ('{$data['username']}','{$data['description']}','{$data['your_choice']}','{$data['password']}','{$data['role']}','{$data['salt']}')";
            $result = $mysqli->query($sql);
            return 'Registration Successful';
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    // Method to fetch user by username for login authentication
    public function getUserByUsername($username)
    {
        try {
            global $mysqli;
            $sql = "SELECT * FROM users WHERE username = ?";
            $stmt = $mysqli->prepare($sql);
            $stmt->bind_param("s", $username); // 's' indicates a string parameter
            $stmt->execute();
            $result = $stmt->get_result();
            $user = $result->fetch_assoc();

            return $user; // This will return the user data if found, or null if not found
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}
