<?php
//On demarre les sessions pour ODYSSEE
session_start();

//  PHP Version 7.2.24-0ubuntu0.18.04.9
// Gardez-moi une place sur le vaisseau-mère 👽

	$_SESSION['last_version'] = "V2026-03-25.10h00" ; 

	require_once __DIR__."/includes/db.php";

/* 		 
																MMM"""AMV `7MM"""YMM    .g8"""bgd `7MM"""Mq.`7MMF'   `7MF'.M"""bgd `7MMF'  `7MMF'`7MM"""YMM  `7MM"""Mq.  
																M'   AMV    MM    `7  .dP'     `M   MM   `MM. MM       M ,MI    "Y   MM      MM    MM    `7    MM   `MM. 
																'   AMV     MM   d    dM'       `   MM   ,M9  MM       M `MMb.       MM      MM    MM   d      MM   ,M9  
																   AMV      MMmmMM    MM            MMmmdM9   MM       M   `YMMNq.   MMmmmmmmMM    MMmmMM      MMmmdM9   
																  AMV   ,   MM   Y  , MM.           MM  YM.   MM       M .     `MM   MM      MM    MM   Y  ,   MM  YM.   
																 AMV   ,M   MM     ,M `Mb.     ,'   MM   `Mb. YM.     ,M Mb     dM   MM      MM    MM     ,M   MM   `Mb. 
																AMVmmmmMM .JMMmmmmMMM   `"bmmmd'  .JMML. .JMM. `bmmmmd"' P"Ybmmd"  .JMML.  .JMML..JMMmmmmMMM .JMML. .JMM.
																									  _                        
																									 |_   _|_ ._ _. ._   _ _|_ 
																									 |_ >< |_ | (_| | | (/_ |_  V5 - START -> 08 decembre 2023 
																											   
																	******************************************* 
																									Developed by:  ZeCrusher <zecrusher@gmail.com>  
																									
																																										
																														..                                                   
																														  .:..                                               
																															.:o:.                                            
																															   cc.                                           
																					..::ccoc:......                             .:..                                         
																							   :ccoccccc::.                       ....                                       
																								.. ..CCocc::...                 ...:::.               ..                     
																									   .oo::::..:               ..:ooc::.              :.                    
																									  .  oo:::::.::            .::ccoc::  .            .:.                   
																									 ...:.cCc::.              ...:cc::::.. .            .:.                  
																									 ...::.Ccc.              ...::oCoc:::. .            .c:.                 
																									 ...:cc::.               .::::CCo:..               ..c:..                
																			   .:::::::...            :.:::..                .cccco:..                 ...c:.                
																		.:c::...:.:::c::.             :ccooc..             :ooCCOOc.                  ....c:..               
																	:ooo:.::..:c:cccoCOo.             cOO:Oc:.            oOOOOOo. .                 .....:cc.               
																.:.   .          ...:ooo:             :O88Ococ:....:..::cOOOOCc:.:.                 :::::.CCc.               
																				  ... .o:            .O88OO88888COO: oOCO:oOO8O8Ooc.              .::cccooCc.. .             
																					... :c         :co8O8CCoOCCooC: :OoccoocoooCccc::oCc:.:.    :ooccoCCOoc:..         .     
																					 ....:OC:. .c:c8OCococc.....cc  cc..::::cc::::oC:. cCCCCOOCOOOOCCCOOoc.....        .     
																					  .:.c8@@8@oOo:Coc:.:. . ...c:.  ... ..:.:..:C:. :o:cCO88OO8OOOCOo:........       ..     
																					  ..:o8OOCCCoO::c::.    .::::..   ..:c:...:CC:  o:.ccoOCOOOOCc:..                 ..     
																	  :o:.             :OO8Ooo:..:c: ........             .......  c.. .::::ccooCo:.                 .:.     
																 ..:ccoOC:           .:OOooccc.. .:..   .                         ...:...:.:::ooc::.               .::c .    
															   .:::cCCoOOo:        ..oCoo::..... :.                                  .::. .:c::......             .:cc:      
															 :c:cc::::::...c.      :o.:ooc.. .::..                                    ..::.  .:oCOOo:.          :ccooo.         
															:cc.:........... :cCCCOoC8o..::...                                             .c::ccO8Ooc... ..:occCOOOo:.         
														  .:.              ...oOCOOOOococ.  ..                                           .:.:: :COO@88O:cOOO88OCOOCc:..         
														 :.                  .:CCCooc:. .:.                   ...                         .. ..cCOC.o8oc:..coOC::....           
														:                    .:OCccc:.. ..                .::...    ......                :: ..:cccooocc::... . ....            
													   .                     .cCCc:... ::              .:..    .     .   ..                :Cc....cooOc::.. .      .         .  
																.           .  .:ooCoc..              :..    .  ..      ..:..              .:::coCoOOCCCc.                  ..  
															  ...c.          oCc:.   .               c:.    ......... .......            ..  ..::.::c.                    ...   
															 ..:cCOoc.   ..:oCCCoCCc:.              :o. .....:.:.............            .occoCCc:c:::c:...              ::..   
															 :oooCocc.c:coocCOCCo:cc:              .cc:....::..       ........           .:c:c.   :.:c::.             .::.:. 
															:C:...  ..... :coooocc:.c.            ..:c:...:c.            ....             o:. .....:oCoo::...     ..:::..:.. 
														   cc:...       .. .::::c:..:.            ..co...:c:              .              .c. . ..:cooocccccccoCooocc...::.   
														  ::.               .::...cc.             . co::::c:             .              .cc::::.:::ccco.:oc:oCoocc...:...    
														 ::.               .:oCoCo:.                .oc::cc:     ZERG RUSH             .cC::cc:::ccccccooooooOOooc:::::.     
														 :.                    .. . .             .  cooccc:.                          oOoc  .:::c:cccoooCCCoOoc:.:::..      
														.                   .:oOOoc:...              .:Coc:::                        .cCo:.........:::ccoooccocc::::.        
																			.coO8o:..              . ..:co....                      :oCo:..........::::ccoooooc::::..        
																		  :::oCCOOo:..             .... .:coc:..                  .cCoc...........::::coococcccc:..          
																.cOCccoc..:ccCCocoCo:..             ....   .:cco:.             .cCOCo:............:cccccc:::c:::...          
																.Coco:. .....  ..:oococ:             .....    :::ocooc:::ccoooCOOo::::...........::::ccccccccc:.             
																.Co:.           .:ooo:.               ....   .........:::c:ccc:::.............::.::ccooococcc...             
															   .oc:.               .oCOC:. .:       .    ..   . ...   .    . . ............::::::cccooooocc:..               
															   :c.               .:::.::::.               ......... . ..    ...  .......::.:::ccoooooccc::.                  
															   .:.                .::c:.:c                   ................... ......:::::cccccoCoocc:..                   
															   ..                ccoccc:.:c.                   ....:. .....:.......:....::ccccocoCCoc:..                     
															   ..              .::CCCCocc:.::.                     .::.::::::::::..::..:c:cccooCCoo:..                       
																.       .  ..:c::......:c::.co:.         :.           ..:::::::::::.:cocccoococcc::.                         
																	.        .::::..........  ...ooCo:                         ..:.::::c::c:ccoooc:...                           
																		..:c:           ..  .cc:.:oc                          .....:::::::c:::.                              
																		  :c.               .  :cc::cc.                 .             ...... .                               
																		  :o.                 . ...  .cc..                                                                   
																		  .:..                  :c:..   .:::.                                                                
																			:..                 :c:...    ..:::..:                      .                                    
																			 .:                 ccc:::..     .::cc...                                                        
																   .                :ccc:::::..    ..:::c::.                    
																				   .cc:::..:.:::.     .:::...:....             
																				  .coc::..........    :ccc:....                
														  .                     ..ccc::.........    .:cc:...                   
															.:..              .:::::.:.............::.....                    
															   .:..........:::..............:::::...                          
																  :::.:.....::....::::::ccoo:..                               
																	   .::::::::c:::.. ...                                     

																									  _                        
																									 |_   _|_ ._ _. ._   _ _|_ 
																									 |_ >< |_ | (_| | | (/_ |_  V5 - START -> 08 decembre 2023 
																											   
																	******************************************* 
																									Developed by:  ZeCrusher <zecrusher@gmail.com>  
                  

// ************************************************************************************************ 2024 Extranet 			 *****
// *****                   EXTRANET 2024 - Php & Co                                                                          *****
// *******************************************************************************************************************************
// *****              (c) 2016/24 - extranet - zecrusher@gmail.com                                                           *****

License:      free !!!! GNU 
-- jQuery (JavaScript Library)                           http://jquery.com 
-- Bootstrap											 http://getbootstrap.com
*/


// *****************************************************************************
// *****                       Historique des versions                     *****
// *****************************************************************************
// ***** V0.1   	- 2024/07/02 - Premiere version
// *****         	- Ecriture du code en partant de zéro - HTML/PHP/Javascript/bootstrap

// ***** V0.1.1    	- 2025/03/25 - Création des Widgets et 
// *****         	- Ecriture du code en partant de zéro - HTML/PHP/Javascript/bootstrap

// ***** V0.2		- 2026/01/03 - Menu Bulle Rapide et Récapitulatif
// ***** 


/*
	Extranet / 

		├──  apps 				-> C'est ici qu'il y a les WebApps.
		│	├── admin				-> Gestion des comptes de l'Extranet
		│	├── 
		│
		│
		│
		│
		├── ajax 								-> Liste des fichiers .PHP pour calendar, notes, like, theme, rechercher
		│		└──notes						-> Liste des fichers AJAX pour le blocnote 
		├── css									-> css de l'extranet
		│    ├── style.css  					-> mise à jour le 2025-07-10 -  
		│    ├── stylewhite.css  				-> mise à jour le 2025-07-10 -   
		├── fichiers							-> Dossier du module "explorateur de fichier" dans l'extranet
		├── fonts								-> Toutes les polices 
		├── img/								
		│   ├── body							-> fond du site - image des thèmes
		│   ├── carousel/
		│   ├── color-picker
		│   ├── editor
		│   ├── filemanager
		│   ├── gallery	  
		│   ├── icon
		│   └── toolkit.scss
		├── js/
		│   ├── bootstrap/			
		│   └── custom/
		├── pages/
		│   ├── blog 
		│   	└── 
		│   ├── navbar.php <- menu horizontal				
		│   └── sidebar.php <- menu vertical 
		├── log/	  
		├── media/	  
		│   ├── bootstrap-entypo.eot
		│   ├── bootstrap-entypo.svg
		│   ├── bootstrap-entypo.ttf
		│   ├── bootstrap-entypo.woff
		│   └── bootstrap-entypo.woff2
		└── php

		Petite Rubrique d'aide : 

		$pdo = ConnexionPDO(); // ma fonction de connexion XD !! 
		$stmt = $pdo->query("SELECT * FROM membre"); <- Par exemple pour avoir tout les membres de l'Extranet.

		- L'Avatar du compte : 
-----------
		$_SESSION['Global_avatarData'] = [];

		$sql = "SELECT id, avatarData FROM membre";
		$stmt = $pdo->query($sql);

		while ($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
			$_SESSION['Global_avatarData'][$data['id']] = $data['avatarData'];
		}



Et si on changer un peu les couleurs de base !?
Bleue : 
	SAUL : #1b84ff
	GOOD : #4fc9da

Rouge :  
	SAUL : #F8285A
	GOOD : #F06445
*/	
	
	if (!isset($_SESSION['login']) || ($_SESSION['login']=="")) {
		header ('Location: authentication/sign-up/index.php?mode='.$_GET['mode']);
		exit();
	}

	$file = $_SERVER['DOCUMENT_ROOT']."/odyssee/pages/connexion.php";
	if (file_exists($file)) { include $file; } else {	echo "Le fichier navbar est introuvable.";	}		
	
	$file = $_SERVER['DOCUMENT_ROOT']."/odyssee/pages/fonctions.php";
	if (file_exists($file)) { include $file; } else {	echo "Le fichier fonctions est introuvable.";	}		

 
	// Date du jour
	$today = new DateTime();
	$lastChange = new DateTime($_SESSION['last_password_change']);

	// Vérification simple
	if ($lastChange < $today){
		// Si la date est dépassée → redirection vers le formulaire
		header("Location: /odyssee/authentication/sign-in/new-password.php");
		exit;
	}
	
$pdo = ConnexionPDO();

/* ****************************************************************************************************/ 
            
	if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['titresupport'])) {

		$stmt = $pdo->prepare("INSERT INTO support (
								login,	service,	niveau_urgent,	titresupport,	datesupport,	supportpour,	supportpar,	supportsur,	supporturgent,	support_check,	support_check_amelioration,	support_check_bug,	support_check_creat,	support_via_autre,	notesupport,avancement) 
					VALUES (   :login,	:service,	:niveau_urgent,	:titresupport,	:datesupport,	:supportpour,	:supportpar,:supportsur,:supporturgent,	:support_check,	:support_check_amelioration,:support_check_bug,	:support_check_creat,	:support_via_autre,	:notesupport,'BUGFOOTER')");

		$stmt->execute([
			'login' => $_SESSION['login'],
			'service' => '',
			'niveau_urgent' => $_POST['niveau_urgent'] ?? '',
			'titresupport' => $_POST['titresupport'],
			'datesupport' => $_POST['datesupport'] ?? date('Y-m-d H:i:s'),

			'supportpour' => $_POST['supportpour'] ?? '',
			'supportpar' => $_POST['supportpar'] ?? '',
			'supportsur' => $_POST['supportsur'] ?? '',
			'supporturgent' => $_POST['supporturgent'] ?? '',

			'support_check' => isset($_POST['support_check']) ? '1' : '0',
			'support_check_amelioration' => isset($_POST['support_check_amelioration']) ? '1' : '0',
			'support_check_bug' => isset($_POST['support_check_bug']) ? '1' : '0',
			'support_check_creat' => isset($_POST['support_check_creat']) ? '1' : '0',

			'support_via_autre' => $_POST['support_via_autre'] ?? '',
			'notesupport' => $_POST['notesupport'] ?? ''
		]);
	}

                  
					
					
	if (($_GET['decouverte']!="")&&($_GET['id']!=""))	{
		if ($_GET['decouverte']=="ok") {
			$sql="UPDATE `membre` SET `service` = 'odyssee' WHERE `membre`.`id` = :user_id";
			$stmt = $pdo->prepare($sql);
			$stmt->execute(['user_id' => $_SESSION['monid']]);
		}
	}
	
/* ************************************************ Charger les widgets en données *******************************************/

/* EVENT */

	$sql = "SELECT COUNT(*) AS nb_events FROM odyagenda_events WHERE created_by = :user_id AND YEAR(start_date) = YEAR(CURRENT_DATE)  AND MONTH(start_date) = MONTH(CURRENT_DATE)";

	$stmt = $pdo->prepare($sql);
	$stmt->execute(['user_id' => $_SESSION['monid']]);
	$result = $stmt->fetch(PDO::FETCH_ASSOC);
	$_SESSION['widget_nb_event']= $result['nb_events'];

	$formatter = new IntlDateFormatter('fr_FR', IntlDateFormatter::NONE, IntlDateFormatter::NONE, null,   null, 'MMMM');
	$mois_en_cours=ucfirst($formatter->format(new DateTime()));

/* NOTE */

	$sql = "SELECT COUNT(*) AS nb_notes FROM odynotes WHERE membre_id = :user_id AND corbeille = 'NON' AND brouillon = 'NON'";
	$stmt = $pdo->prepare($sql);
	$stmt->execute(['user_id' => $_SESSION['monid']]);
	$result = $stmt->fetch(PDO::FETCH_ASSOC);
	$_SESSION['widget_nb_note']=$result['nb_notes'];


/* Metéo */


// Récupération des sliders
$query = $pdo->query("SELECT * FROM odyslider WHERE slider_actif = 'OUI' ORDER BY id DESC");
$slides = $query->fetchAll();

$baseUrl = 'https://' . $_SERVER['HTTP_HOST'] . '/desire/fichiers/communs/slider/';

	/**
	 * GESTION DE LA MÉTÉO (Optimisée) - VERSION PDO
	 */
 
	// Récupération des données météo
	$sqlMeteo = 'SELECT * FROM meteo LIMIT 1';
	$stmt = $pdo->query($sqlMeteo);
	$dataMeteo = $stmt->fetch(PDO::FETCH_ASSOC);

	$today = date("Y-m-d");

	if (!$dataMeteo || $dataMeteo['date'] < $today) {
		$url = "https://api.openweathermap.org/data/2.5/forecast?lat=43.4&lon=5.05&appid=bed9f800d6666c45006de21e37fb07de&units=metric&lang=fr&q=Martigues,fr";
		
		$meteo_raw = @file_get_contents($url);

		if ($meteo_raw) {
			$meteo_data_ok = json_decode($meteo_raw, true);

			// Requête préparée PDO
			$stmt = $pdo->prepare("UPDATE meteo SET date = :date, meteo_json = :json WHERE id = 1");
			$stmt->execute([
				':date' => $today,
				':json' => $meteo_raw
			]);
		}

	} else {
		$meteo_data_ok = json_decode($dataMeteo['meteo_json'], true);
	}

	// Traitement des prévisions
	$forecasts = [];

	if (isset($meteo_data_ok['list'])) {
		foreach ($meteo_data_ok['list'] as $entry) {
			// On ne prend que la prévision de 12:00:00 pour chaque jour
			if (strpos($entry['dt_txt'], '12:00:00') !== false) {
				$forecasts[] = $entry;
			}
		}
	}

// Limite à 5 jours
$forecasts = array_slice($forecasts, 0, 5);
	// Fonction utilitaire
	function nom_jour($date) {
		$jour_semaine = array(
			1 => "Lundi",
			2 => "Mardi",
			3 => "Mercredi",
			4 => "Jeudi",
			5 => "Vendredi",
			6 => "Samedi",
			7 => "Dimanche"
		);

		$timestamp = strtotime($date);
		return $jour_semaine[date("N", $timestamp)];
	}

/* Widget */

	$sql = "SELECT COUNT(*) AS nb_Kanban FROM odykanban_project WHERE owner_id = :user_id";
	$stmt = $pdo->prepare($sql);
	$stmt->execute(['user_id' => $_SESSION['monid']]);
	$result = $stmt->fetch(PDO::FETCH_ASSOC);
	$_SESSION['widget_nb_kanban_projet']=$result['nb_Kanban'];

	$sql = "SELECT COUNT(*) AS nb_Kanban_item FROM odykanban_item WHERE created_by = :user_id";
	$stmt = $pdo->prepare($sql);
	$stmt->execute(['user_id' => $_SESSION['monid']]);
	$result = $stmt->fetch(PDO::FETCH_ASSOC);
	$_SESSION['widget_nb_Kanban_item']=$result['nb_Kanban_item'];	
	
	$sql = "SELECT COUNT(*) AS nb_Kanban_board FROM odykanban_board WHERE owner_id = :user_id";
	$stmt = $pdo->prepare($sql);
	$stmt->execute(['user_id' => $_SESSION['monid']]);
	$result = $stmt->fetch(PDO::FETCH_ASSOC);
	$_SESSION['widget_nb_Kanban_board']=$result['nb_Kanban_board'];



/* Carousel Widget Tâche */

	$sql = "SELECT task_id,	task_title,	task_date_creation,	task_start_date,task_end_date, task_time_estimate, task_time_spent,	task_color FROM odytasks WHERE task_user = ?	  AND task_archived = 0 ORDER BY   task_end_date IS NULL,  task_end_date ASC LIMIT 5";
	$stmt = $pdo->prepare($sql);
	$stmt->execute([$_SESSION['monid']]);
	$tasks = $stmt->fetchAll(PDO::FETCH_ASSOC);
	$totalTasks = count($tasks);

	$now = time();

	foreach ($tasks as &$task) {

		if (!empty($task['task_start_date']) && !empty($task['task_end_date'])) {

			$start = strtotime($task['task_start_date']);
			$end   = strtotime($task['task_end_date']);

			if ($now <= $start) {
				$task['time_percent'] = 0;
			}
			elseif ($now >= $end) {
				$task['time_percent'] = 100;
			}
			else {
				$totalDuration   = $end - $start;
				$elapsedDuration = $now - $start;
				$task['time_percent'] = round(($elapsedDuration / $totalDuration) * 100);
			}

		} else {
			// Pas de dates → cercle vide
			$task['time_percent'] = 0;
		}
	}
	unset($task);

	if ($task['time_percent'] >= 100) {
		$task['time_color'] = '#F1416C'; // Du rouge
	} elseif ($task['time_percent'] >= 75) {
		$task['time_color'] = '#FFC700'; // de l'orange (pas le fruit lol )
	} else {
		$task['time_color'] = '#4FC9DA'; // et du bleuuuuuu !!! 
	}


