<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/article.css">
        <link href="https://fonts.googleapis.com/css?family=Lora&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <title>RE SerachView</title>
    </head>
    <body>
    
        <?php
            $menu_code = file_get_contents('menu.php');
            echo $menu_code;
        ?>

        

        <section class="article_main">
            <div class="article_main_div">
                
                <h1 id="post_title">Jussát várja a Vaják...</h1>
                <img id="post_main_img" class="article_main_img" src="pics/vajak.jpg">
                <div id="content">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu ante ut urna gravida maximus. Etiam id venenatis nunc. Suspendisse quis suscipit lacus. Donec viverra sem eget justo aliquam porta. Cras ut tincidunt lectus, ut efficitur ipsum. Pellentesque ligula ex, varius id nisl dignissim, lacinia condimentum sem. Aenean tincidunt dolor vel eros semper congue at eu ligula. Nunc egestas tortor vel neque sodales ullamcorper. Etiam molestie ultricies molestie. Sed quis tristique arcu. Nullam et orci urna. Nulla facilisi.
                    </p><p>Sed vitae sagittis neque. Phasellus nec lectus eu metus ultricies interdum. Aenean cursus est eget ex porta rutrum. Integer sed justo consequat, porttitor tortor ut, gravida ipsum. Nulla facilisi. Etiam finibus posuere mauris, at posuere sem suscipit dignissim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer scelerisque augue et augue consectetur, nec tempor tellus dignissim. Nunc ut erat pellentesque, blandit leo eget, dapibus urna. Quisque sed congue eros, posuere ornare nulla. Quisque neque est, volutpat id quam quis, feugiat tincidunt nisl. Vivamus accumsan elit ipsum, a sollicitudin nulla porta non. Integer pulvinar est ex, sed iaculis urna maximus sit amet.
                    </p><p>Mauris sem nisi, lacinia pretium mauris in, egestas volutpat mi. Nunc ac est id risus lobortis tincidunt quis sed mauris. Nunc rutrum maximus aliquam. Vivamus vulputate, ligula a vehicula iaculis, urna felis fringilla odio, non interdum massa purus nec ex. Nulla malesuada nunc id ante semper, ac consectetur nisl mattis. Curabitur sed dapibus velit. Nunc sit amet laoreet lorem, sit amet dapibus nibh. Praesent commodo orci at arcu iaculis consequat. Ut semper risus sed magna tincidunt fringilla. Pellentesque aliquam lectus dui, sit amet convallis elit facilisis nec.
                    </p><p>Duis hendrerit sollicitudin sagittis. Nulla a hendrerit enim. Etiam at facilisis diam, maximus condimentum velit. Nam dictum leo sit amet turpis iaculis lacinia. Integer ut ullamcorper velit. Curabitur eu nisi at nisl vehicula ultrices eu tristique lacus. Duis porta laoreet lacus, eu euismod odio iaculis eget. Nulla porttitor consectetur nunc, in faucibus risus ornare quis. Donec tincidunt volutpat felis, id eleifend sem lacinia vel. Donec scelerisque lobortis vulputate. Aenean maximus vitae diam vel commodo.
                    </p><p>Curabitur interdum et velit blandit fermentum. Aenean feugiat tortor vitae tellus volutpat, eu tempus augue pulvinar. Praesent quis magna euismod nulla maximus pharetra id a sapien. Suspendisse mattis mauris nec auctor tincidunt. Duis luctus quam non libero consequat rhoncus. Cras sollicitudin aliquet purus consectetur luctus. Vestibulum mollis porta neque, vitae dignissim mi volutpat quis. In dictum consequat mi quis luctus. Suspendisse efficitur pretium quam vitae commodo. Duis felis quam, suscipit et tempus nec, placerat a lacus. Pellentesque ex libero, venenatis sit amet est tempor, semper vestibulum leo. Aenean ut commodo nibh. Cras auctor eget mi quis posuere. 
                    </p>
                </div>
                <div id="article_date">Módosítva: 2020.03.07. 14:42</div>
                <div id="next_article">Tovább olvasok!</div>
            </div>
        </section>

        <?php
            $footer_code = file_get_contents('footer.php');
            echo $footer_code;
        ?>
 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
        <script src="js/script.js"></script>
</body>
</html>