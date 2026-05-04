<?php

//On demarre les sessions pour ODYSSEE
session_start();

	require_once __DIR__ . "/../../includes/db.php";

	ini_set('display_errors', 1);
	error_reporting(E_ALL);

	try {
		$pdo = ConnexionPDO();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		// Données
		$title   = $_POST['slider_title'] ?? 'Nouveau Slider';
		$service = $_POST['service'] ?? 'none';
		$date    = $_POST['slider_date'] ?? date('Y-m-d');
		$note    = $_POST['note'] ?? 'Note par défaut';

		$fileName = "";

	// --- GESTION DU MÉDIA ---
    $fileName = "";

    // 1. On vérifie d'abord si un nouveau fichier est uploadé
    if (!empty($_FILES['photo_file']['name'])) {
        $fileName = str_replace(' ', '_', $_FILES['photo_file']['name']);
        move_uploaded_file($_FILES['photo_file']['tmp_name'], "upload/" . $fileName);
    } 
    // 2. Sinon, on regarde si une photo existante a été sélectionnée dans le menu déroulant
    elseif (isset($_POST['photo']) && $_POST['photo'] !== "NON") {
        $fileName = $_POST['photo'];
    }
    // ------------------------
    // if (!empty($_FILES['photo_file']['name'])) {
        // $fileName = str_replace(' ', '_', $_FILES['photo_file']['name']);
        // move_uploaded_file($_FILES['photo_file']['tmp_name'], "upload/" . $fileName);
    // }

		// Requête complète
		$sql = "INSERT INTO odyslider (
			slider_title,
			slider_actif,
			note,
			slider_date,
			logo,
			etat,
			photo,
			qrcode,
			meteo,
			utilisateur,
			service,
			periode,
			mode
		) VALUES (
			:title,
			:actif,
			:note,
			:date,
			:logo,
			:etat,
			:photo,
			:qrcode,
			:meteo,
			:utilisateur,
			:service,
			:periode,
			:mode
		)";



		$stmt = $pdo->prepare($sql);

		$stmt->execute([
			':title'       => $title,
			':actif'       => 'OUI',
			':note'        => $note,
			':date'        => $date,
			':logo'        => 'logo-couleur.png',
			':etat'        => 'ACTIF',
			':photo'       => $fileName,
			':qrcode'      => 'NON',
			':meteo'       => 'NON',
			':utilisateur' => $_SESSION['monid'], // ⚠️ idéalement via session
			':service'     => $service,
			':periode'     => '2000',
			':mode'        => 'standard'
		]);

		// echo "Insertion réussie ! ID = " . $pdo->lastInsertId();

	} catch (PDOException $e) {
		http_response_code(500);
		echo "Erreur SQL : " . $e->getMessage();
	}

	//header('Location: vignettes_sliders.php?success=created'); // exit;
	echo "success";
?>