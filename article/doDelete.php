<?php

if($detail = $_GET['id']){
    $dbConn = mysqli_connect("localhost","sbsst","sbs123414","emp") or die("error");
    $sql=  "DELETE FROM article WHERE id = $detail";
    $rs = mysqli_query($dbConn,$sql);
    $num=$detail;
   $delete=0;
    if ($rs) {
        $delete=1;
    }
        


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
            
            <?php if($delete==1){ ?>
                <?=$num?>번 데이터가 삭제되었습니다
                <?php } else { ?>
                <?=$num?> 번 데이터는 존재하지 않는 데이터입니다
                <?php } ?>         
           


        </div>
</body>
</html>