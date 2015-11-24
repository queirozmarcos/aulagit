<?php

    session_start();

    $page = isset($_POST['page']) ? $_POST['page'] : 1;
    $rp = isset($_POST['rp']) ? $_POST['rp'] : 10;
    $sortname = isset($_POST['sortname']) ? $_POST['sortname'] : 'name';
    $sortorder = isset($_POST['sortorder']) ? $_POST['sortorder'] : 'desc';
    $query = isset($_POST['query']) ? $_POST['query'] : false;
    $qtype = isset($_POST['qtype']) ? $_POST['qtype'] : false;


    if(isset($_GET['Add'])){ // this is for adding records

        $rows = $_SESSION['Example4'];
        $rows[$_GET['Codigo']] =
        array(
            'nome'=>$_GET['Nome']
            , 'cidade'=>$_GET['Cidade']
            , 'estado'=>$_GET['Estado']

        );
        $_SESSION['Example4'] = $rows;

    }
    elseif(isset($_GET['Edit'])){ // this is for Editing records
        $rows = $_SESSION['Example4'];

        unset($rows[trim($_GET['OrgEmpID'])]);  // just delete the original entry and add.

        $rows[$_GET['Codigo']] =
        array(
            'nome'=>$_GET['Nome']
            , 'cidade'=>$_GET['Cidade']
            , 'estado'=>$_GET['Estado']

        );
        $_SESSION['Example4'] = $rows;
    }
    elseif(isset($_GET['Delete'])){ // this is for removing records
        $rows = $_SESSION['Example4'];
        unset($rows[trim($_GET['Delete'])]);  // to remove the \n
        $_SESSION['Example4'] = $rows;
    }
    else{

        if(isset($_SESSION['Example4'])){ // get session if there is one
            $rows = $_SESSION['Example4'];
        }
        else{ // create session with some data if there isn't
            $rows[1] = array('nome'=>'Maria Lucia',   'cidade'=>'Rio de Janeiro',  'estado'=>'RJ'  );
            $rows[2] = array('nome'=>'Jose Neto',   'cidade'=>'Sao Fidelis',    'estado'=>'RJ');
            $rows[3] = array('nome'=>'Cissa',   'cidade'=>'Casimiro', 'estado'=>'RJ');
            $rows[4] = array('nome'=>'Chico', 'cidade'=>'Cabo Frio',   'estado'=>'RJ');
            $_SESSION['Example4'] = $rows;
        }



        header("Content-type: application/json");
        $jsonData = array('page'=>$page,'total'=>0,'rows'=>array());
        foreach($rows AS $rowNum => $row){
            //If cell's elements have named keys, they must match column names
            //Only cell's with named keys and matching columns are order independent.
            $entry = array('id' => $rowNum,
                'cell'=>array(
                    'codigo'       => $rowNum,
                    'nome'             => $row['nome'],
                    'cidade' => $row['cidade'],
                    'estado'   => $row['estado'],

                )
            );
            $jsonData['rows'][] = $entry;
        }
        $jsonData['total'] = count($rows);
        echo json_encode($jsonData);

}
?>