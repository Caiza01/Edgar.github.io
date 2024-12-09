<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo de objeto Unifranz</title>
</head>
<body>
    <script>
        var x;
        x = 5;
        document.write(x + "<br>"); // Imprime el valor de x en la página

        let y;
        y = 9.2;
        document.write(y + "<br>"); // Imprime el valor de y en la página

        var bool = false;
        document.write(bool + "<br>"); // Imprime el valor de bool en la página


        var unifranz = {sede: "el alto",estudiantes: 1500 };

        document.write("Sede: " + unifranz.sede + "<br>"); 
        document.write("Estudiantes: " + unifranz.estudiantes + "<br>");
    </script>
</body>
</html>
