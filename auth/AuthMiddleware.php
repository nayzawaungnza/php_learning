<?php

// Start the session
session_start();

// Custom middleware class
class AuthMiddleware
{
    // Function to check if the user is authenticated
    public static function isAuthenticated()
    {
        return isset($_SESSION['user_id']);
    }

    // Middleware function for authentication
    public static function handle()
    {
        if (!self::isAuthenticated()) {
            // Redirect to the login page or perform any other action
            // header("Location: /login"); // Adjust the path to your login page
            // exit;
            redirect('login');
        }
    }
}

//AuthMiddleware::handle();

// Your protected content goes here...

?>
