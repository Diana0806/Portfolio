<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

   <!-- Primary Meta Tags -->

   <meta name="title" content="Diana Novikova - Portfolio">
   <meta name="description" content="Portfolio d'une designer UX/UI et d'une développeuse web débutante. Découvrez mes compétences en conception d'interfaces utilisateur et explorez mes premiers pas dans le développement web. Parcourez des projets variés et innovants pour voir comment je marie la créativité de l'UX/UI avec mes compétences émergentes de développeuse web afin de créer des expériences numériques uniques.">
   <meta name="keywords" content="coding, designer, UX designer, UI designer, UX/UI designer, web developer, Designer UX/UI, Développeur Web Junior, Figma, Adobe XD, GitHub, HTML, CSS, JavaScript, PHP, WordPress, Bootstrap, React, Symfony">
   <link rel="icon" href="./assets/images/logo.png" type="image/png">
  <link rel="stylesheet" type="text/css" href="./assets/style.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <title>Diana Novikova - Portfolio</title>
</head>

<body>
  <!-- <div class="container"> -->
  <header>
    <nav class="navbar navbar-expand-lg mb-3 d-flex justify-content-center">
      <div class="container row">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="col-4"></div>
        <div class="collapse navbar-collapse col-8" id="navbarNav">
          <ul class="container circleBehind navbar-nav d-flex justify-content-between w-100">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#profile">Mon profil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#competences">Mes compétences</a>
              <a class="nav-link" href="#mobcompetences" id="mobCompetencesLink" style="display: none;">Mes compétences (Mobile)</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#navalbumprojets">Mes projets</a>
            </li>
            <li class="nav-item">
              <a class="nav-link btn btn-primary" href="./assets/images/CV_Diana_Novikova.pdf" target="_blank">Télécharger mon CV</a>
            </li>
            <div class="cursor"></div>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <section class="socialmedia flex-column gap-4 align-items-center">
    <div class="line ps-2">
      <img src="./assets/images/line1.png" />
    </div>
    <div>
      <i class="sm-item">
        <a href="https://linkedin.com/in/diana-novikova-voskanyan-587210250" target="_blank">
          <img src="./assets/images/linkedin.png" width="48" height="48" loading="lazy" /></a>
      </i>
    </div>
    <div>
      <i class="sm-item">
        <a href="https://github.com/Diana0806" target="_blank">
          <img src="./assets/images/github.png" width="48" height="48" loading="lazy" /></a>
      </i>
    </div>
    <div>
      <i class="sm-item">
        <a href="https://www.behance.net/diananovikova4" target="_blank">
          <img src="./assets/images/behance.png" width="48" height="48" loading="lazy" /></a>
      </i>
    </div>
    <div class="line ps-2">
      <img src="./assets/images/line2.png" />
    </div>
  </section>

  <main class="container">
    <div id="profile" class="row profil-title">
      <div class="profile-height d-flex align-items-center">
        <div class="d-flex align-items-center gap-4 row w-100">
          <div class="col-sm-3 d-flex justify-content-center">
            <img src="./assets/images/avatar.png" class="img-fluid" alt="Bootstrap Themes" width="250" height="250" loading="lazy" />
          </div>
          <div class="profil col-sm-8">
            <h3 class="decode-text">
              <span class="text-animation">D</span>
              <span class="text-animation">i</span>
              <span class="text-animation">a</span>
              <span class="text-animation">n</span>
              <span class="text-animation">a</span>

              <span class="text-animation">N</span>
              <span class="text-animation">o</span>
              <span class="text-animation">v</span>
              <span class="text-animation">i</span>
              <span class="text-animation">k</span>
              <span class="text-animation">o</span>
              <span class="text-animation">v</span>
              <span class="text-animation">a</span>
            </h3>
            <p>Designer UX/UI & Développeur Web Junior</p>
          </div>
        </div>
      </div>
    </div>

    <div id="competences" class="row competences">
      <div class="d-flex align-items-center gap-4">
        <div id="navcompetences" class="dev col-md-7">
          <h2 class="featurette-heading animated-title">
            Développeur Web Junior
          </h2>
          <p class="lead animated-text">HTML</p>
          <p class="lead animated-text">CSS</p>
          <p class="lead animated-text">JavaScript</p>
          <p class="lead animated-text">PHP</p>
          <p class="lead animated-text">GitHub</p>
          <p class="lead animated-text">WordPress</p>
          <p class="lead animated-text">Bootstrap</p>
          <p class="lead animated-text">React</p>
          <p class="lead animated-text">Symfony</p>
        </div>
        <div class="ux text-end col-md-5">
          <h2 class="featurette-heading animated-title">Designer UX/UI</h2>
          <p class="lead animated-text">Figma</p>
          <p class="lead animated-text">Adobe XD</p>
          <p class="lead animated-text">Miro</p>
        </div>
      </div>

      <div class="softskills text-center container d-flex justify-content-center" id="soft">
        <h2>Soft Skills :</h2>
        <div>
          <span class="skills">
            <p>Créativité</p>
            <p>Empathie</p>
            <p>Travail en équipe</p>
            <p>Sens de la communication</p>
            <p>Persévérance</p>
          </span>
        </div>
      </div>
    </div>

    <div id="mobcompetences" class="row mobcompetences">
     <div class="mobdev col">
          <h4 class="featurette-heading animated-title">Développeur Web Junior</h4>
          <p>HTML</p>
          <p>CSS</p>
          <p>JavaScript</p>
          <p>PHP</p>
          <p>GitHub</p>
          <p>WordPress</p>
          <p>Bootstrap</p>
          <p>React</p>
          <p>Symfony</p>
     </div>
     <div class="mobux col text-end">
          <h4 class="featurette-heading animated-title">Designer UX/UI</h4>
          <p>Figma</p>
          <p>Adobe XD</p>
          <p>Miro</p>
      </div>
      <div class="mobux col text-start">
          <h4 class="featurette-heading animated-title">Soft Skills</h4>
          <p>Créativité</p>
            <p>Empathie</p>
            <p>Travail en équipe</p>
            <p>Sens de la communication</p>
            <p>Persévérance</p>
     </div>
    </div>

    <div id="projets">
      <div id="navalbumprojets" class="projets py-5 text-center container">
        <h2 class="fw-light">Mes Projets</h2>
      </div>

      <div  class="albumprojets">
        <div class="container">

          <div class="items">
            <?php
            $items = [
              ['t' => 'The Mountain', 'i' => 'assets/images/ProjectMountain.png', 'link' => 'https://diana-mountain.projets.garage404.com/'],
              ['t' => 'Luxury Services', 'i' => 'assets/images/ProjectLuxuryServices.png', 'link' => 'http://diana-luxury-services.projets.garage404.com/'],
              ['t' => 'Comparoperator', 'i' => 'assets/images/ProjectComparoperator.png', 'link' => 'https://diana-comparoperator.projets.garage404.com/'],
              ['t' => 'ZOO', 'i' => 'assets/images/ProjectZOO.png', 'link' => 'https://diana-zoo.projets.garage404.com/'],
              ['t' => 'Combat', 'i' => 'assets/images/ProjectCombat.png', 'link' => 'https://diana-combat.projets.garage404.com/'],
              ['t' => 'Yellow', 'i' => 'assets/images/ProjectYellow.png', 'link' => 'https://diana-yellow.projets.garage404.com/'],
              ['t' => 'QUIZ', 'i' => 'assets/images/ProjectQUIZ.png', 'link' => 'https://diana-quiz.projets.garage404.com/'],
              // ['t' => 'The Man', 'i' => 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/9473/i-man.png'],
              // ['t' => 'D', 'i' => 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/9473/i-d.png'],
            ];


            foreach ($items as $index => $item) { ?>
              <div class="item">
                <a href="<?php echo $item['link'] ?>" target="_blank">
                  <svg viewBox="0 0 300 200" preserveAspectRatio="xMidYMid slice">
                    <defs>
                      <clipPath id="clip-<?php echo $index; ?>">
                        <circle cx="0" cy="0" r="150px" fill="#000"></circle>
                      </clipPath>
                    </defs>
                    <text class="svg-text" x="50%" y="50%" dy=".3em"><?php echo $item['t']; ?></text>
                    <g clip-path="url(#clip-<?php echo $index; ?>)">
                      <image href="<?php echo $item['i']; ?>" width="100%" height="100%" preserveAspectRatio="xMidYMid slice" class="img-projects" />

                      <text class="svg-masked-text" x="50%" y="50%" dy=".3em"><?php echo $item['t']; ?></text>
                    </g>
                  </svg>
                </a>
              </div>
            <?php } ?>
          </div>

        </div>
      </div>
    </div>
  </main>

  <footer class="text-body-secondary py-5">
    <div class="container">
      <p class="float-end mb-1">
        <a href="#profile" id="scrollToTop">
          <span class="scroll-icon">▲</span>
        </a>
      </p>
      <p class="mb-1">
        Contact <span class="email-icon">✉</span> diananovak871@gmail.com
      </p>
    </div>

    <!-- socialmedia-horizontal elements for mob version -->
    <section class="socialmedia-horizontal">
    <div class="sm-hor col">
      <div>
        <i class="sm-item">
          <a href="https://linkedin.com/in/diana-novikova-voskanyan-587210250" target="_blank">
            <img src="./assets/images/linkedin.png" width="48" height="48" loading="lazy" />
          </a>
        </i>
      </div>
      <div>
        <i class="sm-item">
          <a href="https://github.com/Diana0806" target="_blank">
            <img src="./assets/images/github.png" width="48" height="48" loading="lazy" /></a>
        </i>
      </div>
      <div>
        <i class="sm-item">
          <a href="https://www.behance.net/diananovikova4" target="_blank">
            <img src="./assets/images/behance.png" width="48" height="48" loading="lazy" /></a>
        </i>
      </div>
    </div>
    </section>
  </footer>

  <script src="./assets/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>