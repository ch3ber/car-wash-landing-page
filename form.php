<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reservacion</title>
  <link rel="stylesheet" href="./src/styles/index.css">
</head>
<body>

    <header class="header">
      <h1 class="header__title">ch3ber Wash</h1>
      <nav class="header__nav">
        <ul class="header__nav-list">
          <li><a class="nav-link" href="./index.php">Inicio</a></li>
          <li><a class="nav-link" href="./about.php">Acerca de</a></li>
          <li><a class="nav-link" href="./location.php">Ubicacion</a></li>
          <li><a class="nav-link" href="./prices.php">Precios</a></li>
          <li><a class="nav-link header__active-link" href="./form.php">Reservar</a></li>
        </ul>
      </nav>
    </header>

    <div class="container--reservation">
      <div class="container">
        <main class="reservation">
  
          <form class="form" method="post" action="notification.php">
            <legend class="form__legend">LLena los campos y has tu reservacion</legend>
            <div class="form__fields">
              
              <div class="form__filed">
                <label for="name">Nombre Completo</label>
                <input class="form__input" type="text" name="name" placeholder="Nombre" id="name" require>
              </div>

              <div class="form__filed">
                <label for="number">Telefono</label>
                <input class="form__input" type="tel" name="number" placeholder="Numero de telefono" id="number" require>
              </div>

              <div class="form__filed">
                <label for="enrollment">Matricula</label>
                <input class="form__input" type="text" name="enrollment" placeholder="Matricula" id="enrollment" require>
              </div>

              <div class="form__filed">
                <label for="model">Modelo de auto</label>
                <input class="form__input" type="text" name="model" placeholder="Modelo" id="model" require>
              </div>

              <div class="form__filed">
                <label for="services">Servicio</label>
                <select class="form__input form__input--last form__select" name="services" id="services">
                  <option value="#" selected disabled>--- seleccionar ---</option>  
                  <option value="complete">Completo => 600mx</option>
                  <option value="fastClear">Limpieza rapida => 450mx</option>
                  <option value="outClear">Lavado exterior => 349mx</option>
                  <option value="innerClear">Lavado interior => 299mx</option>
                </select>
              </div>
  
            </div>
            <input class="button form__submit" type="submit" value="Enviar">
          </form>
  
          <img src="./src/assets/ilustration-form.svg" alt="some cars">
        </main>
      </div>
    </div>

</body>
</html>