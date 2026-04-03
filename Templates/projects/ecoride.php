<section>
    <!-- Blog Article -->
    <div class="max-w-[85rem] px-4 sm:px-6 lg:px-8 mx-auto">
        <div class="grid lg:grid-cols-3 gap-y-8 lg:gap-y-0 lg:gap-x-6">
            <!-- Content -->
            <div class="order-last lg:col-span-2 mb-6">
                <div class="py-1 lg:py-6 lg:pe-8">
                    <div class="space-y-5 lg:space-y-8">

                        <h2 class="text-3xl font-bold lg:text-5xl">Projet : EcoRide - Plateforme de
                            covoiturage Eco-responsable</h2>
                        <h3 class="text-xl font-semibold lg:text-2xl pt-5 pb-1">Projet d'étude : Graduate Développeur
                            Web (Bac+2)</h3>

                    </div>
                    <h3 class="text-xl font-semibold lg:text-2xl pt-5 pb-1">Contexte :</h3>
                    <p class="text-lg pb-5">EcoRide est une application web dynamique mettant en relation
                        conduteur et passagers pour des trajets exclusivement français. L'objectif est de réduire
                        l'empreinte carbone tout en proposant une solution de mobilité économique.</p>
                    <div class="space-y-5 lg:space-y-8">
                        <div class="text-center">
                            <div class="grid lg:grid-cols-2 gap-3">
                                <div class="grid grid-cols-2 lg:grid-cols-1 gap-3">
                                    <figure class="relative w-full h-60">
                                        <img class="size-full absolute top-0 start-0 object-cover rounded-xl"
                                            src="/assets/img/ecoride/covoiturage.webp" alt="page covoiturage">
                                    </figure>
                                    <figure class="relative w-full h-60">
                                        <img class="size-full absolute top-0 start-0 object-cover rounded-xl"
                                            src="/assets/img/ecoride/admin.webp" alt="page d'accueil EcoRide">
                                    </figure>
                                </div>
                                <figure class="relative w-full h-72 sm:h-96 lg:h-full">
                                    <img class="size-full absolute top-0 start-0 object-cover rounded-xl"
                                        src="/assets/img/ecoride/Site_ecoride.webp" alt="tableau bord administrateur">
                                </figure>
                            </div>

                            <span class="mt-3 block text-sm text-center text-muted-foreground-1">
                                Images du site Ecoride
                            </span>
                        </div>

                        <div class="space-y-3">
                            <h3 class="text-2xl font-semibold">Les fonctionnalités développées :</h3>

                            <p class="text-lg">L'application EcoRide a été conçue pour répondre aux besoins de 5 types
                                d'utilisateur distincts :</p>

                            <ul class="list-disc list-outside space-y-5 ps-5 text-lg">
                                <li class="ps-2"><b>Admin :</b> Dashboard de statistiques
                                    et gestion des comptes employés et utilisateurs.
                                </li>
                                <li class="ps-2"><b>Employés :</b> Modération des avis passagers.
                                </li>
                                <li class="ps-2"><b>Conducteur :</b> Création de trajets et annulation avec notification
                                    par mail aux passagers.
                                </li>
                                <li class="ps-2"><b>Passager :</b> Recherche de trajets avec filtres multicritères,
                                    réservation et annulation de trajets.
                                </li>
                                <li class="ps-2"><b>Visiteur :</b> Recherche et consultation de trajets avec filtres.
                                </li>
                            </ul>

                            <p class="text-lg">Chaque rôle dispose d'un système d'authentification sécurisé et de droits
                                d'accès spécifiques gérés côté serveur.</p>
                        </div>

                        <figure>
                            <img class="w-3/4 object-cover rounded-xl mx-auto" src="/assets/img/ecoride/notion.webp"
                                alt="tableau kanban">
                            <figcaption class="mt-3 text-sm text-center">
                                Tableau Kanban
                            </figcaption>
                        </figure>

                        <div class="space-y-3">
                            <h3 class="text-2xl font-semibold">Gestion projet et méthodologie</h3>

                            <p class="text-lg">Pour ce projet, j'ai adopté une approche Agile. À partir des User Stories
                                (création de compte, réservation...), j'ai structuré le développement via un tableau
                                Kanban sur Notion. <br>
                                Cette organisation m'a permis de piloter les priorités et de suivre l'état d'avancement
                                (Pas commencé, En cours, Terminé) en temps réel, garantissant le respect de la deadline.
                            </p>
                        </div>

                        <div class="space-y-3">
                            <h3 class="text-2xl font-semibold">Architecture et Conception</h3>

                            <p class="text-lg"> Avant de coder, j'ai modélisé l'intelligence de l'application :
                            </p>

                            <ul class="list-disc list-outside space-y-5 ps-5 text-lg">
                                <li class="ps-2"> <b>Diagramme de Cas d'Utilisation :</b> Pour définir les interactions
                                    des 5 rôles (Admin, Employé, etc.).
                                </li>
                                <li class="ps-2"> <b>Diagramme de Séquence :</b> Pour tracer la logique des échanges de
                                    données.
                                </li>
                                <li class="ps-2"> <b>MCD (Modèle Conceptuel de Données) : </b> Une structure robuste
                                    incluant les entités Users, Car_sharing, Reservations, et Feedbacks.
                                </li>

                            </ul>
                        </div>

                        <div class="space-y-3">
                            <h3 class="text-2xl font-semibold">Déploiement</h3>

                            <p class="text-lg"> Passage en production incluant la configuration de l'environnement
                                serveur et l'adaptation de l'infrastructure aux besoins du projet. Plusieurs
                                problématiques de déploiement ont été résolues avec succès.
                            </p>

                        </div>

                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div
                class="order-first lg:order-last lg:col-span-1 lg:w-full lg:h-full lg:bg-linear-to-r lg:from-background lg:via-transparent lg:to-transparent">
                <div class="sticky top-0 start-0 py-4 lg:py-6  lg:ps-8">
                    <div class="group flex items-center gap-x-3 border-b border-line-2 pb-2 mb-4">
                        <img class="size-10 rounded-lg block shrink-0" src="/assets/img/ecoride/form.webp" alt="logo">

                        <h5
                            class="group-hover:text-muted-foreground-2 group-focus:text-muted-foreground-2 text-sm font-semibold">
                            Ressources du Projet
                        </h5>
                    </div>

                    <div class="space-y-2">
                        <!-- Media -->
                        <div class="grow">
                            <a href="https://cutt.ly/ecoride-covoiturage" target="_blank"
                                class="flex flex-wrap gap-2 text-sm font-medium group-hover:text-primary-hover group-focus:text-primary-focus">
                                <img class="size-5 rounded-lg block shrink-0" src="/assets/img/ecoride/form.webp"
                                    alt="logo">
                                Site EcoRide
                            </a>
                        </div>

                        <!-- Media -->
                        <div class="grow">
                            <a href="https://github.com/Charlotte-Michallet/EcoRide" target="_blank"
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

                        <!-- Media -->
                        <div class="grow">
                            <a href="https://www.figma.com/design/5hcygFrfZqcjmaMbrGpiQ8/EcoRide?node-id=0-1&p=f&t=9Jz0s7HcAsylj1FD-0"
                                target="_blank"
                                class="flex flex-wrap gap-2 text-sm font-medium group-hover:text-primary-hover group-focus:text-primary-focus">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="21" height="21"
                                    viewBox="0,0,256,256">
                                    <g fill="#ececec" fill-rule="nonzero" stroke="none" stroke-width="1"
                                        stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                        stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                        font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                        <g transform="scale(5.12,5.12)">
                                            <path
                                                d="M25,2v14h-7c-3.855,0 -7,-3.145 -7,-7c0,-3.855 3.145,-7 7,-7zM25,18v14h-7c-3.855,0 -7,-3.145 -7,-7c0,-3.855 3.145,-7 7,-7zM25,34v7c0,3.855 -3.145,7 -7,7c-3.855,0 -7,-3.145 -7,-7c0,-3.855 3.145,-7 7,-7zM41,9c0,3.855 -3.145,7 -7,7h-7v-14h7c3.855,0 7,3.145 7,7zM34,18c-3.86599,0 -7,3.13401 -7,7c0,3.86599 3.13401,7 7,7c3.86599,0 7,-3.13401 7,-7c0,-3.86599 -3.13401,-7 -7,-7z">
                                            </path>
                                        </g>
                                    </g>
                                </svg>
                                Maquettes sur Figma
                            </a>
                        </div>
                        <!-- End Media -->
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
                                    Tailwind CSS
                                </span>
                            </span>

                            <span
                                class="group inline-block rounded-full bg-linear-to-r from-[#00715E] via-[#008670] to-[#00DCBC] p-0.5 hover:text-white">
                                <span
                                    class="block rounded-full bg-[#1A1D22] px-4 py-3 text-sm group-hover:bg-transparent">
                                    JavaScript
                                </span>
                            </span>

                            <span
                                class="group inline-block rounded-full bg-linear-to-r from-[#00715E] via-[#008670] to-[#00DCBC] p-0.5 hover:text-white">
                                <span
                                    class="block rounded-full bg-[#1A1D22] px-4 py-3 text-sm group-hover:bg-transparent">
                                    Leaflet.js
                                </span>
                            </span>

                            <span
                                class="group inline-block rounded-full bg-linear-to-r from-[#00715E] via-[#008670] to-[#00DCBC] p-0.5 hover:text-white">
                                <span
                                    class="block rounded-full bg-[#1A1D22] px-4 py-3 text-sm group-hover:bg-transparent">
                                    Chart.js
                                </span>
                            </span>

                            <span
                                class="group inline-block rounded-full bg-linear-to-r from-[#00715E] via-[#008670] to-[#00DCBC] p-0.5 hover:text-white">
                                <span
                                    class="block rounded-full bg-[#1A1D22] px-4 py-3 text-sm group-hover:bg-transparent">
                                    HeiGIT
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
                                    PHPMailer
                                </span>
                            </span>

                            <span
                                class="group inline-block rounded-full bg-linear-to-r from-[#00715E] via-[#008670] to-[#00DCBC] p-0.5 hover:text-white">
                                <span
                                    class="block rounded-full bg-[#1A1D22] px-4 py-3 text-sm group-hover:bg-transparent">
                                    MySQL
                                </span>
                            </span>

                            <span
                                class="group inline-block rounded-full bg-linear-to-r from-[#00715E] via-[#008670] to-[#00DCBC] p-0.5 hover:text-white">
                                <span
                                    class="block rounded-full bg-[#1A1D22] px-4 py-3 text-sm group-hover:bg-transparent">
                                    MongoDB
                                </span>
                            </span>
                        </div>

                        <h3 class="font-medium lg:text-lg pb-3">Architecture et infrastructure</h3>

                        <div class="flex flex-wrap gap-2 lg:gap-4 mb-4">

                            <span
                                class="group inline-block rounded-full bg-linear-to-r from-[#00715E] via-[#008670] to-[#00DCBC] p-0.5 hover:text-white">
                                <span
                                    class="block rounded-full bg-[#1A1D22] px-4 py-3 text-sm group-hover:bg-transparent">
                                    Notion
                                </span>
                            </span>
                            <span
                                class="group inline-block rounded-full bg-linear-to-r from-[#00715E] via-[#008670] to-[#00DCBC] p-0.5 hover:text-white">
                                <span
                                    class="block rounded-full bg-[#1A1D22] px-4 py-3 text-sm group-hover:bg-transparent">
                                    Docker
                                </span>
                            </span>

                            <span
                                class="group inline-block rounded-full bg-linear-to-r from-[#00715E] via-[#008670] to-[#00DCBC] p-0.5 hover:text-white">
                                <span
                                    class="block rounded-full bg-[#1A1D22] px-4 py-3 text-sm group-hover:bg-transparent">
                                    Figma
                                </span>
                            </span>

                            <span
                                class="group inline-block rounded-full bg-linear-to-r from-[#00715E] via-[#008670] to-[#00DCBC] p-0.5 hover:text-white">
                                <span
                                    class="block rounded-full bg-[#1A1D22] px-4 py-3 text-sm group-hover:bg-transparent">
                                    Nominatim
                                </span>
                            </span>

                            <span
                                class="group inline-block rounded-full bg-linear-to-r from-[#00715E] via-[#008670] to-[#00DCBC] p-0.5 hover:text-white">
                                <span
                                    class="block rounded-full bg-[#1A1D22] px-4 py-3 text-sm group-hover:bg-transparent">
                                    Alwaysdata
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