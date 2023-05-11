<!DOCTYPE html>
<html>
<head>
    <title>get opdracjt</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        if (isset($_GET["naam"]) && isset($_GET["achternaam"]) && isset($_GET["leeftijd"]) && isset($_GET["adres"]) && isset($_GET["email"])) {
            $naam = $_GET["naam"];
            $achternaam = $_GET["achternaam"];
            $leeftijd = $_GET["leeftijd"];
            $adres = $_GET["adres"];
            $email = $_GET["email"];
            echo "<h2>Ingevoerde gegevens:</h2>";
            echo "Naam: " . $naam . "<br>";
            echo "Achternaam: " . $achternaam . "<br>";
        echo "Leeftijd: " . $leeftijd . "<br>";
        echo "Address: " . $adres . "<br>";
        echo "Email: " . $email . "<br>";
    }
    }
    ?>
    <form method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Naam: <input type="text" name="Naam"><br>
        Achternaam: <input type="text" name="Achternaam"><br>
        Leeftijd: <input type="text" name="Leeftijd"><br>
        Adres: <input type="text" name="Address"><br>
        Email: <input type="text" name="Email"><br>
        <input type="submit" value="Verzenden">
    </form>
</body>
</html>
