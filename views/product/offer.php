<div class="offer row">
    <div class="col-md-6 col-12 fliptimerContent">
        <div class="discount ">
            <h5 class="badge-danger">Discount <span class="cost"><span class="font-weight-bold pr-2">
                        <?=$productInfo['price_discount'] ?>
                    </span>&euro;</span></h5>
        </div>
        <div class="flipTimer">
            <div class="hours"></div>
            <div class="minutes"></div>
            <div class="seconds"></div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="col-md-6 col-12 bgOffer">
    </div>
</div>
<script>
    //start flip Timer

    $('.flipTimer').flipTimer({

        // count up or countdown
        direction: 'down',

        // the target date
        date: '<?=$productInfo['date_special'] ?>',

        // callback works only with direction = "down"
        callback: function() {
            //when end Timer this code run!
            $('.flipTimer').css('opacity',0.4);

        },

        // custom date
        days:false

    });

    //end flip Timer
</script>