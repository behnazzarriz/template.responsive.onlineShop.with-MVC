<div class="carousel slide multi-item-carousel" data-ride="carousel" id="multi_item_2">
    <div class="carousel-inner">
        <?php
        $slider=$result[4];
        $lengthSlider=count($slider);
        $count=ceil($lengthSlider/3);
        $counterSlide=0;
        $counter=0;
        $activeSlider=0;
            for ($i=0;$i<$count;$i++) {
                $activeSlider++;
                ?>
                <div class="carousel-item <?php if($activeSlider==1){echo 'active';} ?>">
                    <div class="row">
                        <?php
                        for($j=$counter;$j<$lengthSlider;$j++){
                            ?>
                            <div class="col-sm">
                                <a href="product/index/<?=$slider[$j]['id']?>">
                                    <img class="img-fluid" src="public/image/products/<?=$slider[$j]['id']?>/product_300.png" alt="">
                                    <p class="text-danger"><?=$slider[$j]['price']?></p>
                                </a>
                            </div>
                            <?php
                            $counterSlide++;
                            if($counterSlide==3){
                                $counter=$counterSlide+$counter;
                                $counterSlide=0;
                                break;
                            }
                        }

                        ?>
                    </div>
                </div>
                <?php
            }
        ?>
    </div>
    <a class="carousel-control-prev" href="#multi_item_2" role="button" data-slide="prev">
        <i class="fa fa-chevron-left"></i>
    </a>
    <a class="carousel-control-next" href="#multi_item_2" role="button" data-slide="next">
        <i class="fa fa-chevron-right"></i>
    </a>
</div>