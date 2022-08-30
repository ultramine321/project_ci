<?php 

    class Carousel extends CI_Controller
    {
        public function index()
        {
            //memanngil semua data siswa
            $dataCarousel['data'] = $this->CarouselModel->select_all_carousel();
            //panggil file page daftar, kemudian kembalikan nilainya ke array page
            $data['page'] = $this->load->view('admin/pages/carousel/daftar',$dataCarousel,true);
            //atur judulnya
            $data['title'] = "Carousel";
            //kemudian tampilkan template beserta dengan datanya seperti : page. title
            $this->load->view('admin/partial/template',$data);
        }
        public function form_add()
        {
            //panggil file page daftar, kemudian kembalikan nilainya ke array page
            $data['page'] = $this->load->view('admin/pages/carousel/form_add',null,true);
            //atur judulnya
            $data['title'] = "Form Tambah Carousel";
            //kemudian tampilkan template beserta dengan datanya seperti : page. title
            $this->load->view('admin/partial/template',$data);
        }

        public function form_edit()
        {
           $judul = $this->uri->segment(4);
           $where = [
            "judul"=> str_replace('%20',' ',$judul),
           ];
            $dataCarousel['data_carousel'] = $this->CarouselModel->select_carousel_by($where);
            $data['page']= $this->load->view('admin/pages/carousel/form_edit',$dataCarousel, true);
            $data['title'] = "Form Edit";
            $this->load->view('admin/partial/template', $data);

        }

        public function edit_data()
        {
            //menerima data formulir dari halaman form_add
            $data = $this->input->post();
            $nmFile = $data['judul'] . ".png";
    
            //setting config uploadnya
            $config = [
                "upload_path" =>"./images/carousel",//menentukan lokasi path image akan kita gunakan untuk mentimpan gambar hasil upload
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
                    "judul"=>$data['judul'],
                    "deskripsi"=>$data['deskripsi'],
                    "passfoto"=> $imageData['file_name']
                ];
                $where =[
                    "judul" =>str_replace('%20',' ',$data['judul_lama']),
                ];
        
                //kirim data kolom ke insertdata pada mastersiswamodel
                $insert = $this->CarouselModel->editData($where,$column);
        
                //jika sudah, tampilkan pesan data siswa berhasil ditambahkan
                //setelah itu pindah ke halaman utama pada controller mastersiswa
                echo "
                <script>
                    alert('Data siswa berhasil diubah')
                    window.location.href = '".base_url('admin/Carousel/index')."';
                </script>
                ";
            }else{
                // die(print_r($data));
                $column = [
                    "judul"=>$data['judul'],
                    "deskripsi"=>$data['deskripsi']
                    
                ];
                $where =[
                    "judul" =>str_replace('%20',' ',$data['judul_lama']),
                ];
        
                //kirim data kolom ke insertdata pada mastersiswamodel
                $insert = $this->CarouselModel->editData($where,$column);
        
                //jika sudah, tampilkan pesan data siswa berhasil ditambahkan
                //setelah itu pindah ke halaman utama pada controller mastersiswa
                echo "
                <script>
                    alert('Data siswa berhasil diubah')
                    window.location.href = '".base_url('admin/Carousel/index')."';
                </script>
                ";
        
            }
    
        }
    
        public function add_new_data()
        {
            //menerima data formulir dari halaman form_add
            $data = $this->input->post();
            $nmFile = $data['judul'] . ".png";
    
            //setting config uploadnya
            $config = [
                "upload_path" =>"./images/carousel",//menentukan lokasi path image akan kita gunakan untuk mentimpan gambar hasil upload
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
                "judul"=>$data['judul'],
                "deskripsi"=>$data['deskripsi'],
                "passfoto"=> $imageData['file_name']
            ];
    
            //kirim data kolom ke insertdata pada mastersiswamodel
            $insert = $this->CarouselModel->insertData($column);
    
            //jika sudah, tampilkan pesan data siswa berhasil ditambahkan
            //setelah itu pindah ke halaman utama pada controller mastersiswa
            echo "
            <script>
                alert('Data siswa berhasil ditambahkan')
                window.location.href = '".base_url('admin/Carousel/index')."';
            </script>
            ";
         }else{
            // echo "
            // <script>
            //     alert('". $this->upload->display_errors()."')
            //     window.location.href = '".base_url('admin/carousel/index')."';
            // </script>
            // ";
            
            $column = [
                "judul"=>$data['judul'],
                "deskripsi"=>$data['deskripsi'],
                "passfoto"=> "placeholder-image.png"
            ];
    
            //kirim data kolom ke insertdata pada mastersiswamodel
            $insert = $this->CarouselModel->insertData($column);
    
            //jika sudah, tampilkan pesan data siswa berhasil ditambahkan
            //setelah itu pindah ke halaman utama pada controller mastersiswa
            echo "
            <script>
                alert('Data siswa berhasil ditambahkan')
                window.location.href = '".base_url('admin/Carousel/index')."';
            </script>
            ";
            }
    
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
            if (file_exists("./images/carousel/".$judul.".png")) {
                unlink("./images/carousel/".$judul.".png");
            }
            $this->CarouselModel->hapusData($where);
            echo "
            <script> 
                alert ('Data siswa berhasil dihapus!')
                window.location.href= '".base_url('admin/Carousel/index')."';
            </script>
            ";
        }
    }

?>