<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="iso-8859-1">   
    <title>Exemplo: Login</title>   
    <!--Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="SUBTI">
    <meta name="author" content="Adaptado por Cissa">
    <!-- Estilos --> 
     <!-- Alterado o caminho para poder funcionar na INTERNET -->
    <link href="/OSTRAS/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="/OSTRAS/bootstrap/css/mobile.css" media="(max-width:939px)">
    <script src="/OSTRAS/bootstrap/jquery/jquery-1.11.0.js"></script>
    <link href=" /OSTRAS/bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
     <link href=" /OSTRAS/bootstrap/css/docs.css" rel="stylesheet" media="screen">
     <script src="/OSTRAS/bootstrap/js/bootstrap.js"></script>
    <script src="/OSTRAS/sistemas/fepe/funcoes/funcoes.js"></script>
    <script src="/vsouza/teste/BOOTSTRAP/funcoes/func_CapsLock.js"></script>
    <script src="/OSTRAS/bootstrap/jquery/jquery.maskedinput.js" type="text/javascript"></script>
    <script src="/OSTRAS/bootstrap/jquery/jquery.maskedinput.min.js" type="text/javascript"></script>

    <base target="corpo" />  
    <style type="text/css">
      body {

        padding-top: 250px; /*cissa*/
        padding-bottom: 40px;
        background-color: #ffffff;
        color: #ffffff;
        background-image:url(../imagens/bgLogin.jpg); /*imagem de fundo*/
        background-repeat: no-repeat; */
      }
      .form-signin {
        max-width: 200px; /*cissa*/
        padding: 19px 15px 20px;
         /*margin: 0 auto 40px;*/
        float: right; 

        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
                background-color: #00688b; /*cissa*/
                border: none; /*cissa*/ 
               transition: background-color: 7s;    
      }
   
	  
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
         color: #ffffff;          
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 14px; /*cissa*/
        height: auto;
        margin-bottom: 15px;
        padding: 7px 7px;          
      }
     .form-signin .pull-center {
		  color: #ffffff;
		  margin-left: 40px;
		  text-decoration: none;
	  }    
	  /*alert*/
	 .alert_capslock {
	 padding: 8px 10px 8px 14px;
	 margin-bottom: 60px;
	 text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
	 background-color: #fcf8e3;
	 border: 1px solid #fbeed5;
	 -webkit-border-radius: 4px;
     -moz-border-radius: 4px;
     border-radius: 4px;
     float: right; /*cissa*/
	 }
	 .alert_capslock h4 {
	 color: #c09853;
     margin: 0;
     }
	 .alert-block {
     padding-top: 10px ;
     padding-bottom: 10px;
     max-width: 210px; /*cissa*/
     }
    .alert-block > p,
    .alert-block > ul {
    margin-bottom: 0;
    }
    .alert-block p + p {
    margin-top: 5px;
    }
    .alert-error {
    color: #b94a48;
    background-color: #f2dede;
    border-color: #eed3d7; 
    }
    .alert-error h4 {
    color: #b94a48;
    }
    </style>
      <link href="/OSTRAS/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!--Icon -->
    <link rel="shortcut icon" href="../assets/img/icon.ico" type="image/  x-icon" />
    <link rel="icon" href="../assets/img/icon.ico" type="image/x-icon" />
  </head>
  <body>
	  <header id="cabecalho" >

<!--<nav id="menu"> <!--menu	  
        	                                         
            <div class="navbar navbar-fixed-top">
              <div class="navbar-inner">
                <div class="container">
                  <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </a>
                 
                  <div class="nav-collapse collapse navbar-responsive-collapse">
                    <ul class="nav">
						
                      <li class="active"><a href="formulario.php" target="corpo"><i class="icon-home"></i> Home</a></li>
                                     
        
                        <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" target="corpo"><i class="icon-folder-open"></i> Sistema <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                          <li><a href="formulario.php"><i class="icon-question-sign"></i> Manual</a></li>
                      
                        
                        </ul>
                         <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" target="corpo"><i class="icon-user"></i> Usuário <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                          <li><a href="formulario.php"><i class="icon-pencil"></i> Alterar a Senha</a></li>
                      
                          <li class="divider"></li>
                          
                          <li><a href="#">Testando</a></li>
                          
                        </ul>
                         <li><a href="http://intranet.pmro.rj.gov.br/telefones.html"><i class="icon-envelope" target="corpo"></i> Fale Conosco</a></li>
                     

                    </ul>
                   
                  </div><!-- /.nav-collapse -->
               <!-- </div>
              </div><!-- /navbar-inner -->
            <!--</div><!-- /navbar -->
            <!--</div>                          
            </div>
          </nav> 
  
<!--Chamar modal-->  
<div id="alterarSenha" class="modal hide fade in" style="display: none; ">  
<!--Modal-->
<div class="modal-header">  
<a class="close" data-dismiss="modal">×</a>  
<h3><small>Formulário de Cadastro</small></h3>  
</div>  

<div class="modal-body"> 

<h4>Conteúdo do modal </h4>              

</div>
  
<div class="modal-footer">  
<a href="#" class="btn btn-primary">Salvar</a>  
<a href="#" class="btn" data-dismiss="modal">Fechar</a>  
</div>  
</div> 
<!--></-->   
                                                          
      <form class="form-signin" style="margin-right: 60px;">
        <h4 class="form-signin-heading">Fa&ccedil;a seu login</h4>
      
        <input type="text" class="input-block-level"  onkeypress="checar_caps_lock(event);" placeholder="login">        
        <input type="password" class="input-block-level"  onkeypress="checar_caps_lock(event);" placeholder="senha">
        <label class="text">
         <!-- <input type="checkbox" value="remember-me"> Lembre-me-->
          <a data-toggle="modal" href="formulario.php" class="pull-center" data-target="#alterarSenha">Esqueceu a senha?</a>
        </label>
              
        <br clear="all">
        
        <button class="btn btn-block" type="submit">Entrar</button>
        
      </form>
          <div id="CapsLock" class="alert_capslock alert-block alert-error fade in" style="visibility: hidden">
            <h4 class="alert-heading"><p class="text-center">Atenção!</p></h4>
           <p class="text-center">A tecla<strong> 'CapsLock' </strong>está ativada.</p>
          </div>
        </div>

    </div> <!-- /container -->
  </body>
</html>
