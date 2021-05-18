<div id="layoutSidenav_content">
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Users List</h1>
        <!-- breadcrumb -->
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="<?= Config::BASEURL; ?>admin/index">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Users List</li>
        </ol>

<?php
    Flasher::flash();
?>


<!-- active users -->
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table mr-1"></i>
        DataTable User Active
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php $users = $data['user']; ?>
                    <?php foreach($users as $user) : ?>
                    <tr>
                        <td><?= $user['nama_user']; ?></td>
                        <td><?= $user['email_user']; ?></td>
                        <td><?= $user['roles']; ?></td>
                        <td class="d-flex align-items-center"><button type="button" class="btn btn-danger btn-sm blockUser" href="<?= Config::BASEURL; ?>" data-toggle="modal" data-target="#blockModal" data-id="<?= $user['id_user']; ?>">Block User</button></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<br>
<br>

<!-- blocked users -->
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table mr-1"></i>
        DataTable User Blocked
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php $users = $data['active']; ?>
                    <?php foreach($users as $user) : ?>
                    <tr>
                        <td><?= $user['nama_user']; ?></td>
                        <td><?= $user['email_user']; ?></td>
                        <td><?= $user['roles']; ?></td>
                        <td class="d-flex align-items-center"><button type="button" class="btn btn-success btn-sm activeUser" href="<?= Config::BASEURL; ?>" data-toggle="modal" data-target="#activeModal" data-active="<?= $user['id_user']; ?>">Active User</button></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

 

<!-- active Modal-->
<div class="modal fade" id="activeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Are you sure active this user?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                <form action="<?= Config::BASEURL; ?>admin/active" method="POST">
                <div class="mb-3">
                    <input type="hidden" name="id" id="id_active">
                    <label for="name" class="col-form-label">Name:</label>
                    <input type="text" class="form-control" id="name_active" name="name" disabled>
                    <label for="email" class="col-form-label">Email:</label>
                    <input type="email" class="form-control" id="email_active" name="email" disabled>
                </div>
                    <hr>
                    Select "Active" below if you wish to active this user.
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-success" type="submit">Active</button>
                </div>
            </div>
            </form>
    </div>
</div>

<!-- block Modal-->
<div class="modal fade" id="blockModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Are you sure block this user?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                <form action="<?= Config::BASEURL; ?>admin/block" method="POST">
                <div class="mb-3">
                    <input type="hidden" name="id" id="id">
                    <label for="name" class="col-form-label">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" disabled>
                    <label for="email" class="col-form-label">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" disabled>
                </div>
                    <hr>
                    Select "Block" below if you wish to block this user.
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-danger" type="submit">Block</button>
                </div>
            </div>
            </form>
    </div>
</div>