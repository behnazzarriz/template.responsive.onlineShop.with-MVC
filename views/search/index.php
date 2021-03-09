
<link href="public/css/slider.css" rel="stylesheet">
<link href="public/css/search.css" rel="stylesheet">
<!--End of navigation-->
<!--SearchContent start-->
<div class="container search bg-white">
    <div class="row">
        <!---Content-->
        <div class="col-md-9 col-12 pl-4 mb-4">
            <!-----------------------page navigator-->
            <?php
            require_once ('navigator.php');
           /***********************-end page navigator-*/

           /*************************filter_top********/
            require_once ('filter_top.php');


            /******************search********/
            require_once ('search.php');

            /***************pagination*********/
            require_once ('pagination.php');

            /*********************product****/
            require_once ('products.php');
            ?>




        </div>
        <!--End Content-->
        <!--Sidebar-->
        <div class="col-md-3 col-12 sidebar mt-4 mb-4">
            <?php
            require_once ('sidebar.php');
            ?>
        </div>
        <!--End Sidebar-->
    </div>
</div>
<!-- End SearchContent --->


<script src="public/js/search.js"></script>
</html>