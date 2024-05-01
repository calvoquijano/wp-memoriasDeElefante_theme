<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <link rel="icon" type="image/x-icon" href="<?php echo IMAGELEFANTE; ?>/icons/logotipo.ico" />
    <title>Calvo Quijano</title>

    <?php wp_head(); ?>

    
  </head>
  <body>
    <header>

        <nav class="navbar navbar-expand-lg menu-calvo sticky-top">
          <div class="container-fluid">
            <a class="navbar-brand" href="index.html"
              ><img style="max-width: 200px; margin: 5px" src="<?php echo IMAGELEFANTE; ?>/logo/logotipo_calvo.svg"
            /></a>
            <button
              class="navbar-toggler menu-hamburguesa"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav col-lg-8 d-flex">
                <li class="nav-item dropdown mx-0 mx-lg-1">
                  <a
                    class="nav-link dropdown-toggle btn btn-general btn-menu-nav mb-2 mb-lg-0"
                    href="#"
                    role="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                  >
                    Lo que hago
                  </a>
                  <ul class="dropdown-menu dropdown-nav-submenu">
                    <li>
                      <a class="dropdown-item btn btn-general btn-menu-nav" href="ux-ui.html"
                        >UX | UI</a
                      >
                    </li>
                    <li>
                      <a class="dropdown-item btn btn-general btn-menu-nav" href="web.html"
                        >Desarrollador Web</a
                      >
                    </li>
                    <li>
                      <a class="dropdown-item btn btn-general btn-menu-nav" href="animacion-2d.html"
                        >Animador 2D</a
                      >
                    </li>
                    <li><hr class="dropdown-divider" /></li>
                    <li>
                      <a
                        class="dropdown-item btn btn-general btn-menu-nav mb-2 mb-lg-0"
                        href="otros.html"
                        >¿Qué más hago?</a
                      >
                    </li>
                  </ul>
                </li>
                <li class="nav-item mb-2 mb-lg-0 mx-0 mx-lg-1">
                  <a class="nav-link btn btn-general btn-menu-nav" href="quien-soy.html"
                    >Quien soy</a
                  >
                </li>
                <li class="nav-item mb-2 mb-lg-0 mx-0 mx-lg-1">
                  <a class="nav-link btn btn-general btn-menu-nav" href="#"
                    >BlogeRino</a
                  >
                </li>
              </ul>
              <div class="d-flex justify-content-around col-lg-4">
                <a class="nav-link p-2" href="#"><img src="<?php echo IMAGELEFANTE; ?>/icons/calamar.svg" alt="Calamar Creativo"/></a>
                <a class="nav-link p-2" href="https://www.youtube.com/channel/UCqT90Rw3GaHw7MMPeggKABw" target="_blank"><img src="<?php echo IMAGELEFANTE; ?>/icons/mantis.svg" alt="Cámaramantis"/></a>
                <a class="nav-link p-2" href="https://www.linkedin.com/in/andresdavidquijano/" target="_blank"><img src="<?php echo IMAGELEFANTE; ?>/icons/linkedin.svg" alt="LinkedIn Andrés Quijano"/></a>
                <a class="nav-link p-2" href="https://www.behance.net/calvoquijano" target="_blank"><img src="<?php echo IMAGELEFANTE; ?>/icons/behance.svg" alt="Behance Andrés Quijano"/></a>
                <a class="nav-link p-2" href="https://github.com/calvoquijano" target="_blank"><img src="<?php echo IMAGELEFANTE; ?>/icons/simple-icons_github.svg" alt="GitHub Andrés Quijano"/></a>
              </div>
            </div>
          </div>
        </nav>
    </header>
    <main>