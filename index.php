<?php

/*
 * Sayed Jalal Sadat
 * 328/week6/index.php
 * Controller for week6 project
 */

//Turn on error reporting
ini_set('display_error', 1);
error_reporting(E_ALL);

// Require the autoload file
require_once ('vendor/autoload.php');

//Create an F3 (Fat-Free framework) object
//instantiate      (::) is a static method which is invoking it from class
$f3 = Base::instance();


//Define a default route
$f3->route('GET /', function($f3){
    //echo '<h1>Hello world!</h1>';

    // Add data to F3 "hive"
    $f3->set('title', 'Welcome to Week 6: Templating');
    $f3->set('color', 'green');
    $f3->set('food', 'pizza');
    $f3->set('temp', 67);

    //Add a radisu variable to you controller
    $f3->set('radius', 30);
    //Template: Print the circumferance of a circle

    // C = 2 * PI * radius
    //PHP has a pi() function
    // Round to 3 decimal places

    $fruit = array('banana', 'apple', 'kiwi');
    $f3->set('fruits', $fruit);

    $vegies = array('Cabbage', 'Broccoli', 'Carrots');
    $f3->set('vegetables', $vegies);



    //Display a view page
    $view = new Template();
    echo $view->render('views/info.html');
});

//Add an .htaccess file to enable routing
//$f3->route('Get /page2', function () {
    //echo "Page 2";
//});

$f3->run();
