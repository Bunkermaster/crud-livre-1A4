<?php
/**
 * Created by PhpStorm.
 * @author Yann Le Scouarnec <bunkermaster@gmail.com>
 * Date: 15/06/2017
 * Time: 11:57
 */
require_once __DIR__."/conf.php";
require_once APP_DIR_INC."connect.php";
$sql = "SELECT `id`, `titre`, `resume` FROM `livre`;";
$stmt = $pdo->prepare($sql);
$stmt->execute();
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
<?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)):?>
    <tr>
        <td><?=$row['titre']?></td>
    </tr>
<?php endwhile; ?>
</table>
</body>
</html>
