<?php

const USER_ROLE_ADMIN = 1;
const USER_ROLE_LABELATOR = 2;
const USER_ROLE_VALIDATOR = 3;
const USER_ROLE_INPUTOR = 4;

if (! function_exists('calculate_age')) {
	function calculate_age($date_of_birth): int
	{
		$tz  = new DateTimeZone('Asia/Makassar');
		$format_birth = format_birth($date_of_birth);
		return DateTime::createFromFormat('d-m-Y', $format_birth, $tz)
			->diff(new DateTime('now', $tz))->y;
	}
}

if (! function_exists('format_birth')) {
	function format_birth($date_of_birth): string
	{
		$birth_date = explode("-", $date_of_birth);
		return "{$birth_date[2]}-{$birth_date[1]}-{$birth_date[0]}";
	}
}
