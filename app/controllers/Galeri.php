<?php 

class Galeri extends Controller {

    public function index() {

        $data['title'] = 'Halaman Galeri';
        $data['galeri'] = $this->model('Galeri_model')->getAllGaleri();
        $this->view('templates/header', $data);

        $this->view('galeri/index', $data);
        $this->view('templates/footer');
    }

    public function tambah() {

        $data['title'] = 'Tambah Data Galeri';


    }
}