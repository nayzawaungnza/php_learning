<?php
namespace core;

use core\Session;

class Redirect
{
    public static function to($location)
    {
        header("Location: $location");
        exit;
    }

    public static function back()
    {
        $referer = $_SERVER['HTTP_REFERER'] ?? '';
        self::to($referer);
    }
}



// function withErrors($errors)
// {
//     Session::start();
//     Session::set('errors', $errors);
// }

// function withInput($input)
// {
//     Session::start();
//     Session::set('input', $input);
// }

// Example usage
// Session::start();

// $errors = ['Validation failed.'];

// // Redirect back with errors and input
// withErrors($errors);
// withInput(['txtname' => 'John', 'txtemail' => 'john@example.com']);

// // Redirect back
// Redirect::back();

?>
