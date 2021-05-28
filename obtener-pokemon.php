<?php

$buscar = $_GET["buscar"];

if($buscar==""){

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
                                <td class='text-center'>" . $fila['id_manual'] . "</td>
                                <td class='text-center'>" . $fila['nombre'] . "</td>
                                <td class='text-center'>" . $fila['altura'] . "</td>
                                <td class='text-center'>" . $fila['peso'] . "</td>
                                <td class='text-center'>" . $fila['habilidad'] . "</td>
                                <td class='text-center'><img src='".$fila['tipo']."' width='50' height='50'>";

            if($fila["tipo_dos"]!=null){

                echo" <img src='".$fila['tipo_dos']. "' width='50' height='50'></td>";

            }else{
                echo"</td>";
            }

            echo "<td>" . $fila['descripcion'] . "</td>
                                   <td> <img src=" . $fila['imagen'] . " width=75 height=75 ></td>
                                   <td>
                                   <div class='row'>
                                          
                                   <div class =''>
                                         <form action='verMas.php' method='get'>
                                         <input type='hidden' name='id' value=".$pokemon['id'].">
                                         <input class='btn btn-primary ms-auto w-100' type='submit' value='VER MAS'>
                                         </form>
                                   </div>
                                   <div class =''>
                                         <form action='modificar-pokemon.php' method='get'>
                                         <input type='hidden' name='id' value=".$pokemon['id'].">
                                         <input class='btn btn-warning ms-auto w-100' type='submit' value='MODIFICAR'>
                                         </form>
                                   </div>


                                   <div class =''>
                                         <form action='bajar-pokemon.php' method='get'>
                                         <input type='hidden' name='idBaja' value=".$pokemon['id'].">
                                         <button type='submit' class='btn btn-danger ms-auto w-100' name='baja'>BAJA</button>
                                         </form>                  
                                   </div>

                             </div>
                                   </td>

                             </tr>";
        }


    }else{

        echo"<div class='alert alert-danger text-center container' role='alert'>
                        Pokemon no encontrado!
                    </div>";

        include('tabla-pokemon.php');


    }

}


?>