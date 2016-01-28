
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Tableau PHP</title>

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="css/style.css" media="screen" title="no title" charset="utf-8">

  <link href="https://cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css">

  <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
  <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

</head>
<body>

  <table id="myTable" class="table table-striped">
    <thead><tr><th>Jeux Vidéos</thead></tr></th>

    <?php

    // Tableau

    $jeuxVideos = array('<a href = "http://eu.battle.net/wow/fr/">World of warcraft</a> ', '<a href="https://warthunder.com/fr">War Thunder</a> ', '<a href="http://www.rockstargames.com/grandtheftauto/">Grand Theft Auto</a> ', '<a href="http://www.jeuxvideo.com/jeux/pc/00028037-the-elder-scrolls-v-skyrim.htm">Skyrim</a> ', '<a href="http://www.smitegame.com/">SMITE</a> ', '<a href="http://southpark.cc.com/games/stick-of-truth">South Park: the stick of the truth</a> ', '<a href="http://buy.thewitcher.com/?lang=fr&country=FR">The Witcher</a> ', '<a href="http://eu.battle.net/d3/fr/">Diablo 3</a> ', '<a href="https://www.easports.com/fr/fifa">FIFA</a> ', '<a href="http://www.zelda.com/universe/?ref=https://www.google.fr/">Zelda</a> ', '<a href="http://www.metalgearsolid.be/">Metal Gear Solid</a>', '<a href="http://www.battlefield.com/fr_FR/">Battlefield</a>', '<a href="https://www.ubisoft.com/fr-FR/game/splinter-cell-blacklist">Splinter Cell</a>', '<a href="http://rocketleague.psyonix.com/">Rocket League</a>', '<a href="http://www.tombraider.com/landing/">Tomb Raider</a>', '<a href="http://www.unchartedthegame.com/en-us/">Uncharted</a>', '<a href="http://www.teamfortress.com/">Team Fortress 2</a>', '<a href="http://masseffectuniverse.fr/">Mass Effect</a>', '<a href="https://www.halowaypoint.com/fr-fr">Halo</a>', '<a href="http://www.jeuxvideo.com/jeux/playstation-3-ps3/00017189-prince-of-persia.htm">Prince of Persia</a>', '<a href="http://rainbow6.ubi.com/siege/fr-fr/home/">Rainbow Six</a>', '<a href="https://www.2kgames.com/bioshock/">bioshock</a>', '<a href="http://www.jeuxvideo.com/jeux/pc/00040060-the-walking-dead-saison-1.htm">The Walking Dead</a>', '<a href="https://www.ubisoft.com/fr-FR/game/rayman-legends/">Rayman</a>', '<a href="https://www.fallout4.com/">Fallout</a>', '<a href="https://godofwar.playstation.com/">God of war</a>', '<a href="https://fr.aion.gameforge.com/website/">Aion</a>', '<a href="https://www.residentevil.net/en/">Resident Evil</a>', '<a href="http://tetris.com/">Tetris</a>', '<a href="https://www.nintendo.fr/index.html">Mario</a>', '<a href="http://crashland.elynx.fr/">Crash Bandicoot</a>', '<a href="http://www.nintendo64ever.com/accueil.html">Goldeneye</a>', '<a href="http://www.gran-turismo.com/fr/">Gran Turismo</a>', '<a href="http://www.ageofempires.com/">Age of empire</a>', '<a href="http://littlebigplanet.playstation.com/fr">Little Big Planet</a>', '<a href="http://suckerpunch.playstation.com/">Infamous</a>');

    // fonction

    function game($jeuxVideos) {
      echo "<tr><td>". $jeuxVideos . "</td></tr>";
    }

    // Boucle

    for ($i=0; $i < count($jeuxVideos); $i++) {
      game($jeuxVideos[$i]);

    }

    ?>



    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>


    <script src="https://cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">

    $(document).ready(function() {
      $('#myTable').DataTable();

    });

    </script>
  </table>
</body>
</html>
