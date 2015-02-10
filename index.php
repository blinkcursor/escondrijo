<?php 
$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2); // this is the lang from the browser

if ($lang == "es") 
{
	include('es_index.html');
}
else
{
	include('en_index.html');
}
?>