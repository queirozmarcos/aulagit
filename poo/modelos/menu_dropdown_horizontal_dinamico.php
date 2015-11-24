<?php
//session_start();
/*if (!$_SESSION["AUTHENTIC"])
 {
  print '<script>alert("Atenção!\nVocê não tem permissão para acessar o sistema.\nPor favor, entre em contato com o administrador.");</script>';
 exit;
 }  */
include_once("../controles/conexao.php");


 //   include("menu_boot.php");
 //   $dbm = new PHP_fun($conexao);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xml:lang="pt-br" xmlns="http://www.w3.org/1999/xhtml" lang="pt-br">

<head>
            <title>Modelos de menu vertical</title>
            <!--Meta Tags-->
            <meta name="description" content="Site oficial Aves do Nelito - Criação de aves ornamentais e ovos para venda " />

           <link href="/OSTRAS/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
           <link href=" /OSTRAS/bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
           <link rel="stylesheet" href="/OSTRAS/bootstrap/css/docs.css" media="screen" type="text/css" />
    
           <script src="/OSTRAS/bootstrap/jquery/jquery-1.11.0.js"></script>
           <script src="/OSTRAS/bootstrap/js/bootstrap.js"></script>
</head>
 
<body >
    <div id="painel" class="navbar navbar-inverse">
		<div class="navbar-inner">
			<div class="nav-collapse collapse navbar-responsive-collapse">

                    <?=$db->getMenu(0);?>

             </div>
         </div>
     </div>
</body>
</html>
<script>
            $(document).ready(function() {
                $('.dropdown-toggle').dropdown();
            });
        </script>
