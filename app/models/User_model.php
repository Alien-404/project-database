<?php 

class User_model {
    private $table = 'users';
    private $db;
    private $status = false;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllUser()
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE roles = "user" AND status = true '); 
        return $this->db->resultSet();
    }
    public function getAllUserActive()
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE roles = "user" AND status = false '); 
        return $this->db->resultSet();
    }

    public function getUserById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_user=:id '); 
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function getPostWisata()
    {
        $this->db->query('SELECT * FROM publish'); 
        return $this->db->resultSet();
    }

    public function blockUser()
    {
        $query = "UPDATE users SET
                    status = ' . $this->status . '
                    WHERE id_user = :id_user";

        $this->db->query($query); 
        $this->db->bind('id_user', $_POST['id']);
        $this->db->execute();
        $this->db->setCommit();
        return $this->db->rowCount();
    }

    public function activeUser()
    {
        $query = "UPDATE users SET
                    status = true
                    WHERE id_user = :id_user";

        $this->db->query($query); 
        $this->db->bind('id_user', $_POST['id']);
        $this->db->execute();
        $this->db->setCommit();
        return $this->db->rowCount();
    }

    public function getAllPublish()
    {
        $queryTable = 'SELECT * FROM publish P, kategori K, users U WHERE (P.id_kategori=K.id_kategori AND P.uploaded_by=U.id_user)  GROUP BY P.id_publish DESC LIMIT 6';
        $this->db->query($queryTable); 
        $tables = $this->db->resultSet();

        $queryComments = 'SELECT review.id_publish "id", COUNT(review.id_publish) "total" FROM publish, review WHERE publish.id_publish=review.id_publish GROUP BY review.id_publish';
        $this->db->query($queryComments); 
        $total = $this->db->resultSet();

        $images = 'SELECT foto FROM publish P, post_foto F WHERE (P.id_post_foto=F.id_post_foto) GROUP BY id_publish, F.id_post_foto';
        $this->db->query($images); 
        $images = $this->db->resultSet();

        $results = [
            'table' => $tables,
            'total' => $total,
            'images' => $images,
        ];

        return $results;
    }

    public function getAllKategori()
    {
        $queryKategori = 'SELECT * FROM kategori';
        $this->db->query($queryKategori);
        return $this->db->resultSet();
    }

    public function getPublishById($id)
    {
       $queryPost = "SELECT * FROM publish P, kategori K, users U, post_foto F WHERE (P.id_kategori = K.id_kategori AND P.id_post_foto = F.id_post_foto AND P.uploaded_by = U.id_user) AND P.id_publish = :id GROUP BY P.id_publish";
       $this->db->query($queryPost);
       $this->db->bind('id', $id);
       $post = $this->db->single();

       $queryImages = "SELECT * FROM publish P, post_foto F WHERE (P.id_post_foto = F.id_post_foto) AND P.id_publish = :id";
       $this->db->query($queryImages);
       $this->db->bind('id', $id);
       $images = $this->db->single();

       $queryPhotos = "SELECT * FROM publish P, post_foto F WHERE (P.id_post_foto = F.id_post_foto) AND P.id_publish = :id";
       $this->db->query($queryPhotos);
       $this->db->bind('id', $id);
       $photos = $this->db->resultSet();

       $queryComments = "SELECT *, COUNT(R.id_review) 'total' FROM publish P, review R, users U WHERE (P.id_publish = R.id_publish AND R.review_by = U.id_user) AND P.id_publish = :id";
       $this->db->query($queryComments);
       $this->db->bind('id', $id);
       $comments = $this->db->single();

       $queryAllComments = "SELECT * FROM publish P, review R, users U WHERE (R.review_by = U.id_user AND R.id_publish = P.id_publish) AND R.id_publish = :id";
       $this->db->query($queryAllComments);
       $this->db->bind('id', $id);
       $allReview = $this->db->resultSet();

       $results = [
        'post details' => $post,
        'images' => $images,
        'comments' => $comments,
        'all' => $allReview,
        'photos' => $photos,
       ];


       return $results;
    }

    public function submitReview($id)
    {
        if(isset($_POST['btnReview'])) {
            $idPublish = $id;
            $idUser = $_SESSION['login'][0]['id_user'];
            $review = $_POST['review'];
            $timeStamp = date('Y-m-d H:i:s');
            
            $query = "INSERT INTO review VALUES ('', :idPublish, :review, :idUser, :timeStamp)";
            $this->db->query($query);
            $this->db->bind('idPublish', $idPublish);
            $this->db->bind('review', $review);
            $this->db->bind('idUser', $idUser);
            $this->db->bind('timeStamp', $timeStamp);
            $this->db->execute();
            $this->db->setCommit();

            Flasher::setFlasher('comments succesfuly submited!', '', 'success');
            header('Location: ' . Config::BASEURL . 'home/details/' . $id);
            exit;

        }
    }

    public function editReview($id)
    {
        $idReview = $id;
        $query = "SELECT id_publish, id_review, nama_user, review, review_by FROM review R, users U WHERE R.review_by = U.id_user AND id_review = :idReview";
        $this->db->query($query);
        $this->db->bind('idReview', $idReview);
        return $this->db->resultSet();
    }

    public function saveReview()
    {
        if(isset($_POST['saveEdit'])) {
            $id = $_POST['id'];
            $review = $_POST['comments'];

            $query = "UPDATE review SET review = :review WHERE id_review = :id";
            $this->db->query($query);
            $this->db->bind('review', $review);
            $this->db->bind('id', $id);
            $this->db->execute();

            $this->db->setCommit();
            return $this->db->rowCount();

        }
    }

    public function deleteReview()
    {
        if(isset($_POST['saveDelete'])) {
            $id = $_POST['D_id'];

            $query = "DELETE FROM review WHERE id_review = :id";
            $this->db->query($query);
            $this->db->bind('id', $id);
            $this->db->execute();

            $this->db->setCommit();
            return $this->db->rowCount();

        }
    }

    public function blogs($page)
    {
        // pagination
        $shows = 10;
        $message = null;
        $exUrl = null;
        
        if(isset($_GET['c']))
        {
            $kat = $_GET['c'];
            $exUrl = '?c=' . $kat;
            $message = 'List Of Category : ' . $kat;

            // pagination konfiguration 
            $this->db->query("SELECT * FROM publish P, kategori K WHERE P.id_kategori = K.id_kategori AND K.nama_kategori = '$kat'");
            $datas = count($this->db->resultSet());
            $activePages = ($page != null ? $page : 1);
            $page = ceil($datas / $shows);
            $offset = ($shows * $activePages) - $shows;

            
            $queryBlogs = "SELECT * FROM publish P, post_foto PF, kategori K, users U WHERE (P.id_post_foto = PF.id_post_foto AND P.id_kategori = K.id_kategori AND P.uploaded_by = U.id_user) AND K.nama_kategori = '$kat' GROUP BY P.id_publish DESC LIMIT :offset, :shows";

            
           
        } else if(isset($_GET['s'])) {
            $s = $_GET['s'];
            $exUrl = '?s=' . $s;
            $message = 'Results Search : ' . $s;

            // pagination konfiguration 
            $this->db->query("SELECT * FROM publish P WHERE P.judul LIKE '%$s%' ");
            $datas = count($this->db->resultSet());
            $activePages = ($page != null ? $page : 1);
            $page = ceil($datas / $shows);
            $offset = ($shows * $activePages) - $shows;

            
            $queryBlogs = "SELECT * FROM publish P, post_foto PF, kategori K, users U WHERE (P.id_post_foto = PF.id_post_foto AND P.id_kategori = K.id_kategori AND P.uploaded_by = U.id_user) AND P.judul LIKE '%$s%' GROUP BY P.id_publish DESC LIMIT :offset, :shows";

        } else {
            // pagination konfiguration 
            $this->db->query('SELECT * FROM publish');
            $datas = count($this->db->resultSet());
            $activePages = ($page != null ? $page : 1);
            $page = ceil($datas / $shows);
            $offset = ($shows * $activePages) - $shows;


            $queryBlogs = "SELECT * FROM publish P, post_foto PF, kategori K, users U WHERE (P.id_post_foto = PF.id_post_foto AND P.id_kategori = K.id_kategori AND P.uploaded_by = U.id_user) GROUP BY P.id_publish DESC LIMIT :offset, :shows";
        }
        $this->db->query($queryBlogs);
        $this->db->bind('offset', $offset);
        $this->db->bind('shows', $shows);
        $blogs = $this->db->resultSet();


        $queryTotal = "SELECT R.id_publish 'id', COUNT(R.id_publish) 'total' FROM review R GROUP BY R.id_publish";
        $this->db->query($queryTotal);
        $total = $this->db->resultSet();

        $results = [
            'all posts' => $blogs,
            'total' => $total,
            'active' => $activePages,
            'totalPages' => $page,
            'extUrl' => $exUrl,
            'message' => $message
        ];

        return $results;
    }
}