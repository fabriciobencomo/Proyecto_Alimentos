<div class="administrador">
<div class="barra-nav">
    <div class="option">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-home-2" width="68" height="68" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2f2838" fill="none" stroke-linecap="round" stroke-linejoin="round">
        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
        <polyline points="5 12 3 12 12 3 21 12 19 12" />
        <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
        <rect x="10" y="12" width="4" height="4" />
        </svg>
        <a href="/admin"><h3>Home</h3></a>
    </div>
    <div class="option">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="68" height="68" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2f2838" fill="none" stroke-linecap="round" stroke-linejoin="round">
        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
        <circle cx="12" cy="7" r="4" />
        <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
        </svg>
        <a href="/clientes"><h3>Customers</h3></a>
    </div>
    <div class="option active">
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
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-box-multiple" width="68" height="68" viewBox="0 0 24 24" stroke-width="1.5" stroke="#7f5345" fill="none" stroke-linecap="round" stroke-linejoin="round">
        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
        <rect x="7" y="3" width="14" height="14" rx="2" />
        <path d="M17 17v2a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h2" />
        </svg>
        <a href="/secciones"><h3>Types</h3></a>
    </div>
    </div>
    <main class="container">
        

        <h2 class="titulo-crud">Products</h2>
        <a href="/productos/crear" class="boton-verde">New Product</a>
            <table class="info-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Availability</th>
                        <th>Price</th>
                        <th>Img</th>
                        <th>Description</th>
                        <th>Quantity</th>
                        <th>type</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($productos as $producto): ?>
                    <tr>
                        <td><?php echo $producto->id; ?></td>
                        <td><?php echo $producto->nombre; ?></td>
                        <td><?php echo $producto->disponibilidad; ?></</td>
                        <td><?php echo $producto->precio; ?></td>
                        <<td><img class="imagen-tabla" src="/imagenes/<?php echo $producto->imagen; ?>" alt="Item"></td>
                        <td><?php echo $producto->descripcion; ?></td>
                        <td><?php echo $producto->Tipo; ?></td>
                        <td>
                        <form method="POST" class="w-100" action="/clientes/eliminar">
                            <input type="hidden" name="id" value="<?php echo $producto->id?>">
                            <input type="submit" class="boton-rojo-block" value="Delete">
                        </form>
                        <a href="/productos/actualizar?id=<?php echo $producto->id?>" class="boton-amarillo-block">Update</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>


    </main>
</div>