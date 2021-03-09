<ul id="tab" class="nav nav-tabs" role="tablist">
    <li class="nav-item"><a href="#SpecializedReview" class="nav-link text-secondary active" aria-controls="SpecializedReview" role="tab" data-toggle="tab"><span class="fa fa-search mr-2"></span>Specialized review</a></li>
    <li class="nav-item"><a href="#TechnicalSpecifications" class="nav-link text-secondary" aria-controls="TechnicalSpecifications" role="tab" data-toggle="tab"><span class="fa fa-briefcase  mr-2"></span>Technical specifications</a></li>
    <li class="nav-item"><a href="#UserComments" class="nav-link text-secondary" aria-controls="UserComments" role="tab" data-toggle="tab"><span class="fa fa-comment  mr-2"></span>User comments</a></li>
    <li class="nav-item"><a href="#QuestionAnswer" class="nav-link text-secondary" aria-controls="QuestionAnswer" role="tab" data-toggle="tab"><span class="fa fa-comments  mr-2"></span>Question and answer</a></li>
</ul>
<div id="tabContent" class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="SpecializedReview">

    </div>
    <div role="tabpanel" class="tab-pane" id="TechnicalSpecifications">

    </div>
    <div role="tabpanel" class="tab-pane" id="UserComments">

    </div>
    <div role="tabpanel" class="tab-pane" id="QuestionAnswer">

    </div>
</div>
<script>
    $('.nav-item .nav-link').click(function () {
        var index=$(this).closest(".nav.nav-tabs").find('> li > a').index(this);
        url="<?=URL?>product/tab/<?=$productInfo['id']?>/<?=$productInfo['category_id']?>";
        data={'index':index};
      $.post(url,data,function (msg) {
            $('.tab-content .tab-pane').html(msg);

        })


    })


</script>