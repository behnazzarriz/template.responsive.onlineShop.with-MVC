<div class="form-group shadow-textarea">
    <label for="AskQuestion">
        <h6 class="text-primary mb-3 technical position-relative">
            <span class="iconTitre mr-3"></span>
            Ask your question
        </h6>
    </label>
    <textarea class="form-control rounded" id="AskQuestion" rows="3"></textarea>
    <input class="btn btn-primary mt-3" type="submit" value="Send Message">
</div>
<div class="form-group mt-4">
    <h6 class="text-primary mb-3 technical position-relative">
        <span class="iconTitre mr-3"></span>
        Questions and Answers <span class="text-secondary fontSize2 ml-3">(255 questions)</span>
    </h6>
    <hr class="clearfix w-100">
    <?php
    $questions=$result['question'];
    $answer=$result['answer'];
    foreach ($questions as $question){
       ?>
        <div class="question text-primary mt-2">
            <div class="card">
                <div class="card-header text-secondary">
                    <span class="fa fa-question-circle mr-1 fontSize6"></span>Question
                    <span class="float-right date"><?=$question['date']?></span>
                </div>

                <div class="card-body">
                    <p class="text-secondary fontSize3 text-justify">
                        <?=$question['text']?>
                    </p>
                </div>

            </div>
            <span class="fa fa-mail-forward text-primary mt-2 mr-2 ml-4"></span><?=$answer[$question['id']]['text']?>
        </div>
    <?php
    }
    ?>


</div>