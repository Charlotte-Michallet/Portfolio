<section>
    <!-- Blog Article -->
    <div class="max-w-[85rem] px-4 sm:px-6 lg:px-8 mx-auto">
        <div class="grid lg:grid-cols-3 gap-y-8 lg:gap-y-0 lg:gap-x-6">
            <!-- Content -->
            <div class="order-last lg:col-span-2 mb-6">
                <div class="py-1 lg:py-6 lg:pe-8">
                    <div class="space-y-5 lg:space-y-8">

                        <h2 class="text-3xl font-bold lg:text-5xl">Projet : Bookeo - Bibliothèque Numérique &
                            Architecture MVC</h2>
                        <h3 class="text-xl font-semibold lg:text-2xl pt-5 pb-1">Projet d'étude : (Exercice) Graduate
                            Développeur
                            Web (Bac+2)</h3>

                    </div>
                    <h3 class="text-xl font-semibold lg:text-2xl pt-5 pb-1">Contexte :</h3>
                    <p class="text-lg pb-5">Conception d'une application de gestion de collection de livres, axée sur la
                        séparation des responsabilités et la sécurité des données.</p>

                    <figure>
                        <img class="w-3/4 object-cover rounded-xl mx-auto mt-3" src="/assets/img/bookeo/mvc.webp"
                            alt="Structure Modèle-Vue-Controleur">
                        <figcaption class="mt-3 text-sm text-center text-muted-foreground-1">
                            Structure MVC
                        </figcaption>
                    </figure>

                    <div class="space-y-5 lg:space-y-8">
                        <div class="space-y-3">
                            <h3 class="text-2xl font-semibold">Architecture Logicielle (Design Patterns) :</h3>

                            <p class="text-lg">L'objectif central de ce projet était d'implémenter une architecture
                                modulaire et découplée, utilisant le design pattern MVC pour garantir la maintenabilité
                                et l'évolutivité du code :</p>

                            <ul class="list-disc list-outside space-y-5 ps-5 text-lg">
                                <li class="ps-2"><b>Design Pattern MVC :</b> Séparation stricte entre la logique métier
                                    (Modèle), l'interface
                                    utilisateur (Vue) et la gestion des requêtes (Contrôleur).
                                </li>
                                <li class="ps-2"><b>Routing Centralisé :</b> Utilisation d'un point d'entrée unique
                                    (index.php) agissant comme un
                                    routeur pour diriger dynamiquement les actions via les variables $_GET.
                                </li>
                                <li class="ps-2"><b>Programmation Orientée Objet (POO) :</b> Manipulation des entités
                                    "Livre" et "Critique" à travers
                                    des classes, garantissant une maintenance facilitée et une logique métier claire.
                                </li>
                            </ul>

                        </div>

                        <figure>
                            <img class="w-3/4 object-cover rounded-xl mx-auto mt-3" src="/assets/img/bookeo/bookeo.webp"
                                alt="Structure Modèle-Vue-Controleur">
                            <figcaption class="mt-3 text-sm text-center text-muted-foreground-1">
                                Page d'accueil de Bookeo
                            </figcaption>
                        </figure>

                        <div class="space-y-3">
                            <h3 class="text-2xl font-semibold">Sécurité & Gestion des Données</h3>

                            <p class="text-lg">La fiabilité des échanges avec la base de données a été placée au centre
                                du développement.
                            </p>

                            <ul class="list-disc list-outside space-y-5 ps-5 text-lg">
                                <li class="ps-2"><b>Accès Data via PDO :</b> Utilisation de l'extension PHP Data Objects
                                    pour une interface d'accès aux données abstraite et performante.
                                </li>
                                <li class="ps-2"><b>Requêtes Préparées :</b> Protection systématique contre les
                                    injections SQL pour sécuriser les formulaires d'ajout et de suppression.
                                </li>
                                <li class="ps-2"><b>Gestion des Exceptions :</b> Mise en œuvre d'un système de capture
                                    d'erreurs pour assurer la continuité du service en cas d'anomalie SQL ou de
                                    connexion.
                                </li>
                            </ul>
                        </div>

                        <div class="space-y-3">
                            <h3 class="text-2xl font-semibold">Note de développement</h3>

                            <p class="text-lg">Le projet est actuellement focalisé sur la logique structurelle et
                                l'accès aux données. La prochaine phase de développement concerne l'implémentation
                                complète du système de critiques et l'authentification sécurisée.
                            </p>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div
                class="order-first lg:order-last lg:col-span-1 lg:w-full lg:h-full lg:bg-linear-to-r lg:from-background lg:via-transparent lg:to-transparent">
                <div class="sticky top-0 start-0 py-6 lg:ps-8">
                    <div class="group flex items-center gap-x-3 border-b border-line-2 pb-2 mb-4">
                        <img class="size-10 rounded-lg block shrink-0" src="/assets/img/bookeo/logo-bookeo.webp"
                            alt="logo">

                        <h5
                            class="group-hover:text-muted-foreground-2 group-focus:text-muted-foreground-2 text-sm font-semibold">
                            Ressources du Projet
                        </h5>
                    </div>

                    <div class="space-y-2">
                        <!-- Media -->
                        <div class="grow">
                            <a href="https://github.com/Charlotte-Michallet/bookeo" target="_blank"
                                class="flex flex-wrap gap-2 text-sm font-medium group-hover:text-primary-hover group-focus:text-primary-focus">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="21" height="21"
                                    viewBox="0,0,256,256">
                                    <g fill="#ececec" fill-rule="nonzero" stroke="none" stroke-width="1"
                                        stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                        stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                        font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                        <g transform="scale(8.53333,8.53333)">
                                            <path
                                                d="M15,3c-6.627,0 -12,5.373 -12,12c0,5.623 3.872,10.328 9.092,11.63c-0.056,-0.162 -0.092,-0.35 -0.092,-0.583v-2.051c-0.487,0 -1.303,0 -1.508,0c-0.821,0 -1.551,-0.353 -1.905,-1.009c-0.393,-0.729 -0.461,-1.844 -1.435,-2.526c-0.289,-0.227 -0.069,-0.486 0.264,-0.451c0.615,0.174 1.125,0.596 1.605,1.222c0.478,0.627 0.703,0.769 1.596,0.769c0.433,0 1.081,-0.025 1.691,-0.121c0.328,-0.833 0.895,-1.6 1.588,-1.962c-3.996,-0.411 -5.903,-2.399 -5.903,-5.098c0,-1.162 0.495,-2.286 1.336,-3.233c-0.276,-0.94 -0.623,-2.857 0.106,-3.587c1.798,0 2.885,1.166 3.146,1.481c0.896,-0.307 1.88,-0.481 2.914,-0.481c1.036,0 2.024,0.174 2.922,0.483c0.258,-0.313 1.346,-1.483 3.148,-1.483c0.732,0.731 0.381,2.656 0.102,3.594c0.836,0.945 1.328,2.066 1.328,3.226c0,2.697 -1.904,4.684 -5.894,5.097c1.098,0.573 1.899,2.183 1.899,3.396v2.734c0,0.104 -0.023,0.179 -0.035,0.268c4.676,-1.639 8.035,-6.079 8.035,-11.315c0,-6.627 -5.373,-12 -12,-12z">
                                            </path>
                                        </g>
                                    </g>
                                </svg>
                                Code source sur Github
                            </a>
                        </div>
                    </div>

                    <div class="mt-3">
                        <h3 class="text-lg font-semibold lg:text-xl pt-4 pb-2">Technologies utilisées :</h3>

                        <h3 class="font-medium lg:text-lg pb-3">Front-end</h3>
                        <div class="flex flex-wrap gap-2 lg:gap-4 mb-4">
                            <span
                                class="group inline-block rounded-full bg-linear-to-r from-[#00715E] via-[#008670] to-[#00DCBC] p-0.5 hover:text-white">
                                <span
                                    class="block rounded-full bg-[#1A1D22] px-4 py-3 text-sm group-hover:bg-transparent">
                                    HTML5
                                </span>
                            </span>

                            <span
                                class="group inline-block rounded-full bg-linear-to-r from-[#00715E] via-[#008670] to-[#00DCBC] p-0.5 hover:text-white">
                                <span
                                    class="block rounded-full bg-[#1A1D22] px-4 py-3 text-sm group-hover:bg-transparent">
                                    Bootstrap
                                </span>
                            </span>
                        </div>

                        <h3 class="font-medium lg:text-lg pb-3">Back-end</h3>

                        <div class="flex flex-wrap gap-2 lg:gap-4 mb-4">
                            <span
                                class="group inline-block rounded-full bg-linear-to-r from-[#00715E] via-[#008670] to-[#00DCBC] p-0.5 hover:text-white">
                                <span
                                    class="block rounded-full bg-[#1A1D22] px-4 py-3 text-sm group-hover:bg-transparent">
                                    PHP (POO, MVC)
                                </span>
                            </span>

                            <span
                                class="group inline-block rounded-full bg-linear-to-r from-[#00715E] via-[#008670] to-[#00DCBC] p-0.5 hover:text-white">
                                <span
                                    class="block rounded-full bg-[#1A1D22] px-4 py-3 text-sm group-hover:bg-transparent">
                                    MySQL
                                </span>
                            </span>
                        </div>

                        <h3 class="font-medium lg:text-lg pb-3">Architecture et infrastructure</h3>

                        <div class="flex flex-wrap gap-2 lg:gap-4 mb-4">

                            <span
                                class="group inline-block rounded-full bg-linear-to-r from-[#00715E] via-[#008670] to-[#00DCBC] p-0.5 hover:text-white">
                                <span
                                    class="block rounded-full bg-[#1A1D22] px-4 py-3 text-sm group-hover:bg-transparent">
                                    XAMPP
                                </span>
                            </span>
                        </div>

                    </div>
                </div>
            </div>
            <!-- End Sidebar -->
        </div>
    </div>
    <!-- End Blog Article -->
</section>