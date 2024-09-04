<?php 

class Galeri_model extends Controller {

    // private $table = 'galeri';
    private $db;

    public function __construct()
    {
        $this->db = new Database;   
    }

    public function getAllGaleri() {

        $this->db->query('SELECT galeri.id, judul, album.id, album, foto, galeri.keterangan, tanggal, status FROM galeri LEFT JOIN album ON album.id=galeri.album_id');
        return $this->db->resultSet();
        
    }

    public function getGaleriById($id) {

        $this->db->query('SELECT * FROM galeri WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function insert($data)
    {
        $query = "INSERT INTO mahasiswa
                    VALUES
                ('', :npm, :nama, :email, :jurusan)";

        $this->db->query($query);
        $this->db->bind('npm', $data['npm']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jurusan', $data['jurusan']);


        $this->db->execute();


        return $this->db->rowCount();
    }
}