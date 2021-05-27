<?php
    require_once('../dao.php');
    $id =$_GET['id'];
    $pass =$_GET['pass'];
    $name=$_GET['name'];
    $isok=makeArticle($id,$pass,$name);
   

?>

<script>

    <?php if ($isok==1) { ?>
        alert("생성됨")
        location.href='list.php'
    <?php }else if($isok==0) { ?>
        alert("아이디중복")
        history.back()
    <?php }else if($isok==-1) { ?>
        alert("비밀번호중복")
        history.back()
    <?php }else if($isok==-2) { ?>
        alert("오류")
        history.back()
    <?php }?>
    
</script>