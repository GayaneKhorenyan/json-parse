<div class="container">
    <div class="row content">
        <?php foreach($result as $value): ?>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="thumbnail content-block" style="width:100%; height: 350px; overflow: hidden;">
                    <a href="<?= base_url("view/$value->Id")?>" target="_blank">
                        <img class="img-responsive" src="<?= $value->Logo?>" style="width: 300px; height:250px;" alt="<?= $value->Name ?>">
                        <div class="caption">
                            <h3 class="text-center"><?= $value->Name?></h3>
                        </div>
                    </a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>