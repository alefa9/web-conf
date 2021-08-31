<?php include_once 'includes/templates/header.php'; ?>

<section class="seccion contenedor">
  <h2>La mejor conferencia de diseño web en español</h2>
  <p>Duis a vehicula velit, eu aliquet sem. Nullam vulputate rutrum augue, at hendrerit turpis vestibulum et. Proin
    finibus tincidunt nunc. Vivamus facilisis, magna at venenatis varius, orci erat mollis lacus, et finibus mauris
    diam in ipsum. Pellentesque non felis bibendum, pulvinar leo quis, venenatis metus.</p>
</section>

<section class="programa">
  <div class="contenedor-video">
    <video poster="img/bg-talleres.jpg" autoplay muted loop>
      <source src="video/video.mp4" type="video/mp4">
      <source src="video/video.ogv" type="video/ogv">
      <source src="video/video.webm" type="video/webm">
    </video>
  </div>
  <!--contenedor-video-->
  <div class="contenido-programa">
    <div class="contenedor">
      <div class="programa-evento">
        <h2>Programa del evento</h2>
        <nav class="menu-programa">
          <a href="#talleres"><i class="fas fa-code"></i> Talleres</a>
          <a href="#conferencias"><i class="fas fa-comment"></i> Conferencias</a>
          <a href="#seminarios"><i class="fas fa-university"></i> Seminarios</a>
        </nav>

        <div id="talleres" class="info-curso ocultar clearfix">
          <div class="detalle-evento">
            <h3>HTML5, CSS3 y JavaScript</h3>
            <p><i class="fas fa-clock"></i> 16:00 hs</p>
            <p><i class="fas fa-calendar"></i> 10 de Dic</p>
            <p><i class="fas fa-user"></i> Alejo Manuel Farías</p>
          </div>


          <div class="detalle-evento">
            <h3>Responsive Web Design</h3>
            <p><i class="fas fa-clock"></i> 20:00 hs</p>
            <p><i class="fas fa-calendar"></i> 10 de Dic</p>
            <p><i class="fas fa-user"></i> Alejo Manuel Farías</p>
          </div>
        </div> <!-- Talleres-->

        <div id="conferencias" class="info-curso ocultar clearfix">
          <div class="detalle-evento">
            <h3>Como ser freelancer</h3>
            <p><i class="fas fa-clock"></i> 10:00 hs</p>
            <p><i class="fas fa-calendar"></i> 10 de Dic</p>
            <p><i class="fas fa-user"></i> Gregorio Sánchez</p>
          </div>


          <div class="detalle-evento">
            <h3>Tecnologías del futuro</h3>
            <p><i class="fas fa-clock"></i> 17:00 hs</p>
            <p><i class="fas fa-calendar"></i> 10 de Dic</p>
            <p><i class="fas fa-user"></i> Susan Sánchez</p>
          </div>
        </div> <!-- Conferencias -->

        <div id="seminarios" class="info-curso ocultar clearfix">
          <div class="detalle-evento">
            <h3>Diseño UX/UI para móviles</h3>
            <p><i class="fas fa-clock"></i> 17:00 hs</p>
            <p><i class="fas fa-calendar"></i> 11 de Dic</p>
            <p><i class="fas fa-user"></i> Harold García</p>
          </div>


          <div class="detalle-evento">
            <h3>Aprende a programar en una mañana</h3>
            <p><i class="fas fa-clock"></i> 10:00 hs</p>
            <p><i class="fas fa-calendar"></i> 11 de Dic</p>
            <p><i class="fas fa-user"></i> Susana Rivera</p>
          </div>
        </div> <!-- Seminarios -->

        <a href="#" class="button float-right">Ver todos</a>

      </div> <!-- programa-evento -->
    </div> <!-- contenedor -->
  </div> <!-- contenido-programa -->
</section> <!-- programa -->

<section class="invitados contenedor seccion">
  <h2>Nuestros Invitados</h2>
  <ul class="lista-invitados clearfix">
    <li>
      <div class="invitado">
        <img src="img/invitado1.jpg" alt="Imagen Invitado">
        <p>Rafael Bautista</p>
      </div>
    </li>

    <li>
      <div class="invitado">
        <img src="img/invitado2.jpg" alt="Imagen Invitado">
        <p>Shari Herrera</p>
      </div>
    </li>

    <li>
      <div class="invitado">
        <img src="img/invitado3.jpg" alt="Imagen Invitado">
        <p>Gregorio Sánchez</p>
      </div>
    </li>

    <li>
      <div class="invitado">
        <img src="img/invitado4.jpg" alt="Imagen Invitado">
        <p>Susana Rivera</p>
      </div>
    </li>

    <li>
      <div class="invitado">
        <img src="img/invitado5.jpg" alt="Imagen Invitado">
        <p>Harold García</p>
      </div>
    </li>

    <li>
      <div class="invitado">
        <img src="img/invitado6.jpg" alt="Imagen Invitado">
        <p>Susan Sánchez</p>
      </div>
    </li>
  </ul>
