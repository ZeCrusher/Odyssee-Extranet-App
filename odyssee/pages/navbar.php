<?php
/* Les variables : */ 
	$mois_max =array(1=>"janvier ","février ","mars ","avril ","mai ","juin ","juillet ","août ","septembre ","octobre ","novembre ","décembre ");
	$mois_min =array(1=>"jan ","fév ","mars ","avr ","mai ","juin ","juil ","août ","sept ","oct ","nov ","déc ");
?>	
	
	<div class="app-navbar flex-grow-1 justify-content-end" id="kt_app_header_navbar">
		<div class="app-navbar-item d-flex align-items-stretch flex-lg-grow-1 me-2 me-lg-0">
			<!--begin::Search-->
			
			
			
			<div class="header-search d-flex align-items-center w-lg-350px" data-kt-menu-permanent="true" data-kt-menu-placement="bottom-start" data-kt-menu-trigger="auto" data-kt-search-enter="enter" data-kt-search-keypress="true" data-kt-search-layout="menu" data-kt-search-min-length="2" data-kt-search-responsive="true" id="kt_header_search">
				<!--begin::Tablet and mobile search toggle-->
				<div class="search-toggle-mobile d-flex d-lg-none align-items-center" data-kt-search-element="toggle">
					<div class="d-flex">
						<i class="ki-duotone ki-magnifier fs-1 fs-1"><span class="path1"></span><span class="path2"></span></i>
					</div>
				</div>
<!-- 				<form autocomplete="off" class="d-none d-lg-block w-100 position-relative mb-5 mb-lg-0" data-kt-search-element="form">
					<input type="hidden"> 
					 <i class="ki-duotone ki-magnifier search-icon fs-2 text-gray-500 position-absolute top-50 translate-middle-y ms-5"><span class="path1"></span><span class="path2"></span></i>
					 <input class="search-input form-control form-control border-0 h-lg-40px ps-13" data-kt-search-element="input" name="search" placeholder="Rechercher sur l'Extranet..." type="text" value="">
					 <span class="search-spinner position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner"><span class="spinner-border h-15px w-15px align-middle text-gray-400"></span></span> 
					 <span class="search-reset btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-4" data-kt-search-element="clear"><i class="ki-duotone ki-cross fs-2 fs-lg-1 me-0"><span class="path1"></span><span class="path2"></span></i></span>
				</form>   -->
 				
