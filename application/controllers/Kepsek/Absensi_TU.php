<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	 * 
	 */
	class Absensi_TU extends CI_Controller
	{
		
		function __construct()
		{
			# code...
			parent::__construct();
		}

		function index()
		{
			$this->load->view("partial/main/header");
			$this->load->view("content/kepsek/TU/absensi_tu");
			$this->load->view("partial/main/footer");
		}

	}
?>