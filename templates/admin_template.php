<div>
<h2>Approve Questions:</h2>
<?php
$admin = new AdminQuestions;
$admin->pending_questions();
?>
</div>
<div>
<h2>Open Reports:</h2><br/>
{%for reports in ReportArray %}
                {%if reports.questionType ==4  or  reports.questionType ==2%}
                    {%if reportsquestionType'] ==4 %}
                       <img src="{{reports.imageLocation}}" max-width=300 max-height=300/><br/>';
                    {%endif%}
                     <div id="questions">
                     <form method="POST" action="">
                        <textarea name="textChange" id="stylized">{{reports.Question}}</textarea><br/>
                                      
                      <input type=hidden name=idval value="{{reports.idQuestions}}"/>';
                      <input type="text" name="keywords" value={{reports.KeyWords}}/>
                     <input type="Submit" value="Update Question" name="updateFRQ">
                     <input type="submit" value="Close Report" name="close"/></div> 
                {%else%}
                     {%if reports.questionType'] == 3 %}
                        <img src="{{reports.imageLocation}}" max-width=300 max-height=300/><br/>
                    {%endif%}
                    <div id="questions">
                    <form method="POST" action="">
                    <textarea name="textChange" id="stylized">{{reports.Question}}</textarea><br/>';
                    <input type=hidden name=idval value="{{reports.idQuestions}}"/>
                    {%for i in range(1,5)%}
                        {%if i ==1%}
                            <input type="text" value="{{reports.optionA}}" name="response{{i}}"/><br/>
                        {%endif%}
                        {%if i ==2%}
                            <input type="text" value="{{reports.optionB}}" name="response{{i}}"/><br/>
                        {%endif%}
                        {%if i ==3%}
                           <input type="text" value="{{reports.optionC}}" name="response{{i}}"/><br/>
                        {%endif%}
                        {%if i ==4%}
                            <input type="text" value="{{reports.optionD}}" name="response{{i}}"/><br/>
                        {%endif%}
                        {%if i ==5%}
                            <input type="text" value="{{reports.optionE}}" name="response{{i}}"/><br/>
                        {%endif%}
                    {%endfor%}  
                    
                    echo 'Correct is:';
                    $correct = reports.CorrectResponse
                Correct Should be:<select name="correct_answer">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select><br/>';
                <input type="Submit" value="Update Question" name="update"></form>
                    <form method="post" action="">
                 <input type=hidden name=idval value="{{reports.idQuestions}}"/>
                    <input type="submit" value="Close Report" name="close"/>
                {%endif%}
                    </form>
                    </div>
{%endfor%}
</div>
<div><h2>Reset Event Numbering</h2></div>
<div>Use this to fix multiple questions showing up on a single event</div>
<form method="POST" action="" class="inline-form">
<select name="event">
<?php
$form = new Forms;
echo $form->return_event_select();
?>
</select>
<input type="submit" class="btn btn-warning" name="resetNumbering" value="Fix Event"/>
</form>