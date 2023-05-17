<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends Admin_Controller {

	public function __construct(){
		parent::__construct();

		$this->data['titulo'] = 'LGPD';
	}
	//================================================
	public function index()
	{
		$this->render_template('lgpd', $this->data);
	}
	//==================================================
	public function contato(){
		
		$this->data['titulo'] = 'FORMULÁRIO DE CONTATO';
		$this->render_template('contato', $this->data);

	}
}
