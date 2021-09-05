<?php
date_default_timezone_set('Asia/Jakarta');

class Pay extends CI_Controller
{

    public function index()
    {
        $listPeminjam   = $this->db->get_where("tbl_peminjaman", ['status' => NULL])->result();
        $today =  date('Y-m-d');
        foreach ($listPeminjam as $hutang) {
            $idPinjam  = $hutang->id_pinjam;

            //ambil data peminjam 
            $dataPeminjam   = $this->db->get_where('tbl_pembayaran', ['id_pinjam'    => $idPinjam, 'tanggal' => $today])->row();

            //HITUNG jumlah hutang 
            $hitungPembayaran  = $this->m_admin->countPay($idPinjam);

            if ($dataPeminjam->tanggal == $today && $hitungPembayaran != $hutang->total_pinjam) {
                //jika tanggal bayar & tgl sekarang sama  && total bayar dan jumlah hutang tidak sama eksekusi script ini 
                $d = ['jumlah_bayar' => $hutang->setor_perbulan];
                $this->m_admin->update($d, "tbl_pembayaran", array('id_pinjam' => $idPinjam, 'tanggal' => $today));
                echo "dibayar untuk bulan " . $today;
            } else if ($dataPeminjam->tanggal == $today && $hitungPembayaran == $hutang->total_pinjam) {
                echo "sudah lunas";
                $d = ['status' => "Lunas"];
                $this->m_admin->update($d, "tbl_peminjaman", array('id_pinjam' => $idPinjam));
            }
        }
    }
}
