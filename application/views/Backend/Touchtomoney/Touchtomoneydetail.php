<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Touch to money</h5>
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button> -->
    </div>
    <form id="save_edit" method="post" action="javascript:void(0)" enctype="multipart/form-data">
        <div class="modal-body">
            <div class="container">
                <?php foreach($touchdetail as $detail){ ?>
                <div class="row">
                    <div class="col-md-6">
                        <p><b>รูปภาพ</b></p>
                        <div style="text-align:center">
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <?php foreach($imageproperty as $image){   ?>
                                    <div class="carousel-item active">
                                        <img src="<?php echo base_url('imagehome/'.$image->id_code .'/'.$image->image_touch); ?>"
                                            class="card-img-top d-block w-100" src="..." alt="devbanban">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?php echo base_url('imagehome/'.$image->id_code .'/'.$image->image_touch); ?>"
                                            class="card-img-top d-block w-100" src="..." alt="devbanban"
                                            style="width:30%">
                                    </div>
                                    <!-- <div class="carousel-item">
                                        <img class="d-block w-100"
                                            src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_163d9775a6b%20text%20%7B%20fill%3A%23333%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_163d9775a6b%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23555%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22277%22%20y%3D%22217.7%22%3EThird%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"
                                            alt="devbanban">
                                    </div> -->
                                    <?php } ?>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>

                            <!-- 
                            <div class="product-slider">
                                <div class="slide">
                                    <img src="</?php echo base_url('imagehome/'.$image->id_code .'/'.$image->image_touch); ?>"
                                        class="card-img-top" src="..." alt="Card image cap" style="width:30%">
                                </div>
                            </div> -->


                            <!-- <div id="myCarousel" class="carousel slide" data-ride="carousel">

                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="la.jpg" alt="Los Angeles" style="width:100%;">
                            </div>

                            <div class="item">
                                <img src="chicago.jpg" alt="Chicago" style="width:100%;">
                            </div>

                            <div class="item">
                                <img src="ny.jpg" alt="New york" style="width:100%;">
                            </div>
                        </div>
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div> -->
                            <br /><br />
                            <!-- <input type="file" id="imagenews" name="imagenews" class="form-control" multiple> -->
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label>รูปโฉนด</label>

                        <div style="text-align:center">
                            <?php foreach($imagedeed as $imagedeeds){   ?>
                            <div class="product-slider">
                                <div class="slide">
                                    <img src="<?php echo base_url('deed/'.$imagedeeds->id_code .'/'.$imagedeeds->image_touch); ?>"
                                        class="card-img-top" src="..." alt="Card image cap" style="width:30%">
                                </div>
                            </div>
                            <?php } ?>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>เลขหน้าสำรวจ</label>
                                        <input class="form-control" type="text" id="lastname" name="lastname"
                                            value="<?php echo $detail->dealing_file_no ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>เลขที่โฉนด</label>
                                        <input class="form-control" type="text" id="lastname" name="lastname"
                                            value="<?php echo $detail->number ?>">
                                    </div>
                                </div>
                            </div>
                            <!-- <img src="</?php echo base_url('assets/img/news/' . $detail->dealing_file_no); ?>"
        class="card-img-top" src="..." alt="Card image cap" style="width:30%"> -->
                            <br /><br />
                            <!-- <input type="file" id="imagenews" name="imagenews" class="form-control" multiple> -->
                        </div>
                    </div>
                </div>

                <br />
                <!-- <p><b>ชื่อ</b></p> -->
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>ชื่อ</label>
                            <input type="text" class="form-control" id="fristname" name="fristname"
                                value="<?php echo $detail->fristname ?>">
                        </div>
                    </div>

                    <!-- <p><b>นามสกุล</b></p> -->
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>นามสกุล</label>
                            <input class="form-control" type="text" id="lastname" name="lastname"
                                value="<?php echo $detail->lastname ?>">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>เบอร์โทร</label>
                            <input class="form-control" type="text" id="lastname" name="lastname"
                                value="<?php echo $detail->phone ?>">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>ไอดีไลน์</label>
                            <input class="form-control" type="text" id="lastname" name="lastname"
                                value="<?php echo $detail->idline ?>">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>ประเภททรัพย์</label>
                            <input class="form-control" type="text" id="lastname" name="lastname"
                                value="<?php echo $detail->typeproperties ?>">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>จังหวัด</label>
                            <input class="form-control" type="text" id="lastname" name="lastname"
                                value="<?php echo $detail->lastname ?>">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>อำเภอ</label>
                            <input class="form-control" type="text" id="lastname" name="lastname"
                                value="<?php echo $detail->lastname ?>">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>ตำบล</label>
                            <input class="form-control" type="text" id="lastname" name="lastname"
                                value="<?php echo $detail->lastname ?>">
                        </div>
                    </div>
                </div>
                <br />

                <!-- <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>จังหวัด</label>
                            <input class="form-control" type="text" id="lastname" name="lastname"
                                value="</?php echo $detail->lastname ?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>อำเภอ</label>
                            <input class="form-control" type="text" id="lastname" name="lastname"
                                value="</?php echo $detail->lastname ?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>ตำบล</label>
                            <input class="form-control" type="text" id="lastname" name="lastname"
                                value="</?php echo $detail->lastname ?>">
                        </div>
                    </div>
                </div> -->
                <br />
                <h3>Basic Appraisal</h3>
                <hr />
                <br />
                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>ราคาประเมินจากกรมที่ดิน</label>
                            <input class="form-control" type="text" id="departmentoflands" name="departmentoflands">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>ทรัพย์ติดภาระ(บาท)</label>
                            <input class="form-control" type="text" id="burdened" name="burdened" value="0">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>ราคาประเมินราคาตลาด</label>
                            <input class="form-control" type="text" id="marketprice" name="marketprice" value="0">
                        </div>
                    </div>
                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>ทุนที่ลูกค้าต้องการ</label>
                            <input class="form-control" type="text" id="priceclients" name="priceclients" value="0"
                                onchange="DownPercentcal(value)">
                        </div>
                    </div>
                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                        <button type="button" onclick="DownPercentcal()" class="btn btn-primary">คำนวน %</button>
                    </div>
                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>ประเภททรัพย์</label>
                            <select class="form-select" aria-label="Default select example" name="typeproties"
                                id="typeproties" required>
                                <option selected value=""> --เลือกประเภททรัพย์-- </option>
                                <option value="1">ติดภาระ</option>
                                <option value="2">ไม่ติดภาระ</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <hr />
                        <b>
                            <p> ไม่ติดภาระ </p>
                        </b>
                        <p>
                        <div class="row">
                            <div class="col-md-4"> ลกค้าต้องการทุนคิดเป็น (%) ของราคาประเมิน </div>
                            <div class="col-md-3"> <input class="form-control" type="text" id="percent2"
                                    name="percent2" value = "0"> </div>
                            <div class="col-md-1"> % </div>
                        </div>
                        </p>
                    </div>
                    <div>
                        <hr />
                        <b>
                            <p> ติดภาระ </p>
                        </b>
                        <p>
                        <div class="row">
                            <div class="col-md-4"> ลกค้าติดภาระคิดเป็น (%) ของราคาประเมิน </div>
                            <div class="col-md-3"> <input class="form-control" type="text" id="percent1"
                                    name="percent1" value = "0"> </div>
                            <div class="col-md-1"> % </div>
                        </div>
                        </p>
                    </div>


                </div>
                <br />
                <!-- <p><b>รายละเอียด ข่าวสาร</b></p>
            <textarea name="Detail" id="Detail"></?php echo $detail->detail; ?></textarea>
            <?php } ?>
            <input type="hidden" id="idnews" name="idnews" value="</?php echo $detail->id ?>">
            <input type="hidden" id="imagenewsdelete" name="imagenewsdelete"  value="</?php echo $detail->image_new ?>"> -->
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
            <button type="submit" class="btn btn-primary">ประเมิน basic Appraisal</button>
            <button type="submit" class="btn btn-primary">ประเมิน advanced Appraisal</button>
        </div>
    </form>
