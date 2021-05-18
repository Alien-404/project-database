<!-- Banner Starts Here -->
<div class="main-banner header-text">
    <div class="container-fluid">
    <div class="owl-banner owl-carousel">
<?php 
$count = count($data['post']['images']) - 1; 
$size = count($data['post']['total']);
?>
<?php foreach($data['post']['table'] as $post) : ?>
<?php $date = date_create($post['created_at']); ?>    
        <div class="item">
        <img src="<?= Config::BASEURL; ?>img/upload/<?= $data['post']['images'][$count]['foto']; ?>" alt="">
        <div class="item-content">
            <div class="main-content">
            <div class="meta-category">
                <span><?= $post['nama_kategori'] ?></span>
            </div>
            <a href="<?= Config::BASEURL; ?>home/details/<?= $post['id_publish']; ?>"><h4><?= $post['judul'] ?></h4></a>
            <ul class="post-info">
                <li><a href="/" onclick="return false;"><?= $post['nama_user'] ?></li>
                <li><a href="/" onclick="return false;"><?= date_format($date, 'F j, Y'); ?></a></li>
                <li><a href="<?= Config::BASEURL; ?>home/details/<?= $post['id_publish']; ?>">
                <?php 
                $comments;
                for($i = 0; $i < $size; $i++) {
                    if($data['post']['total'][$i]['id'] == $post['id_publish']) {
                        $comments = $data['post']['total'][$i]['total'];
                        break;
                    } else {
                        $comments = false;
                    }
                } ?>
                <?= ($comments == false) ? '0' : $comments; ?> Comments</a></li>
            </ul>
            </div>
        </div>
        </div>
<?php 
--$count; 
?>
<?php endforeach; ?>
    </div>
    </div>
</div>
<!-- Banner Ends Here -->

