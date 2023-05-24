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
        for ($i = 10; $i >= 0; $i--) {
            echo $i;
            echo "<br>";
            sleep(1);
        }

    ?>
    </h1>


</body>
</html>