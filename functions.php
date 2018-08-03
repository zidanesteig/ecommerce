<?php

use \Hcode\Model\User;

function formatPrice($vlprice){

	if (!$vlprice > 0) $vlprice = 0;
	return number_format($vlprice, 2, ",", ".");

}

function post($key)
{
	return str_replace("'", "", $_POST[$key]);
}
function get($key)
{
	return str_replace("'", "", $_GET[$key]);
}

function checkLogin($inadmin = true)
{

return User::checklogin($inadmin);

}

function getUserName()
{

$user = User::getFromSession();
return $user->getdesperson();

}

 ?>
