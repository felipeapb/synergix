<?php

class Email extends CI_Controller {

    /**
    * Check if the user is logged in, if he's not,
    * send him to the login page
    * @return void
    */
	function index()
	{

$data = date("Y-m-d");
$data = array(
'description' => $this->input->post('nome'),
'stock' => $this->input->post('sobrenome'),
'cost_price' => $this->input->post('email'),
'sell_price' =>0,
'manufacture_id' => 0,
'mensagem' => $this->input->post('mensagem'),
'horario' => $data,
'lido' => 0,
);


$result = $this->db->insert('products', $data);
if($result){echo 'ok';}else{echo 'erro2';}

	}


}