</section>

<div class="contador parallax">
  <div class="contenedor">
    <ul class="resumen-evento clearfix">
      <li>
        <p class="numero"></p> Invitados
      </li>
      <li>
        <p class="numero"></p> Talleres
      </li>
      <li>
        <p class="numero"></p> Días
      </li>
      <li>
        <p class="numero"></p> Conferencias
      </li>
    </ul>
  </div>
</div>

<section class="precios seccion">
  <h2>Precios</h2>
  <div class="contenedor">
    <ul class="lista-precios clearfix">
      <li>
        <div class="tabla-precio">
          <h3>Pase por día</h3>
          <p class="numero">$30</p>
          <ul>
            <li><i class="fas fa-check"></i> Bocadillos Gratis</li>
            <li><i class="fas fa-check"></i> Todas las conferencias</li>
            <li><i class="fas fa-check"></i> Todos los talleres</li>
          </ul>
          <a href="#" class="button hollow">Comprar</a>
        </div>
      </li>

      <li>
        <div class="tabla-precio">
          <h3>Todos los días</h3>
          <p class="numero">$50</p>
          <ul>
            <li><i class="fas fa-check"></i> Bocadillos Gratis</li>
            <li><i class="fas fa-check"></i> Todas las conferencias</li>
            <li><i class="fas fa-check"></i> Todos los talleres</li>
          </ul>
          <a href="#" class="button">Comprar</a>
        </div>
      </li>

      <li>
        <div class="tabla-precio">
          <h3>Pase por 2 días</h3>
          <p class="numero">$45</p>
          <ul>
            <li><i class="fas fa-check"></i> Bocadillos Gratis</li>
            <li><i class="fas fa-check"></i> Todas las conferencias</li>
            <li><i class="fas fa-check"></i> Todos los talleres</li>
          </ul>
          <a href="#" class="button hollow">Comprar</a>
        </div>
      </li>
    </ul>
  </div>
</section>

<div id="mapa" class="mapa"></div>

<section class="seccion">
  <h2>Testimoniales</h2>
  <div class="testimoniales contenedor clearfix">
    <div class="testimonial">
      <blockquote>
        <p>Aenean volutpat, dolor et imperdiet tempor, tortor arcu egestas sapien, id ornare augue tortor sed arcu.
          Pellentesque nibh turpis, dapibus vel semper a, vulputate a risus.</p>
        <footer class="info-testimonial clearfix">
          <img src="img/testimonial.jpg" alt="Imagen Testimonial">
          <cite>Osvaldo Aponte Escobedo <span>Diseñador en @Prisma</span></cite>
        </footer>
      </blockquote>
    </div> <!-- testimonial-->

    <div class="testimonial">
      <blockquote>
        <p>Aenean volutpat, dolor et imperdiet tempor, tortor arcu egestas sapien, id ornare augue tortor sed arcu.
          Pellentesque nibh turpis, dapibus vel semper a, vulputate a risus.</p>
        <footer class="info-testimonial clearfix">
          <img src="img/testimonial.jpg" alt="Imagen Testimonial">
          <cite>Osvaldo Aponte Escobedo <span>Diseñador en @Prisma</span></cite>
        </footer>
      </blockquote>
    </div> <!-- testimonial-->

    <div class="testimonial">
      <blockquote>
        <p>Aenean volutpat, dolor et imperdiet tempor, tortor arcu egestas sapien, id ornare augue tortor sed arcu.
          Pellentesque nibh turpis, dapibus vel semper a, vulputate a risus.</p>
        <footer class="info-testimonial clearfix">
          <img src="img/testimonial.jpg" alt="Imagen Testimonial">
          <cite>Osvaldo Aponte Escobedo <span>Diseñador en @Prisma</span></cite>
        </footer>
      </blockquote>
    </div> <!-- testimonial-->
  </div>
</section>

<div class="newsletter parallax">
  <div class="contenido contenedor">
    <p>Regístrate el newsletter</p>
    <h3>BsAsWebCamp</h3>
    <a href="#" class="button transparente">Registro</a>
  </div> <!-- contenido -->
</div> <!-- newsletter -->

<section class="seccion">
  <h2>Faltan</h2>
  <div class="cuenta-regresiva">
    <ul class="clearfix">
      <li>
        <p id="dias" class="numero"></p> días
      </li>
      <li>
        <p id="horas" class="numero"></p> horas
      </li>
      <li>
        <p id="minutos" class="numero"></p> minutos
      </li>
      <li>
        <p id="segundos" class="numero"></p> segundos
      </li>
    </ul>
  </div>
</section>

<?php include_once 'includes/templates/footer.php'; ?>