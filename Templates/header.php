<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- favicon -->
  <link rel="shortcut icon" href="assets/img/logo/logo_c.png" type="image/x-icon">

  <link rel="stylesheet" href="/assets/css/overridecss.css">

  <!-- links for tailwind -->
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

  <title>Portfolio Charlotte Michallet-Ferrier</title>
</head>

<body>
  <header>
    <div class="mx-auto flex h-20 max-w-7xl items-center gap-8 px-4 sm:px-6">

      <div class="flex flex-1 items-center justify-between">
        <a class="block" href="/index.php?controller=pages&action=home">
          <img src="<?php ROOT_PATH ?>/assets/img/logo/logo_c.png" alt="logo" class="h-22 w-22">
        </a>
        <nav aria-label="Global" class="block">
          <ul class="flex items-center gap-6 text-sm">
            <li>
              <a class="transition hover:text-gray-700/75" href="/index.php?controller=pages&action=aboutme"> A propos
                de moi </a>
            </li>

            <li>
              <a class="transition hover:text-gray-500/75" href="/index.php?controller=pages&action=projects">Mes
                projets</a>
            </li>

            <li>
              <a class="transition hover:text-gray-500/75" href="index.php?controller=pages&action=contact"> Contact
              </a>
            </li>
          </ul>
        </nav>

        <div class="flex items-center gap-4">
          <div class="sm:flex sm:gap-4">
            <a class="block rounded-md bg-teal-600 px-5 py-2.5 text-sm font-medium text-white transition hover:bg-teal-700"
              target="_blank" href="/Uploads/CV Charlotte Michallet-Ferrier développeuse full stack.pdf">
              Voir CV

            </a>

            <a class="hidden rounded-md bg-gray-100 px-5 py-2.5 text-sm font-medium text-teal-600 transition hover:text-teal-600/75 sm:block"
              href="#">
              Télécharger CV
            </a>
          </div>

          <button class="block rounded-sm bg-gray-100 p-2.5 text-gray-600 transition hover:text-gray-600/75 md:hidden">
            <span class="sr-only">Toggle menu</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
              stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
          </button>
        </div>
      </div>
    </div>
  </header>
  <main>