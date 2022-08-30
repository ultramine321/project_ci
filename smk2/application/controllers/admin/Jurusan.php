<?php 

    class Jurusan extends CI_Controller
    {
        public function index()
        {
            //memanngil semua data siswa
            $dataJurusan['data'] = $this->JurusanModel->select_all_jurusan();
            //panggil file page daftar, kemudian kembalikan nilainya ke array page
            $data['page'] = $this->load->view('admin/pages/jurusan/daftar',$dataJurusan,true);
            //atur judulnya
            $data['title'] = "Jurusan";
            //kemudian tampilkan template beserta dengan datanya seperti : page. title
            $this->load->view('admin/partial/template',$data);
        }
        public function form_add()
        {
            //panggil file page daftar, kemudian kembalikan nilainya ke array page
            $data['page'] = $this->load->view('admin/pages/jurusan/form_add',null,true);
            //atur judulnya
            $data['title'] = "Form Tambah Jurusan";
            //kemudian tampilkan template beserta dengan datanya seperti : page. title
            $this->load->view('admin/partial/template',$data);
        }

        public function form_edit()
        {
           $id = $this->uri->segment(4);
           $where = [
            "id"=> str_replace('%20',' ',$id)
           ];
            $dataJurusan['data_jurusan'] = $this->JurusanModel->select_jurusan_by($where);
            $data['page']= $this->load->view('admin/pages/jurusan/form_edit',$dataJurusan, true);
            $data['title'] = "Form Edit";
            $this->load->view('admin/partial/template', $data);

        }

        public function edit_data()
        {
            //menerima data formulir dari halaman form_add
            $data = $this->input->post();
            $nmFile = $data['id'] . ".png";
    
            //setting config uploadnya
            $config = [
                "upload_path" =>"./images/jurusan",//menentukan lokasi path image akan kita gunakan untuk mentimpan gambar hasil upload
                "allowed_types" =>"*",//menentukan extension file yang diizinkan
                "overwrite" => TRUE,//jika pada file folder terdapat nama yang sama, maka timpa file lama dengan file baru
                "file_name" => $nmFile //memberi nama sesuai dengan nama file yg sudah tertera di variabel
            ];
    
            //initialize config upload
            $this->upload->initialize($config);
            //melakukan proses upload
            $resultUpload = $this->upload->do_upload('passfoto');
            //jika hasil upload gambar itu berhasil, maka lanjutkan proses ke input data ke database
            if ($resultUpload == true) {
                //kita ambil informasi detail dari gambar yang telah di upload
                $imageData = $this->upload->data();
    
                
                // die($data);
                $column = [
                    "id"=>$data['id'],
                    "jurusan"=>$data['jurusan'],
                    "passfoto"=> $imageData['file_name']
                ];
                $where =[
                    "id" =>str_replace('%20',' ',$data['id_lama']),
                ];
        
                //kirim data kolom ke insertdata pada mastersiswamodel
                $insert = $this->JurusanModel->editData($where,$column);
        
                //jika sudah, tampilkan pesan data siswa berhasil ditambahkan
                //setelah itu pindah ke halaman utama pada controller mastersiswa
                echo "
                <script>
                    alert('Data siswa berhasil diubah')
                    window.location.href = '".base_url('admin/Jurusan/index')."';
                </script>
                ";
            }else{
                // die(print_r($data));
                $column = [
                    "id"=>$data['id'],
                    "jurusan"=>$data['jurusan']
                    
                ];
                $where =[
                    "id" =>str_replace('%20',' ',$data['id_lama']),
                ];
        
                //kirim data kolom ke insertdata pada mastersiswamodel
                $insert = $this->JurusanModel->editData($where,$column);
        
                //jika sudah, tampilkan pesan data siswa berhasil ditambahkan
                //setelah itu pindah ke halaman utama pada controller mastersiswa
                echo "
                <script>
                    alert('Data siswa berhasil diubah')
                    window.location.href = '".base_url('admin/Jurusan/index')."';
                </script>
                ";
        
            }
    
        }
    
        public function add_new_data()
        {
            //menerima data formulir dari halaman form_add
            $data = $this->input->post();
            $nmFile = $data['id'] . ".png";
    
            //setting config uploadnya
            $config = [
                "upload_path" =>"./images/jurusan",//menentukan lokasi path image akan kita gunakan untuk mentimpan gambar hasil upload
                "allowed_types" =>"*",//menentukan extension file yang diizinkan
                "overwrite" => TRUE,//jika pada file folder terdapat nama yang sama, maka timpa file lama dengan file baru
                "file_name" => $nmFile //memberi nama sesuai dengan nama file yg sudah tertera di variabel
            ];
    
            //initialize config upload
            $this->upload->initialize($config);
            //melakukan proses upload
            $resultUpload = $this->upload->do_upload('passfoto');
            //jika hasil upload gambar itu berhasil, maka lanjutkan proses ke input data ke database
            if ($resultUpload == true) {
                //kita ambil informasi detail dari gambar yang telah di upload
                $imageData = $this->upload->data();
    
            
    
            $column = [
                "id"=>$data['id'],
                "jurusan"=>$data['jurusan'],
                "passfoto"=> $imageData['file_name']
            ];
    
            //kirim data kolom ke insertdata pada mastersiswamodel
            $insert = $this->JurusanModel->insertData($column);
    
            //jika sudah, tampilkan pesan data siswa berhasil ditambahkan
            //setelah itu pindah ke halaman utama pada controller mastersiswa
            echo "
            <script>
                alert('Data siswa berhasil ditambahkan')
                window.location.href = '".base_url('admin/Jurusan/index')."';
            </script>
            ";
         }else{
            // echo "
            // <script>
            //     alert('". $this->upload->display_errors()."')
            //     window.location.href = '".base_url('admin/Jurusan/index')."';
            // </script>
            // ";
            
            $column = [
                "id"=>$data['id'],
                "jurusan"=>$data['jurusan'],
                "passfoto"=> "placeholder-image.png"
            ];
    
            //kirim data kolom ke insertdata pada mastersiswamodel
            $insert = $this->JurusanModel->insertData($column);
    
            //jika sudah, tampilkan pesan data siswa berhasil ditambahkan
            //setelah itu pindah ke halaman utama pada controller mastersiswa
            echo "
            <script>
                alert('Data siswa berhasil ditambahkan')
                window.location.href = '".base_url('admin/Jurusan/index')."';
            </script>
            ";
            }
    
        }
        public function hapus()
        {
            //segment= untuk mengambil nilai pada uri
            //contoh : admin/MasterBerita/hapus/123678
            //segments    1      2         3      4
            $id = $this->uri->segment(4);
            $where = [
                "id"=>str_replace('%20',' ',$id)
            ];
            if (file_exists("./images/jurusan/".$id.".png")) {
                unlink("./images/jurusan/".$id.".png");
            }
            $this->JurusanModel->hapusData($where);
            echo "
            <script> 
                alert ('Data siswa berhasil dihapus!')
                window.location.href= '".base_url('admin/Jurusan/index')."';
            </script>
            ";
        }
    }

?>