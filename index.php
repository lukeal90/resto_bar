<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />
  <link rel="stylesheet" href="style.css" />
  <link href="https://fonts.googleapis.com/css2?family=Sofia&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" />
  <link href="//db.onlinewebfonts.com/c/544da55955a950deb15d6a7536c4da34?family=Brandon+Grotesque+Regular"
    rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
  <meta name="description" content="Ciudad 17 resto bar moderno , especialista en hamburguesas y picadas, cerveza tirada ,tragos y licores, con reservas , promociones
    y descuentos para grupo de amigos" />
  <meta name="keywoards"
    content="Ciudad 17, hamburguesas gigantes, tragos , cerveza tirada, cerveza artesanal, amigos y birra, bar, resto, bar resto, mejor hamburguesas" />
  <title>Ciudad 17 - Resto Bar</title>
</head>

<body>
  <header id="header-logo">
    <a href="index.php" id="logo-redirect">
      <img id="logo" src="./images/logo.png" alt="" />
    </a>
  </header>

  <nav id="nav-menu">
    <ul class="nav-menu-ul">
      <li>
        <a href="index.php">Inicio</a>
      </li>
      <li class="divider"></li>
      <li>
        <a href="menu.html">Menu</a>
      </li>
      <li class="divider"></li>
      <li>
        <a href="reservas.html">Reservas</a>
      </li>
      <li class="divider"></li>
      <li>
        <a href="#Promos">Promos</a>
      </li>
      <li class="divider"></li>
      <li>
        <a href="locales.html">Locales</a>
      </li>
      <li class="divider"></li>
      <li>
        <a href="nosotros.html">Nosotros</a>
      </li>
    </ul>
  </nav>

  <div class="dropdown show">
    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
      aria-haspopup="true" aria-expanded="false">
    </a>

    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
      <a class="dropdown-item" href="index.html">Inicio</a>
      <a class="dropdown-item" href="menu.html">Menu</a>
      <a class="dropdown-item" href="reservas.html">Reservas</a>
      <a class="dropdown-item" href="promos.html">Promos</a>
      <a class="dropdown-item" href="locales.html">Locales</a>
      <a class="dropdown-item" href="nosotros.html">Nosotros</a>
    </div>
  </div>

  <section id="carrousel">
    <!-- Aca va a ir el carrousel -->
  </section>

  <a name="Promos"></a>
  <section class="promos shake1">
    <div class="div1"></div>
    <div class="div2"></div>
    <div class="div3"></div>
    <div class="div4"></div>
    <div class="div5"></div>
  </section>

  <a name="Promos"></a>
  <section class="promos shake2">
    <div class="div6"></div>
    <div class="div7"></div>
    <div class="div8"></div>
    <div class="div9"></div>
    <div class="div10"></div>
  </section>

  <footer>
    <ul class="footer-list">
      <li>
        Contacto
        <div class="contacto-footer">
          <p>Tel: 44455-666</p>
          <p>ciudad17bar@c17.com.ar</p>
        </div>
      </li>

      <li>
        Redes
        <div class="links">
          <a href="#">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="#">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="#">
            <i class="fab fa-instagram"></i>
          </a>
        </div>
      </li>

      <li>
        Mapa
        <div>
          <iframe id="mapa"
            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d13148.118863074013!2d-58.520116349999995!3d-34.527475100000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2sar!4v1618685170333!5m2!1ses-419!2sar"
            width="300" height="200" style="border: 0" allowfullscreen="" loading="lazy"></iframe>
        </div>
      </li>

      <li>
        Horarios

        <table class="table-schedule" cellpadding="1">
          <tbody>
            <tr>
              <td>&nbsp;L</td>
              <td>&nbsp; 10 am - 24 pm</td>
            </tr>
            <tr>
              <td>&nbsp;M</td>
              <td>&nbsp; 10 am - 24 pm</td>
            </tr>
            <tr>
              <td>&nbsp;M</td>
              <td>&nbsp;&nbsp;10 am - 24 pm</td>
            </tr>
            <tr>
              <td>&nbsp;J</td>
              <td>&nbsp;&nbsp;10 am - 24 pm</td>
            </tr>
            <tr>
              <td>&nbsp;V</td>
              <td>&nbsp; 10 am - 04 am</td>
            </tr>
            <tr>
              <td>&nbsp;S</td>
              <td>&nbsp;&nbsp;10 am - 04 am</td>
            </tr>
            <tr>
              <td>&nbsp;D</td>
              <td>&nbsp;&nbsp;10 am - 04 am</td>
            </tr>
          </tbody>
        </table>
      </li>
    </ul>

    <div class="footer-text">
      <p>&copy; Ciudad 17 Bar - 2021 | Todos los derechos reservados.</p>
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>

  <script src="js.js"></script>
</body>

</html>