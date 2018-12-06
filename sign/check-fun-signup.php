<?php 
	function checkSignUp($value, $type = 'email') {
		switch ($type) {
			case 'username':
				$pattern = '#^[a-z0-9_-]{3,16}$#' ;
				break;
			case 'password':
				$pattern = '#^[a-z0-9_-]{6,36}$#';
				break;
		}
		$flag = preg_match($pattern, $value);
		return $flag;
	}
 ?>