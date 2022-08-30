<?php 

    class guru extends CI_Controller
    {
        public function index()
        {
            //memanngil semua data guru
            $dataGuru['data'] = $this->GuruModel->select_all_guru();
            //panggil file page daftar, kemudian kembalikan nilainya ke array page
            $data['page'] = $this->load->view('admin/pages/guru/daftar',$dataGuru,true);
            //atur judulnya
            $data['title'] = "Guru";
            //kemudian tampilkan template beserta dengan datanya seperti : page. title
            $this->load->view('admin/partial/template',$data);
        }
        public function form_add()
        {
            //panggil file page daftar, kemudian kembalikan nilainya ke array page
            $data['page'] = $this->load->view('admin/pages/guru/form_add',null,true);
            //atur judulnya
            $data['title'] = "Form Tambah Guru";
            //kemudian tampilkan template beserta dengan datanya seperti : page. title
            $this->load->view('admin/partial/template',$data);
        }

        public function form_edit()
        {
           $nip = $this->uri->segment(4);
           $where = [
            "nip"=> str_replace('%20',' ',$nip)
           ];
            $dataGuru['data_guru'] = $this->GuruModel->select_guru_by($where);
            $data['page']= $this->load->view('admin/pages/guru/form_edit',$dataGuru, true);
            $data['title'] = "Form Edit";
            $this->load->view('admin/partial/template', $data);

        }

        public function edit_data()
        {
            //menerima data formulir dari halaman form_add
            $data = $this->input->post();
            $nmFile = $data['nip'] . ".png";
    
            //setting config uploadnya
            $config = [
                "upload_path" =>"./images/guru/",//menentukan lokasi path image akan kita gunakan untuk mentimpan gambar hasil upload
                "allowed_types" => "*",//menentukan extension file yang diizinkan
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
                    "nip"=>$data['nip'],
                    "nama"=>$data['nama'],
                    "tempat_lahir"=>$data['tempat_lahir'],
                    "tanggal_lahir"=>$data['tanggal_lahir'],
                    "mapel"=>$data['mapel'],
                    "alamat"=>$data['alamat'],
                    "jk"=>$data['jk'],
                    "status_pegawaian"=>$data['status_pegawaian'],
                    "passfoto"=> $imageData['file_name']
                ];
                $where =[
                    "nip" =>str_replace('%20',' ',$data['nip_lama']),
                ];
        
                //kirim data kolom ke insertdata pada mastergurumodel
                $insert = $this->GuruModel->editData($where,$column);
        
                //jika sudah, tampilkan pesan data guru berhasil ditambahkan
                //setelah itu pindah ke halaman utama pada controller masterguru
                echo "
                <script>
                    alert('Data guru berhasil diubah')
                    window.location.href = '".base_url('admin/Guru/index')."';
                </script>
                ";
            }else{
                // die(print_r($data));
                // echo "
                // <script>
                //     console.log('".$this->upload->display_errors()."');
                // </script>
                // ";

                
                $column = [
                    "nip"=>$data['nip'],
                    "nama"=>$data['nama'],
                    "tempat_lahir"=>$data['tempat_lahir'],
                    "tanggal_lahir"=>$data['tanggal_lahir'],
                    "mapel"=>$data['mapel'],
                    "alamat"=>$data['alamat'],
                    "jk"=>$data['jk'],
                    "status_pegawaian"=>$data['status_pegawaian']
                    
                ];
                $where =[
                    "nip" =>str_replace('%20',' ',$data['nip_lama']),
                ];
        
                //kirim data kolom ke insertdata pada mastergurumodel
                $insert = $this->GuruModel->editData($where,$column);
        
                //jika sudah, tampilkan pesan data guru berhasil ditambahkan
                //setelah itu pindah ke halaman utama pada controller masterguru
                echo "
                <script>
                    alert('Data guru berhasil diubah')
                    window.location.href = '".base_url('admin/Guru/index')."';
                </script>
                ";
        
            }
    
        }
    
        public function add_new_data()
        {
            //menerima data formulir dari halaman form_add
            $data = $this->input->post();
            $nmFile = $data['nip'] . ".png";
    
            //setting config uploadnya
            $config = [
                "upload_path" =>"./images/guru",//menentukan lokasi path image akan kita gunakan untuk mentimpan gambar hasil upload
                "allowed_types" =>"jpg|jpeg|png",//menentukan extension file yang diizinkan
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
                "nip"=>$data['nip'],
                    "nama"=>$data['nama'],
                    "tempat_lahir"=>$data['tempat_lahir'],
                    "tanggal_lahir"=>$data['tanggal_lahir'],
                    "mapel"=>$data['mapel'],
                    "alamat"=>$data['alamat'],
                    "jk"=>$data['jk'],
                    "status_pegawaian"=>$data['status_pegawaian'],
                    "passfoto"=> $imageData['file_name']
            ];
    
            //kirim data kolom ke insertdata pada mastergurumodel
            $insert = $this->GuruModel->insertData($column);
    
            //jika sudah, tampilkan pesan data guru berhasil ditambahkan
            //setelah itu pindah ke halaman utama pada controller masterguru
            echo "
            <script>
                alert('Data guru berhasil ditambahkan')
                window.location.href = '".base_url('admin/Guru/index')."';
            </script>
            ";
         }else{
            // echo "
            // <script>
            //     alert('". $this->upload->display_errors()."')
            //     window.location.href = '".base_url('admin/guru/index')."';
            // </script>
            // ";

            // die($this->upload->display_errors());
            
            $column = [
                "nip"=>$data['nip'],
                "nama"=>$data['nama'],
                "tempat_lahir"=>$data['tempat_lahir'],
                "tanggal_lahir"=>$data['tanggal_lahir'],
                "mapel"=>$data['mapel'],
                "alamat"=>$data['alamat'],
                "jk"=>$data['jk'],
                "status_pegawaian"=>$data['status_pegawaian'],
                "passfoto"=> "placeholder-image.png"
            ];
    
            //kirim data kolom ke insertdata pada mastergurumodel
            $insert = $this->GuruModel->insertData($column);
    
            //jika sudah, tampilkan pesan data guru berhasil ditambahkan
            //setelah itu pindah ke halaman utama pada controller masterguru
            echo "
            <script>
                alert('Data guru berhasil ditambahkan')
                window.location.href = '".base_url('admin/Guru/index')."';
            </script>
            ";
            }
    
        }
        public function hapus()
        {
            //segment= untuk mengambil nilai pada uri
            //contoh : admin/MasterBerita/hapus/123678
            //segments    1      2         3      4
            $nip = $this->uri->segment(4);
            $where = [
                "nip"=>str_replace('%20',' ',$nip)
            ];
            if (file_exists("./images/guru/".$nip.".png")) {
                unlink("./images/guru/".$nip.".png");
            }
            $this->GuruModel->hapusData($where);
            echo "
            <script> 
                alert ('Data guru berhasil dihapus!')
                window.location.href= '".base_url('admin/Guru/index')."';
            </script>
            ";
        }
    }

?>