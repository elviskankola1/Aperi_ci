<?php
require APPPATH . 'third_party/enableXapi/config.php';
require APPPATH . 'third_party/enableXapi/error.php';


defined('BASEPATH') OR exit('No direct script access allowed');

class Rooms extends CI_Controller{

	function index(){
		$this->load->view('templates/header');
		$this->load->view('rooms/create');
		$this->load->view('templates/footer');
	}

	//Room info
	function getRoomInfo($roomId){
	    GLOBAL $ARR_ERROR;
		header("Content-type: application/json");

		if($_SERVER['REQUEST_METHOD'] != 'GET') {
			$this->session->set_flashdata('errors', $ARR_ERROR["5001"]);
			redirect('pages');
		}

		$ret = $this->GetRoom($roomId);

		if (!isset($ret['room']['name']) && !isset($ret['room']['room_id'])) {
			$this->session->set_flashdata('errors', $ARR_ERROR["4004"]);
			redirect('pages');
		}else{	

			
		}
	
	}

	//Create room process function
	function dataAndMailing(){

		GLOBAL $ARR_ERROR;
		
		if($_SERVER['REQUEST_METHOD'] != 'POST') {
			$this->session->set_flashdata('errors', $ARR_ERROR["5001"]);
			redirect('rooms');
		}

		$ret = $this->createRoom();

		if (!isset($ret['room']['name']) && !isset($ret['room']['room_id'])){
			$this->session->set_flashdata('errors', $ARR_ERROR["5003"]);
			redirect('rooms');
		}else{
			$this->load->model('room_model');
			$data = array(
				'roomID' => $ret['room']['room_id'],
				'roomName' => $ret['room']['name'],
				'studentPin' => rand(100000, 9999),
		  	 	'roomOTP' => rand(100000, 9999),
		  	 	'scheduledDate'=>date('Y-m-d H-i')
			);

			$this->room_model->insert($data);

			$roomID= $ret['room']['room_id'];

			$this->sendMeetingMAil($roomID);
			$this->session->set_flashdata('success', "Virtual Room succesfully created, please check your email for credentials!");
			redirect('rooms');
		}
	}

	/*Create Room in EnableX Api*/
	function  createRoom($roomName = 'Aperi Room')
	{	

		GLOBAL $ARR_ERROR;

		$random_name = rand(100000, 999999);

		$participants = count($_POST['studentmail'])+1;
		
		//schduled time 
	    $dateold = $_POST['date'];
		$time = $_POST['time'];

		$currentTime = strtotime($dateold." ".$time."");
		 
		//The amount of hours that you want to add.
		$hoursToAdd = -2;
		 
		//Convert the hours into seconds.
		$secondsToAdd = $hoursToAdd * (60 * 60);
		 
		//Add the seconds onto the current Unix timestamp.
		$newTime = $currentTime + $secondsToAdd;

		$date =  $_POST['date']." ".$_POST['time'].":00";

		$date2 =  $_POST['date']." ".$_POST['end'].":00";


		//duration

		// Calculating duration of the online session
	    $time1 = new DateTime($date, new DateTimeZone($_POST['timezone']));

	    $time2 = new DateTime($date2, new DateTimeZone($_POST['timezone']));


	    $diff = ($time1->diff($time2)->h * 60) + $time1->diff($time2)->i;

	    $newDate = new DateTime($date, new DateTimeZone($_POST['timezone']));

		$dateFinale = gmdate("Y-m-d H:i:s", $newDate->getTimestamp());
	    $Room = Array(
	    "name"			=> "$roomName: $random_name",
	    "owner_ref"		=> $random_name,
	    "settings"		=> Array(
					"description"	=> "Meeting $roomName of $date for $diff munites",
					"quality"		=> "SD",
					"mode"			=> ($participants < 100) ? "Group" : "Lecture",
					"duration"		=> $diff,
					"participants"	=> $participants,
					"scheduled"		=> true,
					"scheduled_time" => $dateFinale,
					"auto_recording"=> false,
					"active_talker"	=> true,
					"wait_moderator"=> false,
					"adhoc"			=> false,
					"canvas"		=> true
					),
	   				 "sip"		=> Array(
					"enabled"		=> false
					)
		);

		$Room_Meta = json_encode($Room);
		
		/* Prepare HTTP Post Request */

		$headers = array(
			'Content-Type: application/json',
			'Authorization: Basic '. base64_encode(APP_ID . ":". APP_KEY)
		);

		/* CURL POST Request */

		$curl = curl_init();

	    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
	    curl_setopt($curl, CURLOPT_URL, API_URL . "/rooms");
	    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	    curl_setopt($curl, CURLOPT_HEADER, false);
	    curl_setopt($curl, CURLOPT_POST, true);
	    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, true);
	    curl_setopt($curl, CURLOPT_POSTFIELDS, $Room_Meta);

