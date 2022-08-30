<?php 

    class About extends CI_Controller
    {
        public function index()
        {
            //memanngil semua data about
            $dataAbout['data'] = $this->AboutModel->select_all_about();
            //panggil file page daftar, kemudian kembalikan nilainya ke array page
            $data['page'] = $this->load->view('admin/pages/about/daftar',$dataAbout,true);
            //atur judulnya
            $data['title'] = "About";
            //kemudian tampilkan template beserta dengan datanya seperti : page. title
            $this->load->view('admin/partial/template',$data);
        }
        public function form_add()
        {
            //panggil file page daftar, kemudian kembalikan nilainya ke array page
            $data['page'] = $this->load->view('admin/pages/about/form_add',null,true);
            //atur judulnya
            $data['title'] = "Form Tambah About";
            //kemudian tampilkan template beserta dengan datanya seperti : page. title
            $this->load->view('admin/partial/template',$data);
        }

        public function form_edit()
        {
           $judul = $this->uri->segment(4);
           $where = [
            "judul"=> str_replace('%20',' ',$judul),
           ];
            $dataAbout['data_about'] = $this->AboutModel->select_about_by($where);
            $data['page']= $this->load->view('admin/pages/about/form_edit',$dataAbout, true);
            $data['title'] = "Form Edit";
            $this->load->view('admin/partial/template', $data);

        }

        public function edit_data()
        {
            //menerima data formulir dari halaman form_add
            $data = $this->input->post();

    
                
                // die($data);
                $column = [
                    "judul"=>$data['judul'],
                    "visi"=>$data['visi'],
                    "misi"=>$data['misi']


                    
                ];
                $where =[
                    "judul" =>str_replace('%20',' ',$data['judul_lama']),
                ];
        
                //kirim data kolom ke insertdata pada masteraboutmodel
                $insert = $this->AboutModel->editData($where,$column);
        
                //jika sudah, tampilkan pesan data about berhasil ditambahkan
                //setelah itu pindah ke halaman utama pada controller masterabout
                echo "
                <script>
                    alert('Data about berhasil diubah')
                    window.location.href = '".base_url('admin/About/index')."';
                </script>
                ";
            
    
        }
    
        public function add_new_data()
        {
            //menerima data formulir dari halaman form_add
            $data = $this->input->post();
 
    

            $column = [
                "judul"=>$data['judul'],
                "visi"=>$data['visi'],
                "misi"=>$data['misi']
            ];
    
            //kirim data kolom ke insertdata pada masteraboutmodel
            $insert = $this->AboutModel->insertData($column);
    
            //jika sudah, tampilkan pesan data about berhasil ditambahkan
            //setelah itu pindah ke halaman utama pada controller masterabout
            echo "
            <script>
                alert('Data about berhasil ditambahkan')
                window.location.href = '".base_url('admin/About/index')."';
            </script>
            ";
         
    
        }
        public function hapus()
        {
            //segment= untuk mengambil nilai pada uri
            //contoh : admin/MasterBerita/hapus/123678
            //segments    1      2         3      4
            $judul = $this->uri->segment(4);
            $where = [
                "judul"=>str_replace('%20',' ',$judul)
            ];

            $this->AboutModel->hapusData($where);
            echo "
            <script> 
                alert ('Data about berhasil dihapus!')
                window.location.href= '".base_url('admin/About/index')."';
            </script>
            ";
        }
    }

?>