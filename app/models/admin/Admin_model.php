<?php


class Admin_model {
    private $foto = 'post_foto';
    private $publish = 'publish';
    private $kategori = 'kategori';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    
    public function post()
    {
        if(isset($_POST['post_btn'])) {
            // insert data publish before

            // get publish data
            // uniq id for publish and post_foto
            $uniqID = $_POST['uniqID'];
            $judul = htmlspecialchars($_POST['judul']);
            $kontak = htmlspecialchars($_POST['kontak']);
            $idUser = (int) $_POST['id'];  
            $created = $_POST['created'];  
            $desk = htmlspecialchars($_POST['deskripsi']);
            $alamat = htmlspecialchars($_POST['alamat']);
            $kat = (int) $_POST['kategori'];

            $publish = "INSERT INTO $this->publish VALUES ('', '$uniqID', '$kat', '$judul', '$desk', '$alamat', '$kontak', '$created', '$idUser')";

            $this->db->query($publish);

            // execute
            $this->db->execute();


            // upload images //

            // extension img allowed
            $allowExt = ['jpeg', 'jpg', 'png'];

            //img name
            $randomName = '';

            foreach($_FILES['img']['tmp_name'] as $key => $value) {
                // get files
                $imgName = $_FILES['img']['name'][$key];
                $imgsSize = $_FILES['img']['size'][$key];
                $imgError = $_FILES['img']['error'][$key];
                $imgTmp = $_FILES['img']['tmp_name'][$key];

                //cek img
                if($imgError === 4) {
                    Flasher::setFlasher('Please upload images!', '', 'danger');
                    header('Location: ' . Config::BASEURL . 'admin/publish');
                    exit;
                }

                // img ext
                $imgExt = pathinfo($imgName, PATHINFO_EXTENSION);
                $imgExt = strtolower($imgExt);

                // generete random img name
                $randomName = uniqid();
                $randomName .= '.';
                $randomName .= $imgExt;

                //limit size upload
                if($imgsSize > 5000000) {
                    
                    // message error and redirect 
                    Flasher::setFlasher('Images size to large!', '', 'danger');
                    header('Location: ' . Config::BASEURL . 'admin/publish');
                    exit;
                    
                }

                if(in_array($imgExt, $allowExt)) {
                    $dir = 'img/upload/';
                    move_uploaded_file($imgTmp, $dir . $randomName);

                } else {
                    // error ext message
                    Flasher::setFlasher('The extentions not allowed!', '', 'danger');
                    header('Location: ' . Config::BASEURL . 'admin/publish');
                    exit;
                }           
                

                //store ke database
                $foto = "INSERT INTO $this->foto VALUES ('', '$uniqID', '$randomName')";
                $this->db->query($foto);
                $this->db->execute();

            }

            //commit data to database if success
            $this->db->setCommit();


            //set message
            Flasher::setFlasher('Uploaded Succesfuly!', '', 'success');
            header('Location: ' . Config::BASEURL . 'admin/archives');
            exit;
        }
    }

