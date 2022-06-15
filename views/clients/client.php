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
                <div class="card-header">Profile Picture</div>
                <div class="card-body text-center">
                    <!-- Profile picture image-->
                    <img class="img-account-profile rounded-circle mb-2" src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                    <!-- Profile picture help block-->
                    <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header">Customer Details</div>
                <div class="card-body">
                    <form method="post" action="index.php?controller=clients&action=<?php echo isset($client['CÓDIGOCLIENTE']) ? 'updateClient' : 'addClient' ?>">
                        <!-- Form Group-->
                        <div class="mb-3">
                            <input class="form-control" id="id" name="id" type="hidden" value="<?= isset($client['CÓDIGOCLIENTE']) ? $client['CÓDIGOCLIENTE'] : null ?>">
                        </div>
                        <div class="mb-3">
                            <label class="small mb-1" for="owner">Owner Name</label>
                            <input class="form-control" id="owner" name="owner" type="text" placeholder="Enter client owner name" value="<?= isset($client['RESPONSABLE']) ? $client['RESPONSABLE'] : null ?>">
                        </div>
                        <div class="mb-3">
                            <label class="small mb-1" for="company">Company Name</label>
                            <input class="form-control" id="company" name="company" type="text" placeholder="Enter company name" value="<?= isset($client['EMPRESA']) ? $client['EMPRESA'] : null ?>">
                        </div>
                        <div class="mb-3">
                            <label class="small mb-1" for="address">Address</label>
                            <input class="form-control" id="address" name="address" type="text" placeholder="Enter company address" value="<?= isset($client['DIRECCIÓN']) ? $client['DIRECCIÓN'] : null  ?>">
                        </div>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="location">Location</label>
                                <input class="form-control" id="location" name="location" type="text" placeholder="Enter company's location" value="<?= isset($client['POBLACIÓN']) ? $client['POBLACIÓN'] : null ?>">
                            </div>
                            <!-- Form Group-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="phoneNumber">Phone Number</label>
                                <input class="form-control" id="phoneNumber" name="phoneNumber" type="text" placeholder="Enter company's phone number" value="<?= isset($client['TELÉFONO']) ?  $client['TELÉFONO'] : null ?>">
                            </div>
                        </div>
                        <!-- Save changes button-->
                        <button class="btn btn-primary" type="submit">Save changes</button>
                        <a id="return" class="btn btn-secondary" href="?controller=clients&action=getClients">Return</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require_once ROOT_PATH . '/views/footer.html';
