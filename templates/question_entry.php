
<div id="centered">
    <form method="" action="">
        <label>Multiple Choice <input type="checkbox" value="MC" name="MC"/></label>
        <label>Free Response: <input type="checkbox" value="FRQ" name="FRQ"/></label>
    </form>
    <div id="MC">
    <h2>Add a Multiple Choice Question:</h2>
    <form enctype="multipart/form-data" action="" method="POST">
    Event:
    <select name="event">
        <?php
            $Forms = new Forms;
            echo $Forms->return_event_select();   
        ?>
    </select><br/>
                <input type="hidden" name="MAX_FILE_SIZE" value="512000" />
        Upload Image: <input name="userfile" type="file" />
            Question:<Br/>
              <textarea name="inputquest" class="question_id">
                
            </textarea><br/>
    Answer Choices:<br/>
    1.<input type="text" name="option1"/><br/>
    2.<input type="text" name="option2"/><br/>
    3.<input type="text" name="option3"/><br/>
    4.<input type="text" name="option4"/><br/>
    5.<input type="text" name="option5"/><br/>
    Correct Response:<br/>
    <select name="correct_answer">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
    </select><br/>
    
    <input type="submit" value="Submit Question" name="MCQuestion"/>
    </form>
    </div>

</div>
<!--
<div id="FRQ">
    <h2>Add a Free Response Question:</h2>
    <form method="" action="POST">
       Event:<select name="event">
    <?php
        //$Forms = new Forms;
        //echo $Forms->return_event_select();   
    ?>
</select><br/>
        Question:<Br/>
        <textarea name="question" class="question_id">
            
        </textarea><br/>
        Keywords(seperate by comma)<input type="text" name="keywords"/><br/>
        
        <input type="submit" value="Submit Question" name="FRQ"/>
    </form>
</div>-->