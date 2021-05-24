<?php
 
   


    if($detail = $_GET['id']){
        $dbConn = mysqli_connect("localhost","sbsst","sbs123414","emp") or die("error");
        $sql=  "select * from article where id= $detail";
       $num=$detail;
  

    $rs = mysqli_query($dbConn,$sql);

    $article=mysqli_fetch_assoc($rs);
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
            
            <?php if($article!=null){ ?>
                번호 : <?= $article["id"] ?><br>
                날짜 : <?= $article["regdate"] ?><br>
                제목 : <?= $article["title"] ?><br>
                내용 : <?= $article["body"] ?><br>
                <?php } else { ?>
                <?=$num?> 번 데이터는 존재하지 않는 데이터입니다
                <?php } ?>         
           


        </div>
</body>
</html>