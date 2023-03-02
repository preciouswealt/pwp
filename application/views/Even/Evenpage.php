<div style="margin: 20px;">
    <div class="container">
        <h3 style="text-align: center;">อีเว้น</h3>
        <br />
        <div class="row">
            <?php foreach ($evens as $n) { ?>
                <div class="col-md-3">
                    <div class="card" style="width: 18rem;">
                        <img src="<?php echo base_url('assets/img/even/' . $n->image_even); ?>" class="card-img-top" src="..." alt="Card image cap" style="height:250px">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $n->title; ?></h5>
                            <a href="<?php echo site_url('Detail_even/' . $n->id . ''); ?>">...ดูรายละเอียด</a>
                        </div>
                    </div>
                    <!-- </?php echo $n->title; ?>
            </?php echo $n->detail; ?>
            </?php echo $n->image_new; ?> -->
                    <br />
                </div>
            <?php } ?>
        </div>

    </div>

</div>