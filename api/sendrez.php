<!DOCTYPE html>
<html> 
	<head>
		<title>Autogara Trans-Express</title>
		<meta charset=utf-8" />
		<link href="../css/style.css" rel="stylesheet" type="text/css" />
		<link rel="shortcut icon" type="../image/x-icon" href="images/favicon.png" />
		<meta charset="utf-8"/>
	</head>
	<body>
		<div id="header">
			<div class="antet">
				<div ><a>
					<br />
					<img class="logo" src="../imagini/logo1.png" height="120" width="660" alt="logo"/>
				</a></div>
			</div>
		</div>
		
		<section class="sectiune">
			<?php
					$exist = 0;
					$json_data = array();
					$formdata = array();
				if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['nume']) && isset($_POST['telefon']) && isset($_POST['bilete']))
				{
					$nume = $_POST['nume'];
					$telefon = $_POST['telefon'];
					$bilete = $_POST['bilete'];
					$bilete = json_decode($bilete);

					$newar = array(
						'nume'=> $_POST['nume'],
						'telefon'=> $_POST['telefon'],
						'bilete'=>$bilete
					);
					$json = file_get_contents('../json/rezervari.json');
					$json_data = json_decode($json, true);
					if($json_data==null)
					{
						$json_data=array();
					}
					array_push($json_data,$newar);
					$formdata=$json_data;
					$jsondata = json_encode($formdata, JSON_PRETTY_PRINT);
					if(file_put_contents('../json/rezervari.json', $jsondata)){
						echo "<br /><p style='color: purple; font-family:Verdana, Helvetica, sans-serif; font-size: 20px;'> Rezervare efectuată cu succes! </p>";
					} else {
						echo "<br /><p style='color: tomato; font-family:Verdana, Helvetica, sans-serif; font-size: 20px;'> \nRezervare eșuată! </p>";
					}
				}
?>
		</section>
		<hr>
		<footer>
			<br />
			<p>Copyright &copy; 2018 <a href="#">Trans-Express</a>. Toate drepturile rezervate. Reproducerea conținutului din acest site este permisă numai cu acordul Trans-Express. Trans-Express și logo-ul acestora sunt mărci înregistrate ale Trans-Express.</p>
			<br />
		</footer>
	</body>
</html>