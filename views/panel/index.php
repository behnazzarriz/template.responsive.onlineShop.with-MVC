
<link href="public/css/userPanel.css" rel="stylesheet">
<script src="public/js/panel.js"></script>
<!--MainContent start-->
<div class="container userPanel bg-white pt-4 pb-4">
    <?php
    require_once ('userInformation.php');
    require_once ('performanceReport.php');
    ?>
    <!-----------------------------tab---------------------------------->
    <div class="card mt-4">

        <ul id="tab" class="nav nav-tabs" role="tablist">
            <li class="nav-item"><a href="#MyMessages" class="nav-link text-secondary" aria-controls="MyMessages" role="tab" data-toggle="tab">My messages</a></li>
            <li class="nav-item"><a href="#MyOrders" class="nav-link text-secondary" aria-controls="MyOrders" role="tab" data-toggle="tab">My orders</a></li>
            <li class="nav-item"><a href="#MyFavoriteList" class="nav-link text-secondary" aria-controls="MyFavoriteList" role="tab" data-toggle="tab">My favorite list</a></li>
            <li class="nav-item"><a href="#MyComments" class="nav-link text-secondary " aria-controls="MyComments" role="tab" data-toggle="tab">My comments</a></li>
            <li class="nav-item"><a href="#MyTickets" class="nav-link text-secondary active" aria-controls="MyTickets" role="tab" data-toggle="tab">My tickets</a></li>
            <li class="nav-item"><a href="#MyGiftCards" class="nav-link text-secondary" aria-controls="MyGiftCards" role="tab" data-toggle="tab">My gift cards</a></li>

        </ul>

        <div id="tabContent" class="tab-content">
            <div role="tabpanel" id="MyMessages" class="tab-pane p-3">
                <?php
                require_once ('tab1MyMessage.php');
                ?>
            </div>
            <div role="tabpanel" id="MyOrders" class="tab-pane p-3" >
                <?php
                require_once ('tab2MyOrders.php');
                ?>
            </div>
            <div role="tabpanel" id="MyFavoriteList"  class="tab-pane p-3">
                <?php
                require_once ('tab3MyFavoriteList.php');
                ?>
            </div>
            <div role="tabpanel" id="MyComments" class="tab-pane p-3  myComments" >
                <?php
                require_once('tab4MyComment.php');
                ?>
            </div>
            <div role="tabpanel"  id="MyTickets" class="tab-pane p-3 active myTickets">
                <?php
                require_once('tab5MyThickets.php');
                ?>
            </div>
            <div role="tabpanel" id="MyGiftCards" class="tab-pane p-3" >
                <?php
                require_once('tab6MyGiftCards.php');
                ?>
            </div>
        </div>

    </div>
    <!-----------------------------end Tab------------------------------>



</div>
<!-- End MainContent --->
