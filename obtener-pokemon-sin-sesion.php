<?php

$buscarPokemon = $_GET["buscar"];  

if($buscarPokemon==""){

  include('tabla-pokemon.php');

}else{

$sql2="SELECT * from Pokemons
 where nombre= '". $buscar ."'
 or id_manual = '". $buscar ."'
 or  SUBSTR( SUBSTR(tipo,28) , 1 ,  LENGTH(SUBSTR(tipo,28)) -4 ) = '". $buscar ."'
 or SUBSTR( SUBSTR(tipo_dos,28) , 1 ,  LENGTH(SUBSTR(tipo_dos,28)) -4 )  = '". $buscar ."'";

$pokemonResultado = $con->query($sql2);

        if (!empty($pokemonResultado) && mysqli_num_rows($pokemonResultado) > 0) {
   
        while($fila = mysqli_fetch_assoc($pokemonResultado)) {
            
            echo   "<tr>
                                <td>" . $fila['id_manual'] . "</td>
                                <td>" . $fila['nombre'] . "</td>
                                <td>" . $fila['altura'] . "</td>
                                <td>" . $fila['peso'] . "</td>
                                <td>" . $fila['habilidad'] . "</td>
                                <td><img src='".$fila['tipo']."' width='50' height='50'>";

                              if($fila["tipo_dos"]!=null){

                      echo" <img src='".$fila['tipo_dos']. "' width='50' height='50'></td>";

                    }else{
                       echo"</td>";
                    } 

                              echo "<td>" . $fila['descripcion'] . "</td>
                                   <td> <img src=" . $fila['imagen'] . " width=75 height=75 ></td>
                             </tr>";
        }


      }else{

        echo"<div class='alert alert-danger text-center container' role='alert'>
                        Pokemon no encontrado!
                    </div>";

                include('tabla-sin-sesion.php'); 


      }

    }


?>