<?php
// sukuriame tarpininka
// serverio adresas kur randasi duomenu baze

$host = '127.0.0.1'; 
$db   = 'cs1';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

$pdo = new PDO($dsn, $user, $pass, $options);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['_method'] == 'post') {

        // INSERT INTO table_name (column1, column2, column3, ...)
        // VALUES (value1, value2, value3, ...);

        $sql = "
        INSERT INTO trees
        (name, heigth, type)
        VALUES (?, ?, ?)
        ";

        $stmt = $pdo->prepare($sql);

        $stmt->execute([
            $_POST['name'],
            $_POST['heigth'],
            $_POST['type']
        ]);
            header('Location: http://localhost/ciupakabros/php_hw/025/');
            die;

    }
        if ($_POST['_method'] == 'delete') {

            // DELETE FROM table_name WHERE condition;

            $sql = "
            DELETE 
            FROM trees
            WHERE id = ?
            ";


            $stmt = $pdo->prepare($sql);

        $stmt->execute([$_POST['id']]);

        header('Location: http://localhost/ciupakabros/php_hw/025/');
        die;
        }

        if ($_POST['_method'] == 'put') {

            // UPDATE table_name
            // SET column1 = value1, column2 = value2, ...
            // WHERE condition;
            $sql = "
            UPDATE trees
            SET name = ?, heigth = ?, type = ?
            WHERE id = ?
        ";
    
        $stmt = $pdo->prepare($sql);
    
        $stmt->execute([
            $_POST['name'],
            $_POST['heigth'],
            $_POST['type'],
            $_POST['id']
        ]);
        header('Location: http://localhost/ciupakabros/php_hw/025/');
        die;
        }    


    if ($_POST['_method'] == 'up') {
        // UPDATE table_name
        // SET column1 = value1, column2 = value2, ...
        // WHERE condition;

    $sql = "
        UPDATE trees
        SET heigth = heigth + 1
        WHERE 1
    ";

    $stmt = $pdo->prepare($sql);

    $stmt->execute([]);
    header('Location: http://localhost/ciupakabros/php_hw/025/');
    die;
    }
}



// SELECT column1, column2, ...
// FROM table_name;

// $sql = "

// SELECT id, name , heigth, type
// FROM trees
// WHERE heigth > 6 
// ORDER by type, heigth
// LIMIT 2, 1
// ";

// WHERE type = 1 or type = 3 (jeigu norime ir 1 ir 3, reikia rasyto OR)
// WHERE heigth > 6 AND type = 1
// WHERE type <> 1 (nelygu)
// WHERE type = 1
// ORDER BY name desc
// LIMIT 3, 3 (nuo trecio rezultato paims tris)

$sql = "
SELECT id, name , heigth, type
FROM trees
ORDER by name
";

$stmt = $pdo->query($sql);
$trees = $stmt->fetchall();

$sql = "
    SELECT sum(heigth) AS heigths
    FROM trees
";

$stmt = $pdo->query($sql);

$sum = $stmt->fetch();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TREES</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <ul>
        <?php foreach($trees as $tree) : ?>
        <li>
            <div class="id"><?= $tree['id'] ?></div>
            <div class="name"><?= $tree['name'] ?></div>
            <div class="h"><?= $tree['heigth'] ?> m</div>
            <div class="t"><?= ['Lapuotis', 'Spygliuotis', 'Palmė'][$tree['type'] - 1] ?></div>
        </li>
        <?php endforeach ?>
        <li>
            <div class="id"></div>
            <div class="name">Bendras aukštis</div>
            <div class="h"><?= $sum['heigths'] ?> m</div>
            <div class="t"></div>
        </li>
    </ul>
    <form method="post">
        <input type="hidden" name="_method" value="up">
        <div><button type="submit">Lietus</div>
    </form>

    <div class="bin">
        <form method="post">
            <div>
                <label>Vardas</label>
                <input type="text" name="name">
            </div>
            <div>
                <label>Aukštis</label>
                <input type="range" name="heigth">
            </div>
            <div>
                <label>Tipas</label>
                <select name="type">
                    <option value="1">Lapuotis</option>
                    <option value="2">Spygliuotis</option>
                    <option value="3">Palmė</option>
                </select>
            </div>
            <input type="hidden" name="_method" value="post">
            <div><button type="submit">Sodinti</div>
        </form>

        <form method="post">
            <div>
                <label>ID</label>
                <input type="text" name="id">
            </div>
            <div>
                <label>Vardas</label>
                <input type="text" name="name">
            </div>
            <div>
                <label>Aukštis</label>
                <input type="range" name="heigth">
            </div>
            <div>
                <label>Tipas</label>
                <select name="type">
                    <option value="1">Lapuotis</option>
                    <option value="2">Spygliuotis</option>
                    <option value="3">Palmė</option>
                </select>
            </div>
            <input type="hidden" name="_method" value="put">
            <div><button type="submit">Persodinti</div>
        </form>

        <form method="post">
            <div>
                <label>ID</label>
                <input type="text" name="id">
            </div>

            <input type="hidden" name="_method" value="delete">
            <div><button type="submit">Pjauti</div>
        </form>

    </div>


</body>

</html>