<main class="container crud">
    <h2 class="titulo-form">New Order</h2>
    <a href="/clientes" class="boton-verde">Back</a>

    <?php foreach($errores as $error): ?>
    <div class="alerta error boton-blanco">
        <?php echo $error; ?>
    </div>
    <?php endforeach; ?>

    <form action="/clientes/crear" method="POST" class="form container">
        <?php include __DIR__ . "/formulario.php"; ?>
        <input type="submit" value="New Order" class="boton-verde">
    </form>
</main>