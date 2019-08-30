<?php

include_once('_inc/routes.php');
include_once('_inc/helpers.php');

if(!isset($title)){
	$title = "Nom du site";
}
if(!isset($description)) {
	$description = "Description du site";
}
$saison = !isset($_GET['saison'])? 1 : $_GET['saison'];


