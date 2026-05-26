<!DOCTYPE html>
<html lang="en" >

<?php
	
/*  ********************************************************************************************** */
/*  ***************************************  2  ************************************************** */	
/*  ********************************************************************************************** */

	$base = mysqli_connect('localhost', 'ot-martigues', 'Ftp699M','ot-martigues');	
	
/*  ********************************************************************************************** */

	$sql = 'SELECT * FROM meteo';
	$req = mysqli_query($base,$sql) or die(mysqli_error($base)." * From meteo=".$sql);
	$data = mysqli_fetch_array($req);
	
	$date_sauvegarder_sql=$data['date'];
	$today = date("Y-m-d"); 
	
	if ($date_sauvegarder_sql < $today) {
	
		$url = "https://api.openweathermap.org/data/2.5/forecast?&lat=43.4&lon=5.05&appid=bed9f800d6666c45006de21e37fb07de&units=metric&lang=fr&q=Martigues,fr";
		$meteo_data_ok = json_decode(file_get_contents($url),true);
		$meteo_data = file_get_contents($url);
		$sql="UPDATE meteo SET id = '1', date = '".$today."', meteo_json='".$meteo_data."'";
		$req = mysqli_query($base,$sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysqli_error());
		
	} 
	else {
			$meteo_data_ok=json_decode($data['meteo_json'],true);
	}
	$mois = array('','Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Août','Septembre','Octobre','Novembre','Décembre');
	echo '<script type="text/javascript">console.log("----------------------- Les Variables ----------------------------");</script>';
	
 
	// Connexion $base 
	$sql = "SELECT * FROM odyslider WHERE slider_actif = 'OUI' AND service = 'Ecran 2' ORDER BY id ASC";
	$req = mysqli_query($base, $sql) or die(mysqli_error($base));

	$slides = [];
	while ($row = mysqli_fetch_assoc($req)) {
		$slides[] = $row;
	}
	$totalSlides = count($slides);
?>



<head>
  <meta charset="UTF-8">

    <meta name="apple-mobile-web-app-title" content="CodePen">


  <title>Full-screen slider</title>

 <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat|Oswald'>
  

<style>
/* --- 1. RESET & BASES --- */
* {
  box-sizing: border-box;
}

body {
  overflow: hidden;
  width: 100%;
  height: 100%;
  padding: 0;
  margin: 0;
  font-family: 'Montserrat', sans-serif;
  background-color: #000; /* Fond noir par défaut pour les vidéos/images */
}

/* --- 2. NAVIGATION (LOGO) --- */
.navigation {
	position: absolute;
	width: 100%;
	height: 100px;
	padding: 0 100px;
	margin-top: 80px;  
	display: flex;
	align-items: center;
	justify-content: center; /* Centré pour les écrans d'accueil */
	z-index: 10;
}

.navigation-center img {
  max-height: 60px;
}

/* --- 3. CONTENEUR GLOBAL --- */
.css-slider-wrapper {
  display: block;
  background: #000;
  overflow: hidden;
  position: absolute;
  left: 0; right: 0; top: 0; bottom: 0;
}

/* --- 4. STYLE DES SLIDES --- */
.slider {
  width: 100%;
  height: 100%;
  position: absolute;
  left: 0;
  top: 0;
  display: flex;
  justify-content: flex-start;
  align-items: center;
  transition: transform 1600ms cubic-bezier(0.77, 0, 0.175, 1);
  z-index: 0;
}

/* Arrière-plan (Image ou Vidéo) */
.slider > img, 
.slider > video {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover; /* Remplit l'écran sans déformer */
  z-index: -1;
  opacity: 0; /* Caché par défaut pour l'animation */
  transition: transform 1200ms, opacity 1200ms;
  transform: scale(1.1);
}

/* Voile sombre pour la lisibilité du texte */
.slider::after {
  content: '';
  position: absolute;
  top: 0; left: 0; right: 0; bottom: 0;
  background: rgba(0, 0, 0, 0.4); 
  z-index: 0;
}