    public function getKategori()
    {
        $query = "SELECT * FROM kategori";
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function getPostById($id)
    {
        $query = 'SELECT id_publish, judul, created_at, nama_kategori, nama_user FROM ' . $this->publish . ' P, kategori K, users U WHERE id_publish=:id AND P.id_kategori=K.id_kategori AND P.uploaded_by=U.id_user';
        $this->db->query($query); 
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function delete()
    {
        $query = "DELETE FROM $this->publish WHERE id_publish=:id";
        $this->db->query($query); 
        $this->db->bind('id', $_POST['id']);
        $this->db->execute();
        $this->db->setCommit();
        return $this->db->rowCount();
    }

    public function getDetailPost($id) 
    {
        $query = 'SELECT * FROM publish P, post_foto PF, kategori K, users U WHERE (id_publish=:id) AND (P.id_post_foto=PF.id_post_foto AND P.id_kategori=K.id_kategori AND P.uploaded_by=U.id_user)';
        $this->db->query($query); 
        $this->db->bind('id', $id);
        return $this->db->resultSet();
    }

    public function getAllPublish()
    {
        $this->db->query('SELECT * FROM publish P, kategori K WHERE P.id_kategori=K.id_kategori'); 
        return $this->db->resultSet();
    }

    public function editSave($id_post)
    {
        
        if(isset($_POST['save-btn'])) {
            $id = $_POST['id'];
            $judul = $_POST['judul'];
            $kontak = $_POST['kontak'];
            $desk = $_POST['deskripsi'];
            $alamat = $_POST['alamat'];
            $kat = (int) $_POST['kategori'];
            $id_post_foto = $_POST['id_post_foto'];

            // old value 
            $fotoLama1 = $_POST['imgLama1'];
            $id1 = $_POST['id-1'];

            $fotoLama2 = $_POST['imgLama2'];
            $id2 = $_POST['id-2'];

            $fotoLama3 = $_POST['imgLama3'];
            $id3 = $_POST['id-3'];


            // new value
            $images = [];
            $imageNew1 = '';
            $imageNew2 = '';
            $imageNew3 = '';

            for ($i=1; $i <= 3; $i++) { 
                if($_FILES['img' . $i]['error'] !== 4) {
                    array_push($images, $_FILES['img' . $i]['name']);
                } else {
                    array_push($images, '');
                }
            }
            
            // logic check
            if(isset($_POST['delete1'])) {
                $query = "DELETE FROM $this->foto WHERE id = :id";
                $this->db->query($query);
                $this->db->bind('id', $id1);
                $this->db->execute();
            } else {
                if($images[0] != '') {
                    //limit size upload
                    if($_FILES['img1']['size'] > 5000000) {
                        // message error and redirect 
                        Flasher::setFlasher('Images size to large!', '', 'danger');
                        header('Location: ' . Config::BASEURL . 'admin/edit_post/' . $id_post);
                        exit;
                    }
                    $imageNew1 = $images[0];
                    // img ext
                    $imgExt = pathinfo($imageNew1, PATHINFO_EXTENSION);
                    $imgExt = strtolower($imgExt);
                    // random
                    // random
                    $imageNew1 = uniqid();
                    $imageNew1 .= '.';
                    $imageNew1 .= $imgExt;
    
                    // extension img allowed
                    $allowExt = ['jpeg', 'jpg', 'png'];
                    if(in_array($imgExt, $allowExt)) {
                        $dir = 'img/upload/';
                        move_uploaded_file($_FILES['img1']['tmp_name'], $dir . $imageNew1);
                    } else {
                        // error ext message
                        Flasher::setFlasher('The extentions not allowed!', '', 'danger');
                        header('Location: ' . Config::BASEURL . 'admin/edit_post/' . $id_post);
                        exit;
                    }
    
                    $query = "UPDATE $this->foto SET foto = :imageNew1 WHERE id = :id1";
                    $this->db->query($query);
                    $this->db->bind('imageNew1', $imageNew1);
                    $this->db->bind('id1', $id1);
                    $this->db->execute();
                }
            }

            if(isset($_POST['delete2'])) {
                $query = "DELETE FROM $this->foto WHERE id = :id2";
                $this->db->query($query);
                $this->db->bind('id2', $id2);
                $this->db->execute();
            } else {
                if($images[1] != '') {
                    //limit size upload
                    if($_FILES['img2']['size'] > 5000000) {
                        // message error and redirect 
                        Flasher::setFlasher('Images size to large!', '', 'danger');
                        header('Location: ' . Config::BASEURL . 'admin/edit_post/' . $id_post);
                        exit;
                    }
                    $imageNew2 = $images[1];
                    // img ext
                    $imgExt = pathinfo($imageNew2, PATHINFO_EXTENSION);
                    $imgExt = strtolower($imgExt);
                    // random
                    $imageNew2 = uniqid();
                    $imageNew2 .= '.';
                    $imageNew2 .= $imgExt;
    
                    // extension img allowed
                    $allowExt = ['jpeg', 'jpg', 'png'];
                    if(in_array($imgExt, $allowExt)) {
                        $dir = 'img/upload/';
                        move_uploaded_file($_FILES['img2']['tmp_name'], $dir . $imageNew2);
                    } else {
                        // error ext message
                        Flasher::setFlasher('The extentions not allowed!', '', 'danger');
                        header('Location: ' . Config::BASEURL . 'admin/edit_post/' . $id_post);
                        exit;
                    }
    
                    if($id2 == null) {
                        $query = "INSERT INTO $this->foto VALUES ('', :id_post_foto, :imageNew2)";
                        $this->db->query($query);
                        $this->db->bind('id_post_foto', $id_post_foto);
                        $this->db->bind('imageNew2', $imageNew2);
                        $this->db->execute();
                    } else {
                        $query = "UPDATE $this->foto SET foto = :imageNew2 WHERE id = :id2";
                        $this->db->query($query);
                        $this->db->bind('imageNew2', $imageNew2);
                        $this->db->bind('id2', $id2);
                        $this->db->execute();
                    }
                }
            }
            
            if(isset($_POST['delete3'])) {
                $query = "DELETE FROM $this->foto WHERE id = :id3";
                $this->db->query($query);
                $this->db->bind('id3', $id3);
                $this->db->execute();
            } else {
                if($images[2] != '') {
                    //limit size upload
                    if($_FILES['img3']['size'] > 5000000) {
                        // message error and redirect 
                        Flasher::setFlasher('Images size to large!', '', 'danger');
                        header('Location: ' . Config::BASEURL . 'admin/edit_post/' . $id_post);
                        exit;
                    }
                    $imageNew3 = $images[2];
                    // img ext
                    $imgExt = pathinfo($imageNew3, PATHINFO_EXTENSION);
                    $imgExt = strtolower($imgExt);
                    // random
                    $imageNew3 = uniqid();
                    $imageNew3 .= '.';
                    $imageNew3 .= $imgExt;
    
                    // extension img allowed
                    $allowExt = ['jpeg', 'jpg', 'png'];
                    if(in_array($imgExt, $allowExt)) {
                        $dir = 'img/upload/';
                        move_uploaded_file($_FILES['img3']['tmp_name'], $dir . $imageNew3);
                    } else {
                        // error ext message
                        Flasher::setFlasher('The extentions not allowed!', '', 'danger');
                        header('Location: ' . Config::BASEURL . 'admin/edit_post/' . $id_post);
                        exit;
                    }
    
                    if($id3 == null) {
                        $query = "INSERT INTO $this->foto VALUES ('', :id_post_foto, :imageNew3)";
                        $this->db->query($query);
                        $this->db->bind('id_post_foto', $id_post_foto);
                        $this->db->bind('imageNew3', $imageNew3);
                        $this->db->execute();
                    } else {
                        $query = "UPDATE $this->foto SET foto = :imageNew3 WHERE id = :id3";
                        $this->db->query($query);
                        $this->db->bind('imageNew3', $imageNew3);
                        $this->db->bind('id3', $id3);
                        $this->db->execute();
                    }
                }
            }
            

            $query = "UPDATE $this->publish SET id_kategori = :kat, judul = :judul, deskripsi = :desk, alamat = :alamat, kontak = :kontak WHERE id_publish = :id";
            $this->db->query($query);
            $this->db->bind('kat', $kat);
            $this->db->bind('judul', $judul);
            $this->db->bind('desk', $desk);
            $this->db->bind('alamat', $alamat);
            $this->db->bind('kontak', $kontak);
            $this->db->bind('id', $id);
            $this->db->execute();

            //commit data
            $this->db->setCommit();

            //set message
            Flasher::setFlasher('Edit Succesfuly!', '', 'success');
            header('Location: ' . Config::BASEURL . 'admin/details/' . $id_post);
            exit;

        }
    }

    public function searchArchives()
    {
        $kategori = '';
        $keyword = '';
        $page = (isset($_POST['page']) ? $_POST['page'] : 1);

        if (isset($_POST['kategori'])) {
            $kategori = $_POST['kategori'];
            $keyword = $_POST['keyword'];
        }
        $kategori = '%' . $kategori . '%';
        $keyword = '%' . $keyword . '%';
        
        // pagination
        $pag = "SELECT * FROM $this->publish P, kategori WHERE P.id_kategori=kategori.id_kategori AND (P.id_kategori LIKE :kategori AND judul LIKE :keyword)";
        $this->db->query($pag);
        $this->db->bind('kategori', $kategori);
        $this->db->bind('keyword', $keyword);
        $this->db->execute();
        // data pagination
        // change data for many data will present in pages
        $data = 15;
        $result = $this->db->rowCount();
        $allPages = ceil($result / $data);
        $active = $page;
        $offset = ($data * $active) - $data;

        $query = "SELECT * FROM $this->publish P, kategori WHERE P.id_kategori=kategori.id_kategori AND (P.id_kategori LIKE :kategori AND judul LIKE :keyword) LIMIT :offset, :data";
        $this->db->query($query);
        $this->db->bind('kategori', $kategori);
        $this->db->bind('keyword', $keyword);
        $this->db->bind('offset', $offset);
        $this->db->bind('data', $data);
        $table = $this->db->resultSet();

        $pagination = [
            'table' => $table,
            'activePages' => $active,
            'allPages' => $allPages,
        ];
        return $pagination;
    }

    public function getAllKategori()
    {
        $queryTable = "SELECT * FROM $this->kategori ORDER BY id_kategori ASC";
        $this->db->query($queryTable); 
        $table = $this->db->resultSet();

        $query = "SELECT kategori.id_kategori, nama_kategori, COUNT(publish.id_kategori) AS 'Total' FROM kategori, publish WHERE kategori.id_kategori = publish.id_kategori GROUP BY nama_kategori ORDER BY kategori.id_kategori ASC";
        $this->db->query($query); 
        $total = $this->db->resultSet();

        $result = [
            'table' => $table,
            'total' => $total,
        ];

        return $result;
    }  

    public function getKategoriById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->kategori . ' WHERE id_kategori=:id '); 
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function editkategori()
    {
        $query = "UPDATE $this->kategori SET
                    nama_kategori = :new
                    WHERE id_kategori = :id_kategori";

        $this->db->query($query); 
        $this->db->bind('new', $_POST['new']);
        $this->db->bind('id_kategori', $_POST['id_kategori']);
        $this->db->execute();
        $this->db->setCommit();
        return $this->db->rowCount();
    }

    public function newKategori()
    {
        if(isset($_POST['saveKat'])) {
            $value = $_POST['kategori'];
            $query = "INSERT INTO $this->kategori VALUES ('', :value)";
            $this->db->query($query);
            $this->db->bind('value', $value);
            $this->db->execute();
            $this->db->setCommit();

            //set message
            Flasher::setFlasher('New Kategori Succesfuly Added!', '', 'success');
            header('Location: ' . Config::BASEURL . 'admin/kategori');
            exit;
        }
    }


}