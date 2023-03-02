<div style="margin: 50px;">
<div class="container">
    <div class="row">
    <div class="col-md-2"></div>
        <div class="col-md-8">
        <button onclick="history.back()" class="btn btn-default"><< ย้อนกลับ</button>
            <?php foreach ($properties as $r) { ?>
               
                <br />
                <h3 style="color:#049bba;text-align:center;"><b><?php echo  $r->p_name ?></b></h3>
                <hr style=" margin-top: 20px; margin-bottom: 20px; border: 0; border-top: 2px solid #049bba;">
                <div style="text-align: center;"> <img src="<?php echo base_url('property/'.$r->p_code .'/'. $r->p_image); ?>" alt="properties" style="width:70%;text-align:center;" /></div>
                <div style="margin: 25px;"></div>
                <div class="row">
                    <?php if ($r->status_match == "available") { ?>
                        <span class="badge bg-success">Available</span>
                    <?php } else { ?>
                        <span class="badge bg-danger">Done</span>
                    <?php } ?>
                </div>
                <div style="color:black; font-size:15px">
                    <hr style="border: 0px;" />
                    <p style="font-size: 15px; margin-bottom: 0rem;"><i style="color:#049bba" class="bi bi-house"></i> รหัสทรัพย์ : <?php echo $r->p_code ?></p>
                    <hr style="margin: 0.3rem 0;" />
                    <p style="font-size: 15px; margin-bottom: 0rem;"><i class="bi bi-geo-alt" style="color:#049bba"></i> <?php echo $r->p_address ?></p>
                    <hr style="margin: 0.3rem 0;" />
                    <p style="font-size: 15px; margin-bottom: 0rem;"><i class="bi bi-plus-square" style="color:#049bba"></i> พื้นที่ <?php echo $r->square_wah ?> ตร.วา</p>
                    <hr style="margin: 0.3rem 0;" />
                    <p style="font-size: 15px; margin-bottom: 0rem;"><i class="bi bi-credit-card" style="color:#049bba"></i> มูลค่าทรัพย์ <?php echo $r->p_price ?> บาท</p>
                    <hr style="margin: 0.3rem 0;" />
                    <p style="font-size: 15px; margin-bottom: 0rem;"><i class="bi bi-credit-card" style="color:#049bba"></i> วงเงินจดจำนอง <?php echo $r->price_limit ?> บาท</p>
                    <hr style="margin: 0.3rem 0;" />
                    <p style="font-size: 15px; margin-bottom: 0rem;"><i class="bi bi-coin" style="color:#049bba"></i> ดอกเบี้ย <?php echo $r->percen ?> % </p>
                    <hr style="margin: 0.3rem 0;" />
                </div>
            <?php } ?>
            <!-- </div> -->
            <!-- <div class="col-md-1"></div> -->
            <!-- <div class="col-md-3" style="padding-right: 0px;padding-left: 0px;">
            <div style="margin: 70px;"></div>
            <p style="color:#049bba;text-align:left; "><b>-ทรัพย์จดจำนอง อื่นๆ<b></p>
            <div class="row" style=" margin-right: 20px; margin-left: 20px;">
                <hr style="border-top: 1px solid #049bba; margin-top: 1.4rem;">
            </div>
            <?php foreach ($news_Allright as $rn) { ?>
                <div class="row" style=" margin-right: 20px; margin-left: 20px;">
                    <div class="col-md-6" style="padding-right: 3px;padding-left: 2px;">
                        <?php if (strlen($rn->title) > 30) { ?>
                            <p style="color:#049bba; font-size:12px"><b> <?php echo  substr($rn->title, 0, 30) . "..."; ?></b></p>
                        <?php  } else { ?>
                            <p style="color:#049bba; font-size:12px"><b><?php echo  $rn->title ?></b></p>
                        <?php  } ?>
                        <br/><br/>
                        <p style="font-size: 10px;color:#000"><?php echo date("d-m-Y", strtotime($rn->savedate)) ?></p>
                    </div>
                    <div class="col-md-6" style="padding-right: 0px; padding-left: 0px;">
                        <a href="<?php echo site_url('Detail_news/' . $rn->id . ''); ?>">
                            <img src="<?php echo base_url('assets/img/slide/' . $rn->image_new); ?>" class="img-responsive" alt="properties" style="width:100%; border-radius: 10px 10px 10px 10px;" />
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
                    <hr style="border-top: 1px soli
                    
                    
                    d #049bba;margin-top: 0rem;margin-bottom: 0rem;">
                </div>
            </div>
        </div> -->
        </div>
        <div class="col-md-2"></div>
    </div>
    <div>
            <?php $this->load->view("Contractproduct") ?>
        </div>
</div>
</div>
<br />

<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>