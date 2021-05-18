<?php

foreach ( $pokemons as $pokemon){
                    echo   "<tr>
                                <td>" . $pokemon['id'] . "</td>
                                <td>" . $pokemon['nombre'] . "</td>
                                <td>" . $pokemon['altura'] . "</td>
                                <td>" . $pokemon['peso'] . "</td>
                                <td>" . $pokemon['habilidad'] . "</td>
                                <td><img src='".$pokemon['tipo']."' width='50' height='50'>";

                              if(isset($pokemon["tipo_dos"])){

                      echo" <img src='".$pokemon['tipo_dos']. "' width='50' height='50'></td>";

                    }else{
                       echo"</td>";
                    } 

                              echo "<td>" . $pokemon['descripcion'] . "</td>
                                   <td> <img src=" . $pokemon['imagen'] . " width=75 height=75 ></td>
                                   <td>
                                   <form action='modificarForm.php' method='get'>
                                          <input type='hidden' name='id' value=".$pokemon['id'].">
                                          <input class='btn btn-warning ms-auto' type='submit' value='MODIFICAR'>
                                    </form>
                                    <form action='baja-pokemon.php' method='get'>
                                      <input type='hidden' name='idBaja' value=".$pokemon['id'].">
                                      <button type='submit' class='btn btn-danger ms-auto' name='baja'>BAJA</button>
                                   </form>
                                    <form action='verMas.php' method='get'>
                                          <input type='hidden' name='id' value=".$pokemon['id'].">
                                          <input class='btn btn-primary ms-auto' type='submit' value='VER MAS'>
                                    </form>
                                   </td>
                                   

                             </tr>";
                }


?>