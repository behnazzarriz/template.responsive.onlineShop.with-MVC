
<img id="ImageZoom" class="img-fluid" src="public/image/products/<?=$productInfo['id']?>/product_600.png"
     data-zoom-image="public/image/products/<?=$productInfo['id']?>/product_1200.png" alt="">

<?php
$images=$result['gallery'];
?>
<ul class="row thumbnail">
    <li class="col-md-2 col-2 d-flex justify-content-center text-center" data-main-image="public/image/productPage/large/1a.png">
        <div  class="more">
            <div class="more-circle"></div>
        </div>
    </li>
    <?php
    foreach ($images as $image){
        if($image['3d']==0){
            ?>
            <li class="col-md-2 col-2"  data-main-image="image/products/<?=$image['productId']?>/gallery/large/<?=$image['image']?>">
                <div>
                    <img alt="" src="public/image/products/<?=$image['productId']?>/gallery/small/<?=$image['image']?>" class="img-fluid">
                </div>
            </li>
            <?php
        }

    }
    ?>




</ul>


<!--lightBox ImageGallery-->
<div id="productGalleryModal" class="modal">
    <div class="productGalleryModal-content">
        <div class="card">
            <div class="card-header text-dark position-relative">
                <span class=" fa fa-close"></span>
                <h5>

                   <?= $productInfo['title']?>
                </h5>
            </div>
            <div class="card-body">
                <div class="row">

                    <div class="col-md-9 col-7 right">
                        <div class="item">
                            <!--for 3d Image-->
                            <canvas id="CV" class="img-fluid"></canvas>

                            <!--for not 3d Image-->
                            <img class="img-fluid" src="" alt="">
                        </div>

                    </div>
                    <div class="col-md-3 col-5 left  ">
                        <ul class="thumbnail-lightBox">
                            <?php
                            foreach ($images as $image){
                                if($image['3d']==1){
                                    ?>
                                    <!--for 3d Image-->
                                    <li>

                                        <img alt="" src="public/image/products/<?=$image['productId']?>/gallery/small/<?=$image['image']?>" data-main-image="" class="img-fluid">
                                        <i class="icon3d"></i>


                                    </li>

                                    <?php
                                }
                                else{
                                    ?>
                                    <li>

                                        <img alt="" src="public/image/products/<?=$image['productId']?>/gallery/small/<?=$image['image']?>" data-main-image="image/products/<?=$image['productId']?>/gallery/large/<?=$image['image']?>" class="img-fluid">

                                    </li>
                                    <?php
                                }
                            }
                            ?>



                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!--End lightBox ImageGallery-->
<script>
    /**********************************************3D Image**********************************************************/
    /*get element tag by Id*/
    var canvasTag=document.getElementById("CV");

    /*creat variable of class Viewer with option address image*/
    var viewer=new JSC3D.Viewer(canvasTag,{
        SceneUrl:'public/image/products/<?=$productInfo['id']?>/3d/3d.obj',
        RenderMode:'texturesmooth',
        InitRotationX:0,
        InitRotationY:100,
        InitRotationZ:0,
        Definition:'high'

    });
    /**********************************************End 3D Image**********************************************************/
</script>