<?php
 
// ***************************************************************************************
// *****                       Historique des versions                    			 *****
// ***************************************************************************************
// ***** 01/09/2025 -  première ligne de code de la fonction
// ***************************************************************************************
// ***** 13/01/2025 - nettoyerNewsletter -> Fonctionne pour l'apps apps/newsletters/*.php
// ***************************************************************************************


/* les clefs de chiffrement sont dans connexion.php */
 
	//On demarre les sessions pour ODYSSEE
	session_start();
	
	require_once __DIR__."../../includes/db.php";
		
		 
		use PHPMailer\PHPMailer\PHPMailer;
		use PHPMailer\PHPMailer\Exception;

		// On charge les fichiers une seule fois ici
		require_once 'Exception.php';
		require_once 'PHPMailer.php';
		require_once  'SMTP.php';


/** ZeCrusher
 * Nettoyage  de Newsletter.
 *
 * En reprenant les anciennes News, j'ai remarqué qu'il y avait des balises qui bloquaient l'édition sur le nouveau système.
 * exemple : data-module="footer",  data-thumb="xxxx" data-bgcolor="#ffffff", data-size="xxxx"... 
 * @param string $manewsletters 
 */
 
function nettoyerNewsletter($manewsletters)	{
    // on liste les attributs data-* que je veux supprimer
    $pattern = '/\s(data-border-right-color|data-border-top-color|data-border-left-color|data-max|data-min|data-module|data-thumb|data-border-bottom-color|data-bgcolor|data-size|data-type|data-bg|data-color|data-link-color|data-link-style|data-link-color)="[^"]*"/i';
    // Suppression des attributs
    $newsletterNettoyee = preg_replace($pattern, '', $manewsletters);
    return $newsletterNettoyee;
}

/* ZeCrusher : MesIcons_MeteoStyle
 * Ma fonction pour la météo DANS le widget.
 * Je pense qu'il est préférable d'avoir les icons du thème et non les icons du site de la météo.
 */

function MesIcons_MeteoStyle($iconCode) {
    // On se base sur les 2 premiers caractères du code icône (ex: 01d -> 01)
    $code = substr($iconCode, 0, 2);
    
    switch ($code) {
        case '01': // Ciel dégagé
            return ['icon' => 'ki-sun', 'color' => 'warning'];
        case '02': // Quelques nuages
        case '03': // Nuages dispersés
            return ['icon' => 'ki-cloud-sun', 'color' => 'primary'];
        case '04': // Nuages brisés / Couvert
            return ['icon' => 'ki-cloud', 'color' => 'secondary'];
        case '09': // Pluie légère
        case '10': // Pluie
            return ['icon' => 'ki-rain', 'color' => 'info'];
        case '11': // Orage
            return ['icon' => 'ki-thunder', 'color' => 'danger'];
        case '13': // Neige
            return ['icon' => 'ki-snow', 'color' => 'light'];
        case '50': // Brouillard
            return ['icon' => 'ki-dots-circle', 'color' => 'info'];
        default:
            return ['icon' => 'ki-abstract-24', 'color' => 'success'];
    }
}



/** ZeCrusher
 * timeAgo 
 *
 * Cette fonction retourne une chaine de caractères qui indique le temps entre deux dates
 * exemple : il y a 2 j (entre la date en cours et la date dans la chaine de caractères).
 * @param string $datetime 
 */


function timeAgo($datetime) {
    $time = strtotime($datetime);
    $diff = time() - $time;
    if ($diff < 60) return "à l’instant";
    elseif ($diff < 3600) return "il y a " . floor($diff / 60) . " min";
    elseif ($diff < 86400) return "il y a " . floor($diff / 3600) . " h";
    elseif ($diff < 604800) return "il y a " . floor($diff / 86400) . " j";
    else return date("d/m/Y", $time);
}

// Fonction pour afficher la différence sous forme lisible

function tempsEcoule($diff) {
    if ($diff->y > 0) {
        return "il y a " . $diff->y . " an" . ($diff->y > 1 ? "s" : "");
    } elseif ($diff->m > 0) {
        return "il y a " . $diff->m . " mois";
    } elseif ($diff->d > 0) {
        return "il y a " . $diff->d . " jour" . ($diff->d > 1 ? "s" : "");
    } elseif ($diff->h > 0) {
        return "il y a " . $diff->h . " heure" . ($diff->h > 1 ? "s" : "");
    } elseif ($diff->i > 0) {
        return "il y a " . $diff->i . " minute" . ($diff->i > 1 ? "s" : "");
    } else {
        return "il y a quelques secondes";
    }
}
 
