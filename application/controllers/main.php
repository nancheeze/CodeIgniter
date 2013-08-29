<?php
class Main extends CI_Controller
{
public function index()
{
$this->load->model('message_model');
$this->message_model->setMessage("My name's Pattayanee Rukchaiyawan.<br>Students ID : 544259125<br>Program :Software Engineering");
$data['displayMessage'] = $this->message_model->getMessage();
$this->load->view('viewpage',$data);
}
}
?>