	    $response = curl_exec($curl);
		curl_close($curl);
		return (array) json_decode($response, true);
	}




	// Send email to moderator with room details and credentials
	function sendMeetingMAil($roomID){
		 $random_moderator_pin = rand(100000, 999999);
		 $studentPin= rand(100000, 9999); //Must have this length for comparaison in the token class

		 $emails_parts = $this->input->post('studentmail');

		 $zoneTime = $this->input->post('time').' - '.$this->input->post('timezone');
		 $startDate = $this->input->post('date');
		 $endTime = $this->input->post('end');
		 $to = $this->input->post('email');

		  $subject = "You are invited to Aperi Virtual Event witch will have place at $zoneTime";
		  $txt = "Hello!";
		  $txt  = "\n\nYou have successfully created a virtual meeting on Aperi. The login details are as follows:";
		  $txt .= "\n\nFACILITATOR";
		  $txt .= "\nStart date : ".$zoneTime;
		  $txt .= "\nEnd date : ".$endTime;
		  $txt .= "\nFacilitator Room Pin : ".$random_moderator_pin;
		  $txt .= "\nRoom ID : ".$roomID;
		  $txt .= "\nFacilitator Access Link:";
		  $txt .= "\n Please share the link below with your participant(s). They are required to only fill in their first name once they have clicked on the link.";
		 
		  $txt .= "\nhttps://www.aperi.ngomadigitech.com/pages?id=".$roomID."&roomPin=".$random_moderator_pin."";
		  $headers = "From: noreply@ngomadigitech.com";
		  mail($to,$subject,$txt,$headers);


		  //===========PARTICIPANTS=============
		  $emails = implode(', ', $emails_parts);
		  //error_log($emails); 

		  $txt = "\n\nPARTICIPANT(S)";
		  $txt .= "\nStart date : ".$zoneTime;
			  $txt .= "\nEnd date : ".$endTime;
		  $txt .= "\nParticipant Room Pin : ".$studentPin;
		  $txt .= "\nRoomID : ".$roomID;
		  $txt .= "\nClick on the link below and only enter your first name";
		  $txt .= "\nhttps://www.aperi.ngomadigitech.com/pages?id=".$roomID."&roomPin=".$studentPin."";
		  $txt .= "\n\nThe Aperi Team";
		  $headers = "From: noreply@ngomadigitech.com";
		  mail($emails, $subject, $txt, $headers);
		}

		function  GetRoom($roomId)
		{	
			GLOBAL $ARR_ERROR;
			$headers = array(
				'Content-Type: application/json',
				'Authorization: Basic '. base64_encode(APP_ID . ":". APP_KEY)
			);

			/* CURL POST Request */

			$ch = curl_init(API_URL."/rooms/". $roomId );
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_POST, false);
			$response = curl_exec($ch);

			curl_close($ch);
			 
			return (array) json_decode($response, true);

		}

		function accessToroom(){
	        GLOBAL $ARR_ERROR;
			$data = array(
				'token'=>$this->input->get('token'),
				'roomID'=>$this->input->get('roomId'),
				'user_ref'=>$this->input->get('user_ref'),
				'room'=>$this->input->get('room')
			);

			if ($data['token'] != "") {
				$this->load->view('rooms/meet', $data);
			}
			else{
				$this->session->set_flashdata('errors', $ARR_ERROR["4007"]);
				redirect('pages');
			}

		}

		//Load data fonction
        function loadData(){
            $data = array(
                'token'=>$this->input->get('token'),
                'roomID'=>$this->input->get('roomId'),
                'user_ref'=>$this->input->get('user_ref'),
                'room'=>$this->input->get('room')
            );
            return $data;
        }

}