<div class="carousel firstSlide row">
    <div class="sliderImg col-lg-12 col-md-8 col-sm-8 col-8 ">
        <?php
        foreach ($result[0] as $slider){
        ?>
            <a href="<?=$slider['link']?>" class="item">
                <img src="<?=$slider['image']?>" alt="">
            </a>
        <?php
        }
        ?>
        <i class="fa fa-chevron-left next"></i>
        <i class="fa fa-chevron-right prev"></i>
    </div>
    <div class="sliderNavigation col-lg-12 col-md-4 col-sm-4 col-4 ">
        <ul>
            <li >
                Water and sun products
            </li>
            <li>
                New series Vaio
            </li>
            <li>
                Handsfree special sale
            </li>
            <li>
                Portable speakers
            </li>
            <li>
                Summer Toys
            </li>
        </ul>
    </div>
</div>