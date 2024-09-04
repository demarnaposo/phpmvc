<?php 

class Album extends Controller {

    public function index() {

        $data['title'] = 'Halaman Album';
        $data['album'] = $this->model('Album_model')->getAllAlbum();
        
        // var_dump($data['album']);
        // die;

        $this->view('templates/header', $data);

        $this->view('album/index', $data);
        $this->view('templates/footer');
    }

    public function insert() {
        $data['title'] = 'Tambah Data Album';
        // $data['album'] = $this->model('Album_model')->getAllAlbum();
        
        // var_dump($data['album']);
        // die;

        $this->view('templates/header', $data);

        $this->view('album/insert', $data);
        $this->view('templates/footer');
    }


    public function insertData()
    {

        // var_dump($_POST);
        // die;

        if ($this->model('Album_model')->insertAlbum($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/album');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/album');
            exit;
        }
    }

    public function editData($id) {

        $data['title'] = 'Edit Data Album';
        $data['album'] = $this->model('Album_model')->getAlbumById($id);

        // var_dump($getalbum);
        // die;

        $this->view('templates/header', $data);

        $this->view('album/edit', $data);
        $this->view('templates/footer');

        
    }

    public function updateData() {

        // var_dump($_POST);
        // die;

        if ($this->model('Album_model')->updateAlbum($_POST) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/album');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/album');
            exit;
        }

        
    }

    public function deleteData($id)
    {

        // var_dump($_POST);
        // die;

        if ($this->model('Album_model')->deleteAlbum($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/album');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/album');
            exit;
        }
    }
}