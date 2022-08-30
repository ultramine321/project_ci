<?php 

class PesanModel extends CI_Model
{
    public function select_all_pesan()
    {
        //memang semua kolom
        $this->db->select('*');
        //didalam table pesan
        $this->db->from('pesan');
        //ambil reult datanya
        $query = $this->db->get();
        //kemudian kembalikan nilai dalam bentuk result(array/assoc)
        return $query ->result();
    }

    public function select_pesan_by($where)
    {
          //memang semua kolom
          $this->db->select('*');
          
          $this->db->where($where);
          //didalam table pesan
          $this->db->from('pesan');
          //ambil reult datanya
          $query = $this->db->get();
          //kemudian kembalikan nilai dalam bentuk row yaitu hanya menampilkan 1 data saja
          return $query ->row();
    }

    public function insertData($column)
    {
        //proses insert data ke database
        $this->db->insert('pesan',$column);
        //return hasil insert apakah berhasil atau tidak
        return $this->db->affected_rows();
    }
    public function editData($where,$column)
    {
        //where dengan nama kolomnya
        $this->db->where($where);
        //nama table
        $this->db->update("pesan", $column);
        
        return $this->db->affected_rows();
    }
    public function hapusData($where)
    {
        //where dengan nama kolomnya
        $this->db->where($where);
        //nama table
        $this->db->delete("pesan");
        
        return $this->db->affected_rows();
    }
}

?>