/* --- 5. CONTENU TEXTUEL --- */
.slider-content {
  position: relative;
  z-index: 2;
  width: 100%;
  max-width: 900px;
  padding-left: 100px;
}

.slider h4 {
  font-size: 70px;
  font-family: "Oswald", sans-serif;
  color: rgba(255, 255, 255, 0.7);
  font-weight: bold;
  text-transform: uppercase;
  margin-bottom: 10px;
  opacity: 0;
  transform: translateX(100px);
  transition: all 800ms ease;
  transition-delay: 1s;
}

.slider h2 {
  color: #fff;
  font-size: 30px;
  font-weight: 900;
  line-height: 1.2;
  margin-top: 0;
  opacity: 0;
  transform: translateX(100px);
  transition: all 800ms ease;
  transition-delay: 1.2s;
}

/* Bouton / Badge de période */
.buy-now-btn {
  background-color: #ea2e49;
  min-width: 220px;
  height: 70px;
  border-radius: 30px;
  border: none;
  font-family: Montserrat;
  font-size: 36px;
  color: #fff;
  padding: 0 30px;
  cursor: pointer;
  opacity: 0;
  transform: translateY(50px);
  transition: all 800ms ease;
  transition-delay: 1.5s;
}


/* --- 6. PAGINATION & COMPTEUR --- */
.slider-pagination {
  position: absolute;
  bottom: 30px;
  left: 100px;
  z-index: 1000;
  display: flex;
  align-items: center;
}

.slider-pagination label {
  width: 10px;
  height: 10px;
  border-radius: 50%;
  background: rgba(255, 255, 255, 0.5);
  margin: 0 8px;
  cursor: pointer;
  transition: all 0.3s;
}

.number-pagination {
  position: absolute;
  bottom: 30px;
  right: 100px;
  font-family: "Oswald";
  font-weight: bold;
  z-index: 1000;
}

.number-pagination span {
  font-size: 30px;
  color: #ea2e49;
  letter-spacing: 4px;
}

.number-pagination span:after {
  content: "/<?php echo $totalSlides; ?>"; /* Dynamique */
  font-size: 16px;
  color: #fff;
}

/* --- 7. LOGIQUE DYNAMIQUE PHP --- */
<?php foreach ($slides as $index => $slide): 
    $num = $index + 1;
    $posX = $index * 100;
?>
/* Position de la slide */
.slide-<?php echo $num; ?> { 
    left: <?php echo $posX; ?>%; 
}

/* État coché : Déplacement du slider */
.slide-radio<?php echo $num; ?>:checked ~ .slider {
    transform: translateX(-<?php echo $posX; ?>%);
}

/* État coché : Style de la puce pagination */
.slide-radio<?php echo $num; ?>:checked ~ .slider-pagination .page<?php echo $num; ?> {
    width: 16px;
    height: 16px;
    border: 2px solid #ea2e49;
    background: transparent;
}

/* État coché : Apparition des éléments de la slide */
.slide-radio<?php echo $num; ?>:checked ~ .slide-<?php echo $num; ?> img,
.slide-radio<?php echo $num; ?>:checked ~ .slide-<?php echo $num; ?> video,
.slide-radio<?php echo $num; ?>:checked ~ .slide-<?php echo $num; ?> h2,
.slide-radio<?php echo $num; ?>:checked ~ .slide-<?php echo $num; ?> h4,
.slide-radio<?php echo $num; ?>:checked ~ .slide-<?php echo $num; ?> .buy-now-btn {
    opacity: 1;
    transform: translate(0,0) scale(1);
}
<?php endforeach; ?>

/* --- 8. RESPONSIVE --- */
@media only screen and (max-width: 768px) {
  .slider-content { padding-left: 5%; padding-right: 5%; }
  .slider h2 { font-size: 30px; }
  .navigation { padding: 0 5%; }
  .slider-pagination, .number-pagination { left: 5%; right: 5%; }
}

/* Style de la barre de progression */
.progress-bar {
    position: absolute;
    bottom: 0;
    left: 0;
    height: 16px;      /* Épaisseur de la barre */
    width: 100%;      /* Départ pleine largeur */
    background-color: #ea2e49; /* Même couleur que ton bouton */
    z-index: 2000;    /* Par-dessus tout */
    transform-origin: left; /* Réduction vers la gauche */
    transform: scaleX(0);   /* Cachée par défaut */
}

