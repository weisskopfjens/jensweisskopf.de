<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	function __construct() {
			parent::__construct();
			// Load form validation library
			$this->load->library('form_validation');
	}

	public function index(){
			$data = $formData = array();


			// If contact request is submitted
			if( $this->input->post('Message') ){
					// Get the form data
					$formData = $this->input->post();

					// Form field validation rules
					$this->form_validation->set_rules('Name', 'Name', 'required');
					$this->form_validation->set_rules('Email', 'Email', 'required|valid_email');
					$this->form_validation->set_rules('Subject', 'Betreff', 'required');
					$this->form_validation->set_rules('Message', 'Nachricht', 'required');

					// Validate submitted form data
					if($this->form_validation->run() == true){

							// Define email data
							$mailData = array(
									'Name' => $formData['Name'],
									'Email' => $formData['Email'],
									'Subject' => $formData['Subject'],
									'Message' => $formData['Message']
							);

							// Send an email to the site admin
							$send = $this->sendEmail($mailData);

							// Check email sending status
							if($send){
									// Unset form data
									$formData = array();

									$data['status'] = array(
											'type' => 'success',
											'msg' => 'Ihre Nachricht wurde erfolgreich übermittelt. Vielen Dank.'
									);
							}else{
									$data['status'] = array(
											'type' => 'error',
											'msg' => 'Beim übermitteln der Nachricht trat ein Problem auf.'
									);
							}
					} else {
						$data['status'] = array(
								'type' => 'inputerror',
								'msg' => 'Überprüfen sie ihre eingabe.'
						);
						$data['inputerror']['name'] = form_error('Name','<p class="w3-panel w3-red">','</p>');
						$data['inputerror']['email'] = form_error('Email','<p class="w3-panel w3-red">','</p>');
						$data['inputerror']['subject'] = form_error('Subject','<p class="w3-panel w3-red">','</p>');
						$data['inputerror']['message'] = form_error('Message','<p class="w3-panel w3-red">','</p>');

					}
			}

			// Pass POST data to view
			$data['postData'] = $formData;

			header('Content-Type: application/json');
			$jsondata['json'] = json_encode($data);
			$this->load->view('json', $jsondata );
	}

	private function sendEmail($mailData){
			// Load the email library
			$this->load->library('email');

			// Mail config
			$to = 'jens@familieweisskopf.de';
			$from = 'jens@familieweisskopf.de';
			$fromName = 'Webpage';
			$mailSubject = 'Contact Request Submitted by '.$mailData['Name'];

			// Mail content
			$mailContent = '
					<h2>Contact Request Submitted</h2>
					<p><b>Name: </b>'.$mailData['Name'].'</p>
					<p><b>Email: </b>'.$mailData['Email'].'</p>
					<p><b>Subject: </b>'.$mailData['Subject'].'</p>
					<p><b>Message: </b>'.$mailData['Message'].'</p>
			';

			$config['mailtype'] = 'html';
			$this->email->initialize($config);
			$this->email->to($to);
			$this->email->from($from, $fromName);
			$this->email->subject($mailSubject);
			$this->email->message($mailContent);

			// Send email & return status
			return $this->email->send()?true:false;
	}
}