/* Carousel Widget Message */

	$sql="SELECT id, id_auteur,	auteur,	objet,	message, date_reponse FROM livre_intra_reponses WHERE correspondance_sujet = 1 AND statut_message != 'deleted' ORDER BY date_reponse DESC LIMIT 10";

	$stmt = $pdo->prepare($sql);
	$stmt->execute([$_SESSION['monid']]);
	$messages = $stmt->fetchAll(PDO::FETCH_ASSOC);

	$totalMessages = count($messages);

?>

<!DOCTYPE html>
<html lang="fr" >
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<?php
	$file = $_SERVER['DOCUMENT_ROOT']."/odyssee/pages/head.php";
	if (file_exists($file)) { include $file; } else {	echo "Le fichier head est introuvable.";	}		
?>
<!--end::Head-->

<!--begin::Body-->
<body	id="kt_app_body" 
		data-kt-app-header-fixed="true" 
		data-kt-app-header-fixed-mobile="true" 
		data-kt-app-sidebar-enabled="true" 
		data-kt-app-sidebar-fixed="true" 
		data-kt-app-sidebar-hoverable="true" 
		data-kt-app-sidebar-push-toolbar="true" 
		data-kt-app-sidebar-push-footer="true" 
		data-kt-app-toolbar-enabled="true" 
		data-kt-app-aside-enabled="true" 
		data-kt-app-aside-fixed="true" 
		data-kt-app-aside-push-toolbar="true" 
		data-kt-app-aside-push-footer="true"  
		class="app-default" 
		data-kt-app-sidebar-minimize="on">
			
	<!--begin::Theme mode setup on page load-->
	<script>
		var defaultThemeMode = "light";
		var themeMode;

		if ( document.documentElement ) {
			if ( document.documentElement.hasAttribute("data-bs-theme-mode")) {
				themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
			} else {
				if ( localStorage.getItem("data-bs-theme") !== null ) {
					themeMode = localStorage.getItem("data-bs-theme");
				} else {
					themeMode = defaultThemeMode;
				}			
			}
			if (themeMode === "system") {
				themeMode = window.matchMedia("(prefers-color-scheme: light)").matches ? "dark" : "light";
			}
			document.documentElement.setAttribute("data-bs-theme", themeMode);
		}            
	</script>
		
	<!--end::Theme mode setup on page load-->  
	
	<!-- V2026 -->        
			
	<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
		<div class="app-page flex-column flex-column-fluid" id="kt_app_page">
			<div class="app-header d-flex flex-column flex-stack" id="kt_app_header">
				<div class="d-flex align-items-center flex-stack flex-grow-1">
					<?php 
						$file = $_SERVER['DOCUMENT_ROOT']."/odyssee/pages/logo.php";
						if (file_exists($file)) { include $file; } else {	echo "Le fichier navbar est introuvable.";	}										
						
						$file = $_SERVER['DOCUMENT_ROOT']."/odyssee/pages/navbar.php";
						if (file_exists($file)) { include $file; } else {	echo "Le fichier navbar est introuvable.";	}						
					?>						
				</div>
				<div class="app-header-separator"></div>
			</div>
 
			<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper" style="margin-right=20px;">
					
			<?php 
				$file = $_SERVER['DOCUMENT_ROOT']."/odyssee/pages/sidebar.php";
				// if ($_SESSION['mode_eco']=="full") 
				if (file_exists($file)) { include $file; } else {	echo "Le fichier navbar est introuvable.";	}						
			?>
					
					
			<!-- ********************************************************************************************************************************** -->
			<!-- begin::Main begin::Main begin::Main begin::Main begin::Main begin::Main begin::Main begin::Main begin::Main begin::Main begin::    -->
			<!-- ********************************************************************************************************************************** -->
			<!--begin::Main-->
				<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
					<!--begin::Content wrapper-->
					<div class="d-flex flex-column flex-column-fluid">
						
					
					<?php 
						$fil_ariane="Ma page d'accueil";
						$grand_titre="Bonjour ".$_SESSION['login'];
						
						$file = $_SERVER['DOCUMENT_ROOT']."/odyssee/pages/bonjour.php";
						// if ($_SESSION['mode_eco']=="full") 
						if (file_exists($file)) { include $file; } else {	echo "Le fichier d'accueil est introuvable.";	}						
					?>

						<div id="kt_app_content" class="app-content flex-column-fluid">
							<!--begin::Content container-->
							<div id="kt_app_content_container" class="app-container container-fluid">
							
<!-- MODE COMPLET -->
<!-- ********************************************************************************************************************************** -->
			
								<div class="row gx-5 gx-xl-10">
								<!--begin::Col-->
								
									<div class="col-xl-4 mb-10">       
										<!--begin::Lists Widget 19-->
										
										<div class="card card-flush h-xl-100">   
											
											
											<!-- <div class="d-flex flex-column flex-center bgi-no-repeat rounded-top px-9 py-10" style="background-image:url('https://extranet.martigues-tourisme.com/odyssee/assets/media/misc/menu-header-bg.jpg')">
																
																<h3 class="text-white fw-semibold mb-3">Menu Rapide</h3>
																
																<span class="badge bg-primary text-inverse-primary py-2 px-3">xx tâches en attente</span> 
															</div>

											-->				
											
											
											
											<div class="card card-flush h-xl-100">
												<div class="card-header pt-2 bgi-size-cover" style="background-image:url('<?php echo 'https://'.$_SERVER['HTTP_HOST'].'/odyssee/'; ?>assets/media/illustrations/top-green.png')">
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bold text-white ">Ma Todo List</span>
														<span class="  mt-1 text-white fw-semibold fs-7" id="task_count">Chargement...</span>
													</h3>
													
														<div class="card-toolbar pt-5">            
															<!--begin::Menu-->
															<button class="btn btn-sm btn-icon btn-active-color-primary btn-color-white bg-white bg-opacity-25 bg-hover-opacity-100 bg-hover-white bg-active-opacity-25 w-20px h-20px" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">   
																	
																<i class="ki-duotone ki-dots-square fs-4"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>                             
															</button>
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true" style="">
															<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Options des Tâches</div>
																</div>
																<!--end::Menu item-->

																<!--begin::Menu separator-->
																<div class="separator mb-3 opacity-75"></div>
																<!--end::Menu separator-->

																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?php echo 'https://'.$_SERVER['HTTP_HOST'].'/odyssee/'; ?>apps/inbox/news.php" class="menu-link px-3">Voir le résumé</a>
																</div>
																<!--end::Menu item-->
																
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" id="btn_send_all_tasks" class="menu-link px-3">
																		Envoyer les tâches sur ma boîte mail
																	</a>
																</div>
																<!--end::Menu item-->

																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<div class="menu-content px-3 py-3">
																		<a class="btn btn-primary  btn-sm px-4" href="index.php">
																			Recharger les tâches
																		</a>
																	</div>
																</div>
																<!--end::Menu item-->
															</div>

																		
														</div>
														
														
													
												</div>

												<div class="card-body">
													<div class="position-relative mb-6">
														<i class="ki-duotone ki-plus-square fs-2 position-absolute top-50 translate-middle-y ms-4"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
														<input type="text" id="quick_add_task" class="form-control form-control-solid ps-12 border border-gray-400 border-dashed" placeholder="Ajouter une nouvelle tâche..." />
													</div> <!-- form-check-input btn-check-task border border-gray-800 border-dashed -->

													<div class="hover-scroll-overlay-y pe-6 me-n6" style="max-height: 350px;" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="350px">
														<div id="todo_items_container"></div>
													</div>
												</div>
											</div>

											<div class="modal fade" id="modal_edit_task" tabindex="-1" aria-hidden="true">
												<div class="modal-dialog modal-dialog-centered mw-650px">
													<div class="modal-content">
														<form id="form_edit_task">
															<input type="hidden" name="task_id" id="edit_task_id">
															<div class="modal-header">
																<h2 class="fw-bold">Modifier la tâche</h2>
																<div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
																	<i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
																</div>
															</div>
															<div class="modal-body py-10 px-lg-17">
																<div class="fv-row mb-7">
																	<label class="required fs-6 fw-semibold mb-2">Titre</label>
																	<input type="text" class="form-control form-control-solid" name="task_title" id="edit_task_title" required />
																</div>
																<div class="fv-row mb-7">
																	<label class="fs-6 fw-semibold mb-2">Description</label>
																	<textarea class="form-control form-control-solid" name="task_description" id="edit_task_description" rows="3"></textarea>
																</div>
																
																<div class="mb-7">
																	<label class="form-label fw-semibold mb-2">Couleur</label>
																	<div class="d-flex gap-2 flex-wrap" id="colorPalette">
																		<input type="radio" class="btn-check" name="task_color" id="cprimary" value="primary" checked>
																		<label class="btn btn-sm btn-light-primary" for="cprimary" style="width:30px;height:30px;border-radius:50%;" title="Bleu"></label>
																		
																		<input type="radio" class="btn-check" name="task_color" id="csuccess" value="success">
																		<label class="btn btn-sm btn-light-success" for="csuccess" style="width:30px;height:30px;border-radius:50%;" title="Vert"></label>
																		
																		<input type="radio" class="btn-check" name="task_color" id="cwarning" value="warning">
																		<label class="btn btn-sm btn-light-warning" for="cwarning" style="width:30px;height:30px;border-radius:50%;" title="Jaune"></label>
																		
																		<input type="radio" class="btn-check" name="task_color" id="cdanger" value="danger">
																		<label class="btn btn-sm btn-light-danger" for="cdanger" style="width:30px;height:30px;border-radius:50%;" title="Rouge"></label>
																		
																		<input type="radio" class="btn-check" name="task_color" id="cinfo" value="info">
																		<label class="btn btn-sm btn-light-info" for="cinfo" style="width:30px;height:30px;border-radius:50%;" title="Violet"></label>
																	</div>
																</div>

																<div class="row g-9 mb-7">
																	<div class="col-md-6 fv-row">
																		<label class="fs-6 fw-semibold mb-2">Date début</label>
																		<input type="datetime-local" class="form-control form-control-solid" name="task_start_date" id="edit_task_start" />
																	</div>
																	<div class="col-md-6 fv-row">
																		<label class="fs-6 fw-semibold mb-2">Date fin</label>
																		<input type="datetime-local" class="form-control form-control-solid" name="task_end_date" id="edit_task_end" />
																	</div>
																</div>
															</div>
															<div class="modal-footer flex-center">
																<button type="button" class="btn btn-light me-3" data-bs-dismiss="modal">Annuler</button>
																<button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
															</div>
														</form>
													</div>
												</div>
											</div>
												

																					
										
										
										</div>
									

										<!--end::Lists Widget -->
									
									</div>
								
								
								
								<!--end::Col-->     


<!-- ************************************************************************************* -->
<!-- Widget Mes Tâches en cours --->
<!-- ************************************************************************************* -->

								<!--begin::Col-->
									<div class="col-xl-8 mb-10">
										<!--begin::Row-->
										<div class="row g-5 g-xl-10">
											<!--begin::Col-->
											<div class="col-xl-6 mb-xl-15">       
												<div 	id="kt_sliders_widget_1_slider" class="card card-flush carousel carousel-custom carousel-stretch slide h-xl-100" data-bs-ride="carousel" data-bs-interval="5000">
													<!-- HEADER -->
													<div class="card-header pt-5">
														<h4 class="card-title d-flex align-items-start flex-column">
															<span class="card-label fw-bold text-gray-800">Mes tâches en cours</span>
															<span class="text-gray-500 mt-1 fw-bold fs-7">
																Il vous reste <?= $totalTasks ?> tâche<?= $totalTasks > 1 ? 's' : '' ?>
															</span>
														</h4>
														<!-- INDICATEURS -->
														<div class="card-toolbar">
															<ol class="p-0 m-0 carousel-indicators carousel-indicators-bullet carousel-indicators-active-primary">
																<?php foreach ($tasks as $i => $task): ?>
																	<li data-bs-target="#kt_sliders_widget_1_slider"
																		data-bs-slide-to="<?= $i ?>"
																		class="<?= $i === 0 ? 'active' : '' ?>"></li>
																<?php endforeach; ?>
															</ol>
														</div>
													</div>

													<!-- BODY -->
													<div class="card-body py-4">
														<div class="carousel-inner mt-n5">
															<?php foreach ($tasks as $i => $task): ?>
															<?php
																// Les Dates ! 
															$start = !empty($task['task_start_date'])	? date('d/m/Y', strtotime($task['task_start_date']))	: '—';
															$end 	= !empty($task['task_end_date'])	? date('d/m/Y', strtotime($task['task_end_date']))		: '—';

															if (!empty($task['task_end_date'])) {
																$now = time();
																$endTimestamp = strtotime($task['task_end_date']);
																$remainingMinutes = max(0, round(($endTimestamp - $now) / 60));
															} else {
																$remainingMinutes = 0;
															}

															// Temps restant
															$estimate = strtotime($task['task_start_date'] ?? '00:00:00');
															$spent    = strtotime($task['task_end_date'] ?? '00:00:00');
															$remaining = max(0, ($estimate - $spent) / 60);

															// Priorité
															$priorites = [
																21 => ['Urgente', 'danger'],
																19 => ['Haute', 'warning'],
																13 => ['Normale', 'primary'],
																10 => ['Basse', 'secondary'],
															];
															[$prioLabel, $prioColor] = $priorites[$task['task_color']] ?? ['Normale', 'primary'];
															?>

															<div class="carousel-item <?= $i === 0 ? 'active' : '' ?>">

																<div class="d-flex align-items-center mb-2">
																	<!-- CHART ON (optionnel) -->
																	<div class="w-80px flex-shrink-0 me-2">
																		<div class="min-h-auto ms-n3 task-chart"
																			 id="task_chart_<?= $task['task_id'] ?>"
																			 data-percent="<?= $task['time_percent'] ?>"
																			 style="height: 100px; min-height: 93px;">
																		</div>
																	</div>
																	<!-- INFOS -->
																	<div class="m-0">
																		<h4 class="fw-bold text-gray-800 mb-3">
																			<?= htmlspecialchars($task['task_title']) ?>
																		</h4>

																		<div class="d-flex d-grid gap-5">
																			<div class="d-flex flex-column flex-shrink-0 me-4">
																				<span class="fs-7 fw-bold text-gray-500 mb-2">
																					Statut : <span class="text-warning">En cours</span>
																				</span>
																				<span class="fs-7 fw-bold text-gray-500 mb-2">
																					Date : <?= $start ?> → <?= $end ?>
																				</span>
																			</div>
																			
																			<div class="d-flex flex-column flex-shrink-0">
																				<span class="fs-7 fw-bold text-gray-500 mb-2">
																					Reste : <?= $remainingMinutes ?> min
																				</span>

																				<span class="fs-7 fw-bold text-gray-500 mb-2">
																					Priorité :
																					<span class="badge badge-light-<?= $prioColor ?>">
																						<?= $prioLabel ?>
																					</span>
																				</span>
																			</div>
																		</div>
																	</div>
																</div>
																<!-- ACTIONS -->
																<!-- <div class="m-0">
																	
																	<a href="task.php?id=< ?= $task['task_id'] ?>" class="btn btn-sm btn-light me-2 mb-2">Ouvrir</a>
																	<button class="btn btn-sm btn-primary mb-2" data-task-id="< ?= $task['task_id'] ?>" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Gérer</button>
																	<span></span>
																</div> -->
																
															</div>
															
															<?php endforeach; ?>
														</div>
													</div>
												</div>
											</div>
											<!--end::Col--> 
<!-- ****************************************************************************************************************************
	les 5 derniers messages : 
