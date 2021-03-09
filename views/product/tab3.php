<div class="row">
    <?php
    $commentParam=$result['comment_param'];
    $comments=$result['allCommentOfProduct'];
    $averageOfScores=$result['averageOfScores'];
    ?>
    <div class="col-md-5">
        <h6 class="text-primary mb-3 technical position-relative">
            <span class="iconTitre mr-3"></span>
            User ratings to<span class="text-secondary ml-3">text text text text</span>
        </h6>
        <?php
         foreach ($commentParam as $param){
            $average=floor( $averageOfScores[$param['id']]);
             $calcPercentOfScore=($average*100)/5;
             ?>
             <div class="row mb-2">
                 <div class="col-md-5 fontSize text-secondary"><?=$param['title']?></div>
                 <div class="col-md-7">
                     <div class="progress mt-md-1">
                         <div class="progress-bar bg-success" role="progressbar" style="width:<?=$calcPercentOfScore?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                     </div>
                 </div>
             </div>
        <?php
         }
        ?>



    </div>
    <div class="col-md-7 position-relative">
        <h6 class="mb-3">You can comment on this product.</h6>
        <input type="button" class="btn btn-primary fontSize2 btnPosition" value="Write your review !">
    </div>

</div>
<div class="row mt-4">
    <h6 class="text-primary mb-2 technical position-relative ml-3">
        <span class="iconTitre mr-3"></span>
        User Comments
    </h6>
    <hr class="clearfix w-100 m-2">
</div>
<?php
foreach ($comments as $comment){
    ?>
    <div class="card comments">

        <div class="card-header">
            <div class="row">
                <div class="col-md-4 p-0">
                    <span class="fa fa-comment float-left text-secondary mr-1"></span>
                    <span class="float-left text-secondary user">
                                            name family
                                         <span class="date"><?=$comment['date']?></span>
                                     </span>

                </div>
                <div class="col-md-8">
                    <div class="text-md-right text-left text-secondary fontSize1">
                        Was this comment helpful to you?
                        <span class=" ml-3">
                                            <a class="like">
                                                <i class="fa fa-thumbs-o-up"></i>
                                                <input class="qty1" name="qty1" readonly="readonly" type="text" value="<?=$comment['likeNumber']?>">
                                            </a>
                                            <a class="dislike">
                                                <i class="fa fa-thumbs-o-down"></i>
                                                <input class="qty2"  name="qty2" readonly="readonly" type="text" value="<?=$comment['dislikeNumber']?>">

                                            </a>
                                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-5">
                    <div class="row">
                        <?php
                        $scores=unserialize($comment['param']);
                        foreach ($commentParam as $item){
                            $paramId=$item['id'];
                            $scoreOfThisParam=$scores[$paramId];
                            $calcPercentOfScore=($scoreOfThisParam*100)/5;
                            if(!isset($scoreTotal[$paramId])){
                                $scoreTotal[$paramId]=0;
                            }
                            ?>

                            <div class="col-md-5 fontSize text-secondary"><?=$item['title']?> </div>
                            <div class="col-md-7">
                                <div class="progress mt-md-1">
                                    <div class="progress-bar bg-success" role="progressbar" style="width:<?=$calcPercentOfScore?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        <?php
                        }

                        ?>


                    </div>
                </div>
                <div class="col-md-7">
                    <h6 class="w-100 text-justify text-dark mb-3">
                        <?=$comment['title']?>
                    </h6>
                    <div class="row">
                        <div class="col-6">
                            <h6 class="text-success">
                                positive point
                            </h6>
                            <p class="text-dark"><i class="fa fa-arrow-up text-success mr-2"></i><?=$comment['positive']?></p>
                        </div>
                        <div class="col-6">
                            <h6 class="text-danger">
                                Negative point
                            </h6>
                            <p class="text-dark"> <i class="fa fa-arrow-up text-danger mr-2"></i><?=$comment['negative']?></p>
                        </div>
                    </div>
                    <p class="w-100 text-justify text-secondary">
                        <?=$comment['text']?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <?php
    }
    ?>

