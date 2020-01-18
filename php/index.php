<?php
$host = 'db';  //the name of the mysql service inside the docker file.
$user = 'devuser';
$password = 'devpassword';
$db = 'test_db';

$conn = new mysqli($host,$user,$password,$db);

    if($conn->connect_error){
    echo 'connection failed'. $conn->connect_error;
    } else {
    echo 'successfully connected to MYSQL';  
    }


/* 
git remote add origin https://github.com/cinoaran/dockerized-php-7.3.git
git push -u origin master 
*/


/* close connection */
$conn->close();

?>
