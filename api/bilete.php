<!--<!DOCTYPE html>
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
		
		<section class="sectiune">-->
			<?php
			session_start();
			$json = file_get_contents('../json/bilete.json');
			//Decode JSON
			$data = json_decode($json);
			/*
			if ($_SERVER['REQUEST_METHOD'] == "GET" && isset($_GET['locuri']))
			{*/
				$locuri_selectate=$_GET['bilete'];
				print_r($locuri_selectate);
				$json_data = array();
				$formdata = array();
				$newar=array();
				$locuri_selectate = array();
				
				foreach ($locuri_selectate as $loc) {
					try{
					$newar = = array(
						'loc'=> $loc
					);
					$json = file_get_contents('../json/bilete.json');
					$json_data = json_decode($json, true);
					if($json_data==null)
					{
						$json_data=array();
					}
					array_push($json_data,$newar);
					$formdata=$json_data;
					$jsondata = json_encode($formdata, JSON_PRETTY_PRINT);
					file_put_contents('../json/bilete.json', $jsondata);
					}
					catch (Exception $e) {
		           $message = "$e->getMessage()";  
		   		}
				}
				echo $locuri_selectate;
			
			?><!--
		</section>
		<hr>
		<footer>
			<br />
			<p>Copyright &copy; 2018 <a href="#">Trans-Express</a>. Toate drepturile rezervate. Reproducerea conținutului din acest site este permisă numai cu acordul Trans-Express. Trans-Express și logo-ul acestora sunt mărci înregistrate ale Trans-Express.</p>
			<br />
		</footer>
	</body>
</html>-->