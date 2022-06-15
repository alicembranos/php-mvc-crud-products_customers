<?php

require_once MODELS . 'helper/dbConnection.php';

function getAllProducts()
{
    try {
        //connection to the DB
        $pdo = connDB();
        //sql statement
        $sql = 'SELECT * FROM productos ORDER BY CÓDIGOARTÍCULO ASC';
        //execute prepare statement
        $statement = $pdo->prepare($sql);
        //execute statement
        $statement->execute();
        //fetch the result
        $products = $statement->fetchAll();
        //return products
        return $products;
    } catch (PDOException $e) {
        $errMsg = $e->getMessage();
        require_once VIEWS . 'errors/error.php';
    }
}

function getProductById($id)
{
    try {
        //connection to the DB
        $pdo = connDB();
        //sql statement
        $sql = 'SELECT * FROM productos WHERE CÓDIGOARTÍCULO = ?';
        //execute prepare statement
        $statement = $pdo->prepare($sql);
        $statement->bindParam(1, $id, PDO::PARAM_INT);
        //execute statement
        $statement->execute();
        //fecth product data
        $product = $statement->fetch();
        return $product;
    } catch (PDOException $e) {
        $errMsg = $e->getMessage();
        require_once VIEWS . 'errors/error.php';
    }
}

function createProduct($product)
{
    try {
        //connection to the DB
        $pdo = connDB();
        //sql statement
        $sql = 'INSERT INTO productos (CÓDIGOARTÍCULO, SECCIÓN , NOMBREARTÍCULO, PRECIO, FECHA, IMPORTADO, PAÍSDEORIGEN) VALUES (?, ?, ?, ?, ?, ?, ?)';
        //execute prepare statement
        $statement = $pdo->prepare($sql);
        $statement->bindParam(1, $product['id'], PDO::PARAM_INT);
        $statement->bindParam(2, $product['section'], PDO::PARAM_STR);
        $statement->bindParam(3, $product['name'], PDO::PARAM_STR);
        $statement->bindParam(4, $product['price'], PDO::PARAM_STR);
        $statement->bindParam(5, $product['date'], PDO::PARAM_STR);
        $statement->bindParam(6, $product['imported'], PDO::PARAM_STR);
        $statement->bindParam(6, $product['country'], PDO::PARAM_STR);
        //execute statement
        $statement->execute();
    } catch (PDOException $e) {
        $errMsg = $e->getMessage();
        require_once VIEWS . 'errors/error.php';
    }
}

function updateArticle($product)
{
    try {
        //connection to the DB
        $pdo = connDB();
        //sql statement
        $sql = 'UPDATE productos SET SECCIÓN = ?, NOMBREARTÍCULO = ?, PRECIO = ?, FECHA = ?, IMPORTADO = ?, PAÍSDEORIGEN = ? WHERE CÓDIGOARTÍCULO = ?';
        //execute prepare statement
        $statement = $pdo->prepare($sql);
        $statement->bindParam(1, $product['section'], PDO::PARAM_STR);
        $statement->bindParam(2, $product['name'], PDO::PARAM_STR);
        $statement->bindParam(3, $product['price'], PDO::PARAM_STR);
        $statement->bindParam(4, $product['date'], PDO::PARAM_STR);
        $statement->bindParam(5, $product['imported'], PDO::PARAM_STR);
        $statement->bindParam(6, $product['country'], PDO::PARAM_STR);
        $statement->bindParam(7, $product['id'], PDO::PARAM_INT);
        //execute statement
        $statement->execute();
    } catch (PDOException $e) {
        $errMsg = $e->getMessage();
        require_once VIEWS . 'errors/error.php';
    }
}

function deleteProductById($id)
{
    try {
        //connection to the DB
        $pdo = connDB();
        //sql statement
        $sql = 'DELETE FROM productos WHERE CÓDIGOARTÍCULO = ?';
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
