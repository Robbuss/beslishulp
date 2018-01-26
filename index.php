<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jsPlumb-2.2.8-min.js"></script>
    <script src="js/plumbing.js"></script>    
    
    <title>De Thuisbasis Beslishulp</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <img class="logo" src="img/logo.png"/>
      </div>
    </nav>


  </head>

<body>  
<div class="sidebar left" id="sidebar">
<ul>
<li>Crisisdienst</li>
<li>SAVE/Veilig Thuis</li>
<li>Politie</li>
<li>JGZ</li>
<li>Sociaal Team</li>
<li>Raad voor de Kinderbescherming</li>
<li>Ferm Werk</li>
<li>Huisarts</li>
</ul>

</div>
<div class="main right" id="flowchart">

    <div class="row">
      <div data-toggle="modal" data-target="#aanmelding-pop" id="aanmelding" class="width padding bg auto">
        <a href="#">Aanmelding</a>
      </div>
    </div>
      
    <div class="row">
      <div data-toggle="modal" data-target="#verwijzing-pop" id="verwijzing" class="width padding bg right" >
        <a  href="#">Verwijzing buiten de jeugdwet</a>
      </div>
    </div>  
    
    <div class="row">
      <div data-toggle="modal" data-target="#beslissing-pop" class="width decision alt auto">
        <img id="decision1" src="img/decision.png">
      </div>
    </div>
    
    <div class="row">
      <div data-toggle="modal" data-target="#eenmaligadvies-pop" id="eenmalig-advies" class="width padding bg right">
        <a href="#">Eenmalig advies</a>
      </div>
    </div>
   
   <div class="row">
      <div  data-toggle="modal" data-target="#verheldering-pop" id="vraagverheldering" class="width padding bg auto">
        <a href="#">Vraagverheldering</a>
      </div>
   </div>   

   <div class="row">      
      <div data-toggle="modal" data-target="#beslissing-pop" class="width decision auto">
        <img id="decision2" src="img/decision.png">
      </div>
   </div>
   
   <div class="row">         
        <div data-toggle="modal" data-target="#begeleiding-pop" id="begeleiding" class="width padding bg auto"><a href="#">Begeleiding door het jeugdteam</a></div>
   </div>
   <div class="row">
     <div class="right inline">
          <div  data-toggle="modal" data-target="#zin-pop" id="zin" class="right padding bg"><a href="#">Zorg in natura</a></div>
          <div  data-toggle="modal" data-target="#pgb-pop" id="pgb" class="left padding bg"><a href="#">Persoonsgebonden budget</a></div>
     </div>
   </div>
   
   <div class="row">
     <div  data-toggle="modal" data-target="#herindicatie-pop" id="herindicatie" class="left padding bg"><a href="#">Herindicatie</a></div>
     <div data-toggle="modal" data-target="#beslissing-pop" class="width decision alt">
        <img id="decision3" src="img/decision.png">
     </div>
     
   </div>
   
   <div class="row">
     <div  data-toggle="modal" data-target="#afsluiting-pop" id="afsluiting" class="width padding bg auto">
        <a href="#">Afsluiting</a> 
     </div>
   </div>
        
</div>

<script type="text/javascript">   
jQuery(document).ready(function(){
    plumbing();
});
</script>

<?php 
$ID = "aanmelding-pop";
$title = "Aanmelding";
$content = "
<p>De aanmelding is het eerste belangrijke beslsismoment voor het Jeugdteam. In plaats van aanmelding gebruiken sommige teams het woord melding of intake. </p>
<p>De essentie van de beslissing is: deze vraag past wel/niet in bij het Jeugdteam</p>";

modalWindow($ID, $title, $content);

$ID = "beslissing-pop";
$title = "Beslismoment";
$content = "
<p>De aanmelding is het eerste belangrijke beslsismoment voor het Jeugdteam. In plaats van aanmelding gebruiken sommige teams het woord melding of intake. </p>
<p>De essentie van de beslissing is: deze vraag past wel/niet in bij het Jeugdteam</p>";

