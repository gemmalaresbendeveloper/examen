<?php
	  include '../../modelo/modelo_consultas.php';
    $boton = $_POST['boton'];
    if($boton==='buscar'){
      $inicio = 0;
      $limite = 5;
      if(isset($_POST['pagina'])){
        $pagina = $_POST['pagina'];
        $inicio = ($pagina -1) * $limite;
      }
      $valor = $_POST['valor'];
      $instancia = new modelo_consulta();
      $a = $instancia->listar_consultas($valor);
      $b = count($a);
      $c = $instancia->listar_consultas($valor,$inicio,$limite);
      echo json_encode($c)."*".$b;
    }
?>