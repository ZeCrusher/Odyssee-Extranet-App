
<head>
<title>Extranet - Odyssée</title> <!-- A voir si on fait un ajout du nombre de message ici --> 
	<meta charset="utf-8"/>
	<meta name="description" content="Extranet de l'Office de Tourisme"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>      
	<meta property="og:title" content="Extranet de l'Office de Tourisme "/>
	<link rel="shortcut icon" href="<?php echo 'https://'.$_SERVER['HTTP_HOST'].'/odyssee/' ?>assets/media/logos/favicon.ico"/>

	<!--begin::Fonts(mandatory for all pages)-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700"/>        
	<!--end::Fonts-->

<!--begin::Vendor Stylesheets(Utiliser pour les pages calendar ET tout les tableaux. Ils sont aussi dans les widgets, donc forcément ici -->
	<link href="<?php echo 'https://'.$_SERVER['HTTP_HOST'].'/odyssee/' ?>assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo 'https://'.$_SERVER['HTTP_HOST'].'/odyssee/' ?>assets/plugins/custom/datatables/datatables.bundle.css" 	rel="stylesheet" type="text/css"/>
<!--end:: Stylesheets-->
        

	<link href="<?php echo 'https://'.$_SERVER['HTTP_HOST'].'/odyssee/' ?>assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo 'https://'.$_SERVER['HTTP_HOST'].'/odyssee/' ?>assets/css/style.bundle.css" rel="stylesheet" type="text/css"/>
	
	<!-- Pour le widget Cadre 9 sur la page index.php -->
	<link href="<?php echo 'https://'.$_SERVER['HTTP_HOST'].'/odyssee/' ?>assets/css/vis-timeline.css" 	rel="stylesheet" type="text/css"/>	
	<link href="<?php echo 'https://'.$_SERVER['HTTP_HOST'].'/odyssee/' ?>assets/css/aides.css" 		rel="stylesheet" type="text/css"/>	
	
	<script>
	// Frame-busting pour "empêcher" le chargement du site dans un cadre sans autorisation (click-jacking) - Pas remarqué de changement de perf ;) 
		if (window.top != window.self) {
			window.top.location.replace(window.self.location.href);
		}
	</script>
</head>
