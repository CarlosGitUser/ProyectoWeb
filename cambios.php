<?php
session_start();
    
$servidor='localhost';
$cuenta='root';
$password='';
$bd='tienda';
 
$_SESSION['id_prod'] = '';
$_SESSION['nombre'] = '';
$_SESSION['descrip'] = '';
$_SESSION['canti'] = '';
$_SESSION['prec'] = '';
$_SESSION['image'] = '';
$_SESSION['desc'] = '';
$_SESSION['cate'] = '';

$conexion = new mysqli($servidor,$cuenta,$password,$bd);

if ($conexion->connect_errno){
    die('Error en la conexion');
}

if(isset($_POST['submit'])){
    $modificar = $_POST['modificar'];
    $_SESSION['modificar2']=$modificar;
    $sq12= "SELECT * FROM producto WHERE id_prod='$modificar'";
    $resultado = $conexion -> query($sq12);
    while($fila = $resultado -> fetch_assoc()){
        $_SESSION['id_prod'] = $fila['id_prod'];
        $_SESSION['nombre_prod'] = $fila['nombre_prod'];
        $_SESSION['descripcion'] = $fila['descripcion'];
        $_SESSION['cantidad'] = $fila['cantidad'];
        $_SESSION['precio'] = $fila['precio'];
        $_SESSION['imagen'] = $fila['imagen'];
        $_SESSION['descuento'] = $fila['descuento'];
        $_SESSION['categoria'] = $fila['categoria'];
    }
}

if(isset($_POST['mod'])){
    $uno = $_POST['id_prod2'];
    $dos = $_POST['nombre_prod2'];
    $tres = $_POST['descripcion2'];
    $cuatro = $_POST['cantidad2'];
    $cinco = $_POST['precio2'];
    $seis = $_POST['imagen2'];
    $siete = $_POST['descuento2'];
    $ocho = $_POST['categoria2'];
    $modificar1 = $_SESSION['modificar2'];

    $ne = "UPDATE producto SET id_prod='$uno', nombre_prod='$dos', descripcion='$tres', cantidad='$cuatro', precio='$cinco', imagen='$seis', descuento='$siete', categoria='$ocho' WHERE id_prod='$modificar1'";
    $fin = $conexion -> query($ne);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="contenedor1">
        <div class="contenedor2">
            <div class="izquierdaAlta">
            <?php        
            $sql = 'select * from producto';
            $resultado = $conexion -> query($sql); 
            
            if ($resultado -> num_rows){ 
            ?>
            <div class="izqAlta">      
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method='post'>  
                <legend><h2>Modificar Cuentas</h2></legend>
                    <br>
                    <select class="custom-select" name='modificar'> 
                    <?php
                    $salida='<table>';
                    echo '<tr>
                        <td>id</td>
                        <td>nombre</td>
                        <td>descripcion</td>
                        <td>cantidad</td>
                        <td>precio</td>
                        <td>imagen</td>
                        <td>descripcion</td>
                        <td>categoria</td>
                    </tr>';
                    while( $fila = $resultado -> fetch_assoc() ){
                        echo '<option value="'.$fila["id_prod"].'">'.$fila["nombre_prod"].'</option>';
                        $salida.= '<tr>';
                        $salida.= '<td>'.$fila["id_prod"]. '</td>';
                        $salida.= '<td>'.$fila["nombre_prod"]. '</td>';
                        $salida.= '<td>'.$fila["descripcion"]. '</td>';
                        $salida.= '<td>'.$fila["cantidad"]. '</td>';
                        $salida.= '<td>'.$fila["precio"]. '</td>';
                        $salida.= '<td>'.$fila["imagen"]. '</td>';
                        $salida.= '<td>'.$fila["descripcion"]. '</td>';
                        $salida.= '<td>'.$fila["categoria"]. '</td>';
                        $salida.= '</tr>';
                    }
                    $salida.= '</table>';
                    ?>
                    </select>
                    <button type="submit" value="submit" name="submit">seleccionar</button>               
                </form>
            </div> 
            <?php
            }
            else{
                echo "no hay datos";
            }
            ?>
        </div>
            <div class="izquierdaBaja">
                 <?php echo $salida ?>
            </div>
        </div>
        <div class="derecha">
            <form class="estiloformulario" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method='post'>
           
                <br>
                <label for="id">ID producto</label>
                <input type="number" name="id_prod2" value="<?php echo $_SESSION["id_prod"]; ?>"><br>

                <label for="nombre">Nombre del producto</label>
                <input type="text" name="nombre_prod2" value="<?php echo $_SESSION["nombre_prod"]; ?>"><br>

                <label for="cuenta">Descripcion</label>
                <input type="text" name="descripcion2" value="<?php echo $_SESSION["descripcion"]; ?>"><br>

                <label for="contra">Cantidad</label>
                <input type="text" name="cantidad2" value="<?php echo $_SESSION['cantidad']; ?>"><br>

                <label for="contra">Precio</label>
                <input type="text" name="precio2" value="<?php echo $_SESSION['precio']; ?>"><br>

                <label for="contra">imagen</label>
                <input type="text" name="imagen2" value="<?php echo $_SESSION['imagen']; ?>"><br>

                <label for="contra">Descuento</label>
                <input type="text" name="descuento2" value="<?php echo $_SESSION['descuento']; ?>"><br>

                <label for="contra">Categoria</label>
                <input type="text" name="categoria2" value="<?php echo $_SESSION['categoria']; ?>"><br>
                    
                <button type="submit" name="mod">Modificar</button>
            </ul>
            </form>       
        </div>
    </div>
</body>
</html>