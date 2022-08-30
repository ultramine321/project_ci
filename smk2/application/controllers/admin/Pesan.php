<?php 

    class Pesan extends CI_Controller
    {
        public function index()
        {
            //memanngil semua data pesan
            $dataPesan['data'] = $this->PesanModel->select_all_pesan();
            //panggil file page daftar, kemudian kembalikan nilainya ke array page
            $data['page'] = $this->load->view('admin/pages/pesan/daftar',$dataPesan,true);
            //atur namanya
            $data['title'] = "Pesan";
            //kemudian tampilkan template beserta dengan datanya seperti : page. title
            $this->load->view('admin/partial/template',$data);
        }
        public function form_add()
        {
            //panggil file page daftar, kemudian kembalikan nilainya ke array page
            $data['page'] = $this->load->view('admin/pages/pesan/form_add',null,true);
            //atur namanya
            $data['title'] = "Form Tambah Pesan";
            //kemudian tampilkan template beserta dengan datanya seperti : page. title
            $this->load->view('admin/partial/template',$data);
        }

        public function form_edit()
        {
           $nama = $this->uri->segment(4);
           $where = [
            "nama"=> str_replace('%20',' ',$nama)
           ];
            $dataPesan['data_pesan'] = $this->PesanModel->select_pesan_by($where);
            $data['page']= $this->load->view('admin/pages/pesan/form_edit',$dataPesan, true);
            $data['title'] = "Form Edit";
            $this->load->view('admin/partial/template', $data);

        }

        public function edit_data()
        {
            //menerima data formulir dari halaman form_add
            $data = $this->input->post();
            $nmFile = $data['nama'] . ".png";
    
                
                // die($data);
                $column = [
                    "nama"=>$data['nama'],
                    "email"=>$data['email'],
                    "pesan"=>$data['pesan']


                    
                ];
                $where =[
                    "nama" =>str_replace('%20',' ',$data['nama_lama']),
                ];
        
                //kirim data kolom ke insertdata pada masterpesanmodel
                $insert = $this->PesanModel->editData($where,$column);
        
                //jika sudah, tampilkan pesan data pesan berhasil ditambahkan
                //setelah itu pindah ke halaman utama pada controller masterpesan
                echo "
                <script>
                    alert('Data pesan berhasil diubah')
                    window.location.href = '".base_url('admin/Pesan/index')."';
                </script>
                ";
            
    
        }
    
        public function add_new_data()
        {
            //menerima data formulir dari halaman form_add
            $data = $this->input->post();
            $nmFile = $data['nama'] . ".png";
    

            $column = [
                "nama"=>$data['nama'],
                "email"=>$data['email'],
                "pesan"=>$data['pesan']
            ];
    
            //kirim data kolom ke insertdata pada masterpesanmodel
            $insert = $this->PesanModel->insertData($column);
    
            //jika sudah, tampilkan pesan data pesan berhasil ditambahkan
            //setelah itu pindah ke halaman utama pada controller masterpesan
            echo "
            <script>
                alert('Data pesan berhasil ditambahkan')
                window.location.href = '".base_url('admin/Pesan/index')."';
            </script>
            ";
         
    
        }
        public function add_new_data_user()
        {
            //menerima data formulir dari halaman form_add
            $data = $this->input->post();
            $nmFile = $data['nama'] . ".png";
    

            $column = [
                "nama"=>$data['nama'],
                "email"=>$data['email'],
                "pesan"=>$data['pesan']
            ];
    
            //kirim data kolom ke insertdata pada masterpesanmodel
            $insert = $this->PesanModel->insertData($column);
    
            //jika sudah, tampilkan pesan data pesan berhasil ditambahkan
            //setelah itu pindah ke halaman utama pada controller masterpesan
            echo "
            <script>
                alert('Data pesan berhasil ditambahkan')
                window.location.href = '".base_url('front/DataContact')."';
            </script>
            ";
         
    
        }
        public function hapus()
        {
            //segment= untuk mengambil nilai pada uri
            //contoh : admin/MasterBerita/hapus/123678
            //segments    1      2         3      4
            $nama = $this->uri->segment(4);
            $where = [
                "nama"=>str_replace('%20',' ',$nama)
            ];

            $this->PesanModel->hapusData($where);
            echo "
            <script> 
                alert ('Data pesan berhasil dihapus!')
                window.location.href= '".base_url('admin/Pesan/index')."';
            </script>
            ";
        }
    }

?>