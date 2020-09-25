<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function index()
	{
		$this->load->view('/frontend/home');
	}
	public function aboutus()
	{
		$this->load->view('/frontend/aboutus');
	}
	public function whyus()
	{
		$this->load->view('/frontend/whyus');
	}
	public function clients()
	{
		$this->load->view('/frontend/clients');
	}
	public function gallery()
	{
		$this->load->view('/frontend/gallery');
	}
	public function contact()
	{
		$this->load->view('/frontend/contact');
	}
	public function news()
	{
		$this->load->view('/frontend/news');
	}
	public function blogs()
	{
		$this->load->view('/frontend/blogs');
	}
	public function blogpost()
	{
		$this->load->view('/frontend/blogpost');
	}
	public function newspost()
	{
		$this->load->view('/frontend/newspost');
	}
	public function location()
	{
		$this->load->view('/frontend/location');
	}
}
