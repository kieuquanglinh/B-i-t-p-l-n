<?php 

	function checkSignUp($value, $type = 'email') {
		switch ($type) {
			case 'email':
				$pattern = '#^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$#';
				break;
			case 'password':
				$pattern = '#^[a-z0-9_-]{6,18}$#';
				break;
			case 'username':
				$pattern = '#^[a-z0-9_-]{3,16}$#' ;
				break;
			case 'website':
				$pattern = '#^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$#';
				break;
		}
		$flag = preg_match($pattern, $value);
		return $flag;
	}

 ?>