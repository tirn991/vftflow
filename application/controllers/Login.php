<?php
ob_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index($message=NULL, $msg = NULL){
		$data['msg'] = $msg;
		if($message == "failure"){
			$data['msg'] = "<font color='red'><b>Incorrect Username Or Password</b></font>";
		}
		$this->load->view('login', $data);
	}

	// public function forgot($message=NULL, $msg = NULL){
	// 	$data['msg'] = $msg;
	// 	if($message == "failure"){
	// 		$data['msg'] = "<font color='red'><b>Incorrect Username Or Password</b></font>";
	// 	}
	// 	$this->load->view('login/forgot', $data);
	// }

	// public function authenticate(){
	// 	$this->load->library('ajax');
	// 	$this->load->library('guzzle');
	// 	$client = new GuzzleHttp\Client();
	// 	$api_path = $this->config->item('api_url');

	// 	$username = $this->input->post('username');
	// 	$password = $this->input->post('password');
	// 	if($username=="" || $password==""){
	// 		redirect('home/login/');
	// 	}
	// 	$url        = $api_path.'/authentication/';

	// 	// print_r($url);die();

	// 	try {
	// 		$response = $client->request('POST', $url, [
	// 			'json' => [
	// 				'username' => $username,
	// 				'password' => $password
	// 			]
	// 		]);
	// 		$user = json_decode($response->getBody());
	// 		$empty = count($user);
	// 		$role = $user->title;

	// 		if($empty =="0"){
	// 			$data['ok'] = "2";
	// 			$message ="failure";
	// 			redirect('login/index/'.$message);
	// 		}else{
	// 			switch ($role) {
	// 				case 'believer':
	// 				$session = array(
	// 					'_id' => $user->_id,
	// 					'firstname' => $user->firstname,
	// 					'middlename' => $user->middlename,
	// 					'lastname' => $user->lastname,
	// 					'phonenumber' => $user->phonenumber,
	// 					'churchcode' => $user->churchcode,
	// 					'churchname' => $user->churchname,
	// 					'communitycode' => $user->communitycode,
	// 					'communityname' => $user->communityname,
	// 					'gender' => $user->gender,
	// 					'status' => $user->status,
	// 					'imagepath' => $user->imagepath,
	// 					'location' => $user->location,
	// 					'contact' => $user->contact,
	// 					'role' => $role,
	// 					'username' => $username
	// 				);
	// 				$this->session->set_userdata($session);
	// 				redirect('church');
	// 				break;

	// 				case 'superAdmin':
	// 				$session = array(
	// 					'_id' => $user->_id,
	// 					'firstname' => $user->firstname,
	// 					'middlename' => $user->middlename,
	// 					'lastname' => $user->lastname,
	// 					'phonenumber' => $user->phonenumber,
	// 					'churchcode' => $user->churchcode,
	// 					'churchname' => $user->churchname,
	// 					'profilepicture' => $user->profilepicture,
	// 					'jobtitle' => $user->jobtitle,
	// 					'communitycode' => $user->communitycode,
	// 					'communityname' => $user->communityname,
	// 					'gender' => $user->gender,
	// 					'status' => $user->status,
	// 					'imagepath' => $user->imagepath,
	// 					'location' => $user->location,
	// 					'contact' => $user->contact,
	// 					'role' => $role,
	// 					'username' => $username
	// 				);
	// 				$this->session->set_userdata($session);
	// 				redirect('admin');
	// 				break;

	// 				case 'Admin':
	// 				$session = array(
	// 					'_id' => $user->_id,
	// 					'firstname' => $user->firstname,
	// 					'middlename' => $user->middlename,
	// 					'lastname' => $user->lastname,
	// 					'phonenumber' => $user->phonenumber,
	// 					'churchcode' => $user->churchcode,
	// 					'churchid' => $user->churchid,
	// 					'churchname' => $user->churchname,
	// 					'communitycode' => $user->communitycode,
	// 					'communityname' => $user->communityname,
	// 					'profilepicture' => $user->profilepicture,
	// 					'jobtitle' => $user->jobtitle,
	// 					'gender' => $user->gender,
	// 					'status' => $user->status,
	// 					'imagepath' => $user->imagepath,
	// 					'location' => $user->location,
	// 					'contact' => $user->contact,
	// 					'role' => $role,
	// 					'username' => $username
	// 				);
	// 				$this->session->set_userdata($session);
	// 				redirect('church');
	// 				break;

	// 				default:
	// 					# code...
	// 				break;
	// 			}
	// 		}
	// 	} catch (GuzzleHttp\Exception\BadResponseException $e) {
	// 		    $data['ok'] = "2";
	// 			$message ="failure";
	// 			redirect('login/index/'.$message);
	// 	}catch (GuzzleHttp\Exception\ConnectException $e) {
	// 		$this->load->view('connection_error.php');
    //     }
	// }


	public function do_logout(){
		$username = $this->session->userdata('username');
		if($username ==""){
			$this->session->sess_destroy();
			redirect('login');
		}else{
			$this->session->sess_destroy();
			redirect('login');
		}
	}
}
