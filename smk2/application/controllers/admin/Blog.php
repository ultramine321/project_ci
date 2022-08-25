<?php 

    class Blog extends CI_Controller
    {
        public function index()
        {
            //memanngil semua data blog
            $dataBlog['data'] = $this->BlogModel->select_all_blog();
            //panggil file page daftar, kemudian kembalikan nilainya ke array page
            $data['page'] = $this->load->view('admin/pages/blog/daftar',$dataBlog,true);
            //atur judulnya
            $data['title'] = "Blog";
            //kemudian tampilkan template beserta dengan datanya seperti : page. title
            $this->load->view('admin/partial/template',$data);
        }
        public function form_add()
        {
            //panggil file page daftar, kemudian kembalikan nilainya ke array page
            $data['page'] = $this->load->view('admin/pages/blog/form_add',null,true);
            //atur judulnya
            $data['title'] = "Form Tambah Blog";
            //kemudian tampilkan template beserta dengan datanya seperti : page. title
            $this->load->view('admin/partial/template',$data);
        }

        public function form_edit()
        {
           $judul = $this->uri->segment(4);
           $where = [
            "judul"=> $judul
           ];
            $dataBlog['data_blog'] = $this->BlogModel->select_blog_by($where);
            $data['page']= $this->load->view('admin/pages/blog/form_edit',$dataBlog, true);
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
                "upload_path" =>"./images/blog",//menentukan lokasi path image akan kita gunakan untuk mentimpan gambar hasil upload
                "allowed_types" =>"*",//menentukan extension file yang diizinkan
                "overwrite" => TRUE,//jika pada file folder terdapat judul yang sama, maka timpa file lama dengan file baru
                "file_name" => $nmFile //memberi judul sesuai dengan judul file yg sudah tertera di variabel
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
                    "judul"=>$data['judul'],
                    "foto"=> $imageData['file_name'],
                    "tanggal"=>$data['tanggal'],
                    "isi"=>$data['isi']


                    
                ];
                $where =[
                    "judul" =>$data['judul_lama'],
                ];
        
                //kirim data kolom ke insertdata pada masterblogmodel
                $insert = $this->BlogModel->editData($where,$column);
        
                //jika sudah, tampilkan pesan data blog berhasil ditambahkan
                //setelah itu pindah ke halaman utama pada controller masterblog
                echo "
                <script>
                    alert('Data blog berhasil diubah')
                    window.location.href = '".base_url('admin/Blog/index')."';
                </script>
                ";
            }else{
                $imageData = $this->upload->data();
                // die(print_r($data));
                $column = [
                    "judul"=>$data['judul'],
                    "foto"=> $imageData['file_name'],
                    "tanggal"=>$data['tanggal'],
                    "isi"=>$data['isi']
                    
                ];
                $where =[
                    "judul" =>$data['judul_lama'],
                ];
        
                //kirim data kolom ke insertdata pada masterblogmodel
                $insert = $this->BlogModel->editData($where,$column);
        
                //jika sudah, tampilkan pesan data blog berhasil ditambahkan
                //setelah itu pindah ke halaman utama pada controller masterblog
                echo "
                <script>
                    alert('Data blog berhasil diubah')
                    window.location.href = '".base_url('admin/Blog/index')."';
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
                "upload_path" =>"./images/blog",//menentukan lokasi path image akan kita gunakan untuk mentimpan gambar hasil upload
                "allowed_types" =>"*",//menentukan extension file yang diizinkan
                "overwrite" => TRUE,//jika pada file folder terdapat judul yang sama, maka timpa file lama dengan file baru
                "file_name" => $nmFile //memberi judul sesuai dengan judul file yg sudah tertera di variabel
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
                "judul"=>$data['judul'],
                "foto"=> $imageData['file_name'],
                "tanggal"=>$data['tanggal'],
                "isi"=>$data['isi']
            ];
    
            //kirim data kolom ke insertdata pada masterblogmodel
            $insert = $this->BlogModel->insertData($column);
    
            //jika sudah, tampilkan pesan data blog berhasil ditambahkan
            //setelah itu pindah ke halaman utama pada controller masterblog
            echo "
            <script>
                alert('Data blog berhasil ditambahkan')
                window.location.href = '".base_url('admin/Blog/index')."';
            </script>
            ";
         }else{
            // echo "
            // <script>
            //     alert('". $this->upload->display_errors()."')
            //     window.location.href = '".base_url('admin/Blog/index')."';
            // </script>
            // ";
            
            $column = [
                "judul"=>$data['judul'],
                "foto"=> "placeholder-image.png",
                "tanggal"=>$data['tanggal'],
                "isi"=>$data['isi']
                
            ];
    
            //kirim data kolom ke insertdata pada masterblogmodel
            $insert = $this->BlogModel->insertData($column);
    
            //jika sudah, tampilkan pesan data blog berhasil ditambahkan
            //setelah itu pindah ke halaman utama pada controller masterblog
            echo "
            <script>
                alert('Data blog berhasil ditambahkan')
                window.location.href = '".base_url('admin/Blog/index')."';
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
                "judul"=>$judul
            ];
            if (file_exists("./images/blog/".$judul.".png")) {
                unlink("./images/blog/".$judul.".png");
            }
            $this->BlogModel->hapusData($where);
            echo "
            <script> 
                alert ('Data blog berhasil dihapus!')
                window.location.href= '".base_url('admin/Blog/index')."';
            </script>
            ";
        }
    }

?>