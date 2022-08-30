<?php 

class AboutModel extends CI_Model
{
    public function select_all_about()
    {
        //memang semua kolom
        $this->db->select('*');
        //didalam table about
        $this->db->from('about');
        //ambil reult datanya
        $query = $this->db->get();
        //kemudian kembalikan nilai dalam bentuk result(array/assoc)
        return $query ->result();
    }

    public function select_about_by($where)
    {
          //memang semua kolom
          $this->db->select('*');
          
          $this->db->where($where);
          //didalam table about
          $this->db->from('about');
          //ambil reult datanya
          $query = $this->db->get();
          //kemudian kembalikan nilai dalam bentuk row yaitu hanya menampilkan 1 data saja
          return $query ->row();
    }

    public function insertData($column)
    {
        //proses insert data ke database
        $this->db->insert('about',$column);
        //return hasil insert apakah berhasil atau tidak
        return $this->db->affected_rows();
    }
    public function editData($where,$column)
    {
        //where dengan nama kolomnya
        $this->db->where($where);
        //nama table
        $this->db->update("about", $column);
        
        return $this->db->affected_rows();
    }
    public function hapusData($where)
    {
        //where dengan nama kolomnya
        $this->db->where($where);
        //nama table
        $this->db->delete("about");
        
        return $this->db->affected_rows();
    }
}

?>