********************************************************************************************************************************-->
											<!--begin::Col-->
											<div class="col-xl-6 mb-xl-10">       
	
												<div id="kt_sliders_widget_1_slider" class="card card-flush carousel carousel-custom carousel-stretch slide h-xl-100" data-bs-ride="carousel" data-bs-interval="5000">
													<!-- HEADER -->
													<div class="card-header pt-5">
														<h4 class="card-title d-flex align-items-start flex-column">
															<span class="card-label fw-bold text-gray-800">les messages les plus récents</span>
															<span class="text-gray-500 mt-1 fw-bold fs-7">
																Il vous reste <?= $totalTasks ?> tâche<?= $totalTasks > 1 ? 's' : '' ?>
															</span>
														</h4>
														<!-- INDICATEURS -->
														<div class="card-toolbar">
															<ol class="p-0 m-0 carousel-indicators carousel-indicators-bullet carousel-indicators-active-primary">
																<?php foreach ($messages as $i => $msg): ?>
																	<li data-bs-target="#kt_messages_carousel"
																		data-bs-slide-to="<?= $i ?>"
																		class="<?= $i === 0 ? 'active' : '' ?>"></li>
																<?php endforeach; ?>
															</ol>
														</div>
													</div>

													<!-- BODY -->
													<div class="card-body py-4">
														<div class="carousel-inner mt-n5">
															<?php foreach ($messages as $i => $msg): ?>
												
															<div class="carousel-item <?= $i === 0 ? 'active' : '' ?>">

																<div class="d-flex align-items-center mb-2">
																	<!-- CHART ON (optionnel) -->
																<!-- AVATAR -->
																		<div class="w-100px flex-shrink-0 me-3">
																			<div class="symbol symbol-60px symbol-circle">
																				<!-- <img src="< ?= htmlspecialchars(getAvatar($msg['id_auteur'])) ?>" 				 alt="Avatar"> -->
																					 <div class="image-input-wrapper w-80px h-80px"
																						style="background-image: url('data:image/jpeg;base64,<?php echo $_SESSION['Global_avatarData'][$msg['id_auteur']]; ?>');
																							background-position: center;
																							background-repeat: no-repeat;
																							background-size: contain;margin-right: 8px;
																							border-radius: .75rem;background-size: 100% 100%;">
																					</div>
																			</div>
																		</div>


																		
																		<!-- INFOS -->
																	<div class="m-0">
																		<h4 class="fw-bold text-gray-800 mb-3">
																			<?= htmlspecialchars(strip_tags(substr(dechiffrer($msg['message'], $_SESSION['encryption_key']),0,90))).'...'; ?>
																		</h4>

																		<div class="d-flex d-grid gap-5">
																			<div class="d-flex flex-column flex-shrink-0 me-4">
																				<span class="fs-7 fw-bold text-gray-500 mb-2">
																					Par : <span class="text-warning"><?= htmlspecialchars(dechiffrer($msg['auteur'], $_SESSION['encryption_key'])) ?></span>
																				</span>
																				<span class="fs-7 fw-bold text-gray-500 mb-2">
																					Date : <?= $start ?> 
																				</span>
																			</div>
																			
																			<div class="d-flex flex-column flex-shrink-0">
																				<?php 
																					if ($msg['mode']=="EDIT") { 
																						$prioColor="secondary"; $mode_mess="Edité"; 
																						echo '<span class="fs-7 fw-bold text-gray-500 mb-2">Modifié :<span class="badge badge-light-<?= $prioColor ?>">'.$mode_mess.'</span></span>';
																					} 																						
																				?>
																			</div>
																		</div>
																	</div>
																</div>

																<!-- ACTIONS -->
																<div class="m-0">
																	<a href="<?php echo 'https://'.$_SERVER['HTTP_HOST'].'/odyssee/apps/chat/'; ?>messages.php" class="btn btn-sm btn-primary mb-2">Ouvrir</a>
																	<!-- <button class="btn btn-sm btn-primary mb-2" data-task-id="< ?= $task['task_id'] ? >" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Gérer</button> -->
																</div>
																<div class="separator separator-dashed my-3"></div>
															</div>
															
															<?php endforeach; ?>
														</div>
													</div>
												</div>
											
											
											
											</div>
											<!--end::Col--> 

										</div>
										<!--end::Row-->

										<div class="row g-5 g-xl-10">
										
											<div class="col-xl-6 mb-xl-10">  
														
												<div class="card card-flush h-md-80 mb-xl-10">
													<!--begin::Header-->
													
													<div class="card-header pt-5">
														<div class="card-title d-flex flex-column">
															<span class="card-label fw-bold text-gray-800">Qui est en ligne ?</span>
															<span class="text-gray-400 pt-1 fw-semibold fs-6">Voir les messages de :</span>
														</div>
													</div>
													<div class="card-body d-flex flex-column justify-content-end pe-0">
														<!-- <span class="fs-6 fw-bolder text-gray-800 d-block mb-2">Qui est en ligne aujourd'hui</span> -->
														<div class="symbol-group symbol-hover flex-nowrap">
															<div id="online-users-widget" class="symbol-group symbol-hover flex-nowrap"></div>
															
														</div>	
													</div>
												</div>
											</div>


											<div class="col-xl-6 mb-5 mb-xl-10">
												<div id="kt_sliders_widget_2_slider" class="card card-flush carousel carousel-custom carousel-stretch slide h-xl-100" data-bs-ride="carousel" data-bs-interval="5500">
													<div class="card-header pt-5">
														<h4 class="card-title d-flex align-items-start flex-column">
															<span class="card-label fw-bold text-gray-800">Météo à Martigues</span>
															<span class="text-gray-500 mt-1 fw-bold fs-7">Prévisions sur 5 jours</span>
														</h4>

														<div class="card-toolbar">
															<ol class="p-0 m-0 carousel-indicators carousel-indicators-bullet carousel-indicators-active-success">
																<?php foreach ($forecasts as $index => $day): ?>
																	<li data-bs-target="#kt_sliders_widget_2_slider" data-bs-slide-to="<?= $index ?>" class="<?= $index === 0 ? 'active' : '' ?> ms-1"></li>
																<?php endforeach; ?>
															</ol>
														</div>
													</div>
													<div class="card-body py-6">
														<div class="carousel-inner">
															<?php foreach ($forecasts as $index => $day): 
																$date_label = nom_jour($day['dt_txt']);
																$temp = round($day['main']['temp']);
																$description = ucfirst($day['weather'][0]['description']);
																$icon = $day['weather'][0]['icon'];
																$humidity = $day['main']['humidity'];
																$wind = round($day['wind']['speed'] * 3.6); // Conversion m/s en km/h
															?>
																<div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
																	<div class="d-flex align-items-center mb-9">
																		<div class="symbol symbol-100px symbol-circle me-5">
																			<span class="symbol-label bg-light-danger">
																				<img src="https://openweathermap.org/img/wn/<?= $icon ?>@2x.png" alt="meteo" class="w-100px" />
																			</span>
																		</div>
																		<div class="m-0">
																			<h4 class="fw-bold text-gray-800 mb-1"><?= $date_label ?></h4>
																			<div class="text-gray-400 fw-semibold fs-6 mb-3"><?= $description ?></div>

																			<div class="d-flex d-grid gap-5">
																				<div class="d-flex flex-column flex-shrink-0 me-4">
																					<span class="d-flex align-items-center fs-7 fw-bold text-gray-500 mb-2">
																						<i class="ki-duotone ki-temperature fs-6 text-gray-600 me-2"><span class="path1"></span><span class="path2"></span></i> 
																						<?= $temp ?>°C
																					</span>
																					<span class="d-flex align-items-center text-gray-500 fw-bold fs-7">
																						<i class="ki-duotone ki-drop fs-6 text-gray-600 me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> 
																						<?= $humidity ?>% Humidité
																					</span>
																				</div>
																				
																				<div class="d-flex flex-column flex-shrink-0">
																					<span class="d-flex align-items-center fs-7 fw-bold text-gray-500 mb-2">
																						<i class="ki-duotone ki-wind fs-6 text-gray-600 me-2"><span class="path1"></span><span class="path2"></span></i> 
																						<?= $wind ?> km/h
																					</span>
																					<span class="d-flex align-items-center text-gray-500 fw-bold fs-7">
																						<i class="ki-duotone ki-geolocation fs-6 text-gray-600 me-2"><span class="path1"></span><span class="path2"></span></i> 
																						Martigues
																					</span>
																				</div>
																			</div>
																		</div>
																		</div>
																</div>
															<?php endforeach; ?>
														</div>
													</div>
													</div>
											</div>


											<!-- <div class="card border-transparent "  >
												<div class="card bgi-position-y-bottom bgi-position-x-end bgi-no-repeat bgi-size-cover min-h-250px h-xl-100 border-0 bg-gray-200i" style="background-position: 100% 100%;background-size: 500px auto;background-image:url('<?php echo 'https://'.$_SERVER['HTTP_HOST'].'/odyssee/'; ?>assets/media/illustrations/city.png')">
													<div class="card-body d-flex flex-column justify-content-center align-items-start ps-lg-15">  
														<h3 class="text-gray-800 d-flex fs-2x fw-bolder mb-2 mb-lg-4">
															A la découverte de mon profile sur Odyssée <br> 
														</h3>
													
														<div class="pt-2 pt-lg-4">
															<a href="https://extranet.martigues-tourisme.com/odyssee/apps/admin/edit-membre.php" class="btn btn-danger fw-semibold">Ouvrir</a> 
														</div>
													</div>
												</div>
											</div> -->
											
										</div>
										
										
										<!--end::Engage widget 4-->
									</div>
									<!--end::Col-->    
								</div>

						 
							
<!-- ********************************************************************************************************************************** -->
								<!--begin::Row - mode ECO UNIQUEMENT et Commun à tout les modules -->
								<div class="row gx-5 gx-xl-10">
<!-- DEBUT CADRE 1 -------------------------------------------------------------------------------------------------------------- --!>										
									<!--begin::Col-->
									<div class="col-xxl-6 mb-5 mb-xl-10">
										<div class="card card-flush h-xl-100">
											<div class="card-header border-0 pt-5">
												<h3 class="card-title align-items-start flex-column">
													<span class="card-label fw-bold text-gray-900">Quoi de neuf aujourd'hui</span>
													<span id="total-events" class="text-muted mt-1 fw-semibold fs-7"></span>
												</h3>
												<div class="card-toolbar">
													<a id="open-full-calendar" class="btn btn-sm btn-light" href="apps/calendar/calendar.php">
														<i class="ki-duotone ki-calendar-add">
															<span class="path1"></span><span class="path2"></span><span class="path3"></span>
															<span class="path4"></span><span class="path5"></span><span class="path6"></span>
														</i>
														Ouvrir l'agenda
													</a>
												</div>
											</div>

											<div class="card-body pt-7 px-0">
												<ul id="dates-nav" class="nav nav-stretch nav-pills nav-pills-custom nav-pills-active-custom d-flex justify-content-between mb-8 px-5"></ul>
												<div id="dates-content" class="tab-content mb-2 px-9"></div>
											</div>
										</div>
									</div>
										<!--end::Col-->
<!-- FIN CADRE 1 -------------------------------------------------------------------------------------------------------------- --!>										


										
<!-- DEBUT CADRE 2 -------------------------------------------------------------------------------------------------------------- --!>										
									<!--begin::Col-->
									
									<div class="col-xxl-6 mb-5 mb-xl-10">
											
											<!--begin::Tables widget 16-->
											<div class="card card-flush h-xl-100">
												
												<!--begin::Header-->
												<div class="card-header pt-5">
													<!--begin::Title-->
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bold text-gray-800">Messagerie de l'Office</span>
														<span class="text-gray-400 mt-1 fw-semibold fs-6">
														
														<?php 
														
															$Mjour=compter_MessageJ(); $Sjour=compter_MessageS();
															
															echo '<span class="badge badge-light-success badge-circle fw-bold fs-7">'.$Mjour.'</span> Aujourd\'hui | <span class="badge badge-light-danger badge-circle fw-bold fs-7">'.$Sjour.'</span> Semaine';
														?>
														
														</span>
													</h3>
													<!--end::Title-->
												</div>
												<!--end::Header-->
												<!--begin::Body-->
												<div class="card-body pt-6">
													<!--begin::Nav-->             
													<ul class="nav nav-pills nav-pills-custom mb-3" role="tablist">
														<li class="nav-item mb-3 me-3 me-lg-6" role="presentation">
															<a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2 active" id="Widget_message_bouton_1_Accueil" data-bs-toggle="pill" href="#kt_stats_widget_16_tab_1" aria-selected="true" role="tab">
																<div class="nav-icon mb-3"><i class="ki-duotone ki-message-text  fs-1"><span class="path1"></span> <span class="path2"></span> <span class="path3"></span></i></div>
																<span class="nav-text text-gray-800 fw-bold fs-6 lh-1">Office</span> 
																<span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
															</a>
															</li>
															<li class="nav-item mb-3 me-3 me-lg-6" role="presentation">
																<a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2" id="kt_stats_widget_16_tab_link_2" data-bs-toggle="pill" href="#kt_stats_widget_16_tab_2" aria-selected="false" role="tab" tabindex="-1">
																	<div class="nav-icon mb-3">        
																		<i class="ki-duotone ki-notification-status fs-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>                                                                                                                                                                    
																	</div>
																	<span class="nav-text text-gray-800 fw-bold fs-6 lh-1">Reçus</span>
																	<span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
																</a>
															</li>
															<li class="nav-item mb-3 me-3 me-lg-6" role="presentation">
																<a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2" id="Widget_message_bouton_1_Envoyer" data-bs-toggle="pill" href="#kt_stats_widget_16_tab_3" aria-selected="false" role="tab" tabindex="-1">
																	<div class="nav-icon mb-3">        
																		<i class="ki-duotone ki-send fs-1"><span class="path1"></span><span class="path2"></span></i>                                                                                                                                                              
																	</div>
																	<span class="nav-text text-gray-800 fw-bold fs-6 lh-1">Envoyés</span> 
																	<span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
																</a>
															</li>
															<li class="nav-item mb-3 me-3 me-lg-6" role="presentation">
																<a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2" id="kt_stats_widget_16_tab_link_4" data-bs-toggle="pill" href="#kt_stats_widget_16_tab_4" aria-selected="false" role="tab" tabindex="-1">
																	<div class="nav-icon mb-3">        
																	<!--	<i class="ki-duotone ki-tablet fs-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> -->
																		<i class="ki-duotone ki-pin fs-1"><span class="path1"></span><span class="path2"></span></i>
																	</div>
																	<span class="nav-text text-gray-800 fw-bold fs-6 lh-1">Noté </span> 
																	<span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
																</a>															
															</li>
															<li class="nav-item mb-3 me-3 me-lg-6" role="presentation">
																
																<a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2" id="kt_stats_widget_16_tab_link_5" data-bs-toggle="pill" href="#kt_stats_widget_16_tab_5" aria-selected="false" role="tab" tabindex="-1">
																	<div class="nav-icon mb-3">
																		<i class="ki-duotone ki-trash fs-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>                                                                                                                                                                 
																		
																	</div>
																	<span class="nav-text text-gray-800 fw-bold fs-6 lh-1">Corbeille</span> 
																	<span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
																</a>
															</li>
															
													</ul>             
													<!--end::Nav-->

													
													
													<!--begin::Tab Content-->
													<div class="tab-content">
														<!--begin::Tap pane-->
														<div class="tab-pane fade active show" id="kt_stats_widget_16_tab_1" role="tabpanel" aria-labelledby="Widget_message_bouton_1_Accueil">
															<!--begin::Table container-->
															<div class="table-responsive">
																<!--begin::Table-->
																<table class="table table-row-dashed align-middle gs-0 gy-3 my-0" id="tableau" >
																	<!--begin::Table head-->
																	<thead>
																		<tr class="fs-7 fw-bold text-gray-400 border-bottom-0">
																			<th class="p-0 pb-3 min-w-150px text-start">AUTEUR</th>
																			<th class="p-0 pb-3 min-w-100px text-end pe-13">Date du message</th>
																			<th class="p-0 pb-3 w-50px text-end">Voir</th>
																		</tr>
																	</thead>
																	  <tbody id="messages">
																		<?php 
																			afficher_message($_SESSION['monid'],"defaut"); /* pas de champ, donc la fonction affiche les 4 derniers messages */
																		?>	
																	</tbody>
																	<!--end::Table body-->
																</table>
																<!--end::Table-->
															</div>
															<!--end::Table container-->
														</div>
														<!--end::Tap pane-->
														<!--begin::Tap pane-->
														<div class="tab-pane fade" id="kt_stats_widget_16_tab_2" role="tabpanel" aria-labelledby="kt_stats_widget_16_tab_link_2">
															<div class="table-responsive">
																<table class="table table-row-dashed align-middle gs-0 gy-3 my-0" id="tableau">
																	<thead>
																		<tr class="fs-7 fw-bold text-gray-400 border-bottom-0">
																			<th class="p-0 pb-3 min-w-150px text-start">AUTEUR</th>
																			<th class="p-0 pb-3 min-w-100px text-end pe-13">Date du message</th>
																			<th class="p-0 pb-3 w-50px text-end">Voir</th>
																		</tr>
																	</thead>
																	<tbody id="messages">
																	<?php 
																		  afficher_message($_SESSION['monid'],"id_destinataire");
																	?>	
																	</tbody>
																</table>
															</div>
														</div>
														<div class="tab-pane fade" id="kt_stats_widget_16_tab_3" role="tabpanel" aria-labelledby="Widget_message_bouton_1_Envoyer">
															<!--begin::Table container-->
															<div class="table-responsive">
																<!--begin::Table-->
																<table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
																	<!--begin::Table head-->
																	<thead>
																		<tr class="fs-7 fw-bold text-gray-400 border-bottom-0">
																			<th class="p-0 pb-3 min-w-150px text-start">AUTEUR</th>
																			<th class="p-0 pb-3 min-w-100px text-end pe-13">CONV.</th>
																			<th class="p-0 pb-3 w-50px text-end">Voir</th>
																		</tr>
																	</thead>
																	<!--end::Table head-->
																	<!--begin::Table body-->
																	<tbody>
																	<?php 
																			// Requête pour récupérer les 5 derniers messages
																		afficher_message($_SESSION['monid'],"id_auteur");
																	?>
																	</tbody>
																	<!--end::Table body-->
																</table>
																<!--end::Table-->
															</div>
															<!--end::Table container-->
														</div>
														<!--end::Tap pane-->
														<!--begin::Tap pane-->
														<div class="tab-pane fade" id="kt_stats_widget_16_tab_4" role="tabpanel" aria-labelledby="kt_stats_widget_16_tab_link_4">
															<!--begin::Table container-->
															<div class="table-responsive">
																<!--begin::Table-->
																<table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
																	<!--begin::Table head-->
																	<thead>
																		<tr class="fs-7 fw-bold text-gray-400 border-bottom-0">
																			<th class="p-0 pb-3 min-w-150px text-start">AUTEUR <div class="text-muted me-2 badge badge-light-success fs-8"><?php echo ''.compteur_like_login($_SESSION['login']).''; ?> message(s) épinglée(s)</div></th>
																			<th class="p-0 pb-3 min-w-100px text-end pe-13">DATE</th>
																			<th class="p-0 pb-3 w-50px text-end">Effacer</th>
																		</tr>
																	</thead>
																	<!--end::Table head-->
																	<!--begin::Table body-->
																	<tbody>
																	
																	<?php 
																		// Requête pour récupérer les 5 derniers messages
																		afficher_message($_SESSION['monid'],"like");
																	?>	
																	</tbody>
																	<!--end::Table body-->
																</table>
																<!--end::Table-->
															</div>
															<!--end::Table container-->
														</div>
														<!--end::Tap pane-->
														<!--begin::Tap pane-->
														<div class="tab-pane fade" id="kt_stats_widget_16_tab_5" role="tabpanel" aria-labelledby="kt_stats_widget_16_tab_link_5">
															<!--begin::Table container-->
															<div class="table-responsive">
																<!--begin::Table-->
																<table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
																	<!--begin::Table head-->
																	<thead>
																		<tr class="fs-7 fw-bold text-gray-400 border-bottom-0">
																			<th class="p-0 pb-3 min-w-150px text-start">AUTEUR</th>
																			<th class="p-0 pb-3 min-w-100px text-end pe-13">CONV.</th>
																			<th class="p-0 pb-3 w-50px text-end">Restaurer</th>
																			<th class="p-0 pb-3 w-50px text-end">Effacer</th>
																			
																		</tr>
																	</thead>
																	<tbody>
																	<?php // Requête pour récupérer les 5 derniers messages
																		// afficher_message($_SESSION['login'],"SUP");
																	?>	
																	</tbody>
																	<!--end::Table body-->
																</table>
																<!--end::Table-->
															</div>
															<!--end::Table container-->
														</div>
														<!--end::Tap pane-->
														<!--end::Table container-->
													</div>
													<!--end::Tab Content-->
												</div>
												<!--end: Card Body-->
											
												
												<!-- Widget  cadre 2 -->
											</div>
											<!--end::Tables widget 16-->
										
										
										</div>
									
									<!--end::Col-->
<!-- FIN CADRE 2 -------------------------------------------------------------------------------------------------------------- --!>										
								
									
								</div>
								<!--end::Row - mode ECO UNIQUEMENT et Commun à tout les modules -->
