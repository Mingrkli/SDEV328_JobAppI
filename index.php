<?php
    // This is my controller!

    // Turn on error reporting
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    // Require the autoload file
    // No mater how many packages I use, with the following line I can use that package anywhere
    require_once('vendor/autoload.php');

    // Instantiate the F3 (Fat-Free Framework) Base class
    $f3 = Base::instance(); // Static method would use "::"
    // In java you would write it like this, Base f3 = new Base();

    // Define a default route
    $f3 -> route('GET /', function() {
        $view = new Template();
        echo $view -> render('views/home.tml');
    });

    // Run fat-free
    $f3 -> run();
?>