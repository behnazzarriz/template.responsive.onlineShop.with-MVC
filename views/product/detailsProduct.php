<div class="row details">
    <div class="col-md-4 col-12">
        <div class="card gallery">
            <div class="card-body">
                <div class="w-100 text-left ">
                    <span class="card-link"><a href="#" class="fa fa-share-alt text-secondary"></a></span>
                    <span class="card-link"><a href="#" class="fa fa-heart text-secondary"></a></span>
                </div>
                <?php
                require_once ('imageGallery.php');
                ?>

            </div>
        </div>
    </div>

    <div class="col-md-8 col-12">
        <div class="card mt-4">
            <div class="card-header">
                <div class="row">
                    <div class="col-8 text-left text-secondary">
                        <h5 class="text-dark"><?=$productInfo['title']?> </h5>
                        <p class="moreInfo">Two SIM card</p>
                    </div>
                    <div class="col-4 text-left">
                        <div class="rating">
                            <div class="rating-wrap">
                                    <span class="stars-active" style="width:55%">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </span>
                                <span class="stars-inactive">
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                    </span>

                            </div>

                        </div>
                        <div class="text-secondary pl-2 points">
                            7 Points of 754
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row text-left">
                    <div class="col-md-7">
                        <h6 class="text-secondary">Choose Color</h6>
                        <?php
                        $allColors=$productInfo['all_colors'];
                        $activeItem=0;

                        ?>
                        <ul class="colors">
                            <?php
                            foreach ($allColors as $color){
                                $activeItem++;
                                ?>
                                <li>
                                <span>
                                    <i style="color:<?=$color['hex']?> "class="fa fa-circle mr-1 <?php if($activeItem==1) echo 'active'?>"></i>
                                    <?=$color['title']?>
                                </span>
                                </li>
                            <?php
                            }
                            ?>
                        </ul>
                        <h6 class="text-secondary mt-4">Guarantee selection</h6>
                        <label for="select1" class="d-none"></label>
                        <?php
                        $allGrantees=$productInfo['all_grantee'];

                        ?>
                        <select class="custom-select" id="select1">
                            <?php
                            foreach ($allGrantees as $grantee){
                              ?>
                                <option data-id="<?=$grantee['id']?>"><?=$grantee['title']?></option>
                            <?php
                            }
                            ?>


                        </select>
                        <div class="w-100 text-secondary mt-4">
                            <span class="OldDiscount"><i class="fa fa-sort-amount-down"></i>Cost : <?=$productInfo['price']?> &euro;</span>
                            <span class="bgDiscount text-white ml-2">
                                   Discount <span> <?=$productInfo['price_discount']?> &euro;</span>
                                </span>
                        </div>
                        <div class="w-100 text-secondary mt-4">
                            <span><i class="fa fa-sort-amount-up-alt"></i>
                                Price for you : <?=$productInfo['price_total']?> &euro;
                            </span>
                        </div>
                        <div class="w-100 text-white mt-4">
                            <a class="btn btn-success" href="#">
                                <span class="fa fa-shopping-basket mr-2"></span> Add to Cart
                            </a>
                            <a class="btn btn-secondary">
                                <span class="fa fa-angle-down mr-2"></span>Comparison
                            </a>
                        </div>
                    </div>
                    <div class="col-md-5 moreItems ">
                        <ul class="text-secondary m-md-0 p-0 mt-4">
                            <li>SIM card number :<span class="ml-2"> Two Sim card</span></li>
                            <li>Internal memory :<span class="ml-2">32 GB</span></li>
                        </ul>
                        <a href="#"><span class="fa fa-plus"></span> More</a>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <!--services-->
                <div id="services">
                    <ul class="p-0 m-0">
                        <li>
                            <a href="">
                                <i class="fa fa-calendar"></i>7 days guarantee return
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fa fa-credit-card"></i>Pay in person
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fa fa-check-circle"></i>guarantee of goods
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fa fa-truck"></i>Fast delivery
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fa fa-money"></i>Price Guarantee
                            </a>
                        </li>



                    </ul>
                </div>

            </div>
        </div>
    </div>

</div>