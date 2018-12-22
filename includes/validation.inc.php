<?php
error_reporting(E_ALL ^ E_NOTICE);

/************Definition RegEx************/

// RegEx text
$reg_ex_text = "/^([a-zA-ZüÜäÄöÖéèàâç]){1}?([a-zA-ZüÜäÄöÖéèàâç\-\.\s])*$/";
// RegEx street
$reg_ex_street = "/^([0-9a-zA-ZüÜäÄöÖéèàâç]){1}?([0-9a-zA-ZüÜäÄöÖéèàâç\-\.\,\s])*$/";
// RegEx zip
$reg_ex_zip = "/^([0-9]{4,5})$/";
// RegEx email
//$reg_ex_email = "/^([a-zA-Z0-9_\.\-])+@([a-zA-Z0-9_\.\-)*([a-zA-Z0-9]{2,})\.([a-zA-Z]{2,6}|[0-9]{1,3})$/";
$reg_ex_email="/^([a-zA-Z0-9_\.\-])+@([a-zA-Z0-9_\.\-]*([a-zA-Z0-9\-]{2,})\.([a-zA-Z]{2,6}))*$/";
// RegEx phone
$reg_ex_phone = "/^([0-9\s\(\)\+\-\/]{9,30})$/";
// RegEx remark

/************Validation************/

// Validate forename
if (!isset($_POST['forename']) || !preg_match($reg_ex_text, $_POST['forename']) || !$_POST['forename']) {
	$error['forename'] = '<p class="error" id="error1">Eingabefehler Vorname</p>';
	$css['forename'] = "invalide";
} else {
		$css['forename'] = "";
}
// Validate surname
if (!isset($_POST['surname']) || !preg_match($reg_ex_text, $_POST['surname']) || !$_POST['surname']) {
	$error['surname'] = '<p class="error" id="error2">Eingabefehler Nachname</p>';
	$css['surname'] = "invalide";
}else {
		$css['surname'] = "";
}
// Validate street
if (!isset($_POST['street']) || !preg_match($reg_ex_street, $_POST['street']) || !$_POST['street']) {
	$error['street'] = '<p class="error" id="error3">Eingabefehler Strasse</p>';
	$css['street'] = "invalide";
}else {
		$css['street'] = "";
}
// Validate zip
if (!isset($_POST['zip']) || !preg_match($reg_ex_zip, $_POST['zip']) || !$_POST['zip']) {
	$error['zip'] = '<p class="error" id="error4">Eingabefehler Postleizahl</p>';
	$css['zip'] = "invalide";
}else {
		$css['zip'] = "";
}
// Validate city
if (!isset($_POST['city']) || !preg_match($reg_ex_text, $_POST['city']) || !$_POST['city'])  {
	$error['city'] = '<p class="error" id="error5">Eingabefehler Ort</p>';
	$css['city'] = "invalide";
}else {
		$css['city'] = "";
}
// Validate email
if (!isset($_POST['email']) || !preg_match($reg_ex_email, $_POST['email']) || !$_POST['email']) {
	$error['email'] = '<p class="error" id="error6">Eingabefehler E-Mail</p>';
	$css['email'] = "invalide";
}else {
		$css['email'] = "";
}
// Validate phone
if (!isset($_POST['phone']) || !preg_match($reg_ex_phone, $_POST['phone']) || !$_POST['phone']) {
	$error['phone'] = '<p class="error" id="error7">Eingabefehler Telefon</p>';
	$css['phone'] = "invalide";
}else {
		$css['phone'] = "";
}
// Validate remark
if (trim($_POST['remark'] == "")) {
	$error['remark'] = '<p class="error" id="error8">Kein Text in der Mitteilung</p>';
	$css['remark'] = "invalide";
}else {
		$css['remark'] = "";
}
// Error message
if ($error) {
	$error['message'] = 'Eingaben unvollständig';
}
?>