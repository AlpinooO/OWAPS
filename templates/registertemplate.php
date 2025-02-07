<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - E-Commerce</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex flex-col min-h-screen">
    <nav class="bg-white shadow-md p-5 flex justify-between items-center rounded-b-l">
        <h1 class="text-2xl font-bold text-blue-600">Mon E-Commerce</h1>
        <div>
            <a href="index.php" class="px-4 py-2 text-blue-600">Accueil</a>
            <a href="login.php" class="px-4 py-2 text-blue-600">Connexion</a>
            <a href="support.php" class="px-4 py-2 text-blue-600">Support</a>
        </div>
    </nav>
    <main class="flex-grow flex flex-col justify-center items-center">
        <div class="bg-white p-8 shadow-md rounded-2xl w-full max-w-md">
            <h2 class="text-2xl font-bold text-gray-800 text-center mb-6">Créer un compte</h2>
            <form action="register_process.php" method="POST" class="space-y-4">
                <input type="text" name="name" placeholder="Nom" class="w-full p-3 border border-gray-300 rounded-lg" required>
                <input type="email" name="email" placeholder="Email" class="w-full p-3 border border-gray-300 rounded-lg" required>
                <input type="password" name="password" placeholder="Mot de passe" class="w-full p-3 border border-gray-300 rounded-lg" required>
                <input type="password" name="confirm_password" placeholder="Confirmer le mot de passe" class="w-full p-3 border border-gray-300 rounded-lg" required>
                <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-lg font-bold">S'inscrire</button>
            </form>
            <p class="text-gray-600 text-center mt-4">Déjà un compte ? <a href="login.php" class="text-blue-500">Se connecter</a></p>
        </div>
    </main>
    <footer class="text-center p-4 mt-10 bg-white shadow-md rounded-t-2xl">
        <p class="text-gray-600">© 2024 Mon E-Commerce. Tous droits réservés.</p>
    </footer>
</body>

</html>
