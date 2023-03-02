<!-- ======= About Us Section ======= -->
<section id="about" class="about">
    <div class="container">
        <?php foreach ($aboutus as $b) { ?>
            <div class="section-title">
                <h2>เกี่ยวกับเรา</h2>
            </div>

            <div class="row">
                <div class="col-lg-6 order-1 order-lg-2">
                    <img src="<?php echo base_url(); ?>assets/img/logo.jpg" class="img-fluid" alt="" style="width:100%">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                    <h3><?php echo str_replace("เกี่ยวกับ","",$b->title); ?></h3>
                    <?php echo $b->detail; ?>
                    <!-- <ul>
              <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="bi bi-check-circled"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
              <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
            </ul>
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum
            </p> -->
                </div>
            </div>
        <?php } ?>
    </div>
</section><!-- End About Us Section -->