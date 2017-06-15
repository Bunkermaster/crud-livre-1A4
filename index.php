<?php
/**
 * Created by PhpStorm.
 * @author Yann Le Scouarnec <bunkermaster@gmail.com>
 * Date: 15/06/2017
 * Time: 11:57
 */
// chargement de la configuration
require_once __DIR__."/conf.php";
// connexion à la base de données
require_once APP_DIR_INC."connect.php";
// requete de liste des livres
$sql = "SELECT `id`, `titre`, `resume` FROM `livre`;";
// preparation requete
$stmt = $pdo->prepare($sql);
// execution requete
$stmt->execute();
// gestion des erreurs
if ($stmt->errorCode() !== "00000") {
    die($stmt->errorInfo()[2]);
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Liste des livres</title>
</head>
<body>
<table>
<?php while(false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)):?>
    <tr>
        <td><?=$row['titre']?></td>
    </tr>
<?php endwhile; ?>
</table>
</body>
</html>
