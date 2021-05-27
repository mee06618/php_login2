<?php
$myConn = @mysqli_connect("localhost","sbsst","sbs123414","emp") or die("error");

function hitArticle($id){
    global $myConn;
    $sql="update article set hit=hit+1 where id=${id}";
    $rs =mysqli_query($myConn,$sql);

}

    function writeArticle($title,$body){
        global $myConn;
        $sql="insert into article set regdate=now(), title='${title}',`body`='${body}',hit=0";
        
        if(mysqli_query($myConn,$sql)){
            return 1;
        }
        return 0;
     
        
    }
    function makeArticle($id,$pass,$name){
        global $myConn;
        $sql="select id from member where id='${id}'";
        $rs=mysqli_query($myConn,$sql);
        if(mysqli_fetch_assoc($rs) ){
            return 0; //아이디 중복
        }
        else{
            $sql="select name from member where `name`='${name}'";
            $rs=mysqli_query($myConn,$sql);
            if($row = mysqli_fetch_assoc($rs) ){
                return -1; //이름 중복
            }
            else{
                $sql="insert into member set id='${id}',pass='${pass}',`name`='${name}'";
                if(mysqli_query($myConn,$sql)){
                    return 1;
                }else{
                    return -2;
                }

            }
        }
        return -2;
        

     
        
    }
    function deleteArticle($title,$body){
        global $myConn;
        $sql="insert into article set regdate=now(),title=$title,`body`=$body,hit=0";
        $rs =mysqli_query($myConn,$sql);
        return $rs;

     
        
    }

    function modifyArticle($title,$body){
        global $myConn;
        $sql="insert into article set regdate=now(),title=$title,`body`=$body,hit=0";
        $rs =mysqli_query($myConn,$sql);
        return $rs;

     
        
    }

    function loginArticle($id,$pass){
        global $myConn;
        $sql="select id from member where id='${id}'";
        $rs =mysqli_query($myConn,$sql);
        if(!mysqli_fetch_assoc($rs)){
            return 0;//아이디가 없음
        }else{
            $sql="select pass from member where pass='${pass}'";
            $rs =mysqli_query($myConn,$sql);
            if(!mysqli_fetch_assoc($rs)){
                return -1;//비밀번호 틀림
            } 
            else return 1; 
        }
        return -2;
 
    }
    function getNameArticle($id,$pass){
        global $myConn;
        $sql="select name from member where id='${id}'and pass='${pass}'";
        $rs =mysqli_query($myConn,$sql);
        if($temp=mysqli_fetch_assoc($rs)){
            return $temp['name'];
        }

    }
    function getInfoArticle($id){
        global $myConn;
        $sql="select * from article where id=$id";
        $rs =mysqli_query($myConn,$sql);
        if($temp=mysqli_fetch_assoc($rs)){
            return $temp;
        }

    }
      
      
?>