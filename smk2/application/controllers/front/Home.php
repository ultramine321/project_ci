<?php 

    class Home extends CI_Controller
    {
        public function index()
        {
            $dataHome['data_jurusan'] = $this->JurusanModel->select_all_jurusan();
            $dataHome['data_blog'] = $this->BlogModel->select_all_blog();
            $data['page'] = $this->load->view('front/pages/home', $dataHome, true);
            $data['title'] = "Home";
            $this->load->view('front/partial/template', $data);
        }
    }


?>