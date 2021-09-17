<div class="nosotros" id="nosotros">
    <div class="img-nosotros">
        <img src="/build/img/nosotros2.webp" alt="">
    </div>
    <div class="nosotros-content">
        <div class="container">
            <span class="titulos-span">About Us</span>
            <h2>Objective</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint facere ut vero magnam. Aut rem, cupiditate, laborum ullam ab harum et repudiandae asperiores dicta officiis aperiam cum ducimus aliquam consequatur!</p>
            <a href="#" class="boton-verde">Learn More</a>
        </div>
    </div>
</div>
<section class="productos" id="productos">
    <span class="titulos-span">Explore</span>
    <h2>Our Products</h2>
    <div class="container lista-productos">
        <?php foreach($tipos as $tipo): ?>
            <div class="producto">
                <img src="./imagenes/<?php echo $tipo->imagen;?>" alt="Producto">
                <div class="content-producto">
                    <h3><?php echo $tipo->nombre ?></h3>
                    <a href="Productos?id=<?php echo $tipo->id?>" class="boton-verde"><img src="./build/img/lupa.svg" alt=""></a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>
<section class="testimoniales">
    <span class="titulos-span">Testimonials</span>
    <h2>Our Customers</h2>
    <div class="testimoniales-content container">
        <div class="testimonial">
            <img src="./build/img/testimonio.webp" alt="">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem recusandae eaque, vel aliquam magnam non. Repellat adipisci quae odit natus earum maiores! Consectetur ea sed iusto voluptate! Explicabo, cupiditate adipisci!</p>
            <h3>Name</h3>
        </div>
        <div class="testimonial">
            <img src="./build/img/testimonio1.webp" alt="">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem recusandae eaque, vel aliquam magnam non. Repellat adipisci quae odit natus earum maiores! Consectetur ea sed iusto voluptate! Explicabo, cupiditate adipisci!</p>
            <h3>Name</h3>
        </div>
    </div>
</section>
<section class="contacto" id="contacto">
    <div class="contacto-content">
        <span class="titulos-span">Contact Us</span>
        <form action="/" method="POST" class="formulario container">
            <label for="">Full Name</label>
            <input type="text">
            <label for="">Email</label>
            <input type="text">
            <label for="">About</label>
            <input type="text">
            <label for="">Additional Details</label>
            <textarea name="" id="" cols="30" rows="10"></textarea>
            <input type="submit" class="boton-verde" value="Enviar">
        </form>
    </div>
    <div></div>
</section>


