<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>
<body>
    <h1>Nous Contacter</h1>
    <form action="/contact" method="POST">
        <label for="nom">Nom d'utilisateur :</label>
        <input type="text" id="nom" name="nom" required>
        
        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required>
        
        <label for="message">Message :</label>
        <input type="message" id="message" name="message" required>
        
        <button type="submit">S'inscrire</button>
    </form>
</body>
</html>
