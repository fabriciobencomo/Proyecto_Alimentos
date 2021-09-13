<div class="administrador">
<div class="barra-nav">
    <div class="option">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-home" width="68" height="68" viewBox="0 0 24 24" stroke-width="1.5" stroke="#7f5345" fill="none" stroke-linecap="round" stroke-linejoin="round">
        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
        <polyline points="5 12 3 12 12 3 21 12 19 12" />
        <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
        <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
        </svg>
        <a href="/admin"><h3>Home</h3></a>
    </div>
    <div class="option active">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="68" height="68" viewBox="0 0 24 24" stroke-width="1.5" stroke="#7f5345" fill="none" stroke-linecap="round" stroke-linejoin="round">
        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
        <circle cx="12" cy="7" r="4" />
        <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
        </svg>
        <a href="/clientes"><h3>Clientes</h3></a>
    </div>
    <div class="option">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-shopping-cart" width="68" height="68" viewBox="0 0 24 24" stroke-width="1.5" stroke="#7f5345" fill="none" stroke-linecap="round" stroke-linejoin="round">
        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
        <circle cx="6" cy="19" r="2" />
        <circle cx="17" cy="19" r="2" />
        <path d="M17 17h-11v-14h-2" />
        <path d="M6 5l14 1l-1 7h-13" />
        </svg>
        <a href="/productos"><h3>Productos</h3></a>
    </div>
    <div class="option">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-box-multiple" width="68" height="68" viewBox="0 0 24 24" stroke-width="1.5" stroke="#7f5345" fill="none" stroke-linecap="round" stroke-linejoin="round">
        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
        <rect x="7" y="3" width="14" height="14" rx="2" />
        <path d="M17 17v2a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h2" />
        </svg>
        <a href="/secciones"><h3>Secciones</h3></a>
    </div>
    </div>
    <main class="container table">

        <h2 class="titulo-crud">Clientes</h2>
        <a href="/clientes/crear" class="boton-verde">Nuevo Pedido</a>
            <table class="info-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Pedido</th>
                        <th>Precio</th>
                        <th>Email</th>
                        <th>Fecha</th>
                        <th>Creado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($clientes as $cliente): ?>
                    <tr>
                        <td><?php echo $cliente->id; ?></td>
                        <td><?php echo $cliente->nombre; ?></td>
                        <td><?php echo $cliente->pedido; ?></</td>
                        <td><?php echo $cliente->precio; ?></td>
                        <td><?php echo $cliente->email; ?></td>
                        <td><?php echo $cliente->fecha; ?></td>
                        <td><?php echo $cliente->creado; ?></td>
                        <td>
                        <form method="POST" class="w-100" action="/clientes/eliminar">
                            <input type="hidden" name="id" value="<?php echo $cliente->id?>">
                            <input type="hidden" name="tipo" value="cliente">
                            <input type="submit" class="boton-rojo-block" value="Eliminar">
                        </form>
                        <a href="/clientes/actualizar?id=<?php echo $cliente->id?>" class="boton-amarillo-block">Actualizar</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>


    </main>
</div>