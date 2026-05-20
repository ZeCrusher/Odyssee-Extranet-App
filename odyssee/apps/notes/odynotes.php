<?php
//On demarre les sessions pour ODYSSEE
session_start();

//  PHP Version 7.2.24-0ubuntu0.18.04.9
// Gardez-moi une place sur le vaisseau-mère 👽

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

																									Developed by:  ZeCrusher <zecrusher@gmail.com>  
                  

// ************************************************************************************************ 2024 Extranet 			 *****
// *****                   EXTRANET 2024 - Php & Co                                                                          *****
// *******************************************************************************************************************************
// *****              (c) 2016/24 - extranet - zecrusher@gmail.com                                                           *****

License:      free !!!! GNU 
-- jQuery (JavaScript Library)                           http://jquery.com 
-- Bootstrap											 http://getbootstrap.com
*/

	$_SESSION['last_version'] 	= "V2025-04-15.17h10"; 

	$_SESSION['encryption_key'] = "Gargle_Blaster_Pan-Galactique73?"; 

// *****************************************************************************
// *****                       Historique des versions                     *****
// *****************************************************************************
// ***** V0.1   	- 2024/07/02 - Premiere version
// *****         	- Ecriture du code en partant de zéro - HTML/PHP/Javascript/bootstrap

// ***** V0.1.1    	- 2025/03/25 - Création des Widgets et 
// *****         	- Ecriture du code en partant de zéro - HTML/PHP/Javascript/bootstrap


/*
	Extranet / 

      ├── ajax 								-> Liste des fichiers .PHP pour calendar, notes, like, theme, rechercher
      ├── css								-> css de l'extranet
	  │    ├── style.css  					-> mise à jour le 02/08/2020 - star2 star1 - étoile dans le fond du site 
	  │    ├── stylewhite.css  				-> mise à jour le 22/10/2018 - béta - version white avec modif de beaucoup de css - voir $_SESSION['theme']	  
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
      │   		└── 
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

*/	
	
	 
	// Exemple : Récupération de l'ID de la note actuelle (à adapter avec ton code)
	// $id_note = $donnees['id']; 


	if (!isset($_SESSION['login']) || ($_SESSION['login']=="")) {
		header ('Location: authentication/sign-up/index.php?mode='.$_GET['mode']);
		exit();
	}

	$file = $_SERVER['DOCUMENT_ROOT']."/odyssee/pages/connexion.php";
	if (file_exists($file)) { include $file; } else {	echo "Le fichier navbar est introuvable.";	}		
	
	$file = $_SERVER['DOCUMENT_ROOT']."/odyssee/pages/fonctions.php";
	if (file_exists($file)) { include $file; } else {	echo "Le fichier fonctions est introuvable.";	}		


 

	$pdo = getPDO();

	$errors = [];
	$id = null;

	// Valeurs par défaut
	$titre = '';
	$texte = '';
	$status = '';	
	$Categories = '';
	$tags = [];
	$type = 'perso';
	$brouillon = 'NON';
	$termine = 'NON';
	$corbeille = 'NON';
	$membre = '';
	$membre_id = $_SESSION['monid'];
	$avatarDataNote = '';
	$reference = '';
	$codebar = 0;
	$quant_reserve = 0;
	$quant_boutique = 0;
	$a_commander = "";
	$ordre = 0;
	
	

