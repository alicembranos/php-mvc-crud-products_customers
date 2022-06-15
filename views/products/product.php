<?php
require_once  ROOT_PATH . '/views/header.html';
?>
<div class="container-xl px-4 mt-4">
    <!-- Account page navigation-->
    <nav class="nav nav-borders">
        <a class="nav-link active ms-0" href="https://www.bootdey.com/snippets/view/bs5-edit-profile-account-details" target="__blank">Profile</a>
        <a class="nav-link" href="https://www.bootdey.com/snippets/view/bs5-profile-billing-page" target="__blank">Billing</a>
        <a class="nav-link" href="https://www.bootdey.com/snippets/view/bs5-profile-security-page" target="__blank">Security</a>
        <a class="nav-link" href="https://www.bootdey.com/snippets/view/bs5-edit-notifications-page" target="__blank">Notifications</a>
    </nav>
    <hr class="mt-0 mb-4">
    <div class="row">
        <div class="col-xl-4">
            <!-- Profile picture card-->
            <div class="card mb-4 mb-xl-0">
                <div class="card-header">Product</div>
                <div class="card-body text-center">
                    <!-- Profile picture image-->
                    <img class="img-account-profile rounded-circle mb-2" src="./assets/img/4me-icon-product.webp" alt="">
                    <!-- Profile picture help block-->
                    <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header">Product Details</div>
                <div class="card-body">
                    <form method="post" action="index.php?controller=products&action=<?php echo isset($product['CÓDIGOARTÍCULO']) ? 'updateProduct' : 'addProduct' ?>">
                        <!-- Form Group-->
                        <div class="mb-3">
                            <input class="form-control" id="id" name="id" type="hidden" value="<?= isset($product['CÓDIGOARTÍCULO']) ? $product['CÓDIGOARTÍCULO'] : null ?>">
                        </div>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="section">Section</label>
                                <input class="form-control" id="section" name="section" type="text" placeholder="Enter product's section" value="<?= isset($product['SECCIÓN']) ? $product['SECCIÓN'] : null ?>">
                            </div>
                            <!-- Form Group-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="name">Product Name</label>
                                <input class="form-control" id="name" name="name" type="text" placeholder="Enter product name" value="<?= isset($product['NOMBREARTÍCULO']) ?  $product['NOMBREARTÍCULO'] : null ?>">
                            </div>
                        </div>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="price">Price</label>
                                <input class="form-control" id="price" name="price" type="text" placeholder="Enter product's price" value="<?= isset($product['PRECIO']) ? $product['PRECIO'] : null ?>">
                            </div>
                            <!-- Form Group-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="date">Product Date</label>
                                <input class="form-control" id="date" name="date" type="text" placeholder="Enter product date" value="<?= isset($product['FECHA']) ?  $product['FECHA'] : null ?>">
                            </div>
                        </div>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="imported">Imported</label>
                                <input class="form-control" id="imported" name="imported" type="text" placeholder="Enter if imported" value="<?= isset($product['IMPORTADO']) ? $product['IMPORTADO'] : null ?>">
                            </div>
                            <!-- Form Group-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="country">Origin Country</label>
                                <input class="form-control" id="country" name="country" type="text" placeholder="Enter origin country of the product" value="<?= isset($product['PAÍSDEORIGEN']) ?  $product['PAÍSDEORIGEN'] : null ?>">
                            </div>
                        </div>
                        <!-- Save changes button-->
                        <button class="btn btn-primary" type="submit">Save changes</button>
                        <a id="return" class="btn btn-secondary" href="?controller=products&action=getProducts">Return</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require_once ROOT_PATH . '/views/footer.html';