function formatRelativeDate($dateString) {
    setlocale(LC_TIME, 'fr_FR.UTF-8'); // Assurez-vous que le français est bien pris en charge sur votre serveur
    
    $timestamp = strtotime($dateString);
    $now = time();
    $diff = $now - $timestamp;
    
    if ($diff < 60) {
        return " $diff secondes";
    } elseif ($diff < 3600) {
        return " " . floor($diff / 60) . " min ";
    } elseif ($diff < 86400) {
        return " " . floor($diff / 3600) . " h ";
    } elseif (date('Y-m-d', $timestamp) == date('Y-m-d', strtotime('-1 day'))) {
        return "Hier à " . strftime('%Hh%M', $timestamp);
    } else {
        return strftime('%A %d %B %Y à %Hh%M', $timestamp);
    }
}

// Exemple d'utilisation
// $date = "2024-07-10 15:50:14";
 
function Ajax_tempsEcoule($diff) {
    if ($diff->y > 0) {
        return " " . $diff->y . " an" . ($diff->y > 1 ? "s" : "");
    } elseif ($diff->m > 0) {
        return " " . $diff->m . " mois";
    } elseif ($diff->d > 0) {
        return " " . $diff->d . " jour" . ($diff->d > 1 ? "s" : "");
    } elseif ($diff->h > 0) {
        return " " . $diff->h . " h" . ($diff->h > 1 ? "s" : "");
    } elseif ($diff->i > 0) {
        return " " . $diff->i . " min" . ($diff->i > 1 ? "s" : "");
    } else {
        return " secondes";
    }
}

/*
	A ne plus utiliser pour Odyssée car la version est obsolète.
	Il faut utiliser AvatarData.
*/

function avatar($login)
{
    // Connexion avec db.php 
    $pdo = ConnexionPDO();

    // Requête préparée (sécurisée)
    $stmt = $pdo->prepare("SELECT avatar FROM membre WHERE login = :login");
    $stmt->execute([
        ':login' => $login
    ]);

    $data = $stmt->fetch(PDO::FETCH_ASSOC);

    return $data ? $data['avatar'] : null;
}

function DateComplete_heure($date_sql) 
{
	$tab_date = Date_ConvertSqlTab($date_sql);
	$mktime_brut = mktime($tab_date['heure'],$tab_date['minute'],$tab_date['seconde'],$tab_date['mois'],$tab_date['jour'],$tab_date['annee']);

	return DateJourTxt(date('D', $mktime_brut)).' '.$tab_date['jour'].' '.DateMoisTxt(date('m', $mktime_brut)).' '.$tab_date['annee'].' à '.$tab_date['heure'].':'.$tab_date['minute'].':'.$tab_date['seconde'];
}

function DateJourTxt($jour_brut) {
  if($jour_brut=='Mon') {    		return 'Lundi';
  } elseif($jour_brut=='Tue') {    	return 'Mardi';
  } elseif($jour_brut=='Wed') {	    return 'Mercredi';
  } elseif($jour_brut=='Thu') {	    return 'Jeudi';
  } elseif($jour_brut=='Fri') {	    return 'Vendredi';
  } elseif($jour_brut=='Sat') {	    return 'Samedi';
  } elseif($jour_brut=='Sun') {	    return 'Dimanche';
  };
}

function Date_ConvertSqlTab($date_sql) 
{
	$jour = substr($date_sql, 8, 2);
  	$mois = substr($date_sql, 5, 2);
	$annee = substr($date_sql, 0, 4);
	$heure = substr($date_sql, 11, 2);
	$minute = substr($date_sql, 14, 2);
	$seconde = substr($date_sql, 17, 2);
	$key = array('annee', 'mois', 'jour', 'heure', 'minute', 'seconde');
	$value = array($annee, $mois, $jour, $heure, $minute, $seconde);
	$tab_retour = array_combine($key, $value);
 
	return $tab_retour;
}

function DateMoisTxt($mois_brut) {
  if($mois_brut=='01') {    	return 'Janvier';
  } elseif($mois_brut=='02') {  return 'Février';
  } elseif($mois_brut=='03') {	return 'Mars';
  } elseif($mois_brut=='04') {	return 'Avril';
  } elseif($mois_brut=='05') {  return 'Mai';
  } elseif($mois_brut=='06') {  return 'Juin';
  } elseif($mois_brut=='07') {  return 'Juillet';
  } elseif($mois_brut=='08') {  return 'Août';
  } elseif($mois_brut=='09') {  return 'Septembre';
  } elseif($mois_brut=='10') {  return 'Octobre';
  } elseif($mois_brut=='11') {  return 'Novembre';
  } elseif($mois_brut=='12') {  return 'Décembre';
  };
}



