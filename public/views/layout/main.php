<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>

    <!-- include styles -->
    <link rel="stylesheet" href="./src/css/style.css">

    <!-- include js -->
    <script src="./src/js/main.js" defer></script>

    <title><?=$title?></title>
</head>
<body>
<div class="wrapper">
    <div class="wall">
        <?=$header?>
        <?=$content?>
    </div>
    <?=$recommendation?>
    <?=$gallery?>
    <?=$footer?>
</div>
</body>
</html>