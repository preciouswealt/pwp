<!-- ======= Top Bar ======= -->
<section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
            <!-- <i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com">info@example.com</a> -->
            <a href="tel:+0908959717">
                <i class="bi bi-phone-fill phone-icon" style="color:#049bba;"></i>0908959717
            </a>
        </div>
        <div class="social-links d-none d-md-block">
            <a href="https://web.facebook.com/profile.php?id=100088657834493" target="_blank" class="facebook"><i class="bi bi-facebook" style="color:#049bba;"></i></a>
            <a href="#" class="youtube"><i class="bi bi-youtube" style="color:#049bba;"></i></a>
            <a href="https://liff.line.me/1645278921-kWRPP32q/?accountId=909odigl" target="_blank" class="line"><i class="bi bi-line" style="color:#049bba;"></i></a>

        </div>
    </div>
</section>

<!-- ======= Header ======= -->
<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">

        <h5 class="logo me-auto" style="font-size: 20px;">
            <a href="<?php echo site_url('Home') ?>">
                <!-- <span style="color:#049bba;">Precious</span> <span class="text-warning">wealth property</span> -->
                <img src="<?php echo base_url('assets/img/PreciousWP-LOGOv1png.png'); ?>" style="width:100%;max-height: 150px;">
            </a>
        </h5>
        <nav id="navbar" class="navbar">
            <ul>
                <li class="nav-item active"><a class="nav-link scrollto <?php if ($this->uri->uri_string() == 'patient/listpatient') {
                                                                            echo 'active';
                                                                        } ?>" href="<?php echo site_url('Home') ?>">หน้าหลัก</a></li>
                <li class="nav-item"><a class="nav-link scrollto <?php if ($this->uri->uri_string() == 'patient/listpatient') {
                                                                        echo 'active';
                                                                    } ?>" href="<?php echo site_url('aboutpage') ?>">เกี๋ยวกับเรา</a></li>
                <li class="dropdown"><a href="#"><span>สินค้าและบริการ</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <!-- <li class="nav-item"><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li class="nav-item"><a href="</?php echo site_url('Consignment') ?>">ขายฝาก</a></li>
                  <li class="nav-item"><a href="</?php echo site_url('Mortgage') ?>">จดจำนอง</a></li>
                  <li class="nav-item"><a href="</?php echo site_url('Rentproperty') ?>">เช่าอสังหาริมทรัพย์</a></li>
                  <li class="nav-item"><a href="</?php echo site_url('Propertysale') ?>">อสังหาริมทรัพย์ที่ประกาศขาย</a></li>
                </ul>
              </li> -->
                        <li class="nav-item"><a class="<?php if ($this->uri->uri_string() == 'patient/listpatient') {
                                                            echo 'active';
                                                        } ?>" href="<?php echo site_url('Consignment') ?>">ขายฝาก</a></li>
                        <li class="nav-item"><a class="<?php if ($this->uri->uri_string() == 'patient/listpatient') {
                                                            echo 'active';
                                                        } ?>" href="<?php echo site_url('Mortgage') ?>">จดจำนอง</a></li>
                        <li class="nav-item"><a class="<?php if ($this->uri->uri_string() == 'patient/listpatient') {
                                                            echo 'active';
                                                        } ?>" href="<?php echo site_url('Rentproperty') ?>">เช่าอสังหาริมทรัพย์</a></li>
                        <li class="nav-item"><a class="<?php if ($this->uri->uri_string() == 'patient/listpatient') {
                                                            echo 'active';
                                                        } ?>" href="<?php echo site_url('Propertysale') ?>">อสังหาริมทรัพย์ที่ประกาศขาย</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link scrollto <?php if ($this->uri->uri_string() == 'patient/listpatient') {
                                                                        echo 'active';
                                                                    } ?>" href="<?php echo site_url('Touchtomoney') ?>">Touch to money</a></li>
                <li class="nav-item"><a class="nav-link scrollto <?php if ($this->uri->uri_string() == 'patient/listpatient') {
                                                                        echo 'active';
                                                                    } ?>" href="<?php echo site_url('Propertyproject') ?>">โครงการทรัพย์ใหม่</a></li>
                <li class="nav-item"><a class="nav-link scrollto <?php if ($this->uri->uri_string() == 'patient/listpatient') {
                                                                        echo 'active';
                                                                    } ?>" href="<?php echo site_url('News') ?>">ข่าวสาร</a></li>
                <li class="nav-item"><a class="nav-link scrollto <?php if ($this->uri->uri_string() == 'patient/listpatient') {
                                                                        echo 'active';
                                                                    } ?>" href="<?php echo site_url('Even') ?>">อีเว้น</a></li>
                <li class="nav-item"><a class="nav-link scrollto <?php if ($this->uri->uri_string() == 'patient/listpatient') {
                                                                        echo 'active';
                                                                    } ?>" href="<?php echo site_url('Contract') ?>">ติดต่อเรา</a></li>
                <li class="nav-item"><a data-toggle="modal" disabled data-target="#exampleModal" style="    padding: 10px;color:#ffff;" class="btn btn-primary nav-link scrollto <?php if ($this->uri->uri_string() == 'patient/listpatient') {
                                                                        echo 'active';
                                                                    } ?>" >เข้าสู่ระบบ</a>
                                                                    <!-- <a data-toggle="modal" data-target="#exampleModal"  style="    padding: 10px;color:#ffff;" class=" btn btn-primary nav-link scrollto </?php if ($this->uri->uri_string() == 'patient/listpatient') {
                                                                        echo 'active';
                                                                    } ?> disabled" >เข้าสู่ระบบ</a> -->
                                                                </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->

