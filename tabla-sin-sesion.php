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
                                   
                             </tr>";
                }



?>