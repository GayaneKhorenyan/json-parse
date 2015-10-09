<div class="container " >
    <div class="row content">
        <?php foreach($result as $value):
            if($value->Image)
            {
            ?>
            <div class="col-xs-12  col-sm-6 col-md-4"  >
                <div class="thumbnail view-block" >
                    <a href='<?= $value->Link ?>' target="_blank">
                        <img class="img-responsive" src="<?= $value->Image?>" style="width: 300px; height:250px;" >
                    </a>
                        <div class="caption">
                            <h4 class="text-center"><?= $value->Title?></h4>
                            <p class=""><?= $value->Description ?></p>
                        </div>
                </div>
            </div>
            <?php } endforeach; ?>
    </div>
</div>