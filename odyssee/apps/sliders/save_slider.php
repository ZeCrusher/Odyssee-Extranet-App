<?php

	require_once __DIR__."../../../includes/db.php";
	
	$pdo = ConnexionPDO();

	// 1. Récupération des données du formulaire
	$id      = intval($_POST['id']);
	$title   = $_POST['slider_title'] ?? 'Sans titre';
	$service = $_POST['service'] ?? '';
	$periode = $_POST['periode'] ?? '';
	$note    = $_POST['note'] ?? '';
	$actif   = isset($_POST['slider_actif']) ? 'OUI' : 'NON';
	$heure = $_POST['heure'] ?? 'NON';
	$slider_date     = $_POST['slider_date'] ?? null;
	$slider_date_fin = $_POST['slider_date_fin'] ?? null;
	$logo            = $_POST['logo'] ?? 'logo-couleur.png';
	$qrcode          = isset($_POST['qrcode_actif']) ? 'OUI' : 'NON';
	//$meteo           = isset($_POST['meteo_actif']) ? 'iconpack2' : 'NON';
	$meteo = $_POST['meteo'] ?? 'NON';
	
	// 2. Gestion de l'upload Photo/Vidéo
	$photo_sql = "";
	$cleanName = "";

	// if (!empty($_FILES['photo_file']['name'])) {
		// $fileName = $_FILES['photo_file']['name']; 	// Nettoyage du nom de fichier (enlève espaces et accents)
		// $cleanName = str_replace(' ', '_', $fileName);
		// $targetPath = "upload/" . $cleanName;
		// if (move_uploaded_file($_FILES['photo_file']['tmp_name'], $targetPath)) {
			// $photo_sql = ", photo = ?";
		// }
	// }
	
	
	// 
	$photo_sql = "";
	$cleanName = "";

	if (!empty($_FILES['photo_file']['name'])) {

		$uploadDir = $_SERVER['DOCUMENT_ROOT'] . '/odyssee/apps/sliders/upload/';

		// Crée dossier si besoin
		if (!is_dir($uploadDir)) {
			mkdir($uploadDir, 0755, true);
		}

		$file = $_FILES['photo_file'];

		// Vérifications
		$allowedTypes = ['image/jpeg','image/png','image/webp','image/gif'];
		$maxSize = 5 * 1024 * 1024; // 5MB

		$tmpName = $file['tmp_name'];
		$size = $file['size'];
		$type = mime_content_type($tmpName);

		if (!in_array($type, $allowedTypes)) {
			die("Format non autorisé");
		}

		if ($size > $maxSize) {
			die("Fichier trop volumineux");
		}

		// Génération nom unique
		$ext = pathinfo($file['name'], PATHINFO_EXTENSION);
		$cleanName = uniqid('slider_') . '.' . $ext;

		$targetPath = $uploadDir . $cleanName;

		// Upload réel
		if (move_uploaded_file($tmpName, $targetPath)) {
			$photo_sql = ", photo = ?";
		} else {
			die("Erreur lors de l'upload");
		}
	}

	// 3. Construction de la requête SQL
	// Note : J'ai enlevé les espaces invisibles potentiels
	$sql = "UPDATE odyslider SET 
			slider_title = ?, 
			service = ?, 
			periode = ?, 
			note = ?, 
			slider_actif = ?,
			qrcode = ?,
			meteo = ?,
			slider_date = ?,
			slider_date_fin = ?,
			logo = ?,
			heure = ?			
			$photo_sql 
			WHERE id = ?";

	// 4. Préparation des paramètres (L'ordre est CRUCIAL)
	$params = [
		$title, 
		$service, 
		$periode, 
		$note, 
		$actif, 
		$qrcode, 
		$meteo, 
		$slider_date, 
		$slider_date_fin, 
		$logo,
		$heure
	];

	// Si une photo a été uploadée, on ajoute son nom au tableau avant l'ID
	if (!empty($photo_sql)) {
		$params[] = $cleanName;
	}

	// Enfin on ajoute l'ID pour le WHERE
	$params[] = $id;

	try {
		$stmt = $pdo->prepare($sql);
		$stmt->execute($params);
		
		// Redirection avec un petit message de succès
		header('Location: edit_slider.php?id='.$id.'&status=success');
	} catch (Exception $e) {
		// En cas d'erreur, on affiche l'erreur SQL
		die("Erreur SQL : " . $e->getMessage());
	}
	exit;

?>