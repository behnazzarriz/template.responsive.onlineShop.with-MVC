
<!--MainContent start-->
<div class="container home">
    <div class="banner">
    </div>
    <div class="row main">
        <!--content-->
        <div class="content col-lg-8 col-md-8 col-sm-12">
            <!--First slider-->
         <?php
         require_once ('firstSlider.php');
         ?>
            <!--End First slider-->
            <!--services-->
           <?php
           require_once ('services.php');
           ?>
            <!--Second slider-->
            <?php
            require_once ('secondSlider.php');
            ?>
            <!--End Second slider-->

            <div class="clearfix"></div>

            <!-- First Slider scroll-->
            <?php
            require_once('onlyInOnlineShop.php');
            ?>
            <!--End  First Slider scroll-->

            <!---------------------Direct access------------------------>
            <div class="directAccess">
                <?php
                require_once ('directAccess.php');
                ?>
            </div>
            <!---------------------ٍEnd Direct access--------------------->
            <!--------------------------- Second Slider scroll---------------->
            <div class="card sliderScrollMain">
                <div class="card-header">
                    <h5>Most Viewed</h5>
                </div>
                <div class="card-body">
                    <?php
                    require_once('mostViewed.php');
                    ?>
                </div>
            </div>
            <!--End  second Slider scroll--------------------------------------->
            <!--------------------------- Third Slider scroll---------------->
            <div class="card sliderScrollMain">
                <div class="card-header">
                    <h5>Latest Products</h5>
                </div>
                <div class="card-body">
                    <?php
                    require_once ('latestProduvts.php');
                    ?>
                </div>
            </div>
            <!--End  Third Slider scroll--------------------------------------->
        </div>
        <!--end content-->
        <!---Sidebar-->
                <?php
                require_once ('sidebar.php');
                ?>
        <!--End Sidebar-->


    </div>
</div>
<!-- End MainContent --->