// --- Traitement POST (Insert / Update) ---
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
	// Récupère proprement les champs
	$id = isset($_POST['id']) && $_POST['id'] !== '' ? (int)$_POST['id'] : null;
	$_SESSION['idnote_avatar']=$id;	
	
    $titre 		= trim($_POST['titre'] ?? '');
    $texte 		= $_POST['texte'] ?? ''; // contenu HTML envoyé depuis Quill
    $Categories = $_POST['Categories'] ?? '';
	
	/* Gestion des tags */
	$tagJson= $_POST['tag'] ?? '';
	$tags 	= [];
	
    $type 				= $_POST['type'] ?? 'perso';
    $brouillon 			= $_POST['brouillon'] ?? 'NON';
    $termine 			= $_POST['termine'] ?? 'NON';
    $corbeille 			= $_POST['corbeille'] ?? 'NON';
    $membre 			= $_POST['membre'] ?? '';
    $membre_id 			= $_POST['membre_id'] ?? $_SESSION['monid'];
    $reference 			= $_POST['reference'] ?? '';
    $codebar 			= (int)($_POST['codebar'] ?? 0);
    $quant_reserve		= (int)($_POST['quant_reserve'] ?? 0);
    $quant_boutique 	= (int)($_POST['quant_boutique'] ?? 0);
    $a_commander 		= $_POST['a_commander'] ?? 'NON';
    $ordre			 	= (int)($_POST['ordre'] ?? 0);
    // $avatarDataNote = $_POST['avatarDataNote'] ?? '';
	$status 			= $_POST['status'] ?? 'BROUILLONS';
	
	/* Préparation des tags */
	
	// Si c’est bien un JSON valide, on le convertit
	if ($tagJson) {
		$decoded = json_decode($tagJson, true);
		if (is_array($decoded)) {
			// On extrait uniquement les valeurs des tags
			$tags = array_column($decoded, 'value');
		}
	}

	// Tu peux ensuite stocker une chaîne comme "Note, List"
	$tagString = implode(', ', $tags);

    try {
		
        if ($id) {
            // UPDATE
            $sql = "UPDATE odynotes SET
                        titre = :titre,
                        texte = :texte,
                        Categories = :Categories,
						tag = :tag,
                        type = :type,
                        brouillon = :brouillon,
                        termine = :termine,
                        corbeille = :corbeille,
                        membre = :membre,
                        membre_id = :membre_id,
                        reference = :reference,
                        codebar = :codebar,
                        quant_reserve = :quant_reserve,
                        quant_boutique = :quant_boutique,
                        a_commander = :a_commander,
                        ordre = :ordre,
						status= :status,
                        updated_at = NOW()
                    WHERE id = :id";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                ':titre' => chinote($titre),
                ':texte' => chinote($texte),
                ':Categories' => $Categories,
				':tag' => implode(', ', $tags),
                ':type' => $type,
                ':brouillon' => $brouillon,
                ':termine' => $termine,
                ':corbeille' => $corbeille,
                ':membre' => $membre,
                ':membre_id' => $membre_id,
                ':reference' => $reference,
                ':codebar' => $codebar,
                ':quant_reserve' => $quant_reserve,
                ':quant_boutique' => $quant_boutique,
                ':a_commander' => $a_commander,
                ':ordre' => $ordre,
				':status' => $status,
                ':id' => $id
            ]);
        } else {
            // INSERT
            $sql = "INSERT INTO odynotes
                        (titre, texte,  Categories, tag, type, brouillon, termine, corbeille,
                         membre, membre_id, reference, codebar, quant_reserve, quant_boutique, a_commander, ordre, status)
                    VALUES
                        (:titre, :texte, :Categories, :tag, :type, :brouillon, :termine, :corbeille,
                         :membre, :membre_id, :reference, :codebar, :quant_reserve, :quant_boutique, :a_commander, :ordre, :status)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                ':titre' => chinote($titre),
                ':texte' => chinote($texte),
                ':Categories' => $Categories,
                ':tag' => implode(', ', $tags),				
                ':type' => $type,
                ':brouillon' => $brouillon,
                ':termine' => $termine,
                ':corbeille' => $corbeille,
                ':membre' => $membre,
                ':membre_id' => $membre_id,
                ':reference' => $reference,
                ':codebar' => $codebar,
                ':quant_reserve' => $quant_reserve,
                ':quant_boutique' => $quant_boutique,
                ':a_commander' => $a_commander,
                ':ordre' => $ordre, 
				':status' => $status
            ]);
            // Récupère l'id inséré (attention : votre colonne id doit être AUTO_INCREMENT)
            $id = $pdo->lastInsertId();
        }

        // Redirection PRG (POST-Redirect-GET) pour recharger la note et éviter double POST
        header('Location: ' . $_SERVER['PHP_SELF'] . '?id=' . ((int)$id) . '&saved=1');
        exit;
    } catch (PDOException $e) {
        // Pour debug : afficher le message d'erreur (en prod, logger plutôt que d'afficher)
        $errors[] = 'Erreur base de données : ' . $e->getMessage();
    }
}

// --- Si on est en GET avec id, on charge la note ---
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = (int)$_GET['id'];
    $stmt = $pdo->prepare('SELECT * FROM odynotes WHERE id = ? LIMIT 1');
    $stmt->execute([$id]);
    $note = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($note) {
        // remplit les variables affichées dans le formulaire
        $titre =  denote($note['titre']);
        $texte =  denote($note['texte']);
		
		// contient le HTML sauvegardé
        $Categories = $note['Categories'];
        $tag = implode(', ',$note['tag']);		
        $type = $note['type'];
        $brouillon = $note['brouillon'];
        $termine = $note['termine'];
        $corbeille = $note['corbeille'];
        $membre = $note['membre'];
        $membre_id = $note['membre_id'];
        $avatarDataNote = $note['avatarDataNote'];
        $reference = $note['reference'];
        $codebar = $note['codebar'];
        $quant_reserve = $note['quant_reserve'];
        $quant_boutique = $note['quant_boutique'];
        $a_commander = $note['a_commander'];
        $ordre = $note['ordre'];
        $status = $note['status'];		
    } else {
        $errors[] = 'Note introuvable (id='.$id.').';
    }
}

// --- Affichage HTML ---
 
	
	// $sql2=$sql;

?>

