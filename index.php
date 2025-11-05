<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculatrice PHP</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>      
    <h1>Calculatrice en PHP</h1>
    <form method="post" action="">
        <input type="text" name="num1" step="any" required placeholder="Premier nombre">
        <input type="text" name="num2" step="any" required placeholder="Deuxième nombre">
        <select name="operation" required>
            <option value="add">Addition (+)</option>
            <option value="subtract">Soustraction (-)</option>
            <option value="multiply">Multiplication (×)</option>
            <option value="divide">Division (÷)</option>
        </select>
        <button type="submit">Calculer</button>
    </form>

</body>
</html> 

<?php 
if (isset($_POST['num1'], $_POST['num2'], $_POST['operation'])) {
    $num1 = floatval($_POST['num1']);
    $num2 = floatval($_POST['num2']);
    $operation = $_POST['operation'];
    $result = null;

    switch ($operation) {
        case 'add':
            $result = $num1 + $num2;
            break;
        case 'subtract':
            $result = $num1 - $num2;
            break;
        case 'multiply':
            $result = $num1 * $num2;
            break;
        case 'divide':
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                $result = "Erreur : Division par zéro.";
            }
            break;
        default:
            $result = "Opération non valide.";
    }
    echo "<h2>Résultat : $result</h2>";
}
?>




