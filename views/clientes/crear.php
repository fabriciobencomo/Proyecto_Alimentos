<main class="container crud">
    <h2 class="titulo-form">Nuevo Pedido</h2>
    <a href="/admin" class="boton-verde">Volver</a>

    <?php foreach($errores as $error): ?>
    <div class="alerta error">
        <?php echo $error; ?>
    </div>
    <?php endforeach; ?>

    <form action="/clientes/crear" method="POST" class="form container">
        <?php include __DIR__ . "/formulario.php"; ?>
        <input type="submit" value="Nuevo Pedido" class="boton-verde">
    </form>
</main>