<?php 

    class Contact extends CI_Controller
    {
        public function index()
        {
            //memanngil semua data contact
            $dataContact['data'] = $this->ContactModel->select_all_contact();
            //panggil file page daftar, kemudian kembalikan nilainya ke array page
            $data['page'] = $this->load->view('admin/pages/contact/daftar',$dataContact,true);
            //atur no_hpnya
            $data['title'] = "Contact";
            //kemudian tampilkan template beserta dengan datanya seperti : page. title
            $this->load->view('admin/partial/template',$data);
        }
        public function form_add()
        {
            //panggil file page daftar, kemudian kembalikan nilainya ke array page
            $data['page'] = $this->load->view('admin/pages/contact/form_add',null,true);
            //atur no_hpnya
            $data['title'] = "Form Tambah Contact";
            //kemudian tampilkan template beserta dengan datanya seperti : page. title
            $this->load->view('admin/partial/template',$data);
        }

        public function form_edit()
        {
           $no_hp = $this->uri->segment(4);
           $where = [
            "no_hp"=> str_replace('%20',' ',$no_hp)
           ];
            $dataContact['data_contact'] = $this->ContactModel->select_contact_by($where);
            $data['page']= $this->load->view('admin/pages/contact/form_edit',$dataContact, true);
            $data['title'] = "Form Edit";
            $this->load->view('admin/partial/template', $data);

        }

        public function edit_data()
        {
            //menerima data formulir dari halaman form_add
            $data = $this->input->post();
            $nmFile = $data['no_hp'] . ".png";
    
                
                // die($data);
                $column = [
                    "no_hp"=>$data['no_hp'],
                    "email"=>$data['email'],
                    "alamat"=>$data['alamat']


                    
                ];
                $where =[
                    "no_hp" =>str_replace('%20',' ',$data['nohp_lama']),
                ];
        
                //kirim data kolom ke insertdata pada mastercontactmodel
                $insert = $this->ContactModel->editData($where,$column);
        
                //jika sudah, tampilkan pesan data contact berhasil ditambahkan
                //setelah itu pindah ke halaman utama pada controller mastercontact
                echo "
                <script>
                    alert('Data contact berhasil diubah')
                    window.location.href = '".base_url('admin/Contact/index')."';
                </script>
                ";
            
    
        }
    
        public function add_new_data()
        {
            //menerima data formulir dari halaman form_add
            $data = $this->input->post();
            $nmFile = $data['no_hp'] . ".png";
    

            $column = [
                "no_hp"=>$data['no_hp'],
                "email"=>$data['email'],
                "alamat"=>$data['alamat']
            ];
    
            //kirim data kolom ke insertdata pada mastercontactmodel
            $insert = $this->ContactModel->insertData($column);
    
            //jika sudah, tampilkan pesan data contact berhasil ditambahkan
            //setelah itu pindah ke halaman utama pada controller mastercontact
            echo "
            <script>
                alert('Data contact berhasil ditambahkan')
                window.location.href = '".base_url('admin/Contact/index')."';
            </script>
            ";
         
    
        }
        public function hapus()
        {
            //segment= untuk mengambil nilai pada uri
            //contoh : admin/MasterBerita/hapus/123678
            //segments    1      2         3      4
            $no_hp = $this->uri->segment(4);
            $where = [
                "no_hp"=>str_replace('%20',' ',$no_hp),
            ];

            $this->ContactModel->hapusData($where);
            echo "
            <script> 
                alert ('Data contact berhasil dihapus!')
                window.location.href= '".base_url('admin/Contact/index')."';
            </script>
            ";
        }
    }

?>