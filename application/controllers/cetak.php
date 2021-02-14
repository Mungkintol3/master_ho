<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak extends CI_Controller {

	public function index()
	{

		// $this->load->view('mpdf');
		$mpdf = new \Mpdf\Mpdf();
		$data = $this->load->view('mpdf', [], TRUE);
		$mpdf->WriteHTML($data);
		$mpdf->Output();
	// }
}

	public function test()
	{
	$mpdf = new \Mpdf\Mpdf([
	'margin_left' => 20,
	'margin_right' => 15,
	'margin_top' => 48,
	'margin_bottom' => 25,
	'margin_header' => 10,
	'margin_footer' => 10
	]);
		$test = $this->load->view('mpdf', [], True);
		$mpdf->SetProtection(array('print'));
		$mpdf->SetTitle("Biodata Karyawan");
		$mpdf->SetAuthor("Murry.inc");
		$mpdf->SetWatermarkText("SIGAP");
		$mpdf->showWatermarkText = true;
		$mpdf->watermark_font = 'DejaVuSansCondensed';
		$mpdf->watermarkTextAlpha = 0.1;
		$mpdf->SetDisplayMode('fullpage');

		$mpdf->WriteHTML($test);

		$mpdf->Output();
	}
}


?>