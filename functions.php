<?php

use \Hcode\Model\User;

function formatPrice(float $vlprice){

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
