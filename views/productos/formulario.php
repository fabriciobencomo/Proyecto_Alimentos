<fieldset>
    <label for="nombre">Name</label>
    <input type="text" name="producto[nombre]" placeholder="Nombre del Producto" value="<?php echo s($producto->nombre); ?>">

    <label for="mail">Price</label>
    <input type="number" name="producto[precio]" value="<?php echo s($producto->precio); ?>">

    <label for="imagen">Image</label>
    <input type="file" id="imagen" accept="image/jpeg, image/png" name="producto[imagen]">

    <label for="descripcion">Description</label>
    <textarea id="descripcion" name="producto[descripcion]"><?php echo s($producto->descripcion); ?></textarea>

    <label for="cantidad">Quantity</label>
    <input type="number" id="cantidad" name="producto[cantidad]" min="0" max="99" value="<?php echo s($producto->cantidad); ?>">

    <label for="tipo">Product Type</label>
    <select name="producto[tipoId]" id="tipo">
                <option value="" disabled selected>----Select-----</option>
                <?php foreach($tipos as $tipo): ?>
                    <option <?php echo $producto->tipoId === $tipo->id ? 'selected' : ''; ?> value="<?php echo s($tipo->id)?>"> <?php echo s($tipo->nombre)?> </option>
                <?php endforeach; ?>
    </select>
</fieldset>