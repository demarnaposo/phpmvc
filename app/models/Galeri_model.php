<?php 

class Galeri_model extends Controller {

    // private $table = 'galeri';
    private $db;

    public function __construct()
    {
        $this->db = new Database;   
    }

    public function getAllGaleri() {

        $this->db->query('SELECT galeri.id, judul, album.id as id_album, album, foto, galeri.keterangan, tanggal, status FROM galeri LEFT JOIN album ON album.id=galeri.album_id ORDER BY tanggal DESC');
        return $this->db->resultSet();
        
    }

    public function getGaleriById($id) {

        $this->db->query('SELECT galeri.id, album_id, judul, foto, galeri.keterangan, tanggal, status, album FROM galeri LEFT JOIN album ON album.id=galeri.album_id WHERE galeri.id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function insertGaleri($data)
    {
        $query = "INSERT INTO galeri
                    VALUES
                ('', :album_id, :judul, :foto, :keterangan, :tanggal, :status, now(), now())";

        $this->db->query($query);
        $this->db->bind('album_id', $data['album_id']);
        $this->db->bind('judul', $data['judul']);
        $this->db->bind('foto', $data['foto']);
        $this->db->bind('keterangan', $data['keterangan']);
        $this->db->bind('tanggal', $data['tanggal']);
        $this->db->bind('status', $data['status']);


        $this->db->execute();


        return $this->db->rowCount();
    }

    public function updateGaleri($data) {

        $query = "UPDATE galeri SET album_id =:album_id, judul =:judul, foto =:foto, keterangan =:keterangan, tanggal =:tanggal, status =:status, updated_at =now() 
        WHERE id =:id";

    
        $this->db->query($query);
        $this->db->bind('album_id', $data['album_id']);
        $this->db->bind('judul', $data['judul']);
        $this->db->bind('foto', $data['foto']);
        $this->db->bind('keterangan', $data['keterangan']);
        $this->db->bind('tanggal', $data['tanggal']);
        $this->db->bind('status', $data['status']);
        $this->db->bind('id', $data['id']);



        $this->db->execute();

        


        return $this->db->rowCount();

    }


    public function deleteGaleri($id) {
        $query = "DELETE FROM galeri WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);


        $this->db->execute();

        return $this->db->rowCount();
    }
}