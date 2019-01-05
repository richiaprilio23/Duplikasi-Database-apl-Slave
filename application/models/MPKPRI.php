<?php
Class MPKPRI extends CI_model{
     
	function tampil_data()
    {
        $query= "SELECT t_detail_id, kategori_id, nama_barang, qty, transaksi_id, nama_tamu, harga, status
                FROM HotelPKPRI
                WHERE t_detail_id";
        return $this->db->query($query); 
    }

	function InsertJsondb($content)
	{ 
		$this->db->insert('HotelPKPRI', $content);
	}

    function dbempty()
    {
        $this->db->empty_table('HotelPKPRI');
    }

}
?>