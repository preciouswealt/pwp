<div style="margin: 20px;">
    <div class="container">
        <h3 style="text-align: center;">ข่าวสาร</h3>
        <br />
        <div class="row">
            <?php foreach ($news as $n) { ?>
              
                <div class="col-md-3">
                <a href="<?php echo site_url('Detail_news/' . $n->id . ''); ?>">
                    <div class="card" style="width: 18rem;">
                        <img src="<?php echo base_url('assets/img/news/' . $n->image_new); ?>" class="card-img-top" src="..." alt="Card image cap" style="height:300px">
                        <div class="card-body">
                            <b class="card-title"><?php echo $n->title; ?></b>
                        </div>
                    </div>
                    <br />
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
</div>