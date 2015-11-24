<?php
session_start();
include_once("../controles/conexao.php");

// PROJECT RELATED FUNCTIONS


	class PHP_fun
	{


  public $conexao; //CQuery: variavel geral de conexao que sera passada como parametro na instancia da classe


        public $erro; //armazena o erro das operacoes da tabela


        // Metodo construtor setamos aqui o que queremos que ele faÃ§a ao criar o objeto
        function __construct($conn)
        {
            //criamos a nossa conexao com o banco de dados e selecionamos o banco

            $this->conexao = $conn;

        }

		function select_row($sql)
		{
	//echo $sql . "<br />";
			if ($sql!="")
			{
           //  echo "select_row".$sql;
             $resultado=@pg_exec($this->conexao,$sql);
             $result=@pg_numrows($resultado);
            	//$result = mysql_query($sql) or die("Error: ".mysql_errno().":- ".mysql_error());
			  if ($result)
				{  // print "entrou no if";
					while($row = pg_fetch_array($resultado)) //linha retorna em um array. (por nome de campo)
					{	$data[] = $row;
					//	print_r($row);
                        }
				}
				return $data;
			}
		}

		function recordCount($sql)
		{
  if ($sql!="")
			{
  	            //echo "sql funcRecord".$sql;
  	            $resultado=@pg_exec($this->conexao,$sql);
                $result=@pg_numrows($resultado);
                //$result = mysql_query($sql) or die("Error: ".mysql_errno().":- ".mysql_error());
				if ($result)
				{
					$cnt = pg_num_rows($resultado);
					return $cnt;
				}
			}
		}
		function createProductUrl($url)
		{
			$url = trim($url);
			if ($url != "")
			{
				$url = trim(str_replace(" ","-",$url));
				//return $url.".html";
				return $url;
			}
		}

        	function getChild($nr_menu,$origem)
		{
			$menu = "";
			$str = "";
			//print "NRO MENU ".$nr_menu;

			$s = "SELECT distinct a.id_funcionalidade,a.desc_funcionalidade,a.id_funcionalidade_pai,a.link_funcionalidade
            FROM public.tb_funcionalidades a
                  WHERE a.id_funcionalidade_pai = '$nr_menu'
                        ";

			$res = $this->select_row($s);
		//	print_r($res);
		//	print_r($s);

            //ÁREA DO SUBMENU
            if ($res)
              {  //print $origem;
               if ($origem=="menu")
                   {
                   $menu .= '<ul class="dropdown-menu">';
                    $ul='dpm';
                   }
               else
                  {// $menu .='<li class="dropdown-submenu">';
                   $menu .= '<ul class="dropdown-menu">';
                    $ul='dps';}
               for ($i=0;$i<count($res);$i++)
		     	{
 			 	$cnt_of_child = $this->recordCount("SELECT a.id_funcionalidade,a.desc_funcionalidade,a.id_funcionalidade_pai,a.link_funcionalidade
                 FROM public.tb_funcionalidades a WHERE a.id_funcionalidade_pai = '".$res[$i][id_funcionalidade]."'
                                                           ORDER BY a.nivel
                                                           ");
                //*print "{$res[$i][desc_funcionalidade]} $cnt_of_child $origem<br>";
                                   if($cnt_of_child > 1 and $origem=="menu")
                                      $menu .= '<li class="dropdown-submenu"><a  >'.$res[$i][desc_funcionalidade].'</a>';
                                   else
                                   	$menu .= '<li><a href="'.$res[$i][link_funcionalidade].'"  >'.$res[$i][desc_funcionalidade].'</a></li>';


             	$menu .= $this->getChild($res[$i][id_funcionalidade],$origem="sub");
			//	$menu .= $this->getChild($res [id]);
			

			}
			if ($ul=="dpm")
                  	$menu .= '</ul>';
               else
                  {
                    $menu .= '</ul>';
                   $menu .='</li>';
                   }

            }
			return $menu;
		}
		
         function getMenu($nr_menu_pai)
		{ //  print "MENU PAI".$nr_menu_pai ;
			$menu = "";
			$menu.= " <div id=\"m\" class=\"navbar navbar-inverse\">
                 <div class=\"navbar-inner\">
                   <div id=\"m\" class=\"nav-collapse collapse navbar-responsive-collapse\">";
                   
            $s = "SELECT  a.id_funcionalidade,a.desc_funcionalidade,a.id_funcionalidade_pai,a.link_funcionalidade
                 FROM public.tb_funcionalidades a
                  WHERE (a.id_funcionalidade_pai = '$nr_menu_pai' or a.id_funcionalidade_pai is null)
                       ";

 //c.cd_login=$_SESSION[cd_login]
                       // ORDER BY nr_ordem" ;

             //AQUI
             // print_r($s);
             // print "getmenu".$s;

            //$s = "select id,title,parentid,link from ms_product where parentid = '$parentid'  ";
			$res = $this->select_row($s);
         //   print "res";
		//	print_r($res);

           //   print "fim res";
  		//ob_start();



            $menu.= '<ul class="nav nav-collapse"> <p class="brand">Bem vindo!</p>';

            $img = array("home","signal","th","folder-open","user");
            
          //AQUI//
          	for ($i=0;$i<count($res);$i++)
			{
                $sql = "SELECT a.id_funcionalidade,a.desc_funcionalidade,a.id_funcionalidade_pai,a.link_funcionalidade
                 FROM public.tb_funcionalidades a WHERE a.id_funcionalidade_pai = '".$res[$i][id_funcionalidade]."'
                 ORDER BY a.nivel";
                 //print $sql;

				$wcnt_of_child = $this->recordCount("$sql");
                //print $i.$res[$i][desc_funcionalidade].":".$wcnt_of_child."<hr>";
                if($wcnt_of_child)
				{
				  $menu.='<li class="dropdown"><a  class="dropdown-toggle" data-toggle="dropdown" href="'.$res[$i][link_funcionalidade].'"  ><i class="icon-'.$img[$i].' icon-white"></i> ' .$res[$i][desc_funcionalidade].'<b class="caret"></b></a>'.$this->getChild($res[$i][id_funcionalidade],$origem="menu");
                  $menu.= "</li>";
			    }
				else
				{
                  $menu.='<li><a href="'.$res[$i][link_funcionalidade].'"  ><i class="icon-'.$img[$i].' icon-white"></i> '.$res[$i][desc_funcionalidade];
				  $menu.= "</a></li>";
                }
      }
       
 			$menu.= "</ul>";
 			$menu.="</div>
         </div>
     </div>";

		//	$menu = ob_get_contents();
         //	ob_end_clean();
			return $menu;
		}
	}//class PHP_fun()
	
	
	$dbm = new PHP_fun($conexao);
 print	$dbm->getMenu(0);
	?>

