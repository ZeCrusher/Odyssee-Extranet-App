
						<!--BOUTON OPTION :aside-->
						<div class="app-aside flex-column" 
								data-kt-drawer="true" data-kt-drawer-activate="{default: true, lg: false}" 
								data-kt-drawer-direction="end" 
								data-kt-drawer-name="app-aside" data-kt-drawer-overlay="true" data-kt-drawer-toggle="#kt_app_aside_mobile_toggle" data-kt-drawer-width="auto" id="kt_app_aside">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column align-items-center hover-scroll-y py-5 py-lg-0 gap-1" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-dependencies="#kt_app_header" data-kt-scroll-height="auto" data-kt-scroll-offset="5px" data-kt-scroll-wrappers="#kt_app_aside_wrapper" id="kt_app_aside_wrapper">
								<a class="btn btn-icon btn-color-primary bg-hover-body h-45px w-45px flex-shrink-0 mb-4" data-bs-custom-class="tooltip-inverse" data-bs-toggle="tooltip" href="<?php echo 'https://'.$_SERVER['HTTP_HOST'].'/odyssee/'; ?>apps/calendar/calendar.php" title="Calendrier collaboratif">
									<div id="menu_decouverte_v_calendrier">
										<i class="ki-duotone ki-calendar-add fs-2qx"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span></i>
									</div>
								</a> 
								<a class="btn btn-icon btn-color-warning bg-hover-body h-45px w-45px flex-shrink-0 mb-4" data-bs-custom-class="tooltip-inverse"	data-bs-toggle="tooltip" href="<?php echo 'https://'.$_SERVER['HTTP_HOST'].'/odyssee/'; ?>apps/kanban/kanban.php" title="KanBan collaboratif">
									<div id="menu_decouverte_v_kanban">
										<i class="ki-duotone ki-kanban  fs-2qx"><span class="path1"></span><span class="path2"></span></i>
									</div>	
								</a> 
								 
								<a class="btn btn-icon btn-color-info bg-hover-body h-45px w-45px flex-shrink-0 mb-4" data-bs-custom-class="tooltip-inverse" data-bs-toggle="tooltip" href="" title="Mes Tâches">
									<div id="menu_decouverte_v_tache">
										<i class="ki-duotone ki-add-notepad  fs-2qx"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
									</div>	
								</a>
								
								<a class="btn btn-icon btn-color-danger bg-hover-body h-45px w-45px flex-shrink-0 mb-4" data-bs-custom-class="tooltip-inverse" data-bs-toggle="tooltip" href="<?php echo 'https://'.$_SERVER['HTTP_HOST'].'/odyssee/'; ?>apps/asfalis/coffre-numerique.php" title="La sécurité des données">
									<div id="menu_decouverte_v_code">
										<i class="ki-duotone ki-key-square   fs-2qx"><span class="path1"></span><span class="path2"></span></i>
									</div>	
								</a>
							</div><!--end::Wrapper-->
						</div><!--end::aside-->
