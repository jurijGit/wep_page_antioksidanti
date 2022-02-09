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

<div id="trgovinawrapper">
<div id="izdelek">
	<div id="trgovinaslikaizdelka">
		<img src="image/cdcover.jpg" width="120px" height="120px">
	</div>
	<div id="izdelekopis">
		<div id="tnaslov">CD Parfum in plastika</div>
		<div id="tcena">Cena: 10€ + poštnina</div>
		<div id="topis">CD Parfum in plastika skupine Antioksidanti.</div>
		<div id="tgumb"><button class="gumtrg" id="myBtn">Naročilnica</button></div>
	</div>
</div>

<div id="izdelek">
	<div id="trgovinaslikaizdelka">
		<img src="image/kontaktimg2.jpg" width="120px" height="100px">
	</div>
	<div id="izdelekopis">
		<div id="tnaslov">Kratka majica</div>
		<div id="tcena">Cena: 10€  + poštnina</div>
		<div id="topis">Kratka ženska/moška majica v dimenzijah S,M,L in XL. Poleti je v njej hladno. Pozimi pa jo še eskimi ne zamenjajo za medvedjo kožo.</div>
		<div id="tgumb"><button class="gumtrg" id="myBtn1">Naročilnica</button></div>
	</div>
</div>

<div id="izdelek">
	<div id="trgovinaslikaizdelka">
		<img src="image/cdcover.jpg" width="120px" height="120px">
	</div>
	<div id="izdelekopis">
		<div id="tnaslov">CD Parfum in plastika + Majica</div>
		<div id="tcena">Cena: 15€  + poštnina</div>
		<div id="topis">CD parfum in plastika in kratka majica po izbiri. </div>	
		<div id="tgumb"><button class="gumtrg" id="myBtn2">Naročilnica</button></div>	
	</div>
</div>

	
	
<div id="myModal" class="modal">
	<!-- vsebina ko pritisneš na gum -->
	<div class="modal-content">
		<span class="close">&times;</span>
		Prek obrazca nam napišite kaj želite naročiti. Izbrane artikle vam bomo v najkrajšem času poslali po pošti. Način plačila je po povzetju. 
		<form action="posljiemail.php" method="post" name="emailform">
			<input type="text" name="name" id="name" value="Vaš naslov za dostavo" onblur="onBlur(this)" onfocus="onFocus(this)"/><br>
			<input type="text" name="email" id="email" value="Email" onblur="onBlur(this)" onfocus="onFocus(this)"/><br>
			<textarea name="message" rows="8" id="message" onblur="onBlur(this)" onfocus="onFocus(this)">Kaj želite naročiti</textarea><br>
			<input type="submit" name="submit" value="Pošlji" />
		</form>
		
	</div>
</div>
<script>
// Get the modal
var modal = document.getElementById('myModal');
// Get the button that opens the modal
var btn = document.getElementById("myBtn");
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
// When the user clicks on the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}
// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<script>
var modal = document.getElementById('myModal');
var btn = document.getElementById("myBtn1");
var span = document.getElementsByClassName("close")[0];
btn.onclick = function() {
    modal.style.display = "block";
}
span.onclick = function() {
    modal.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<script>
var modal = document.getElementById('myModal');
var btn = document.getElementById("myBtn2");
var span = document.getElementsByClassName("close")[0];
btn.onclick = function() {
    modal.style.display = "block";
}
span.onclick = function() {
    modal.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</div>