<main class="container crud">
    <h2 class="titulo-form">New Product</h2>
    <a href="/productos" class="boton-verde">Back</a>

    <?php foreach($errores as $error): ?>
    <div class="alerta error boton-blanco">
        <?php echo $error; ?>
    </div>
    <?php endforeach; ?>

    <form action="/productos/crear" method="POST" class="form container" enctype="multipart/form-data">
        <?php include __DIR__ . "/formulario.php"; ?>
        <input type="submit" value="New Product" class="boton-verde">
    </form>
</main>