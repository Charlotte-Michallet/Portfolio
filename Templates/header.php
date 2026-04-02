<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- favicon -->
  <link rel="shortcut icon" href="assets/img/logo/logo_c.webp" type="image/x-icon">

  <link rel="stylesheet" href="/assets/css/overridecss.css">

  <!-- links for tailwind -->
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

  <!-- link JavaScript -->
  <script type="module" src="/assets/javascript/index.js"></script>

  <title><?= htmlspecialchars($meta['title']) ?></title>
  <meta name="description" content="<?= htmlspecialchars($meta['description']) ?>">
  <meta name="robots" content="<?= !empty($meta['robots']) ? $meta['robots'] : 'index, follow' ?>">

  <meta property="og:type" content="website">
  <meta property="og:title" content="<?= htmlspecialchars($meta['ogtitle']) ?>">
  <meta property="og:description" content="<?= htmlspecialchars($meta['ogdescription']) ?>">
  <meta property="og:image"
    content="https://ton-portfolio.fr/assets/img/og/<?= !empty($meta['image']) ? $meta['image'] : 'home.png' ?>">

</head>

<body>
  <header>
    <div class="block md:flex md:justify-around items-center gap-8 mx-5 md:mx-10 lg:mx-20">

      <div class="flex flex-1 items-center flex-wrap gap-3 justify-center md:justify-between pt-3">
        <a href="/index.php">
          <img src="<?php ROOT_PATH ?>/assets/img/logo/logo_c.webp" alt="logo"
            class="h-16 w-16 lg:h-22 lg:w-22 object-contain">
        </a>

        <nav class=" flex" role="navigation" aria-label="menu principal">
          <ul class="flex items-center gap-6 text-sm md:text-base lg:text-lg">
            <li>
              <a class="transition hover:text-[#00DCBC]" href="/index.php?controller=pages&action=aboutme">A propos
                de moi </a>
            </li>

            <li>
              <a class="transition hover:text-[#00DCBC]" href="/index.php?controller=projects&action=allprojects">Mes
                projets</a>
            </li>

            <li>
              <a class="transition hover:text-[#00DCBC]" href="index.php?controller=pages&action=contact">Contact</a>
            </li>

          </ul>
        </nav>

        <div class="flex items-center gap-4 text-lg mt-3 md:mt-0">
          <div class="flex gap-4">
            <a class="block inline-flex items-center gap-2 rounded-md bg-[#01756e] px-3 py-1 lg:px-5 lg:py-1.5 text-xs lg:text-sm font-medium transition hover:bg-[#00a59a] focus:ring-2 focus:ring-yellow-400 focus:outline-hidden"
              target="_blank" href="/assets/doc/CV_Charlotte_Developpeuse_fullstack.pdf">
              Consulter le CV
            </a>
            <!--   -->
            <a class="block inline-flex items-center gap-2 rounded-md bg-[#ECECEC] px-3 py-1 lg:px-5 lg:py-1.5 text-xs lg:text-sm font-medium text-[#01756e] transition hover:text-[#00a59a]/75 hover:bg-[#e4e4e4]"
              href="/assets/doc/CV_Charlotte_Developpeuse_fullstack.pdf"
              download="/assets/doc/CV_Charlotte_Developpeuse_fullstack.pdf">
              Télécharger le CV
            </a>
          </div>

        </div>
      </div>
    </div>
  </header>
  <main>