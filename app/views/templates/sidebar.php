<div class="col-lg-4">
    <div class="sidebar">
    <div class="row">
    <div class="col-lg-12">
        <div class="sidebar-item search">
        <form id="search_form" name="gs" method="GET" action="<?= Config::BASEURL; ?>home/blogs">
            <input type="text" name="s" class="searchText" placeholder="type to search..." autocomplete="on">
        </form>
    </div>
</div>
<!-- recent posts -->
<div class="col-lg-12">
    <div class="sidebar-item recent-posts">
    <div class="sidebar-heading">
        <h2>Recent Posts</h2>
    </div>
    <div class="content">
        <ul>
        <?php $limit = 3; //limit for recent posts ?>
        <?php foreach($data['post']['table'] as $post) : ?>
        <?php $date = date_create($post['created_at']); ?>  
        <?php if($limit == 0) : ?>
            <?php break; ?>
        <?php endif; ?>
        <li><a href="<?=Config::BASEURL; ?>home/details/<?= $post['id_publish'];?>">
            <h5><?= $post['judul']; ?></h5>
            <span><?= date_format($date, 'F j, Y'); ?></span>
        </a></li>
        <?php --$limit; ?>
        <?php endforeach; ?>
        </ul>
    </div>
    </div>
</div>
<!-- categories -->
<div class="col-lg-12">
    <div class="sidebar-item tags">
    <div class="sidebar-heading">
        <h2>Categories</h2>
    </div>
    <div class="content">
        <ul>
        <?php foreach($data['kategori'] as $kategori) : ?>
        <li><a href="<?= Config::BASEURL; ?>home/blogs/?c=<?= $kategori['nama_kategori']; ?>"><?= $kategori['nama_kategori']; ?></a></li>
        <?php endforeach; ?>
        </ul>
    </div>
    </div>
</div>         
        </div>
    </div>
    </div>
</div>
</div>
</section>