<!--				<form id="search_form" autocomplete="off" class="d-none d-lg-block w-100 position-relative mb-5 mb-lg-0" data-kt-search-element="form">

					<input type="hidden"> 

					<i class="ki-duotone ki-magnifier search-icon fs-2 text-gray-500 position-absolute top-50 translate-middle-y ms-5">
						<span class="path1"></span><span class="path2"></span>
					</i>

					<input class="search-input form-control form-control border-0 h-lg-40px ps-13" 
						   data-kt-search-element="input" 
						   name="search" 
						   placeholder="Rechercher sur l'Extranet..." 
						   type="text" 
						   value="">

					<span class="search-spinner position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" 
						  data-kt-search-element="spinner">
						<span class="spinner-border h-15px w-15px align-middle text-gray-400"></span>
					</span>

					<span class="search-reset btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-4" 
						  data-kt-search-element="clear">
						<i class="ki-duotone ki-cross fs-2 fs-lg-1 me-0">
							<span class="path1"></span><span class="path2"></span>
						</i>
					</span>
				</form>

				
			
				<div class="menu menu-sub menu-sub-dropdown py-7 px-7 overflow-hidden w-300px w-md-350px" data-kt-search-element="content">
					<div data-kt-search-element="wrapper">
						<div class="" data-kt-search-element="main">
							<div class="d-flex flex-stack fw-semibold mb-4">
								<span class="text-muted fs-6 me-2">Recherche rapide</span>
							</div>
						
							
							<div class="scroll-y mh-200px mh-lg-325px">
								<div class="d-flex align-items-center mb-5">
									<div class="symbol symbol-40px me-4">
										<span class="symbol-label bg-light"><i class="ki-duotone ki-laptop fs-2 text-primary"><span class="path1"></span><span class="path2"></span></i></span>
									</div>
									<div class="d-flex flex-column">
										<a class="fs-6 text-gray-800 text-hover-primary fw-semibold" href="#">Messages pour moi</a> <span class="fs-7 text-muted fw-semibold">xx messages</span>
									</div>
								</div>
								<div class="d-flex align-items-center mb-5">
									<div class="symbol symbol-40px me-4">
										<span class="symbol-label bg-light"><i class="ki-duotone ki-chart-simple fs-2 text-primary"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i></span>
									</div>
									<div class="d-flex flex-column">
										<a class="fs-6 text-gray-800 text-hover-primary fw-semibold" href="#">Urgent</a> <span class="fs-7 text-muted fw-semibold">xx messages</span>
									</div>
								</div>
								<div class="d-flex align-items-center mb-5">
									<div class="symbol symbol-40px me-4">
										<span class="symbol-label bg-light"><i class="ki-duotone ki-chart fs-2 text-primary"><span class="path1"></span><span class="path2"></span></i></span>
									</div>
									<div class="d-flex flex-column">
										<a class="fs-6 text-gray-800 text-hover-primary fw-semibold" href="#">Cette semaine</a> <span class="fs-7 text-muted fw-semibold">xx messages</span>
									</div>
								</div>
								<div class="d-flex align-items-center mb-5">
									<div class="symbol symbol-40px me-4">
										<span class="symbol-label bg-light"><i class="ki-duotone ki-chart-line-down fs-2 text-primary"><span class="path1"></span><span class="path2"></span></i></span>
									</div>
									<div class="d-flex flex-column">
										<a class="fs-6 text-gray-800 text-hover-primary fw-semibold" href="#">Pour tous</a> <span class="fs-7 text-muted fw-semibold">xx messages</span>
									</div>
								</div>
								<div class="d-flex align-items-center mb-5">
									<div class="symbol symbol-40px me-4">
										<span class="symbol-label bg-light"><i class="ki-duotone ki-sms fs-2 text-primary"><span class="path1"></span><span class="path2"></span></i></span>
									</div>
									<div class="d-flex flex-column">
										<a class="fs-6 text-gray-800 text-hover-primary fw-semibold" href="#">Pour l'accueil</a> <span class="fs-7 text-muted fw-semibold">xx messages</span>
									</div>
								</div>
								<div class="d-flex align-items-center mb-5">
									<div class="symbol symbol-40px me-4">
										<span class="symbol-label bg-light"><i class="ki-duotone ki-bank fs-2 text-primary"><span class="path1"></span><span class="path2"></span></i></span>
									</div>
									<div class="d-flex flex-column">
										<a class="fs-6 text-gray-800 text-hover-primary fw-semibold" href="#">Pour mon service</a> <span class="fs-7 text-muted fw-semibold">xx messages</span>
									</div>
								</div>
								<div class="d-flex align-items-center mb-5">
									
									<div class="symbol symbol-40px me-4">
										<span class="symbol-label bg-light"><i class="ki-duotone ki-chart-line-down fs-2 text-primary"><span class="path1"></span><span class="path2"></span></i></span>
									</div>
									<div class="d-flex flex-column">
										<a class="fs-6 text-gray-800 text-hover-primary fw-semibold" href="#"></a> <span class="fs-7 text-muted fw-semibold"></span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
		
					-->

			</div>
		</div> 
		
		
		
		
		<!-- ******************************************************************************************************************************************************************************** -->
		<!-- ** DEBUT Notifications** DEBUT tab-content ** DEBUT tab-content ** DEBUT tab-content ** DEBUT tab-content ** DEBUT tab-content ** DEBUT tab-content ** DEBUT tab-content ** -->
		<!-- ******************************************************************************************************************************************************************************** -->
 <!--end::Link-->
			
		<!--begin::Notifications-->
		<div class="app-navbar-item me-lg-1">
		
		
		
		
			<a class="btn btn-icon btn-custom btn-color-gray-600 btn-active-color-primary w-35px h-35px w-md-40px h-md-40px" href="<?php echo 'https://'.$_SERVER['HTTP_HOST'].'/odyssee/index.php'; ?>" data-bs-custom-class="tooltip-inverse" data-bs-toggle="tooltip" aria-label="Retour à la page d'accueil" data-bs-original-title="Retour à la page d'accueil" >
				<div id="menu_decouverte_navbar_home"><i class="ki-duotone ki-home  fs-2qx"></i></div> 
			</a>
		
		
		
			<!--begin::Menu- wrapper-->
			<div class="btn btn-icon btn-custom btn-color-gray-600 btn-active-color-primary w-35px h-35px w-md-40px h-md-40px" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end" data-kt-menu-trigger="{default: 'click', lg: 'hover'}">
				<div id="menu_decouverte_navbar_tableau"><i class="ki-duotone ki-graph-3 fs-2qx"><span class="path1"></span><span class="path2"></span></i></div>
			</div><!--begin::Menu-->
			
			
			
			
			<div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px" data-kt-menu="true" id="kt_menu_notifications">
				<!--begin::Heading-->
				 	
				<div class="d-flex flex-column bgi-no-repeat rounded-top" style="background-image:url('<?php echo 'https://'.$_SERVER['HTTP_HOST'].'/odyssee/' ?>assets/media/misc/menu-header-bg.jpg')">
					<h3 class="text-white fw-semibold px-9 mt-10 mb-6">Tableaux de bord<span class="fs-8 opacity-75 ps-3"> - </span></h3><!--begin::Tabs-->
					<ul class="nav nav-line-tabs nav-line-tabs-2x nav-stretch fw-semibold px-9">
						<li class="nav-item">
							<a class="nav-link text-white opacity-75 opacity-state-100 pb-4 active" data-bs-toggle="tab" href="#kt_topbar_notifications_1">Mon Agenda</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-white opacity-75 opacity-state-100 pb-4" data-bs-toggle="tab" href="#kt_topbar_notifications_2">Agenda partagé</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-white opacity-75 opacity-state-100 pb-4" data-bs-toggle="tab" href="#kt_topbar_notifications_3">Notes</a>
						</li>
					</ul><!--end::Tabs-->
				</div><!--end::Heading-->
				
				
				
				
				
				<!-- ******************************************************************************************************************************************************************************** -->
				<!-- ** DEBUT tab-content ** DEBUT tab-content ** DEBUT tab-content ** DEBUT tab-content ** DEBUT tab-content ** DEBUT tab-content ** DEBUT tab-content ** DEBUT tab-content ** -->
				<!-- ******************************************************************************************************************************************************************************** -->
			

				<div class="tab-content">
					
					<div class="tab-pane fade show active" id="kt_topbar_notifications_1" role="tabpanel">
						<div class="d-flex flex-column px-9">
						
						<?php 
							// Initialisation de la connexion PDO
							$pdo = ConnexionPDO();
							
							// Préparation de la requête pour l'Agenda
							$sql = 'SELECT * FROM `odyagenda_events` WHERE created_by = :monid ORDER BY start_date DESC LIMIT 4';
							$stmt = $pdo->prepare($sql);
							$stmt->execute(['monid' => $_SESSION['monid']]);
						?>
							<div class="pt-10 pb-0">
								<h3 class="text-dark text-center fw-bold">Mon Agenda</h3>
								
								<?php   
									// Utilisation de fetch() avec PDO
									while ($data = $stmt->fetch(PDO::FETCH_ASSOC)) { 
										echo '<div class="d-flex flex-stack py-4">
												<div class="d-flex align-items-center">
													<div class="symbol symbol-35px me-4">
														<span class="symbol-label fs-2 bg-light-warning text-warning" >';
													
													if ($data['icon'] == "") 
														echo '<i class="ki-duotone ki-message-text fs-2"><span class="path1"></span> <span class="path2"></span> <span class="path3"></span></i>';
													else
														echo '<i class="fas '.$data['icon'].' fs-21"></i><span class="bullet-custom position-absolute bottom-0 w-100 h-4px" style="background:'.$data['backgroundColor'].'">';
													
													echo '</span>
													</div>
													<div class="mb-0 me-2">
														<a class="fs-6 text-gray-800 text-hover-primary fw-bold" href="#">'.$data['title'].'</a>
														<div class="text-gray-400 fs-7">';
													
													if ($data['description'] == "") 
														echo "Pas de description.";
													else    
														echo substr($data['description'], 0, 20);
													
													echo '</div>
													</div>
												</div><span class="badge badge-light fs-8">'.date('j/m/y', strtotime(substr($data['start'], 0, 10))).'</span>
											</div>';
									}
								?>
								
								<div class="text-center mt-5 mb-9">
									<a class="btn btn-sm btn-primary px-6" data-bs-target="#kt_modal_upgrade_plan" data-bs-toggle="modal" href="#">Ouvrir</a>
								</div>
							</div>
						</div>
					</div>

					<div class="tab-pane fade" id="kt_topbar_notifications_2" role="tabpanel">
						<div class="d-flex flex-column px-9">
							<?php 
								// Réutilisation ou nouvelle requête pour le KanBan
								$sql_kanban = 'SELECT * FROM `odyagenda_events` WHERE created_by = :monid ORDER BY start_date DESC LIMIT 4';
								$stmt_kanban = $pdo->prepare($sql_kanban);
								$stmt_kanban->execute(['monid' => $_SESSION['monid']]);
							?>
							<div class="pt-10 pb-0">
								<h3 class="text-dark text-center fw-bold">Mon KanBan</h3>
							
								<?php   
									while ($data = $stmt_kanban->fetch(PDO::FETCH_ASSOC)) { 
										echo '<div class="d-flex flex-stack py-4">
											<div class="d-flex align-items-center">
												<div class="symbol symbol-35px me-4">
													<span class="symbol-label fs-2 bg-light-warning text-warning" >';
														if ($data['icon'] == "") 
															echo '<i class="ki-duotone ki-message-text fs-2"><span class="path1"></span> <span class="path2"></span> <span class="path3"></span></i>';
														else
															echo '<i class="fas '.$data['icon'].' fs-21"></i><span class="bullet-custom position-absolute bottom-0 w-100 h-4px" style="background:'.$data['backgroundColor'].'">';
														echo '</span>
												</div>
												<div class="mb-0 me-2">
													<a class="fs-7 text-gray-800 text-hover-primary fw-bold" href="#">'.$data['title'].'</a>
													<div class="text-gray-400 fs-7">';
													if ($data['description'] == "") 
															echo "Pas de description.";
														else    
															echo substr($data['description'], 0, 20);
												echo '</div>
												</div>
											</div><span class="badge badge-light fs-8">'.date('j/m/y', strtotime(substr($data['start'], 0, 10))).'</span>
										</div>';
									}   
								?>  
								
								<div class="text-center mt-5 mb-9">
									<a class="btn btn-sm btn-primary px-6" data-bs-target="#kt_modal_upgrade_plan" data-bs-toggle="modal" href="#">Ouvrir</a>
								</div>
							</div>
						</div>
					</div>
					
					<div class="tab-pane fade" id="kt_topbar_notifications_3" role="tabpanel">
						<div class="scroll-y mh-325px my-5 px-8">
							<h3 class="text-dark text-center fw-bold">Mes notes</h3>
							<?php
								// Note : Pour cette partie, je suppose que vous avez déjà récupéré $nb_note, $titre, etc.
								// Si ce n'est pas le cas, vous devriez aussi faire une requête PDO ici.

								if (($nb_note - $note_supprimee) <= 0) {
									echo '<div class="alert alert-primary d-flex align-items-center p-5">';
									echo '<div class="d-flex flex-column"><h4 class="mb-1 text-dark">Vous n\'avez pas de note !</h4></div>';
									echo '</div>';
									echo alert_box("bleu", "Vous n'avez pas encore de note", "Cliquez sur Ouvrir mes notes !", ""); 
								}                           
								
								for ($i = 0; $i < $nb_note; $i++) {
									if ($corbeille[$i] == "NON") {
										echo '<div class="d-flex flex-stack py-4">';
										echo '    <div class="d-flex align-items-center me-2">';
										echo '        <span class="w-70px badge badge-light-success me-4">'.round(($taille_octet[$i]/1024), 1).' Ko </span>';
										
										if ($titre[$i] == "") {
											echo '<a class="text-gray-800 text-hover-primary fw-semibold" href="https://'.$_SERVER['HTTP_HOST'].'/odyssee/apps/notes/notes.php?id='.$id_note[$i].'"> Cette note est vide...</a>';
										} else {
											echo '<a href="https://'.$_SERVER['HTTP_HOST'].'/odyssee/apps/notes/notes.php?id='.$id_note[$i].'" class="text-gray-800 text-hover-primary fw-semibold">'.substr($titre[$i], 0, 18).'</a>';
										}
										echo '    </div>';
										echo '    <span class="badge badge-light fs-8">'.date('j/m/y', strtotime(substr($StartTime[$i], 0, 10))).' </span>';
										echo '</div>';
									}
								}
							?>  
						</div>
						<div class="py-3 text-center border-top">
							<a class="btn btn-color-gray-600 btn-active-color-primary" href="https://<?php echo $_SERVER['HTTP_HOST']; ?>/odyssee/apps/notes/notes.php">Ouvrir mes notes <i class="ki-duotone ki-arrow-right fs-5"><span class="path1"></span><span class="path2"></span></i></a>
						</div>
					</div>
				</div>
							
							
			</div><!--end::Menu--><!--end::Menu wrapper-->
		</div>
		<!--end::Notifications-->


		<div class="app-navbar-item">
		
			<!--begin::Link-->
			<!-- FAIRE ICI LE MODE LIGH / MED / FULL avec plus ou moins les icons à afficher -->	
			<!--begin::Link-->

			
			<!--end::Link-->
			<a class="btn btn-icon btn-custom btn-color-gray-600 btn-active-color-primary w-35px h-35px w-md-40px h-md-40px" href="<?php echo 'https://'.$_SERVER['HTTP_HOST'].'/odyssee/apps/chat/messages.php"'; ?> data-bs-custom-class="tooltip-inverse" data-bs-toggle="tooltip" aria-label="Voir les messages" data-bs-original-title="Voir les messages" >
				<div id="menu_decouverte_navbar_message">	
					<i class="ki-duotone ki-message-text fs-2qx"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
				</div> 
			</a> <!--end::Link-->
		
 
			<!--begin::Link-->
			<a class="btn btn-icon btn-custom btn-color-gray-600 btn-active-color-primary w-35px h-35px w-md-40px h-md-40px" href="<?php echo 'https://'.$_SERVER['HTTP_HOST'].'/odyssee/apps/notes/notes.php'; ?>" data-bs-custom-class="tooltip-inverse" data-bs-toggle="tooltip" aria-label="Ouvrir mon bloc-note" data-bs-original-title="Ouvrir mon bloc-note" >
				<div id="menu_decouverte_navbar_note">
					<i class="ki-duotone ki-pencil fs-2qx"><span class="path1"></span><span class="path2"></span></i>
				</div> 
			</a> <!--end::Link-->	
 
		
				
			<!--begin::Menu- wrapper-->
			<div class="btn btn-icon btn-custom btn-color-gray-600 btn-active-color-primary w-35px h-35px w-md-40px h-md-40px" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end" data-kt-menu-trigger="{default: 'click', lg: 'hover'}">
				<div id="menu_decouverte_navbar_rapide"> 
					<i class="ki-duotone ki-notification-status  fs-2qx"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
				</div>
			</div><!--begin::Menu-->
			<div class="menu menu-sub menu-sub-dropdown menu-column w-250px w-lg-325px" data-kt-menu="true">
				<!--begin::Heading-->
				<div class="d-flex flex-column flex-center bgi-no-repeat rounded-top px-9 py-10" style="background-image:url('<?php echo 'https://'.$_SERVER['HTTP_HOST'].'/odyssee/' ?>assets/media/misc/menu-header-bg.jpg')">
					<!--begin::Title-->
					<h3 class="text-white fw-semibold mb-3">Menu Rapide</h3><!--end::Title-->
					<!--begin::Status-->
					<!-- <span class="badge bg-primary text-inverse-primary py-2 px-3">xx tâches en attente</span>--> <!--end::Status-->
				</div><!--end::Heading-->
				<!--begin:Nav-->
				<div class="row g-0">
					<!--begin:Item-->
					<!--  Tout cela est compté dans connexion.php
							$_SESSION['nb_notes']	=$stats['notes'];
							$_SESSION['nb_task']	=$stats['tasks'];
							$_SESSION['nb_kanban']	=$stats['kanban'];
							$_SESSION['nb_events']	=$stats['events'];
					-->					
					
					<div class="col-6">
						<a class="d-flex flex-column flex-center h-100 p-6 bg-hover-light border-end border-bottom" href="<?php echo 'https://'.$_SERVER['HTTP_HOST'].'/odyssee/' ?>/apps/notes/notes.php"><i class="ki-duotone ki-pencil fs-3x text-primary mb-2"><span class="path1"></span><span class="path2"></span></i> <span class="fs-5 fw-semibold text-gray-800 mb-0">Mes notes</span> 
						<span class="fs-7 text-gray-400"><?php echo $_SESSION['nb_notes']; ?> en cours</span></a>
					</div><!--end:Item-->
					<!--begin:Item-->
					<div class="col-6">
						<a class="d-flex flex-column flex-center h-100 p-6 bg-hover-light border-bottom" href="<?php echo 'https://'.$_SERVER['HTTP_HOST'].'/odyssee/' ?>">
						<i class="ki-duotone ki-clipboard fs-3x text-primary mb-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> <span class="fs-5 fw-semibold text-gray-800 mb-0">Mes tâches</span> 
						<span class="fs-7 text-gray-400"><?php echo $_SESSION['nb_task']; ?>  en cours</span></a>
					</div><!--end:Item-->
					<!--begin:Item-->
					<div class="col-6">
						<a class="d-flex flex-column flex-center h-100 p-6 bg-hover-light border-end" href="<?php echo 'https://'.$_SERVER['HTTP_HOST'].'/odyssee/' ?>apps/kanban/kanban.php">
						<i class="ki-duotone ki-add-item fs-3x text-primary mb-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> <span class="fs-5 fw-semibold text-gray-800 mb-0">Mon kanban</span> 
						<span class="fs-7 text-gray-400"><?php echo $_SESSION['nb_kanban']; ?> en cours</span></a>
					</div><!--end:Item-->
					<!--begin:Item-->
					<div class="col-6">
						<a class="d-flex flex-column flex-center h-100 p-6 bg-hover-light" href="<?php echo 'https://'.$_SERVER['HTTP_HOST'].'/odyssee/' ?>apps/calendar/calendar.php"><i class="ki-duotone ki-calendar-add fs-3x text-primary mb-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span></i><span class="fs-5 fw-semibold text-gray-800 mb-0">Agenda</span> 
						<span class="fs-7 text-gray-400"><?php echo $_SESSION['nb_events']; ?> crées</span></a>
					</div><!--end:Item-->
				</div><!--end:Nav-->
				<div class="py-2 text-center border-top">
					<a class="btn btn-color-gray-600 btn-active-color-primary" href="<?php echo 'https://'.$_SERVER['HTTP_HOST'].'/odyssee/' ?>apps/inbox/news.php">Ouvrir le résumé <i class="ki-duotone ki-arrow-right fs-5">
						<span class="path1"></span><span class="path2"></span></i>
					</a>
				</div>
		
			</div>
			<!--end::Menu-->
			<!-- <div class="symbol symbol-80px symbol-circle  bg-light-info" data-bs-toggle="tooltip" data-kt-initialized="1" aria-label="Tricia" data-bs-original-title="Sandra Lopez"><img alt="Tricia" src="data:image/jpeg;base64, "></div> -->
			
			<!--end::Menu wrapper-->
			
		</div>
		<!--end::Quick links-->

 
		<!--begin::User menu-->
		<div class="app-navbar-item ms-3 ms-lg-4 me-lg-2" id="kt_header_user_menu_toggle">
			<!--begin::Menu wrapper-->
			<div class="cursor-pointer symbol symbol-30px symbol-lg-40px" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end" data-kt-menu-trigger="{default: 'click', lg: 'hover'}">
			<?php
				if ($_SESSION['avatarData']!="") {
			?>
					<!-- class="" -->
			<div id="menu_decouverte_profil" class="image-input-wrapper w-60px h-60px symbol symbol-80px symbol-circle  bg-light-info"  
				style="background-image: url('data:image/jpeg;base64,<?php echo $_SESSION['avatarData']; ?>');
				background-position: center;
				background-repeat: no-repeat;
				background-size: contain;
				margin-right: 8px;
				border-radius: .35rem;background-size: 100% 100%;"></div>
			<?php	
				}
				else {
					echo '<img alt="user" src="https://'.$_SERVER['HTTP_HOST'].'/odyssee/assets/media/avatars/'.$_SESSION['avatar'].'"  class="bg-warning">';
				}
			?>

			</div><!--begin::User account menu-->
			<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
				<!--begin::Menu item-->
				<div class="menu-item px-3">
					<div class="menu-content d-flex align-items-center px-3">
						<!--begin::Avatar-->
					
						
						<?php
							if ($_SESSION['avatarData']!="") {
						?>
						
							<!-- margin-right: 8px; -->
							<div class="image-input-wrapper w-40px h-40px"  
							style="background-image: url('data:image/jpeg;base64,<?php echo $_SESSION['avatarData']; ?>');
							background-position: center;
							background-repeat: no-repeat;
							background-size: contain;
							border-radius: .75rem;background-size: 100% 100%;"></div>
						<?php	
							}	else {	echo '<img alt="user" src="https://'.$_SERVER['HTTP_HOST'].'/odyssee/assets/media/avatars/'.$_SESSION['avatar'].'"  class="bg-warning">'; 	}
						?>
			
						
						<!--end::Avatar-->
						<!--begin::Username-->
						<div class="d-flex flex-column">
							<div class="fw-bold d-flex align-items-center fs-5">
								<?php echo $_SESSION['login']; ?><span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2"><?php echo $_SESSION['admin_compte']; ?></span>
							</div><a class="fw-semibold text-muted text-hover-primary fs-7" href="#"><?php echo $_SESSION['service']; ?></a>
						</div><!--end::Username-->
					</div>
				</div><!--end::Menu item-->

			
			<!-- < ?php if (($_SESSION['admin_compte'] == 'ADMIN') || ($_SESSION['monid']==2)): ?>		 -->

				<!--begin::Menu separator-->
				<!-- <div class="separator my-2"></div>  -->
				<!--end::Menu separator-->			
				
				
				
				<!--begin::Menu item-->
				<div class="menu-item px-5">
					 
						<a class="menu-link px-5" href="<?php echo 'https://'.$_SERVER['HTTP_HOST'].'/odyssee/apps/admin/edit-membre.php'; ?>">Mon profil</a>
					 
				</div><!--end::Menu item-->
			<!--  < ? php endif; ?>	 -->
			
		
				<!--
				<div class="menu-item px-5" data-kt-menu-offset="-15px, 0" data-kt-menu-placement="left-start" data-kt-menu-trigger="{default: 'click', lg: 'hover'}">
					<a class="menu-link px-5" href="#"><span class="menu-title">Mon Extranet</span> 
					< ?php 
						if ($_SESSION['mode_eco']=="full") echo '<i class="ki-duotone ki-rocket fs-2"><span class="path1"></span><span class="path2"></span></i>';
						if ($_SESSION['mode_eco']=="med") echo '<i class="ki-duotone ki-tree  fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>';
						if ($_SESSION['mode_eco']=="light") echo '<i class="ki-duotone ki-abstract-46  fs-2"><span class="path1"></span><span class="path2"></span></i>';
					?>	
						<span class="menu-arrow"></span>
					</a> 
					<div class="menu-sub menu-sub-dropdown w-175px py-4">
						
						<div class="menu-item px-3">
							<a class="menu-link px-5" href="?mode=light">Léger</a>
						</div>
						<div class="menu-item px-3">
							<a class="menu-link px-5" href="?mode=med">Medium</a>
						</div>
						<div class="menu-item px-3">
							<a class="menu-link px-5" href="?mode=full">Complet</a>
						</div>
						<div class="menu-item px-3">
							<a class="menu-link px-5" href="?mode=desire">Version 3</a> 
						</div>								
					</div>
				</div>
				-->
				 
				<!--begin::Menu separator-->
				<div class="separator my-2"></div><!--end::Menu separator-->
				
				<!--begin::Menu item-->
				
				<div class="menu-item px-5" data-kt-menu-offset="-15px, 0" data-kt-menu-placement="left-start" data-kt-menu-trigger="{default: 'click', lg: 'hover'}">
					<a class="menu-link px-5" href="#"><span class="menu-title position-relative">Mode <span class="ms-5 position-absolute translate-middle-y top-50 end-0"><i class="ki-duotone ki-night-day theme-light-show fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span></i> <i class="ki-duotone ki-moon theme-dark-show fs-2"><span class="path1"></span><span class="path2"></span></i></span></span></a> <!--begin::Menu-->
					<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px" data-kt-element="theme-mode-menu" data-kt-menu="true">
						<div class="menu-item px-3 my-0">
							<a class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light" href="#"><span class="menu-icon" data-kt-element="icon"><i class="ki-duotone ki-night-day fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span></i></span> <span class="menu-title">Clair</span></a>
						</div>
						<div class="menu-item px-3 my-0">
							<a class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark" href="#"><span class="menu-icon" data-kt-element="icon"><i class="ki-duotone ki-moon fs-2"><span class="path1"></span><span class="path2"></span></i></span> <span class="menu-title">Sombre</span></a>
						</div>
						<div class="menu-item px-3 my-0">
							<a class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system" href="#"><span class="menu-icon" data-kt-element="icon"><i class="ki-duotone ki-screen fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i></span> <span class="menu-title">Système</span></a>
						</div>
					</div>
				</div>
				
				<div class="menu-item px-5">
				
					
				<a class="menu-link px-5" href="authentication/sign-up/index.php">Me deconnecter</a>
					 
					
				</div><!--end::Menu item-->
				
			</div><!--end::User account menu-->
			<!--end::Menu wrapper-->
		</div><!--end::User menu-->
		
		
 	
		<!--begin::Action-->
		<div class="app-navbar-item ms-3 ms-lg-4 me-lg-6">
			<!--begin::Link-->
			<a class="btn btn-icon btn-custom btn-color-gray-600 btn-active-color-primary w-35px h-35px w-md-40px h-md-40px" href="authentication/sign-up/index.php" data-bs-custom-class="tooltip-inverse" data-bs-toggle="tooltip" aria-label="Faire une pause café" data-bs-original-title="Me deconnecter (café ?) Pensez à marcher un peu et à regarder au loin. Pensez également à faire des étirements." >
				 
					<div id="menu_decouverte_deco"><i class="ki-duotone ki-coffee fs-2qx"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span></i></div>
				 
			</a> <!--end::Link-->
	 
			<a class="btn btn-icon btn-custom btn-color-gray-600 btn-active-color-primary w-35px h-35px w-md-40px h-md-40px" href="?decouverte=ok" data-bs-custom-class="tooltip-inverse" data-bs-toggle="tooltip" aria-label="Présentation" data-bs-original-title="Petite présentation de votre interface Odyssée." >	 
				<div id="menu_decouverte_aide"><i class="ki-duotone ki-click   fs-2qx"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i></div>
				
			</a> <!--end::Link-->
	 
			<!--begin::Link-->
			<a class="btn btn-icon btn-custom btn-color-gray-600 btn-active-color-primary w-35px h-35px w-md-40px h-md-40px fullscreen-btn" href="javascript:;"  data-bs-custom-class="tooltip-inverse" data-bs-toggle="tooltip" aria-label="Plein écran" data-bs-original-title="Plein écran (F11)" >
				<div id="menu_decouverte_full_screen"><i class="ki-duotone ki-arrow-two-diagonals  fs-2qx"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i></div>
			</a> <!--end::Link--> 		
			
			
		</div>
		
 
		
		<!--end::Action-->

		<!--begin::Header menu toggle-->
	<!--<div class="app-navbar-item ms-3 ms-lg-4 me-lg-6">
			<div class="btn btn-icon btn-custom btn-color-gray-600 btn-active-color-primary w-35px h-35px w-md-40px h-md-40px" id="kt_app_aside_mobile_toggle">
				<i class="ki-duotone ki-burger-menu-2 fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span></i>
			</div>
		</div>
	-->
	
	
	</div><!--end::Navbar-->
	
<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Déclarer la variable à l'intérieur du DOMContentLoaded
        const fullscreenBtn = document.querySelector(".fullscreen-btn");

 
        if (fullscreenBtn) {
            fullscreenBtn.addEventListener("click", function () {
                if (!document.fullscreenElement) {
                    document.documentElement.requestFullscreen().catch(err => {
                        alert(`Erreur lors de l'activation du mode plein écran : ${err.message}`);
                    });
                } else {
                    document.exitFullscreen();
                }
            });

            // Écoute les changements d'état plein écran pour mettre à jour le tooltip
            document.addEventListener("fullscreenchange", () => {
                if (document.fullscreenElement) {
                    fullscreenBtn.setAttribute("aria-label", "Quitter le plein écran");
                    fullscreenBtn.setAttribute("data-bs-original-title", "Quitter le plein écran (F11)");
                } else {
                    fullscreenBtn.setAttribute("aria-label", "Plein écran");
                    fullscreenBtn.setAttribute("data-bs-original-title", "Plein écran (F11)");
                }
 
            });
        }
    });
</script>
