<div id="showdetail">
    <div style="margin: 50px;">
        <div class="container">
            <h3 style="text-align: center;"><strong>Touch To Money</strong></h4>
                <form id="insurance" method="GET" action="<?php echo site_url("Home/stepnext") ?>">
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <div class="row">
                                <label for="site-search">ตรวจสอบสถานะ</label>
                                <div class="col-md-8">
                                    <input type="search" class="form-control " id="statuscheck" name="statuscheck"
                                        required>
                                    <!-- <button type="button">ตรวจสอบสถานะ</button> -->
                                </div>
                                <div class="col-md-4">
                                    <input type="submit" class="form-control btn "
                                        style="font-size: 13px;background-color: #0597b5;height: 35px;color:#fff"
                                        value="ตรวจสอบสถานะ">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4"></div>
                    </div>
                </form>
                <br />
                <div class="step-app" id="demo">
                    <ul class="step-steps" style="border-radius: 10px 10px 0px 0px;">
                        <li data-step-target="step1">ข้อมูลโปรไฟล์</li>
                        <li data-step-target="step2">ประเภททรัพย์</li>
                        <li data-step-target="step3">ข้อมูลโฉนด</li>
                        <li data-step-target="step4">รูปภาพทรัพย์</li>
                        <!-- <li data-step-target="">รอผลประเมิน</li>
                        <li data-step-target="">แจ้งผลประเมิน</li>
                        <li data-step-target="">ทำสัญญา</li>
                        <li data-step-target="">อนุมัติสินเชื่อ</li> -->
                    </ul>
                    <div class="step-content"
                        style="background: rgb(140,140,254);background: radial-gradient(circle, rgba(140,140,254,0.08757006220456931) 0%, rgba(0,212,255,0.073564459963673) 100%);border-radius: 0px 0px 10px 10px;">
                        <div class="step-tab-panel" data-step="step1">
                            <br />

                            <?php $i= 1; if($i == 0){ ?>
                            <p>
                            <h3 style="text-align:center"> COMING SOON </h3>
                            </p>
                            <?php }else{ ?>
                            <h3 style="text-align: center;">ข้อมูลโปรไฟล์</h3>
                            <form name="frmInfo" id="frmInfo" method="post" action="javascript:void(0)"
                                enctype="multipart/form-data">
                                <div class="row align-items-center pt-4 pb-3">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-3" style="width: 9%;">
                                        <h6 class="mb-0" style="text-align: center;">ชื่อ : </h6>
                                    </div>
                                    <div class="col-md-5">
                                        <input type="text" name="txtFirstName" class="form-control " id="txtFirstName"
                                            required>
                                        <span class="error" id="name_error">*</span>
                                    </div>
                                    <div class="col-md-2"></div>
                                </div>
                                <div class="row align-items-center py-3">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-3" style="width: 9%;">
                                        <h6 class="mb-0" style="text-align: center;">นามสกุล : </h6>
                                    </div>
                                    <div class="col-md-5">
                                        <input type="text" name="txtLastName" id="txtLastName" class="form-control "
                                            required>
                                        <span class="error">*</span>
                                    </div>
                                    <div class="col-md-2"></div>
                                </div>
                                <div class="row align-items-center py-3">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-3" style="width: 9%;">
                                        <h6 class="mb-0" style="text-align: center;">เบอร์โทร : </h6>
                                    </div>
                                    <div class="col-md-5">
                                        <input type="phone" name="phone" id="phone" class="form-control " required>
                                        <span class="error">*</span>
                                    </div>
                                    <div class="col-md-2"></div>
                                </div>
                                <div class="row align-items-center py-3">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-3" style="width: 9%;">
                                        <h6 class="mb-0" style="text-align: center;">ไอดีไลน์ : </h6>
                                    </div>
                                    <div class="col-md-5">
                                        <input type="text" name="idline" id="idline" class="form-control " required>
                                        <span class="error">*</span>
                                    </div>
                                    <div class="col-md-2"></div>
                                </div>
                            </form>
                            <?php } ?>
                        </div>
                        <div class="step-tab-panel" data-step="step2">
                            <br />
                            <h3 style="text-align: center;">ประเภททรัพย์</h3>
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-8">
                                    <form name="frmtypeproties" id="frmtypeproties" method="post"
                                        action="javascript:void(0)" enctype="multipart/form-data">
                                        <label class="mb-0">ประเภททรัพย์ : </label>
                                        <select class="form-select" aria-label="Default select example"
                                            name="typeproties" id="typeproties" required>
                                            <option selected value=""> --เลือกประเภททรัพย์-- </option>
                                            <option value="1">ขายฝาก</option>
                                            <option value="2">จดจำนอง</option>
                                        </select>
                                    </form>
                                </div>
                                <div class="col-md-2"></div>
                            </div>
                            <div style="margin: 150px;"></div>
                        </div>
                        <div class="step-tab-panel" data-step="step3">
                            <h3 style="text-align: center;">ข้อมูลโฉนด</h3>
                            <h4 style="text-align: center;">ตัวอย่างโฉนดที่ต้องนำมากรอก</h4>
                            <label class="mb-0">ประเภททรัพย์ : </label>
                            <select class="form-select" aria-label="Default select example" name="typeproties"
                                id="typeproties" required>
                                <option selected value=""> --เลือกประเภททรัพย์-- </option>
                                <option value="1">คอนโด</option>
                                <option value="2">จดจำนอง</option>
                            </select>

                            <form name="frmdeed" id="frmdeed" method="post" action="javascript:void(0)"
                                enctype="multipart/form-data">
                                <div id='CONDO'>

                                <div align="center">
                                        <img src="<?php echo base_url('assets/img/deed2.png'); ?>"
                                            style="width:70%;border:  2px solid #049bba;">
                                    </div>
                                    <br />
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="mb-0">หน้าสำรวจ : </label>
                                                <input type="text" class="form-control " name="dealing_file_no"
                                                    id="dealing_file_no" required />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="mb-0">เลขที่โฉนด : </label>
                                                <input type="text" class="form-control " name="number" id="number"
                                                    required />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br />
                                <hr class="mx-n3">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="mb-0">จังหวัด : </label>

                                            <select class="form-control csscall js-example-basic-single" id="province"
                                                name="province" style="border: 1px solid #0597b5;"
                                                onchange="getdistrict(this.value)">
                                                <option selected value=""> --เลือกจังหวัด-- </option>
                                                <?php foreach ($province as $pv) { ?>
                                                <?php if ($this->session->userdata("province") == $pv->id) { ?>
                                                <option value="<?php echo $pv->id; ?>" selected>
                                                    <?php echo $pv->name_th; ?> </option>
                                                <?php } else { ?>
                                                <option value="<?php echo $pv->id; ?>"><?php echo $pv->name_th; ?>
                                                </option>
                                                <?php } ?>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="mb-0">อำเภอ : </label>
                                            <select class="form-control csscall js-example-basic-single" id="dristrict"
                                                name="dristrict" style="	border: 1px solid #0597b5;"
                                                onchange="getsubdistrict(this.value)">
                                                <option value="">เลือกอำเภอ </option>
                                                <?php if ($this->session->userdata("dristrict")) { ?>
                                                <option value="<?php echo  $this->session->userdata("dristrict"); ?>"
                                                    selected>
                                                    <?php echo  $this->session->userdata("dristrictname"); ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="mb-0">ตำบล : </label>
                                            <select class="form-control csscall js-example-basic-single"
                                                style="border: 1px solid #0597b5;" id="sub_dristrict"
                                                name="sub_dristrict">
                                                <option value="">เลือกตำบล</option>
                                                <?php if ($this->session->userdata("sub_dristrict")) { ?>
                                                <option
                                                    value="<?php echo  $this->session->userdata("sub_dristrict"); ?>"
                                                    selected>
                                                    <?php echo  $this->session->userdata("sub_dristrictname"); ?>
                                                </option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <br />
                                <hr class="mx-n3">
                                <div class="row align-items-center py-3">
                                    <div class="col-md-3 ps-5">
                                        <label class="mb-0">Upload ไฟล์โฉนด : </label>
                                    </div>
                                    <div class="col-md-9 pe-5">
                                        <input class="form-control" id="filedeed" name="filedeed" type="file"
                                            required />
                                        <div class="small text-muted mt-2">Upload ไฟล์โฉนด</div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="step-tab-panel" data-step="step4">
                            <h3 style="text-align: center;">รูปภาพทรัพย์</h3>
                            <form name="frmimage" id="frmimage" method="post" action="javascript:void(0)"
                                enctype="multipart/form-data">
                                <div class="row align-items-center py-3">
                                    <div class="col-md-3 ps-5">
                                        <h6 class="mb-0">Upload รูปภาพทรัพย์</h6>
                                    </div>
                                    <div class="col-md-9 pe-5">
                                        <input class="form-control " id="formFileLg" name="formFileLg" type="file"
                                            enctype="multipart/form-data" top="5" multiple required />
                                        <div class="small text-muted mt-2">Upload ไฟล์โฉนด</div>
                                    </div>
                                </div>
                            </form>
                            <div style="margin: 150px;"></div>
                        </div>
                    </div>
                    <div class="step-footer">
                        <button data-step-action="prev" class="step-btn">ย้อนกลับ</button>
                        <button data-step-action="next" class="step-btn">ต่อไป</button>
                        <button data-step-action="finish" class="step-btn">บันทึกข้อมูล</button>
                    </div>
                </div>
                <br />
        </div>
    </div>
</div>
<script>
var frmInfoprofile = $('#frmInfo');
var frmInfoValidatorprofile = frmInfoprofile.validate();

var frmtypeproties = $('#frmtypeproties');
var frmtypeprotiesValidator = frmtypeproties.validate();

var frmdeed = $('#frmdeed');
var frmdeedValidator = frmdeed.validate();

var frmimage = $('#frmimage');
var frmimageValidator = frmimage.validate();

// var frmMobile6 = $('#frmMobile6');
// var frmMobileValidator6 = frmMobile6.validate();

// var frmMobile7 = $('#frmMobile7');
// var frmMobileValidator7 = frmMobile7.validate();

// var frmMobile8 = $('#frmMobile8');
// var frmMobileValidator8 = frmMobile8.validate();

$('#demo').steps({
    onChange: function(currentIndex, newIndex, stepDirection) {
        if (currentIndex === 0) {
            if (stepDirection === 'forward') {
                return frmInfoprofile.valid();
            }
            if (stepDirection === 'backward') {
                frmInfoValidatorprofile.resetForm();
            }
        }
        // step1
        if (currentIndex === 1) {
            if (stepDirection === 'forward') {
                return frmtypeproties.valid();
            }
            if (stepDirection === 'backward') {
                frmtypeprotiesValidator.resetForm();
            }
        }
        // step2
        if (currentIndex === 2) {
            if (stepDirection === 'forward') {
                return frmdeed.valid();
            }
            if (stepDirection === 'backward') {
                frmdeedValidator.resetForm();
            }
        }
        // step3
        if (currentIndex === 3) {
            if (stepDirection === 'forward') {
                return frmimage.valid();
            }
            if (stepDirection === 'backward') {
                frmimageValidator.resetForm();
            }
        }
        // // step5
        // if (currentIndex === 3) {
        //     if (stepDirection === 'forward') {
        //         return frmMobile.valid();
        //     }
        //     if (stepDirection === 'backward') {
        //         frmMobileValidator.resetForm();
        //     }
        // }
        // // console.log(currentIndex)
        // // step6
        // if (currentIndex === 5) {
        //     if (stepDirection === 'forward') {
        //         return frmMobile6.valid();
        //     }
        //     if (stepDirection === 'backward') {
        //         frmMobileValidator6.resetForm();
        //     }
        // }
        // // step7
        // if (currentIndex === 6) {
        //     if (stepDirection === 'forward') {
        //         return frmMobile7.valid();
        //     }
        //     if (stepDirection === 'backward') {
        //         frmMobileValidator7.resetForm();
        //     }
        // }
        // // step8
        // if (currentIndex === 7) {
        //     if (stepDirection === 'forward') {
        //         return frmMobile8.valid();
        //     }
        //     if (stepDirection === 'backward') {
        //         frmMobileValidator8.resetForm();
        //     }
        // }
        return true;
    },
    onFinish: function() {
        // var frmInfo = $("#frmInfo").serialize();
        // var frmtypeproties = $("#frmtypeproties").serialize();
        // var frmdeed = $("#frmdeed").serialize();
        // var frmimage = $("#frmimage").serialize();

        var txtFirstName = document.getElementById('txtFirstName').value;
        var txtLastName = document.getElementById('txtLastName').value;
        var phone = document.getElementById('phone').value;
        var idline = document.getElementById('idline').value;
        var typeproties = document.getElementById('typeproties').value;
        var dealing_file_no = document.getElementById('dealing_file_no').value;
        var number = document.getElementById('number').value;
        var insdeed = document.getElementById('filedeed').files.length;
        var ins = document.getElementById('formFileLg').files.length;

        var province = document.getElementById('province').value;
        var dristrict = document.getElementById('dristrict').value;
        var sub_dristrict = document.getElementById('sub_dristrict').value;

        var datas = new FormData();
        datas.append("txtFirstName", txtFirstName);
        datas.append("txtLastName", txtLastName);
        datas.append("phone", phone);
        datas.append("idline", idline);
        datas.append("typeproties", typeproties);
        datas.append("dealing_file_no", dealing_file_no);
        datas.append("number", number);
        datas.append("province", province);
        datas.append("dristrict", dristrict);
        datas.append("sub_dristrict", sub_dristrict);

        for (var x = 0; x < insdeed; x++) {
            datas.append("filedeed[]", document.getElementById('filedeed').files[x]);
        }

        for (var x = 0; x < ins; x++) {
            datas.append("formFileLg[]", document.getElementById('formFileLg').files[x]);
        }

        // var form = $('#frmInfo', '#frmtypeproties', "#frmdeed", "#frmimage").serialize();
        // alert(form);
        swal({
            title: 'บันทึกข้อมูล',
            text: "ท่านต้องการบันทึกข้อมูล ใช่ หรือ ไม่",
            type: "info",
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
                // if (isConfirm) {
                $.ajax({
                    url: "<?php echo site_url('Home/insert_touchtomoney') ?>",
                    dataType: 'json',
                    type: 'POST',
                    contentType: false,
                    processData: false,
                    data: datas,
                    success: function(resp) {
                        if (resp.success == true) {
                            swal({
                                title: "บันทึกข้อมูลสำเร็จ",
                                text: "ท่านได้ทำเพิ่มบทความเรียบร้อย ",
                                type: "success"
                            }, function() {
                                location.href =
                                    '<?php echo site_url('Home/stepnext/') ?>' +
                                    resp.idcode;
                            });
                        } else {
                            swal("บันทึกข้อมูลไม่สำเร็จ",
                                "บันทึกข้อมูลไม่สำเร็จ กรุณาเลือกรูปภาพสำหรับ บทความ",
                                "error");
                        }
                    }
                });
            } else {
                swal("ยกเลิกการเพิ่มบทความ", "ท่านได้ยกเลิกการเพิ่มข้อมูลทรัพย์เรียบร้อย ",
                    "error");
            }
        });
    }
});

function getdistrict(v) {
    $.getJSON('<?php echo site_url('Home/getdistrict?dis=') ?>' + v, function(res) {
        $('#dristrict').find('option').remove();
        $('#dristrict').append('<option value="">เลือกอำเภอ</option>');
        for (const i in res) {
            $('#dristrict').append('<option value="' + res[i].id + '">' + res[i].name_th + '</option>')
        }
    });
}

function getsubdistrict(v) {
    $.getJSON('<?php echo site_url('Home/getsubdistrict?subdis=') ?>' + v, function(res) {
        $('#sub_dristrict').find('option').remove();
        $('#sub_dristrict').append('<option value="">เลือกตำบล</option>');
        for (const i in res) {
            $('#sub_dristrict').append('<option value="' + res[i].id + '">' + res[i].name_th + '</option>')
        }
    });
}
$('#province').select2({
    placeholder: 'เลือกจังหวัด',
    width: '100%',
    allowClear: true
});
$('#dristrict').select2({
    placeholder: 'เลือกอำเภอ',
    width: '100%',
    allowClear: true
});
$('#sub_dristrict').select2({
    placeholder: 'เลือกตำบล',
    width: '100%',
    allowClear: true
});

$("#formFileLg").on("change", function() {
    if ($("#formFileLg")[0].files.length > 5) {
        alert("You can select only 5 images");
        document.getElementById("formFileLg").value = "";
    }
});
</script>