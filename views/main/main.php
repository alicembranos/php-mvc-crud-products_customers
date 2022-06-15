<?php
require_once  ROOT_PATH . '/views/header.html';
?>

<p class="h1 my-5 text-center">Products Management System</p>
<div class="list-group">
    <a class="list-group-item list-group-item-action" href="?controller=clients&action=getClients">Clients</a>
    <a class="list-group-item list-group-item-action" href="?controller=products&action=getProducts">Products</a>
    <!-- <a class="list-group-item list-group-item-action" href="?controller=orders&action=newOrder">New Order</a> -->
</div>

<?php
require_once ROOT_PATH . '/views/footer.html';
