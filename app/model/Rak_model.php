<?php 

class Rak_model {
    private $tabel = 'rak';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function tambahRak($data){
        $query = "INSERT INTO rak VALUES (NULL,:nama_rak,:jumlah_kolom) ";

        $this->db->query($query);
        $this->db->bind('nama_rak',$data['namarak']);
        $this->db->bind('jumlah_kolom',$data['jumlahkolom']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function queryRak() 
    {
        $this->db->query("SELECT * FROM " . $this->tabel);
        return $this->db->resultSet();
    }

    public function getValueRakData($ValueRak) {
        $this->db->query('SELECT * FROM ' . $this->tabel . " WHERE " . $this->tabel .".id_rak = :id");
        $this->db->bind('id', $ValueRak); 
        return $this->db->singel();
    }

}

?>