    <!-- Content -->
    <div class="content">
    <table class="table">
    </table>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 mb-2">
<?php if(count($data['search']['table']) > 0) : ?>
    <?php foreach ($data['search']['table'] as $post) : ?>
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
          <p class="card-text lol"><?= $post['judul']; ?></p>
          <div class="d-flex justify-content-between align-items-center">

            <div class="btn-group">
              <button type="button" class="btn btn-sm btn-outline-secondary"><a href="<?= Config::BASEURL; ?>admin/details/<?= $post['id_publish']; ?>" class="post">View</a></button>
              <button type="button" class="btn btn-sm btn-outline-secondary"><a href="<?= Config::BASEURL; ?>admin/edit_post/<?= $post['id_publish']; ?>" class="post">Edit</a></button>
              <button type="button" class="btn btn-sm btn-outline-secondary deletePost" data-toggle="modal" data-target="#deleteModal" data-post="<?= $post['id_publish']; ?>" id="deletePost">Delete</button>
            </div>
            <small class="text-muted"><?= $date[0]; ?></small>
          </div>
        </div>
      </div>
    </div>
    <?php endforeach; ?>
<?php else: ?>
    <div class="container-fluid">
        <!-- Error Text -->
        <div class="text-center">
            <p class="lead text-gray-800 mb-5">Data tidak ditemukan</p>
        </div>
    </div>
<?php endif; ?>
    </div>
</div>

<nav aria-label="...">
  <ul class="pagination">
<?php if($data['search']['activePages'] > 1)  : ?>
  <li class="page-item">
      <a class="page-link" id="page" class="page" data-page = "<?= $data['search']['activePages'] - 1; ?>" href="#">Previous</a>
  </li>
<?php else : ?>
  <li class="page-item disabled">
      <a class="page-link" id="page" class="page">Previous</a>
  </li>
<?php endif; ?>
<?php for($i = 1; $i <= $data['search']['allPages']; $i++) : ?>
  <?php if($data['search']['activePages'] == $i) : ?>
    <li class="page-item active" aria-current="page">
      <span class="page-link"><?= $i; ?></span>
    </li>
    <?php else: ?>
      <li class="page-item"><a class="page-link" id="page" class="page" data-page = "<?= $i; ?>" href="#"><?= $i; ?></a></li>
  <?php endif; ?>
<?php endfor; ?>
<?php if($data['search']['activePages'] < $data['search']['allPages'] )  : ?>
  <li class="page-item">
      <a class="page-link" id="page" class="page" data-page = "<?= $data['search']['activePages'] + 1; ?>" href="#">Next</a>
  </li>
<?php else : ?>
  <li class="page-item disabled">
      <a class="page-link" id="page" class="page">Next</a>
  </li>
<?php endif; ?>
  </ul>
</nav>





<script>
// modal delete
$(function() {

$(document).on('click', '#deletePost', function() {
    const id = $(this).data('post');
    console.log(id);
    $.ajax({
      url: 'http://localhost/jatimlelungon/public/admin/getDelete',
      data: {id : id},
      method: 'post',
      dataType: 'JSON',
      success: function(data) {
        const tgl = data.created_at;
        $('#title').val(data.judul);
        $('#kat').val(data.nama_kategori);
        $('#created').val(tgl.split(" ", 1));
        $('#uploadBy').val(data.nama_user);
        $('#id').val(data.id_publish);
      
      }
  });

});

});
</script>