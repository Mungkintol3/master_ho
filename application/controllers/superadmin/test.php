<?php 

/**
 * 
 */
class Test extends CI_Controller
{
	public function __construct() {
        parent::__construct();
        $this->load->helper(array('form'));
    		$id 	 = $this->session->userdata('id');

		if ($id == null || $id == "") {
			$this->session->set_flashdata('info', 'sessi berakhir silahkan login kembali');
			redirect('Login');
		}
	}


	public function index()
	{
		$this->load->view('template/source');
	}

	public function upload()
	{
	if(isset($_POST['submit'])){
    $test1 = $_FILES['test1']['name'];
    $test2 = $_FILES['test2']['name'];

    var_dump($test1,$test2);
}
	}
}