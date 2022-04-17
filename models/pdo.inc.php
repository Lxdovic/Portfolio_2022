<?php
    try{
        $dns = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME;

        $options = array(
            pdo::MYSQL_ATTR_INIT_COMMAND => "SET NAMES " . DB_CHARSET,
            pdo::ATTR_ERRMODE => pdo::ERRMODE_EXCEPTION 
        );

        $pdo = new PDO($dns, DB_USER, DB_PASSWORD, $options);

        // exit;
    }
    catch (Exception $e) {
        die('Connexion impossible : ' . $e->getMEssage());
    }