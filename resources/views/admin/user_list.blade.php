@extends('layout.template')
@section('title', "Les utilisateurs")

@section('contenu')
<?php
// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "donavis";

$conn = new mysqli($servername, $username, $password, $dbname);

// Vérification de la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Requête pour récupérer les utilisateurs
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

// Vérification des résultats et affichage
if ($result->num_rows > 0) {
    echo "<ul>";
    while($row = $result->fetch_assoc()) {
        echo "<li>" . $row["nom"] . " - " . $row["prenom"] . " - " . $row["email"] . "</li>";
    }
    echo "</ul>";
} else {
    echo "Aucun utilisateur trouvé dans la base de données.";
}

// Fermeture de la connexion
$conn->close();
?>

@endsection
