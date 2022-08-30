<?php 

    class Home extends CI_Controller
    {
        public function index()
        {
            $dataHome['value'] = $this->ContactModel->select_row_contact();
            $dataHome['data_about'] = $this->AboutModel->select_all_about();
            $dataHome['data_carousel'] = $this->CarouselModel->select_all_carousel();
            $dataHome['data_organisasi'] = $this->OrganisasiModel->select_all_organisasi();
            $dataHome['data_eskul'] = $this->EskulModel->select_all_eskul();
            $dataHome['data_jurusan'] = $this->JurusanModel->select_all_jurusan();
            $dataHome['data_blog'] = $this->BlogModel->select_all_blog();
            $data['page'] = $this->load->view('front/pages/home', $dataHome, true);
            $data['title'] = "Home";
            $this->load->view('front/partial/template', $data);
        }
    }


?>