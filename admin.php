<?php
include('header.php');
$adminQuestions = new AdminQuestions;
$question = new Questions;
$allowedGroups = array(4,5,110,7,117,118);
if(in_array($user->data['group_id'],$allowedGroups)){
    if($_POST['changeEvent']){
        $adminQuestions->updateEvent($_POST['Changequest'],$_POST['realEvent']);
    }
    if($_POST['close']){
        $adminQuestions->fixReport($_POST['idval']);
    }
    if($_POST['delete']){
        $adminQuestions->deleteQuestion($_POST['idval']);
    }
    if($_POST['update']){
        $adminQuestions->updateMCQuestion($_POST['textChange'],$_POST['response1'],$_POST['response2'],$_POST['response3'],$_POST['response4'],$_POST['response5'],$_POST['correct_answer'],$_POST['idval']);
    }
    if($_POST['updateFRQ']){
        $adminQuestions->updateFRQ($_POST['textChange'],$_POST['keywords'],$_POST['idval']);
    }
    if($_POST['resetNumbering']){
        $adminQuestions->resetNumbering($_POST['event']);
    }

    if($_POST['questionSubmission']){
			//questionSubmission is two radio boxes, one approval, one rejection.
         //update question approval status if set
        if($_POST['approval'] == 'approve'){
            $adminQuestions->questionsApprove($_POST['eventId'],$_POST['questionId']);
           
        }
        elseif($_POST['approval'] == 'reject'){
            $adminQuestions->questionsReject($_POST['questionId']);
        }
    }
    if($_POST['fixall']){
		//need to rename the fixall button to something logical
        $adminQuestions->resetAllEvents();
    }
    $NameStatus = 0;
    $reported = $adminQuestions->pullReports();
    $questions = $adminQuestions->queryQuestions();
    $eventList = $question->return_all_events();
    if($questions[0]['eventid']>0){
        $NameStatus = $questions[0]['eventid'];
        $EventName=$question->get_event($questions[0]['eventid']);
    }
    echo $twig->render('adminHTML.html',array('ReportArray'=>$reported,'ApprovalArray'=>$questions,'EventName'=>$EventName,'Event'=>$NameStatus,'EventList'=>$eventList));
}

?>