/** ZeCrusher
 * Chiffre une donnée en utilisant l'algorithme AES-256-CBC.
 *
 * Cette fonction génère un vecteur d'initialisation (IV) aléatoire
 * pour chaque chiffrement, puis combine le texte chiffré et l’IV
 * avant de les encoder en base64.
 *
 * @param string $encrypted_data Le texte brut à chiffrer.
 * @param string $key  La clé secrète utilisée pour le chiffrement.
 * @return string      Le texte chiffré encodé en base64.
 */
 
function chiffrer($encrypted_data, $key) {
    $cipher_method = 'aes-256-cbc';

    // Générer un IV (initialisation aléatoire)
    $iv_length = openssl_cipher_iv_length($cipher_method);
    $iv = openssl_random_pseudo_bytes($iv_length);

    // Chiffrer les données
    $chiffre = openssl_encrypt($encrypted_data, $cipher_method, $key, 0, $iv);

    // Combiner le texte chiffré et l'IV, puis encoder en base64
    return base64_encode($chiffre . '::' . $iv);
}

/** ZeCrusher
 * Déchiffre une donnée précédemment chiffrée par `chiffrer()`.
 *
 * Le paramètre $encrypted_data doit contenir le texte chiffré et l’IV,
 * séparés par "::" et encodés en base64.
 *
 * @param string $encrypted_data Le texte chiffré en base64.
 * @param string $key            La clé secrète utilisée pour le déchiffrement.
 * @return string|false          Le texte déchiffré, ou false si échec.
 */

function dechiffrer($encrypted_data, $key) {
    $cipher_method = 'aes-256-cbc';

    // Décoder le texte base64 et séparer le texte chiffré et l'IV
    list($chiffre, $iv) = explode('::', base64_decode($encrypted_data), 2);

    // Déchiffrer les données
    return openssl_decrypt($chiffre, $cipher_method, $key, 0, $iv);
}


/** ZeCrusher
 * Les avatars sauvegardés : 
 *
 * Paramètre id qui est l'id dans la table membre !
 *
 */
function getAvatar($userId) {
    if (!empty($_SESSION['Global_avatarData'][$userId])) {
        return $_SESSION['Global_avatarData'][$userId];
    }
    return 'assets/media/avatars/default.png';
}



/** ZeCrusher
 * denote et chinote : 
 *
 * Le paramètre juste la chaine à chiffrer et déchiffrer
 *
 * @param string $encrypted_data Le texte chiffré en base64.
 * Note : il est plus simple pour le codage de faire une mini fonction de chiffrement qui reprend
 * les fonctions de bases. C'est juste la flemme de taper les sessions[''] ! 
 */
function denote	($texte) 	{	return dechiffrer($texte, 	$_SESSION['encryption_key_odynotes']);}
function chinote($texte) 	{	return chiffrer($texte, 	$_SESSION['encryption_key_odynotes']);	}

function delogin  ($texte) 	{	return dechiffrer($texte, 	$_SESSION['encryption_key_odynotes']);}
function chilogin ($texte) 	{	return chiffrer($texte, 	$_SESSION['encryption_key_odynotes']);	}


function dechiffrer_password($encrypted_data, $key, $iv) {
	
	$decrypted_password=openssl_decrypt(base64_decode($encrypted_data), "AES-128-CBC", $key, 0, base64_decode($iv));

	return $decrypted_password;
}

