<div id="layoutSidenav_content">
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Archive Detail</h1>
        <!-- breadcrumb -->
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="<?= Config::BASEURL; ?>admin/index">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="<?= Config::BASEURL; ?>admin/archives">Archives</a></li>
            <li class="breadcrumb-item active" aria-current="page">Details</li>
        </ol>

        <?php
        Flasher::flash();
        ?>


<!-- content -->
<div class="container-fluid">

<div class="row">

  <!-- Post Content Column -->
  <div class="col-lg">

    <!-- Title -->
    <h1 class="mt-2"><?= $data['details'][0]['judul'] ?></h1>

    <!-- Author -->
    <p class="lead">
      by <?= $data['details'][0]['nama_user']; ?>
    </p>

    <hr>
    

    <!-- Date/Time -->
    <!-- get the time -->
    <?php $d = strtotime($data['details'][0]['created_at']); ?>
    <p>Posted on <?= date('M-d-Y g:i A', $d); ?> | <?= $data['details'][0]['nama_kategori']; ?></p>

    <hr>

    <!-- Post Content -->
      <!-- foto -->
      <div class="row">
      <?php foreach($data['details'] as $foto) : ?>
        <div class="item col-sm-6 col-md-4 mb-3">
        <a class="fancybox" rel="gallery1" href="<?= Config::BASEURL; ?>img/upload/<?= $foto['foto'] ?>" title="Twilight Memories (doraartem)">
          <img src="<?= Config::BASEURL; ?>img/upload/<?= $foto['foto'] ?>" alt="" width="100%" height="100%"/>
        </a>
        </div>
      <?php endforeach; ?>
      </div>

    <h5>Description</h5>
    <p><?= nl2br($data['details'][0]['deskripsi']); ?></p>

    <hr>

    <h5>Information</h5>
    <p><i class="bi bi-geo-alt-fill"></i> <?= $data['details'][0]['alamat']; ?></p>
    <p><i class="bi bi-person-lines-fill"></i> <?= $data['details'][0]['kontak']; ?></p>

    <hr>
    <button type="button" class="btn btn-primary"><a id="details" href="<?= Config::BASEURL; ?>admin/edit_post/<?= $data['details'][0]['id_publish']; ?>">Edit</a></button>
    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">Delete</button>

  </div>

</div>
<!-- /.row -->

</div>

<br>


<!-- delete Modal-->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Are you sure Delete this post?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                <form action="<?= Config::BASEURL; ?>admin/delete" method="POST">
                <div class="mb-3">
                <?php
                $date = $data['details'][0]['created_at'];
                $date = explode(' ', $date);
                ?>
                    <input type="hidden" name="id" id="id" value="<?= $data['details'][0]['id_publish']; ?>">
                    <label for="title" class="col-form-label">Title:</label>
                    <input type="text" class="form-control" id="title" name="title" value="<?= $data['details'][0]['judul']; ?>" disabled>
                    <label for="kat" class="col-form-label">Kategory:</label>
                    <input type="text" class="form-control" id="kat" name="kat" value="<?= $data['details'][0]['nama_kategori']; ?>" disabled>
                    <label for="created" class="col-form-label">Created at:</label>
                    <input type="date" class="form-control" id="created" name="created" value="<?= $date[0]; ?>" disabled>
                    <label for="uploadBy" class="col-form-label">Uploaded By:</label>
                    <input type="text" class="form-control" id="uploadBy" name="uploadBy" value="<?= $data['details'][0]['nama_user']; ?>" disabled>
                </div>
                    <hr>
                    Select "Delete" below if you want to delete this post.
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-danger" type="submit">Delete</button>
                </div>
            </div>
            </form>
    </div>
</div>