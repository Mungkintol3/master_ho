<?php

/**
 * 
 */
class Exports extends CI_Controller
{
	
	public function index()
	{
		$data   = array(
 			'pegawai'		=>  $this->m_admin->getData("tbl_pegawai")->result()
 		);
		$this->template->load("template/template","superadmin/exports",$data);
		//$this->load->view("exports",$data);
	}


	public function export()
	{
		include APPPATH.'third_party/PHPExcel/PHPExcel.php';
		include APPPATH.'third_party/PHPExcel/PHPExcel/IOFactory.php';

		$objPHPExcel = new PHPExcel();
		$objPHPExcel->getProperties()->setCreator("RN Kushwaha")
       ->setLastModifiedBy("Aryan")
       ->setTitle("Reports")
       ->setSubject("Excel Turorials")
       ->setDescription("Test document ")
       ->setKeywords("phpExcel")
       ->setCategory("Test file");
       
		// Create a first sheet, representing sales data
		$objPHPExcel->setActiveSheetIndex(0);
		$objPHPExcel->getActiveSheet()->setCellValue('A1', 'ID');
		$objPHPExcel->getActiveSheet()->setCellValue('B1', 'Name');
		$objPHPExcel->getActiveSheet()->setCellValue('C1', 'NPK');
		$objPHPExcel->getActiveSheet()->setCellValue('D1', 'NIK');

		$n=2;
		$d = $this->db->get("tbl_pegawai")->result_array();
		foreach($d as $d){
		 $objPHPExcel->getActiveSheet()->setCellValue('A'.$n, $d['id']);
		 $objPHPExcel->getActiveSheet()->setCellValue('B'.$n, $d['nama']);
		 $objPHPExcel->getActiveSheet()->setCellValue('C'.$n, $d['npk']);
		 $objPHPExcel->getActiveSheet()->setCellValue('D'.$n, $d['nik']);
		   $n++;
		}               
		// Rename sheet
		$objPHPExcel->getActiveSheet()->setTitle('Agents');		               

		// Create a new worksheet, after the default sheet
		$objPHPExcel->createSheet();

		// Add some data to the second sheet, resembling some different data types
		$objPHPExcel->setActiveSheetIndex(1);
		$objPHPExcel->getActiveSheet()->setCellValue('A1', 'ID');
		$objPHPExcel->getActiveSheet()->setCellValue('B1', 'Title');
		$objPHPExcel->getActiveSheet()->setCellValue('C1', 'Email');
		$objPHPExcel->getActiveSheet()->setCellValue('D1', 'Phone No');

		$n=2;
		$qry=$this->db->get("tbl_pegawai")->result_array();
		foreach($qry as $d ){
		 $objPHPExcel->getActiveSheet()->setCellValue('A'.$n, $d['id']);
		 $objPHPExcel->getActiveSheet()->setCellValue('B'.$n, $d['nama']);
		 $objPHPExcel->getActiveSheet()->setCellValue('C'.$n, $d['npk']);
		 $objPHPExcel->getActiveSheet()->setCellValue('D'.$n, $d['nik']);
		$n++;
		}      

		// Rename 2nd sheet
		$objPHPExcel->getActiveSheet()->setTitle('Technician');

			// Redirect output to a client’s web browser (Excel5)
		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="data.xls"');
		header('Cache-Control: max-age=0');
		$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
		$objWriter->save('php://output');
	}
}