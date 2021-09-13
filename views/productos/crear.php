<main class="container crud">
    <h2 class="titulo-form">Nuevo Producto</h2>
    <a href="/admin" class="boton-verde">Volver</a>

    <?php foreach($errores as $error): ?>
    <div class="alerta error">
        <?php echo $error; ?>
    </div>
    <?php endforeach; ?>

    <form action="/productos/crear" method="POST" class="form container">
        <?php include __DIR__ . "/formulario.php"; ?>
        <input type="submit" value="Nuevo Producto" class="boton-verde">
    </form>
</main>