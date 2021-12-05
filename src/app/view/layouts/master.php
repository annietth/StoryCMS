<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> <?= $title ?? 'Story CMS' ?> </title>
    <link href="css/main/master.css" rel="stylesheet">
    <link href="css/main/navbar.css" rel="stylesheet">
    <link href="css/page/home.css" rel="stylesheet">
    <link href="css/post/show.css" rel="stylesheet">
    <link href="css/user/alluser.css" rel="stylesheet">
</head>
<body>

    
    <div class="wrapper">
        <?php require 'navbar.php'; ?>
        <div class="wrapperBody">
            <?php require "../app/view/$view.php"; ?>
        </div>
    </div>
</body>
</html>