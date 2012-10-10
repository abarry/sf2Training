<?php

namespace Sensio\Bundle\TrainingBundle\Contact;
use Symfony\Component\Validator\Constraints as Assert;

class Profile
{
	/**
	* @Assert\NotBlank()
	*/
	public $languages = "PHP";
	
	/**
	* @Assert\NotBlank()
	*/
	public $experiences; 

	public function __construct()
	{
		$this->setExperiences(array(
			new Experience(),
			new Experience(),
			new Experience(),
			new Experience(),
		));
	}

	public function setExperiences($experiences)
	{
		$this->experiences = array();
		
		foreach ($experiences as $experience) {
			$this->experiences[] = $experience;
		}
	}
}