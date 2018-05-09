<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kurz extends CI_Controller{

public function __construct(){

parent:: __construct();
$this->load->model('kurz_model');
$this->load->helper('url_helper');
}
public function index()
{
$data['kurz'] = $this->kurz_model->get_kurz();
$data['title'] = 'Kurz';
$this->load->view('template/header',$data);
$this->load->view('template/navigation');
$this->load->view('kurz/index',$data);
$this->load->view('template/footer');
}
}
?>