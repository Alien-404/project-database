<!-- Banner Starts Here -->
<div class="heading-page header-text">
    <section class="page-heading">
    <div class="container">
        <div class="row">
        <div class="col-lg-12">
            <div class="text-content">
            <h4>All Post</h4>
            <h2>All Post Destination</h2>
            </div>
        </div>
        </div>
    </div>
    </section>
</div>

<section class="blog-posts grid-system">
    <div class="container">
    <?php if($data['blogs']['message'] != null) : ?>
    <div class="alert alert-light" role="alert">
      <a href="<?= Config::BASEURL; ?>home/blogs">Return to Blogs </a>/ <?= $data['blogs']['message']; ?>
    </div>
    <?php endif; ?>
    <div class="row">
        <div class="col-lg-8">
        <div class="all-blog-posts">
            <div class="row">
            <!-- content -->
            <?php
            $size = (count($data['blogs']['all posts']) - 1);
            $count = count($data['blogs']['total']);
            if(count($data['blogs']['all posts']) > 0) :
            ?>
            <?php foreach($data['blogs']['all posts'] as $post) : ?>
            <?php
            $link = Config::BASEURL . 'home/details/' . $post['id_publish'];
            $date = date_create($post['created_at']); 
            ?>
            <div class="col-lg-6">
                <div class="blog-post">
                <div class="blog-thumb">
                    <img src="<?= Config::BASEURL; ?>img/upload/<?= $post['foto']; ?>" alt="">
                </div>
                <div class="down-content">
                    <span><?= $post['nama_kategori']; ?></span>
                    <a href="<?= $link; ?>"><h4><?= $post['judul']; ?></h4></a>
                    <ul class="post-info">
                    <li><a href="/" onclick="return false;"><?= $post['nama_user']; ?></a></li>
                    <li><a href="/" onclick="return false;"><?= date_format($date, 'F j, Y'); ?></a></li>
                    <li><a href="/" onclick="return false;">
                    <?php  
                     $comments;
                     for($i = 0; $i < $count; $i++) {
                         if($data['blogs']['total'][$i]['id'] == $post['id_publish']) {
                             $comments = $data['blogs']['total'][$i]['total'];
                             break;
                         } else {
                             $comments = false;
                         }
                     }; ?>
                 <?= ($comments == false) ? '0' : $comments; ?> Comments</a></li>
                    </ul>
                    <p><?= (strlen($post['deskripsi']) <= 100) ? nl2br($post['deskripsi']) : substr(nl2br($post['deskripsi']), 0, 100) . ' <a href=" ' . $link . '">Read More...</a> '; ?></p>
                </div>
                </div>
            </div>
            <?php --$size; ?>
            <?php endforeach; ?>
            

            <!-- pagination -->
            <div class="col-lg-12">
                <ul class="page-numbers">
            <?php if($data['blogs']['active'] > 1) : ?>
                <li><a href="<?= Config::BASEURL; ?>home/blogs/<?= $data['blogs']['active'] - 1; ?>/<?= ($data['blogs']['extUrl'] != null ? $data['blogs']['extUrl'] : ''); ?>"><i class="fa fa-angle-double-left"></i></a></li>
            <?php endif; ?>
            <?php for($i = 1; $i <= $data['blogs']['totalPages']; $i++) : ?>
                <?php if($i == $data['blogs']['active']) : ?>
                    <li class="active"><a href="/" onclick="return false;"><?= $i; ?></a></li>
                <?php else: ?>
                    <li><a href="<?= Config::BASEURL; ?>home/blogs/<?= $i; ?>/<?= ($data['blogs']['extUrl'] != null ? $data['blogs']['extUrl'] : ''); ?>"><?= $i; ?></a></li>
                <?php endif; ?>
            <?php endfor; ?>
            <?php if($data['blogs']['active'] < $data['blogs']['totalPages']) : ?>
                <li><a href="<?= Config::BASEURL; ?>home/blogs/<?= $data['blogs']['active'] + 1; ?>/<?= ($data['blogs']['extUrl'] != null ? $data['blogs']['extUrl'] : ''); ?>"><i class="fa fa-angle-double-right"></i></a></li>
                </ul>
            <?php endif; ?>
            </div>

            <?php else: ?>
                <div class="col-md-12 text-center">
                    <span class="display-1 d-block">404</span>
                    <div class="mb-4 lead">The page you are looking for was not found.</div>
                    <a href="<?= Config::BASEURL; ?>" class="btn btn-link">Back to Home</a>
                </div>
            <?php endif; ?>

            </div>
        </div>
        </div>