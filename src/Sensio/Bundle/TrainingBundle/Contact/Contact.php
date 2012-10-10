<?php

namespace Sensio\Bundle\TrainingBundle\Contact;
use Symfony\Component\Validator\Constraints as Assert;

class Contact
{
	/**
	* @Assert\Email()
	* @Assert\NotBlank()
	*/
	public $sender;

	/**
	* @Assert\Valid()
	*/
	public $profile;	
	
	/**
	* @Assert\Length(min=10, max=50)
	* @Assert\NotBlank()
	*/
	public $subject;
	
	/**
	* @Assert\NotBlank()
	*/
	public $message;

	public function __construct()
	{
		$this->profile = new Profile();
	}

	public function send($to)
	{
		$headers[] = sprintf('From: %s', $this->sender);
		$headers[] = sprintf('Reply-To: %s', $this->sender);

		return mail($to, $this->subject, $this->message, implode('r\n', $headers));

	}
}