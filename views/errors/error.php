<?php
require_once  ROOT_PATH . '/views/header.html';
?>

<div class="d-flex align-items-center justify-content-center vh-100">
    <div class="text-center">
        <h1 class="display-1 fw-bold">404</h1>
        <p class="fs-3"> <span class="text-danger">Opps!</span> Page not found.</p>
        <p class="lead">
            <?= $errMsg ?>
        </p>
        <a href="index.php" class="btn btn-primary">Go Home</a>
    </div>
</div>


<?php
require_once ROOT_PATH . '/views/footer.html';