<!-- ********************************************************************************************************************************** -->
						<?php if ($_SESSION['monid'] == 1) {  // <?php endif; ? >	?>	
								<!--begin::Row-->
								<div class="row g-5 g-xl-10 mb-xl-10">
								<!--begin::Col-->
<!-- DEBUT CADRE 3 -------------------------------------------------------------------------------------------------------------- --!>												
									<div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
										
										
										<!--begin::Card widget 4-->
										<div class="card card-flush h-md-50 mb-5 mb-xl-10">
											<?php
												$pdo = ConnexionPDO();
												$stmt = $pdo->query("SELECT id, astuces, lien FROM astuces");
												$astuces = $stmt->fetchAll(PDO::FETCH_ASSOC);
											?>
											
											<div class="card-header pt-5">
												<div class="card-title d-flex flex-column">
													<div class="d-flex align-items-center">
														<span class="card-label fw-bold text-dark">L'actu du Web</span>
														<button type="button" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary ms-2" data-bs-toggle="modal" data-bs-target="#modal_manage_astuces">
															<i class="ki-duotone ki-plus fs-2"></i>
														</button>
													</div>
													<span class="text-gray-400 pt-1 fw-semibold fs-8">Conseils & Actus</span>
												</div>
												
												<div class="card-toolbar">
													<button class="btn btn-sm btn-icon btn-active-color-primary" type="button" data-bs-target="#kt_carousel_astuces" data-bs-slide="prev">
														<i class="ki-duotone ki-left fs-3"></i>
													</button>
													<button class="btn btn-sm btn-icon btn-active-color-primary" type="button" data-bs-target="#kt_carousel_astuces" data-bs-slide="next">
														<i class="ki-duotone ki-right fs-3"></i>
													</button>
												</div>
											</div>

											<div class="card-body pt-2 pb-4">
												<div id="kt_carousel_astuces" class="carousel carousel-custom slide" data-bs-ride="carousel">
													<div class="carousel-inner" id="carousel-content">
														<?php foreach ($astuces as $index => $astuce): ?>
															<div class="carousel-item <?php echo ($index === 0) ? 'active' : ''; ?>">
																<div class="d-flex flex-column">
																	<p class="text-gray-800 fw-normal fs-6 mb-4"><?php echo htmlspecialchars($astuce['astuces']); ?></p>
																	<a href="<?php echo htmlspecialchars($astuce['lien']); ?>" target="_blank" class="link-primary fw-bold fs-7">En savoir plus →</a>
																</div>
															</div>
														<?php endforeach; ?>
													</div>
												</div>
											</div>
										</div>
										<!--end::Card widget 4-->
<!-- DEBUT CADRE 4 -------------------------------------------------------------------------------------------------------------- --!>		
								
										<!--begin::Card widget 5-->
										<div class="card card-flush h-md-50 mb-xl-10">
											début cadre 4	
												
											<!--begin::Header-->
											<div class="card-header pt-5">
												<div class="card-title d-flex flex-column">
													<div class="d-flex align-items-center">
														<span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">1,836</span>
														<span class="badge badge-light-danger fs-base">
														<i class="ki-duotone ki-arrow-down fs-5 text-danger ms-n1">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>2.2%</span>
													</div>
													<span class="text-gray-400 pt-1 fw-semibold fs-6">Orders This Month</span>
												</div>
											</div>
											
											
											<div class="card-body d-flex align-items-end pt-0">
												
											</div>
												fin cadre 4
										</div>
										<!--end::Card widget 5-->
										
										
<!-- FIN CADRE 4 -------------------------------------------------------------------------------------------------------------- --!>										
									</div>
									<!--begin::Col-->
									<div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
												
												
												
												
<!-- DEBUT CADRE 5 -------------------------------------------------------------------------------------------------------------- --!>	
		
												<div class="card card-flush h-md-50 mb-5 mb-xl-10">
													
													<!--begin::Header-->
													<div class="card-header pt-5">
														<!--begin::Title-->
														<div class="card-title d-flex flex-column">
															<!--begin::Info-->
															<h3 class="card-title align-items-start flex-column">
																<span class="card-label fw-bold text-dark">Les derniers tickets</span>
															</h3>
															<!--begin::Subtitle-->
															<span class="text-gray-400 pt-1 fw-semibold fs-6">Support technique</span>
															<!--end::Subtitle-->
														</div>
														<!--end::Title-->
													</div>
													<!--end::Header-->
													<?php 
														$sql = 'SELECT * FROM `odytickets` ORDER BY `odytickets`.`id` DESC LIMIT 4';
														$stmt = $pdo->query($sql);
													?>
													<!--begin::Card body-->
													<div class="card-body pt-5">                 
														<!--begin::Item-->
													
													<?php 
														while ($data = $stmt->fetch(PDO::FETCH_ASSOC)) 		{
															echo '<div class="d-flex flex-stack">
																	<div class="text-gray-700 fw-semibold fs-6 me-2"><a href="https://'.$_SERVER["HTTP_HOST"].'/odyssee/apps/support-center/aides.php?mode=ticket&ticket_detailid='.$data['id'].'" >'.$data['sujet'].'</a></div>                   
																	<div class="d-flex align-items-senter">
																		<a href="https://'.$_SERVER["HTTP_HOST"].'/odyssee/apps/support-center/aides.php?mode=ticket&ticket_detailid='.$data['id'].'" ><i class="ki-duotone ki-information-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></a>
																';																	
																if ($data['priorite']=="Critique") 
																	echo '<span class="badge badge-changelog badge-light-danger fw-semibold fs-8 px-2 ms-2">';
																else 	
																	echo '<span class="badge badge-light-success fw-semibold fs-8 px-2 ms-2">';
																
																echo $data['priorite'].'</span>';

																echo '<span class="text-gray-500 fw-bold fs-6">'.$data['statut'].'</span> 
																	</div>  
																	<!--end::Statistics-->           
																</div>';
																echo '<div class="separator separator-dashed my-3"></div>';
														
													 	} ?>
													
													</div>
													
													<!--end::Card body-->
												</div>
												<!--end::Card widget 6-->
												
												
<!-- DEBUT CADRE 6 -------------------------------------------------------------------------------------------------------------- --!>	
												<div class="card card-flush h-md-50 mb-xl-10">
													<!--begin::Header-->
												 
													
													
													<div class="card-header pt-5">
														<div class="card-title d-flex flex-column">
															<span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">6.3k</span>
															<span class="text-gray-400 pt-1 fw-semibold fs-6">New Customers This Month</span>
														</div>
													</div>
													<div class="card-body d-flex flex-column justify-content-end pe-0">
														<span class="fs-6 fw-bolder text-gray-800 d-block mb-2">Today’s Heroes</span>
														<div class="symbol-group symbol-hover flex-nowrap">
															<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-bs-original-title="Alan Warden" data-kt-initialized="1">
																<span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
															</div>
															<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Michael Eberon" data-bs-original-title="Michael Eberon" data-kt-initialized="1">
																<img alt="Pic" src="assets/media/avatars/300-11.jpg">
															</div>
															<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-bs-original-title="Susan Redwood" data-kt-initialized="1">
																<span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
															</div>
															<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Melody Macy" data-bs-original-title="Melody Macy" data-kt-initialized="1">
																<img alt="Pic" src="assets/media/avatars/300-2.jpg">
															</div>
															<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-bs-original-title="Perry Matthew" data-kt-initialized="1">
																<span class="symbol-label bg-danger text-inverse-danger fw-bold">P</span>
															</div>
															<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Barry Walter" data-bs-original-title="Barry Walter" data-kt-initialized="1">
																<img alt="Pic" src="assets/media/avatars/300-12.jpg">
															</div>
															<a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">
																<span class="symbol-label bg-light text-gray-400 fs-8 fw-bold">+42</span>
															</a>
														</div>
													</div>
												
												
												
												fin cadre 6
												</div>
												<!--end::Card widget 7-->
											</div>
									<!--end::Col-->
<!-- DEBUT CADRE 7 -------------------------------------------------------------------------------------------------------------- --!>											
									<!--begin::Col-->
									<div class="col-lg-12 col-xl-12 col-xxl-6 mb-5 mb-xl-0">
												<!--begin::Chart widget 3-->
												<!-- <div class="card card-flush overflow-hidden h-md-100"> -->
												<div class="card card-flush h-xl-100">
												<!-- début cadre 7	 -->
												
												<?php 
													
													$pdo = ConnexionPDO();
													$stmt = $pdo->prepare("SELECT id, titre, texte, created_at, brouillon, termine, status, avatarDataNote FROM odynotes WHERE membre_id = :membre_id AND corbeille = 'NON' ORDER BY ordre ASC LIMIT 10");
														
													$stmt->execute(['membre_id' => $_SESSION['monid']]);
													$notes = $stmt->fetchAll(PDO::FETCH_ASSOC);

												?>	
													
													<!--begin::Header-->
													<div class="card-header pt-7">
														<!--begin::Title-->
														<h3 class="card-title align-items-start flex-column">
															<span class="card-label fw-bold text-dark">Mes notes</span>
															<span class="text-gray-400 mt-1 fw-semibold fs-6">Les notes ajoutées s'affichent ici.</span>
														</h3>
														<!--end::Title-->
														<!--begin::Toolbar-->
														<div class="card-toolbar">
															<!--begin::Menu-->
															<button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
																<i class="ki-duotone ki-dots-square fs-1">
																	<span class="path1"></span>
																	<span class="path2"></span>
																	<span class="path3"></span>
																	<span class="path4"></span>
																</i>
															</button>
															<!--begin::Menu 2-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3"><div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Gestion des notes</div></div>
																<div class="separator mb-3 opacity-75"></div>
																<div class="menu-item px-3"><a href="apps/notes/odynotes.php" class="menu-link px-3">Nouvelle note</a></div>
																<div class="menu-item px-3"><a href="apps/notes/notes.php" class="menu-link px-3">Ouvrir mes notes</a></div>
															</div>
															<!--end::Menu 2-->
															<!--end::Menu-->
														</div>
														<!--end::Toolbar-->
													</div>
													<!--end::Header-->
													<!--begin::Card body-->

																																	
													<div class="card-body">
													  <!--begin::Scroll-->
														<div class="hover-scroll-overlay-y pe-6 me-n6" style="height: 415px">

														<?php if (empty($notes)): 
																echo '<div style="margin-top:40px">'.alert_box("bleu_light", "Aucune note trouvée", "Vous n'avez pas encore de Note ? Rendez-vous sur le module de prise de Note", "").'</div>';
																 
															//<div class="alert alert-light text-center">Aucune note trouvée</div>
															else: ?>
														
														  <?php foreach ($notes as $note): ?>
															<!--begin::Item-->
															<div class="border border-dashed border-gray-300 rounded px-7 py-3 mb-6" >
																<!--begin::Info-->
																<div class="d-flex flex-stack mb-3">
																	<!--begin::Wrapper-->
																	<div class="me-3 d-flex align-items-center">
																	  <!--begin::Icon-->
																	  <?php if (!empty($note['avatarDataNote'])): ?>
																		<!-- <img src="< ?= htmlspecialchars($note['avatarDataNote']) ?>" class="w-50px h-50px rounded me-3" alt=""> -->
																		<div class="w-50px h-50px rounded me-3" 									
																			style="background-image: url('data:image/jpeg;base64,<?php echo $note['avatarDataNote']; ?>');
																					background-position: center;
																					background-repeat: no-repeat;
																					background-size: contain;
																					border-radius: .75rem;"> 
																	 
																		</div> 
																	  <?php else: ?>
																		<div class="symbol symbol-50px me-3">
																		  <span class="symbol-label bg-light text-muted fw-bold fs-4">(O-o)</span>
																		</div>
																	  <?php endif; ?>
																	  <!--end::Icon-->
																	  <!--begin::Title-->
																		<a href="apps/notes/odynotes.php?id=<?= $note['id'] ?>" class="text-gray-800 text-hover-primary fw-bold">
																			<?= htmlspecialchars(denote($note['titre'])) ?>
																			
																			<?php 
																				$texte_sans_html = strip_tags(denote($note['texte']));
																				$extrait = mb_substr($texte_sans_html, 0, 50);
																			?>

																			<br><span class="text-gray-500 mt-1 fw-semibold fs-6">

																			<?php 
																				if (strlen($extrait)==0) 
																					echo '<div class="alert-info fw-semibold fs-7"><div class="d-flex flex-column"><span>Votre note doit être complétée</span></div></div>'; 
																				else 
																					echo 'extrait : "'.$extrait.'..."';
																			
																			?></span>
																		</a>
																	  <!--end::Title-->
																	</div>
																	<!--end::Wrapper-->

																	<!--begin::Action-->
																	<div class="m-0">
																		<button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end"
																			data-kt-menu-trigger="click"
																			data-kt-menu-placement="bottom-end"
																			data-kt-menu-overflow="true">
																			<i class="ki-duotone ki-dots-square fs-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
																		</button>

																	  <!--begin::Menu-->
																		<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
																			<div class="menu-item px-3">
																				<div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Actions</div>
																			</div>
																			<div class="separator mb-3 opacity-75"></div>
																			<div class="menu-item px-3">
																				<a href="apps/notes/odynotes.php?id=<?= $note['id'] ?>" class="menu-link px-3">Ouvrir la note</a>
																				<a href="apps/notes/notes.php" class="menu-link px-3">Gestion des notes</a>
																			</div>
																		</div>
																	  <!--end::Menu-->
																	</div>
																	<!--end::Action-->
																</div>
																<!--end::Info-->

																<!--begin::Footer (date + statut)-->
																<div class="d-flex flex-stack">
																	<span class="text-gray-500 fw-bold">
																		Fait <?= timeAgo($note['created_at']).' - Taille : ' ?>
																		<?php $taille=strlen($note['texte']);
																	  
																			if ($taille<1024) {
																				if ($taille==0)	
																					echo '<span class="badge badge-light-warning">Note vide</span>';
																				else 
																					echo $taille." caractères";	
																			}
																			else
																			{
																				echo $taille." oct";
																			}
																		?>
																	</span>
																
																<?php
																
																	if ($note['status'] === 'Brouillon') 	{ echo '<span class="badge badge-light-danger">Brouillon</span>'; }
																	if ($note['status'] === 'A corriger') 	{ echo '<span class="badge badge-light-primary">A corriger</span>'; }
																	if ($note['status'] === 'Active') 		{ echo '<span class="badge badge-light-success">Note active</span>'; }
																	if ($note['status'] === 'Inactive')     { echo '<span class="badge badge-light-danger">Inactive</span>'; }																	
																	
																?> 
															  </div>
															  <!--end::Footer-->
															</div>
															
															<!--end::Item-->
															<?php endforeach; ?>
														<?php endif; ?>

														</div>
													  <!--end::Scroll-->
													</div>
													<!--end::Card body-->

												<!-- fin cadre 7 -->
												</div>
												<!--end::Chart widget 3-->
											</div>
									<!--end::Col-->
								</div>
								<!--end::Row-->
						<?php } ?>	
									
								
						<?php	if ($_SESSION['monid'] == 1)
								{ //  	?>	
									<!--begin::Row-->
									<div class="row g-5 g-xl-10 g-xl-10">
										<!--begin::Col-->
										
<!-- DEBUT CADRE 8 -------------------------------------------------------------------------------------------------------------- --!>											
										<div class="col-xl-4">
											<!--begin::Engage widget 1-->
											<div class="card h-md-100" dir="ltr">

								
												<!--begin::Body-->
												<div class="card-body d-flex flex-column flex-center">
													<!--begin::Heading-->
													<div class="mb-2">
														<!--begin::Title-->
														<h3 class="fw-semibold text-gray-800 text-center lh-lg">Avez-vous essayé le<br>nouveau
														<span class="fw-bolder">gestionnaire d'aide en ligne ?</span></h3>
														<!--end::Title-->
														<!--begin::Illustration-->
														<div class="py-10 text-center">
															<img src="assets/media/svg/illustrations/easy/2.svg" class="theme-light-show w-200px" alt="">
															<img src="assets/media/svg/illustrations/easy/2-dark.svg" class="theme-dark-show w-200px" alt="">
														</div>
														<!--end::Illustration-->
													</div>
													<!--end::Heading-->
													<!--begin::Links-->
													<div class="text-center mb-1">
														<!--begin::Link-->
														<a class="btn btn-sm btn-primary me-2" href="">Aide</a>
														<!--end::Link-->
														<!--begin::Link-->
														<a class="btn btn-sm btn-light" href="">Publier</a>
														<!--end::Link-->
													</div>
													<!--end::Links-->
												</div>
												<!--end::Body-->

											</div>
											<!--end::Engage widget 1-->
										</div>
										<!--end::Col-->
<!-- DEBUT CADRE 9 -------------------------------------------------------------------------------------------------------------- --!>											
										<!--begin::Col-->
										<div class="col-xl-4">
											
																						
											<div class="card card-flush h-xl-100">
												<!--begin::Card header-->
												<div class="card-header pt-5">
													<!--begin::Card title-->
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bold text-gray-900">Team Schedule</span>

														<span class="text-gray-500 pt-2 fw-semibold fs-6">49 Acual Tasks</span>
													</h3>
													<!--end::Card title-->

													<!--begin::Card toolbar-->
													<div class="card-toolbar">
														<!--begin::Tabs-->
														<ul class="nav" role="tablist">
															<li class="nav-item" role="presentation">
																<a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light fw-bold px-4 me-1 active" data-kt-timeline-widget-1="tab" data-bs-toggle="tab" href="#kt_timeline_widget_1_tab_day" aria-selected="true" role="tab">Day</a>
															</li>

															<li class="nav-item" role="presentation">
																<a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light fw-bold px-4 me-1" data-kt-timeline-widget-1="tab" data-bs-toggle="tab" href="#kt_timeline_widget_1_tab_week" aria-selected="false" role="tab" tabindex="-1">Week</a>
															</li>

															<li class="nav-item" role="presentation">
																<a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light fw-bold px-4 me-1" data-kt-timeline-widget-1="tab" data-bs-toggle="tab" href="#kt_timeline_widget_1_tab_month" aria-selected="false" role="tab" tabindex="-1">Month</a>
															</li>
														</ul>
														<!--end::Tabs-->
													</div>
													<!--end::Card toolbar-->
												</div>
												<!--end::Card header-->

												<!--begin::Card body-->
												<div class="card-body pb-0">
													<!--begin::Tab content-->
													<div class="tab-content">
														<!--begin::Tab pane-->
														<div class="tab-pane blockui active show" id="kt_timeline_widget_1_tab_day" role="tabpanel" aria-labelledby="day-tab" data-kt-timeline-widget-1-blockui="true" style="">
															<div class="table-responsive pb-10">
																<!--begin::Timeline-->
																<div id="kt_timeline_widget_1_1" class="vis-timeline-custom h-350px min-w-700px" data-kt-timeline-widget-1-image-root="/good/assets/media/" style="position: relative;"><div class="vis-timeline vis-bottom vis-ltr" style="touch-action: pan-y; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); visibility: visible; height: 354px;"><div class="vis-panel vis-background" style="height: 354px; width: 931px; left: 0px; top: 0px;"></div><div class="vis-panel vis-background vis-vertical" style="height: 354px; width: 804px; left: 129px; top: 0px;"><div class="vis-axis" style="top: 304px; left: 0px;"><div class="vis-group"></div><div class="vis-group"></div><div class="vis-group"></div><div class="vis-group"></div></div><div class="vis-time-axis vis-background"><div class="vis-grid vis-vertical vis-minor  vis-today  vis-even" style="width: 65.3333px; height: 330px; transform: translate(-8.2187px, -1px);"></div><div class="vis-grid vis-vertical vis-minor  vis-today  vis-odd" style="width: 65.3333px; height: 330px; transform: translate(57.1146px, -1px);"></div><div class="vis-grid vis-vertical vis-minor  vis-today  vis-even" style="width: 65.3333px; height: 330px; transform: translate(122.448px, -1px);"></div><div class="vis-grid vis-vertical vis-minor  vis-today  vis-odd" style="width: 65.3333px; height: 330px; transform: translate(187.781px, -1px);"></div><div class="vis-grid vis-vertical vis-minor  vis-today  vis-even" style="width: 65.3333px; height: 330px; transform: translate(253.115px, -1px);"></div><div class="vis-grid vis-vertical vis-minor  vis-today  vis-odd" style="width: 65.3333px; height: 330px; transform: translate(318.448px, -1px);"></div><div class="vis-grid vis-vertical vis-minor  vis-today  vis-even" style="width: 65.3333px; height: 330px; transform: translate(383.781px, -1px);"></div><div class="vis-grid vis-vertical vis-minor  vis-today  vis-odd" style="width: 65.3333px; height: 330px; transform: translate(449.115px, -1px);"></div><div class="vis-grid vis-vertical vis-minor  vis-today  vis-even" style="width: 65.3333px; height: 330px; transform: translate(514.448px, -1px);"></div><div class="vis-grid vis-vertical vis-minor  vis-today  vis-odd" style="width: 65.3333px; height: 330px; transform: translate(579.781px, -1px);"></div><div class="vis-grid vis-vertical vis-minor  vis-today  vis-even" style="width: 65.3333px; height: 330px; transform: translate(645.115px, -1px);"></div><div class="vis-grid vis-vertical vis-minor  vis-today  vis-odd" style="width: 65.3333px; height: 330px; transform: translate(710.448px, -1px);"></div><div class="vis-grid vis-vertical vis-minor  vis-today  vis-even" style="width: 65.3333px; height: 330px; transform: translate(775.781px, -1px);"></div></div></div><div class="vis-panel vis-background vis-horizontal" style="height: 305px; width: 931px; left: 0px; top: -1px;"></div><div class="vis-panel vis-center" style="touch-action: pan-y; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); height: 305px; width: 804px; left: 128px; top: -1px;"><div class="vis-content" style="left: 0px; transform: translateY(0px);"><div class="vis-itemset" style="height: 303px;"><div class="vis-background"><div class="vis-group" style="height: 0px;"><div style="visibility: hidden; position: absolute;"></div></div><div class="vis-group" style="height: 75px;"><div style="visibility: hidden; position: absolute;"></div></div><div class="vis-group" style="height: 75px;"><div style="visibility: hidden; position: absolute;"></div></div><div class="vis-group" style="height: 75px;"><div style="visibility: hidden; position: absolute;"></div></div><div class="vis-group" style="height: 78px;"><div style="visibility: hidden; position: absolute;"></div></div></div><div class="vis-foreground"><div class="vis-group" style="height: 75px;"><div class="vis-item vis-range vis-readonly" style="transform: translateX(10.0001px); width: 392px; top: 17.5px;"><div class="vis-item-overflow"><div class="vis-item-content" style="transform: translateX(0px);"><div class="rounded-pill bg-light-primary d-flex align-items-center position-relative h-40px w-100 p-2 overflow-hidden">
																<div class="position-absolute rounded-pill d-block bg-primary start-0 top-0 h-100 z-index-1" style="width:60%;"></div>
													
																<div class="d-flex align-items-center position-relative z-index-2">
																	<div class="symbol-group symbol-hover flex-nowrap me-3">
																		<div class="symbol symbol-circle symbol-25px"><img alt="" src="/good/assets/media/avatars/300-6.jpg"></div><div class="symbol symbol-circle symbol-25px"><img alt="" src="/good/assets/media/avatars/300-1.jpg"></div>
																	</div>
													
																	<a href="#" class="fw-bold text-white text-hover-dark">Meeting</a>
																</div>
													
																<div class="d-flex flex-center bg-body rounded-pill fs-7 fw-bolder ms-auto h-100 px-3 position-relative z-index-2">
																	60%
																</div>
															</div>        
															</div></div><div class="vis-item-visible-frame"></div></div></div><div class="vis-group" style="height: 75px;"><div class="vis-item vis-range vis-readonly" style="transform: translateX(271.333px); width: 261.333px; top: 17.5px;"><div class="vis-item-overflow"><div class="vis-item-content" style="transform: translateX(0px);"><div class="rounded-pill bg-light-success d-flex align-items-center position-relative h-40px w-100 p-2 overflow-hidden">
																<div class="position-absolute rounded-pill d-block bg-success start-0 top-0 h-100 z-index-1" style="width:47%;"></div>
													
																<div class="d-flex align-items-center position-relative z-index-2">
																	<div class="symbol-group symbol-hover flex-nowrap me-3">
																		<div class="symbol symbol-circle symbol-25px"><img alt="" src="/good/assets/media/avatars/300-2.jpg"></div>
																	</div>
													
																	<a href="#" class="fw-bold text-white text-hover-dark">Testing</a>
																</div>
													
																<div class="d-flex flex-center bg-body rounded-pill fs-7 fw-bolder ms-auto h-100 px-3 position-relative z-index-2">
																	47%
																</div>
															</div>        
															</div></div><div class="vis-item-visible-frame"></div></div></div><div class="vis-group" style="height: 75px;"><div class="vis-item vis-range vis-readonly" style="transform: translateX(140.667px); width: 522.667px; top: 17.5px;"><div class="vis-item-overflow"><div class="vis-item-content" style="transform: translateX(0px);"><div class="rounded-pill bg-light-danger d-flex align-items-center position-relative h-40px w-100 p-2 overflow-hidden">
																<div class="position-absolute rounded-pill d-block bg-danger start-0 top-0 h-100 z-index-1" style="width:55%;"></div>
													
																<div class="d-flex align-items-center position-relative z-index-2">
																	<div class="symbol-group symbol-hover flex-nowrap me-3">
																		<div class="symbol symbol-circle symbol-25px"><img alt="" src="/good/assets/media/avatars/300-5.jpg"></div><div class="symbol symbol-circle symbol-25px"><img alt="" src="/good/assets/media/avatars/300-20.jpg"></div>
																	</div>
													
																	<a href="#" class="fw-bold text-white text-hover-dark">Landing page</a>
																</div>
													
																<div class="d-flex flex-center bg-body rounded-pill fs-7 fw-bolder ms-auto h-100 px-3 position-relative z-index-2">
																	55%
																</div>
															</div>        
															</div></div><div class="vis-item-visible-frame"></div></div></div><div class="vis-group" style="height: 78px;"><div class="vis-item vis-range vis-readonly" style="transform: translateX(402px); width: 392px; top: 18px;"><div class="vis-item-overflow"><div class="vis-item-content" style="transform: translateX(0px);"><div class="rounded-pill bg-light-info d-flex align-items-center position-relative h-40px w-100 p-2 overflow-hidden">
																<div class="position-absolute rounded-pill d-block bg-info start-0 top-0 h-100 z-index-1" style="width:75%;"></div>
													
																<div class="d-flex align-items-center position-relative z-index-2">
																	<div class="symbol-group symbol-hover flex-nowrap me-3">
																		<div class="symbol symbol-circle symbol-25px"><img alt="" src="/good/assets/media/avatars/300-23.jpg"></div><div class="symbol symbol-circle symbol-25px"><img alt="" src="/good/assets/media/avatars/300-12.jpg"></div><div class="symbol symbol-circle symbol-25px"><img alt="" src="/good/assets/media/avatars/300-9.jpg"></div>
																	</div>
													
																	<a href="#" class="fw-bold text-white text-hover-dark">Products module</a>
																</div>
													
																<div class="d-flex flex-center bg-body rounded-pill fs-7 fw-bolder ms-auto h-100 px-3 position-relative z-index-2">
																	75%
																</div>
															</div>        
															</div></div><div class="vis-item-visible-frame"></div></div></div></div></div></div><div class="vis-shadow vis-top" style="visibility: hidden;"></div><div class="vis-shadow vis-bottom" style="visibility: hidden;"></div></div><div class="vis-panel vis-left" style="touch-action: none; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); height: 305px; left: 0px; top: -1px;"><div class="vis-content" style="left: 0px; top: 0px;"><div class="vis-labelset"><div class="vis-label vis-group-level-0" title="" style="height: 75px;"><div class="vis-inner">Research</div></div><div class="vis-label vis-group-level-0" title="" style="height: 75px;"><div class="vis-inner">Phase 2.6 QA</div></div><div class="vis-label vis-group-level-0" title="" style="height: 75px;"><div class="vis-inner">UI Design</div></div><div class="vis-label vis-group-level-0" title="" style="height: 78px;"><div class="vis-inner">Development</div></div></div></div><div class="vis-shadow vis-top" style="visibility: hidden;"></div><div class="vis-shadow vis-bottom" style="visibility: hidden;"></div></div><div class="vis-panel vis-right" style="height: 305px; left: 932px; top: -1px;"><div class="vis-content" style="left: 0px; top: 0px;"></div><div class="vis-shadow vis-top" style="visibility: hidden;"></div><div class="vis-shadow vis-bottom" style="visibility: hidden;"></div></div><div class="vis-panel vis-top" style="width: 804px; left: 128px; top: 0px;"></div><div class="vis-panel vis-bottom" style="width: 804px; left: 128px; top: 304px;"><div class="vis-time-axis vis-foreground" style="height: 50px;"><div class="vis-text vis-minor vis-measure" style="position: absolute;">0</div><div class="vis-text vis-major vis-measure" style="position: absolute;">0</div><div class="vis-text vis-minor  vis-today  vis-even" style="transform: translate(-7.7187px, 0px); width: 65.3333px;">14:30</div><div class="vis-text vis-minor  vis-today  vis-odd" style="transform: translate(57.6146px, 0px); width: 65.3333px;">14:45</div><div class="vis-text vis-minor  vis-today  vis-even" style="transform: translate(122.948px, 0px); width: 65.3333px;">15:00</div><div class="vis-text vis-minor  vis-today  vis-odd" style="transform: translate(188.281px, 0px); width: 65.3333px;">15:15</div><div class="vis-text vis-minor  vis-today  vis-even" style="transform: translate(253.615px, 0px); width: 65.3333px;">15:30</div><div class="vis-text vis-minor  vis-today  vis-odd" style="transform: translate(318.948px, 0px); width: 65.3333px;">15:45</div><div class="vis-text vis-minor  vis-today  vis-even" style="transform: translate(384.281px, 0px); width: 65.3333px;">16:00</div><div class="vis-text vis-major  vis-today  vis-even" style="transform: translate(0px, 25px);"><div>lun. 29 décembre</div></div><div class="vis-text vis-minor  vis-today  vis-odd" style="transform: translate(449.615px, 0px); width: 65.3333px;">16:15</div><div class="vis-text vis-minor  vis-today  vis-even" style="transform: translate(514.948px, 0px); width: 65.3333px;">16:30</div><div class="vis-text vis-minor  vis-today  vis-odd" style="transform: translate(580.281px, 0px); width: 65.3333px;">16:45</div><div class="vis-text vis-minor  vis-today  vis-even" style="transform: translate(645.615px, 0px); width: 65.3333px;">17:00</div><div class="vis-text vis-minor  vis-today  vis-odd" style="transform: translate(710.948px, 0px); width: 65.3333px;">17:15</div><div class="vis-text vis-minor  vis-today  vis-even" style="transform: translate(776.281px, 0px); width: 65.3333px;">17:30</div></div></div><div class="vis-rolling-mode-btn" style="visibility: hidden;"></div></div></div>
																<!--end::Timeline-->
															</div>
														</div>
														<!--end::Tab pane-->

														<!--begin::Tab pane-->
														<div class="tab-pane blockui" id="kt_timeline_widget_1_tab_week" role="tabpanel" aria-labelledby="week-tab" data-kt-timeline-widget-1-blockui="true" style="">
															<div class="table-responsive pb-10">
																<!--begin::Timeline-->
																<div id="kt_timeline_widget_1_2" class="vis-timeline-custom h-350px min-w-700px" data-kt-timeline-widget-1-image-root="/good/assets/media/" style="position: relative;"><div class="vis-timeline vis-bottom vis-ltr" style="touch-action: pan-y; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); visibility: visible; height: 354px;"><div class="vis-panel vis-background" style="height: 354px; width: 931px; left: 0px; top: 0px;"></div><div class="vis-panel vis-background vis-vertical" style="height: 354px; width: 804px; left: 129px; top: 0px;"><div class="vis-axis" style="top: 304px; left: 0px;"><div class="vis-group"></div><div class="vis-group"></div><div class="vis-group"></div><div class="vis-group"></div></div><div class="vis-time-axis vis-background"><div class="vis-grid vis-vertical vis-minor vis-day29 vis-december  vis-today  vis-current-month  vis-today vis-monday  vis-even" style="width: 74.6667px; height: 330px; transform: translate(-13.1626px, -1px);"></div><div class="vis-grid vis-vertical vis-minor vis-day31 vis-december  vis-current-month vis-wednesday  vis-odd" style="width: 37.3333px; height: 330px; transform: translate(61.504px, -1px);"></div><div class="vis-grid vis-vertical vis-major vis-day1 vis-january vis-thursday  vis-even" style="width: 74.6667px; height: 355px; transform: translate(98.8374px, -1px);"></div><div class="vis-grid vis-vertical vis-minor vis-day3 vis-january vis-saturday  vis-odd" style="width: 74.6667px; height: 330px; transform: translate(173.504px, -1px);"></div><div class="vis-grid vis-vertical vis-minor vis-day5 vis-january vis-monday  vis-even" style="width: 74.6667px; height: 330px; transform: translate(248.171px, -1px);"></div><div class="vis-grid vis-vertical vis-minor vis-day7 vis-january vis-wednesday  vis-odd" style="width: 74.6667px; height: 330px; transform: translate(322.837px, -1px);"></div><div class="vis-grid vis-vertical vis-minor vis-day9 vis-january vis-friday  vis-even" style="width: 74.6667px; height: 330px; transform: translate(397.504px, -1px);"></div><div class="vis-grid vis-vertical vis-minor vis-day11 vis-january vis-sunday  vis-odd" style="width: 74.6667px; height: 330px; transform: translate(472.171px, -1px);"></div><div class="vis-grid vis-vertical vis-minor vis-day13 vis-january vis-tuesday  vis-even" style="width: 74.6667px; height: 330px; transform: translate(546.837px, -1px);"></div><div class="vis-grid vis-vertical vis-minor vis-day15 vis-january vis-thursday  vis-odd" style="width: 74.6667px; height: 330px; transform: translate(621.504px, -1px);"></div><div class="vis-grid vis-vertical vis-minor vis-day17 vis-january vis-saturday  vis-even" style="width: 74.6667px; height: 330px; transform: translate(696.171px, -1px);"></div><div class="vis-grid vis-vertical vis-minor vis-day19 vis-january vis-monday  vis-odd" style="width: 74.6667px; height: 330px; transform: translate(770.837px, -1px);"></div></div></div><div class="vis-panel vis-background vis-horizontal" style="height: 305px; width: 931px; left: 0px; top: -1px;"></div><div class="vis-panel vis-center" style="touch-action: pan-y; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); height: 305px; width: 804px; left: 128px; top: -1px;"><div class="vis-content" style="left: 0px; transform: translateY(0px);"><div class="vis-itemset" style="height: 303px;"><div class="vis-background"><div class="vis-group" style="height: 0px;"><div style="visibility: hidden; position: absolute;"></div></div><div class="vis-group" style="height: 75px;"><div style="visibility: hidden; position: absolute;"></div></div><div class="vis-group" style="height: 75px;"><div style="visibility: hidden; position: absolute;"></div></div><div class="vis-group" style="height: 75px;"><div style="visibility: hidden; position: absolute;"></div></div><div class="vis-group" style="height: 78px;"><div style="visibility: hidden; position: absolute;"></div></div></div><div class="vis-foreground"><div class="vis-group" style="height: 75px;"><div class="vis-item vis-range vis-readonly" style="transform: translateX(10px); width: 261.333px; top: 17.5px;"><div class="vis-item-overflow"><div class="vis-item-content" style="transform: translateX(0px);"><div class="rounded-pill bg-light-primary d-flex align-items-center position-relative h-40px w-100 p-2 overflow-hidden">
																<div class="position-absolute rounded-pill d-block bg-primary start-0 top-0 h-100 z-index-1" style="width:71%;"></div>
													
																<div class="d-flex align-items-center position-relative z-index-2">
																	<div class="symbol-group symbol-hover flex-nowrap me-3">
																		<div class="symbol symbol-circle symbol-25px"><img alt="" src="/good/assets/media/avatars/300-6.jpg"></div><div class="symbol symbol-circle symbol-25px"><img alt="" src="/good/assets/media/avatars/300-1.jpg"></div>
																	</div>
													
																	<a href="#" class="fw-bold text-white text-hover-dark">Framework</a>
																</div>
													
																<div class="d-flex flex-center bg-body rounded-pill fs-7 fw-bolder ms-auto h-100 px-3 position-relative z-index-2">
																	71%
																</div>
															</div>        
															</div></div><div class="vis-item-visible-frame"></div></div></div><div class="vis-group" style="height: 75px;"><div class="vis-item vis-range vis-readonly" style="transform: translateX(271.333px); width: 261.333px; top: 17.5px;"><div class="vis-item-overflow"><div class="vis-item-content" style="transform: translateX(0px);"><div class="rounded-pill bg-light-success d-flex align-items-center position-relative h-40px w-100 p-2 overflow-hidden">
																<div class="position-absolute rounded-pill d-block bg-success start-0 top-0 h-100 z-index-1" style="width:84%;"></div>
													
																<div class="d-flex align-items-center position-relative z-index-2">
																	<div class="symbol-group symbol-hover flex-nowrap me-3">
																		<div class="symbol symbol-circle symbol-25px"><img alt="" src="/good/assets/media/avatars/300-2.jpg"></div>
																	</div>
													
																	<a href="#" class="fw-bold text-white text-hover-dark">Accessibility</a>
																</div>
													
																<div class="d-flex flex-center bg-body rounded-pill fs-7 fw-bolder ms-auto h-100 px-3 position-relative z-index-2">
																	84%
																</div>
															</div>        
															</div></div><div class="vis-item-visible-frame"></div></div></div><div class="vis-group" style="height: 75px;"><div class="vis-item vis-range vis-readonly" style="transform: translateX(122px); width: 634.667px; top: 17.5px;"><div class="vis-item-overflow"><div class="vis-item-content" style="transform: translateX(0px);"><div class="rounded-pill bg-light-danger d-flex align-items-center position-relative h-40px w-100 p-2 overflow-hidden">
																<div class="position-absolute rounded-pill d-block bg-danger start-0 top-0 h-100 z-index-1" style="width:69%;"></div>
													
																<div class="d-flex align-items-center position-relative z-index-2">
																	<div class="symbol-group symbol-hover flex-nowrap me-3">
																		<div class="symbol symbol-circle symbol-25px"><img alt="" src="/good/assets/media/avatars/300-5.jpg"></div><div class="symbol symbol-circle symbol-25px"><img alt="" src="/good/assets/media/avatars/300-20.jpg"></div>
																	</div>
													
																	<a href="#" class="fw-bold text-white text-hover-dark">Microsites</a>
																</div>
													
																<div class="d-flex flex-center bg-body rounded-pill fs-7 fw-bolder ms-auto h-100 px-3 position-relative z-index-2">
																	69%
																</div>
															</div>        
															</div></div><div class="vis-item-visible-frame"></div></div></div><div class="vis-group" style="height: 78px;"><div class="vis-item vis-range vis-readonly" style="transform: translateX(383.333px); width: 410.667px; top: 18px;"><div class="vis-item-overflow"><div class="vis-item-content" style="transform: translateX(0px);"><div class="rounded-pill bg-light-info d-flex align-items-center position-relative h-40px w-100 p-2 overflow-hidden">
																<div class="position-absolute rounded-pill d-block bg-info start-0 top-0 h-100 z-index-1" style="width:74%;"></div>
													
																<div class="d-flex align-items-center position-relative z-index-2">
																	<div class="symbol-group symbol-hover flex-nowrap me-3">
																		<div class="symbol symbol-circle symbol-25px"><img alt="" src="/good/assets/media/avatars/300-23.jpg"></div><div class="symbol symbol-circle symbol-25px"><img alt="" src="/good/assets/media/avatars/300-12.jpg"></div><div class="symbol symbol-circle symbol-25px"><img alt="" src="/good/assets/media/avatars/300-9.jpg"></div>
																	</div>
													
																	<a href="#" class="fw-bold text-white text-hover-dark">Deployment</a>
																</div>
													
																<div class="d-flex flex-center bg-body rounded-pill fs-7 fw-bolder ms-auto h-100 px-3 position-relative z-index-2">
																	74%
																</div>
															</div>        
															</div></div><div class="vis-item-visible-frame"></div></div></div></div></div></div><div class="vis-shadow vis-top" style="visibility: hidden;"></div><div class="vis-shadow vis-bottom" style="visibility: hidden;"></div></div><div class="vis-panel vis-left" style="touch-action: none; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); height: 305px; left: 0px; top: -1px;"><div class="vis-content" style="left: 0px; top: 0px;"><div class="vis-labelset"><div class="vis-label vis-group-level-0" title="" style="height: 75px;"><div class="vis-inner">Research</div></div><div class="vis-label vis-group-level-0" title="" style="height: 75px;"><div class="vis-inner">Phase 2.6 QA</div></div><div class="vis-label vis-group-level-0" title="" style="height: 75px;"><div class="vis-inner">UI Design</div></div><div class="vis-label vis-group-level-0" title="" style="height: 78px;"><div class="vis-inner">Development</div></div></div></div><div class="vis-shadow vis-top" style="visibility: hidden;"></div><div class="vis-shadow vis-bottom" style="visibility: hidden;"></div></div><div class="vis-panel vis-right" style="height: 305px; left: 932px; top: -1px;"><div class="vis-content" style="left: 0px; top: 0px;"></div><div class="vis-shadow vis-top" style="visibility: hidden;"></div><div class="vis-shadow vis-bottom" style="visibility: hidden;"></div></div><div class="vis-panel vis-top" style="width: 804px; left: 128px; top: 0px;"></div><div class="vis-panel vis-bottom" style="width: 804px; left: 128px; top: 304px;"><div class="vis-time-axis vis-foreground" style="height: 50px;"><div class="vis-text vis-minor vis-measure" style="position: absolute;">0</div><div class="vis-text vis-major vis-measure" style="position: absolute;">0</div><div class="vis-text vis-minor vis-day29 vis-december  vis-today  vis-current-month  vis-today vis-monday  vis-even" style="transform: translate(-12.6626px, 0px); width: 74.6667px;">29</div><div class="vis-text vis-minor vis-day31 vis-december  vis-current-month vis-wednesday  vis-odd" style="transform: translate(62.004px, 0px); width: 37.3333px;">31</div><div class="vis-text vis-minor vis-day1 vis-january vis-thursday  vis-even" style="transform: translate(99.3374px, 0px); width: 74.6667px;">1</div><div class="vis-text vis-minor vis-day3 vis-january vis-saturday  vis-odd" style="transform: translate(174.004px, 0px); width: 74.6667px;">3</div><div class="vis-text vis-minor vis-day5 vis-january vis-monday  vis-even" style="transform: translate(248.671px, 0px); width: 74.6667px;">5</div><div class="vis-text vis-minor vis-day7 vis-january vis-wednesday  vis-odd" style="transform: translate(323.337px, 0px); width: 74.6667px;">7</div><div class="vis-text vis-minor vis-day9 vis-january vis-friday  vis-even" style="transform: translate(398.004px, 0px); width: 74.6667px;">9</div><div class="vis-text vis-major vis-day1 vis-january vis-thursday  vis-even" style="transform: translate(99.3374px, 25px);"><div>janvier 2026</div></div><div class="vis-text vis-minor vis-day11 vis-january vis-sunday  vis-odd" style="transform: translate(472.671px, 0px); width: 74.6667px;">11</div><div class="vis-text vis-minor vis-day13 vis-january vis-tuesday  vis-even" style="transform: translate(547.337px, 0px); width: 74.6667px;">13</div><div class="vis-text vis-minor vis-day15 vis-january vis-thursday  vis-odd" style="transform: translate(622.004px, 0px); width: 74.6667px;">15</div><div class="vis-text vis-minor vis-day17 vis-january vis-saturday  vis-even" style="transform: translate(696.671px, 0px); width: 74.6667px;">17</div><div class="vis-text vis-minor vis-day19 vis-january vis-monday  vis-odd" style="transform: translate(771.337px, 0px); width: 74.6667px;">19</div></div></div><div class="vis-rolling-mode-btn" style="visibility: hidden;"></div></div></div>
																<!--end::Timeline-->
															</div>
														</div>
														<!--end::Tab pane-->

														<!--begin::Tab pane-->
														<div class="tab-pane blockui" id="kt_timeline_widget_1_tab_month" role="tabpanel" aria-labelledby="month-tab" data-kt-timeline-widget-1-blockui="true" style="">
															<div class="table-responsive pb-10">
																<!--begin::Timeline-->
																<div id="kt_timeline_widget_1_3" class="vis-timeline-custom h-350px min-w-700px" data-kt-timeline-widget-1-image-root="/good/assets/media/" style="position: relative;"><div class="vis-timeline vis-bottom vis-ltr" style="touch-action: pan-y; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); visibility: visible; height: 354px;"><div class="vis-panel vis-background" style="height: 354px; width: 931px; left: 0px; top: 0px;"></div><div class="vis-panel vis-background vis-vertical" style="height: 354px; width: 804px; left: 129px; top: 0px;"><div class="vis-axis" style="top: 304px; left: 0px;"><div class="vis-group"></div><div class="vis-group"></div><div class="vis-group"></div><div class="vis-group"></div></div><div class="vis-time-axis vis-background"><div class="vis-grid vis-vertical vis-minor vis-december  vis-current-month  vis-odd" style="width: 114.664px; height: 330px; transform: translate(-96.3129px, -1px);"></div><div class="vis-grid vis-vertical vis-major vis-january  vis-even" style="width: 114.664px; height: 355px; transform: translate(18.3511px, -1px);"></div><div class="vis-grid vis-vertical vis-minor vis-february  vis-odd" style="width: 103.568px; height: 330px; transform: translate(133.015px, -1px);"></div><div class="vis-grid vis-vertical vis-minor vis-march  vis-even" style="width: 114.51px; height: 330px; transform: translate(236.583px, -1px);"></div><div class="vis-grid vis-vertical vis-minor vis-april  vis-odd" style="width: 110.965px; height: 330px; transform: translate(351.093px, -1px);"></div><div class="vis-grid vis-vertical vis-minor vis-may  vis-even" style="width: 114.664px; height: 330px; transform: translate(462.058px, -1px);"></div><div class="vis-grid vis-vertical vis-minor vis-june  vis-odd" style="width: 110.965px; height: 330px; transform: translate(576.722px, -1px);"></div><div class="vis-grid vis-vertical vis-minor vis-july  vis-even" style="width: 114.664px; height: 330px; transform: translate(687.687px, -1px);"></div><div class="vis-grid vis-vertical vis-minor vis-august  vis-odd" style="width: 114.664px; height: 330px; transform: translate(802.351px, -1px);"></div></div></div><div class="vis-panel vis-background vis-horizontal" style="height: 305px; width: 931px; left: 0px; top: -1px;"></div><div class="vis-panel vis-center" style="touch-action: pan-y; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); height: 305px; width: 804px; left: 128px; top: -1px;"><div class="vis-content" style="left: 0px; transform: translateY(0px);"><div class="vis-itemset" style="height: 303px;"><div class="vis-background"><div class="vis-group" style="height: 0px;"><div style="visibility: hidden; position: absolute;"></div></div><div class="vis-group" style="height: 75px;"><div style="visibility: hidden; position: absolute;"></div></div><div class="vis-group" style="height: 75px;"><div style="visibility: hidden; position: absolute;"></div></div><div class="vis-group" style="height: 75px;"><div style="visibility: hidden; position: absolute;"></div></div><div class="vis-group" style="height: 78px;"><div style="visibility: hidden; position: absolute;"></div></div></div><div class="vis-foreground"><div class="vis-group" style="height: 75px;"><div class="vis-item vis-range vis-readonly" style="transform: translateX(10px); width: 225.629px; top: 17.5px;"><div class="vis-item-overflow"><div class="vis-item-content" style="transform: translateX(0px);"><div class="rounded-pill bg-light-primary d-flex align-items-center position-relative h-40px w-100 p-2 overflow-hidden">
																<div class="position-absolute rounded-pill d-block bg-primary start-0 top-0 h-100 z-index-1" style="width:79%;"></div>
													
																<div class="d-flex align-items-center position-relative z-index-2">
																	<div class="symbol-group symbol-hover flex-nowrap me-3">
																		<div class="symbol symbol-circle symbol-25px"><img alt="" src="/good/assets/media/avatars/300-6.jpg"></div><div class="symbol symbol-circle symbol-25px"><img alt="" src="/good/assets/media/avatars/300-1.jpg"></div>
																	</div>
													
																	<a href="#" class="fw-bold text-white text-hover-dark">Tags</a>
																</div>
													
																<div class="d-flex flex-center bg-body rounded-pill fs-7 fw-bolder ms-auto h-100 px-3 position-relative z-index-2">
																	79%
																</div>
															</div>        
															</div></div><div class="vis-item-visible-frame"></div></div></div><div class="vis-group" style="height: 75px;"><div class="vis-item vis-range vis-readonly" style="transform: translateX(124.664px); width: 443.707px; top: 17.5px;"><div class="vis-item-overflow"><div class="vis-item-content" style="transform: translateX(0px);"><div class="rounded-pill bg-light-success d-flex align-items-center position-relative h-40px w-100 p-2 overflow-hidden">
																<div class="position-absolute rounded-pill d-block bg-success start-0 top-0 h-100 z-index-1" style="width:64%;"></div>
													
																<div class="d-flex align-items-center position-relative z-index-2">
																	<div class="symbol-group symbol-hover flex-nowrap me-3">
																		<div class="symbol symbol-circle symbol-25px"><img alt="" src="/good/assets/media/avatars/300-2.jpg"></div>
																	</div>
													
																	<a href="#" class="fw-bold text-white text-hover-dark">Testing</a>
																</div>
													
																<div class="d-flex flex-center bg-body rounded-pill fs-7 fw-bolder ms-auto h-100 px-3 position-relative z-index-2">
																	64%
																</div>
															</div>        
															</div></div><div class="vis-item-visible-frame"></div></div></div><div class="vis-group" style="height: 75px;"><div class="vis-item vis-range vis-readonly" style="transform: translateX(235.629px); width: 558.371px; top: 17.5px;"><div class="vis-item-overflow"><div class="vis-item-content" style="transform: translateX(0px);"><div class="rounded-pill bg-light-danger d-flex align-items-center position-relative h-40px w-100 p-2 overflow-hidden">
																<div class="position-absolute rounded-pill d-block bg-danger start-0 top-0 h-100 z-index-1" style="width:82%;"></div>
													
																<div class="d-flex align-items-center position-relative z-index-2">
																	<div class="symbol-group symbol-hover flex-nowrap me-3">
																		<div class="symbol symbol-circle symbol-25px"><img alt="" src="/good/assets/media/avatars/300-5.jpg"></div><div class="symbol symbol-circle symbol-25px"><img alt="" src="/good/assets/media/avatars/300-20.jpg"></div>
																	</div>
													
																	<a href="#" class="fw-bold text-white text-hover-dark">Media</a>
																</div>
													
																<div class="d-flex flex-center bg-body rounded-pill fs-7 fw-bolder ms-auto h-100 px-3 position-relative z-index-2">
																	82%
																</div>
															</div>        
															</div></div><div class="vis-item-visible-frame"></div></div></div><div class="vis-group" style="height: 78px;"><div class="vis-item vis-range vis-readonly" style="transform: translateX(457.406px); width: 336.594px; top: 18px;"><div class="vis-item-overflow"><div class="vis-item-content" style="transform: translateX(0px);"><div class="rounded-pill bg-light-info d-flex align-items-center position-relative h-40px w-100 p-2 overflow-hidden">
																<div class="position-absolute rounded-pill d-block bg-info start-0 top-0 h-100 z-index-1" style="width:58%;"></div>
													
																<div class="d-flex align-items-center position-relative z-index-2">
																	<div class="symbol-group symbol-hover flex-nowrap me-3">
																		<div class="symbol symbol-circle symbol-25px"><img alt="" src="/good/assets/media/avatars/300-23.jpg"></div><div class="symbol symbol-circle symbol-25px"><img alt="" src="/good/assets/media/avatars/300-12.jpg"></div><div class="symbol symbol-circle symbol-25px"><img alt="" src="/good/assets/media/avatars/300-9.jpg"></div>
																	</div>
													
																	<a href="#" class="fw-bold text-white text-hover-dark">Plugins</a>
																</div>
													
																<div class="d-flex flex-center bg-body rounded-pill fs-7 fw-bolder ms-auto h-100 px-3 position-relative z-index-2">
																	58%
																</div>
															</div>        
															</div></div><div class="vis-item-visible-frame"></div></div></div></div></div></div><div class="vis-shadow vis-top" style="visibility: hidden;"></div><div class="vis-shadow vis-bottom" style="visibility: hidden;"></div></div><div class="vis-panel vis-left" style="touch-action: none; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); height: 305px; left: 0px; top: -1px;"><div class="vis-content" style="left: 0px; top: 0px;"><div class="vis-labelset"><div class="vis-label vis-group-level-0" title="" style="height: 75px;"><div class="vis-inner">Research</div></div><div class="vis-label vis-group-level-0" title="" style="height: 75px;"><div class="vis-inner">Phase 2.6 QA</div></div><div class="vis-label vis-group-level-0" title="" style="height: 75px;"><div class="vis-inner">UI Design</div></div><div class="vis-label vis-group-level-0" title="" style="height: 78px;"><div class="vis-inner">Development</div></div></div></div><div class="vis-shadow vis-top" style="visibility: hidden;"></div><div class="vis-shadow vis-bottom" style="visibility: hidden;"></div></div><div class="vis-panel vis-right" style="height: 305px; left: 932px; top: -1px;"><div class="vis-content" style="left: 0px; top: 0px;"></div><div class="vis-shadow vis-top" style="visibility: hidden;"></div><div class="vis-shadow vis-bottom" style="visibility: hidden;"></div></div><div class="vis-panel vis-top" style="width: 804px; left: 128px; top: 0px;"></div><div class="vis-panel vis-bottom" style="width: 804px; left: 128px; top: 304px;"><div class="vis-time-axis vis-foreground" style="height: 50px;"><div class="vis-text vis-minor vis-measure" style="position: absolute;">0</div><div class="vis-text vis-major vis-measure" style="position: absolute;">0</div><div class="vis-text vis-minor vis-december  vis-current-month  vis-odd" style="transform: translate(-95.8129px, 0px); width: 114.664px;">déc.</div><div class="vis-text vis-minor vis-january  vis-even" style="transform: translate(18.8511px, 0px); width: 114.664px;">janv.</div><div class="vis-text vis-minor vis-february  vis-odd" style="transform: translate(133.515px, 0px); width: 103.568px;">févr.</div><div class="vis-text vis-minor vis-march  vis-even" style="transform: translate(237.083px, 0px); width: 114.51px;">mars</div><div class="vis-text vis-minor vis-april  vis-odd" style="transform: translate(351.593px, 0px); width: 110.965px;">avr.</div><div class="vis-text vis-minor vis-may  vis-even" style="transform: translate(462.558px, 0px); width: 114.664px;">mai</div><div class="vis-text vis-minor vis-june  vis-odd" style="transform: translate(577.222px, 0px); width: 110.965px;">juin</div><div class="vis-text vis-major vis-january  vis-even" style="transform: translate(18.8511px, 25px);"><div>2026</div></div><div class="vis-text vis-minor vis-july  vis-even" style="transform: translate(688.187px, 0px); width: 114.664px;">juil.</div><div class="vis-text vis-minor vis-august  vis-odd" style="transform: translate(802.851px, 0px); width: 114.664px;">août</div></div></div><div class="vis-rolling-mode-btn" style="visibility: hidden;"></div></div></div>
																<!--end::Timeline-->
															</div>
														</div>
														<!--end::Tab pane-->
													</div>
													<!--end::Tab content-->
												</div>
												<!--end::Card body-->
											</div>
																					
																					
										</div>
										<!--end::Col-->
<!-- DEBUT CADRE 10 -------------------------------------------------------------------------------------------------------------- --!>											
										<!--begin::Col-->
										<div class="col-xl-4">
											
											<!--begin::List widget 6-->
											<div class="card card-flush h-md-100">
												<!--begin::Header-->
											début cadre 10 	
												
												<div class="card-header pt-7">
													<!--begin::Title-->
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bold text-gray-800">Top Selling Products</span>
														<span class="text-gray-400 mt-1 fw-semibold fs-6">8k social visitors</span>
													</h3>
													<!--end::Title-->
													<!--begin::Toolbar-->
													<!-- <div class="card-toolbar">
														<a href="#" class="btn btn-sm btn-light">View All</a>
													</div> -->
													<!--end::Toolbar-->
												</div>
												<!--end::Header-->
												<!--begin::Body-->
												<div class="card-body pt-4">
													<!--begin::Table container-->
													<div class="table-responsive">
													
													<div class="todo-widget">
													  <input type="text" id="todo-input" class="form-control" placeholder="Ajouter une tâche…" />
													  <ul id="todo-list" class="list-group mt-2"></ul>
													</div>


													<!--begin::Table-->
														<table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
															<!--begin::Table head-->
															<thead>
																<tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
																	<th class="p-0 w-50px pb-1">nom de la tâche</th>
																	<th class="ps-0 min-w-140px"></th>
																	<th class="text-end min-w-140px p-0 pb-1">Fait/SUP</th>
																</tr>
															</thead>
															<!--end::Table head-->
															<!--begin::Table body-->
															<tbody>
																<tr>
																	<td>
																		<img src="assets/media/stock/ecommerce/210.gif" class="w-50px" alt="">
																	</td>
																	<td class="ps-0">
																		<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6 text-start pe-0">Elephant 1802</a>
																		<span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Item: #XDG-2347</span>
																	</td>
																	<td>
																		<span class="text-gray-800 fw-bold d-block fs-6 ps-0 text-end">$72.00</span>
																	</td>
																</tr>
																<tr>
																	<td>
																		<img src="assets/media/stock/ecommerce/215.gif" class="w-50px" alt="">
																	</td>
																	<td class="ps-0">
																		<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6 text-start pe-0">Red Laga</a>
																		<span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Item: #XDG-2347</span>
																	</td>
																	<td>
																		<span class="text-gray-800 fw-bold d-block fs-6 ps-0 text-end">$45.00</span>
																	</td>
																</tr>
																<tr>
																	<td>
																		<img src="assets/media/stock/ecommerce/209.gif" class="w-50px" alt="">
																	</td>
																	<td class="ps-0">
																		<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6 text-start pe-0">RiseUP</a>
																		<span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Item: #XDG-2347</span>
																	</td>
																	<td>
																		<span class="text-gray-800 fw-bold d-block fs-6 ps-0 text-end">$168.00</span>
																	</td>
																</tr>
																<tr>
																	<td>
																		<img src="assets/media/stock/ecommerce/214.gif" class="w-50px" alt="">
																	</td>
																	<td class="ps-0">
																		<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6 text-start pe-0">Yellow Stone</a>
																		<span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Item: #XDG-2347</span>
																	</td>
																	<td>
																		<span class="text-gray-800 fw-bold d-block fs-6 ps-0 text-end">$72.00</span>
																	</td>
																</tr>
															</tbody>
															<!--end::Table body-->
														</table>
													
													
													
													
													
													
													</div>
													<!--end::Table-->
												</div>
												<!--end::Body-->
											
											début cadre 10
											
											</div>
											<!--end::List widget 6-->
										
										</div>
										<!--end::Col-->
									</div>
								<!--end::Row-->
						<?php } ?>	
								
								
								
							</div>
								<!--end::Content container-->
						</div>



						<!-- ********************************************************************************************************************************** -->
						<!-- begin::Footer begin::Footer begin::Footer begin::Footer begin::Footer begin::Footer begin::Footer begin::Footer begin::Footer begin::Footer begin::    -->
						<!-- ********************************************************************************************************************************** -->
						
						<div class="app-footer align-items-center justify-content-center justify-content-md-between flex-column flex-md-row py-3" id="kt_app_footer">
						
							<?php 

								$file = $_SERVER['DOCUMENT_ROOT']."/odyssee/pages/footer.php";
								// if ($_SESSION['mode_eco']=="full") 							
								if (file_exists($file)) { include $file; } else {	echo '<div class="text-dark order-2 order-md-1"><span class="text-muted fw-semibold me-1">ZeCrusher&copy;</span> <a class="text-gray-800 text-hover-primary" href="#" target="_blank">Erreur d\'installation de l\'Extranet</a></div>';	}		
							?>
						<!-- ********************************************************************************************************************************** -->
						<!-- END::Footer END::Footer END::Footer END::Footer END::Footer END::Footer END::Footer END::Footer END::Footer END::Footer END::    -->
						<!-- ********************************************************************************************************************************** -->
						</div><!--end:::Footer-->
						
						<?php 						
						
							$file = $_SERVER['DOCUMENT_ROOT']."/odyssee/pages/aside.php";
							if (file_exists($file)) { include $file; } else {	echo "Le fichier fonctions est introuvable.";	}		
							
						?>
	
					</div><!--end::Wrapper-->
				</div><!--end::Page-->
			</div><!--end::App-->

			<?php 	
				/* Bouton CUSTOMIZE */					
				// <!-- ********************************************************************************************************************************** -->
				 	$file = $_SERVER['DOCUMENT_ROOT']."/odyssee/pages/layout.php";
					// if ($_SESSION['mode_eco']=="full") 
						if (file_exists($file)) { include $file; } else {	echo "Le fichier fonctions est introuvable.";	}		
				 
				// <!-- ********************************************************************************************************************************** -->
 
							
					$file = $_SERVER['DOCUMENT_ROOT']."/odyssee/pages/widget-aide.php";
					// if ($_SESSION['mode_eco']=="full") 					
						if (file_exists($file)) { include $file; } else {	echo "Le fichier fonctions est introuvable.";	}		
				?>



			<!--begin::Modal - NEWS et astuces -->
				<div class="modal fade" id="modal_manage_astuces" tabindex="-1" aria-hidden="true">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Gérer les astuces du Web</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
							</div>
							<div class="modal-body">
								<form id="form_add_astuce" class="mb-10">
									<input type="hidden" name="action" id="form_action" value="add">
									
									<input type="hidden" name="id" id="astuce_id" value="">

									<div class="mb-5">
										<label class="form-label fw-bold" id="form_title_label">Nouvelle astuce</label>
										<textarea name="astuces" id="input_astuces" class="form-control form-control-solid" rows="2" required placeholder="Ecrivez votre conseil ici..."></textarea>
									</div>
									
									<div class="mb-5">
										<label class="form-label fw-bold">Lien URL</label>
										<input type="url" name="lien" id="input_lien" class="form-control form-control-solid" placeholder="https://...">
									</div>
									
									<div class="d-flex">
										<button type="submit" id="btn_submit_astuce" class="btn btn-sm btn-primary me-3">
											<span class="indicator-label">Ajouter au carrousel</span>
											<span class="indicator-progress">
												Patientez... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
											</span>
										</button>
										
										<button type="button" id="btn_cancel_edit" class="btn btn-sm btn-light" style="display:none;" onclick="resetForm()">
											Annuler
										</button>
									</div>
								</form>

								<div class="separator separator-dashed my-5"></div>

								<label class="form-label fw-bold mb-3">Astuces en ligne</label>
								<div class="table-responsive">
									<table class="table table-row-dashed align-middle gs-0 gy-3">
										<thead>
											<tr class="fw-bold text-muted">
												<th>Texte</th>
												<th class="text-end">Action</th>
											</tr>
										</thead>
										<tbody>
											<?php foreach ($astuces as $astuce): ?>
											<tr id="astuce-row-<?php echo $astuce['id']; ?>">
												<td class="text-dark fs-7">
													<?php echo mb_strimwidth(htmlspecialchars($astuce['astuces']), 0, 50, "..."); ?>
												</td>
												<td class="text-end">
													<button type="button" 
															class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-2"
															onclick="loadEditForm('<?php echo $astuce['id']; ?>', `<?php echo addslashes($astuce['astuces']); ?>`, '<?php echo $astuce['lien']; ?>')">
														<i class="ki-duotone ki-notepad-edit fs-3"><span class="path1"></span><span class="path2"></span></i>
													</button>

													<button type="button" class="btn btn-icon btn-bg-light btn-active-color-danger btn-sm"  onclick="deleteAstuce(<?php echo $astuce['id']; ?>)">
														<i class="ki-duotone ki-trash fs-3"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>
													</button>
												</td>
											</tr>
											<?php endforeach; ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>




			<!--begin::Modal - Create/Edit Event-->
			<div class="modal fade" id="kt_modal_create_event" tabindex="-1" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered mw-650px">
					<div class="modal-content">
						<form id="form_edit_event" class="form">
							<div class="modal-header">
								<h2 class="fw-bold" id="modal_event_title_text">Détail de l'événement</h2>
								<div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
									<i class="ki-duotone ki-cross fs-2x"></i>
								</div>
							</div>

							<div class="modal-body py-10 px-lg-17">
								<input type="hidden" id="modal_event_id" name="id">

								<div class="fv-row mb-7">
									<label class="required fs-6 fw-semibold mb-2">Titre de l'événement</label>
									<input type="text" class="form-control form-control-solid" id="modal_event_title" name="title" readonly />
								</div>

								<div class="fv-row mb-7">
									<label class="fs-6 fw-semibold mb-2">Description</label>
									<textarea class="form-control form-control-solid" id="modal_event_description" name="description" rows="3" readonly></textarea>
								</div>

								<div class="row mb-7">
									<div class="col-md-6">
										<label class="required fs-6 fw-semibold mb-2">Date de début</label>
										<input type="datetime-local" class="form-control form-control-solid" id="modal_event_start" name="start_date" readonly />
									</div>
									<div class="col-md-6">
										<label class="fs-6 fw-semibold mb-2">Date de fin</label>
										<input type="datetime-local" class="form-control form-control-solid" id="modal_event_end" name="end_date" readonly />
									</div>
								</div>

								<div class="fv-row mb-7">
									<label class="fs-6 fw-semibold mb-2">Couleur</label>
									<input type="color" class="form-control form-control-color form-control-solid w-100px" id="modal_event_color" name="color" disabled />
								</div>

			<!--                    <div class="fv-row mb-7">
									<label class="fs-6 fw-semibold mb-2">Créé par</label>
									<input type="text" class="form-control form-control-solid" id="modal_event_creator" name="creator" readonly />
								</div> -->
							</div>

							<div class="modal-footer flex-center">
								<button type="button" class="btn btn-light me-3" data-bs-dismiss="modal">Fermer</button>
							<!--    <button type="button" id="btn_edit_event" class="btn btn-primary">
									<span class="indicator-label">Modifier</span>
									<span class="indicator-progress">Patientez... 
										<span class="spinner-border spinner-border-sm align-middle ms-2"></span>
									</span>
								</button> 
								<button type="button" id="btn_delete_event" class="btn btn-danger ms-2">
									<i class="ki-duotone ki-trash fs-2"></i> Supprimer
								</button> -->
							</div>
						</form>
					</div>
				</div>
			</div>
			<!--end::Modal-->
														

			  
	<!--end::Modals-->
 
	<!--  Projet 
		<script src="/good/assets/plugins/global/vis-timeline.bundle.js"></script>
	-->
 
 
 			<script src="<?php echo 'https://'.$_SERVER['HTTP_HOST'].'/odyssee/'; ?>js/scripts.bundle.js"></script>
 
		<!--begin::Javascript-->
			<script src="<?php echo 'https://'.$_SERVER['HTTP_HOST'].'/odyssee/'; ?>assets/plugins/global/plugins.bundle.js"></script>


		<!-- En test pour le moment -->
			<script src="<?php echo 'https://'.$_SERVER['HTTP_HOST'].'/odyssee/'; ?>assets/js/themes/Animated.js"></script>
		<!-- En test pour le moment -->

			
			<!--begin::Vendors Javascript(used for this page only)-->
			<script src="<?php echo 'https://'.$_SERVER['HTTP_HOST'].'/odyssee/'; ?>assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
			<script src="<?php echo 'https://'.$_SERVER['HTTP_HOST'].'/odyssee/'; ?>assets/js/index.js"></script>
 		
			<script src="<?php echo 'https://'.$_SERVER['HTTP_HOST'].'/odyssee/'; ?>assets/plugins/custom/datatables/datatables.bundle.js"></script> 
			<script src="<?php echo 'https://'.$_SERVER['HTTP_HOST'].'/odyssee/'; ?>js/vis-timeline.js"></script>

			<script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js"></script>
			
			<!--begin::Custom Javascript(used for this page only)-->
			<script src="<?php echo 'https://'.$_SERVER['HTTP_HOST'].'/odyssee/'; ?>assets/js/widgets.bundle.js"></script>
			<script src="<?php echo 'https://'.$_SERVER['HTTP_HOST'].'/odyssee/'; ?>assets/js/custom/widgets.js"></script>
			<script src="<?php echo 'https://'.$_SERVER['HTTP_HOST'].'/odyssee/'; ?>assets/js/custom/apps/chat/chat.js"></script>
