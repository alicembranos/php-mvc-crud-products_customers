<?php

require_once MODELS . 'productsModel.php';

if (isset($_REQUEST["action"])) {
    $action = $_REQUEST["action"];
}

if (function_exists($action)) {
    call_user_func($action, $_REQUEST);
} else {
    error("this function does not exist.");
}

//get products
function getProducts()
{
    $products = getAllProducts();
    if (isset($products)) {
        require_once VIEWS . 'products/productsDashboard.php';
    } else {
        error('There was a problem with the database, try again.');
    }
}

//get product by id
function getProduct($data)
{
    if (isset($data['id'])) {
        $id = $data['id'];
        $product = getProductById($id);
        require VIEWS . 'products/product.php';
    } else {
        error('There was a problem with the URL, please try again.');
    }
}

//create product
function addProduct()
{
    if (sizeof($_POST) > 1) {
        $listOfProducts = getAllProducts();
        $lastProduct = end($listOfProducts);
        $newId = intval($lastProduct["CÓDIGOARTÍCULO"]) + 1;
        $_POST['id'] = $newId;
        $client = $_POST;
        createProduct($client);
        header("Location: index.php?controller=products&action=getProducts");
    } else {
        require_once VIEWS . "/products/product.php";
    }
}

//update product by id 
function updateProduct()
{
    if (sizeof($_POST) > 1) {
        $product = $_POST;
        updateArticle($product);
        header('Location: index.php?controller=products&action=getProduct&id=' . $_POST['id']);
    } else {
        error('There was a problem submitting the form, please try again.');
    }
}

//delete product by id
function deleteProduct($data)
{
    if (isset($data['id'])) {
        $id = $data['id'];
        deleteProductById($id);
        header("Location: index.php?controller=products&action=getProducts");
    } else {
        error('There was a problem with the URL, please try again.');
    }
}

//manage error function
function error($errMsg)
{
    require_once VIEWS . 'errors/error.php';
}
