<?php 

class Galeri extends Controller {

    public function index() {

        $data['title'] = 'Halaman Galeri';
        $data['galeri'] = $this->model('Galeri_model')->getAllGaleri();
        $this->view('templates/header', $data);

        $this->view('galeri/index', $data);
        $this->view('templates/footer');
    }

    public function insert() {
        $data['title'] = 'Tambah Data Galeri';
        $data['album'] = $this->model('Album_model')->getAllAlbum();
        
        
        // var_dump($data['album']);
        // die;

        $this->view('templates/header', $data);

        $this->view('galeri/insert', $data);
        $this->view('templates/footer');
    }

    public function insertData()
    {

        // var_dump($_POST);
        // die;

        if ($this->model('Galeri_model')->insertGaleri($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/galeri');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/galeri');
            exit;
        }
    }

    public function editData($id) {

        $data['title'] = 'Edit Data Galeri';
        $data['galeri'] = $this->model('Galeri_model')->getGaleriById($id);
        $data['album'] = $this->model('Album_model')->getAllAlbum();

        // var_dump($data['galeri']);
        // die;

        $this->view('templates/header', $data);

        $this->view('galeri/edit', $data);
        $this->view('templates/footer');

        
    }

    public function updateData() {

        // var_dump($_POST);
        // die;

        if ($this->model('Galeri_model')->updateGaleri($_POST) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/galeri');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/galeri');
            exit;
        }

        
    }

    public function deleteData($id)
    {


        if ($this->model('Galeri_model')->deleteGaleri($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/galeri');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/galeri');
            exit;
        }
    }


    
}