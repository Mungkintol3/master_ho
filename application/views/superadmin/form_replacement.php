<?php
require __DIR__ . '../vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf([
			'margin_left' => 20,
			'margin_right' => 15,
			'margin_top' => 48,
			'margin_bottom' => 25,
			'margin_header' => 10,
			'margin_footer' => 10
		]);
    $html = '<html>
        <body>
        <div>'.$POST['text'].'</div>
        </html>';
$mpdf->WriteHTML($html);
$mpdf->Output();
?>