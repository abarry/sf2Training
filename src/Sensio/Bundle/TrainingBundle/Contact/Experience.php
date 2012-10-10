<?php

namespace Sensio\Bundle\TrainingBundle\Contact;
use Symfony\Component\Validator\Constraints as Assert;

class Experience
{
	/**
	* @Assert\NotBlank()
	*/
	public $job_name = "Web Ingeneer";
	
	/**
	* @Assert\Date()
	* @Assert\NotBlank()
	*/
	public $date_start;
	
	/**
	* @Assert\Date()
	*/
	public $date_end;
}