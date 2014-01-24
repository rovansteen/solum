<?php namespace Acme\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Acme\Model\LeapYear;

Class LeapYearController 
{
	public function indexAction(Request $request, $year = null)
	{
		$leapyear = new LeapYear();
		if($leapyear->isLeapYear($year)) {
			return "Yep, this is a leap year!";
		}

		return "Nope, this is not a leap year!";
	}
		
}
