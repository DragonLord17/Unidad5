
<h1>Calculadora</h1>
<form action="cliente.php" method="get">
    Numero 1 : <input type="text" name="a"><br><br>
    Numero 2 : <input type="text" name="b"><br><br>
    Operacion: <select name="action" id="">
                    <option value="suma">Sumar</option>
                    <option value="resta">Restar</option>
                    <option value="multiplicacion">Multiplicacion</option>
                    <option value="division">Division</option>
               </select> <br><br>
                      
    <input type="submit" value="Calcular">
              
               <?php
            //OPERACION SUMA
                if (isset($_GET["action"]) && $_GET["action"] == "suma") {
                    $calculadora = file_get_contents('http://localhost/Calculadora2/servicio.php?action=suma&a='.$_GET["a"].'&b='.$_GET["b"]);
                    $calculadora = json_decode($calculadora, true);
                ?>
                    <br>
                    <h1>SUMA</h1>
                    <table>
                        <tr>
                            <td>Primer número: </td><td><?php echo $calculadora["a"]; ?></td>
                        </tr>
                        <tr>
                            <td>Segundo número:  </td><td> <?php echo $calculadora["b"]; ?></td>
                        </tr>
                        <tr>
                            <td>Total: </td><td> <h3><?php echo $calculadora["total"]; ?></h3></td>
                        </tr>
                    </table>
                <?php
                }
            //OPERACION Resta
                if (isset($_GET["action"]) && $_GET["action"] == "resta") {
                    $calculadora = file_get_contents('http://localhost/Calculadora2/servicio.php?action=resta&a='.$_GET["a"].'&b='.$_GET["b"]);
                    $calculadora = json_decode($calculadora, true);
                ?>
                    <br>
                    <h1>RESTA</h1>
                    <table>
                        <tr>
                            <td>Primer número: </td><td><?php echo $calculadora["a"]; ?></td>
                        </tr>
                        <tr>
                            <td>Segundo número:  </td><td> <?php echo $calculadora["b"]; ?></td>
                        </tr>
                        <tr>
                            <td>Total: </td><td> <h3><?php echo $calculadora["total"]; ?></h3></td>
                        </tr>
                    </table>
                <?php
                }
            //OPERACION MULTIPLICACION
                if (isset($_GET["action"]) && $_GET["action"] == "multiplicacion") {
                    $calculadora = file_get_contents('http://localhost/Calculadora2/servicio.php?action=multiplicacion&a='.$_GET["a"].'&b='.$_GET["b"]);
                    $calculadora = json_decode($calculadora, true);
                ?>
                    <br>
                    <h1>MULTIPLICACIÓN</h1>
                    <table>
                        <tr>
                            <td>Primer número : </td><td><?php echo $calculadora["a"] ?></td>
                        </tr>
                        <tr>
                            <td>Segundo número : </td><td><?php echo $calculadora["b"] ?></td>
                        </tr>
                        <tr>
                            <td>Total: </td><td><h3><?php echo $calculadora["total"] ?></h3></td>
                        </tr>
                    </table>
                <?php
                } 
    
                //OPERACION DIVISION
                if (isset($_GET["action"]) && $_GET["action"] == "division") {
                    $calculadora = file_get_contents('http://localhost/Calculadora2/servicio.php?action=division&a='.$_GET["a"].'&b='.$_GET["b"]);
                    $calculadora = json_decode($calculadora, true);
                ?>
                    <br>
                    <h1>DIVISION</h1>
                    <table>
                        <tr>
                            <td>Primer número: </td><td><?php echo $calculadora["a"]; ?></td>
                        </tr>
                        <tr>
                            <td>Segundo número:  </td><td> <?php echo $calculadora["b"]; ?></td>
                        </tr>
                        <tr>
                            <td>Total: </td><td> <h3><?php echo $calculadora["total"]; ?></h3></td>
                        </tr>
                    </table>
                <?php } ?>
</form>