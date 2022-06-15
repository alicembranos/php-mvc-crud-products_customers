<?php
require_once  ROOT_PATH . '/views/header.html';
?>
<section class="intro">
    <div class="bg-image h-100  py-2" style="background-color: #f5f7fa;">
        <div class="mask d-flex align-items-center h-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body p-0">
                                <div class="table-responsive table-scroll" data-mdb-perfect-scrollbar="true" style="position: relative; height: 700px">
                                    <table class="table table-striped mb-0">
                                        <thead style="background-color: #002d72;">
                                            <tr>
                                                <th class="text-center" scope="col">Product Code</th>
                                                <th class="text-center" scope="col">Section</th>
                                                <th class="text-center" scope="col">Product Name</th>
                                                <th class="text-center" scope="col">Price</th>
                                                <th class="text-center" scope="col">Date</th>
                                                <th class="text-center" scope="col">Imported</th>
                                                <th class="text-center" scope="col">Origin Country</th>
                                                <th class="text-center" scope="col">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($products as $index => $product) : ?>
                                                <tr>
                                                    <td class="text-center align-middle"><?= $product['CÓDIGOARTÍCULO'] ?></td>
                                                    <td class="text-center align-middle"><?= $product['SECCIÓN'] ?></td>
                                                    <td class="text-center align-middle"><?= $product['NOMBREARTÍCULO'] ?></td>
                                                    <td class="text-center align-middle"><?= $product['PRECIO'] ?></td>
                                                    <td class="text-center align-middle"><?= $product['FECHA'] ?></td>
                                                    <td class="text-center align-middle"><?= $product['IMPORTADO'] ?></td>
                                                    <td class="text-center align-middle"><?= $product['PAÍSDEORIGEN'] ?></td>
                                                    <td class="text-center align-middle"><a href="?controller=products&action=getProduct&id=<?= $product['CÓDIGOARTÍCULO'] ?>" class="btn btn-link"><i class="fa-solid fa-pen-to-square link-dark p-2"></i></a><a href="?controller=products&action=deleteProduct&id=<?= $product['CÓDIGOARTÍCULO'] ?>" class="btn btn-link"><i class="fa-solid fa-trash-can link-dark"></i></a></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
require_once ROOT_PATH . '/views/footer.html';
