<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	 * 
	 */
	class Data_orangtua_siswa extends CI_Controller
	{
		
		function __construct()
		{
			# code...
			parent::__construct();
		}

		function index()
		{
			$this->load->view("partial/main/header");
			$this->load->view("content/kepsek/siswa/data_orangtua_siswa");
			$this->load->view("partial/main/footer");
		}

	}
?>