modalWindow($ID, $title, $content);

$ID = "verheldering-pop";
$title = "Vraagverheldering";
$content = "
<p>De aanmelding is het eerste belangrijke beslsismoment voor het Jeugdteam. In plaats van aanmelding gebruiken sommige teams het woord melding of intake. </p>
<p>De essentie van de beslissing is: deze vraag past wel/niet in bij het Jeugdteam</p>";

modalWindow($ID, $title, $content);

$ID = "begeleiding-pop";
$title = "Begeleiding door het jeudgteam";
$content = "
<p>De aanmelding is het eerste belangrijke beslsismoment voor het Jeugdteam. In plaats van aanmelding gebruiken sommige teams het woord melding of intake. </p>
<p>De essentie van de beslissing is: deze vraag past wel/niet in bij het Jeugdteam</p>";

modalWindow($ID, $title, $content);

$ID = "zin-pop";
$title = "Zorg in natura";
$content = "
<p>De aanmelding is het eerste belangrijke beslsismoment voor het Jeugdteam. In plaats van aanmelding gebruiken sommige teams het woord melding of intake. </p>
<p>De essentie van de beslissing is: deze vraag past wel/niet in bij het Jeugdteam</p>";

modalWindow($ID, $title, $content);

$ID = "pgb-pop";
$title = "Persoonsgebonden budget";
$content = "
<p>De aanmelding is het eerste belangrijke beslsismoment voor het Jeugdteam. In plaats van aanmelding gebruiken sommige teams het woord melding of intake. </p>
<p>De essentie van de beslissing is: deze vraag past wel/niet in bij het Jeugdteam</p>";

modalWindow($ID, $title, $content);

$ID = "herindicatie-pop";
$title = "Herindicatie";
$content = "
<p>De aanmelding is het eerste belangrijke beslsismoment voor het Jeugdteam. In plaats van aanmelding gebruiken sommige teams het woord melding of intake. </p>
<p>De essentie van de beslissing is: deze vraag past wel/niet in bij het Jeugdteam</p>";

modalWindow($ID, $title, $content);

$ID = "afsluiting-pop";
$title = "Afsluiting";
$content = "
<p>De aanmelding is het eerste belangrijke beslsismoment voor het Jeugdteam. In plaats van aanmelding gebruiken sommige teams het woord melding of intake. </p>
<p>De essentie van de beslissing is: deze vraag past wel/niet in bij het Jeugdteam</p>";

modalWindow($ID, $title, $content);

$ID = "eenmaligadvies-pop";
$title = "Eenmalig advies";
$content = "
<p>De aanmelding is het eerste belangrijke beslsismoment voor het Jeugdteam. In plaats van aanmelding gebruiken sommige teams het woord melding of intake. </p>
<p>De essentie van de beslissing is: deze vraag past wel/niet in bij het Jeugdteam</p>";

modalWindow($ID, $title, $content);

$ID = "verwijzing-pop";
$title = "Verwijzing buiten de jeugdwet";
$content = "
<p>De aanmelding is het eerste belangrijke beslsismoment voor het Jeugdteam. In plaats van aanmelding gebruiken sommige teams het woord melding of intake. </p>
<p>De essentie van de beslissing is: deze vraag past wel/niet in bij het Jeugdteam</p>";

modalWindow($ID, $title, $content);

?>

<?php
function modalWindow($modalID, $modalTitle, $modalContent){
echo "<!-- Modal -->
<div class='modal fade' id='{$modalID}' role='dialog'>
  <div class='modal-dialog'>
  
    <!-- Modal content-->
    <div class='modal-content'>
      <div class='modal-header'>
        <button type='button' class='close' data-dismiss='modal'>&times;</button>
        <h4 class='modal-title'>{$modalTitle}</h4>
      </div>
      <div class='modal-body'>
      {$modalContent}
      </div>
      <div class='modal-footer'>
        <button type='button' class='btn btn-default' data-dismiss='modal'>Sluiten</button>
      </div>
    </div>
    
  </div>
</div>";

}

?>

    
    



</body>
</html>