</div>


<script src="<?php echo base_url(); ?>assets/ckeditor/ckeditor.js"></script>
<script>
// $(function() {
//     CKEDITOR.replace('Title', {
//         customConfig: '</?php base_url('assets/ckeditor/config.js') ?>',
//     });
//     CKEDITOR.replace('Detail', {
//         customConfig: '</?php base_url('assets/ckeditor/config.js') ?>',
//     });
// });


$(document).ready(function() {
    $("#save_edit").submit(function(e) {
        e.preventDefault();
        for (instance in CKEDITOR.instances) {
            CKEDITOR.instances[instance].updateElement();
        }
        var formData = new FormData($("#save_edit")[0]);
        // $('#send_form').html('Sending..');
        swal({
            title: "แน่ใจหรือไม่ ?",
            text: "ต้องการแก้ไขข้อมูล โปรโมชั่น",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'ตกลง',
            cancelButtonText: 'ยกเลิก',
            closeOnConfirm: false,
            closeOnCancel: false,
            showLoaderOnConfirm: true,
        }, function(isConfirm) {
            if (isConfirm) {
                $.ajax({
                    url: "<?php echo site_url('Control_admin/News_edit') ?>",
                    dataType: 'json',
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(resp) {
                        if (resp.success == true) {
                            swal({
                                title: "อัพเดทข้อมูลสำเร็จ",
                                text: "ท่านได้ทำเพิ่ม โปรโมชั่น เรียบร้อย",
                                type: "success"
                            }, function() {
                                location.href = '';
                            });
                        } else {
                            swal("อัพเดทข้อมูลไม่สำเร็จ",
                                "บันทึกข้อมูลไม่สำเร็จ กรุณาเลือกรูปภาพสำหรับ โปรโมชั่น",
                                "error");
                        }
                    }
                });
            } else {
                swal("ยกเลิกการเพิ่มบทความ", "ท่านได้ยกเลิกการเพิ่มโปรโมชั่นย์เรียบร้อย ",
                    "error");
            }
        });
    });
});
</script>
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
    let dots = document.getElementsByClassName("demo");
    let captionText = document.getElementById("caption");
    if (n > slides.length) {
        slideIndex = 1
    }
    if (n < 1) {
        slideIndex = slides.length
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
    captionText.innerHTML = dots[slideIndex - 1].alt;
}


