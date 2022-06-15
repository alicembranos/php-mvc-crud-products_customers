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
                                                <th class="text-center" scope="col">Client Code</th>
                                                <th class="text-center" scope="col">Company</th>
                                                <th class="text-center" scope="col">Address</th>
                                                <th class="text-center" scope="col">Location</th>
                                                <th class="text-center" scope="col">Phone Number</th>
                                                <th class="text-center" scope="col">Owner</th>
                                                <th class="text-center" scope="col">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($clients as $index => $client) : ?>
                                                <tr>
                                                    <td class="text-center align-middle"><?= $client['CÓDIGOCLIENTE'] ?></td>
                                                    <td class="text-center align-middle"><?= $client['EMPRESA'] ?></td>
                                                    <td class="text-center align-middle"><?= $client['DIRECCIÓN'] ?></td>
                                                    <td class="text-center align-middle"><?= $client['POBLACIÓN'] ?></td>
                                                    <td class="text-center align-middle"><?= $client['TELÉFONO'] ?></td>
                                                    <td class="text-center align-middle"><?= $client['RESPONSABLE'] ?></td>
                                                    <td class="text-center align-middle"><a href="?controller=clients&action=getClient&id=<?= $client['CÓDIGOCLIENTE'] ?>" class="btn btn-link"><i class="fa-solid fa-pen-to-square link-dark p-2"></i></a><a href="?controller=clients&action=deleteClient&id=<?= $client['CÓDIGOCLIENTE'] ?>" class="btn btn-link"><i class="fa-solid fa-trash-can link-dark"></i></a></td>
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
