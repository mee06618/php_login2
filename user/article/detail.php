<?php
    session_start();
    require_once('../dao.php');
    $id = $_GET['id'];
    $info = getInfoArticle($id);
    hitArticle($id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시물 내용</title>
    <div>
        <h2>작성자 : <?=$info['name']?></h2>
        <h2>작성일자 : <?=$info['regdate']?></h2>
        <h2>조회수 : <?=$info['hit']?></h2>
        <h2>제목 : <?=$info['title']?></h2>
        <h2>내용 : <?=$info['body']?></h2>
    </div>
    <form>
        <input type=submit value="수정">
    </form>
</head>
<body>
    
</body>
</html>