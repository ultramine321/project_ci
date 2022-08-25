<?php 

class Dashboard extends CI_Controller
{
    public function index()
    {
        $data['page'] = "<h1>Dashboard</h1>";
        $data['title'] = "Dashboard";
        $this->load->view('admin/partial/template',$data);
    }
}



?>