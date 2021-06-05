<?php

$sql="SELECT * FROM Pokemons order by id_manual";
       $result = $con->query($sql);
       $pokemons = Array();

        if (mysqli_num_rows($result) > 0) {
   
        while($fila = mysqli_fetch_assoc($result)) {
            $c = Array();
            $pokemon['id'] =  $fila["id_manual"];
            $pokemon['nombre'] =  $fila["nombre"];
            $pokemon['altura'] =  $fila["altura"];
            $pokemon['peso'] =  $fila["peso"];
            $pokemon['habilidad'] =  $fila["habilidad"];
            $pokemon['tipo'] =  $fila["tipo"];
            

            $pokemon['tipo_dos'] =  $fila["tipo_dos"];

            
            $pokemon['descripcion'] =  $fila["descripcion"];
            $pokemon['imagen'] =  $fila["imagen"];
            $pokemons[] = $pokemon;
        }


      }


?>