function afficher_message($auteur, $champ)
{
    $pdo = ConnexionPDO();

    // Nombre de lignes à afficher
    $stmt = $pdo->prepare('SELECT ligne_widget_message FROM menu_extranet WHERE login = :login');
    $stmt->execute([
        ':login' => $_SESSION['login']
    ]);
    $data = $stmt->fetch(PDO::FETCH_ASSOC);

    $nb_ligne = $data['ligne_widget_message'] ?? 4;
    if ($nb_ligne == 0) $nb_ligne = 4;

    $destinataire_hash = hash("sha256", $auteur);

    // Construction dynamique de la requête
    $params = [];
    $sql = '';

    switch ($champ) {

        case "id_destinataire":
            if ($auteur == $_SESSION['monid']) {
                $sql = "SELECT * FROM livre_intra_reponses 
                        WHERE id_destinataire = :id 
                        ORDER BY date_reponse DESC 
                        LIMIT $nb_ligne";
                $params[':id'] = $_SESSION['monid'];
            }
            break;

        case "id_auteur":
            $sql = "SELECT auteur, message, objet, date_reponse, mode, id_auteur, id_destinataire 
                    FROM livre_intra_reponses 
                    WHERE id_auteur = :id AND id_destinataire != 0 
                    ORDER BY date_reponse DESC 
                    LIMIT $nb_ligne";
            $params[':id'] = $_SESSION['monid'];
            break;

        case "destinataire_hash":
            if ($auteur == $_SESSION['login']) {
                $sql = "SELECT auteur, message, objet, date_reponse, mode 
                        FROM livre_intra_reponses 
                        WHERE destinataire_hash = :hash 
                        AND mode = 'Sans Mode' 
                        ORDER BY date_reponse DESC 
                        LIMIT $nb_ligne";
                $params[':hash'] = $_SESSION['login'];
            }
            break;

        case "SUP":
            $sql = "SELECT auteur, message, objet, date_reponse, mode, id_auteur, id_destinataire 
                    FROM livre_intra_reponses 
                    WHERE mode = 'SUP' AND auteur_hash = :hash 
                    ORDER BY date_reponse DESC 
                    LIMIT $nb_ligne";
            $params[':hash'] = hash("sha256", $_SESSION['login']);
            break;

        case "like":
            $sql = "SELECT lir.* 
                    FROM livre_intra_reponses lir 
                    JOIN like_message lm ON lir.id = lm.id_du_message 
                    WHERE lm.login = :login AND lm.likeonoff = '1' 
                    ORDER BY lm.id DESC 
                    LIMIT $nb_ligne";
            $params[':login'] = $_SESSION['login'];
            break;

        case "default":
            $sql = "SELECT * FROM livre_intra_reponses 
                    WHERE id_destinataire = 0 
                    ORDER BY date_reponse DESC 
                    LIMIT $nb_ligne";
            break;

        default:
            $sql = "SELECT auteur, message, objet, date_reponse, mode, correspondance_sujet, id_auteur, id_destinataire 
                    FROM livre_intra_reponses 
                    WHERE correspondance_sujet = 1 AND mode = 'Sans Mode' 
                    ORDER BY date_reponse DESC 
                    LIMIT $nb_ligne";
            break;
    }

    // Exécution
    $stmt = $pdo->prepare($sql);
    $stmt->execute($params);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if ($result) {
        foreach ($result as $row) {

            echo '<tr><td><div class="d-flex align-items-center">';

            $ava = $row['id_auteur'];

            echo '<div class="symbol symbol-50px me-3">';
            echo '<div class="image-input-wrapper w-50px h-50px" style="background-image: url(\'data:image/jpeg;base64,' . $_SESSION['Global_avatarData'][$ava] . '\');
                background-position: center;
                background-repeat: no-repeat;
                background-size: contain;margin-right: 8px;
                border-radius: .75rem;background-size: 100% 100%;"></div>';
            echo '</div>';

            echo '<div class="d-flex justify-content-start flex-column">';
            echo '<a href="https://' . $_SERVER['HTTP_HOST'] . '/odyssee/apps/chat/messages.php" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">' 
                . htmlspecialchars(dechiffrer($row['auteur'], $_SESSION['encryption_key'])) . '</a>';

            $objet = dechiffrer($row['objet'], $_SESSION['encryption_key']);
            echo '<span class="text-gray-600 fw-semibold d-block fs-7">' . substr($objet, 0, 25);
            if (strlen($objet) > 30) echo "...";
            echo '</span></div></div></td>';

            echo '<td class="text-end pe-13"><span class="text-gray-600 fw-bold fs-8">' 
                . DateComplete_heure($row['date_reponse']) . '</span></td>';

            // Actions
            if ($champ == "SUP") {
                echo '<td class="text-end">[...]</td>';
            } elseif ($champ == "like") {
                echo '<td class="text-end">[...]</td>';
            } elseif ($champ == "id_destinataire") {
                echo '<td class="text-end"><a href="https://' . $_SERVER['HTTP_HOST'] . '/odyssee/apps/chat/messages.php?destinataire=' . $row['id_auteur'] . '" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">→</a></td>';
            } else {
                echo '<td class="text-end"><a href="https://' . $_SERVER['HTTP_HOST'] . '/odyssee/apps/chat/messages.php" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">→</a></td>';
            }

            echo '</tr>';
        }
    } else {
        echo '<div class="alert alert-danger">Vous n\'avez aucun message</div>';
    }
}

function compteur_like_message() {
 
    // Connexion avec db.php 
    $pdo = ConnexionPDO();
	
	$messages = $pdo->query("SELECT * FROM livre_intra_reponses ORDER BY date_reponse DESC LIMIT 10")->fetchAll();

	foreach ($messages as $message) {
		// Récupérer le nombre de likes pour ce message
		$stmt = $pdo->prepare("SELECT COUNT(*) as total FROM like_message WHERE id_du_message = ?");
		$stmt->execute([$message['id']]);
		$likeCount = $stmt->fetch(PDO::FETCH_ASSOC)['total'];

		// echo '<div class="message">';
		// echo '<p><strong>' . htmlspecialchars($message['auteur']) . ' :</strong> ' . htmlspecialchars($message['message']) . '</p>';
		// echo '<button id="like-' . $message['id'] . '" onclick="FnLikemark(' . $message['id'] . ', \'utilisateur_test\')"> Like</button>';
		// echo '<span id="like-count-' . $message['id'] . '">' . $likeCount . '</span> likes';
		// echo '</div>';
		return ($likeCount);
	}
 }
 
