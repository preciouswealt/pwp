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

                <div class="row ">
                    <div class="col-md-6" style="text-align:center;">
                        <!-- <div class="position-relative"> -->
                        <img class="rounded wow zoomIn" data-wow-delay="0.3s" src="<?php echo base_url('assets/img/' . $b->imageabout); ?>" style="object-fit: cover;width:80%">
                        <!-- </div> -->
                    </div>
                    <div class="col-md-6">
                        <?php echo $b->detail; ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <div style="margin: 5%;"></div>
    <div class="container">
        <hr />
    </div>
    <section id="featured-services" class="featured-services section-bg">
        <div class="container">
            <h2 style="text-align: center; text-shadow: 2px 2px 5px red;" class="animate__animated animate__fadeInDown "><strong>ขายฝาก กับ <span style="color:#049bba; text-shadow: 2px 2px 5px #000000;">Precious</span> <span class="text-warning">wealth
                        property</span></strong></h2>
            <br />
            <div class="row no-gutters">
                <!-- <div class="col-lg-2 col-md-6"></div>
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
            </div> -->

                <div class="row no-gutters">
                    <div class="col-lg-2 col-md-6"></div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card shadow mb-5 bg-white rounded">
                            <div class="card-body" style="height: 240px;">
                                <div style="text-align: center;">
                                    <div class="icon animate__animated animate__fadeInDown"><i class="bi bi-coin"></i>
                                    </div>
                                </div>
                                <h4 class="title animate__animated animate__fadeInDown"><a href="">ดอกเบี้ย 0.75%</a>
                                </h4>
                                <p class="description animate__animated animate__fadeInDown">ดอกเบี้ยเริ่มต้น
                                    0.75%/เดือน
                                    วงเงินมีโอกาสได้สูงถึง 70 %</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card shadow mb-5 bg-white rounded">
                            <div class="card-body" style="height: 240px;">
                                <div style="text-align: center;">
                                    <div class="icon animate__animated animate__fadeInDown"><i class="bi bi-credit-card"></i>
                                    </div>
                                </div>
                                <h4 class="title animate__animated animate__fadeInDown"><a href="">ไม่เช็คเครดิตบูโร</a>
                                </h4>
                                <p class="description animate__animated animate__fadeInDown">ไม่เช็คเครดิตบูโร
                                    ไม่ต้องใช้สลิปหรือ เช็คประวัติการเงิน และไม่จำเป็นต้องใช้คนค้ำประกัน</p>
                            </div>
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
                                    <div class="card-body" style="height: 330px;">
                                        <div style="text-align: center;">
                                            <?php if (strlen($ipro->p_name) > 40) { ?>
                                                <p><b><?php echo  mb_substr($ipro->p_name, 0, 40, 'UTF-8') . "..."; ?></b></p>
                                            <?php  } else { ?>
                                                <p><b><?php echo  $ipro->p_name ?></b></p>
                                            <?php  } ?>
                                        </div>
                                        <div class="row">
                                            <?php if ($ipro->status_match == "available") { ?>
                                                <span class="badge bg-success">Available</span>
                                            <?php } else { ?>
                                                <span class="badge bg-danger">SOLD</span>
                                            <?php } ?>
                                        </div>
                                        <hr style="border: 0px;" />
                                        <p style="font-size: 13px; margin-bottom: 0rem;"><i style="color:#049bba" class="bi bi-house"></i> รหัสทรัพย์ : <?php echo $ipro->p_code ?></p>
                                        <hr style="margin: 0.3rem 0;" />
                                        <p style="font-size: 13px; margin-bottom: 0rem;"><i class="bi bi-geo-alt" style="color:#049bba"></i> <?php echo $ipro->district . ',' . $ipro->supdistrict ?>
                                        </p>
                                        <hr style="margin: 0.3rem 0;" />
                                        <p style="font-size: 13px; margin-bottom: 0rem;"><i class="bi bi-plus-square" style="color:#049bba"></i> พื้นที่
                                            <?php
                                            if ($ipro->square_meter == '') {
                                                echo "-";
                                            } else {
                                                echo $ipro->square_meter;
                                            }
                                            ?> ตร.ม,
                                            <?php if ($ipro->square_rai == '') {
                                                echo "-";
                                            } else {
                                                echo $ipro->square_rai;
                                            }
                                            ?> ไร่,
                                            <?php
                                            if ($ipro->square_ngan == '') {
                                                echo "-";
                                            } else {
                                                echo $ipro->square_ngan;
                                            } ?> งาน,
                                            <?php
                                            if ($ipro->square_wah == '') {
                                                echo "-";
                                            } else {
                                                echo $ipro->square_wah;
                                            }
                                            ?> ตร.วา</p>
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
                                        <a onclick="loading()" href="<?php echo site_url('Detail_Propertyproject/' . $ipro->id . ''); ?>">...ดูรายละเอียด</a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    <?php } ?>
                </div>
                <br />
                <a onclick="loading()" href="<?php echo site_url('Propertyproject') ?>">..เพิ่มเติม..</a>
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
                                    <div class="card-body" style="height: 330px;">
                                        <div style="text-align: center;">
                                            <?php if (strlen($ipro->p_name) > 40) { ?>
                                                <p><b><?php echo  mb_substr($ipro->p_name, 0, 40, 'UTF-8') . "..."; ?></b></p>
                                            <?php  } else { ?>
                                                <p><b><?php echo  $ipro->p_name ?></b></p>
                                            <?php  } ?>
                                            <!-- </?php echo $ipro->p_name ?> -->
                                        </div>
                                        <div class="row">
                                            <?php if ($ipro->status_match == "available") { ?>
                                                <span class="badge bg-success">Available</span>
                                            <?php } else { ?>
                                                <span class="badge bg-danger">SOLD</span>
                                            <?php } ?>
                                        </div>
                                        <hr style="border: 0px;" />
                                        <p style="font-size: 13px; margin-bottom: 0rem;"><i style="color:#049bba" class="bi bi-house"></i> รหัสทรัพย์ : <?php echo $ipro->p_code ?></p>
                                        <hr style="margin: 0.3rem 0;" />
                                        <p style="font-size: 13px; margin-bottom: 0rem;"><i class="bi bi-geo-alt" style="color:#049bba"></i> <?php echo $ipro->district . ',' . $ipro->supdistrict ?>
                                        </p>
                                        <hr style="margin: 0.3rem 0;" />
                                        <p style="font-size: 13px; margin-bottom: 0rem;"><i class="bi bi-plus-square" style="color:#049bba"></i> พื้นที่
                                            <?php
                                            if ($ipro->square_meter == '') {
                                                echo "-";
                                            } else {
                                                echo $ipro->square_meter;
                                            }
                                            ?> ตร.ม,
                                            <?php if ($ipro->square_rai == '') {
                                                echo "-";
                                            } else {
                                                echo $ipro->square_rai;
                                            }
                                            ?> ไร่,
                                            <?php
                                            if ($ipro->square_ngan == '') {
                                                echo "-";
                                            } else {
                                                echo $ipro->square_ngan;
                                            } ?> งาน,
                                            <?php
                                            if ($ipro->square_wah == '') {
                                                echo "-";
                                            } else {
                                                echo $ipro->square_wah;
                                            }
                                            ?> ตร.วา</p>
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
                                        <a onclick="loading()" href="<?php echo site_url('Detail_Propertysale/' . $ipro->id . ''); ?>">...ดูรายละเอียด</a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    <?php } ?>
                </div>
                <br />
                <a onclick="loading()" href="<?php echo site_url('Propertysale') ?>">..เพิ่มเติม..</a>

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
                                    <div class="card-body" style="height: 330px;">
                                        <div style="text-align: center;">
                                            <!-- </?php echo $ipro->p_name ?> -->
                                            <?php if (strlen($ipro->p_name) > 40) { ?>
                                                <p><b><?php echo  mb_substr($ipro->p_name, 0, 40, 'UTF-8') . "..."; ?></b></p>
                                            <?php  } else { ?>
                                                <p><b><?php echo  $ipro->p_name ?></b></p>
                                            <?php  } ?>
                                        </div>
                                        <div class="row">
                                            <?php if ($ipro->status_match == "available") { ?>
                                                <span class="badge bg-success">Available</span>
                                            <?php } else { ?>
                                                <span class="badge bg-danger">SOLD</span>
                                            <?php } ?>
                                        </div>
                                        <hr style="border: 0px;" />
                                        <p style="font-size: 13px; margin-bottom: 0rem;"><i style="color:#049bba" class="bi bi-house"></i> รหัสทรัพย์ : <?php echo $ipro->p_code ?></p>
                                        <hr style="margin: 0.3rem 0;" />
                                        <p style="font-size: 13px; margin-bottom: 0rem;"><i class="bi bi-geo-alt" style="color:#049bba"></i> <?php echo $ipro->district . ',' . $ipro->supdistrict ?>
                                        </p>
                                        <hr style="margin: 0.3rem 0;" />
                                        <p style="font-size: 13px; margin-bottom: 0rem;"><i class="bi bi-plus-square" style="color:#049bba"></i> พื้นที่
                                            <?php
                                            if ($ipro->square_meter == '') {
                                                echo "-";
                                            } else {
                                                echo $ipro->square_meter;
                                            }
                                            ?> ตร.ม,
                                            <?php if ($ipro->square_rai == '') {
                                                echo "-";
                                            } else {
                                                echo $ipro->square_rai;
                                            }
                                            ?> ไร่,
                                            <?php
                                            if ($ipro->square_ngan == '') {
                                                echo "-";
                                            } else {
                                                echo $ipro->square_ngan;
                                            } ?> งาน,
                                            <?php
                                            if ($ipro->square_wah == '') {
                                                echo "-";
                                            } else {
                                                echo $ipro->square_wah;
                                            }
                                            ?> ตร.วา</p>
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
                                        <a onclick="loading()" href="<?php echo site_url('Detail_Rentproperty/' . $ipro->id . ''); ?>">...ดูรายละเอียด</a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    <?php } ?>
                </div>
                <br />
                <a onclick="loading()" href="<?php echo site_url('Rentproperty') ?>">..เพิ่มเติม..</a>

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
                                    <div class="card-body" style="height: 330px;">
                                        <div style="text-align: center;">
                                            <!-- </?php echo $ipro->p_name ?> -->
                                            <?php if (strlen($ipro->p_name) > 40) { ?>
                                                <p><b><?php echo  mb_substr($ipro->p_name, 0, 40, 'UTF-8') . "..."; ?></b></p>
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
                                        <p style="font-size: 13px; margin-bottom: 0rem;"><i class="bi bi-geo-alt" style="color:#049bba"></i> <?php echo $ipro->district . ',' . $ipro->supdistrict ?>
                                        </p>
                                        <hr style="margin: 0.3rem 0;" />
                                        <p style="font-size: 13px; margin-bottom: 0rem;"><i class="bi bi-plus-square" style="color:#049bba"></i> พื้นที่
                                            <?php
                                            if ($ipro->square_meter == '') {
                                                echo "-";
                                            } else {
                                                echo $ipro->square_meter;
                                            }
                                            ?> ตร.ม,
                                            <?php if ($ipro->square_rai == '') {
                                                echo "-";
                                            } else {
                                                echo $ipro->square_rai;
                                            }
                                            ?> ไร่,
                                            <?php
                                            if ($ipro->square_ngan == '') {
                                                echo "-";
                                            } else {
                                                echo $ipro->square_ngan;
                                            } ?> งาน,
                                            <?php
                                            if ($ipro->square_wah == '') {
                                                echo "-";
                                            } else {
                                                echo $ipro->square_wah;
                                            }
                                            ?> ตร.วา</p>
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
                                        <a onclick="loading()" href="<?php echo site_url('Detail_Mortgage/' . $ipro->id . ''); ?>">...ดูรายละเอียด</a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    <?php } ?>
                </div>
                <br />
                <a onclick="loading()" href="<?php echo site_url('Mortgage') ?>">..เพิ่มเติม..</a>
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
                                    <div class="card-body" style="height: 330px;">
                                        <div style="text-align: center;">
                                            <!-- </?php echo $ipro->p_name ?> -->
                                            <?php if (strlen($ipro->p_name) > 40) { ?>
                                                <p><b><?php echo  mb_substr($ipro->p_name, 0, 40, 'UTF-8') . "..."; ?></b></p>
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
                                        <p style="font-size: 13px; margin-bottom: 0rem;"><i class="bi bi-geo-alt" style="color:#049bba"></i> <?php echo $ipro->district . ',' . $ipro->supdistrict ?>
                                        </p>
                                        <hr style="margin: 0.3rem 0;" />
                                        <p style="font-size: 13px; margin-bottom: 0rem;"><i class="bi bi-plus-square" style="color:#049bba"></i> พื้นที่
                                            <?php
                                            if ($ipro->square_meter == '') {
                                                echo "-";
                                            } else {
                                                echo $ipro->square_meter;
                                            }
                                            ?> ตร.ม,
                                            <?php if ($ipro->square_rai == '') {
                                                echo "-";
                                            } else {
                                                echo $ipro->square_rai;
                                            }
                                            ?> ไร่,
                                            <?php
                                            if ($ipro->square_ngan == '') {
                                                echo "-";
                                            } else {
                                                echo $ipro->square_ngan;
                                            } ?> งาน,
                                            <?php
                                            if ($ipro->square_wah == '') {
                                                echo "-";
                                            } else {
                                                echo $ipro->square_wah;
                                            }
                                            ?> ตร.วา</p>
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
                                        <a onclick="loading()" href="<?php echo site_url('Detail_Consignment/' . $ipro->id . ''); ?>">...ดูรายละเอียด</a>

                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    <?php } ?>
                </div>
                <br />
                <a onclick="loading()" href="<?php echo site_url('Consignment') ?>">..เพิ่มเติม..</a>
            <?php } ?>
        </div>
    </section><!-- news -->
    <section id="featured-services" class="featured-services section-bg">
        <div class="container">
            <h2 style="text-align: center;"><strong>ข่าวสาร</strong></h2>
            <br />
            <div class="row">
                <?php foreach ($newshome as $n) { ?>
                    <div class="col-md-3 ">
                        <div class="card shadow mb-5 bg-white rounded">
                            <img src="<?php echo base_url('assets/img/news/' . $n->image_new); ?>" class="card-img-top" src="..." alt="Card image cap" style="height: 380px;">
                            <div class="card-body">
                                <b class="card-title"><?php echo $n->title; ?></b>
                                <a onclick="loading()" href="<?php echo site_url('Detail_news/' . $n->id . ''); ?>">...ดูรายละเอียด</a>
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
                <a onclick="loading()" href="<?php echo site_url('News') ?>">.ข่าวสารเพิ่มเติม..</a>
            </div>

        </div>
    </section>
    <section id="featured-services" class="featured-services section-bg">
        <div class="container">
            <h2 style="text-align: center;"><strong>อีเว้น</strong></h2>

            <br />
            <div class="row">
                <?php foreach ($evenshome as $n) { ?>
                    <div class="col-md-3 ">
                        <div class="card shadow mb-5 bg-white rounded">
                            <img src="<?php echo base_url('assets/img/even/' . $n->image_even); ?>" class="card-img-top" src="..." alt="Card image cap" style="height: 200px;" >
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $n->title; ?></h5>
                                <a onclick="loading()" href="<?php echo site_url('Detail_even/' . $n->id . ''); ?>">...ดูรายละเอียด</a>
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
                <a onclick="loading()" href="<?php echo site_url('Even') ?>">.อีเว้นเพิ่มเติม..</a>
            </div>

        </div>
    </section>
</main><!-- End #main -->

<br />