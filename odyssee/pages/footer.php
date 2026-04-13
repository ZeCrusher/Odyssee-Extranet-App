<div id="kt_app_footer" class="app-footer d-flex flex-column flex-md-row align-items-center justify-content-between py-3">
    <div class="text-gray-900 order-2 order-md-1">
        <span class="text-muted fw-semibold me-1">2026&copy;</span>
        <a href="https://github.com/ZeCrusher/Odyssee-Extranet-App" target="_blank" class="text-gray-800 text-hover-primary fw-bold">ZeCrusher/Github</a>
    </div>
    <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1 mb-2 mb-md-0">
        <li class="menu-item">
            <a href="#" class="menu-link px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">
                <i class="ki-duotone ki-code fs-4 me-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                Liste des bugs
            </a>
        </li>
        <li class="menu-item">
            <a href="#" class="menu-link px-3" data-bs-toggle="modal" data-bs-target="#odyssee_ajout_support">
                <i class="ki-duotone ki-message-question fs-4 me-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                Bug
            </a>
        </li>
    </ul>
</div>
<div class="modal fade" id="kt_modal_view_users" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <div class="modal-content">
            <div class="modal-header pb-0 border-0 justify-content-end">
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                </div>
            </div>
            <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                <div class="text-center mb-13">
                    <h1 class="mb-3">Journal des Mises à jour</h1>
                    <div class="text-muted fw-semibold fs-5">Historique des évolutions de l'Extranet</div>
                </div>
                <div class="mb-10">
                    <div class="mh-375px scroll-y me-n7 pe-7">
                    <?php
                        // Connexion à la base de données via db.php 
						$pdo = ConnexionPDO();
	
                        $stmt = $pdo->query("SELECT id, login, niveau_urgent, titresupport, datesupport FROM support ORDER BY datesupport DESC");
                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                            $badgeColor = 'badge-light-primary';
                            if($row['niveau_urgent'] >= 4) $badgeColor = 'badge-light-danger';
                            else if($row['niveau_urgent'] >= 2) $badgeColor = 'badge-light-warning';
                            
                            echo '<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<div class="d-flex align-items-center">
										<div class="symbol symbol-40px symbol-circle me-5">
											<span class="symbol-label bg-light-info text-info fw-bold">' . htmlspecialchars($row['id']) . '</span>
										</div>
										<div class="d-flex flex-column">
											<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">' . htmlspecialchars($row['titresupport']) . '</a>
											<div class="d-flex align-items-center">
												<span class="fw-semibold text-muted fs-7 me-2">' . htmlspecialchars($row['login']) . '</span>
												<span class="badge ' . $badgeColor . ' fs-9 px-2 py-1">Niv. ' . htmlspecialchars($row['niveau_urgent']) . '</span>
											</div>
										</div>
									</div>
									<div class="d-flex flex-column align-items-end">
										<span class="text-gray-900 fw-bolder fs-7">' . date('d/m/Y', strtotime($row['datesupport'])) . '</span>
										<span class="text-muted fs-8">Date M.A.J</span>
									</div>
								</div>';
                        }
                        ?>
                    </div>
                </div>
                <div class="text-center">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="odyssee_ajout_support" tabindex="-1" aria-hidden="true">
   
   <div class="modal-dialog modal-dialog-centered mw-650px">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="fw-bold">Vous avez trouvé un BUG ?</h2>
                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                </div>
            </div>
            <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                <form method="POST" class="form" action="index.php">
  
                    <div class="fv-row mb-7">
                        <label class="required fs-6 fw-semibold mb-2">Votre Login (non modifiable)</label>
                        <input type="text" name="login" class="form-control form-control-solid" hidden value="<?php echo $_SESSION['login'] ?? ''; ?>" />
                        <div type="text" name="login" class="form-control form-control-solid"><?php echo $_SESSION['login'] ?? ''; ?></div>
						
                    </div>
                    <div class="fv-row mb-7">
                        <label class="required fs-6 fw-semibold mb-2">Descriptif du bug </label>
                        <!-- <input type="text" name="titresupport" class="form-control form-control-solid" placeholder="Ex: Problème d'accès..." required /> -->
							<textarea class="form-control form-control-flush form-control-solid me-4" style="border-radius: 10px;" rows="4"  name="titresupport" placeholder="Ex: Problème d'accès..."></textarea>						
                    </div>
                    <div class="row g-9 mb-8">
                        <div class="col-md-6 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">Niveau d'urgence (1-5)</label>
                            <input type="number" name="niveau_urgent" class="form-control form-control-solid" min="1" max="5" required />

                        </div>
						<div class="col-md-6 fv-row">
							<label class="required fs-6 fw-semibold mb-2">Date</label>
							<input type="date" 
								   name="datesupport" 
								   class="form-control form-control-solid" 
								   value="<?php echo date('Y-m-d'); ?>" 
								   required />
						</div>
                    </div>
                    <div class="text-center pt-10">
                        <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn btn-primary">Ajouter au support</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
