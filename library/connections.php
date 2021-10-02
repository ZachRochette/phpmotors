<?php
/*
Proxy connection to the phpmotors databse
*/


function phpmotorsConnect()
{
    $server = 'mysql';
    $dbname = 'phpmotors';
    $username = 'iClient';
    $password = 'RSf[rdh4Yf5KyFPe';
    $dsn = "mysql:host=$server;dbname=$dbname";
    $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

    // Create the actual connection object and assign it to a variable
    try {
        $link = new PDO($dsn, $username, $password, $options);
        if (is_object($link)) {
            echo "it worked!";
        }
    } catch (PDOException $e) {
        echo "it didn't work: " . $e->getMessage();
    }
}
phpmotorsConnect();
