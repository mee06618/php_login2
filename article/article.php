<?php
    $dbConn = mysqli_connect("localhost","sbsst","sbs123414","emp") or die("error");
    $sql = "select * from article order by id desc";


    if($detail = $_GET['id']){
        $sql = "select * from article where id="+$detail;    
    }
    
    $rs = mysqli_query($dbConn,$sql);
    $article=[];
    
    while($article=mysqli_fetch_assoc($rs)){
        $articles[]=$article;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/common.css">
</head>
<body>
        <div>
            <?php foreach($articles as $article){ ?>

                번호 : <?= $article["id"] ?><br>
                날짜 : <?= $article["regdate"] ?><br>
                제목 : <?= $article["title"] ?><br>
                내용 : <?= $article["body"] ?><br>


                
            <?php } ?>


        </div>
</body>
</html>