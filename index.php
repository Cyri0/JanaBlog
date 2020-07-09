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
        <title>RE SerachView</title>
    </head>
    <body>
        <?php
            $menu_code = file_get_contents('menu.php');
            echo $menu_code;
        ?>
        
        <section class="cyrio_main">
            <div class="cyrio_preview">  
                <div id="actualPreviewImage" class="previewImage fadeIn">
                    <a id="image_link" href="#">
                        <h1 id="actualPreviewTitle">Jussát várja a Vaják</h1>
                    </a>
                    <div id="next_butt" onclick="next_post()">❯</div>
                    <div id="prev_butt" onclick="prev_post()">❮</div>
                </div>
                </a>
            </div>
            <div class="cyrio_lastFive">
                <div id="lastFiveHolder"></div>
                <a href="posts.html?type=all"><p>Több...</p></a>
            </div>
        </section>

        <?php
            $footer_code = file_get_contents('footer.php');
            echo $footer_code;
        ?>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
        <script>
            <?php
            echo file_get_contents('js/article.js');

            echo 'let list = [';

            $server = "localhost";
            $user = "root";
            $pwd = "";
            $db_name = "jana_blog";
            
            $con = mysqli_connect($server, $user, $pwd, $db_name);
            if(!$con){
                echo '<script> alert("Nem sikerült csatlakozni az adatbazishoz!")</script>';
            }
            else {
                $sql = 'SELECT * FROM `posts` ORDER BY date DESC';
                $result = mysqli_query($con, $sql);
                $result_num = 0;

                $js_code = "";

                while ($row = $result -> fetch_assoc()){
                    $result_num++;
                    if($result_num == 5){
                        $js_code = $js_code.'new Article('.$result_num.', "'.$row['title'].'", "'.$row['picture'].'", "'.$row['ID'].'")';
                    break;
                    }
                    else{
                        $js_code = $js_code.'new Article('.$result_num.', "'.$row['title'].'","'.$row['picture'].'", "'.$row['ID'].'"),';
                    }
                    
                }
                echo $js_code;

                mysqli_close($con);
            }
            echo '];';
            echo file_get_contents('js/script.js');
            ?>
        </script>
    </body>
</html>