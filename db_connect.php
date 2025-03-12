<?php
$servername = "localhost";
$username = "root";  // Nom d'utilisateur par défaut de MySQL
$password = "";      // Mot de passe par défaut (vide)
$dbname = "portfolio_db";  // Le nom de ta base de données

// Créer la connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("La connexion a échoué: " . $conn->connect_error);
}
//echo "Connexion réussie";  // Optionnel pour vérifier que la connexion fonctionne
?>