/* Animation déclenchée quand la slide est active */
<?php foreach ($slides as $index => $slide): ?>
.slide-radio<?php echo $index + 1; ?>:checked ~ .slide-<?php echo $index + 1; ?> .progress-bar {
    animation: progress-animation 10s linear forwards; /* 6s doit correspondre à ton TIMEOUT JS */
}
<?php endforeach; ?>

@keyframes progress-animation {
    0% {
        transform: scaleX(1); /* 100% de largeur */
    }
    100% {
        transform: scaleX(0); /* 0% de largeur */
    }
}

</style>



  <script>
  window.console = window.console || function(t) {};
</script>

  
  
</head>


<body translate="no">
<div class="navigation">
 <img style="height: 250px !important;" src="https://extranet.martigues-tourisme.com/desire/fichiers/communs/slider/logo/logo-couleur.png" alt="">
  
    <?php 
		// foreach ($slides as $index => $slide): 
			// if (!empty($slide['logo'])) {  
				// echo '<div class="navigation-center">';
					// echo '<img style="height: 250px !important;" src="https://extranet.martigues-tourisme.com/desire/fichiers/communs/slider/logo/'.$slide['logo'].'" alt="">';
				// echo '</div>';
			// }	
		// endforeach; 
	?>
</div>

<div class="css-slider-wrapper">
  
  <?php foreach ($slides as $index => $slide): ?>
    <input type="radio" name="slider" class="slide-radio<?php echo $index + 1; ?>" 
           <?php echo ($index === 0) ? 'checked' : ''; ?> id="slider_<?php echo $index + 1; ?>">
  <?php endforeach; ?>

  <div class="slider-pagination">
    <?php foreach ($slides as $index => $slide): ?>
      <label for="slider_<?php echo $index + 1; ?>" class="page<?php echo $index + 1; ?>"></label>
    <?php endforeach; ?>
  </div>

  <?php foreach ($slides as $index => $slide): ?>
  <div class="slider slide-<?php echo $index + 1; ?>">
    
	<div class="progress-bar"></div>
	
    <?php if (strpos($slide['photo'], '.mp4') !== false): ?>
        <video autoplay muted loop style="width:100%; height:100%; object-fit: cover;">
            <source src="../uploads/<?php echo $slide['photo']; ?>" type="video/mp4">
        </video>
    <?php else: ?>
        <img src="../uploads/<?php echo $slide['photo']; ?>" alt="">
    <?php endif; ?>

    <div class="slider-content">
      <h4><?php echo htmlspecialchars($slide['slider_title']); ?></h4>
      <h2><?php echo $slide['note']; // On ne protège pas avec htmlspecialchars si c'est du HTML stocké ?></h2>
      
      <?php if (!empty($slide['periode'])): ?>
        <button type="button" class="buy-now-btn"><?php echo htmlspecialchars($slide['periode']); ?></button>
      <?php endif; ?>
    </div>

    <div class="number-pagination">
      <span><?php echo $index + 1; ?></span>
    </div>
  </div>
  <?php endforeach; ?>

</div>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script>
    // Ton script JS reste identique, il s'adaptera automatiquement 
    // au nombre d'inputs générés.
    var TIMEOUT = 10000;
    var interval = setInterval(handleNext, TIMEOUT);

    function handleNext() {
        var $radios = $('input[name="slider"]');
        var $activeRadio = $('input[name="slider"]:checked');
        var currentIndex = $radios.index($activeRadio);
        var radiosLength = $radios.length;

        if (currentIndex >= radiosLength - 1) {
            $radios.first().prop('checked', true).click();
        } else {
            $activeRadio.next('input[name="slider"]').prop('checked', true).click();
        }
    }

    $('.slider').hover(function() { clearInterval(interval); }, function() {
        interval = setInterval(handleNext, TIMEOUT);
    });
</script>
</body>
</html>
