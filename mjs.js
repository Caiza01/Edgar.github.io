<script>
    function calcularTabla() {
        Let valor = parseInt(prompt("ingrese el numero de la tabla"))
        for (let f = 1; f <= 10; f++) {
            Let tabla = f * valor;
            document.write(f + " * "+ valor + " = " + tabla + '<br>')
        }
    }
    calcularTabla();

</script>