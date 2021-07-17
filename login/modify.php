<?
  session_start();
?>
<meta charset="utf-8">
<?
extract($_POST);
extract($_SESSION);
extract($_GET);

  $hp=$hp1."-".$hp2."-".$hp3;
  $email=$email1."@".$email2;
  $regist_day=date("Y-m-d (H:i)"); //현재 날짜(년-월-일-시-분) 저장

  include "../lib/dbconn.php"; //dbconn.php 파일을 불러옴

  $sql="update member set pass='".$pass."', name='".$name."',";
  $sql.="nick='".$nick."', hp='".$hp."', email='".$email."', regist_day='".$regist_day."' where id='".$userid."'";

  mysql_query($sql, $connect); //sql에 저장된 명령 실행
  $_SESSION['usernick']=$nick;
  mysql_close();

  echo ("
        <script>
          location.href='../index.php';
        </script>
       ");
?>
