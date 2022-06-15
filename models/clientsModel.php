<?php

require_once MODELS . 'helper/dbConnection.php';

function getAllClients()
{
    try {
        //connection to the DB
        $pdo = connDB();
        //sql statement
        $sql = 'SELECT * FROM clientes ORDER BY CÓDIGOCLIENTE ASC';
        //execute prepare statement
        $statement = $pdo->prepare($sql);
        //execute statement
        $statement->execute();
        //fetch the result
        $clients = $statement->fetchAll();
        //return clients
        return $clients;
    } catch (PDOException $e) {
        $errMsg = $e->getMessage();
        require_once VIEWS . 'errors/error.php';
    }
}

function getClientById($id)
{
    try {
        //connection to the DB
        $pdo = connDB();
        //sql statement
        $sql = 'SELECT * FROM clientes WHERE CÓDIGOCLIENTE = ?';
        //execute prepare statement
        $statement = $pdo->prepare($sql);
        $statement->bindParam(1, $id, PDO::PARAM_INT);
        //execute statement
        $statement->execute();
        //fecth client data
        $client = $statement->fetch();
        return $client;
    } catch (PDOException $e) {
        $errMsg = $e->getMessage();
        require_once VIEWS . 'errors/error.php';
    }
}

function createCustomer($client)
{
    try {
        //connection to the DB
        $pdo = connDB();
        //sql statement
        $sql = 'INSERT INTO clientes (CÓDIGOCLIENTE, RESPONSABLE, EMPRESA, DIRECCIÓN , POBLACIÓN , TELÉFONO) VALUES (?, ?, ?, ?, ?, ?)';
        //execute prepare statement
        $statement = $pdo->prepare($sql);
        $statement->bindParam(1, $client['id'], PDO::PARAM_INT);
        $statement->bindParam(2, $client['owner'], PDO::PARAM_STR);
        $statement->bindParam(3, $client['company'], PDO::PARAM_STR);
        $statement->bindParam(4, $client['address'], PDO::PARAM_STR);
        $statement->bindParam(5, $client['location'], PDO::PARAM_STR);
        $statement->bindParam(6, $client['phoneNumber'], PDO::PARAM_STR);
        //execute statement
        $statement->execute();
    } catch (PDOException $e) {
        $errMsg = $e->getMessage();
        require_once VIEWS . 'errors/error.php';
    }
}

function updateCustomer($client)
{
    try {
        //connection to the DB
        $pdo = connDB();
        //sql statement
        $sql = 'UPDATE clientes SET RESPONSABLE = ?, EMPRESA = ?, DIRECCIÓN = ?, POBLACIÓN = ?, TELÉFONO = ? WHERE CÓDIGOCLIENTE = ?';
        //execute prepare statement
        $statement = $pdo->prepare($sql);
        $statement->bindParam(1, $client['owner'], PDO::PARAM_STR);
        $statement->bindParam(2, $client['company'], PDO::PARAM_STR);
        $statement->bindParam(3, $client['address'], PDO::PARAM_STR);
        $statement->bindParam(4, $client['location'], PDO::PARAM_STR);
        $statement->bindParam(5, $client['phoneNumber'], PDO::PARAM_STR);
        $statement->bindParam(6, $client['id'], PDO::PARAM_INT);
        //execute statement
        $statement->execute();
    } catch (PDOException $e) {
        $errMsg = $e->getMessage();
        require_once VIEWS . 'errors/error.php';
    }
}

function deleteClientById($id)
{
    try {
        //connection to the DB
        $pdo = connDB();
        //sql statement
        $sql = 'DELETE FROM clientes WHERE CÓDIGOCLIENTE = ?';
        //execute prepare statement
        $statement = $pdo->prepare($sql);
        $statement->bindParam(1, $id, PDO::PARAM_INT);
        //execute statement
        $statement->execute();
    } catch (PDOException $e) {
        $errMsg = $e->getMessage();
        require_once VIEWS . 'errors/error.php';
    }
}