function compteur_like_login($login) {
 
	if (isset($login)) {

		// Connexion avec db.php 
		$pdo = ConnexionPDO();

		// Compter le nombre total de likes donnés par cet utilisateur
		$sql = "SELECT COUNT(*) as total FROM like_message WHERE login = :login";
		$stmt = $pdo->prepare($sql);
		$stmt->execute(['login' => $login]);
		$count = $stmt->fetch(PDO::FETCH_ASSOC)['total'];

		// Retourner le nombre total de likes donnés par l'utilisateur
		// echo (["likes_given" => $count]);
		echo  $count;
	}
}
 
 
function compter_MessageJ() {
	
	// Connexion à la base de données via db.php 
    $pdo = ConnexionPDO();

	// Requête pour les messages du jour
	$sqlJour = "SELECT COUNT(*) AS total_aujourdhui FROM livre_intra_reponses WHERE DATE(date_reponse) = CURDATE()";
	$stmt = $pdo->query($sqlJour);
	$totalAujourdhui = $stmt->fetch(PDO::FETCH_ASSOC)['total_aujourdhui'];

	return ($totalAujourdhui);
	
}

function compter_MessageS() {


    // Connexion avec db.php 
    $pdo = ConnexionPDO();
	
	// Requête pour les messages de la semaine
	$sqlSemaine = "SELECT COUNT(*) AS total_semaine FROM livre_intra_reponses WHERE WEEK(date_reponse, 1) = WEEK(CURDATE(), 1) AND YEAR(date_reponse) = YEAR(CURDATE())";
	$stmt = $pdo->query($sqlSemaine);
	$totalSemaine = $stmt->fetch(PDO::FETCH_ASSOC)['total_semaine'];

	return ($totalSemaine);
	
}
 
function historique($idmembre, $modification,$login,$rubrique) {
/* Création de l'historique du compte */
	// Connexion à la base de données via PDO
	$pdo = ConnexionPDO();				
	$agentId = $idmembre; // ou autre identifiant utilisateur
	$pageUrl = $_SERVER['REQUEST_URI'];
	$httpMethod = $_SERVER['REQUEST_METHOD'];
	$ipAddress = $_SERVER['REMOTE_ADDR'];
	$userAgent = $_SERVER['HTTP_USER_AGENT'] ?? '';
	$referer = $_SERVER['HTTP_REFERER'] ?? null;
	
	// Préparation et exécution

	$req = $pdo->prepare("INSERT INTO navigation_log (agent_id, login, rubrique, modification, page_url, http_method, ip_address, user_agent, referer) VALUES (:agent_id, :login, :rubrique, :modification, :page_url, :http_method, :ip_address, :user_agent, :referer)");

	$req->execute([':agent_id' => $agentId,':login' => $login,':rubrique' => $rubrique,':modification' => $modification,':page_url' => $pageUrl,':http_method' => $httpMethod,':ip_address' => $ipAddress,':user_agent' => $userAgent,':referer' => $referer]);					

/* Création de l'historique du compte */
	
} 


