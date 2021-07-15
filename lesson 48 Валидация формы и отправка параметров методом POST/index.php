<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<!--<form method="get" action="">-->
<!--    <input type="text" name="first"><br>-->
<!--    <input type="text" name="second"><br>-->
<!--    <input type="submit" value="Отправить">-->
<!--</form>-->
<?php
//    if (empty($_GET['first']) && empty($_GET['second'])){
//        exit('Текстовые поля не заполнены');
//    }else{
//        echo '<pre>';
//        print_r($_GET);
//        echo '<pre>';
//    }
echo '<hr>';
    $errors = [];
    if (!empty($_POST)){
        if (empty($_POST['first'])){
            $errors[]='Текстовое поле не заполнено';
        }
        if (empty($errors)){
            echo htmlspecialchars($_POST['first']);
            exit();
        }
    }
    if (!empty($errors)){
        foreach ($errors as $err){
            echo "<span style='color:red;'> $err</span>";
        }
    }
?>
<form method="post">
    <input type="text" name="first" value="<?php
     htmlspecialchars($_POST['first'], ENT_QUOTES)
    ?>"><br>
    <input type="submit" value="Отправить">
</form>


</body>
</html>