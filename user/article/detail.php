<?php
    session_start();
    require_once('../dao.php');
    $id = $_GET['id'];
    $info = getInfoArticle($id);
    hitArticle($id,$info['title']   );
    if ( !isset($_SESSION['USER']))
    $user=getInfoMember($_SESSION['USER'])
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시물 내용</title>

    <form action="modify.php">
    <div>
   
        <h2>작성자 : <?=$info['writer']?></h2>
        <h2>작성일자 : <?=$info['regdate']?></h2>
        <h2>조회수 : <?=$info['hit']?></h2>
        <h2>제목 : <?=$info['title']?></h2>
        <h2>내용 : <?=$info['body']?></h2>
    </div>
    <input type="hidden" name="id" value=<?=$info['id']?>>
    <?php if(isset($_SESSION['USER'])){?>
        <input type=submit value="수정">
     <?php }   ?>
   
    </form>
    <form action=delete.php?>
    <?php if($user['memberid']==$info['writer']){?>
          <input type=submit value="삭제">
     <?php }?>
    </form>
</head>
<body>
    
</body>
</html>