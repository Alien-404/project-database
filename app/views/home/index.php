
<!-- Page Content -->
<section class="blog-posts">
    <div class="container">
    <div class="row">
        <div class="col-lg-8">
        <div class="all-blog-posts">
            <div class="row">

            <!-- posts -->
        <?php 
        $limitPosts = 3; //limit for posts 
        $count = count($data['post']['images']) - 1;
        $size = count($data['post']['total']);
        ?>
        <?php foreach($data['post']['table'] as $post) : ?>
            <?php $date = date_create($post['created_at']); ?>   
        <?php if($limitPosts == 0) : ?>
            <?php break; ?>
        <?php endif; ?>
            <div class="col-lg-12">
                <div class="blog-post">
                <div class="blog-thumb">
                    <img src="<?= Config::BASEURL; ?>img/upload/<?= $data['post']['images'][$count]['foto']; ?>" alt="">
                </div>
                <div class="down-content">
                <?php $link = Config::BASEURL . 'home/details/' . $post['id_publish']; ?>
                    <span><?= $post['nama_kategori']; ?></span>
                    <a href="<?= $link; ?>"><h4><?= $post['judul']; ?></h4></a>
                    <ul class="post-info">
                    <li><a href="/" onclick="return false;"><?= $post['nama_user'] ?></li>
                    <li><a href="/" onclick="return false;"><?= date_format($date, 'F j, Y'); ?></a></li>
                    <li><a href="<?= $link; ?>">
                    <?php 
                    $comments;
                    for($i = 0; $i < $size; $i++) {
                        if($data['post']['total'][$i]['id'] == $post['id_publish']) {
                            $comments = $data['post']['total'][$i]['total'];
                            break;
                        } else {
                            $comments = false;
                        }
                    }; ?>
                <?= ($comments == false) ? '0' : $comments; ?> Comments</a></li>
                    </ul>
                    <p><?= (strlen($post['deskripsi']) <= 340) ? nl2br($post['deskripsi']) : substr(nl2br($post['deskripsi']), 0, 340) . ' <a href=" ' . $link . '">Read More...</a> '; ?></p>
                    <div class="post-options">
                    <div class="row">
                        <div class="col-6">
                        <ul class="post-tags">
                        </ul>
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
        <?php 
        --$count;
        --$limitPosts; 
        ?>
        <?php endforeach; ?>

            <div class="col-lg-12">
                <div class="main-button">
                <a href="<?= Config::BASEURL; ?>home/blogs">View All Posts</a>
                </div>
            </div>
            </div>

        </div>
        </div>
        