<!--			
			<script src="< ?php echo 'https://'.$_SERVER['HTTP_HOST'].'/odyssee/'; ?>assets/js/custom/utilities/modals/upgrade-plan.js"></script>
			<script src="< ?php echo 'https://'.$_SERVER['HTTP_HOST'].'/odyssee/'; ?>assets/js/custom/utilities/modals/create-account.js"></script>
			<script src="< ?php echo 'https://'.$_SERVER['HTTP_HOST'].'/odyssee/'; ?>assets/js/custom/utilities/modals/create-app.js"></script>
			<script src="< ?php echo 'https://'.$_SERVER['HTTP_HOST'].'/odyssee/'; ?>assets/js/custom/utilities/modals/users-search.js"></script>   -->
			<!--end::Custom Javascript-->
		<!--end::Javascript-->			
		<script>
		
		
		
		
		
		/* Découverte d'ODYSSÉE */	
		if (window.CSS && CSS.registerProperty) {
			try {
				CSS.registerProperty({
					name: '--x',
					syntax: '<length>',
					inherits: false,
					initialValue: '0px' // Changé de 50% à 0px
				});
				CSS.registerProperty({
					name: '--y',
					syntax: '<length>',
					inherits: false,
					initialValue: '0px' // Changé de 50% à 0px
				});
			} catch (e) {
				console.log("Les propriétés CSS sont déjà enregistrées ou non supportées.");
			}
		}

	
		
				$(document).ready(function() {
					function chargerMessages(tri) {
						$.ajax({
							url: '<?php echo 'https://'.$_SERVER['HTTP_HOST'].'/odyssee/'; ?>ajax/ajax_get_messages.php',
							type: 'GET',
							data: { tri: tri },
							dataType: 'json',
							success: function(response) {
								$('#messages').html(response.html);
							}
						});
					}

					$('#nb_1').click(function() { chargerMessages('nb_1');	});
					$('#nb_2').click(function() { chargerMessages('nb_2');	});
					$('#nb_3').click(function() { chargerMessages('nb_3');	});
					$('#nb_4').click(function() { chargerMessages('nb_4');	});
					$('#nb_5').click(function() { chargerMessages('nb_5');	});
					$('#nb_6').click(function() { chargerMessages('nb_6');	});

					// Rafraîchir les messages toutes les 5 secondes
					setInterval(function() {
						let triActuel;
							if ($('#nb_1').hasClass('active')) {
								triActuel = 'nb_1';
							} else if ($('#nb_2').hasClass('active')) {
								triActuel = 'nb_2';
							} else if ($('#nb_3').hasClass('active')) {
								triActuel = 'nb_3';
							} else if ($('#nb_4').hasClass('active')) {
								triActuel = 'nb_4';
							} else if ($('#nb_5').hasClass('active')) {
								triActuel = 'nb_5';
							} else {
								triActuel = 'nb_6';
							}
					}, <?php echo $_SESSION['rafraichissement']; ?>); // 5000 ms = 5 secondes



				});

 

				const astuces = <?php echo json_encode($astuces); ?>;
				let index = 0;
				const div = document.getElementById('cadre-astuces');

				// Fonction pour afficher une astuce avec un lien
				// function afficherAstuce(i) {
					// const astuce = astuces[i];
					// div.innerHTML = astuce.lien
						// ? `<a href="${astuce.lien}" class="btn btn-sm btn-light" target="_blank">${astuce.astuces}</a>`
						// : astuce.astuces;
				// }

				// afficherAstuce(index); // Affiche la première au chargement <a class="btn btn-sm btn-light" data-bs-target="#kt_modal_create_project" data-bs-toggle="modal" href="#">View</a>

				// setInterval(() => {
					// div.classList.add('fade-out');
					// setTimeout(() => {
						// index = (index + 1) % astuces.length;
						// afficherAstuce(index);
						// div.classList.remove('fade-out');
					// }, 500);
				// }, < ?php echo $_SESSION['rafraichissement']; ?>); // Toutes les 4 secondes

 		</script>



			
			
