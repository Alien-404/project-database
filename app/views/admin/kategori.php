<div id="layoutSidenav_content">
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Kategori List</h1>
        <!-- breadcrumb -->
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="<?= Config::BASEURL; ?>admin/index">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Kategori List</li>
        </ol>

<?php
    Flasher::flash();
?>

<a href="#" class="d-sm-inline-block btn btn-sm btn-success shadow-sm mb-2" data-toggle="modal" data-target="#newKat">
    <i class="fas fa-plus-circle fa-sm text-white-50"></i> Add New</a>

<!-- kategori List -->
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table mr-1"></i>
        DataTable Kategori List
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th class="text-center">Kategori</th>
                        <th class="text-center">Total Post</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th class="text-center">Kategori</th>
                        <th class="text-center">Total Post</th>
                        <th class="text-center">Action</th>
                    </tr>
                </tfoot>
                <tbody>
                <?php $totals = []; ?>
                    <?php foreach($data['kategori']['total'] as $total) : ?>
                        <?php array_push($totals, $total['Total']); ?>
                    <?php endforeach; ?>
                    <?php 
                    $kategori = $data['kategori']['table']; 
                    $count = 0;
                    ?>
                    <?php foreach($kategori as $kat) : ?>
                    <tr>
                        <td class="text-center"><?= $kat['nama_kategori']; ?></td>
                        <td class="text-center"><?= (isset($totals[$count]) ? $totals[$count] : '0'); ?></td>
                        <td class="d-flex align-items-center justify-content-center"><button type="button" class="btn btn-primary btn-sm editKat" href="<?= Config::BASEURL; ?>" data-toggle="modal" data-target="#editKat" data-id="<?= $kat['id_kategori']; ?>">Edit Nama Kategori</button></td>
                    </tr>
                    <?php ++$count; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- edit kat Modal-->
<div class="modal fade" id="editKat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Are you sure Edit this Kategori?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                <form action="<?= Config::BASEURL; ?>admin/editKategori" method="POST">
                <div class="mb-3">
                    <input type="hidden" name="id_kategori" id="id_kat">
                    <label for="old" class="col-form-label">Old Kategori:</label>
                    <input type="text" class="form-control" id="old_kat" name="old" disabled>
                    <label for="new" class="col-form-label">New Kategori:</label>
                    <input type="text" class="form-control" id="new_kat" name="new" onkeypress="return /[a-z]/i.test(event.key)">
                </div>
                    <hr>
                    Select "Save" below if you wish to save this kategori name.
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-success" type="submit">Save</button>
                </div>
            </div>
            </form>
    </div>
</div>

<!-- new kat Modal-->
<div class="modal fade" id="newKat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Kategori</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                <form action="" method="POST">
                <div class="mb-3">
                    <label for="kategori" class="col-form-label">Kategori Name :</label>
                    <input type="text" class="form-control" name="kategori" onkeypress="return /[a-z]/i.test(event.key)" required>
                </div>
                    <hr>
                    Select "Save" below if you wish to save this kategori name.
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-success" type="submit" name="saveKat">Save</button>
                </div>
            </div>
            </form>
    </div>
</div>
