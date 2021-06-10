<?php
require APPPATH . 'third_party/enableXapi/config.php';
require APPPATH . 'third_party/enableXapi/error.php';


defined('BASEPATH') OR exit('No direct script access allowed');

class Tokens extends CI_Controller{

	function index(){
		GLOBAL $ARR_ERROR;
		if($_SERVER['REQUEST_METHOD'] != 'POST') {
			$this->session->set_flashdata('errors', $ARR_ERROR["5001"]);
			redirect('pages');
		}

		$role="";
		$roomID="";

		$meetingID = trim($this->input->post('meetingID'));
		$roomPin = trim($this->input->post('roomPin'));
		$name = trim($this->input->post('nameText'));

		$now = time();
		$ten_minutes = $now + (10 * 60);
		$startDate = date('H:i', $now);
		$endDate = date('H:i', $ten_minutes);

		$currentTime = strtotime("".date('Y-m-d')." ".$endDate."");

		$currentTime = strtotime("".date('Y-m-d')." ".$endDate."");
 
		//The amount of hours that you want to add.
		$hoursToAdd = -2;
		 
		//Convert the hours into seconds.
		$secondsToAdd = $hoursToAdd * (60 * 60);
		 
		//Add the seconds onto the current Unix timestamp.
		$newTime = $currentTime + $secondsToAdd;

		$test =  date("Y-m-d H:i", $newTime);


		//Role affectation

		if (strlen($roomPin) <= 5) {
			$role = 'participant';
		}elseif (strlen($roomPin) > 5){
			$role = 'moderator';
		}else{
			$this->session->set_flashdata('errors', $ARR_ERROR["4008"]);
			redirect('pages');
		}

		$roomID = $meetingID;
		$data1 = array("name"=>$name, "role"=>$role, "roomId"=> $roomID, "user_ref" => $name);

		$data = json_encode($data1);

		if (!isset($data))
		{	
			$this->session->set_flashdata('errors', $ARR_ERROR["4001"]);
			redirect('pages');
		}

		$data = json_decode($data);

		$json_error = json_last_error();

		if ($json_error)	
		{	
			$this->session->set_flashdata('errors', $ARR_ERROR["4003"]);
			redirect('pages');
		}


		if (isset($data->name, $data->role, $data->roomId))
		{	
			$result = $this->CreateToken($data);
			if (is_array($result))
			{
			   if(isset($result['token'])){
			  		redirect("rooms/accessToroom?token=".$result["token"]."&roomId=".$data->roomId."&role=".$data->role."&user_ref=".$data->user_ref."&room=".$name);
				}else{
					$this->session->set_flashdata('errors', $ARR_ERROR["4004"]);
                redirect('pages');
           		}
			}else {
                $this->session->set_flashdata('errors', $ARR_ERROR["4004"]);
                redirect('pages');
            }
		}
		else
		{	
			$this->session->set_flashdata('errors', $ARR_ERROR["4004"]);
			redirect('pages');
		}
	}

	function CreateToken($data){

		GLOBAL $ARR_ERROR;

		/* Create Token Payload */
	    $Token = Array(
			"name"			=> $data->name,
			"role"			=> $data->role,
			"user_ref"		=> $data->user_ref
			);

		$Token_Payload = json_encode($Token);

		
		/* Prepare HTTP Post Request */

		$headers = array(
			'Content-Type: application/json',
			'Authorization: Basic '. base64_encode(APP_ID . ":". APP_KEY)
		);

		$ch = curl_init("https://api.enablex.io/video/v1/rooms/". $data->roomId . "/tokens");
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $Token_Payload);
		$response = curl_exec($ch);

		curl_close($ch);
		return json_decode($response, true);
	}
}