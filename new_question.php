<?php
include('header.php');
if($_POST['MCQuestion']){
    $Question = new Questions;
    $input = htmlspecialchars($_POST['inputquest']);
    echo  $_FILES['userfile']['name'];
    if($_FILES['userfile']['name']>1){
        $file = new files;
        $imageLocation=$file->upload($_FILES['userfile']['name'],$_FILES['userfile']['size'],$_FILES['userfile']['tmp_name'],$_FILES['userfile']['type']);
        $Question->add_question($_POST['event'],$input,$_POST['option1'],$_POST['option2'],$_POST['option3'],$_POST['option4'],$_POST['option5'],$_POST['correct_answer'],$imageLocation,3,$user->data['username_clean']);
    }else{
        $Question->add_question($_POST['event'],$input,$_POST['option1'],$_POST['option2'],$_POST['option3'],$_POST['option4'],$_POST['option5'],$_POST['correct_answer'],null,1,$user->data['username_clean']);
        Echo 'Question Added';
    }
}
$Display = new Display;
$Display->display('question_entry.php');


?>