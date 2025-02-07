<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex flex-col min-h-screen">

    <!-- Navbar -->
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

    <!-- Main content -->
    <main class="flex-grow flex flex-col justify-center items-center">
        <div class="bg-white p-8 shadow-md rounded-2xl w-full max-w-md">
            <h2 class="text-2xl font-bold text-gray-800 text-center mb-6">Créer un compte</h2>
            <form action="/inscription" method="POST" class="space-y-4">

                <!-- Nom d'utilisateur -->
                <div>
                    <label for="username" class="block text-sm font-semibold text-gray-700">Nom d'utilisateur :</label>
                    <input type="text" id="username" name="username" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>

                <!-- Email -->
                <div>
                    <label for="email" class="block text-sm font-semibold text-gray-700">Email :</label>
                    <input type="email" id="email" name="email" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>

                <!-- Mot de passe -->
                <div>
                    <label for="password" class="block text-sm font-semibold text-gray-700">Mot de passe :</label>
                    <input type="password" id="password" name="password" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>

                <!-- Bouton d'inscription -->
                <div>
                    <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-lg font-bold hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">S'inscrire</button>
                </div>
            </form>

            <!-- Lien vers la connexion -->
            <p class="text-gray-600 text-center mt-4">Déjà un compte ? <a href="login.php" class="text-blue-500">Se connecter</a></p>
        </div>
    </main>

    <!-- Footer -->
    <footer class="text-center p-4 mt-10 bg-white shadow-md rounded-t-2xl">
        <p class="text-gray-600">© 2024 Mon Site. Tous droits réservés.</p>
    </footer>

</body>

</html>