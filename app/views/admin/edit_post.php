<div id="layoutSidenav_content">
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Edit Post</h1>
        <!-- breadcrumb -->
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="<?= Config::BASEURL; ?>admin/index">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="<?= Config::BASEURL; ?>admin/archives">Archives</a></li>
            <li class="breadcrumb-item"><a href="<?= Config::BASEURL; ?>admin/details/<?= $data['details'][0]['id_publish']; ?>">Details</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Post</li>
        </ol>

        <?php
        Flasher::flash();
        ?>


<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md">
                <h4>Edit Post</h4>
            </div>		                
        </div>
        <hr>
        <div class="row">
            <div class="col-md-8">
                <form action="" method="POST" enctype="multipart/form-data">
                    <input type="hidden" value="<?= $data['details'][0]['id_publish']; ?>" name="id">
                    <div class="form-group row">
                    <label for="text" class="col-12 col-form-label">Judul</label> 
                    <div class="col-12">
                        <input id="text" name="judul" class="form-control here" required="required" type="text" value="<?= $data['details'][0]['judul']; ?>">
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="textarea" class="col-12 col-form-label">Deskripsi </label> 
                    <div class="col-12">
                        <textarea id="textarea" name="deskripsi" cols="40" rows="5" class="form-control"><?= $data['details'][0]['deskripsi']; ?></textarea>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="text" class="col-12 col-form-label">Alamat</label> 
                    <div class="col-12">
                        <input id="text" name="alamat" class="form-control here" required="required" type="text" value="<?= $data['details'][0]['alamat']; ?>">
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="text" class="col-12 col-form-label">Kontak</label> 
                    <div class="col-12">
                        <input id="text" name="kontak" class="form-control here" required="required" type="text" value="<?= $data['details'][0]['kontak']; ?>">
                    </div>
                    </div> 
                    
                    <div class="input-group mb-3">
                    <label class="input-group-text" for="inputGroupSelect01">Kategori</label>
                    <select class="form-select" id="inputGroupSelect01" name="kategori" required>
                        <?php $selected = $data['details'][0]['id_kategori']; ?>
                        <?php foreach($data['kategori'] as $kategori) : ?>
                        <option value="<?= $kategori['id_kategori']; ?>" <?= ($kategori['id_kategori'] == $selected ? 'selected' : ''); ?> ><?= $kategori['nama_kategori']; ?></option>
                        <?php endforeach; ?>
                    </select>
                    </div>

            <button class="btn btn-primary" type="submit" name="save-btn">Save</button>
            </div>
            <?php 
            $images = [];
            $ids = []; 
            foreach($data['details'] as $foto) :
                array_push($images, $foto['foto']);
                array_push($ids, $foto['id']);
            endforeach; 
            ?>

            <!-- images1 -->
            <input type="hidden" name="id_post_foto" value="<?= $data['details'][0]['id_post_foto']; ?>">
            <div class="col-md-4 mb-1 pt-4">            
                <div class="card mb-3" style="max-width: 18rem;">
                <div class="card-header bg-light ">
                <h5 class="text-center">Uploaded Image</h5>
                <p class="text-center"><small class="text-muted">MAX Size Image uploaded 5MB</small></p>
                </div>
                <div class="card-body">
                <div class="gallery">
                <?php if(isset($images[0])) : ?>
                    <img src="<?= Config::BASEURL; ?>img/upload/<?= $images[0]; ?>" class="img-fluid" id='output'>
                <?php endif; ?>
                </div>
                </div>
                <div class="card-footer bg-light">
                <input type="hidden" name="imgLama1" value="<?= (isset($images[0]) ? $images[0] : ''); ?>">
                <input type="hidden" name="id-1" value="<?= (isset($ids[0]) ? $ids[0] : ''); ?>">
                <input type="file" name="img1" accept="image/*" onchange="loadFile(event)">
                <input class="form-check-input mt-3 ml-2" type="checkbox" id="delete1" name="delete1">
                <label for="delete1" class="ml-4 mt-2"> Delete!</label>
                </div>
                </div>       
            <!-- images2 -->           
                <div class="card mb-3" style="max-width: 18rem;">
                <div class="card-header bg-light ">
                <h5 class="text-center">Uploaded Image</h5>
                <p class="text-center"><small class="text-muted">MAX Size Image uploaded 5MB</small></p>
                </div>
                <div class="card-body">
                <div class="gallery">
                <?php if(isset($images[1])) : ?>
                    <img src="<?= Config::BASEURL; ?>img/upload/<?= $images[1]; ?>" class="img-fluid" id="output2">
                <?php else: ?>
                    <img class="img-fluid" id="output2">
                <?php endif; ?>
                </div>
                </div>
                <div class="card-footer bg-light">
                <input type="hidden" name="imgLama2" value="<?= (isset($images[1]) ? $images[1] : ''); ?>">
                <input type="hidden" name="id-2" value="<?= (isset($ids[1]) ? $ids[1] : ''); ?>">
                <input type="file" name="img2" accept="image/*" onchange="loadFile2(event)">
                <?php if(isset($images[1])) : ?>
                <input class="form-check-input mt-3 ml-2" type="checkbox" id="delete2" name="delete2" value="">
                <label for="delete2" class="ml-4 mt-2"> Delete!</label>
                <?php endif; ?>
                </div>
                </div>       
            <!-- images3 -->           
                <div class="card mb-3" style="max-width: 18rem;">
                <div class="card-header bg-light ">
                <h5 class="text-center">Uploaded Image</h5>
                <p class="text-center"><small class="text-muted">MAX Size Image uploaded 5MB</small></p>
                </div>
                <div class="card-body">
                <div class="gallery">
                <?php if(isset($images[2])) : ?>
                    <img src="<?= Config::BASEURL; ?>img/upload/<?= $images[2]; ?>" class="img-fluid"  id="output3">
                <?php else: ?>
                    <img class="img-fluid" id="output3">
                <?php endif; ?>
                </div>
                </div>
                <div class="card-footer bg-light">
                <input type="hidden" name="imgLama3" value="<?= (isset($images[2]) ? $images[2] : ''); ?>">
                <input type="hidden" name="id-3" value="<?= (isset($ids[2]) ? $ids[2] : ''); ?>">
                <input type="file" name="img3" accept="image/*" onchange="loadFile3(event)">
                <?php if(isset($images[2])) : ?>
                <input class="form-check-input mt-3 ml-2" type="checkbox" id="delete3" name="delete3" value="">
                <label for="delete3" class="ml-4 mt-2"> Delete!</label>
                <?php endif; ?>
                </div>
                </div>       
            </div>
            </form>
        </div>
    </div>
</div>