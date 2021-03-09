<div class="carousel slide2 row">
    <div class="col-lg-3 col-5 slider2Navigation">
        <ul>
            <?php
            $slider=$result[1];
            $date_end=$result[2];
            $count=0;
            foreach ($slider as $row){
                $count++;
                ?>
                <li class="<?php if ($count==1) {echo 'activeSlider2';}?>">
                    <a href="#">
                        <?=$row['title']?>
                    </a>
                </li>

            <?php
            }
            ?>

         <!--       <a href="#"><i class="fa fa-lock"></i>Featured store members</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-lock"></i>Featured store members</a>
            </li>-->
        </ul>
    </div>

    <div class="col-lg-9 col-7 end-parentDiscount">

        <?php
        foreach ($slider as $row){
            ?>
            <div class="sliderContent row">

                <div class="col-lg-6  col-md-12 col-sm-12 col-12 sliderContentLeft">
                    <div class="thumbnail">
                        <a href="product/index/<?=$row['id']?>">
                            <div class="caption">
                                <p><?=$row['title']?></p>
                            </div>
                            <img src="public/image/products/<?=$row['id']?>/product_300.png" alt="" style="width:100%">

                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-12 sliderContentRight">
                    <p class="subject">
                        Discount Festival
                    </p>
                    <div class="discountCost">
                        <div class="mainCost"><?=$row['price']?></div>
                        <div class="discount"><?=$row['price_total']?> &euro;</div>
                    </div>
                    <p>
                        first properties : this is a properties
                    </p>
                    <p>
                        second properties : this is a properties
                    </p>
                    <p>
                        third properties : this is a properties
                    </p>

                </div>



            </div>
        <?php
        }
        ?>
        <div class="end-discount">

            end discount!

        </div>

    </div>

    <div class="flipTimer">
        <div class="hours"></div>
        <div class="minutes"></div>
        <div class="seconds"></div>
    </div>
</div>
<script>
    $('.flipTimer').flipTimer({

        // count up or countdown
        direction: 'down',

        // the target date
        date:'<?php echo $date_end ?>',

        // callback works only with direction = "down"
        callback: function() {
            //when end Timer this code run!
            $('.sliderContentRight').css('opacity',0.4);
            $('.sliderContentLeft').css('opacity',0.4);
            $('.flipTimer').css('opacity',0.4);
            $('.end-discount').css('display','block');

        },

        // custom date
        days:false

    });
</script>