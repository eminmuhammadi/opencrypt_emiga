<?php ini_set("display_errors",0); 
$url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
<!doctype html>
<html hreflang="az" lang="az">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Asanlıqla istənilən yazını şifrələ və deşifrələ | OpenCrypt</title>
    <link rel="canonical" href="<?php echo $url ;?>" />
    <meta name="description" content="OpenCrypt-dən istifadə edərək sən istənilən növ yazıları şifrələyə və deşifrləyə bilərsən">
    <meta name="keywords" content="OpenCrypt , opencrypt , opencrypt decrpyt , opencrypt encrypt">
    <link rel="apple-touch-icon" sizes="57x57" href="/app/fav/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/app/fav/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/app/fav/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/app/fav/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/app/fav/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/app/fav/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/app/fav/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/app/fav/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/app/fav/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/app/fav/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/app/fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/app/fav/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/app/fav/favicon-16x16.png">
    <link rel="manifest" href="/app/fav/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/app/fav/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    
    <meta property="og:locale" content="AZ">
    <meta property="og:locale:alternate" content="TR" />
    <meta property="og:type" content="website">
    <meta property="og:title" content="Asanlıqla istənilən yazını şifrələ və deşifrələ | OpenCrypt">
    <meta property="og:url" content="<?php echo $url ;?>">
    <meta property="og:site_name" content="OpenCrypt">
    <meta property="og:image" content="/app/fav/android-icon-192x192.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:description" content="OpenCrypt-dən istifadə edərək sən istənilən növ yazıları şifrələyə və deşifrləyə bilərsən">
    <meta name="twitter:title" content="Asanlıqla istənilən yazını şifrələ və deşifrələ | OpenCrypt">
    <meta name="twitter:image" content="/app/fav/android-icon-192x192.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style type="text/css">
    :root{--input-padding-x:.75rem;--input-padding-y:.75rem}body,html{height:100%}body{display:-ms-flexbox;display:-webkit-box;display:flex;-ms-flex-align:center;-ms-flex-pack:center;-webkit-box-align:center;align-items:center;-webkit-box-pack:center;justify-content:center;padding-top:40px;padding-bottom:40px;background-color:#f5f5f5}.form-signin{width:100%;max-width:420px;padding:15px;margin:0 auto}.form-label-group{position:relative;margin-bottom:1rem}.form-label-group>input,.form-label-group>label{padding:var(--input-padding-y) var(--input-padding-x)}.form-label-group>label{position:absolute;top:0;left:0;display:block;width:100%;margin-bottom:0;line-height:1.5;color:#495057;border:1px solid transparent;border-radius:.25rem;transition:all .1s ease-in-out}.form-label-group input::-webkit-input-placeholder{color:transparent}.form-label-group input:-ms-input-placeholder{color:transparent}.form-label-group input::-ms-input-placeholder{color:transparent}.form-label-group input::-moz-placeholder{color:transparent}.form-label-group input::placeholder{color:transparent}.form-label-group input:not(:placeholder-shown){padding-top:calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));padding-bottom:calc(var(--input-padding-y)/ 3)}.form-label-group input:not(:placeholder-shown)~label{padding-top:calc(var(--input-padding-y)/ 3);padding-bottom:calc(var(--input-padding-y)/ 3);font-size:12px;color:#777}   
    </style>
  </head>
  <body onload="error_log()">
  <?php
  if(!empty( 

  ($_GET['type'])     && 
  ($_GET['algo'])     && 
  ($_GET['text'])     && 
  ($_GET['pkey'])     &&
  ($_GET['skey'])     &&
  ($_GET['route'])  
    ))  
  {

  if(!is_string($_GET['type'])){

        echo"<script type=\"text/javascript\"> 
        function error_log() {  
        alert(\"Bunu edə bilməzsən \");}</script>"; 
  require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/app/az/calculator.php'); 
  }
  else if (!is_string($_GET['algo'])){

        echo"<script type=\"text/javascript\"> 
        function error_log() {  
        alert(\"Bunu edə bilməzsən \");}</script>"; 
  require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/app/az/calculator.php');

  }
  else if (!is_string($_GET['text'])){
        echo"<script type=\"text/javascript\"> 
        function error_log() {  
        alert(\"Bunu edə bilməzsən \");}</script>"; 
  require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/app/az/calculator.php'); 
  }
  else if (!is_string($_GET['pkey'])){ 
        echo"<script type=\"text/javascript\"> 
        function error_log() {  
        alert(\"Bunu edə bilməzsən\");}</script>"; 
  require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/app/az/calculator.php'); 

   }
  else if (!is_string($_GET['skey'])){
          echo"<script type=\"text/javascript\"> 
        function error_log() {  
        alert(\"Bunu edə bilməzsən \");}</script>"; 
  require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/app/az/calculator.php'); 
  }
  else if (!is_string($_GET['route'])){
            echo"<script type=\"text/javascript\"> 
        function error_log() {  
        alert(\"Bunu edə bilməzsən \");}</script>"; 
  require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/app/az/calculator.php'); 
  }
  else {require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/app/az/result.php');}
  }
  else
  { 

     require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/app/az/calculator.php');

     }
  ?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
