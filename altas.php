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
        
    <br><br>
<?php

    include 'footer.php';
?>