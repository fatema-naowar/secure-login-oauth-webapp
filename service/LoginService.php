<?php

class LoginService
{
    public function authenticate($postData)
    {
        $model = new Model();
        $user = $model->getUserByUsername($postData['username']);

        if ($user) {
            // Recreate the hashed password using the salt from the database
            $enteredPasswordHash = md5($postData['password'] . $user['salt']);

            // Compare the hashed password with the stored password
            if ($enteredPasswordHash === $user['password']) {
                // Start the session and set session variables



		session_start();

		// Set session variables
		$_SESSION["favcolor"] = "green";
		$_SESSION["favanimal"] = "cat";
                
                $_SESSION["username"] = $user['username']; // Store the username in session

                header('Location: secure_home.php');
                exit(); // Always exit after a header redirect
            } else {
                return 'Invalid password. Please try again.';
            }
        } else {
            return 'User not found. Please try again.';
        }
    }
}
