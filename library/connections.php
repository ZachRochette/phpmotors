<?php
/*
Proxy connection to the phpmotors databse
*/
function phpmotorsConnect()
{
    $server = 'mysql';
    $dbname = 'phpmotors';
    $username = 'iClient';
    $password = 'YuK6Ihq6b)/@C0.o';
    $dsn = 'mysql:host=$server;dbname=$dbname';
    $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
    try {
        $link = new PDO($dsn, $username, $password, $options);
        if (is_object($link)) {
            echo 'It worked!';
        }
    } catch (PDOException $e) {
        echo "why won't you work, error: " . $e->getMessage();
    }
}
phpmotorsConnect();
