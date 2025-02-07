<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - E-Commerce</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <nav class="bg-white shadow-md p-5 flex justify-between items-center rounded-b-lg">
        <h1 class="text-2xl font-bold text-blue-600">
            <a href="/">
                Mon Site
            </a>
        </h1>

        <div>
            <a href="/connexion" class="px-4 py-2 text-blue-600">Connexion</a>
            <a href="/inscription" class="px-4 py-2 text-blue-600">Inscription</a>
            <a href="/contact" class="px-4 py-2 text-blue-600">Support</a>
        </div>
    </nav>
    <main>
        <header class="text-center my-10">
            <h2 class="text-4xl font-bold text-gray-800">Bienvenue sur notre boutique en ligne</h2>
            <p class="text-gray-600 mt-2">Découvrez nos produits de qualité et nos vendeurs de confiance.</p>
        </header>

        <section class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-6 p-6">
            <div class="bg-white p-6 shadow-md rounded-2xl text-center">
                <h3 class="text-xl font-semibold text-gray-700">Nos Produits</h3>
                <p class="text-gray-500">Parcourez notre catalogue varié.</p>
                <a href="produits.php" class="text-blue-500 mt-2 inline-block">Voir les produits →</a>
            </div>

            <div class="bg-white p-6 shadow-md rounded-2xl text-center">
                <h3 class="text-xl font-semibold text-gray-700">Gestion des Produits</h3>
                <p class="text-gray-500">Administrez votre boutique.</p>
                <a href="gestion_produits.php" class="text-blue-500 mt-2 inline-block">Accéder →</a>
            </div>

            <div class="bg-white p-6 shadow-md rounded-2xl text-center">
                <h3 class="text-xl font-semibold text-gray-700">Présentation des Vendeurs</h3>
                <p class="text-gray-500">Rencontrez nos vendeurs partenaires.</p>
                <a href="vendeurs.php" class="text-blue-500 mt-2 inline-block">Découvrir →</a>
            </div>
        </section>
    </main>
    <footer class="text-center p-4 mt-10 bg-white shadow-md rounded-t-2xl">
        <p class="text-gray-600">© 2024 Mon E-Commerce. Tous droits réservés.</p>
    </footer>
</body>

</html>