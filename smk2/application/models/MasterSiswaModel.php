<?php 

class MasterSiswaModel extends CI_Model
{
    public function select_all_siswa()
    {
        //memang semua kolom
        $this->db->select('*');
        //didalam table siswa
        $this->db->from('master_siswa');
        //ambil reult datanya
        $query = $this->db->get();
        //kemudian kembalikan nilai dalam bentuk result(array/assoc)
        return $query ->result();
    }

    public function select_siswa_by($where)
    {
          //memang semua kolom
          $this->db->select('*');
          
          $this->db->where($where);
          //didalam table siswa
          $this->db->from('master_siswa');
          //ambil reult datanya
          $query = $this->db->get();
          //kemudian kembalikan nilai dalam bentuk row yaitu hanya menampilkan 1 data saja
          return $query ->row();
    }

    public function insertData($column)
    {
        //proses insert data ke database
        $this->db->insert('master_siswa',$column);
        //return hasil insert apakah berhasil atau tidak
        return $this->db->affected_rows();
    }
    public function editData($where,$column)
    {
        //where dengan nama kolomnya
        $this->db->where($where);
        //nama table
        $this->db->update("master_siswa", $column);
        
        return $this->db->affected_rows();
    }
    public function hapusData($where)
    {
        //where dengan nama kolomnya
        $this->db->where($where);
        //nama table
        $this->db->delete("master_siswa");
        
        return $this->db->affected_rows();
    }
}

?>