<!-- 
 Gestion du widget Agenda 
-->		
		<script>
		/* -------------------------------
		   Chargement AJAX des événements
		---------------------------------*/
		async function fetchEvents() {
			const res = await fetch('<?php echo "https://".$_SERVER["HTTP_HOST"]."/odyssee/"; ?>ajax/fullcalendar/ajax_load_events_widget.php');
			return await res.json();
		}

		/* -------------------------------
		   Format "14 novembre"
		---------------------------------*/
		function formatDateClear(dateStr) {
			if (!dateStr) return '';
			const date = new Date(dateStr);
			return date.toLocaleDateString('fr-FR', { day: 'numeric', month: 'long' });
		}

		/* -------------------------------
		   Bullet colorée
		---------------------------------*/
		function createBullet(color) {
			const bullet = document.createElement('span');
			bullet.className = 'bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4';
			bullet.style.background = color || '#3788d8';
			return bullet;
		}

		/* -------------------------------
		   Élément événement complet
		---------------------------------*/
		function createEventElement(ev) {
			const wrapper = document.createElement('div');
			wrapper.className = 'd-flex align-items-center mb-6 event-item';
			wrapper.style.cursor = 'pointer';

			// bullet
			wrapper.appendChild(createBullet(ev.color));

			const info = document.createElement('div');
			info.className = 'flex-grow-1 me-5';

			const startDate = new Date(ev.start);
			const endDate = ev.end ? new Date(ev.end) : startDate;

			const startStr = formatDateClear(ev.start);
			const endStr = formatDateClear(ev.end);

			const dateText = startDate.toDateString() === endDate.toDateString()
				? startStr
				: `Du ${startStr} au ${endStr}`;

			const startTime = startDate.toLocaleTimeString('fr-FR', { hour:'2-digit', minute:'2-digit' });
			const endTime = endDate.toLocaleTimeString('fr-FR', { hour:'2-digit', minute:'2-digit' });

			info.innerHTML = `
				<div class="text-gray-600 fw-semibold fs-4">${dateText} | [${startTime} - ${endTime}]</div>
				<div class="text-gray-700 fw-semibold fs-6">${ev.title}</div>
				<div class="text-gray-500 fw-semibold fs-7">
					Créé par <a class="text-primary opacity-75-hover fw-semibold" href="#">${ev.created_by_name || 'Inconnu'}</a>
				</div>
			`;

			wrapper.appendChild(info);

			/* ---- Bouton Voir ---- */
			const viewBtn = document.createElement('a');
			viewBtn.className = 'btn btn-sm btn-light';
			viewBtn.href = '#';
			viewBtn.innerText = 'Voir';
			viewBtn.setAttribute('data-bs-toggle','modal');
			viewBtn.setAttribute('data-bs-target','#kt_modal_create_event');

			viewBtn.addEventListener('click', (e) => {
				e.preventDefault();

				// Format pour <input type="datetime-local">
				const formatForInput = (dateStr) => {
					if (!dateStr) return '';
					const d = new Date(dateStr);
					d.setMinutes(d.getMinutes() - d.getTimezoneOffset());
					return d.toISOString().slice(0,16);
				};

				document.querySelector('#modal_event_id').value = ev.id;
				document.querySelector('#modal_event_title').value = ev.title || '';
				document.querySelector('#modal_event_description').value = ev.description || '';
				document.querySelector('#modal_event_start').value = formatForInput(ev.start);
				document.querySelector('#modal_event_end').value = formatForInput(ev.end);
				document.querySelector('#modal_event_color').value = ev.color || '#3788d8';
				document.querySelector('#modal_event_creator').value = ev.created_by_name || 'Inconnu';

				document.querySelector('#modal_event_title_text').innerText = "Détail de l'événement";
			});

			wrapper.appendChild(viewBtn);

			wrapper.addEventListener('mouseenter', () => wrapper.style.background = '#f9f9f9');
			wrapper.addEventListener('mouseleave', () => wrapper.style.background = 'transparent');

			return wrapper;
		}

