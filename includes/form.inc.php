<?php
// error reporting local server off
error_reporting(E_ALL ^ E_NOTICE);

echo<<<FORM
<form id="contact" name="contact" method="post" action="{$_SERVER['PHP_SELF']}" enctype="multipart/form-data">
	<fieldset class="info">
  	<legend>Kontaktdaten</legend>
    <div>
			<label for="forename">Vorname*<span class="hideme">Pflichtfeld</span></label>
      <input type="text" class="{$css['forename']}" name="forename" id="forename" value="{$_POST['forename']}" aria-describedby="error1"/>
			{$error['forename']}
		</div>
		<div>
     	<label for="surname">Nachname*<span class="hideme">Pflichtfeld</span></label>
     	<input type="text" class="{$css['surname']}" name="surname" id="surname" value="{$_POST['surname']}" aria-describedby="error2"/>
			{$error['surname']}
		</div>
		<div>
     	<label for="street">Strasse*<span class="hideme">Pflichtfeld</span></label>
			<input type="text" class="{$css['street']}" name="street" id="street" value="{$_POST['street']}" aria-describedby="error3"/>
			{$error['street']}
		</div>
		<div>
     	<label for="zip">Postleizahl*<span class="hideme">Pflichtfeld</span></label>
    	<input type="text" class="{$css['zip']}" name="zip" id="zip" value="{$_POST['zip']}" aria-describedby="error4"/>
			{$error['zip']}
		</div>
		<div>
     	<label for="city">Ort*<span class="hideme">Pflichtfeld</span></label>
     	<input type="text" class="{$css['city']}" name="city" id="city" value="{$_POST['city']}" aria-describedby="error5"/>
			{$error['city']}
		</div>
		<div>
     	<label for="email">E-Mail*<span class="hideme">Pflichtfeld</span></label>
     	<input type="email" class="{$css['email']}" name="email" id="email" value="{$_POST['email']}" aria-describedby="error6"/>
			{$error['email']}
		</div>
		<div>
     	<label for="phone">Telefon*<span class="hideme">Pflichtfeld</span></label>
     	<input type="text" class="{$css['phone']}" name="phone" id="phone" value="{$_POST['phone']}" aria-describedby="error7"/>
			{$error['phone']}
		</div>
		<div>
			<label for="remark">Mitteilung<span class="hideme">Pflichtfeld</span></label>
			<textarea name="remark" class="{$css['remark']}" id="remark" aria-describedby="error8" row="4">{$_POST['remark']}</textarea>
			{$error['remark']}
		</div>
    <input type="submit" name="submit" id="submit" value="Senden"/>
  </fieldset>
</form>
FORM
?>