<?php

// define('DB_SERVER', 'localhost');
// define('DB_USERNAME', 'root');
// define('DB_PASSWORD', '');
// define('DB_NAME', 'demo');
 

// $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 

// if($link === false){
//     die("ERROR: Could not connect. " . mysqli_connect_error());
// }
?>

<!-- CREATE TABLE users (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
); -->



<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'id17108943_duggs023');
define('DB_PASSWORD', 'UlO#ho{Owq$%3hk{');
define('DB_NAME', 'id17108943_assignment');
 

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>

<!-- CREATE TABLE users (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
); -->
