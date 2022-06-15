<?php

require_once MODELS . 'clientsModel.php';

if (isset($_REQUEST["action"])) {
    $action = $_REQUEST["action"];
}

if (function_exists($action)) {
    call_user_func($action, $_REQUEST);
} else {
    error("this function does not exist.");
}

//get clients
function getClients()
{
    $clients = getAllClients();
    if (isset($clients)) {
        require_once VIEWS . 'clients/clientsDashboard.php';
    } else {
        error('There was a problem with the database, try again.');
    }
}

//get client by id
function getClient($data)
{
    if (isset($data['id'])) {
        $id = $data['id'];
        $client = getClientById($id);
        require VIEWS . 'clients/client.php';
    } else {
        error('There was a problem with the URL, please try again.');
    }
}

//create client
function addClient()
{
    if (sizeof($_POST) > 1) {
        $listOfClients = getAllClients();
        $lastClient = end($listOfClients);
        $newId = intval($lastClient["CÓDIGOCLIENTE"]) + 1;
        $_POST['id'] = $newId;
        $client = $_POST;
        createCustomer($client);
        header("Location: index.php?controller=clients&action=getClients");
    } else {
        require_once VIEWS . "/clients/client.php";
    }
}

//update employee by id 
function updateClient()
{
    if (sizeof($_POST) > 1) {
        $client = $_POST;
        updateCustomer($client);
        header('Location: index.php?controller=clients&action=getClient&id=' . $_POST['id']);
    } else {
        error('There was a problem submitting the form, please try again.');
    }
}

//delete client by id
function deleteClient($data)
{
    if (isset($data['id'])) {
        $id = $data['id'];
        deleteClientById($id);
        header("Location: index.php?controller=clients&action=getClients");
    } else {
        error('There was a problem with the URL, please try again.');
    }
}

//manage error function
function error($errMsg)
{
    require_once VIEWS . 'errors/error.php';
}
