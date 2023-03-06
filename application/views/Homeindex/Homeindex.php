<!-- ======= Hero Section ======= -->
<section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
        <?php foreach ($image as $i) { ?>
            <div class="" role="listbox">
                <?php if ($i->status_image == '1') { ?>
                    <<div class="carousel-item active" style="background-image: url(<?php echo base_url('assets/img/slide/' . $i->nameimage); ?>)">
                        <div class="carousel-container">
                            <div class="container">
                                <?php echo  $i->topic; ?>
                            </div>
                        </div>
                    <?php  } elseif ($i->status_image == '2') { ?>
                        <div class="carousel-item" style="background-image: url(<?php echo base_url('assets/img/slide/' . $i->nameimage); ?>)">
                            <div class="carousel-container">
                                <div class="container">
                                    <?php echo  $i->topic; ?>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
            </div>
        <?php } ?>
        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

    </div>
</section><!-- End Hero -->

<main id="main">
    <div class="container-fluid py-4 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <?php foreach ($aboutus as $b) { ?>
                <br />
                <h2 style="text-align: center;" class="animate__animated animate__fadeInDown">
                    <?php echo $b->title; ?>
                </h2>
                <br />
                <div class="row gx-5">
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <div class="position-relative">
                            <img class="position-absolute  rounded wow zoomIn" data-wow-delay="0.3s" src="<?php echo base_url(); ?>assets/img/logo.jpg" style="object-fit: cover;width:100%">
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <?php echo $b->detail; ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <div style="margin: 10%;"></div>
    <div class="container">
        <hr />
    </div>
    <section id="featured-services" class="featured-services section-bg">
        <div class="container">
            <h2 style="text-align: center;" class="animate__animated animate__fadeInDown"><strong>ขายฝาก กับ <span style="color:#049bba;">Precious</span> <span class="text-warning">wealth
                        property</span></strong></h2>
            <br />
            <div class="row no-gutters">
                <div class="col-lg-2 col-md-6"></div>
                <div class="col-lg-4 col-md-6">
                    <div class="icon-box " style="border:  2px solid #049bba;height:250px">
                        <div class="icon animate__animated animate__fadeInDown"><i class="bi bi-coin"></i></div>
                        <h4 class="title animate__animated animate__fadeInDown"><a href="">ดอกเบี้ย 0.75%</a></h4>
                        <p class="description animate__animated animate__fadeInDown">ดอกเบี้ยเริ่มต้น 0.75%/เดือน
                            วงเงินมีโอกาสได้สูงถึง 70 %</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="icon-box" style="border: 2px solid #049bba;height:250px">
                        <div class="icon animate__animated animate__fadeInDown"><i class="bi bi-credit-card"></i></div>
                        <h4 class="title animate__animated animate__fadeInDown"><a href="">ไม่เช็คเครดิตบูโร</a></h4>
                        <p class="description animate__animated animate__fadeInDown">ไม่เช็คเครดิตบูโร
                            ไม่ต้องใช้สลิปหรือ เช็คประวัติการเงิน และไม่จำเป็นต้องใช้คนค้ำประกัน</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6"></div>
            </div>
        </div>
    </section>
    <br />
    <!-- ======= show top 5 product ======= -->
    <section id="featured-services" class="featured-services section-bg">
        <div class="container">
            <h2 style="text-align: center;"><strong>ข้อมูลทรัพย์</strong></h2>
            <br />
            <?php if (count($properties5) == 0) { ?>
            <?php } else { ?>
                <p><b>โครงการทรัพย์ใหม่</b></p>
                <div class="owl-carousel owl-theme">
                    <?php foreach ($properties5 as $ipro) { ?>
                        <?php if ($ipro->type_product == '5') { ?>
                            <div class="item">
                                <div class="card">
                                    <img src="<?php echo base_url('property/' . $ipro->p_code . '/' . $ipro->p_image); ?>" style="height:200px">
                                    <div class="card-body" style="height: 380px;">
                                        <div style="text-align: center;">
                                            <?php if (strlen($ipro->p_name) > 70) { ?>
                                                <p><b><?php echo  mb_substr($ipro->p_name, 0, 70, 'UTF-8') . "..."; ?></b></p>
                                            <?php  } else { ?>
                                                <p><b><?php echo  $ipro->p_name ?></b></p>
                                            <?php  } ?>
                                        </div>
                                        <div class="row">
                                            <?php if ($ipro->status_match == "available") { ?>
                                                <span class="badge bg-success">Available</span>
                                            <?php } else { ?>
                                                <span class="badge bg-danger">Done</span>
                                            <?php } ?>
                                        </div>
                                        <hr style="border: 0px;" />
                                        <p style="font-size: 13px; margin-bottom: 0rem;"><i style="color:#049bba" class="bi bi-house"></i> รหัสทรัพย์ : <?php echo $ipro->p_code ?></p>
                                        <hr style="margin: 0.3rem 0;" />
                                        <p style="font-size: 13px; margin-bottom: 0rem;"><i class="bi bi-geo-alt" style="color:#049bba"></i> <?php echo $ipro->district . ',' . $ipro->supdistrict ?></p>
                                        <hr style="margin: 0.3rem 0;" />
                                        <p style="font-size: 13px; margin-bottom: 0rem;"><i class="bi bi-plus-square" style="color:#049bba"></i> พื้นที่ <?php echo $ipro->square_meter ?> ตร.ม,
                                            <?php echo $ipro->square_wah ?> ตร.วา</p>
                                        <hr style="margin: 0.3rem 0;" />
                                        <p style="font-size: 13px; margin-bottom: 0rem;"><i class="bi bi-credit-card" style="color:#049bba"></i> มูลค่าทรัพย์ <?php
                                                                                                                                                                if ($ipro->p_price == '') {
                                                                                                                                                                    echo "x,xxx,xxx";
                                                                                                                                                                } else {
                                                                                                                                                                    echo $ipro->p_price;
                                                                                                                                                                } ?>
                                            บาท</p>
                                        <hr style="margin: 0.3rem 0;" />
                                        <!-- <p style="font-size: 13px; margin-bottom: 0rem;"><i class="bi bi-credit-card"
                                    style="color:#049bba"></i> วงเงินขายฝาก xxx,xxx</p>
                            <hr style="margin: 0.3rem 0;" />
                            <p style="font-size: 13px; margin-bottom: 0rem;"><i class="bi bi-coin"
                                    style="color:#049bba"></i> ดอกเบี้ย 90,000 บาท/ปี(9%) </p>
                            <hr style="margin: 0.3rem 0;" /> -->
                                        <!-- <a href="#">...ดูรายละเอียด</a> -->
                                        <a href="<?php echo site_url('Detail_Propertyproject/' . $ipro->id . ''); ?>">...ดูรายละเอียด</a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    <?php } ?>
                </div>
                <a href="<?php echo site_url('Propertysale') ?>">..เพิ่มเติม..</a>
                <hr />
            <?php } ?>
            <?php if (count($properties4) == 0) { ?>
            <?php } else { ?>
                <p><b>อสังหาริมทรัพย์ที่ประกาศขาย</b></p>
                <div class="owl-carousel owl-theme">
                    <?php foreach ($properties4 as $ipro) { ?>
                        <?php if ($ipro->type_product == '4' or $ipro->type_product == '6' or $ipro->type_product == '7' or $ipro->type_product == '8') { ?>
                            <div class="item">
                                <div class="card">
                                    <img src="<?php echo base_url('property/' . $ipro->p_code . '/' . $ipro->p_image); ?>" style="height:200px">
                                    <div class="card-body" style="height: 380px;">
                                        <div style="text-align: center;">
                                            <?php if (strlen($ipro->p_name) > 70) { ?>
                                                <p><b><?php echo  mb_substr($ipro->p_name, 0, 70, 'UTF-8') . "..."; ?></b></p>
                                            <?php  } else { ?>
                                                <p><b><?php echo  $ipro->p_name ?></b></p>
                                            <?php  } ?>
                                            <!-- </?php echo $ipro->p_name ?> -->
                                        </div>
                                        <div class="row">
                                            <?php if ($ipro->status_match == "available") { ?>
                                                <span class="badge bg-success">Available</span>
                                            <?php } else { ?>
                                                <span class="badge bg-danger">Done</span>
                                            <?php } ?>
                                        </div>
                                        <hr style="border: 0px;" />
                                        <p style="font-size: 13px; margin-bottom: 0rem;"><i style="color:#049bba" class="bi bi-house"></i> รหัสทรัพย์ : <?php echo $ipro->p_code ?></p>
                                        <hr style="margin: 0.3rem 0;" />
                                        <p style="font-size: 13px; margin-bottom: 0rem;"><i class="bi bi-geo-alt" style="color:#049bba"></i> <?php echo $ipro->district . ',' . $ipro->supdistrict ?></p>
                                        <hr style="margin: 0.3rem 0;" />
                                        <p style="font-size: 13px; margin-bottom: 0rem;"><i class="bi bi-plus-square" style="color:#049bba"></i> พื้นที่ <?php echo $ipro->square_meter ?> ตร.ม,
                                            <?php echo $ipro->square_wah ?> ตร.วา</p>
                                        <hr style="margin: 0.3rem 0;" />
                                        <p style="font-size: 13px; margin-bottom: 0rem;"><i class="bi bi-credit-card" style="color:#049bba"></i> มูลค่าทรัพย์ <?php
                                                                                                                                                                if ($ipro->p_price == '') {
                                                                                                                                                                    echo "x,xxx,xxx";
                                                                                                                                                                } else {
                                                                                                                                                                    echo $ipro->p_price;
                                                                                                                                                                } ?>
                                            บาท</p>
                                        <hr style="margin: 0.3rem 0;" />
                                        <!-- <p style="font-size: 13px; margin-bottom: 0rem;"><i class="bi bi-credit-card"
                                    style="color:#049bba"></i> วงเงินขายฝาก xxx,xxx</p>
                            <hr style="margin: 0.3rem 0;" />
                            <p style="font-size: 13px; margin-bottom: 0rem;"><i class="bi bi-coin"
                                    style="color:#049bba"></i> ดอกเบี้ย 90,000 บาท/ปี(9%) </p>
                            <hr style="margin: 0.3rem 0;" /> -->
                                        <!-- <a href="#">...ดูรายละเอียด</a> -->
                                        <a href="<?php echo site_url('Detail_Propertysale/' . $ipro->id . ''); ?>">...ดูรายละเอียด</a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    <?php } ?>
                </div>
                <a href="<?php echo site_url('Propertysale') ?>">..เพิ่มเติม..</a>

                <hr />
            <?php } ?>
            <?php if (count($properties3) == 0) { ?>
            <?php } else { ?>
                <p><b>เช่าอสังหาริมทรัพย์</b></p>
                <div class="owl-carousel owl-theme">
                    <?php foreach ($properties3 as $ipro) { ?>
                        <?php if ($ipro->type_product == '3') { ?>
                            <div class="item">
                                <div class="card">
                                    <img src="<?php echo base_url('property/' . $ipro->p_code . '/' . $ipro->p_image); ?>" style="height:200px">
                                    <div class="card-body" style="height: 380px;">
                                        <div style="text-align: center;">
                                            <!-- </?php echo $ipro->p_name ?> -->
                                            <?php if (strlen($ipro->p_name) > 70) { ?>
                                                <p><b><?php echo  mb_substr($ipro->p_name, 0, 70, 'UTF-8') . "..."; ?></b></p>
                                            <?php  } else { ?>
                                                <p><b><?php echo  $ipro->p_name ?></b></p>
                                            <?php  } ?>
                                        </div>
                                        <div class="row">
                                            <?php if ($ipro->status_match == "available") { ?>
                                                <span class="badge bg-success">Waiting for Investors</span>
                                            <?php } else { ?>
                                                <span class="badge bg-danger">MACTH</span>
                                            <?php } ?>
                                        </div>
                                        <hr style="border: 0px;" />
                                        <p style="font-size: 13px; margin-bottom: 0rem;"><i style="color:#049bba" class="bi bi-house"></i> รหัสทรัพย์ : <?php echo $ipro->p_code ?></p>
                                        <hr style="margin: 0.3rem 0;" />
                                        <p style="font-size: 13px; margin-bottom: 0rem;"><i class="bi bi-geo-alt" style="color:#049bba"></i> <?php echo $ipro->district . ',' . $ipro->supdistrict ?></p>
                                        <hr style="margin: 0.3rem 0;" />
                                        <p style="font-size: 13px; margin-bottom: 0rem;"><i class="bi bi-plus-square" style="color:#049bba"></i> พื้นที่ <?php echo $ipro->square_meter ?> ตร.ม,
                                            <?php echo $ipro->square_wah ?> ตร.วา</p>
                                        <hr style="margin: 0.3rem 0;" />
                                        <p style="font-size: 13px; margin-bottom: 0rem;"><i class="bi bi-credit-card" style="color:#049bba"></i> มูลค่าทรัพย์ <?php
                                                                                                                                                                if ($ipro->p_price == '') {
                                                                                                                                                                    echo "x,xxx,xxx";
                                                                                                                                                                } else {
                                                                                                                                                                    echo $ipro->p_price;
                                                                                                                                                                } ?>
                                            บาท</p>
                                        <hr style="margin: 0.3rem 0;" />
                                        <!-- <p style="font-size: 13px; margin-bottom: 0rem;"><i class="bi bi-credit-card"
                                    style="color:#049bba"></i> วงเงินขายฝาก xxx,xxx</p>
                            <hr style="margin: 0.3rem 0;" />
                            <p style="font-size: 13px; margin-bottom: 0rem;"><i class="bi bi-coin"
                                    style="color:#049bba"></i> ดอกเบี้ย 90,000 บาท/ปี(9%) </p>
                            <hr style="margin: 0.3rem 0;" /> -->
                                        <!-- <a href="#">...ดูรายละเอียด</a> -->
                                        <a href="<?php echo site_url('Detail_Rentproperty/' . $ipro->id . ''); ?>">...ดูรายละเอียด</a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    <?php } ?>
                </div>
                <a href="<?php echo site_url('Rentproperty') ?>">..เพิ่มเติม..</a>

                <hr />
            <?php } ?>
            <?php if (count($properties2) == 0) { ?>
            <?php } else { ?>
                <p><b>จดจำนอง</b></p>
                <div class="owl-carousel owl-theme">
                    <?php foreach ($properties2 as $ipro) { ?>
                        <?php if ($ipro->type_product == '2') { ?>
                            <div class="item">
                                <div class="card">
                                    <?php if ($ipro->status_match == "available") { ?>
                                        <img src="<?php echo base_url('property/' . $ipro->p_code . '/' . $ipro->p_image); ?>" alt="properties" style="width:100%;text-align:center;" />
                                    <?php } else { ?>
                                        <div style=" background-color: red;background-image:url('<?php echo base_url('property/' . $ipro->p_code . '/' . $ipro->p_image); ?>');
                                        background-size:cover; background-position: center;display: grid;align-content:center;justify-content:center;opacity:0.5;height: 18vh;">
                                            <h1 style="color:red;">MATCH</h1>
                                        </div>
                                    <?php } ?>

                                    <!-- <img src="</?php echo base_url('property/'.$ipro->p_code .'/'. $ipro->p_image); ?>" 
                                     style="height:200px"> -->
                                    <div class="card-body" style="height: 380px;">
                                        <div style="text-align: center;">
                                            <!-- </?php echo $ipro->p_name ?> -->
                                            <?php if (strlen($ipro->p_name) > 70) { ?>
                                                <p><b><?php echo  mb_substr($ipro->p_name, 0, 70, 'UTF-8') . "..."; ?></b></p>
                                            <?php  } else { ?>
                                                <p><b><?php echo  $ipro->p_name ?></b></p>
                                            <?php  } ?>
                                        </div>
                                        <div class="row">
                                            <?php if ($ipro->status_match == "available") { ?>
                                                <span class="badge bg-success">waiting for Investors</span>
                                            <?php } else { ?>
                                                <span class="badge bg-danger">MACTH</span>
                                            <?php } ?>
                                        </div>
                                        <hr style="border: 0px;" />
                                        <p style="font-size: 13px; margin-bottom: 0rem;"><i style="color:#049bba" class="bi bi-house"></i> รหัสทรัพย์ : <?php echo $ipro->p_code ?></p>
                                        <hr style="margin: 0.3rem 0;" />
                                        <p style="font-size: 13px; margin-bottom: 0rem;"><i class="bi bi-geo-alt" style="color:#049bba"></i> <?php echo $ipro->district . ',' . $ipro->supdistrict ?></p>
                                        <hr style="margin: 0.3rem 0;" />
                                        <p style="font-size: 13px; margin-bottom: 0rem;"><i class="bi bi-plus-square" style="color:#049bba"></i> พื้นที่ <?php echo $ipro->square_meter ?> ตร.ม,
                                            <?php echo $ipro->square_wah ?> ตร.วา</p>
                                        <hr style="margin: 0.3rem 0;" />
                                        <p style="font-size: 13px; margin-bottom: 0rem;"><i class="bi bi-credit-card" style="color:#049bba"></i> มูลค่าทรัพย์ <?php
                                                                                                                                                                if ($ipro->p_price == '') {
                                                                                                                                                                    echo "x,xxx,xxx";
                                                                                                                                                                } else {
                                                                                                                                                                    echo $ipro->p_price;
                                                                                                                                                                } ?>
                                            บาท</p>
                                        <hr style="margin: 0.3rem 0;" />
                                        <!-- <p style="font-size: 13px; margin-bottom: 0rem;"><i class="bi bi-credit-card"
                                    style="color:#049bba"></i> วงเงินขายฝาก xxx,xxx</p>
                            <hr style="margin: 0.3rem 0;" />
                            <p style="font-size: 13px; margin-bottom: 0rem;"><i class="bi bi-coin"
                                    style="color:#049bba"></i> ดอกเบี้ย 90,000 บาท/ปี(9%) </p>
                            <hr style="margin: 0.3rem 0;" /> -->
                                        <!-- <a href="#">...ดูรายละเอียด</a> -->
                                        <a href="<?php echo site_url('Detail_Mortgage/' . $ipro->id . ''); ?>">...ดูรายละเอียด</a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    <?php } ?>
                </div>
                <a href="<?php echo site_url('Mortgage') ?>">..เพิ่มเติม..</a>
                <hr />
            <?php } ?>
            <?php if (count($properties1) == 0) { ?>
            <?php } else { ?>
                <p><b>ขายฝาก</b></p>
                <div class="owl-carousel owl-theme">
                    <?php foreach ($properties1 as $ipro) { ?>
                        <?php if ($ipro->type_product == '1') { ?>
                            <div class="item">
                                <div class="card">
                                <?php if ($ipro->status_match == "available") { ?>
                                        <img src="<?php echo base_url('property/' . $ipro->p_code . '/' . $ipro->p_image); ?>" alt="properties" style="width:100%;text-align:center;" />
                                    <?php } else { ?>
                                        <div style=" background-color: red;background-image:url('<?php echo base_url('property/' . $ipro->p_code . '/' . $ipro->p_image); ?>');
    background-size:cover; background-position: center;display: grid;align-content:center;justify-content:center;opacity:0.5;height: 18vh;">
                                            <h1 style="color:red;">MATCH</h1>
                                        </div>
                                    <?php } ?>

                                    <!-- <img src="</?php echo base_url('property/' . $ipro->p_code . '/' . $ipro->p_image); ?>" style="height:200px"> -->
                                    <div class="card-body" style="height: 380px;">
                                        <div style="text-align: center;">
                                            <!-- </?php echo $ipro->p_name ?> -->
                                            <?php if (strlen($ipro->p_name) > 70) { ?>
                                                <p><b><?php echo  mb_substr($ipro->p_name, 0, 70, 'UTF-8') . "..."; ?></b></p>
                                            <?php  } else { ?>
                                                <p><b><?php echo  $ipro->p_name ?></b></p>
                                            <?php  } ?>
                                        </div>
                                        <div class="row">
                                            <?php if ($ipro->status_match == "available") { ?>
                                                <span class="badge bg-success">Waiting for Investors</span>
                                            <?php } else { ?>
                                                <span class="badge bg-danger">MACTH</span>
                                            <?php } ?>
                                        </div>
                                        <hr style="border: 0px;" />
                                        <p style="font-size: 13px; margin-bottom: 0rem;"><i style="color:#049bba" class="bi bi-house"></i> รหัสทรัพย์ : <?php echo $ipro->p_code ?></p>
                                        <hr style="margin: 0.3rem 0;" />
                                        <p style="font-size: 13px; margin-bottom: 0rem;"><i class="bi bi-geo-alt" style="color:#049bba"></i> <?php echo $ipro->district . ',' . $ipro->supdistrict ?></p>
                                        <hr style="margin: 0.3rem 0;" />
                                        <p style="font-size: 13px; margin-bottom: 0rem;"><i class="bi bi-plus-square" style="color:#049bba"></i> พื้นที่ <?php echo $ipro->square_wah ?> ตร.วา</p>
                                        <hr style="margin: 0.3rem 0;" />
                                        <p style="font-size: 13px; margin-bottom: 0rem;"><i class="bi bi-credit-card" style="color:#049bba"></i> มูลค่าทรัพย์
                                            <?php
                                            if ($ipro->p_price == '') {
                                                echo "x,xxx,xxx";
                                            } else {
                                                echo $ipro->p_price;
                                            } ?>
                                            บาท</p>
                                        <hr style="margin: 0.3rem 0;" />
                                        <!-- <p style="font-size: 13px; margin-bottom: 0rem;"><i class="bi bi-credit-card"
                                    style="color:#049bba"></i> วงเงินขายฝาก xxx,xxx</p>
                            <hr style="margin: 0.3rem 0;" />
                            <p style="font-size: 13px; margin-bottom: 0rem;"><i class="bi bi-coin"
                                    style="color:#049bba"></i> ดอกเบี้ย 90,000 บาท/ปี(9%) </p>
                            <hr style="margin: 0.3rem 0;" /> -->
                                        <!-- <a href="#">...ดูรายละเอียด</a> -->
                                        <a href="<?php echo site_url('Detail_Consignment/' . $ipro->id . ''); ?>">...ดูรายละเอียด</a>

                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    <?php } ?>
                </div>
                <a href="<?php echo site_url('Consignment') ?>">..เพิ่มเติม..</a>
            <?php } ?>
        </div>
    </section><!-- news -->
    <section id="featured-services" class="featured-services section-bg">
        <div class="container">
            <h2 style="text-align: center;"><strong>ข่าวสาร</strong></h2>
            <br />
            <div class="row">
                <?php foreach ($newshome as $n) { ?>
                    <div class="col-md-3">
                        <div class="card">
                            <img src="<?php echo base_url('assets/img/news/' . $n->image_new); ?>" class="card-img-top" src="..." alt="Card image cap" style="height: 380px;">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $n->title; ?></h5>
                                <a href="<?php echo site_url('Detail_news/' . $n->id . ''); ?>">...ดูรายละเอียด</a>
                            </div>
                        </div>
                        <!-- </?php echo $n->title; ?>
            </?php echo $n->detail; ?>
            </?php echo $n->image_new; ?> -->
                        <br />
                    </div>
                <?php } ?>
            </div>
            <div style="text-align: right;">
                <a href="<?php echo site_url('News') ?>">.ข่าวสารเพิ่มเติม..</a>
            </div>

        </div>
    </section>
    <section id="featured-services" class="featured-services section-bg">
        <div class="container">
            <h2 style="text-align: center;"><strong>อีเว้น</strong></h2>

            <br />
            <div class="row">
                <?php foreach ($evenshome as $n) { ?>
                    <div class="col-md-3">
                        <div class="card">
                            <img src="<?php echo base_url('assets/img/even/' . $n->image_even); ?>" class="card-img-top" src="..." alt="Card image cap" style="height:200px">
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
            <div style="text-align: right;">
                <a href="<?php echo site_url('Even') ?>">.อีเว้นเพิ่มเติม..</a>
            </div>

        </div>
    </section>
    <!-- End Featured Services Section -->

    <!-- ======= Featured Services Section ======= -->
    <!-- <section id="featured-services" class="featured-services section-bg">
        <div class="container">

            <div class="row no-gutters">
                <div class="col-lg-4 col-md-6">
                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-laptop"></i></div>
                        <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                        <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-briefcase"></i></div>
                        <h4 class="title"><a href="">Dolor Sitema</a></h4>
                        <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-calendar4-week"></i></div>
                        <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
                        <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur trade stravi</p>
                    </div>
                </div>
            </div>

        </div>
    </section> -->
    <!-- End Featured Services Section -->

    <!-- ======= Why Us Section ======= -->
    <!-- <section id="why-us" class="why-us">
        <div class="container">

            <div class="row no-gutters">

                <div class="col-lg-4 col-md-6 content-item">
                    <span>01</span>
                    <h4>Lorem Ipsum</h4>
                    <p>Ulamco laboris nisi ut aliquip ex ea commodo consequat. Et consectetur ducimus vero placeat</p>
                </div>

                <div class="col-lg-4 col-md-6 content-item">
                    <span>02</span>
                    <h4>Repellat Nihil</h4>
                    <p>Dolorem est fugiat occaecati voluptate velit esse. Dicta veritatis dolor quod et vel dire leno para dest</p>
                </div>

                <div class="col-lg-4 col-md-6 content-item">
                    <span>03</span>
                    <h4> Ad ad velit qui</h4>
                    <p>Molestiae officiis omnis illo asperiores. Aut doloribus vitae sunt debitis quo vel nam quis</p>
                </div>

                <div class="col-lg-4 col-md-6 content-item">
                    <span>04</span>
                    <h4>Repellendus molestiae</h4>
                    <p>Inventore quo sint a sint rerum. Distinctio blanditiis deserunt quod soluta quod nam mider lando casa</p>
                </div>

                <div class="col-lg-4 col-md-6 content-item">
                    <span>05</span>
                    <h4>Sapiente Magnam</h4>
                    <p>Vitae dolorem in deleniti ipsum omnis tempore voluptatem. Qui possimus est repellendus est quibusdam</p>
                </div>

                <div class="col-lg-4 col-md-6 content-item">
                    <span>06</span>
                    <h4>Facilis Impedit</h4>
                    <p>Quis eum numquam veniam ea voluptatibus voluptas. Excepturi aut nostrum repudiandae voluptatibus corporis sequi</p>
                </div>

            </div>

        </div>
    </section> -->
    <!-- End Why Us Section -->

    <!-- ======= Our Clients Section ======= -->
    <!-- <section id="clients" class="clients">
        <div class="container">

            <div class="section-title">
                <h2>Our Clients</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="clients-slider swiper">
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide"><img src="<?php echo base_url(); ?>assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="<?php echo base_url(); ?>assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="<?php echo base_url(); ?>assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="<?php echo base_url(); ?>assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="<?php echo base_url(); ?>assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="<?php echo base_url(); ?>assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="<?php echo base_url(); ?>assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="<?php echo base_url(); ?>assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section> -->
    <!-- End Our Clients Section -->

    <!-- ======= Services Section ======= -->
    <!-- <section id="services" class="services">
        <div class="container">

            <div class="section-title">
                <h2>Services</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box iconbox-blue">
                        <div class="icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
                            </svg>
                            <i class="bx bxl-dribbble"></i>
                        </div>
                        <h4><a href="">Lorem Ipsum</a></h4>
                        <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box iconbox-orange ">
                        <div class="icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426"></path>
                            </svg>
                            <i class="bx bx-file"></i>
                        </div>
                        <h4><a href="">Sed Perspiciatis</a></h4>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box iconbox-pink">
                        <div class="icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781"></path>
                            </svg>
                            <i class="bx bx-tachometer"></i>
                        </div>
                        <h4><a href="">Magni Dolores</a></h4>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box iconbox-yellow">
                        <div class="icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,503.46388370962813C374.79870501325706,506.71871716319447,464.8034551963731,527.1746412648533,510.4981551193396,467.86667711651364C555.9287308511215,408.9015244558933,512.6030010748507,327.5744911775523,490.211057578863,256.5855673507754C471.097692560561,195.9906835881958,447.69079081568157,138.11976852964426,395.19560036434837,102.3242989838813C329.3053358748298,57.3949838291264,248.02791733380457,8.279543830951368,175.87071277845988,42.242879143198664C103.41431057327972,76.34704239035025,93.79494320519305,170.9812938413882,81.28167332365135,250.07896920659033C70.17666984294237,320.27484674793965,64.84698225790005,396.69656628748305,111.28512138212992,450.4950937839243C156.20124167950087,502.5303643271138,231.32542653798444,500.4755392045468,300,503.46388370962813"></path>
                            </svg>
                            <i class="bx bx-layer"></i>
                        </div>
                        <h4><a href="">Nemo Enim</a></h4>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box iconbox-red">
                        <div class="icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,532.3542879108572C369.38199826031484,532.3153073249985,429.10787420159085,491.63046689027357,474.5244479745417,439.17860296908856C522.8885846962883,383.3225815378663,569.1668002868075,314.3205725914397,550.7432151929288,242.7694973846089C532.6665558377875,172.5657663291529,456.2379748765914,142.6223662098291,390.3689995646985,112.34683881706744C326.66090330228417,83.06452184765237,258.84405631176094,53.51806209861945,193.32584062364296,78.48882559362697C121.61183558270385,105.82097193414197,62.805066853699245,167.19869350419734,48.57481801355237,242.6138429142374C34.843463184063346,315.3850353017275,76.69343916112496,383.4422959591041,125.22947124332185,439.3748458443577C170.7312796277747,491.8107796887764,230.57421082200815,532.3932930995766,300,532.3542879108572"></path>
                            </svg>
                            <i class="bx bx-slideshow"></i>
                        </div>
                        <h4><a href="">Dele Cardo</a></h4>
                        <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box iconbox-teal">
                        <div class="icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,566.797414625762C385.7384707136149,576.1784315230908,478.7894351017131,552.8928747891023,531.9192734346935,484.94944893311C584.6109503024035,417.5663521118492,582.489472248146,322.67544863468447,553.9536738515405,242.03673114598146C529.1557734026468,171.96086150256528,465.24506316201064,127.66468636344209,395.9583748389544,100.7403814666027C334.2173773831606,76.7482773500951,269.4350130405921,84.62216499799875,207.1952322260088,107.2889140133804C132.92018162631612,134.33871894543012,41.79353780512637,160.00259165414826,22.644507872594943,236.69541883565114C3.319112789854554,314.0945973066697,72.72355303640163,379.243833228382,124.04198916343866,440.3218312028393C172.9286146004772,498.5055451809895,224.45579914871206,558.5317968840102,300,566.797414625762"></path>
                            </svg>
                            <i class="bx bx-arch"></i>
                        </div>
                        <h4><a href="">Divera Don</a></h4>
                        <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
                    </div>
                </div>

            </div>

        </div>
    </section> -->
    <!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <!-- <section id="cta" class="cta">
        <div class="container">

            <div class="row">
                <div class="col-lg-9 text-center text-lg-start">
                    <h3>Call To Action</h3>
                    <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="col-lg-3 cta-btn-container text-center">
                    <a class="cta-btn align-middle" href="#">Call To Action</a>
                </div>
            </div>

        </div>
    </section> -->
    <!-- End Cta Section -->
</main><!-- End #main -->

<br />