<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/posts.css">
        <link href="https://fonts.googleapis.com/css?family=Lora&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <title>RE SerachView</title>
    </head>
    <body>
        <?php
            $menu_code = file_get_contents('menu.php');
            echo $menu_code;
        ?>

        <section id="posts_content">
            <?php
            

            if(isset($_GET['type'])){
                $type = $_GET['type'];


                

                $server = "localhost";
                $user = "root";
                $pwd = "";
                $db_name = "jana_blog";
                
                $con = mysqli_connect($server, $user, $pwd, $db_name);
                if(!$con){
                    echo '<script> alert("Nem sikerült csatlakozni az adatbazishoz!")</script>';
                }
                else {
                    $sql = 'SELECT * FROM `posts` WHERE type = "'.$type.'" ORDER BY date DESC';
                    $result = mysqli_query($con, $sql);
                    $result_num = 0;
                    while ($row = $result -> fetch_assoc()){
                        $result_num++;
                        echo '
                        <div class="content">
                        <a id="post_link" href="#">
                            <div class="post_image">
                                <h1 class="post_title_mobile">'.$row['title'].'</h1>
                            </div>
                        </a>
                        <p class="post_date">'.$row['date'].'</p>
                        <h1 class="post_title">'.$row['title'].'</h1>
                        <p class="first_few">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu ante ut urna gravida maximus...</p>
                        </div>
                        ';
                    }
                    if($result_num == 0){

                        echo '<div class="content"><h1 style="text-align: center; padding-top: 20px;">Még nincs ilyen témában poszt!</h1></div>';
                    }


                    mysqli_close($con);
                }
            }
        ?>
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