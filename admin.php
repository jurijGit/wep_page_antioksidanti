////// <a href="login.php">Login</a> ----- <a href="admin.php?logout=1">Logout</a> \\\\\\
<?php session_start();

//login	

if (isset($_POST['username']) and isset($_POST['pass'])){	
	$_SESSION['pass'] = $_POST['pass'];
	$_SESSION['username'] = $_POST['username'];
	$_SESSION['servername'] = "localhost";
	$_SESSION['dbname'] = "aobaza";	
	$_SESSION['loggeding'] = 1;
}
//za logout
if(isset($_GET["logout"])){ 
	$_SESSION['loggeding'] = 0;
	session_destroy();
}
if(isset($_SESSION['loggeding'])){
	if($_SESSION['loggeding'] == 1){
		$conn = new mysqli($_SESSION['servername'], $_SESSION['username'], $_SESSION['pass'],$_SESSION['dbname']);
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			} 
			echo "Connected successfully -- ";

		//izbris koncerta iz baze
		if(isset($_GET['izbrisi'])){
				if($_GET['izbrisi'] != null){
					$a = $_GET['izbrisi'];
					$sql = "DELETE FROM koncert WHERE id=".$a."";
					$conn->query($sql);
					echo "<b>Koncert izbrisan</b>";
				}
		}
			
		//dodajanje koncerta v bazo
		if(isset($_GET['add'])){
			if($_GET['add'] == 1){
				$a = $_GET['add'];
				if(!isset($_POST['dodajkoncert'])){
					$ime = $_POST['ime'];
					$datum = $_POST['datum'];
					$ura = $_POST['ura'];
					$fb = $_POST['fb'];
					$opis = $_POST['opis'];
					$sql = "INSERT INTO `koncert`(`ime`, `datum`, `ura`, `opis`, `fb`) VALUES ('".$ime."','".$datum."','".$ura."','".$opis."','".$fb."')";
					$conn->query($sql);
					echo "<b>Koncert dodan</b>";
				}
			}
		}



		echo '<form action="admin.php?add=1" method="post" name="dodajkoncert">
			<input type="text" name="ime" id="ime" value="Ime" /><br>
			<input type="text" name="datum" id="datum" value="datum" /> YYYY-MM-DD<br>
			<input type="text" name="ura" id="ura" value="ura" /><br>
			<input type="text" name="fb" id="fb" value="fb" /><br> 
			<textarea name="opis" rows="8" id="opis" >Opis</textarea><br>	
			<input type="submit" name="submit" value="Dodaj" />
		</form>
		';


		//izpis iz baze koncertov
		$sql = "SELECT * FROM koncert";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
				echo "<b>Koncert</b> <a href=admin.php?izbrisi=". $row["id"].">izbriši</a> <br>Ime: " . $row["ime"]. " <br> Datum: " . $row["datum"]. " <br>Ura: " . $row["ura"]." <br>Opis: " . $row["opis"]. " <br>FB: ". $row["fb"]."<br><br>";
			}
		} else {
			echo "0 rezultatov";
		}
	}else{
		echo "<br>Se bo treba prijavit!";
	}
}else{
	echo "<br>Se bo treba prijavit!";
}
 ?>

