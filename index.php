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
        echo $view -> render('views/home.html');
    });

    // Define a breakfast route
    $f3 -> route('GET /breakfast', function() {
        // echo "Breakfast";

        $view = new Template();
        echo $view -> render('views/breakfast-menu.html');
    });

    // Define a order route
    $f3 -> route('GET|POST /order1', function($f3) {
        // echo "Order Form Part I";

        // If the form has been posted
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Validate the data
            $food = $_POST['food'];
            $meal = $_POST['meal'];

            // Put the data in the session array
            $f3 -> set ('SESSION.food', $food);
            $f3 -> set('SESSION.meal', $meal);

            // Redirect to order2 route
            $f3 -> reroute('summary'); // This is using GET
        }



        $view = new Template();
        echo $view -> render('views/order-form-1.html');
    });

    // Define a summary route
    $f3 -> route ('GET /summary', function () {
       // echo "Thank you for your order!";

        // Display a view page
        $view = new Template();
        echo $view -> render('views/order-summary.html');
    });

    // Run fat-free
    $f3 -> run();
?>