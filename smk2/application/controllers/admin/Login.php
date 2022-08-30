<?php 

    class Login extends CI_Controller
    {
        public function index()
        {
           $this->load->view('admin/login'); 
        }
        public function login()
        {
           $username= $this->input->post('username');
           $password= md5($this->input->post('password'));
           if (!empty($username) && !empty($password)) {
            $result=$this->LoginModel->login($username,$password);
            if ($result) {
                $this->session->set_userdata('username',$result->username);
                $this->session->set_userdata('id_login',$result->id_login);
                echo "
                <script>
                    alert('Anda berhasil Login')
                    window.location.href = '".base_url('admin/dashboard/index')."';
                </script>
                ";
            }else
            {
                echo "
                <script>
                    alert('Anda gagal Login')
                    window.location.href = '".base_url('admin/login/index')."';
                </script>
                ";
            }
           }
        }
        public function logout()
        {
            $this->session->sess_destroy();
            redirect('admin/Login');
        }
   
    }

?>