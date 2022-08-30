<?Php 

class DataGuru extends CI_Controller
{
    public function index ()
    {
        $data['value'] = $this->ContactModel->select_row_contact();
        $dataGuru['data_guru'] = $this->GuruModel->select_all_guru();
        $data['page'] = $this->load->view('front/pages/data_guru',$dataGuru,true);
        $data['title'] = "DataGuru";
        $this->load->view('front/partial/template',$data);
    }
}



?>