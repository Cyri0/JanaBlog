<html lang="en">
  <head>
    <title>Admin felület</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body{
            background-color: gray;
        }

        .jumbotron{
            max-width: 800px;
            margin: auto;
        }

        .logo_image{
            height: 50px;
            float: right;
        }

        .lead{
            float: right;
            margin-top: 10px;
        }

        #content {
            min-height: 30vh;
        }

        #help_button{
            width: 20px;
            height: 20px;
            line-height: 20px;
            text-align: center;
            color: white;
            background-color: rgb(119, 0, 0);
            float: right;
            border-radius: 10px;
            margin-top: 10px;
        }

        #help_button:hover{
            cursor: pointer;
            background-color: red;
        }

        .jumbotron{
            margin-top: 20px;
        }

    </style>
</head>
  <body>
    <div class="jumbotron">
        <img class="logo_image" src="../pics/logo_dark.png">
        <h1 class="display-5">Admin felület</h1>
        <hr class="my-2">
        
         <form action="index.php" method="post">
         <br>Cím<br><input type="text" class="form-control" name="title" id="" aria-describedby="helpId" placeholder="">
         <br>Kép<br><input type="text" class="form-control" name="hpics" id="" aria-describedby="helpId" placeholder="">
         <br>Szöveg<br><textarea class="form-control" name="text" id="content" rows="3"></textarea>
            <div id="help_button">?</div><br>
            <br>Típus
            <select class="form-control" id="" name="post_type">
                <option value="game">Játék</option>
                <option value="music">Zene</option>
                <option value="book">Könyv</option>
                <option value="comic">Képregény</option>
                <option value="movie">Film</option>
            </select>
            <input type="submit" value="Posztolok!">
         </form>

        <?php
            

            if(isset($_POST['title'])){
                $title = $_POST['title'];
                $hpics = $_POST['hpics'];
                $text = $_POST['text'];
                $type = $_POST['post_type'];

                $server = "localhost";
                $user = "root";
                $pwd = "";
                $db_name = "jana_blog";
                
                $con = mysqli_connect($server, $user, $pwd, $db_name);
                if(!$con){
                    echo '<script> alert("Nem sikerült csatlakozni az adatbazishoz!")</script>';
                }
                else {
                    $sql = 'INSERT INTO `posts`(`title`, `picture`, `content`, `type`, `date`) VALUES ("'.$title.'","'.$hpics.'","'.$text.'","'.$type.'","'.date("Y-m-d H:i:s").'")';
  
                    $result = mysqli_query($con, $sql);
                    mysqli_close($con);
                }
            }
        ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>