<style>
    body { font-family: Arial, sans-serif; margin: 20px; }
    label { display:block; margin-top:10px; font-weight:600; }
    input[type=text], select { width:100%; padding:8px; margin-top:5px; }
    .ql-editor { min-height: 200px; }
    .msg-success { background:#e6ffed; border:1px solid #8ddf9c; padding:8px; display:inline-block; margin-bottom:10px; }
    .msg-error { background:#ffe6e6; border:1px solid #f39c9c; padding:8px; margin-bottom:10px; }
	
	.image-input .image-input-wrapper-note {
    width: 120px;
    height: 120px;
    border-radius: .75rem;
    background-repeat: no-repeat;
    background-size: cover
}


 
.procedure-container {
    display: flex;
    align-items: center;
    background-color: #ffffff;
    border: 1px solid #ddd;
    border-radius: 8px;
    padding: 15px;
    max-width: 700px;
    font-family: Arial, sans-serif;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

.qr-code-zone {
    flex: 0 0 150px;
    margin-right: 20px;
}

.qr-code-zone img {
    width: 100%;
    height: auto;
    display: block;
}

.instructions-zone {
    flex: 1;
}

.instructions-zone .warning {
    color: #d9534f; /* Rouge pour les alertes */
    font-weight: bold;
    list-style-type: "- ";
    margin-bottom: 10px;
}

.instructions-zone .steps {
    color: #333;
    font-weight: bold;
    list-style-type: "- ";
}

.instructions-zone ul {
    padding-left: 15px;
    margin: 0;
}

.instructions-zone li {
    margin-bottom: 5px;
}

.sub-steps {
    list-style-type: "* " !important;
    padding-left: 20px;
    font-weight: bold;
}


@media print {
    /* 1. On cache absolument tout le site (body) */
    body * {
        visibility: hidden;
    }
    /* 2. On réaffiche uniquement la zone de la procédure et ses enfants */
    #print-zone, #print-zone * {
        visibility: visible;
    }
    /* 3. On force la zone à se positionner tout en haut à gauche de la feuille blanche */
    #print-zone {
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        background: white;
        padding: 0;
        margin: 0;
    }
    /* 4. On cache les boutons de fermeture et d'impression sur le papier */
    .modal-header, .modal-footer {
        display: none !important;
    }
    /* 5. On supprime les bordures de la modale pour le papier */
    .modal-content {
        border: none !important;
        box-shadow: none !important;
    }
}

</style>

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
 
				<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
					
					<?php 

						
						$file = $_SERVER['DOCUMENT_ROOT']."/odyssee/pages/sidebar.php";
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
						
						
							
							$fil_ariane=" Editeur de notes >";
							$grand_titre="Bonjour ".$_SESSION['login'];
							
							$file = $_SERVER['DOCUMENT_ROOT']."/odyssee/pages/bonjour.php";
							if (file_exists($file)) { include $file; } else {	echo "Le fichier navbar est introuvable.";	}			

							// echo $sql2;
							
						?>
						
<!--- ********************************************************************************************************************************* -->

							<div id="kt_app_content" class="app-content  flex-column-fluid ">
								<!--begin::Content container-->
								<div id="kt_app_content_container" class="app-container  container-fluid ">
								
								<!--begin::Form - formulaire de création de la note -->
									<form method="post" id="noteForm" class="form d-flex flex-column flex-lg-row fv-plugins-bootstrap5 fv-plugins-framework">
									<!-- <form method="post" id="kt_ecommerce_add_product_form" class="form d-flex flex-column flex-lg-row fv-plugins-bootstrap5 fv-plugins-framework"> -->
									
										<input type="hidden" name="id" value="<?= htmlspecialchars($id) ?>">
										<!--begin::Aside column-->
									
									<div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
											<!--begin::Thumbnail settings-->

										<?php	if ($id) { ?>

											<div class="card card-flush py-4">
											
												
												<!--begin::Card header-->
												<div class="card-header">
													<!--begin::Card title-->
													<div class="card-title">
														<h2>Miniature</h2>
													</div>
													<!--end::Card title-->
												</div>
												<!--end::Card header-->

									
												<div class="card-body text-center pt-0">
													<!--begin::Image input-->
															
													<div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3" data-kt-image-input="true">
														<!--begin::Preview existing avatar-->
														
														<div class="image-input-wrapper-note w-150px h-150px"  style="background-image: url('data:image/jpeg;base64,<?php echo $note['avatarDataNote']; ?>');background-position: center;background-repeat: no-repeat;"></div>

														<!--end::Preview existing avatar-->

														<!--begin::Label-->
														<label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" aria-label="Change avatar" data-bs-original-title="Change avatar" data-kt-initialized="1">
															<i class="ki-duotone ki-pencil fs-7"><span class="path1"></span><span class="path2"></span></i>
															<!--begin::Inputs-->
															<input type="file" name="avatarNote" accept=".png, .jpg, .jpeg">
															<input type="hidden" name="avatar_remove">
															<!--end::Inputs-->
														</label>
														<!--end::Label-->

														<!--begin::Cancel-->
														<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" aria-label="Cancel avatar" data-bs-original-title="Cancel avatar" data-kt-initialized="1">
															<i class="ki-duotone ki-cross fs-2"><span class="path1"></span><span class="path2"></span></i>            </span>
														<!--end::Cancel-->

														<!--begin::Remove-->
														<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" aria-label="Remove avatar" data-bs-original-title="Remove avatar" data-kt-initialized="1">
															<i class="ki-duotone ki-cross fs-2"><span class="path1"></span><span class="path2"></span></i>            </span>
														<!--end::Remove-->
													</div>
													<!--end::Image input-->

													<!--begin::Description-->
													<div class="text-muted fs-7">Définissez la miniature de votre Note. Seuls les fichiers *.png, *.jpg et *.jpeg sont acceptés.</div> 
													<!--end::Description-->
												</div>
											</div>
											
										<?php } 	?>
											
											<!--end::Thumbnail settings-->
											<!--begin::Status-->
											<div class="card card-flush py-4">
												<!--begin::Card header-->
												<div class="card-header">
													<!--begin::Card title-->
													<div class="card-title">
														<h2>Status de votre note</h2>
													</div>
													<!--end::Card title-->

													<!--begin::Card toolbar-->
													<div class="card-toolbar">
														<div class="rounded-circle bg-success w-15px h-15px" id="kt_ecommerce_add_product_status"></div>
													</div>
													<!--begin::Card toolbar-->
												</div>
												<!--end::Card header-->

												<!--begin::Card body-->
												<div class="card-body pt-0">
													<!--begin::Select2     -           select2-hidden-accessible    -->
													<select class="form-select" data-control="select2" name="status" data-placeholder="Choisissez un status">
														<optgroup label="Actuellement">
															<option value="<?php echo $note['status']; ?>"><?php echo $note['status']; ?></option>
														</optgroup>
														<optgroup label="Mode">
															<option value="Brouillon">Brouillon</option>
															<option value="A corriger">A corriger</option>
														</optgroup>														
														<optgroup label="Note terminée">
															<option value="Inactive">Inactive</option>
															<option value="Active">Active</option>
														</optgroup>
														
													</select>
													<!--<span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-7-otzg" style="width: 100%;">
														<span class="selection">
															<span class="select2-selection select2-selection--single form-select mb-2" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-kt_ecommerce_add_product_status_select-container" aria-controls="select2-kt_ecommerce_add_product_status_select-container">
																<span class="select2-selection__rendered" id="select2-kt_ecommerce_add_product_status_select-container" role="textbox" aria-readonly="true" title="Published">Published</span>
																<span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>
															</span>
														</span>
														<span class="dropdown-wrapper" aria-hidden="true"></span>
													</span> -->
													<!--end::Select2-->

													<!--begin::Description-->
													<!-- <div class="text-muted fs-7">Choisissez </div> -->
													<!--end::Description-->

													<!--begin::Datepicker-->
													<!-- <div class="d-none mt-10">
														<label for="kt_ecommerce_add_product_status_datepicker" class="form-label">Select publishing date and time</label>
														<input class="form-control flatpickr-input" id="kt_ecommerce_add_product_status_datepicker" placeholder="Pick date &amp; time" type="text" readonly="readonly">
													</div> -->
													<!--end::Datepicker-->
												</div>
												<!--end::Card body-->
											</div>
											<!--end::Status-->
													
											<!--begin::Category & tags-->
											<div class="card card-flush py-4">
												<!--begin::Card header-->
												<div class="card-header">
													<!--begin::Card title-->
													<div class="card-title">
														<h2>Categories</h2>
													</div>
													<!--end::Card title-->
												</div>
												<!--end::Card header-->

												<!--begin::Card body-->
												<div class="card-body pt-0">
													<!--begin::Input group-->
													 

													<!--begin::Select2-->
													<select class="form-select" data-control="select2" name="Categories" data-placeholder="Select an option">
														<optgroup label="Actuellement">
															<option value="<?php echo $note['Categories']; ?>"><?php echo $note['Categories']; ?></option>
														</optgroup>
														<optgroup label="Mode">
															<option value="Note">Note</option>
															<option value="Procedure">Procédure</option>
															<option value="Boutique">Boutique</option>
														</optgroup>														
														<optgroup label="Note terminée">
															<option value="Page">Page</option>
															<option value="Application">Application</option>
															<option value="Application">Widget</option>															
														</optgroup>
														
													</select>
													 
												</div>
												<!--end::Card body-->
											
											
											</div>
											<!--end::Category & tags-->
											
											<?php 
											if ($note['Categories'] == "Procedure") {
												// 1. On génère l'URL du QR Code dynamiquement avec l'ID de la note actuelle
												$url_cible = 'https://'.$_SERVER['HTTP_HOST'].'/odyssee/apps/support-center/simple_page.php?id='.$note['id'];
												$url_qr_code = "https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=" . urlencode($url_cible);
											?>	
												
												<div class="card card-flush py-4">
													<div class="card-header">
														<div class="card-title">
															<h2>Raccourci</h2>
														</div>
														</div>
													<div class="card-body pt-0">
														<div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3" data-kt-image-input="true">
															<div class="qr-code-zone flex-shrink-0" style="width: 250px;">
																<center><img src="<?php echo $url_qr_code; ?>" alt="QR Code Procédure" class="w-250 img-thumbnail"></center>
															</div>
														</div>
														
														<div class="card-body pt-0">
															<button type="button" class="btn btn-light-primary btn-sm" data-bs-toggle="modal" data-bs-target="#kt_modal_procedure_print">
																<i class="ki-duotone ki-eye fs-5 me-2"></i> Générer la fiche imprimable
															</button>

																<div class="modal fade" id="kt_modal_procedure_print" tabindex="-1" aria-hidden="true">
																	<div class="modal-dialog modal-dialog-centered modal-lg">
																		<div class="modal-content" id="print-zone">
																			<div class="modal-header border-0 pb-0 justify-content-end">
																				<button type="button" class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal"></button>
																			</div>
																			<div class="modal-body pt-0 px-10 pb-10">
																				
																				<div class="mb-4">
																					<h2 class="fw-bolder text-dark" style="font-family: Arial, sans-serif; font-size: 24px; text-transform: uppercase;">
																						<span style="border-bottom: 2px dotted red;"><?php echo denote($note['titre']); ?></span>
																					</h2>
																				</div>
																				
																				<div class="d-flex align-items-start gap-8">
																					<div class="flex-shrink-0" style="width: 180px;">
																						<img src="<?php echo $url_qr_code; ?>" alt="QR Code" class="w-100" style="image-rendering: pixelated;">
																					</div>
																					<div class="flex-grow-1 pt-1" style="font-family: Arial, sans-serif; font-size: 11px; line-height: 1.5;">
																						<div style="white-space: pre-line; font-weight: bold;">
																							<?php echo htmlspecialchars($note['reference']); ?>
																						</div>
																					</div>
																				</div>

																			</div>
																			
																			<div class="modal-footer border-0 pt-0 justify-content-center">
																				<button type="button" class="btn btn-sm btn-primary" onclick="window.print();">
																					Imprimer la vignette seule
																				</button>
																			</div>

																		</div>
																	</div>
																</div>
															
														</div>
													</div>	
													
													
													
												</div>
											<?php 
											}
											?>
										
											

											<!--begin::Category & tags-->
											<div class="card card-flush py-4">
												<!--begin::Card header-->
												<div class="card-header">
													<!--begin::Card title-->
													<div class="card-title">
														<h2>#Tags</h2>
													</div>
													<!--end::Card title-->
												</div>
												<!--end::Card header-->

												<!--begin::Card body-->
												<div class="card-body pt-0">
																								
													<input class="form-control"  name="tag" value="<?php echo $note['tag']; ?>" id="kt_tagify_1"/>
													<!--end::Input-->

													<!--begin::Description-->
													<div class="text-muted fs-7">Ajouter ici vos tags avec #xxxx</div>
													<!--end::Description-->
													<!--end::Input group-->
												</div>
												<!--end::Card body-->
											
											
											</div>
											<!--end::Category & tags-->		  
		  
									</div>
									<!--end::Aside column-->

										<!--begin::Main column-->
										<div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
											<!--begin:::Tabs-->
									<ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-n2" role="tablist">
										<!--begin:::Tab item-->
										<li class="nav-item" role="presentation">
											<a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_ecommerce_add_product_general" aria-selected="true" role="tab">
												<?php 
													if ($note['Categories']=="Procedure") echo "Création d'une procédure";
														else
													echo "Ecrire ma note";
												?>											
											</a>
										</li>
										<!--end:::Tab item-->

										<!--begin:::Tab item-->
										<?php 
										
											if ($note['Categories']=="Boutique") { 
												echo '<li class="nav-item" role="presentation">
														<a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_ecommerce_add_product_advanced" aria-selected="false" tabindex="-1" role="tab">Options</a>
													</li>';
											}
										?>
										
										<!--end:::Tab item-->

										</ul>
									<!--end:::Tabs-->
											<!--begin::Tab content-->
											<div class="tab-content">
												<!--begin::Tab pane-->
												<div class="tab-pane fade show active" id="kt_ecommerce_add_product_general" role="tab-panel">
													<div class="d-flex flex-column gap-7 gap-lg-10">
														
														<!--begin::General options-->
														<div class="card card-flush py-4">
															<!--begin::Card header-->
															<!-- <div class="card-header">
																<div class="card-title">
																	<h2>OdyNote</h2>
																</div>
															</div> -->
															<!--end::Card header-->

															<!--begin::Card body-->
															<div class="card-body pt-0">
																<!--begin::Input group-->
																<div class="mb-10 fv-row fv-plugins-icon-container">
																<br>
																
																	<!--begin::Description-->
																	<?php if (isset($_GET['saved'])): 
																		
																		/*<div class="msg-success">Note sauvegardée avec succès.</div>*/
																		echo alert_box("vert", "Sauvegarde", "Votre note est sauvegardée et chiffrer avec succès", "oui");
																		
																	  endif;  
																		foreach ($errors as $e):
																			echo alert_box("rouge", "Chargement de la note impossible", "Ce contenu a peut-être été supprimé par son propriétaire.", "oui");
																		endforeach; 
																	?>
																
																
																
																	<!--begin::Label-->
																	<label class="required form-label"><?= $id ? "Modification de la note : ".htmlspecialchars($id) : "Nouvelle note" ?></label>

																	<!--begin::Input-->
																	<input type="text" name="titre" class="form-control mb-2" placeholder="Titre de votre note" value="<?php echo denote($note['titre']); ?>">
																	<!--end::Input-->

					
																	<?php 
																		if ($Categories == "Procedure") {	
																	?>		
																			<label class="form-label fw-bold fs-6 text-gray-700 mb-2">Référence - Texte de la mini vignette à imprimer 
																				<button type="button" style="margin-left:4px;" class="btn btn-sm" data-bs-toggle="modal" data-bs-target="#kt_modal_ref">
																					<i class="ki-duotone ki-devices fs-2qx"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>
																				</button>
																			</label> 
																			
																				<div class="modal fade" id="kt_modal_ref" tabindex="-1" aria-hidden="true">
																					<div class="modal-dialog modal-dialog-centered modal-lg">
																						<div class="modal-content" id="print-zone">
																								<div class="modal-header border-0 pb-0 justify-content-end">
																									<button type="button" class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
																									<i class="ki-duotone ki-cross-square"><span class="path1"></span><span class="path2"></span></i>
																								</button>
																							</div>
																							<div class="modal-body pt-0 px-10 pb-10">
																								<div class="mb-4">
																									<h2 class="fw-bolder text-dark" style="font-family: Arial, sans-serif; font-size: 24px; text-transform: uppercase;">
																										<span style="border-bottom: 2px dotted red;"><?php echo denote($note['titre']); ?></span>
																									</h2>
																								</div>
																								<div class="d-flex align-items-start gap-8">
																									<div class="flex-shrink-0" style="width: 180px;">
																										<img src="<?php echo $url_qr_code; ?>" alt="QR Code" class="w-100" style="image-rendering: pixelated;">
																									</div>
																									<div class="flex-grow-1 pt-1" style="font-family: Arial, sans-serif; font-size: 11px; line-height: 1.5;">
																										<div style="white-space: pre-line; font-weight: bold;">
																											<?php echo htmlspecialchars($note['reference']); ?>
																										</div>
																									</div>
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																				
																			<textarea name="reference" 	class="form-control mb-2" rows="4"	placeholder="Saisissez ou modifiez la procédure ici..." style="font-family: monospace;"><?php echo $note['reference']; ?></textarea>
																	<?php 
																	
																		}
																	?>

								
																
																		<!--end::Description-->
																	<div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
																</div>
																<!--end::Input group-->

																<!--begin::Input group-->
																<div>
																	<div id="kt_docs_quill_basic" class="ql-container ql-snow"></div>
																	<!-- là, c'est un champ "hidden" qui recevra le HTML de Quill avant mon envoi -->
																	<input type="hidden" name="texte" id="texte">
																	<!--begin::Description-->
																	<div class="text-muted fs-7" style="margin-top:10px;">Taille de votre note [<?php echo strlen(denote($note['texte'])); ?> caractères]</div>
																	<!--end::Description-->
																</div>
															</div>
															<!--end::Card header-->
														</div>
														<!--end::General options-->
													</div>
												</div>
												
												<?php 
													if ((($note['Categories']=="Procedure")||($note['Categories']=="Page")) && (($note['status']=="Brouillon")||($note['status']=="A corriger"))) { 
														echo '<div style="margin-top:30px">';
														echo alert_box("jaune", "Affichage de votre Page", "Voici un aperçu de votre page tel qu'elle sera sur l'Extranet (page ou procédure)", "oui");
														echo '</div>';
														 
														echo '<div class="card card-flush py-4" style="margin-top:30px">';
														echo '<div class="card-header">';
															
														echo '<div class="card-title">';
														echo '<h2>'.denote($note['titre']).'</h2>';
														echo '</div>';
														echo '</div>';
														
														echo '<!--begin::Card body-->
																<div class="card-body pt-0">'.html_entity_decode(denote($note['texte']));
														echo '</div>';
														echo '</div>';
											
													}
												?>
												<!--end::Tab pane-->

												<!--begin::Tab pane-->
												<div class="tab-pane fade" id="kt_ecommerce_add_product_advanced" role="tab-panel">
													<div class="d-flex flex-column gap-7 gap-lg-10">
														
														<!--begin::Inventory-->
														<div class="card card-flush py-4">
															<!--begin::Card header-->
															<div class="card-header">
																<div class="card-title">
																	<h2>Inventaires</h2>
																</div>
															</div>
															<!--end::Card header-->

															<!--begin::Card body-->
															<div class="card-body pt-0">
																<!--begin::Input group-->
																<div class="mb-10 fv-row fv-plugins-icon-container">
																	<!--begin::Label-->
																	<!-- <label class="required form-label">Catégorie</label>
																	 
																	<input type="text" name="reference" class="form-control mb-2" placeholder="Référence produit : " value=" < ?php echo $note['reference']; ?>"> -->
																	 

																	<!-- 
																	<div class="text-muted fs-7">Numéro de référence</div>
																	 -->
																	<div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
																</div>
																<!--end::Input group-->

																<!--begin::Input group-->
																<div class="mb-10 fv-row fv-plugins-icon-container">
																	<!--begin::Label-->
																	<label class="required form-label">Code-barre</label>
																	<!--end::Label-->

																	<!--begin::Input-->
																	<input type="text" name="codebar" value="<?php echo $note['codebar']; ?>" class="form-control mb-2" placeholder="Numéro de code-barres" value="">
																	<!--end::Input-->

																	<!--begin::Description-->
																	<div class="text-muted fs-7">Enter the product barcode number.</div>
																	<!--end::Description-->
																<div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
																<!--end::Input group-->

																<!--begin::Input group-->
																<div class="mb-10 fv-row fv-plugins-icon-container">
																	<!--begin::Label-->
																	<label class="required form-label">Quantité - Réserve / Boutique</label>
																	<!--end::Label-->

																	<!--begin::Input-->
																	<div class="d-flex gap-3">
																		<input type="number" name="quant_reserve"	 value="<?php echo $note['quant_reserve']; ?>"  class="form-control mb-2" placeholder="En réserve">
																		<input type="number" name="quant_boutique" value="<?php echo $note['quant_boutique']; ?>"  class="form-control mb-2" placeholder="En boutique">
																	</div>
																	<!--end::Input-->

																	<!--begin::Description-->
																	<div class="text-muted fs-7">Entrer la quantité de produit</div>
																	<!--end::Description-->
																<div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
																<!--end::Input group-->

																<!--begin::Input group-->
																<div class="fv-row">
																	<!--begin::Label-->
																	<label class="form-label">A Commander prochainement</label>
																	<!--end::Label-->

																
																<select class="form-select"   data-control="select2"  name="a_commander" data-placeholder="Select an option">
															 
																	<optgroup label="Actuellement">
																		<option value="<?php echo $note['a_commander']; ?>"><?php echo $note['a_commander']; ?></option>
																	</optgroup>
																	<optgroup label="Mode">
																		<option value="NON">NON</option>
																		<option value="OUI">OUI</option>
																	</optgroup>														
																	<optgroup label="Faire un rappel">
																		<option value="Téléphone">Par Téléphone</option>
																		<option value="email">Par email</option>
																	</optgroup>
																	
																</select>
																
																	<!--end::Input-->

																	<!--begin::Description-->
																	<div class="text-muted fs-7">Prévoir de faire une nouvelle commande pour ravitailler le stock.</div>
																	<!--end::Description-->
																</div>
																<!--end::Input group-->
															</div>
															<!--end::Card header-->
														</div>
														<!--end::Inventory-->
													</div>
												</div>
												<!--end::Tab pane-->

														</div>
											<!--end::Tab content-->

											<div class="d-flex justify-content-end">
												<!--begin::Button-->
												<a href="" id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">
													Annuler
												</a>
												<!--end::Button-->

												<!--begin::Button-->
												<button type="submit" id="kt_ecommerce_add_product_submit" class="btn btn-primary">
													<span class="indicator-label">
														Sauvegarder
													</span>
													<span class="indicator-progress">
														Veuillez patienter... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
													</span>
												</button>
												<!--end::Button-->
											</div>
										</div>
										<!--end::Main column-->
									</form>
								<!--end::Form-->        	
							
		
								</div>
								<!--end::Content container-->
							</div>
			
						
						<!--end::Content container-->
						</div>



						<!-- ********************************************************************************************************************************** -->
						<!-- begin::Footer begin::Footer begin::Footer begin::Footer begin::Footer begin::Footer begin::Footer begin::Footer begin::Footer begin::Footer begin::    -->
						<!-- ********************************************************************************************************************************** -->
						
						<div class="app-footer align-items-center justify-content-center justify-content-md-between flex-column flex-md-row py-3" id="kt_app_footer">
						
						<?php 

							$file = $_SERVER['DOCUMENT_ROOT']."/odyssee/pages/footer.php";
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
				if (file_exists($file)) { include $file; } else {	echo "Le fichier fonctions est introuvable.";	}		
				  
				// <!-- ********************************************************************************************************************************** -->

				
				$file = $_SERVER['DOCUMENT_ROOT']."/odyssee/pages/widget-aide.php";
				if (file_exists($file)) { include $file; } else {	echo "Le fichier fonctions est introuvable.";	}		
			?>

			  
		<!--end::Modals-->
  
 			<script src="<?php echo 'https://'.$_SERVER['HTTP_HOST'].'/odyssee/'; ?>js/scripts.bundle.js"></script>
 
		<!--begin::Javascript-->
			<script src="<?php echo 'https://'.$_SERVER['HTTP_HOST'].'/odyssee/'; ?>assets/plugins/global/plugins.bundle.js"></script>
		<!--begin::Vendors Javascript(used for this page only)-->
			<script src="<?php echo 'https://'.$_SERVER['HTTP_HOST'].'/odyssee/'; ?>assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
			<script src="<?php echo 'https://'.$_SERVER['HTTP_HOST'].'/odyssee/'; ?>assets/js/index.js"></script>
			<script src="<?php echo 'https://'.$_SERVER['HTTP_HOST'].'/odyssee/'; ?>assets/plugins/custom/datatables/datatables.bundle.js"></script> 
		<!--end::Vendors Javascript-->
				
		<!--begin::Custom Javascript(used for this page only)-->
			<script src="<?php echo 'https://'.$_SERVER['HTTP_HOST'].'/odyssee/'; ?>assets/js/widgets.bundle.js"></script>
		<!--end::Custom Javascript-->
		
		<!--end::Javascript-->			
			<script>
			
			var input1 = document.querySelector("#kt_tagify_1");
			
			// new Tagify(input1);
			new Tagify(input1, {
				whitelist: ["Mémo", "Urgent", "A faire", "Perso", "A faire"],
				maxTags: 10,
				dropdown: {
					maxItems: 20,           // <- mixumum allowed rendered suggestions
					classname: "tagify__inline__suggestions", // <- custom classname for this dropdown, so it could be targeted
					enabled: 0,             // <- show suggestions on focus
					closeOnSelect: false    // <- do not hide the suggestions dropdown once an item has been selected
				}
			});
			
			
			
			// Initialisation Quill
			var quill = new Quill('#kt_docs_quill_basic', {
				modules: {
					toolbar: [
						 ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
						  ['blockquote', 'code-block'],
						  ['link', 'image', 'video'],

 
						  [{ 'list': 'ordered'}, { 'list': 'bullet' }],
						  // [{ 'script': 'sub'}, { 'script': 'super' }],      // superscript/subscript
						  [{ 'indent': '-1'}, { 'indent': '+1' }],          // outdent/indent
						  // [{ 'direction': 'rtl' }],                         // text direction

						  [{ 'size': ['small', false, 'large', 'huge'] }],  // custom dropdown
						  // [{ 'header': [1, 2, 3, 4, 5, 6, false] }],

						  [{ 'color': [] }, { 'background': [] }],          // dropdown with defaults from theme
						  [{ 'font': [] }],
						  [{ 'align': [] }],

						  ['clean']                                         // remove formatting button
					]
				},
				placeholder: 'Votre note à faire ici ;) ',
				theme: 'snow'
			});

			// Charge le contenu initial (sécurisé via JSON encoding côté PHP)
			var initialContent = <?php echo json_encode($texte ?? '', JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?>;
			if (initialContent) {
				// Utilise dangerouslyPasteHTML pour respecter le HTML existant
				quill.clipboard.dangerouslyPasteHTML(initialContent);
			}

			// Avant soumission : copie le HTML de Quill dans hidden input "texte"
			document.getElementById('noteForm').addEventListener('submit', function (e) {
				var html = quill.root.innerHTML;
				// Si l'éditeur est vide, vous pouvez vider aussi le champ caché:
				if (html === '<p><br></p>') html = '';
				document.getElementById('texte').value = html;
				// Le formulaire continue son envoi normalement
			});
			
			
 	 
				document.addEventListener("DOMContentLoaded", function() {
					const avatarInput = document.querySelector('input[name="avatarNote"]');
					
					avatarInput.addEventListener('change', function() {
						const file = this.files[0];
						if (!file) return;

						// Vérification du type de fichier
						const allowedTypes = ['image/png', 'image/jpeg', 'image/jpg'];
						if (!allowedTypes.includes(file.type)) {
							alert('Seuls les fichiers PNG et JPEG sont autorisés.');
							return;
						}

						// Créer le FormData
						const formData = new FormData();
						formData.append('avatarNote', file);

						// Envoyer via fetch
						fetch('update_avatarNote.php<?php if ($id) echo '?id='.$id; ?>', {
							method: 'POST',
							body: formData
						})
						.then(response => response.json())
						.then(data => {
							if(data.success){
								// alert('avatarNote mis à jour avec succès !');
								// Mettre à jour l'image dans la page
								const wrapper = document.querySelector('.image-input-wrapper-note');
								wrapper.style.backgroundImage = `url(${data.avatarUrl})`;
							} else {
								alert('Erreur : ' + data.message);
							}
						})
						.catch(err => {
							console.error(err);
							alert('Erreur lors de l\'upload.');
						});
					});
				});
		
		</script>



	
		</body>
	
	<!--end::Body-->

</html>