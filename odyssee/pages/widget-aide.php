		<!--begin::Exolore drawer-->
	<div id="kt_explore" class="explore bg-body" data-kt-drawer="true" data-kt-drawer-name="explore" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'lg': '440px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_explore_toggle" data-kt-drawer-close="#kt_explore_close">

		<!--begin::Card-->
		<div class="card shadow-none rounded-0 w-100">
			<div class="card-header" id="kt_explore_header">
				<h5 class="card-title fw-semibold text-gray-600">Lire, Editer, Créer une procédure</h5>
				<div class="card-toolbar">
					<button type="button" class="btn btn-sm btn-icon explore-btn-dismiss me-n5" id="kt_explore_close">
						<i class="ki-duotone ki-cross fs-2"><span class="path1"></span><span class="path2"></span></i>
					</button>
				</div>
			</div>
			<!--end::Header-->

			<!--begin::Body-->
			<div class="card-body" id="kt_explore_body">
				<div id="kt_explore_scroll" class="scroll-y me-n5 pe-5" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_explore_body" data-kt-scroll-dependencies="#kt_explore_header, #kt_explore_footer" data-kt-scroll-offset="5px">
		

					<div class="rounded border border-dashed border-gray-300 py-6 px-8 mb-5">
						<div class="d-flex flex-stack mb-5">
							<h3 class="fs-3 fw-bold mb-0">Centre d'aide</h3>
						</div>

						<div class="fs-5 fw-semibold mb-7">
							<span class="text-gray-500">Des paramètres du compte aux permissions, trouvez de l'aide pour tout ce qui concerne votre Extranet.</span>
						</div>        

						<div class="mb-7">
							<a href="<?php echo 'https://'.$_SERVER['HTTP_HOST'].'/odyssee/'; ?>apps/support-center/aides.php" class="btn btn-lg explore-btn-primary w-100">Ouvrir les procèdures</a>
						</div>

						<div class="d-flex flex-column flex-center mb-3">

							<div class="text-gray-400 fs-7">
								Nombre de procédures [     ] 
							</div>
						</div>

					</div>
			
				</div>
			</div>

		</div>
	</div>


	<div id="kt_help" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="help" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'350px', 'md': '525px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_help_toggle" data-kt-drawer-close="#kt_help_close">
		<!--begin::Card-->
		<div class="card shadow-none rounded-0 w-100">
			<!--begin::Header-->
			<div class="card-header" id="kt_help_header">
				<h5 class="card-title fw-semibold text-gray-600">Aide en ligne</h5>

				<div class="card-toolbar">
					<button type="button" class="btn btn-sm btn-icon explore-btn-dismiss me-n5" id="kt_help_close">
						<i class="ki-duotone ki-cross fs-2"><span class="path1"></span><span class="path2"></span></i>				
					</button>
				</div>
			</div>
			<!--end::Header-->

			<!--begin::Body-->
			<div class="card-body" id="kt_help_body">
				<!--begin::Content-->

				<div id="kt_help_scroll" class="hover-scroll-overlay-y"	data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_help_body"  data-kt-scroll-dependencies="#kt_help_header" data-kt-scroll-offset="5px">
					<!--begin::Support-->
					<div class="rounded border border-dashed border-gray-300 p-6 p-lg-8 mb-10">
						<!--begin::Heading-->
						<h2 class="fw-bold mb-5">Vous souhaitez déposer une procédure ?</h2>
						<!--end::Heading-->

						<!--begin::Description-->
						<div class="fs-5 fw-semibold mb-5">
							<span class="text-gray-500">Ce guide vous aidera à créer votre procédure et à utiliser les fonctionnalités de collaboration et de communauté de l'Extranet.</span>
							<a class="explore-link d-none" href="">FAQs</a>
						</div>
						<!--end::Description-->
						
						<!--begin::Link-->
						<a href="<?php echo 'https://'.$_SERVER['HTTP_HOST'].'/odyssee/'; ?>apps/support-center/edit.php" class="btn btn-lg explore-btn-primary w-100">Création d'une procédure</a>
						<!--end::Link-->
					</div>
				 
						
					<!--begin::Link-->
					<a href=""  class="parent-hover d-flex align-items-center mb-7">
							<!--begin::Icon-->
						<div class="d-flex flex-center w-50px h-50px w-lg-75px h-lg-75px flex-shrink-0 rounded bg-light-warning">
							<i class="ki-duotone ki-abstract-26 text-warning fs-2x fs-lg-3x"><span class="path1"></span><span class="path2"></span></i>
						</div>
						<!--end::Icon-->
						<!--begin::Info-->
						<div class="d-flex flex-stack flex-grow-1 ms-4 ms-lg-6">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column me-2 me-lg-5">
								<!--begin::Title-->
								<div class="text-dark parent-hover-primary fw-bold fs-6 fs-lg-4 mb-1">Documentation</div>
								<div class="text-muted fw-semibold fs-7 fs-lg-6">Des guides et exemples dans les services pour démarrer immédiatement.</div>
								<!--end::Description-->
							</div>
							<!--end::Wrapper-->
							<i class="ki-duotone ki-arrow-right text-gray-400 fs-2"><span class="path1"></span><span class="path2"></span></i>						
						</div>
						<!--end::Info-->
					</a>
						<!--end::Link-->
															<!--begin::Link-->
						<a href=""  class="parent-hover d-flex align-items-center mb-7">
							<!--begin::Icon-->
							<div class="d-flex flex-center w-50px h-50px w-lg-75px h-lg-75px flex-shrink-0 rounded bg-light-primary">
								<i class="ki-duotone ki-wallet text-primary fs-2x fs-lg-3x"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>                		
							</div>
							<!--end::Icon-->

							<!--begin::Info-->
							<div class="d-flex flex-stack flex-grow-1 ms-4 ms-lg-6">
								<!--begin::Wrapper-->
								<div class="d-flex flex-column me-2 me-lg-5">
									<!--begin::Title-->
									<div class="text-dark parent-hover-primary fw-bold fs-6 fs-lg-4 mb-1">
										Moteur de recherche
									</div>
									<!--end::Title-->

									<!--begin::Description-->
									<div class="text-muted fw-semibold fs-7 fs-lg-6">
										Chercher un mot, une expression pour trouver votre procédure.
									</div>
									<!--end::Description-->
								</div>
								<!--end::Wrapper-->

								<i class="ki-duotone ki-arrow-right text-gray-400 fs-2"><span class="path1"></span><span class="path2"></span></i>						</div>
							<!--end::Info-->
						</a>
						<!--end::Link-->
															<!--begin::Link-->
						<a href=""  class="parent-hover d-flex align-items-center mb-7">
							<!--begin::Icon-->
							<div class="d-flex flex-center w-50px h-50px w-lg-75px h-lg-75px flex-shrink-0 rounded bg-light-info">
								<i class="ki-duotone ki-design text-info fs-2x fs-lg-3x"><span class="path1"></span><span class="path2"></span></i>                		</div>
							<!--end::Icon-->

							<!--begin::Info-->
							<div class="d-flex flex-stack flex-grow-1 ms-4 ms-lg-6">
								<!--begin::Wrapper-->
								<div class="d-flex flex-column me-2 me-lg-5">
									<!--begin::Title-->
									<div class="text-dark parent-hover-primary fw-bold fs-6 fs-lg-4 mb-1">
										Générateur et modèle
									</div>
									<!--end::Title-->

									<!--begin::Description-->
									<div class="text-muted fw-semibold fs-7 fs-lg-6">
										Créez votre procédure avec un modèle de mise en page, prévisualisez-la et exportez le HTML pour l'intégration/partage.								
									</div>
									<!--end::Description-->
								</div>
								<!--end::Wrapper-->

								<i class="ki-duotone ki-arrow-right text-gray-400 fs-2"><span class="path1"></span><span class="path2"></span></i>						</div>
							<!--end::Info-->
						</a>
						<!--end::Link-->
																				<!--begin::Link-->
						<a href=""  class="parent-hover d-flex align-items-center mb-7">
							<!--begin::Icon-->
							<div class="d-flex flex-center w-50px h-50px w-lg-75px h-lg-75px flex-shrink-0 rounded bg-light-danger">
								<i class="ki-duotone ki-keyboard text-danger fs-2x fs-lg-3x"><span class="path1"></span><span class="path2"></span></i>                		</div>
							<!--end::Icon-->

							<!--begin::Info-->
							<div class="d-flex flex-stack flex-grow-1 ms-4 ms-lg-6">
								<!--begin::Wrapper-->
								<div class="d-flex flex-column me-2 me-lg-5">
									<!--begin::Title-->
									<div class="text-dark parent-hover-primary fw-bold fs-6 fs-lg-4 mb-1"> Quoi de neuf ? </div>
									<!--end::Title-->

									<!--begin::Description-->
									<div class="text-muted fw-semibold fs-7 fs-lg-6"> Dernières fonctionnalités et améliorations ajoutées en tenant compte des commentaires de nos utilisateurs.							</div>
									<!--end::Description-->
								</div>
								<!--end::Wrapper-->

								<i class="ki-duotone ki-arrow-right text-gray-400 fs-2"><span class="path1"></span><span class="path2"></span></i>						
							</div>
							<!--end::Info-->
						</a>
						<!--end::Link-->
				</div>
				<!--end::Content-->
			</div>
			<!--end::Body-->
		</div>
		<!--end::Card-->
	</div>
	<!--end::Help drawer--><!--end::Engage drawers-->

	<!--begin::Engage toolbar-->
	<div class="engage-toolbar d-flex position-fixed px-5 fw-bold zindex-2 top-50 end-0 transform-90 mt-5 mt-lg-20 gap-2">  
				
		<!--begin::Exolore drawer toggle-->
		<button  id="kt_explore_toggle" class="engage-explore-toggle engage-btn btn shadow-sm fs-6 px-4 rounded-top-0" title="Lectures & Créations" data-bs-custom-class="tooltip-inverse" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-dismiss="click" data-bs-trigger="hover">
			<span id="kt_explore_toggle_label">Procédure</span>
		</button>
		<!--end::Exolore drawer toggle-->       

		<!--begin::Help drawer toggle-->
		<button id="kt_help_toggle" class="engage-help-toggle btn engage-btn shadow-sm px-5 rounded-top-0" title="Learn & Get Inspired" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="left" data-bs-dismiss="click" data-bs-trigger="hover">	
		Aide
		</button>
		<!--end::Help drawer toggle-->        
		<!--begin::Purchase link-->
		<!-- <a 	href="https://keenthemes.com/products/saul-html-pro" target="_blank" class="engage-purchase-link btn engage-btn px-5 shadow-sm rounded-top-0">Support</a> -->
		<!--end::Purchase link-->
		  
	</div>
	<!--end::Engage toolbar-->
	
	<!--begin::Scrolltop-->
	<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
		<i class="ki-duotone ki-arrow-up"><span class="path1"></span><span class="path2"></span></i>
	</div>
	<!--end::Scrolltop-->


