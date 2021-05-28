<?php

foreach ( $pokemons as $pokemon){
    echo   "<tr>
                                <td class='text-center'>" . $pokemon['id'] . "</td>
                                <td class='text-center'>" . $pokemon['nombre'] . "</td>
                                <td class='text-center'>" . $pokemon['altura'] . "</td>
                                <td class='text-center'>" . $pokemon['peso'] . "</td>
                                <td class='text-center'>" . $pokemon['habilidad'] . "</td>
                                <td class='text-center'><img src='".$pokemon['tipo']."' width='50' height='50'>";

    if(isset($pokemon["tipo_dos"])){

        echo" <img src='".$pokemon['tipo_dos']. "' width='50' height='50'></td>";

    }else{
        echo"</td>";
    }

    echo "<td>" . $pokemon['descripcion'] . "</td>
                                   <td> <img src=" . $pokemon['imagen'] . " width=75 height=75 ></td>
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



?>