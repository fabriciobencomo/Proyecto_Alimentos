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
                        <li class="item-list"><?php echo $producto->nombre?></li>
                    <?php endif; ?>
                <?php endforeach;?>
            </ul>
        </div>
    </div>
</div>
</main>