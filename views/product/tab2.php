
<h5 class="text-dark">Technical Specifications</h5>
<p class="pl-2 text-secondary"></p>
<?php
$fanni=$result['fanni'];
foreach ($fanni as $attr_parent){
    $children=$attr_parent['children'];
    ?>
    <h6 class="text-primary mb-3 technical"><span class="iconTitre mr-3"></span><?=$attr_parent['title']?></h6>
    <?php
    foreach ($children as $child){
        ?>
        <div class="row text-secondary pl-3 mb-2">
            <div class="col-3 mr-2 bg-light rounded text-break"><?=$child['title']?></div>
            <div class="col-7 bg-light rounded">
                <?php
                if($child['value']==''){
                    echo '-';
                }
                else
                {
                    echo $child['value'];
                }
                ?>
            </div>
        </div>
        <?php
    }
    ?>

<?php
}
?>



