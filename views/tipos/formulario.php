<fieldset>
    <label for="nombre">Name</label>
    <input type="text" name="seccion[nombre]" value="<?php echo s($seccion->nombre); ?>">

    <label for="imagen">Image</label>
    <input type="file" id="imagen" accept="image/jpeg, image/png" name="seccion[imagen]">

</fieldset>