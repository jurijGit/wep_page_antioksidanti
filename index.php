<?php session_start();?>
<html>
	<head>
		<?php 
			if(isset($_GET['id'])){
				echo "<title>Antioksidanti - ".$_GET['id']."</title>";
			}else{
				echo "<title>Antioksidanti </title>";
			}
		?>
		<meta charset="UTF-8">
		<link href="style.css"  rel="stylesheet" type="text/css"> 
	</head>
	<body>
	<div id="wrapper">
<!-- glava + logo -->
		<div id="header">
			<img class="logo" src="image/logo.png">
			
			<div id="social">
				<a href="https://www.facebook.com/antioksidanti/" target="blank"><img class="social" src="image/fb.png"></a>
				<a href="https://www.youtube.com/channel/UCDQ7PMEeo1w-53SmBO7Hyog" target="blank"><img class="social" src="image/yt.png"></a>
				<a href="https://soundcloud.com/antioksidanti" target="blank"><img class="social" src="image/sc.png" ></a>
			</div>	
		</div>
		<hr/>
	
<!-- menu -->
		<div id="menu">
			<table class="menu">
				<tr>
					<td class="menu"> <img class="pom" src="image/menukos.png"><a href="index.php">DOMOV</a></td>					
					<td class="menu"> <img class="pom" src="image/menukos.png"><a href="index.php?id=Koncerti">KONCERTI</a></td>		
					<td class="menu"> <img class="pom" src="image/menukos.png"><a href="index.php?id=Biografija">BIO</a></td>		
					<td class="menu"> <img class="pom" src="image/menukos.png"><a href="index.php?id=Media">MEDIA</a></td>		
					<td class="menu"> <img class="pom" src="image/menukos.png"><a href="index.php?id=Trgovina">TRGOVINA</a></td>		
					<td class="menu"> <img class="pom" src="image/menukos.png"><a href="index.php?id=Kontakt">KONTAKT</a></td>		
				</tr>
			</table>	


		</div>
<!-- konec menu -->
		<hr/>
		<br>
		<div id="vsebina">
			<?php		
			if(isset($_GET['id'])){
					if($_GET['id'] != null){
						include($_GET['id'].'.php');
					} else {
						include('domov.php');
				}
			}
			?>	
		</div>
	</div>
	<hr>
	</body>


	<footer>

	</footer>
</html>