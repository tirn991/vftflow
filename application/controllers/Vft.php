<?php
ob_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class Vft extends CI_Controller {
        public function index($message=NULL, $msg = NULL){
                $data['welcome'] = "Welcome";
                $data['link'] = "Welcome";
                $data['page_title'] = "VFT Management | Dashboard";

                $this->load->view('templates/header', $data);
                $this->load->view('templates/menu', $data);
                $this->load->view('templates/topbanner', $data);
                $this->load->view('dashboard', $data);
                $this->load->view('templates/footer', $data);
        }

        public function dashboard($message=NULL, $msg = NULL){
                $data['welcome'] = "Dashboard";
                $data['link'] = "Dashboard";
                $data['page_title'] = "VFT Management | Dashboard";

                $this->load->view('templates/header', $data);
                $this->load->view('templates/menu', $data);
                $this->load->view('templates/topbanner', $data);
                $this->load->view('dashboard', $data);
                $this->load->view('templates/footer', $data);
        }
        
        public function lac($message=NULL, $msg = NULL){
                $data['welcome'] = "Dashboard";
                $data['link'] = "Logical Access Control";
                $data['page_title'] = "VFT Management | Logical Access Control";

                $this->load->view('templates/header', $data);
                $this->load->view('templates/menu', $data);
                $this->load->view('templates/topbanner', $data);
                $this->load->view('lac', $data);
                $this->load->view('templates/footer', $data);
        }
        
        public function new_lac($message=NULL, $msg = NULL){
                $data['welcome'] = "Dashboard";
                $data['link'] = "Logical Access Control";
                $data['page_title'] = "VFT Management | Logical Access Control";

                $this->load->view('templates/header', $data);
                $this->load->view('templates/menu', $data);
                $this->load->view('templates/topbanner', $data);
                $this->load->view('new_lac', $data);
                $this->load->view('templates/footer', $data);
	}
}