function alert_box($modele, $titre, $message, $close) 
{
	
/* 
*	Exemple :
*	echo alert_box("bleu", "Alerte de base", "ceci est le message de base sous le titre", $close);
*	
*	Il ne faut surtout pas oublier le echo devant la fonction.
*	
*	Les correspondances : 
*	
*	bleu 		-> bleu (primary)
*	vert 		-> vert (success)
*	violet		-> violet (info)
*	Jaune 		-> Jaune (warning)
*	rouge 		-> rouge (danger)
*
* 	$close est oui/OUI pour avoir une croix et vide pour ne rien avoir.
*
**/
	
	if (($close=="OUI")||($close=="oui")) $close="true"; else $close="false"; 	
	
	if ($modele=="big_one") {
	
	$html='<!-- <div class="rounded border p-10 pb-0 d-flex flex-column flex-center"> -->
            <div class="alert alert-dismissible bg-light-danger d-flex flex-center flex-column py-10 px-10 px-lg-20 mb-10">
                <button type="button" class="position-absolute top-0 end-0 m-2 btn btn-icon btn-icon-danger" data-bs-dismiss="alert">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>                
				</button>

                <i class="ki-duotone ki-information-5 fs-5tx text-danger mb-5"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i><!--end::Icon-->

                <div class="text-center text-gray-900">
                    <h1 class="fw-bold mb-5">'.$titre.'</h1>
                    <div class="separator separator-dashed border-danger opacity-25 mb-5"></div>
                    <div class="mb-9">
                        '.$message.'
                    </div>

                    <div class="d-flex flex-center flex-wrap">
                        <!-- <a href="#" class="btn btn-outline btn-outline-danger btn-active-danger m-2">Cancel</a> -->
                        <a href="'.$close.'" class="btn btn-danger m-2"> OK </a>
                    </div>
                </div>
            </div>
       <!-- </div> -->';
		
	return $html;
	}	
	
    $alertes = [
        // --- la version plus simple --- 
        'bleu' => [
            'classes' => 'alert alert-primary d-flex align-items-center p-5 mb-10',
            'icon'    => 'ki-duotone ki-shield-tick fs-2hx text-primary me-4',
            'title_class' => 'text-primary',
            'dismiss' => $close,
        ],
        'vert' => [
            'classes' => 'alert alert-success d-flex align-items-center p-5 mb-10',
            'icon'    => 'ki-duotone ki-shield-tick fs-2hx text-success me-4',
            'title_class' => 'text-success',
            'dismiss' => $close,
        ],
        'violet' => [
            'classes' => 'alert alert-info d-flex align-items-center p-5 mb-10',
            'icon'    => 'ki-duotone ki-shield-tick fs-2hx text-info me-4',
            'title_class' => 'text-info',
            'dismiss' => $close,
        ],
        'jaune' => [
            'classes' => 'alert alert-warning d-flex align-items-center p-5 mb-10',
            'icon'    => 'ki-duotone ki-shield-tick fs-2hx text-warning me-4',
            'title_class' => 'text-warning',
            'dismiss' => $close,
        ],
        'rouge' => [
            'classes' => 'alert alert-danger d-flex align-items-center p-5 mb-10',
            'icon'    => 'ki-duotone ki-shield-tick fs-2hx text-danger me-4',
            'title_class' => 'text-danger',
            'dismiss' => $close,
        ],

        // --- là, avec un Fond coloré avec texte clair ---
		/*
		defaut_bg		-> bleu (primary)
		ok_bg 			-> vert (success)
		note_bg			-> violet (info)
		attention_bg 	-> Jaune (warning)
		danger_bg 		-> rouge (danger)
		*/
		
        'bleu_bg' => [
            'classes' => 'alert alert-dismissible bg-primary d-flex flex-column flex-sm-row w-100 p-5 mb-10 text-light',
            'icon'    => 'ki-duotone ki-search-list fs-2hx text-light me-4 mb-5 mb-sm-0',
            'title_class' => 'text-light',
            'dismiss' => $close,
        ],
        'rouge_bg' => [
            'classes' => 'alert alert-dismissible bg-danger d-flex flex-column flex-sm-row w-100 p-5 mb-10 text-light',
            'icon'    => 'ki-duotone ki-message-text-2 fs-2hx text-light me-4 mb-5 mb-sm-0',
            'title_class' => 'text-light',
            'dismiss' => $close,
        ],
        'vert_bg' => [
            'classes' => 'alert alert-dismissible bg-success d-flex flex-column flex-sm-row w-100 p-5 mb-10 text-light',
            'icon'    => 'ki-duotone ki-pencil fs-2hx text-light me-4 mb-5 mb-sm-0',
            'title_class' => 'text-light',
            'dismiss' => $close,
        ],
        'violet_bg' => [
            'classes' => 'alert alert-dismissible bg-info d-flex flex-column flex-sm-row w-100 p-5 mb-10 text-light',
            'icon'    => 'ki-duotone ki-notification-bing fs-2hx text-light me-4 mb-5 mb-sm-0',
            'title_class' => 'text-light',
            'dismiss' => $close,
        ],

        // --- Fond clair + bordure ---
		/*
			defaut_light		-> bleu (primary)
			ok_light			-> vert (success)
			info_light			-> violet (info)
			attention_light 	-> Jaune (warning)
			danger_light 		-> rouge (danger)
		*/
		
		
	/*	<div class="alert alert-dismissible bg-light-danger d-flex flex-column flex-sm-row w-100 p-5 mb-10">
                    <!--begin::Icon-->
                    <i class="ki-duotone ki-message-text-2 fs-2hx text-danger me-4 mb-5 mb-sm-0"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>                    <!--end::Icon-->

                    <!--begin::Content-->
                    <div class="d-flex flex-column pe-0 pe-sm-10">
                        <h4 class="fw-semibold">This is an alert</h4>
                        <span>The alert component can be used to highlight certain parts of your page for higher content visibility.</span>
                    </div>
                    <!--end::Content-->

                    <!--begin::Close-->
                    <button type="button" class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto" data-bs-dismiss="alert">
                        <i class="ki-duotone ki-cross fs-1 text-danger"><span class="path1"></span><span class="path2"></span></i>                    </button>
                    <!--end::Close-->
                </div>
		*/
		
		
        'bleu_light' => [
			'classes'      => 'alert alert-dismissible bg-light-primary d-flex flex-column flex-sm-row w-100 p-5 mb-10',
			'icon'         => 'ki-duotone ki-search-list fs-2hx text-primary me-4 mb-5 mb-sm-0',
			'title_class'  => 'fw-semibold text-primary',
            'dismiss' => $close,
        ],
        'rouge_light' => [
			'classes'      => 'alert alert-dismissible bg-light-danger d-flex flex-column flex-sm-row w-100 p-5 mb-10',
			'icon'         => 'ki-duotone ki-message-text-2 fs-2hx text-danger me-4 mb-5 mb-sm-0',
			'title_class'  => 'fw-semibold text-danger',
            'dismiss' => $close,
        ],
        'vert_light' => [
			'classes'      => 'alert alert-dismissible bg-light-success d-flex flex-column flex-sm-row w-100 p-5 mb-10',
			'icon'         => 'ki-duotone ki-pencil fs-2hx text-success me-4 mb-5 mb-sm-0',
			'title_class'  => 'fw-semibold text-success',
            'dismiss' => $close,
        ],
        'violet_light' => [
		   'classes'      => 'alert alert-dismissible bg-light-info d-flex flex-column flex-sm-row w-100 p-5 mb-10',
			'icon'         => 'ki-duotone ki-notification-bing fs-2hx text-info me-4 mb-5 mb-sm-0',
			'title_class'  => 'fw-semibold text-info',
            'dismiss' => $close,
        ],
		
		
        // --- Fond clair + bordure ---		
		'bleu_box' => [
            'classes' => 'alert alert-dismissible bg-light-primary border border-primary d-flex flex-column flex-sm-row w-100 p-5 mb-10',
            'icon'    => 'ki-duotone ki-search-list fs-2hx text-primary me-4 mb-5 mb-sm-0',
            'title_class' => 'text-primary',
			'dismiss' => $close,
        ],
        'rouge_box' => [
            'classes' => 'alert alert-dismissible bg-light-danger border border-danger border-dashed d-flex flex-column flex-sm-row w-100 p-5 mb-10',
            'icon'    => 'ki-duotone ki-message-text-2 fs-2hx text-danger me-4 mb-5 mb-sm-0',
            'title_class' => 'text-danger',
			'dismiss' => $close,
        ],
        'vert_box' => [
            'classes' => 'alert alert-dismissible bg-light-success border border-success border-3 d-flex flex-column flex-sm-row w-100 p-5 mb-10',
            'icon'    => 'ki-duotone ki-pencil fs-2hx text-success me-4 mb-5 mb-sm-0',
            'title_class' => 'text-success',
			'dismiss' => $close,
        ],
        'violet_box' => [
            'classes' => 'alert alert-dismissible bg-light-info border border-info border-3 border-dashed d-flex flex-column flex-sm-row w-100 p-5 mb-10',
            'icon'    => 'ki-duotone ki-notification-bing fs-2hx text-info me-4 mb-5 mb-sm-0',
            'title_class' => 'text-info',
			'dismiss' => $close,
        ] 
    ];



	
    if (!isset($alertes[$modele])) {
        $modele = 'bleu'; // fallback
    }

    $cfg = $alertes[$modele];

    $html = '<div class="'.$cfg['classes'].'">';
    $html .= '<i class="'.$cfg['icon'].'"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>';
    $html .= '<div class="d-flex flex-column pe-0 pe-sm-10">';
    $html .= '<h4 class="mb-1 '.$cfg['title_class'].'">'.htmlspecialchars($titre).'</h4>';
    $html .= '<span>'.htmlspecialchars($message).'</span>';
    $html .= '</div>';

    if ($cfg['dismiss']) {
        $html .= '<button type="button" class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto" data-bs-dismiss="alert">';
        $html .= '<i class="ki-duotone ki-cross fs-1 '.$cfg['title_class'].'"><span class="path1"></span><span class="path2"></span></i>';
        $html .= '</button>';
    }

    $html .= '</div>';
	
    return $html;

}

