<?php
    require_once('../dao.php');
    $title =$_GET['title'];
    $body =$_GET['body'];

    $isok=writeArticle($title,$body);
   

?>

<script>

    <?php if ($isok) { ?>
        alert("생성됨")
        location.href='list.php'
    <?php }else { ?>
        alert("생성 실패")
        history.back()
    <?php }?>
    
</script>