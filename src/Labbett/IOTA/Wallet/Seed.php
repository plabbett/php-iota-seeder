<?php
namespace Labbett\IOTA\Wallet;

class Seed
{
	public static function generate()
	{
		$seed = '';

		$allowed_characters = [
			'A','B','C','D','E','F','G','H','I',
			'J','K','L','M','N','O','P','Q','R',
			'S','T','U','V','W','X','Y','Z',
			'9'
		];

		//is simply counting up after "securly generating" an allowed character enough?
		for( $i = 0; $i < 81; $i++ )
		{
			// Not cryptographically secure.
			// Better in 7.0, but still needs improved.
			// $seed .= $allowed_characters[ array_rand( $allowed_characters ) ];

			// Cryptographically secure. (7.1 + built in)
			// http://php.net/manual/en/function.random-int.php
			// this still feels shallow to me since 27 is a small range
			$seed .= $allowed_characters[ random_int(0, count( $allowed_characters) - 1 ) ];

		}
		return $seed;
	}
}
