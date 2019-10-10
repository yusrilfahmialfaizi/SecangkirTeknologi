<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	 * 
	 */
	class Absensi_bendahara extends CI_Controller
	{
		
		function __construct()
		{
			# code...
			parent::__construct();
		}

		function index()
		{
			$this->load->view("partial/main/header");
			$this->load->view("content/kepsek/bendahara/absensi_bendahara");
			$this->load->view("partial/main/footer");
		}

	}
?>