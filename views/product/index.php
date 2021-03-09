<!--customScrollBar Css-->
<link href="public/css/productPage.css" rel="stylesheet">
<link rel="stylesheet" href="public/js/customScrollbar/jquery.mCustomScrollbar.min.css">
<!--image Zomm js-->
<script src="public/js/zoomImage/jquery.ez-plus.js"></script>
<!--customScrollBar js-->
<script src="public/js/customScrollbar/jquery.mCustomScrollbar.concat.min.js"></script>

<!--3d Image-->
<script src="public/js/jsc3d/js3d.js"></script>
<script src="public/js/jsc3d/jsc3d.touch.js"></script>
<script src="public/js/jsc3d/jsc3d.webgl.js"></script>


<!--productPageContent start-->

<div class="container productPage bg-white pb-4">
    <?php
  $productInfo=$result['productInfo'];
  if($productInfo['special']==1){
      require_once ('offer.php');
  }

    require_once ('detailsProduct.php');

    require_once ('introductionProduct.php');


    ?>
    <!------------------------------------Just in this online shop slider-->
    <?php
    require_once('onlyInOnlineShop.php');
    ?>
    <!-------------------------------------End  in this online shop slider-->
    <!-------------------------------------start Tab ----------------------->
    <div class="w-100 mt-4">
        <?php
        require_once ('tab.php');
        ?>
    </div>
    <!--------------------------------End start Tab ------------------------>
</div>
<!-- End productPageContent --->
<script src="public/js/productPage.js"></script>