<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <title>RE SerachView - Kutatás</title>
    </head>
    <body>
        <?php
        $menu_code = file_get_contents('menu.php');
        echo $menu_code;
        ?>
        
        <!-- CONTENT -->


        <?php
            $footer_code = file_get_contents('footer.php');
            echo $footer_code;
        ?>
    </body>
</html>