function tableau_historique($sql_requete) 
{

?>
			<div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
				<!--begin::Products-->
				<div class="card card-flush">
					<!--begin::Card header-->
					<div class="card-header align-items-center py-5 gap-2 gap-md-5">
						<!--begin::Card title-->
						<div class="card-title">
							<!--begin::Search-->
							<div class="d-flex align-items-center position-relative my-1">
								<i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4"><span class="path1"></span><span class="path2"></span></i>
											 
											 
					 
								<input type="text" liste-historique-admin="search" class="form-control form-control-solid w-250px ps-12" placeholder="Dans l'historique.." />
							</div>
						<!--end::Search-->
						</div>
						<!--end::Card title-->
						
						<!--begin::Card toolbar-->
						<div class="card-toolbar flex-row-fluid justify-content-end gap-5">
							<div class="w-100 mw-150px">
							<!--begin::Select2-->
								<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Status" liste-historique-filter="status">
									<option></option>
									<option value="Tous">Tous</option>
									<option value="Actif">Rôle</option>
									<option value="Non">Mot de passe</option>
								</select>
							<!--end::Select2-->
							</div>

						<!--end::Add product-->
						</div>
						<!--end::Card toolbar-->
					</div>
					<!--end::Card header-->
														<!--begin::Card body-->
					<div class="card-body pt-0">
																	<!--begin::Table-->
						<table class="table align-middle table-row-dashed fs-6 gy-5" id="liste_historique">
							<thead>
								<tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
									<th class="text-start min-w-50px">ID</th>
									<th class="text-start min-w-200px">Modifications</th>
									<th class="text-start min-w-100px">Date</th>
									<th class="text-end min-w-70px">Actions</th>
								</tr>
							</thead>
																				
							<tbody class="fw-semibold text-gray-600">
																		
							<?php
								$pdo = ConnexionPDO(); // fonction de connexion, à voir dans ce fichier 
								$stmt = $pdo->query($sql_requete);
								$navigation = $stmt->fetchAll(PDO::FETCH_ASSOC);
																				
								foreach ($navigation as $navigation): 

							?>
																				
																		
							<tr>
								<td class="">
									<div class="d-flex">
										<?php echo htmlspecialchars($navigation['id']); ?>
									</div>
								</td>
								<td class="">
									<div class="d-flex">
										<!--begin::Thumbnail-->
									<!-- <a href="/saul-html-pro/apps/ecommerce/catalog/edit-category.html" class="symbol symbol-50px">
										<span class="symbol-label symbol symbol-50px me-3"><img  src="< ?php echo 'https://'.$_SERVER['HTTP_HOST'].'/odyssee/assets/media/avatars/'.$membre['gravatar']; ?>"  alt="img"/></span>
									</a> -->
									<!--end::Thumbnail-->
										<div class="ms-5">
											<!--begin::Title-->
											<a href="edit-membre.php?<?php echo "idmembre=".$navigation['id']; ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold mb-1" data-kt-ecommerce-category-filter="category_name"><?php echo $navigation['modification']; ?></a>
											<!--end::Title-->
											<!--begin::Description-->
											<div class="text-muted fs-7 fw-bold">Ip de la page  : <?php echo $navigation['ip_address']; ?></div>
											<!--end::Description-->
										</div>
									</div>
								</td>
								<td class="">
									<div class="d-flex">
									<!--begin::Thumbnail-->
										<!--end::Thumbnail-->
										<div class="ms-5">
										<!--begin::Description-->
											<div class="text-muted fs-7 fw-bold"><?php echo htmlspecialchars($navigation['visited_at']); ?></div>
										<!--end::Description-->
										</div>
									</div>
								</td>
													
								<td class="text-end">
									<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
										<i class="ki-duotone ki-down fs-5 ms-1"></i>
									</a>
									<!--begin::Menu-->
									<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
										<div class="menu-item px-3">
											<a href="#" class="menu-link px-3" liste-historique-admin="delete_row">Supprimer</a>
										</div> 
									<!--end::Menu item-->
									</div>
								<!--end::Menu-->
									</td>
								</tr>
										
								<?php endforeach; ?>	
							</tbody>
						</table>
					<!--end::Table-->
	
					</div>
				<!--end::Card body-->
												
				</div>
			<!--end::Products-->
			</div>
	

					
<?php

} // fin de tableau_historique


function envoyer_par_email($to, $subject, $messageHTML) {
    $mail = new PHPMailer(true);

    try {
        // Configuration Serveur

        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com'; 
        $mail->SMTPAuth   = true;
        $mail->Username   = 'webmaster@splte-martigues.fr';
        $mail->Password   = 'dadu qzag jamr msmc';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;
		$mail->CharSet    = 'UTF-8';

            // Destinataires
            $mail->setFrom('webmaster@splte-martigues.fr', 'Odyssée');
            $mail->addAddress($_SESSION['email']);  

            // Contenu
            $mail->isHTML(true);
			// $mail->SMTPDebug = 2;
            $mail->Subject = "Odyssée - Détails de la tâche : " . $task['task_title'];

        // Contenu
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = $messageHTML;

        $mail->send();
        return true;
    } catch (Exception $e) {
        // En cas d'erreur, on peut logguer l'erreur ou retourner le message
        error_log("Erreur Mail : " . $mail->ErrorInfo);
        return false;
    }
}
 
?>