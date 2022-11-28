<?php
session_start();

// Per modificar el nom, cognoms i email al CV
$id = $_SESSION['user']['id'];
$user = $_SESSION['user'];
$nom = $user['nom'];
$cognoms = $user['cognoms'];
$email = $user['email'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/0787d9ec00.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="styles/global.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/global.css">
  <link rel="stylesheet" href="styles/cv.css">
  <title>Pràctica 4</title>
</head>


<body>
  <div class="headerGroc">
    <div class="holaNom"><?php echo 'Hola, ' . ($nom . ' ' . $cognoms) ?></div>
    <div class="iconos">
      <form action="./controller/logout.php" method="post">
        <button class="btn btn-outline-light" type="submit">Sortir</button>
      </form>
    </div>
  </div>

  <div class="todo">
    <div class="container">
      <div class="row">
        <div class="header">


        </div>
      </div>
      <div class="row2 d-flex">
        <div class="col col-5 col1">
          <!-- Columna esquerra -->
          <img class="img" src="avatar.png">

          <!-- Dades personals -->
          <div>
            <div class="titulo"><i class="fa-solid fa-angles-right"></i>Dades personals</div>
            <div>
              <ul>
                <li class="item_lista"><i class="fa-solid fa-user"></i><?php echo ($nom . ' ' . $cognoms) ?></li>
                <li class="item_lista"><i class="fa-solid fa-house"></i>Pl. Plaça Catalunya, 29</li>
                <li class="item_lista"><i class="fa-solid fa-at"></i> <?php echo ($email) ?> </li>
                <li class="item_lista"><i class="fa-solid fa-calendar"></i>16/09/2002</li>
                <li class="item_lista"><i class="fa-solid fa-flag"></i>Catalunya</li>
                <li class="item_lista"><i class="fa-solid fa-mobile"></i>937 76 54 32</li>
                <li class="item_lista"><i class="fa-solid fa-heart"></i>Sense parella</li>
                <li class="item_lista"><i class="fa-solid fa-car"></i>Classe B</li>
              </ul>
            </div>
          </div>

          <!-- Habilitats -->
          <div>
            <div class="titulo"><i class="fa-solid fa-angles-right"></i>Habilitats</div>
            <div>
              <div class="barraProgreso">
                <div class="col-6">Disciplina</div>
                <div class="col-6">
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>


              <div class="barraProgreso ">
                <div class="col-6">Paciència</div>
                <div class="col-6">
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>


              <div class="barraProgreso ">
                <div class="col-6">Visió de futur</div>
                <div class="col-6">
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>


              <div class="barraProgreso ">
                <div class="col-6">Habilitat numèrica</div>
                <div class="col-6">
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>


              <div class="barraProgreso ">
                <div class="col-6">Relacions públiques</div>
                <div class="col-6">
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>


            </div>
          </div>


          <!-- idiomas -->
          <div>
            <div class="titulo"><i class="fa-solid fa-angles-right"></i>Idiomes</div>
            <div>
              <div class="barraProgreso ">
                <div class="col-6">Castellà</div>
                <div class="col-6">
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>


              <div class="barraProgreso ">
                <div class="col-6">Català</div>
                <div class="col-6">
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>


              <div class="barraProgreso ">
                <div class="col-6">Anglès</div>
                <div class="col-6">
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>


              <div class="barraProgreso ">
                <div class="col-6">Francès</div>
                <div class="col-6">
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>


            </div>
          </div>

          <!-- Informática -->
          <div>
            <div class="titulo"><i class="fa-solid fa-angles-right"></i>Informàtica</div>
            <div>
              <div class="barraProgreso ">
                <div class="col-6">Python</div>
                <div class="col-6">
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 47%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>


              <div class="barraProgreso ">
                <div class="col-6">PHP</div>
                <div class="col-6">
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>


              <div class="barraProgreso ">
                <div class="col-6">Javascript</div>
                <div class="col-6">
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 10%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>


              <div class="barraProgreso ">
                <div class="col-6">Microsoft Word</div>
                <div class="col-6">
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>


              <div class="barraProgreso ">
                <div class="col-6">Microsoft Power Point</div>
                <div class="col-6">
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Competencies -->
          <div>
            <div class="titulo"><i class="fa-solid fa-angles-right"></i>Competencies</div>
            <div>
              <div>

                <ul>
                  <li class="item_lista"><i class="fa-solid fa-caret-right"></i>Comunicació</li>
                  <li class="item_lista"><i class="fa-solid fa-caret-right"></i>Traball en equip</li>

                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col col-1 col1"></div> <!-- Columna en blanc -->
        <div class="col col-6 col2">
          <!-- Columna de la dreta -->
          <!-- Apartat de perfil -->
          <div>
            <div class="titulo"><i class="fa-solid fa-angles-right"></i>Perfil</div>
            <div>
              <ul>
                <p>Experiència en diferents sectors informàtics i de disseny centrat en l'usuari. Les empreses que destaquen dins del meu perfil són Ubisoft, Micorsoft i Riot Games.</p>
                <div>
                  <!-- Apartat d'experiència laboral -->
                  <div class="titulo"><i class="fa-solid fa-angles-right"></i>Experiència laboral</div>
                  <div>

                    <div>
                      <div class="explicacion">
                        <div class="col-5">06/2022 - Actualitat</div>
                        <div class="col-7">
                          <span>Programació amb Python </span>
                          <p class="subtitulo">Ubisoft, Barcelona</p>
                          <span>Manteniment correctiu i evolutiu dels mòduls informàtics 3 i 4. Implementació de la Interface per al registre de la web i l'aplicació mòbil i del registe a través de sistemes Ubisoft.</span>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div>
                    <div class="explicacion">
                      <div class="col-5">08/2021-05/2022</div>
                      <div class="col-7">
                        <span>Disseny UX/UI</span>
                        <p class="subtitulo">Microsoft, Madrid</p>
                        <span>Disseny de la part UX/UI dins l'empresa, amb la col·laboració de l'equip de desenvolupament.</span>
                        <ul>
                          <li>Microsoft Word: Upgrade de versió 5.0 a 6.0 </li>
                          <li>Microsoft Power Point: Implementació ALL IN ONE </li>
                          <li>Microsoft Excel: Suport per a LATAM</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="explicacion">
                      <div class="col-5">01/2021 - 07/2021</div>
                      <div class="col-7">
                        <span>Disseny UX/UI</span>
                        <p class="subtitulo">Riot games, Barcelona</p>
                        <span>Consultor funcional de la empresa Riot Games, a la seu de Barcelona.</span>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Apartat d'estudis -->
                <div class="titulo"><i class="fa-solid fa-angles-right"></i>Estudis</div>
                <div>

                  <div>
                    <div class="explicacion">
                      <div class="col-5">09/2020 - Actualitat</div>
                      <div class="col-7">
                        <span>Comunicació Interactiva</span>
                        <p class="universidad">Universitat Autònoma de Barcelona (UAB)</p>
                        <span>Durant la meva formació, m'he capacitat per asessorar persones i empreses en les àrees d'informàtica i de disseny centrat en l'usuari, entre d'altres coses.
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
</body>

</html>