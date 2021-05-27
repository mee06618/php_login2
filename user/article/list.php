<?php
    session_start();
    $myConn = @mysqli_connect("localhost","sbsst","sbs123414","emp") or die("error");
    $sql = "select * from article";
    $rs = mysqli_query($myConn,$sql);
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
    <title>리스트</title>
</head>
<body>
   
        <?php foreach($articles as $article){?>
            <div>
        번호 : <a href="detail.php?id=<?=$article['id']?>"><?=$article['id']?></a><br>
        날짜 : <?=$article['regdate']?><br>
        조회수 : <?=$article['hit']?><br>
        제목 : <?=$article['title']?><br>
        내용 : <?=$article['body']?><br>
        <hr>
        </div>
        
        <?php } ?>
        <form method = “post” action="write.php">
            <button type="submit">글 작성</button>
        </form>
        <form method = “post” action="join.php">
            <button type="submit">회원가입</button>
        </form>
        <?php if(!isset($_SESSION['USER'])){?>
        <form method = “post” action="login.php">
            <button type="submit">로그인</button>
        </form>
        <?php } else{ ?>
            <form method = “post” action="doLogout.php">
            <button type="submit">로그아웃</button>
        </form>
        <form method = “post” action="doLogout.php">
            <button type="submit">정보수정</button>
        </form>
        <?php }?>
</body>
</html>