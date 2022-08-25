<?php 

    class Alumni extends CI_Controller
    {
        public function index()
        {
            //memanngil semua data alumni
            $dataAlumni['data'] = $this->AlumniModel->select_all_alumni();
            //panggil file page daftar, kemudian kembalikan nilainya ke array page
            $data['page'] = $this->load->view('admin/pages/alumni/daftar',$dataAlumni,true);
            //atur judulnya
            $data['title'] = "Alumni";
            //kemudian tampilkan template beserta dengan datanya seperti : page. title
            $this->load->view('admin/partial/template',$data);
        }
        public function form_add()
        {
            //panggil file page daftar, kemudian kembalikan nilainya ke array page
            $data['page'] = $this->load->view('admin/pages/alumni/form_add',null,true);
            //atur judulnya
            $data['title'] = "Form Tambah Alumni";
            //kemudian tampilkan template beserta dengan datanya seperti : page. title
            $this->load->view('admin/partial/template',$data);
        }

        public function form_edit()
        {
           $nama = $this->uri->segment(4);
           $where = [
            "nama"=> $nama
           ];
            $dataAlumni['data_alumni'] = $this->AlumniModel->select_alumni_by($where);
            $data['page']= $this->load->view('admin/pages/alumni/form_edit',$dataAlumni, true);
            $data['title'] = "Form Edit";
            $this->load->view('admin/partial/template', $data);

        }

        public function edit_data()
        {
            //menerima data formulir dari halaman form_add
            $data = $this->input->post();
            $nmFile = $data['nama'] . ".png";
    
            //setting config uploadnya
            $config = [
                "upload_path" =>"./images/alumni",//menentukan lokasi path image akan kita gunakan untuk mentimpan gambar hasil upload
                "allowed_types" =>"*",//menentukan extension file yang diizinkan
                "overwrite" => TRUE,//jika pada file folder terdapat nama yang sama, maka timpa file lama dengan file baru
                "file_name" => $nmFile //memberi nama sesuai dengan nama file yg sudah tertera di variabel
            ];
    
            //initialize config upload
            $this->upload->initialize($config);
            //melakukan proses upload
            $resultUpload = $this->upload->do_upload('foto');
            //jika hasil upload gambar itu berhasil, maka lanjutkan proses ke input data ke database
            if ($resultUpload == true) {
                //kita ambil informasi detail dari gambar yang telah di upload
                $imageData = $this->upload->data();
    
                
                // die($data);
                $column = [
                    "nama"=>$data['nama'],
                    "foto"=> $imageData['file_name'],
                    "jk"=>$data['jk'],
                    "angkatan"=>$data['angkatan'],
                    "tahun_lulus"=>$data['tahun_lulus'],
                    "pekerjaan"=>$data['pekerjaan']

                    
                ];
                $where =[
                    "nama" =>$data['nama_lama'],
                ];
        
                //kirim data kolom ke insertdata pada masteralumnimodel
                $insert = $this->AlumniModel->editData($where,$column);
        
                //jika sudah, tampilkan pesan data alumni berhasil ditambahkan
                //setelah itu pindah ke halaman utama pada controller masteralumni
                echo "
                <script>
                    alert('Data alumni berhasil diubah')
                    window.location.href = '".base_url('admin/Alumni/index')."';
                </script>
                ";
            }else{
                $imageData = $this->upload->data();
                // die(print_r($data));
                $column = [
                    "nama"=>$data['nama'],
                    "foto"=> $imageData['file_name'],
                    "jk"=>$data['jk'],
                    "angkatan"=>$data['angkatan'],
                    "tahun_lulus"=>$data['tahun_lulus'],
                    "pekerjaan"=>$data['pekerjaan']
                    
                ];
                $where =[
                    "nama" =>$data['nama_lama'],
                ];
        
                //kirim data kolom ke insertdata pada masteralumnimodel
                $insert = $this->AlumniModel->editData($where,$column);
        
                //jika sudah, tampilkan pesan data alumni berhasil ditambahkan
                //setelah itu pindah ke halaman utama pada controller masteralumni
                echo "
                <script>
                    alert('Data alumni berhasil diubah')
                    window.location.href = '".base_url('admin/Alumni/index')."';
                </script>
                ";
        
            }
    
        }
    
        public function add_new_data()
        {
            //menerima data formulir dari halaman form_add
            $data = $this->input->post();
            $nmFile = $data['nama'] . ".png";
    
            //setting config uploadnya
            $config = [
                "upload_path" =>"./images/alumni",//menentukan lokasi path image akan kita gunakan untuk mentimpan gambar hasil upload
                "allowed_types" =>"*",//menentukan extension file yang diizinkan
                "overwrite" => TRUE,//jika pada file folder terdapat nama yang sama, maka timpa file lama dengan file baru
                "file_name" => $nmFile //memberi nama sesuai dengan nama file yg sudah tertera di variabel
            ];
    
            //initialize config upload
            $this->upload->initialize($config);
            //melakukan proses upload
            $resultUpload = $this->upload->do_upload('foto');
            //jika hasil upload gambar itu berhasil, maka lanjutkan proses ke input data ke database
            if ($resultUpload == true) {
                //kita ambil informasi detail dari gambar yang telah di upload
                $imageData = $this->upload->data();
    
            
    
            $column = [
                "nama"=>$data['nama'],
                    "foto"=> $imageData['file_name'],
                    "jk"=>$data['jk'],
                    "angkatan"=>$data['angkatan'],
                    "tahun_lulus"=>$data['tahun_lulus'],
                    "pekerjaan"=>$data['pekerjaan']
            ];
    
            //kirim data kolom ke insertdata pada masteralumnimodel
            $insert = $this->AlumniModel->insertData($column);
    
            //jika sudah, tampilkan pesan data alumni berhasil ditambahkan
            //setelah itu pindah ke halaman utama pada controller masteralumni
            echo "
            <script>
                alert('Data alumni berhasil ditambahkan')
                window.location.href = '".base_url('admin/Alumni/index')."';
            </script>
            ";
         }else{
            // echo "
            // <script>
            //     alert('". $this->upload->display_errors()."')
            //     window.location.href = '".base_url('admin/Alumni/index')."';
            // </script>
            // ";
            
            $column = [
                "nama"=>$data['nama'],
                "foto"=> "placeholder-image.png",
                    "jk"=>$data['jk'],
                    "angkatan"=>$data['angkatan'],
                    "tahun_lulus"=>$data['tahun_lulus'],
                    "pekerjaan"=>$data['pekerjaan']
                
            ];
    
            //kirim data kolom ke insertdata pada masteralumnimodel
            $insert = $this->AlumniModel->insertData($column);
    
            //jika sudah, tampilkan pesan data alumni berhasil ditambahkan
            //setelah itu pindah ke halaman utama pada controller masteralumni
            echo "
            <script>
                alert('Data alumni berhasil ditambahkan')
                window.location.href = '".base_url('admin/Alumni/index')."';
            </script>
            ";
            }
    
        }
        public function hapus()
        {
            //segment= untuk mengambil nilai pada uri
            //contoh : admin/MasterBerita/hapus/123678
            //segments    1      2         3      4
            $nama = $this->uri->segment(4);
            $where = [
                "nama"=>$nama
            ];
            if (file_exists("./images/alumni/".$nama.".png")) {
                unlink("./images/alumni/".$nama.".png");
            }
            $this->AlumniModel->hapusData($where);
            echo "
            <script> 
                alert ('Data alumni berhasil dihapus!')
                window.location.href= '".base_url('admin/Alumni/index')."';
            </script>
            ";
        }
    }

?>