<?Php 

class DataContact extends CI_Controller
{
    public function index ()
    {
        $dataContact['value'] = $this->ContactModel->select_row_contact();
        $data['page'] = $this->load->view('front/pages/data_contact',$dataContact,true);
        $data['title'] = "DataContact";
        $this->load->view('front/partial/template',$data);
    }
}



?>