<div class="sidebar col-lg-4 col-md-4 col-sm-12">
    <div class="card-header text-center">
        Amazing suggestion
    </div>

    <div class="card-body">
        <?php
        require_once ('digital_Tv.php');
        ?>
        <?php
        require_once ('sidebarRight.php');
        ?>
        <div id="lastNewsSidebar">
            <h6>Latest News</h6>
            <?php
            require_once ('latesNews.php');
            ?>
        </div>
        <div id="brands" class="row">
            <?php
            require_once ('brands.php');
            ?>

        </div>
    </div>
</div>