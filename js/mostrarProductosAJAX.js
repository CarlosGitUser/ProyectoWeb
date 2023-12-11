function mostrarProductos() {
    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            // Manejar la respuesta del servidor
            var data = JSON.parse(this.responseText);
            mostrarTabla(data);
        }
    };

    xmlhttp.open("GET", "php/obtenerTabla.php", true);
    xmlhttp.send();
}

function mostrarTabla(data) {
    // Lógica para presentar los datos en una tabla HTML
    var tabla = "<table border='1'>";
    tabla += "<tr><th>ID</th><th>Nombre</th><th>Descripción</th><th>Cantidad</th><th>Precio</th><th>imagen</th><th>Descuento</th><th>Categoria</th></tr>";

    for (var i = 0; i < data.length; i++) {
        tabla += "<tr>";
        tabla += "<td>" + data[i].id_prod + "</td>";
        tabla += "<td>" + data[i].nombre_prod + "</td>";
        tabla += "<td>" + data[i].descripcion + "</td>";
        tabla += "<td>" + data[i].cantidad + "</td>";
        tabla += "<td>" + data[i].precio + "</td>";
        tabla += "<td>" + data[i].imagen + "</td>";
        tabla += "<td>" + data[i].descuento + "</td>";
        tabla += "<td>" + data[i].categoria + "</td>";
        tabla += "</tr>";
    }

    tabla += "</table>";
    document.getElementById("tablaProductos").innerHTML = tabla;
}