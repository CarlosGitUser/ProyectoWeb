<?php 
    include 'header.php';
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';
?>
<style>
    .boton{
        display: flex;
        justify-content: center;
        align-items: center;
    }
    table {
        border-collapse: collapse;
        width: 100%;
        font-size: small;
    }

    th, td {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    th {
        background-color: #f2f2f2;
    }

    tr:nth-child(even) {
        background-color: #f9f9f9;
    }
    .enviar {
        background-color: #4caf50;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }
    .enviar:hover {
        background-color: #45a049;
    }
</style>
<script src="js/mostrarProductosAJAX.js"></script>
    <form action="php/alBase.php" enctype="multipart/form-data" method="post">
        <div>
            <label for="nombre">Nombre del Producto:</label>
            <input type="text" id="nombre" name="nombre" required>
        </div>
        <div>
            <label for="descripcion">Descripcion:</label>
            <input type="text" id="descripcion" name="descripcion" required>
        </div>
        <div>
            <label for="cantidad">Cantidad:</label>
            <input type="number" id="cantidad" name="cantidad" required>
        </div>
        <div>
            <label for="precio">Precio:</label>
            <input type="number" id="precio" name="precio" step="10.01" required>
        </div>
        <div>
            <label for="imagen">Imagen del producto:</label>
            <input type="file" id="imagen" name="imagen" accept="image/png, image/jpeg, image/jpg" required>
        </div>
        <div>
            <label for="descuento">Descuento:</label>
            <input type="number" id="descuento" name="descuento" required>
        </div>
        <div>
            <label>Categoría</label>
            <select name="categoria">
                <option value="pelicula">Películas</option>
                <option value="figura">Figuras de accion</option>
            </select>
        </div>
        <div>
            <input type="submit" value="Añadir">
        </div>
    </form>
    <div class="boton">
        <button onclick="mostrarProductos()" class="enviar">Mostrar Productos</button> 
    </div>
    <br><br><br>
    <div id="tablaProductos">
    </div>
    <br><br>
<?php
    include 'footer.php';
?>