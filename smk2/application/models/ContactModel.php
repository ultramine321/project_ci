<?php 

class ContactModel extends CI_Model
{
    public function select_all_contact()
    {
        //memang semua kolom
        $this->db->select('*');
        //didalam table contact
        $this->db->from('contact');
        //ambil reult datanya
        $query = $this->db->get();
        //kemudian kembalikan nilai dalam bentuk result(array/assoc)
        return $query ->result();
    }

    public function select_row_contact()
    {
        //memang semua kolom
        $this->db->select('*');
        //didalam table contact
        $this->db->from('contact');
        //ambil reult datanya
        $query = $this->db->get();
        //kemudian kembalikan nilai dalam bentuk result(array/assoc)
        return $query ->row();
    }

    public function select_contact_by($where)
    {
          //memang semua kolom
          $this->db->select('*');
          
          $this->db->where($where);
          //didalam table contact
          $this->db->from('contact');
          //ambil reult datanya
          $query = $this->db->get();
          //kemudian kembalikan nilai dalam bentuk row yaitu hanya menampilkan 1 data saja
          return $query ->row();
    }

    public function insertData($column)
    {
        //proses insert data ke database
        $this->db->insert('contact',$column);
        //return hasil insert apakah berhasil atau tidak
        return $this->db->affected_rows();
    }
    public function editData($where,$column)
    {
        //where dengan nama kolomnya
        $this->db->where($where);
        //nama table
        $this->db->update("contact", $column);
        
        return $this->db->affected_rows();
    }
    public function hapusData($where)
    {
        //where dengan nama kolomnya
        $this->db->where($where);
        //nama table
        $this->db->delete("contact");
        
        return $this->db->affected_rows();
    }
}

?>