/* -----------------------------------------------------------------------------
   Construction du widget 
--------------------------------------------------------------------------------*/

		function buildWidget(events) {
			const datesNav = document.getElementById('dates-nav');
			const datesContent = document.getElementById('dates-content');

			const today = new Date();
			today.setHours(0,0,0,0);

			const startDate = new Date(today);
			startDate.setDate(startDate.getDate() - 2);

			const dateList = [];
			for (let i = 0; i < 11; i++) {
				const d = new Date(startDate);
				d.setDate(startDate.getDate() + i);
				dateList.push(d);
			}

			datesNav.innerHTML = '';
			datesContent.innerHTML = '';

			let totalEventsCount = 0;

			dateList.forEach((d, idx) => {
				const isToday = d.toDateString() === today.toDateString();

				const day = d.toLocaleDateString('fr-FR', { weekday:'short' });
				const dayNum = d.getDate();

				const li = document.createElement('li');
				li.className = 'nav-item p-0 ms-0';

				li.innerHTML = `
					<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 
						btn-active-danger ${isToday ? 'active' : ''}" 
						data-bs-toggle="tab" 
						href="#tab_date_${idx}" 
						role="tab">
						${day}
						<span class="fs-6 fw-bold">${dayNum}</span>
					</a>
				`;
				datesNav.appendChild(li);

				const tabPane = document.createElement('div');
				tabPane.className = `tab-pane fade ${isToday ? 'show active' : ''}`;
				tabPane.id = `tab_date_${idx}`;

				/* ---- Filtre des événements du jour ---- */
		const eventsForDay = events.filter(ev => {
			const evStart = new Date(ev.start);
			const evEnd = ev.end ? new Date(ev.end) : evStart;

			// On normalise TOUTES les dates en supprimant l’heure
			const dayStart = new Date(d.getFullYear(), d.getMonth(), d.getDate());
			const evStartDay = new Date(evStart.getFullYear(), evStart.getMonth(), evStart.getDate());
			const evEndDay = new Date(evEnd.getFullYear(), evEnd.getMonth(), evEnd.getDate());

			return evStartDay <= dayStart && evEndDay >= dayStart;
		}).slice(0, 4);


				totalEventsCount += eventsForDay.length;

				if (eventsForDay.length === 0) {
					const noEv = document.createElement('div');
					noEv.className = 'text-center text-muted py-5';
					noEv.innerHTML = `
						<div>Il n'y a pas d'événement aujourd'hui</div>
						<button class="btn btn-sm btn-light mt-3">
							<i class="ki-duotone ki-calendar-add">
								<span class="path1"></span><span class="path2"></span><span class="path3"></span>
								<span class="path4"></span><span class="path5"></span><span class="path6"></span>
							</i>
							Ouvrir l'agenda
						</button>
					`;
					tabPane.appendChild(noEv);

					noEv.querySelector('button').addEventListener('click', () => {
						window.location.href = 'apps/calendar/calendar.php';
					});

				} else {
					eventsForDay.forEach(ev => tabPane.appendChild(createEventElement(ev)));
				}

				datesContent.appendChild(tabPane);
			});

			document.getElementById('total-events').innerText = `${totalEventsCount} événements`;
		}

		/* -------------------------------
		   Lancement
		---------------------------------*/
		fetchEvents().then(events => buildWidget(events));

		 
		 
		/* ********************************************************************************************************************************************* */ 
		 
 
		document.addEventListener('DOMContentLoaded', function () {

			const charts = {};

			function initChart(el) {
				if (charts[el.id]) return;

				const percent = parseInt(el.dataset.percent, 10) || 0;

				const options = {
					chart: {
						type: 'radialBar',
						height: 80,
						sparkline: { enabled: true }
					},
					series: [percent],
					plotOptions: {
						radialBar: {
							hollow: {
								size: '65%'
							},
							track: {
								background: '#DDF8FC'
							},
							dataLabels: {
								show: true,
								name: {
									show: false    // Supprime le nom
								},
								value: {
									show: true,
									fontSize: '12px',
									fontWeight: 600,
									color: '#3F4254',
									offsetY: 4,
									formatter: function (val) {
										return val + '%';
									}
								}
							}
						}
					},
					legend: {
						show: false   // Supprime toute légende parasite et ouai, il y en avait ^^' 
					},

					colors: [
						percent >= 100 ? '#F1416C' :
						percent >= 75  ? '#FFC700' :
						'#4FC9DA'
					]
				};

				charts[el.id] = new ApexCharts(el, options);
				charts[el.id].render();
			}

			// Init du slide actif au chargement
			document.querySelectorAll('.carousel-item.active .task-chart')
				.forEach(initChart);

			// Init lors du changement de slide
			const carousel = document.getElementById('kt_sliders_widget_1_slider');

			carousel.addEventListener('slid.bs.carousel', function (e) {
				e.target
				 .querySelectorAll('.carousel-item.active .task-chart')
				 .forEach(initChart);
			});

		});


	/* Todo list */
	
	$(document).ready(function() {
		// 1. Chargement initial des tâches
		loadTasks();

		// 2. AJOUT RAPIDE (Touche Entrée)
		$(document).on('keypress', '#quick_add_task', function(e) {
			if (e.which == 13) {
				const title = $(this).val().trim();
				if (title !== "") {
					$.post('<?php echo "https://".$_SERVER["HTTP_HOST"]."/odyssee/"; ?>ajax/todo/task_handler.php', { action: 'quick_add', title: title }, function() {
						$('#quick_add_task').val('');
						loadTasks(); // Recharge la liste et le compteur
					});
				}
			}
		});

		// 3. COCHER / DÉCOCHER UNE TÂCHE (Optimistic UI)
		// on rajoute border border-gray-400 border-dashed car c'est plus visible et plus sympa ^^' 
		$(document).on('change', '.btn-check-task', function() {
			const checkbox = $(this);
			const id = checkbox.data('id');
			const isChecked = checkbox.is(':checked') ? 1 : 0;
			const itemContainer = checkbox.closest('.draggable-item');
			const label = itemContainer.find('.flex-grow-1 span');

			// Effet visuel immédiat Opacité avec 0.6 et 1. Moins que 0.6 n'est pas top top !
			if (isChecked) {
				label.addClass('text-decoration-line-through text-gray-500');
				itemContainer.css('opacity', '0.6');
			} else {
				label.removeClass('text-decoration-line-through text-gray-500');
				itemContainer.css('opacity', '1');
			}

			// Mise à jour en base de données
			$.post('<?php echo "https://".$_SERVER["HTTP_HOST"]."/odyssee/"; ?>ajax/todo/task_handler.php', { action: 'toggle_check', id: id, status: isChecked }, function() {
				// On rafraîchit après un court délai pour mettre à jour le compteur et l'ordre
				setTimeout(loadTasks, 500);
			});
		});

		// 4. OUVRIR LE MODAL D'ÉDITION
		$(document).on('click', '.btn-edit-task', function() {
			const id = $(this).data('id');
			$.post('<?php echo "https://".$_SERVER["HTTP_HOST"]."/odyssee/"; ?>ajax/todo/task_handler.php', { action: 'get_task', id: id }, function(data) {
				const task = JSON.parse(data);
				
				// Remplissage des champs
				$('#edit_task_id').val(task.task_id);
				$('#edit_task_title').val(task.task_title);
				$('#edit_task_description').val(task.task_description);
				
				// Formatage des dates pour l'input datetime-local (YYYY-MM-DDTHH:MM)
				if(task.task_start_date) $('#edit_task_start').val(task.task_start_date.replace(' ', 'T').substring(0,16));
				if(task.task_end_date) $('#edit_task_end').val(task.task_end_date.replace(' ', 'T').substring(0,16));
				
				// Sélection de la pastille de couleur
				let colorVal = (task.task_color === '0' || !task.task_color) ? 'primary' : task.task_color;
				$('input[name="task_color"][value="' + colorVal + '"]').prop('checked', true);
				
				$('#modal_edit_task').modal('show');
			});
		});

		// 5. SAUVEGARDER L'ÉDITION (Submit du Modal)
		$('#form_edit_task').on('submit', function(e) {
			e.preventDefault();
			const formData = $(this).serialize();
			$.post('<?php echo "https://".$_SERVER["HTTP_HOST"]."/odyssee/"; ?>ajax/todo/task_handler.php', formData + '&action=update', function() {
				$('#modal_edit_task').modal('hide');
				loadTasks();
			});
		});

		// 6. SUPPRIMER UNE TÂCHE (SweetAlert2)
		$(document).on('click', '.btn-delete-task', function() {
			const id = $(this).data('id');
			
			Swal.fire({
				text: "Supprimer définitivement cette tâche ?",
				icon: "warning",
				showCancelButton: true,
				buttonsStyling: false,
				confirmButtonText: "Oui, supprimer",
				cancelButtonText: "Annuler",
				customClass: {
					confirmButton: "btn btn-danger",
					cancelButton: "btn btn-active-light"
				}
			}).then(function (result) {
				if (result.isConfirmed) {
					$.post('<?php echo "https://".$_SERVER["HTTP_HOST"]."/odyssee/"; ?>ajax/todo/task_handler.php', { action: 'delete', id: id }, function() {
						loadTasks();
					});
				}
			});
		});
	});


	/**
	 * Charge le HTML de la liste, met à jour le compteur et réinitialise les plugins
	 */
	function loadTasks() {
		$.ajax({
			url: '<?php echo "https://".$_SERVER["HTTP_HOST"]."/odyssee/"; ?>ajax/todo/task_handler.php',
			type: 'POST',
			data: { action: 'list' },
			success: function(html) {
				// Injection du contenu
				$('#todo_items_container').html(html);

				// Mise à jour du compteur (via l'input hidden généré par PHP)
				const count = $('#php_task_count').val();
				if (count !== undefined) {
					const text = count > 1 ? count + ' tâches en cours' : count + ' tâche en cours';
					$('#task_count').text(text);
				}

				// Réinitialisation du Scroll Saul/KeenTheme
				const scrollElement = document.querySelector('[data-kt-scroll="true"]');
				if (scrollElement) {
					const scroll = KTScroll.getInstance(scrollElement);
					if (scroll) {
						scroll.update();
					}
				}
				// Réinitialisation du Drag & Drop
				initSortable();
			}
		});
	}

	/**
	 * Initialise SortableJS sur le conteneur
	 */
	 
	function initSortable() {
		const el = document.getElementById('todo_items_container');
		if (!el) return;

		Sortable.create(el, {
			handle: '.draggable-handle',
			animation: 150,
			onEnd: function () {
				let order = [];
				$('.draggable-item').each(function() {
					order.push($(this).data('id'));
				});

				$.post('<?php echo "https://".$_SERVER["HTTP_HOST"]."/odyssee/"; ?>ajax/todo/task_handler.php', { action: 'update_order', order: order });
			}
		});
	}

	function loadOnlineUsersWidget() {
		$.ajax({
			url: '<?php echo "https://".$_SERVER["HTTP_HOST"]."/odyssee/"; ?>/ajax/messages/ajax_online_users_1h.php', 
			method: 'GET',
			dataType: 'json',
			success: function(response) {
				const $container = $('#online-users-widget');
				$container.empty();
				response.forEach(function(user) {
					// Construction du HTML version "Widget"
					let userHtml = `<a href="<?php echo 'https://'.$_SERVER['HTTP_HOST'].'/odyssee/apps/chat/'; ?>messages.php?destinataire_id=${user.id_login}">
						<div class="symbol symbol-80px symbol-circle  bg-light-info" data-bs-toggle="tooltip" title="${user.login}" data-kt-initialized="1">
								<img alt="${user.login}" src="data:image/jpeg;base64,${user.avatarData}">
						</div>
						</a>`;
					$container.append(userHtml);
				});
				// Réinitialiser les tooltips Bootstrap pour les nouveaux éléments
				const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
				tooltipTriggerList.map(function (tooltipTriggerEl) {
					return new bootstrap.Tooltip(tooltipTriggerEl);
				});
			}, 
			error: function() {
				console.log('Erreur lors de la récupération des utilisateurs.');
			}
		});
	}

	// Lancement
	$(document).ready(function() {
		loadOnlineUsersWidget();
		setInterval(loadOnlineUsersWidget, <?php echo $_SESSION['rafraichissement']; ?>);
	});


