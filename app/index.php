<?php
  define('APP_NAME','PokiPoki');
  define('APP_VERSION','1.0');
  date_default_timezone_set('Europe/Paris')
?>
<html>
<head>
  <meta charset="utf-8">
  <link href="css/fontello.css" rel="stylesheet">
  <link href="css/reset.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
</head>
<body>
  <div class="window">
    <header>
    <div class="titleBar"><i class="icon-right-open"></i> <?php echo APP_NAME; ?> v<?php echo APP_VERSION; ?></div>
    <ul class="toolbar">
      <li onclick="pokipoki.maximize();"><i class="icon-resize-full"></i></li>
      <li onclick="pokipoki.minimize();"><i class="icon-resize-small"></i></li>
      <li onclick="pokipoki.close();"><i class="icon-cancel"></i></li>
    </ul>
    <div class="clear"></div>
  </header>
    <div class="content">
      <h1><i class="icon-megaphone"></i>Bienvenue sur <?php echo APP_NAME; ?></h1>
      <p>Le conteneur bureautique PHP multiplateforme</p>
      <p><span class="strong">Version de PHP :</span> <?php echo phpversion(); ?></p>
      <p><span class="strong">Serveur HTTP :</span> <?php echo $_SERVER['SERVER_SOFTWARE']; ?></p>
    </div>
    <ul class="menu">
      <li><i class="icon-home"></i> Accueil</li>
      <li><i class="icon-newspaper"></i> Documentation</li>
      <li><i class="icon-help-circled"></i> A propos</li>
    </ul>
    <div class="clear"></div>
    <div class="javascriptExamples">
      <h1>Exemple de fonctions Javascript/Bureau</h1>
      <ul>
        <li onclick="pokipoki.close();">close();</li>
        <li onclick="$('.content').html(pokipoki.execute('ipconfig'));">execute('ipconfig') : <small>Execute la commande ipconfig et retourne le résultat</small></li>
        <li onclick="pokipoki.notify('Hello world');">notify('Hello world'); <small>Envois une notification bureautique avec le texte 'Hello world'</small></li>
        <li onclick="pokipoki.moveWindow(10,10);">moveWindow(10,10); <small>Déplace la fenêtre en x:10px,y:10px</small></li>
        <li onclick="$('.content').html(pokipoki.getInfo('os'));">getInfo('os'); <small>Récupère l'information du programme "os"</small></li>
        <li onclick="pokipoki.restore();">restore();<small>Restyore la fenetre en dimension normale (à tester après avoir maximisé la fenetre)</small></li>
        <li onclick="pokipoki.registry('HKEY_CURRENT_USER\\Software\\Microsoft\\Windows\\CurrentVersion\\Run','test','hello world');">registry (ecriture) <small>Ajoute une clé 'test' content 'hello world' dans le registre HKEY_CURRENT_USER\\Software\\Microsoft\\Windows\\CurrentVersion\\Run</small></li>
        <li onclick="$('.content').html(pokipoki.registry('HKEY_CURRENT_USER\\Software\\Microsoft\\Windows\\CurrentVersion\\Run','test'));">registry (lecture) <small>Retourne le contenu de la clé de registre test dans HKEY_CURRENT_USER\\Software\\Microsoft\\Windows\\CurrentVersion\\Run</small></li>
      </ul>
    </div>
    <footer>
      <?php echo APP_NAME; ?> by <a href="http://blog.idleman.fr">Idleman</a> - <i class="icon-cc"></i><i class="icon-cc-by"></i><i class="icon-cc-nc"></i><i class="icon-cc-sa"></i><?php echo date('Y').'-'.date('Y',strtotime('+1 year')); ?>
    </footer>
  </div>
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script>


    $('header').mousedown(function(){
      pokipoki.dragStart();
      $(document).mouseup(function(){
        pokipoki.dragStop();
      });
    });
    
    $(document).mousemove(function(event){
      pokipoki.dragMove(event.pageX,event.pageY);
    });
  </script>
</body>
</html>