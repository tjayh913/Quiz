
<?php
$event = 0;
if (is_numeric($_GET['event'])){
    $event =  $_GET['event'];
}
$question = new Questions;
$name = $question->get_event($event);
$number = $question->get_number($event);
echo '<h2>'.$name.'</h2>';
echo '<h4>Total Questions: '.$number.'</h4>';
if($_POST['check']){
    if($_POST['type']==1 || $_POST['type']==3){
        if($question->check_mc($_POST['idval'],$_POST['response'],$_POST['attempts'],$event)){
            echo '<br/><h2 class="green">Correct!</h2><br/>';
        }else{
            echo '<br/><h2 class="red">Incorrect</h2><br/><h3>Your Response was: '.$_POST['response'].'</h3><br/>';
        }
    }else if($_POST['type']==2 || $_POST['type']==4){
        
        if($question->check_short($_POST['idval'],$_POST['response'],$_POST['attempts'],$event)){
            echo '<br/><h2 class="green">Correct!</h2><br/>';
        }else{
             echo '<br/><h2 class="red">Incorrect</h2><br/><h3>Your Response was: '.$_POST['response'].'</h3><br/>';
        }        
    }else{
        echo "There was an error grading<br/>";
    }
    $num = $_POST['attempts']+1;
    $question->get_question($event,$_POST['idval'],$num);
}else{
    $question->get_question($event,null,0);
}
?>
<form method="POST" action="">
    <input type="submit" value="Next Question" name="newQuestion" class="btn btn-primary"/>
</form></div>