/* ZeCruher
*
*
*
*/
 
 
	function resetForm() {
		document.getElementById('form_add_astuce').reset();
		document.getElementById('form_action').value = 'add';
		document.getElementById('astuce_id').value = '';
		document.getElementById('form_title_label').innerText = 'Nouvelle astuce';
		document.getElementById('btn_submit_astuce').querySelector('.indicator-label').innerText = 'Ajouter au carrousel';
		document.getElementById('btn_cancel_edit').style.display = 'none';
	}
 
	document.addEventListener('DOMContentLoaded', function() {
		
		const form 	= document.getElementById('form_add_astuce');
		const btn 	= document.getElementById('btn_submit_astuce');

		if (form && btn) {
			form.addEventListener('submit', function(e) {
				e.preventDefault();
				
				const formData = new FormData(this);
				btn.setAttribute('data-kt-indicator', 'on'); 	// Spinner Saul qui est le thème de l'Extranet avec une pointe de GOOD ^^' 
				btn.disabled = true;							// Et moi j'aime beaucoup.. 

				fetch('<?php echo 'https://'.$_SERVER['HTTP_HOST'].'/odyssee/ajax/astuces/'; ?>ajax_astuces.php', {
					method: 'POST',
					body: formData
				})
				.then(res => res.json())
				.then(data => {
					if (data.success) {
						// On recharge pour voir les changements dans le carrousel
						location.reload(); 
					} else {
						alert("Erreur : " + data.message);
						btn.removeAttribute('data-kt-indicator');
						btn.disabled = false;
					}
				})
				.catch(err => {
					console.error(err);
					btn.removeAttribute('data-kt-indicator');
					btn.disabled = false;
				});
			});
		}
	});

	// --- FONCTION POUR CHARGER L'ÉDITION ---
	function loadEditForm(id, texte, lien) {
		// 1. On change l'action pour 'update'
		document.getElementById('form_action').value = 'update';
		
		// 2. On injecte l'ID dans l'input hidden (assurez-vous qu'il existe dans le HTML)
		document.getElementById('astuce_id').value = id;
		
		// 3. On remplit les champs texte et lien
		document.getElementsByName('astuces')[0].value = texte;
		document.getElementsByName('lien')[0].value = lien;
		
		// 4. On change le look du bouton pour montrer qu'on est en mode Edition
		const btn = document.getElementById('btn_submit_astuce');
		btn.querySelector('.indicator-label').innerText = "Mettre à jour l'astuce";
		btn.classList.replace('btn-primary', 'btn-success');
		
		// 5. Scroll fluide vers le formulaire
		document.getElementById('form_add_astuce').scrollIntoView({ behavior: 'smooth' });
	}

	// --- FONCTION POUR LA SUPPRESSION ---
function deleteAstuce(id) {
    Swal.fire({
        text: "Voulez-vous vraiment supprimer définitivement cette astuce ?",
        icon: "warning",
        showCancelButton: true,
        buttonsStyling: false,
        confirmButtonText: "Oui, supprimer",
        cancelButtonText: "Annuler",
        customClass: {
            confirmButton: "btn btn-danger",
            cancelButton: "btn btn-active-light"
        }
    }).then(function (result) {
        if (result.isConfirmed) {
            // Utilisation de fetch pour rester cohérent avec votre formulaire d'ajout
            const formData = new FormData();
            formData.append('action', 'delete');
            formData.append('id', id);

            fetch('<?php echo "https://".$_SERVER["HTTP_HOST"]."/odyssee/ajax/astuces/"; ?>ajax_astuces.php', {
                method: 'POST',
                body: formData
            })
            .then(res => res.json())
            .then(data => {
                if (data.success) {
                    // 1. Notification de succès
                    Swal.fire({
                        text: "L'astuce a été supprimée avec succès.",
                        icon: "success",
                        buttonsStyling: false,
                        confirmButtonText: "Ok",
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    });

                    // 2. Supprimer la ligne de la table visuellement
                    const row = document.getElementById('astuce-row-' + id);
                    if (row) row.remove();
                    
                } else {
                    Swal.fire({
                        text: "Erreur lors de la suppression : " + data.message,
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Fermer",
                        customClass: {
                            confirmButton: "btn btn-light"
                        }
                    });
                }
            })
            .catch(err => {
                console.error("Erreur:", err);
                Swal.fire({
                    text: "Une erreur technique est survenue.",
                    icon: "error",
                    buttonsStyling: false,
                    confirmButtonText: "Fermer",
                    customClass: {
                        confirmButton: "btn btn-light"
                    }
                });
            });
        }
    });
}


	/* Bienvenue au nouveau membre !! */


	// 1. Gestion de l'affichage initial
	window.addEventListener('load', function() {
		const urlParams = new URLSearchParams(window.location.search);
		if (urlParams.get('decouverte') === 'ok') {
			setTimeout(() => {
				const pop = document.getElementById('welcomePopup');
				if(pop) pop.style.display = 'flex';
			}, 800);
		}
	});

	function closePopup() {
		document.getElementById('welcomePopup').style.display = 'none';
		const cleanUrl = window.location.protocol + "//" + window.location.host + window.location.pathname;
		window.history.replaceState({path: cleanUrl}, '', cleanUrl);
	}

	// 2. Configuration de la visite
	const tourSteps = [
		{ 
			id: 'menu_decouverte_icon_home', 			
			text: '<center><i class="ki-duotone ki-burger-menu-3 fs-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span></i></center><b>Votre menu</b><br><br>Voici le point d\'accès à l\'ensemble de l\'Extranet, il propose des liens qui vous renvoient vers toutes les pages dont vous avez besoin. Comme les messages, l\'agenda et bien d\'autres encore.' 
		},
		{ 
			id: 'menu_decouverte_navbar_home', 		
			text: '<center><i class="ki-duotone ki-home fs-1"></i></center><b>Retour sur la page d\'accueil.</b><br><br><p>Note : Pensez à sauvegarder votre travail avant de quitter votre page.</p>' 
		},
		
		
		{ 
			id: 'menu_decouverte_navbar_tableau', 	
			text: '<center><i class="ki-duotone ki-graph-3 fs-2qx"><span class="path1"></span><span class="path2"></span></i></center><b>Récapitulatif</b><br><br> Votre tableau de bord qui résume en affichant vos derniers travaux sur les applications de l\'Extranet.' 
		},
		{ 
			id: 'menu_decouverte_navbar_message',		
			text: '<center><i class="ki-duotone ki-message-text fs-2qx"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></center><b>La messagerie</b><br><br>Raccourci vers la messagerie de l\'Office et votre messagerie privée.</p><p><b>Note</b> : les messages sont chiffrés<br> de bout-en-bout</p>' 
		},


		{ 
			id: 'menu_decouverte_navbar_note', 		
			text: '<center><i class="ki-duotone ki-pencil fs-2qx"><span class="path1"></span><span class="path2"></span></i></center><b>Mon bloc-notes en ligne</b><br><br> Le bloc-notes en ligne est un outil pour une sauvegarde rapide de vos notes textuelles. <br><br><p>Les notes sont conservées en sécurité dans votre compte et disponible à tout moment.</p>' 
		},
		{ 
			id: 'menu_decouverte_navbar_rapide', 		
			text: '<center><i class="ki-duotone ki-notification-status  fs-2qx"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i></center><b>Récapitulatif des tâches</b><br><br> Affiche le nombre de notes, de tâches, de blocks dans le kanban et les événements du mois en cours dans l\'agenda </p><br>' 
		},	
		{ 
			id: 'menu_decouverte_profil', 			
			text: '<center><div class="image-input-wrapper w-60px h-60px" style="background-image: url(\'data:image/jpeg;base64,<?php echo $_SESSION['avatarData']; ?>\');background-position: center;background-repeat: no-repeat;background-size: contain;margin-right: 8px;border-radius: .75rem;background-size: 100% 100%;"></div></center><b>Gestion de votre Compte</b><br><br><p> Il est possible de changer votre image de profile, votre mot de passe et vos préférences.</p>' 
		},
		{ 
			id: 'menu_decouverte_deco', 				
			text: '<center><i class="ki-duotone ki-coffee fs-2qx"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span></i></center><b>Se déconnecter</b><br><br>Vous déconnecte de l\'Extranet<br><p>Votre session reste ouverte 1h sans intervention puis se déconnecte automatiquement..</p>' 
		},
		{ 
			id: 'menu_decouverte_aide', 			
			text: '<center><i class="ki-duotone ki-ghost  fs-2qx"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></center><b>Affiche cette aide</b><br><br><p>L\'aide en ligne sera accessible au moyen de ce bouton Aide. Il est présent sur chaque page.</p>' 
		},		
		{ 
			id: 'menu_decouverte_full_screen', 		
			text: '<center><i class="ki-duotone ki-arrow-two-diagonals  fs-2qx"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i></center><b>Surfer en plein écran</b><br><br><p>Pour afficher vos pages web en plein écran, cliquez sur cet icône ou sur la touche F11 pour activer/désactiver la fonction de zoom.</p>' 
		}, 

		{ 
			id: 'menu_decouverte_v_calendrier', 		
			text: '<center><i class="ki-duotone ki-calendar-add fs-2qx"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span></i></center><b>Mon calendrier</b><br><br><br>Plus qu\'un simple calendrier, il intègre un calendrier partagé en ligne pour organiser votre semaine et partager vos événements avec d\'autres membres.</p><br>' 
		},	
		{ 
			id: 'menu_decouverte_v_kanban', 			
			text: '<center><i class="ki-duotone ki-kanban  fs-2qx"><span class="path1"></span><span class="path2"></span></i></center><b>KANBAN</b><br><br><p>Le système Kanban est une méthode de gestion de projet et de suivi de la production. Une amélioration de la collaboration.</p><p>La mise en œuvre de votre Kanban est idéale pour assurer un meilleur partage de l\’information. En ayant accès à tout moment aux informations essentielles, chaque membre d\'un projet suit efficacement son avancement. Cette transparence favorise le travail d’équipe</p><br>' 
		},
		{ 
			id: 'menu_decouverte_v_tache', 			
			text: '<center><i class="ki-duotone ki-add-notepad  fs-2qx"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i><b>Mes tâches</b><br><br></center><p>Vous permet la gestion complète de vos tâches.<br><br>En cours de développement.</p>' 
		}, 	

		{ 
			id: 'menu_decouverte_v_code', 			
			text: '<center><i class="ki-duotone ki-key-square   fs-2qx"><span class="path1"></span><span class="path2"></span></i></center><b>Coffre fort numérique</b><br><br><p>Votre coffre-fort numérique est un espace de stockage en ligne et sécurisé, qui vous permet de sauvegarder, consulter l’ensemble de vos mots de passe, qu’ils soient professionnels ou personnels. Cet espace est privé et chiffré.<br></p>' 
		}
	]; 

	let currentStepIndex = 0;

	function startTour() {
		closePopup();
		document.getElementById('tour-overlay').style.display = 'block';
		document.getElementById('tour-tooltip').style.display = 'block';
		showStep();
	}

	function showStep() {
		const step = tourSteps[currentStepIndex];
		const targetElement = document.getElementById(step.id);
		const tourText = document.getElementById('tour-text');

		if (targetElement) {
			targetElement.scrollIntoView({ behavior: 'smooth', block: 'center' });

			setTimeout(() => {
				const rect = targetElement.getBoundingClientRect();
				const centerX = Math.round(rect.left + (rect.width / 2));
				const centerY = Math.round(rect.top + (rect.height / 2));

				const overlay = document.getElementById('tour-overlay');
				overlay.style.setProperty('--x', centerX + 'px');
				overlay.style.setProperty('--y', centerY + 'px');
				
				// On réinitialise l'animation du texte
				tourText.classList.remove('fade-in');
				void tourText.offsetWidth; // Petite astuce pour forcer le redémarrage de l'animation
				
				tourText.innerHTML = step.text;
				tourText.classList.add('fade-in');

				document.getElementById('tour-step-counter').innerText = `${currentStepIndex + 1} / ${tourSteps.length}`;
			}, 500);
		}
	}

	function nextStep() {
		currentStepIndex++;
		if (currentStepIndex < tourSteps.length) {
			showStep();
		} else {
			// 1. On cache les éléments de la visite guidée
			document.getElementById('tour-overlay').style.display = 'none';
			document.getElementById('tour-tooltip').style.display = 'none';
			
			// 2. On affiche le popup de fin
			const endPopup = document.getElementById('endTourPopup');
			endPopup.style.display = 'flex'; // On utilise flex pour le centrage (défini dans .popup-overlay)
		}
	}

	// Nouvelle fonction pour fermer ce popup spécifique
	function closeEndPopup() {
		document.getElementById('endTourPopup').style.display = 'none';
	}
	
</script>

			<div id="welcomePopup" class="popup-overlay">
				<div class="popup-content">
					<h2>Bienvenue sur Odyssée</h2>
					<div class="popup-body">
						<h4>
							<br>
							<p>Voici une petite présentation de votre nouvel Extranet.</p>
							<p>l'interface a été repensé pour la rendre plus fluide et moderne. Profitez bien de votre navigation !</p>
						</h4>
					</div>
					<br>
					<div style="display: flex; gap: 10px; justify-content: center; margin-top: 20px;">
						<button onclick="closePopup()" class="btn btn-light">Plus tard</button>
						<button onclick="startTour()" class="btn btn-primary">Découvrir l'interface</button>
					</div>
				</div>
			</div>
			
			<div id="endTourPopup" class="popup-overlay" style="display: none;">
				<div class="popup-content">
					<div class="popup-body">
						<i class="ki-duotone ki-rocket fs-5x text-success mb-5">
							<span class="path1"></span><span class="path2"></span>
						</i>
						<h2 class="mb-3">Paré au décollage !</h2><br>
						<p>Vous avez maintenant toutes les clés en main pour naviguer</p>
						<p>sur <strong>Odyssée</strong>.</p>
						<p>Bonne découverte de votre nouvel espace de travail.</p>
					</div>
					<div class="popup-footer" style="margin-top: 20px;">
						<button onclick="closeEndPopup()" class="btn btn-primary fw-bold px-8">C'est parti !</button>
					</div>
				</div>
			</div>

		 
			<div id="tour-overlay"></div>

			<div id="tour-tooltip">
				<p id="tour-text" style="color: #333; font-weight: 500;">Chargement de l'aide...</p>
				<div id="tour-footer">
					<span id="tour-step-counter" style="color: #777; font-size: 0.9rem;">
						<i class="ki-duotone ki-watch"><span class="path1"></span><span class="path2"></span></i>
					</span>
					<button onclick="nextStep()" id="tour-next-btn">Suivant</button>
				</div>
			</div>



				
		</body>
		<!--end::Body-->
	</html>