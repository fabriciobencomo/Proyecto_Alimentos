<div class="administrador">
<div class="barra-nav">
    <div class="option active">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="68" height="68" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2f2838" fill="none" stroke-linecap="round" stroke-linejoin="round">
        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
        <circle cx="12" cy="7" r="4" />
        <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
        </svg>
        <a href="/clientes"><h3>Customers</h3></a>
    </div>
    <div class="option">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-shopping-cart" width="68" height="68" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2f2838" fill="none" stroke-linecap="round" stroke-linejoin="round">
        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
        <circle cx="6" cy="19" r="2" />
        <circle cx="17" cy="19" r="2" />
        <path d="M17 17h-11v-14h-2" />
        <path d="M6 5l14 1l-1 7h-13" />
        </svg>
        <a href="/productos"><h3>Products</h3></a>
    </div>
    <div class="option">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-box-multiple" width="68" height="68" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2f2838" fill="none" stroke-linecap="round" stroke-linejoin="round">
        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
        <rect x="7" y="3" width="14" height="14" rx="2" />
        <path d="M17 17v2a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h2" />
        </svg>
        <a href="/tipos"><h3>Types</h3></a>
    </div>
    </div>
    <main class="container table">

        <h2 class="titulo-crud">Customers</h2>
        <a href="/clientes/crear" class="boton-verde">New Order</a>
            <table class="info-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Order</th>
                        <th>Price</th>
                        <th>Email</th>
                        <th>Date</th>
                        <th>Created</th>
                        <th>Actions</th>
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
                        <form method="POST" class="w-100" action="/clientes">
                            <input type="hidden" name="id" value="<?php echo $cliente->id?>">
                            <input type="hidden" name="tipo" value="cliente">
                            <input type="submit" class="boton-rojo-block" value="Delete">
                        </form>
                        <a href="/clientes/actualizar?id=<?php echo $cliente->id?>" class="boton-blanco">Update</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>


    </main>
</div>