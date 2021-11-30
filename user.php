<?php 
    require_once('db.php');
    $query =
    $row = connect($query);
    $left = $row['ans1'];
    $right = $row['ans2'];
    $left_first_score = $row['left_first_score']; //e 
    $left_second_score = $row['left_second_score']; //s 
    $left_third_score = $row['left_third_score']; // t
    $left_fourth_score = $row['left_fourth_score']; // j
    $right_first_score_score = $row['right_first_score']; //i
    $right_second_score = $row['right_second_score']; //n
    $right_third_score = $row['right_third_score']; //f 
    $right_fourth_score = $row['right_fourth_score']; //p
    
?>
<form action="" method="POST">
    <?php
          echo '<input type="submit" value="'.$left.'"name="mybutton">';
          echo '<input type="submit" value="'.$right.'"name="mybutton">';
    ?>
</form>

<?php 
   if ($_POST["mybutton"] == $left){
       echo $_POST["mybutton"];
        $insert_query  = 'insert into user(first_score, second_score, third_score, fourth_score) values';    
        $insert_query = $insert_query."('$left_first_score','$left_second_score','$left_third_score','$left_fourth_score')";
        $insert_query = $insert_query."where name = ".$name.';';
        echo $insert_query;

   }
   else if ($_POST['mybutton'] == $right){
       echo $_POST['mybutton'];
        $insert_query  = 'insert into user(first_score, second_score, third_score, fourth_score) values';    
        $insert_query = $insert_query."('$right_first_score','$right_second_score','$right_third_score','$right_fourth_score')";
        $insert_query = $insert_query."where name = ".$name.';';
        echo $insert_query;
   }
?>