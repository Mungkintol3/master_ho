<?php


/**
 * 
 */
class M_admin extends CI_Model
{

	public function getData($table)
	{
		return $this->db->get($table);
	}
	public function inputData($data, $table)
	{
		return $this->db->insert($table, $data);
	}

	//upload data pegawai
	public function uploadfile($filename)
	{
		$this->load->library('upload');
		$config['upload_path']		= './assets/upload/';
		$config['allowed_types']	= 'xlsx|pdf';
		$config['max_size']			= '12048';
		$config['overwrite']		= true;
		$config['file_name']		= $filename;

		$this->upload->initialize($config);
		if ($this->upload->do_upload('file')) {
			//jik berhasil
			$return = array('result' => 'success', 'file'	=> $this->upload->data(), 'error' => '');
			return $return;
		} else {
			$return = array('result' => 'gagal', 'file' => '', 'error' => $this->upload->display_errors());
			return $return;
		}
	}


	//input data dari excel dengan metode array()
	public function inputArray($data, $table)
	{
		return $this->db->insert_batch($data, $table);
	}

	//cari data berdasarkan inputan 
	public function cari($where, $table)
	{
		return $this->db->get_where($table, $where);
	}

	//hapus data
	public function delete($table, $where)
	{
		$this->db->where($where);
		return $this->db->delete($table);
	}

	//update data
	public function update($data, $table, $where)
	{
		$this->db->where($where);
		return $this->db->update($table, $data);
	}

	//show nilai passed 3 years
	public function shownilai($id_user)
	{
		$query = $this->db->query("SELECT * FROM histori_nilai_karyawan WHERE tahun >= now()-interval 3 year AND id_user = $id_user");
		return $query->result();
	}

	//show value assets passed 3 years
	public function showvaluea($id_user)
	{
		$query = $this->db->query("SELECT * FROM human_value_assets WHERE tahun >= now()-interval 3 year AND id_user = $id_user");
		return $query->result();
	}

	//show pendidikan join
	public function showPendidikan($id_user)
	{
		$this->db->select('tbl_karyawan.nama, tbl_karyawan.npk , tbl_karyawan.education_join , 
									pendidikan.institusi ,pendidikan.thn_lulus , pendidikan.jurusan');
		$this->db->from('tbl_karyawan');
		$this->db->where("tbl_karyawan.id_user", $id_user);
		$this->db->join('pendidikan', 'pendidikan.pendidikan = tbl_karyawan.education_join');
		$query = $this->db->get();
		return $query;
	}

	//show pendidikan join
	public function showPendidikan1($id_user)
	{
		$this->db->select('tbl_karyawan.nama, tbl_karyawan.npk , tbl_karyawan.education_join , 
									pendidikan.institusi, pendidikan.pendidikan ,pendidikan.thn_lulus , pendidikan.jurusan');
		$this->db->from('tbl_karyawan');
		$this->db->where("tbl_karyawan.id_user", $id_user);
		$this->db->join('pendidikan', 'pendidikan.pendidikan != tbl_karyawan.education_join');
		$query = $this->db->get();
		return $query;
	}

	//hitung range umur
	public function rangeUmur($range1, $range2)
	{
		$query = $this->db->query("SELECT
		CASE
			WHEN umur BETWEEN $range1 AND $range2 THEN '" . $range1 . "'  '-" . $range2 . "' 
			END AS range_umur ,
			COUNT(*) AS jumlah
	
		FROM (SELECT npk, nama, tgl_lahir, TIMESTAMPDIFF(YEAR, tgl_lahir, CURDATE()) AS umur FROM tbl_karyawan)  AS dummy_table
		GROUP BY range_umur
		ORDER BY range_umur");
		return $query->result();
	}

	//hitung pendidikan 
	public function countPendidikan($level)
	{
		$query = $this->db->query("SELECT education_update , COUNT(education_update) AS total FROM tbl_karyawan  where education_update =  '$level'  ");
		return $query->row();
	}

	public function save_log($param)
	{
		$sql    = $this->db->insert_string('log_aktivitas', $param);
		$ex     = $this->db->query($sql);
		return $this->db->affected_rows($sql);
	}
}
