<?php 

class Album_model extends Controller {

    // private $table = 'galeri';
    private $db;

    public function __construct()
    {
        $this->db = new Database;   
    }

    public function getAllAlbum() {

        $this->db->query('SELECT * FROM album ORDER BY created_at DESC');
        return $this->db->resultSet();    
        
    }

    public function getAlbumById($id) {

        $this->db->query('SELECT * FROM album WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function insertAlbum($data)
    {
        $query = "INSERT INTO album
                    VALUES
                ('', :album, :keterangan, now(), now())";

        $this->db->query($query);
        $this->db->bind('album', $data['album']);
        $this->db->bind('keterangan', $data['keterangan']);
        // $this->db->bind('created_at', date('Y-m-d')); // or $data['created_at'] if provided
        // $this->db->bind('updated_at', date('Y-m-d'));


        $this->db->execute();


        return $this->db->rowCount();
    }

    public function updateAlbum($data) {

        $query = "UPDATE album SET album =:album, keterangan =:keterangan, updated_at =now()
                  WHERE id =:id";

    
        $this->db->query($query);
        $this->db->bind('album', $data['album']);
        $this->db->bind('keterangan', $data['keterangan']);
        $this->db->bind('id', $data['id']);

        // var_dump($data['updated_at']);
        // die;
       

        
        // $this->db->bind('created_at', date('Y-m-d')); // or $data['created_at'] if provided
        // $this->db->bind('updated_at', date('Y-m-d'));


        $this->db->execute();

        


        return $this->db->rowCount();

    }



    public function deleteAlbum($id) {
        $query = "DELETE FROM album WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);


        $this->db->execute();

        return $this->db->rowCount();
    }

}