<div id="layoutSidenav_content">
<main>
    <div class="container-fluid">
        <h1 class="mt-4">POST</h1>
        <!-- breadcrumb -->
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="<?= Config::BASEURL; ?>admin/index">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="<?= Config::BASEURL; ?>admin/archives">Archives</a></li>
            <li class="breadcrumb-item active" aria-current="page">New Post</li>
        </ol>

<?php
    Flasher::flash();
?>

<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md">
                <h4>Add New Post</h4>
            </div>		                
        </div>
        <hr>
        <div class="row">
            <div class="col-md-8">
                <form action="" method="POST" enctype="multipart/form-data">
                <?php
                    $id =  $_SESSION['login'][0]['id_user'];
                    $timestamp = date('Y-m-d H:i:s');
                    $uniqId = uniqid();
                ?>
                    <input type="hidden" value="<?= $id; ?>" name="id">
                    <input type="hidden" value="<?= $timestamp; ?>" name="created">
                    <input type="hidden" value="<?= $uniqId; ?>" name="uniqID">
                    <div class="form-group row">
                    <label for="text" class="col-12 col-form-label">Judul</label> 
                    <div class="col-12">
                        <input id="text" name="judul" placeholder="Enter Title here" class="form-control here" required="required" type="text">
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="textarea" class="col-12 col-form-label">Deskripsi</label> 
                    <div class="col-12">
                        <textarea id="textarea" name="deskripsi" cols="40" rows="5" class="form-control"></textarea>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="text" class="col-12 col-form-label">Alamat</label> 
                    <div class="col-12">
                        <input id="text" name="alamat" placeholder="Enter Address here" class="form-control here" required="required" type="text">
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="text" class="col-12 col-form-label">Kontak</label> 
                    <div class="col-12">
                        <input id="text" name="kontak" placeholder="Email or Phone Number" class="form-control here" required="required" type="text">
                    </div>
                    </div> 
                    
                    <div class="input-group mb-3">
                    <label class="input-group-text" for="inputGroupSelect01">Kategori</label>
                    <select class="form-select" id="inputGroupSelect01" name="kategori" required>
                        <option value="" selected>None</option>
                        <?php foreach($data['kategori'] as $kategori) : ?>
                        <option value="<?= $kategori['id_kategori']; ?>"><?= $kategori['nama_kategori']; ?></option>
                        <?php endforeach; ?>
                    </select>
                    </div>

            <button class="btn btn-primary" type="submit" id="publish" name="post_btn">Publish</button>
            </div>
        <div class="col-md-4 mb-1 pt-4">
            <div class="card mb-3" style="max-width: 18rem;">
                <div class="card-header bg-light ">
                <h5 class="text-center">Featured Image</h5>
                <p class="text-center"><small class="text-muted">MAX 3 Images uploaded | 5MB/Image</small></p>
                </div>
                <div class="card-body">
                <div class="gallery"></div>
                </div>
                <div class="card-footer bg-light">
                <input type="file" name="img[]" id="image" multiple>
                </div>
                </div>    
            </div>
            </form>
        </div>
    </div>
</div>