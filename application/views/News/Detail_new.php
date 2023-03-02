<div style="margin: 20px;">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?php foreach ($news_detail as $r) { ?>
                    <br />
                    <h3 style="color:#049bba;"><b><?php echo  $r->title ?></b></h3>
                    <hr style=" margin-top: 20px; margin-bottom: 20px; border: 0; border-top: 2px solid #049bba;">
                    <div style="text-align: center;"> <img src="<?php echo base_url('assets/img/news/' . $r->image_new); ?>" alt="properties" style="width:70%;text-align:center;" /></div>
                    <div style="margin: 25px;"></div>
                    <div style="color:black; font-size:15px">
                        <?php echo  $r->title ?><br />
                        <?php echo  $r->detail ?>
                    </div>
                <?php } ?>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-3" style="padding-right: 0px;padding-left: 0px;">
                <div style="margin: 70px;"></div>
                <p style="color:#049bba;text-align:left; "><b>-ข่าวสารต่างๆ<b></p>
                <div class="row" style=" margin-right: 20px; margin-left: 20px;">
                    <hr style="border-top: 1px solid #049bba; margin-top: 1.4rem;">
                </div>
                <?php foreach ($news_Allright as $rn) { ?>
                    <div class="row" style=" margin-right: 20px; margin-left: 20px;">
                        <div class="col-md-6" style="padding-right: 3px;padding-left: 2px;">
                            <?php if (strlen($rn->title) > 30) { ?>
                                <p style="color:#049bba; font-size:12px"><b> <?php echo  substr($rn->title, 0, 90) . "..."; ?></b></p>
                            <?php  } else { ?>
                                <p style="color:#049bba; font-size:12px"><b><?php echo  $rn->title ?></b></p>
                            <?php  } ?>
                            <br />
                            <p style="font-size: 10px;color:#000"><?php echo date("d-m-Y", strtotime($rn->savedate)) ?></p>
                        </div>
                        <div class="col-md-6" style="padding-right: 0px; padding-left: 0px;">
                            <a href="<?php echo site_url('Detail_news/' . $rn->id . ''); ?>">
                                <img src="<?php echo base_url('assets/img/news/' . $rn->image_new); ?>" class="img-responsive" alt="properties" style="width:100%; border-radius: 10px 10px 10px 10px;" />
                            </a>
                        </div>
                    </div>
                    <div class="row" style=" margin-right: 20px; margin-left: 20px;">
                        <hr style="border-top: 1px solid #049bba;margin-top: 0.5rem;margin-bottom: 0.5rem;">
                    </div>
                <?php } ?>
                <div style="text-align: center;">
                    <a href="<?php echo site_url('News') ?>" style="color:#049bba;font-size:12px "><b>ข่าวสารทั้งหมด</b></a>
                    <div class="row" style=" margin-right: 20px; margin-left: 20px;">
                        <hr style="border-top: 1px solid #049bba;margin-top: 0rem;margin-bottom: 0rem;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br />