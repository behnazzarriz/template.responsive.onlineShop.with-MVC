<div class="itemContainer">
    <?php
    $reviews=$result['review'];
    foreach ($reviews as $review){
        ?>

        <div class="item">
            <h4><span class="dot"><i class="fa fa-plus"></i> </span>
                <span class="title"><?=$review['title']?></span>
            </h4>
            <div class="description text-secondary">
                <p>
                    <?=$review['description']?>
                </p>
            </div>
        </div>
        <?php
    }
    ?>
</div>
<script>
    //description tab for last tab in page
    var tabActive=$('.tab-content .itemContainer .item');
    tabActive.click(function () {
        $(this).find('.description').slideToggle(200);
        $(this).find('.dot i').toggleClass('fa-minus');
    });
</script>