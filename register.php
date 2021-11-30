<?php
    require_once('db.php');
    $name = $_GET['user_name'];
    $query = "insert into user(name) values('".$name."');";
    $result = connect($query);
    if($result == false) 
    {
         echo '<script>alert("다시 입력해주세요.");location.href = "http://localhost/mbti/snedname.php";</script>';
    }
    else 
    {
        echo '<script>alert("회원가입이 완료되었습니다");location.href = "http://localhost/mbti/question.php";</script>';
        setcookie('name', $name);
    }

?>