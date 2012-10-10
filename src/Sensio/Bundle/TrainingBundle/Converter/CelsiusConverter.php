<?php

namespace Sensio\Bundle\TrainingBundle\Converter;

class CelsiusConverter
{
	private $value;

	public function __construct($value)
	{
		$this->value = (float) $value;
	}

	public function toFahrenheit()
	{
		return ($this->getValue() * 9) / 5 + 32;
	}

	public function getValue()
	{
		return $this->value;
	}
}