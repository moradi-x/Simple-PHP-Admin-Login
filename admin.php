<?php
session_start();

if(!isset($_SESSION['admin'])){
    header('location:./login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/style2.css">
</head>
<body>
    <div class="exitt"> <a href="./logout.php" class="exit"> exit </a></div>
    <h1> Your name is <div class="namee"> <?= $_SESSION['admin']; ?> </div>
    </h1>
    <h2> hello admin </h2>
    <h3> and password is <div class="password"> <?= $_SESSION['password']; ?></div>
    </h3>
    <div class="lorem"> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo ipsa illum quod accusantium similique delectus ullam quam natus consequatur repellat iste quos eligendi fugiat dignissimos est hic quibusdam alias aspernatur reiciendis sapiente impedit, fugit dicta! In, temporibus? Corporis asperiores enim maxime saepe voluptatibus impedit dicta, nihil, dolorem eveniet ex eos distinctio, sunt libero veniam. Nostrum, officia dignissimos optio molestias sapiente magnam velit porro ab rerum sed aliquam? Magni officiis illo fugit rem corrupti pariatur nesciunt perspiciatis commodi incidunt doloribus ipsa, consequuntur aspernatur minus saepe aperiam expedita dolores. Facilis quam exercitationem laudantium placeat veniam eligendi impedit inventore harum eum fuga! Assumenda minima perferendis saepe sequi eveniet laudantium. Inventore deleniti molestiae vero aut maxime quaerat cumque maiores libero a quae corrupti tempora repudiandae exercitationem reprehenderit, eaque quidem! Nihil maxime aperiam sapiente, quo minima rerum quasi dolorem distinctio aliquam accusamus id aspernatur est dolorum officia optio magni tenetur placeat omnis. Voluptates, labore eaque! OK </div>
</body>

</html>