<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubicacion</title>
  <link rel="stylesheet" href="./src/styles/index.css">
</head>
<body>

    <header class="header">
      <h1 class="header__title">ch3ber Wash</h1>
      <nav class="header__nav">
        <ul class="header__nav-list">
          <li><a class="nav-link" href="./index.php">Inicio</a></li>
          <li><a class="nav-link" href="./about.php">Acerca de</a></li>
          <li><a class="nav-link header__active-link" href="./location.php">Ubicacion</a></li>
          <li><a class="nav-link" href="./prices.php">Precios</a></li>
          <li><a class="nav-link" href="./form.php">Reservar</a></li>
        </ul>
      </nav>
    </header>

    <main class="container location">
      <section class="location__left">
        <h2 class="location__title">Visita Nuestro Local</h2>
        <p class="margin-b">Abierto lunes a viernes de 8:00h a 19:00h</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, ipsum ullam! Explicabo facere, praesentium nostrum enim dignissimos debitis expedita? Error quae repellat voluptates quia minima debitis iusto aliquam illum vitae?</p>
        <h2 class="location__title">Contacto</h2>
        <div class="location__contact">
          <div>
            <h3 class="margin-b">Telefonos</h3>
            <ul>
              <li>+52 123 412 345</li>
              <li>+52 123 412 345</li>
              <li>+52 123 412 345</li>
            </ul>
          </div>
          <div>
            <h3 class="margin-b">Correo Electronico</h3>
            <ul>
              <li>example@gmail.com</li>
              <li>example@gmail.com</li>
              <li>example@gmail.com</li>
            </ul>
          </div>
        </div>
      </section>
      <div class="location__right">
        <iframe class="location__map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14382.695149086803!2d-100.32140073022464!3d25.682106300000008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86629585d240e669%3A0x415d418245318415!2sCar%20Wash%20Express!5e0!3m2!1ses-419!2smx!4v1648269715141!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </main>


</body>
</html>