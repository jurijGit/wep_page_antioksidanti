<?php
include('mysql.php');
?>

<img src="image/koncertiimg.jpg">	
<br><br>

<?php
//izpis iz baze koncertov
$sql = "SELECT * FROM koncert ORDER BY FORMAT( datum, 'DD-MM-YYYY') ASC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		echo"<div id=koncertwrapper>
				<div id=koncertdatum> 
					<div id=koncertdatumdan>".date('d-m-Y',strtotime($row['datum']))."
						<div id=koncertdatumura>Ob ".$row["ura"]."	
						</div>
					</div>
				</div>
				<div id=koncertimeopis> 
					<div id=koncertfb>
						<form  action=".$row["fb"]." target=_blank>
						<button class=btn type=submit>Facebook</button>
						</form>
					</div>	
					<div id=koncertimeopisnaslov>
						".$row["ime"]."
					</div>	
					<div id=koncertimeopistekst>".$row["opis"]."
					</div>		
				</div>	
			</div>"	;				
   }
} else {
    echo "Trenutno ni koncertov";
}

$conn->close(); 
?>