function DownPercentcal() {

    var marketprice = document.getElementById('marketprice').value.replace(',', ''); //ราคาตลาด
    var priceclients = document.getElementById('priceclients').value.replace(',', ''); // ทุนที่ต้องการ
    var burdened = document.getElementById('burdened').value.replace(',', ''); // ติดภาระ
    // var Charge = document.getElementById('Charge').value; //ค่าดำเนินการ fix200
    // var Total_Premium_Act = document.getElementById('Total_Premium_Act').value.replace(',', ''); //พ.ร.บ.รวม

    if(priceclients != 0){
        var cashdown = (priceclients / marketprice) * 100;
        document.getElementById('percent2').value = cashdown;
    }
    
    if(burdened != 0){
        var cashdown2 = (burdened / marketprice) * 100;
        alert(cashdown2);
        document.getElementById('percent1').value = cashdown2;
    }

    // var Charge2 = parseInt(200);
    // var Installment = ((Net_totalsub1 - cashdown) / (PeriodNumber - 1));
    // document.getElementById('Down').value = cashdown.toFixed(2);
    
    // document.getElementById('Installment').value = Installment.toFixed(2);
    // document.getElementById('ToTal_FirstPayment').value = (parseFloat(cashdown) + Charge2 + parseInt(Charge) +
    //     parseFloat(Total_Premium_Act)).toFixed(2);
}
</script>