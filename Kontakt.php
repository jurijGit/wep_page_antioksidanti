<script> <!-- scripta da se skrije tekst na klik v imputih !-->
	function onBlur(el) {
		if (el.value == '') {
			el.value = el.defaultValue;
		}
	}
	function onFocus(el) {
		if (el.value == el.defaultValue) {
			el.value = '';
		}
	}
</script> 

<div id="bioslika">
	<img src="image/kontaktimg.jpg" width="480" height="320">
</div>
<div id="kontaktform">
	Pošljite nam email ali pokličite na +38640805555<br>
<form action="posljiemail.php" method="post" name="emailform">
	<input type="text" name="name" id="name" value="Ime" onblur="onBlur(this)" onfocus="onFocus(this)"/><br>
	<input type="text" name="email" id="email" value="Email" onblur="onBlur(this)" onfocus="onFocus(this)"/><br>
	<textarea name="message" rows="8" id="message" onblur="onBlur(this)" onfocus="onFocus(this)">Sporočilo</textarea><br>
	<input type="submit" name="submit" value="Pošlji" />
</form>
</div>
<!-- EMAIL JE ŠE ZA PORIHTAT DA SE POŠLJE-->
