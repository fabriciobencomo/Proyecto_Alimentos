<main class="container crud">
    <h2 class="titulo-form">Update Info</h2>
    <a href="/admin" class="boton-verde">Back</a>

    <?php foreach($errores as $error): ?>
    <div class="alerta error">
        <?php echo $error; ?>
    </div>
    <?php endforeach; ?>

    <form method="POST" class="form container" enctype="multipart/form-data">
        <?php include __DIR__ . "/formulario.php"; ?>
        <input type="submit" value="Save Changes" class="boton-verde">
    </form>
</main>