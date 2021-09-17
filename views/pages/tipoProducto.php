<main class="producto-page">
<div class="nosotros" id="nosotros">
    <div class="img-nosotros">
        <img src="./imagenes/<?php echo $seccion->imagen ?>" alt="Producto">
    </div>
    <div class="nosotros-content">
        <div class="container">
            <span class="titulos-span">List</span>
            <h2><?php echo $seccion->nombre ?></h2>
            <ul>
                <?php foreach($productos as $producto):?>
                    <?php if($producto->tipoId === $seccion->id): ?>
                        <a href="/productos-item"><li><?php echo $producto->nombre?></li></a>
                    <?php endif; ?>
                <?php endforeach;?>
            </ul>
        </div>
    </div>
</div>
</main>