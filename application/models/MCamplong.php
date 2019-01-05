<?php
Class MCamplong extends CI_model{
     
	function tampil_data()
    {
        $query= "SELECT t_detail_id, kategori_id, nama_barang, qty, transaksi_id, nama_tamu, harga, status
                FROM HotelCamplong
                WHERE t_detail_id";
        return $this->db->query($query);
    }

	function InsertJsondb($content)
	{ 
		$this->db->insert('HotelCamplong', $content);
	}

    function dbempty()
    {
        $this->db->empty_table('HotelCamplong');
    }

}
?>