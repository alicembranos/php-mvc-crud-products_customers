<?php

function connDB()
{
    $dsn = 'mysql:host=' . HOST . ';dbname=' . DB . ';charset=' . CHARSET . '';

    $options = [
        PDO::ATTR_ERRMODE           =>  PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES  => FALSE,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ];

    try {
        $pdo = new PDO($dsn, USER, PSSWD, $options);
        if ($pdo) {
            return $pdo;
        }
    } catch (PDOException $e) {
        $errMsg = $e->getMessage();
        require_once VIEWS . 'errors/error.php';
    }
}
