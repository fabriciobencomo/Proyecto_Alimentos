<fieldset>
    <label for="nombre">Nombre</label>
    <input type="text" name="cliente[nombre]" placeholder="Nombre del Cliente" value="<?php echo s($cliente->nombre); ?>">

    <label for="pedido">Pedido</label>
    <textarea name="cliente[pedido]" id="" cols="30" rows="10"><?php echo s($cliente->pedido); ?></textarea>

    <label for="mail">Email</label>
    <input type="mail" name="cliente[email]" placeholder="Email@mail.com" value="<?php echo s($cliente->email); ?>">

    <label for="precio">Precio</label>
    <input type="number" name="cliente[precio]" value="<?php echo s($cliente->precio); ?>">

    <label for="fecha">Fecha de Entrega</label>
    <input type="date" name="cliente[fecha]" value="<?php echo s($cliente->fecha); ?>">

</fieldset>