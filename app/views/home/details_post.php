<!-- Banner Starts Here -->
<div class="heading-page header-text">
    <section class="page-heading">
    <div class="container">
        <div class="row">
        <div class="col-lg-12">
            <div class="text-content">
            <h4>Post Details</h4>
            <h2>Details Post Destination</h2>
            </div>
        </div>
        </div>
    </div>
    </section>
</div>

<section class="blog-posts grid-system">
<div class="container">
<div class="row">
    <div class="col-lg-8">
    <?php if($data['details']['post details'] !== false) : ?>
    <?php $date = date_create($data['details']['post details']['created_at']); ?>   
    <div class="all-blog-posts">
        <div class="row">
        <div class="col-lg-12">
            <div class="blog-post">
            <div class="blog-thumb">
                <img src="<?= Config::BASEURL; ?>img/upload/<?= $data['details']['post details']['foto']; ?>" alt="">
            </div>
            <div class="down-content">
                <span><?= $data['details']['post details']['nama_kategori']; ?></span>
                <a href="post-details.html"><h4><?= $data['details']['post details']['judul']; ?></h4></a>
                <ul class="post-info">
                <li><a href="/" onclick="return false;"><?= $data['details']['post details']['nama_user']; ?></a></li>
                <li><a href="/" onclick="return false;"><?= date_format($date, 'F j, Y'); ?></a></li>
                <li><a href="/" onclick="return false;"><?= (isset($data['details']['comments'])) ? $data['details']['comments']['total'] : '0'; ?> Comments</a></li>
                </ul>

                <ul class="post-info">
                    <li class="mt-3"><i class="fa fa-compass"></i> <a href="/" onclick="return false;"><?= nl2br($data['details']['post details']['alamat']); ?></a></li>
                </ul>
                <ul class="post-info">
                    <li><i class="far fa-address-book"></i> <a href="/" onclick="return false;"><?= nl2br($data['details']['post details']['kontak']); ?></a></li>
                </ul>
                <p>
                <?= nl2br($data['details']['post details']['deskripsi']); ?>
                </p>
                <!-- foto -->
            <div class="row">
            <?php foreach($data['details']['photos'] as $foto) : ?>
                <div class="item col-sm-6 col-md-4 mb-3">
                <a class="fancybox" rel="gallery1" href="<?= Config::BASEURL; ?>img/upload/<?= $foto['foto'] ?>" title="sample photo">
                <img src="<?= Config::BASEURL; ?>img/upload/<?= $foto['foto'] ?>" alt="" width="100%" height="100%"/>
                </a>
                </div>
            <?php endforeach; ?>
            </div>
                <div class="post-options">
                <div class="row">
                    <div class="col-6">
                    </div>
                    <div class="col-6">
                    <ul class="post-share">
                        <li><i class="fa fa-share-alt"></i></li>
                        <li><a href="#">Facebook</a>,</li>
                        <li><a href="#"> Twitter</a></li>
                    </ul>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="sidebar-item comments">
            <div class="sidebar-heading">
            <?php
                Flasher::flash();
            ?>
                <h2><?= (isset($data['details']['comments'])) ? $data['details']['comments']['total'] : '0'; ?> comments</h2>
            </div>
            <div class="content">
                <ul>
            <?php if(isset($data['details']['comments'])) : ?>
                <?php foreach($data['details']['all'] as $value) : ?>
                <li>
                    <div class="author-thumb">
                    </div>
                    <div class="right-content">
                    <?php $date = date_create($value['review_at']); ?> 
                    <h4 class="mb-2"><?= $value['nama_user']; ?><span><?= date_format($date, 'F j, Y'); ?></span></h4>
                    <p><?= $value['review']; ?></p>
                <?php if(isset($_SESSION['login'])) : ?>
                    <?php if($value['id_user'] == $_SESSION['login'][0]['id_user']) : ?>
                        <a href="" class="mr-2 editBtn" data-id="<?= $value['id_review']; ?>" data-toggle="modal" data-target="#editModal">edit</a>
                        <a href="" class="deleteBtn" data-id="<?= $value['id_review']; ?>" data-toggle="modal" data-target="#deleteModal">delete</a>
                    <?php endif; ?>
                <?php endif; ?>
                    </div>
                </li>
                <br>
                <?php endforeach; ?>
            <?php endif; ?>
                </ul>
            </div>
            </div>
        </div>
        <?php Session::commentsTemplate(); ?>
        </div>
    </div>
    <?php else : ?>
        <h2 class="text-center">Post Not Found</h2>
        <p class="text-center"><a href="<?= Config::BASEURL; ?>">Back to home page</a></p>
    <?php endif; ?>
    </div>
    

<!-- delete Modal-->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">delete comments</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                <form action="<?= Config::BASEURL; ?>home/saveDelete/<?= $value['id_publish']; ?>" method="POST">
                <div class="mb-3">
                    <input type="hidden" name="D_id" id="D_id">
                    <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">Username :</label>
                    <input type="text" class="form-control D_name"  id="D_name" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Comments :</label>
                        <textarea class="form-control" id="D_text" name="D_comments" disabled></textarea>
                    </div>
                </div>
                    <hr>
                    Select "Delete" below if you want to delete this comments.
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-success" type="submit" name="saveDelete">Delete</button>
                </div>
            </div>
            </form>
    </div>
</div>

<!-- edit Modal-->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit comments</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                <form action="<?= Config::BASEURL; ?>home/saveEdit/<?= $value['id_publish']; ?>" method="POST">
                <div class="mb-3">
                    <input type="hidden" name="id" id="id">
                    <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">Username :</label>
                    <input type="text" class="form-control name"  id="name" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Comments :</label>
                        <textarea class="form-control" id="text" name="comments" required></textarea>
                    </div>
                </div>
                    <hr>
                    Select "Save" below if you want to save this comments.
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-success" type="submit" name="saveEdit">Save</button>
                </div>
            </div>
            </form>
    </div>
</div>

