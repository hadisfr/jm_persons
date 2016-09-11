<?php
/*
	jm_persons
	2016 © Hadi Safari
*/
// No direct access
defined("_JEXEC") or die;
// Include the syndicate functions only once
require_once dirname(__FILE__) . "/helper.php";

$name = $params->get("name");
$role = $params->get("role");
$ava = $params->get("avatar");
$res = "<li>" . $params->get("resume1") . "</li>";
$res .= "<li>" . $params->get("resume2") . "</li>";
$res .= "<li>" . $params->get("resume3") . "</li>";
$res .= "<li>" . $params->get("resume4") . "</li>";
$res .= "<li>" . $params->get("resume5") . "</li>";
$ref = $params->get("link");
$person = ModJmPersons::getPerson($name, $role, $ava, $res, $ref);
require JModuleHelper::getLayoutPath("jm_persons");
?>