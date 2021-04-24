<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Rest_server extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model('api_model');
		$this->load->library('form_validation');
	}

    
    public function index()
    {
        $this->load->helper('url');

        $this->load->view('api_view');
    }

    function action()
	{
		if($this->input->post('data_action'))
		{
			$data_action = $this->input->post('data_action');

			


			if($data_action == "fetch_all")
			{
				$api_url = "http://localhost/rest_Ci/index.php/kontak/index_get";

				$client = curl_init($api_url);

				curl_setopt($client, CURLOPT_RETURNTRANSFER, true);

				$response = curl_exec($client);

				curl_close($client);

				$result = json_decode($response);

				$output = '';

				if(count($result) > 0)
				{
					foreach($result as $row)
					{
						$output .= '
						<tr>
							<td>'.$row->first_name.'</td>
							<td>'.$row->last_name.'</td>
							<td>'.$row->tangal_lahir.'</td>
							<td>'.$row->umur.'</td>
							<td>'.$row->alamat.'</td>
							<td>'.$row->telepon.'</td>
							<td>'.$row->email.'</td>
						</tr>

						';
					}
				}
				else
				{
					$output .= '
					<tr>
						<td colspan="4" align="center">No Data Found</td>
					</tr>
					';
				}

				echo $output;
			}
		}
	}
	
}
