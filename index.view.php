<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        <?php
        $greeting = "Hello";
        echo "$greeting, World";
        echo "<br>";
        echo "I can make changes! Did it work?";
        echo "<br>";
        countdown();
        ?>
    </h1>
    <ul>
        <?php foreach ($books as $book) : ?>

            <li><?= $book['name']; ?> - <?= $book['author']; ?></li>

        <?php endforeach ?>
    </ul>

    <ul>
        <?php foreach (filter($books, 'author','Andy Weir') as $book) : ?>

            <li><?= $book['name']; ?> - <?= $book['author']; ?></li>

        <?php endforeach ?>
    </ul>
</body>

</html>