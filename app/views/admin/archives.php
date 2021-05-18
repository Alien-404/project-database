<div id="layoutSidenav_content">
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Pages</h1>
        <!-- breadcrumb -->
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="<?= Config::BASEURL; ?>admin/index">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Archives</li>
        </ol>

        <?php
        Flasher::flash();
        ?>
        

        <a href="<?= Config::BASEURL; ?>admin/post" class="d-sm-inline-block btn btn-sm btn-success shadow-sm">
            <i class="fas fa-plus-circle fa-sm text-white-50"></i> Add New</a>

            <div class="row mt-2">

            <div class="col-sm-3 col">
            <div class="input-group">
            <button class="btn btn-light" type="button" disabled>
                <i class="bi bi-filter"></i>
            </button>
            <select class="form-control" aria-label="Default select example" name="s_kategori" id="s_kategori">
            <option value="">none</option>
            <?php foreach ($data['kategori'] as $kategori) : ?>
                <option value="<?= $kategori['id_kategori'] ?>"><?= $kategori['nama_kategori'] ?></option>
            <?php endforeach; ?>
            </select>            
            </div>
            </div>

            <div class="col-sm col">
            <div class="navbar-search float-right">
              <div class="input-group">
                  <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." name="s_keyword" id="s_keyword"
                      aria-label="Search" aria-describedby="basic-addon2">
                  <div class="input-group-append">
                      <!-- <button class="btn btn-primary" type="button">
                          <i class="fas fa-search fa-sm"></i>
                      </button> -->
                  </div>
              </div>
            </div>
            </div>

            </div>

            <?php $page = (isset($_GET['page']) ? $_GET : 1); ?>  
               

    <!-- Content -->
<div class="content">
    <table class="table">
    </table>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 mb-2">
    <?php foreach ($data['post'] as $post) : ?>
    <?php 
    $date = $post['created_at']; 
    $date = explode(' ', $date);
    ?>
    <div class="col mb-2">
      <div class="card shadow-sm">
      <img src="<?= Config::BASEURL; ?>img/ex.png" alt="" class="img-fluid">
        <div class="app-card-tags mr-0 d-inline">
            <span><?= $post['nama_kategori'] ?></span>
        </div>

        <div class="card-body">
          <p class="card-text"><?= $post['judul']; ?></p>
          <div class="d-flex justify-content-between align-items-center">

            <div class="btn-group">
              <button type="button" class="btn btn-sm btn-outline-secondary"><a href="<?= Config::BASEURL; ?>admin/details/<?= $post['id_publish']; ?>" class="post">View</a></button>
              <button type="button" class="btn btn-sm btn-outline-secondary"><a href="<?= Config::BASEURL; ?>admin/edit_post/<?= $post['id_publish']; ?>" class="post">Edit</a></button>
              <button type="button" class="btn btn-sm btn-outline-secondary deletePost" data-toggle="modal" data-target="#deleteModal" data-post="<?= $post['id_publish']; ?>">Delete</button>
            </div>
            <small class="text-muted"><?= $date[0]; ?></small>
          </div>
        </div>
      </div>
    </div>
    <?php endforeach; ?>
    </div>
</div>




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
                <form action="<?= Config::BASEURL; ?>admin/delete/wisata" method="POST">
                <div class="mb-3">
                    <input type="hidden" name="id" id="id">
                    <label for="title" class="col-form-label">Title:</label>
                    <input type="text" class="form-control" id="title" name="title" disabled>
                    <label for="kat" class="col-form-label">Kategory:</label>
                    <input type="text" class="form-control" id="kat" name="kat" disabled>
                    <label for="created" class="col-form-label">Created at:</label>
                    <input type="date" class="form-control" id="created" name="created" disabled>
                    <label for="uploadBy" class="col-form-label">Uploaded By:</label>
                    <input type="text" class="form-control" id="uploadBy" name="uploadBy" disabled>
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

