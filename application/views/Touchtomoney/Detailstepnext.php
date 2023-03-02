<div style="margin: 50px;">
    <div class="container">
        <h3 style="text-align: center;"><strong>Touch To Money</strong></h4>
            <br />
            <div class="step-app" id="demo">
                <ul class="step-steps" style="border-radius: 10px 10px 0px 0px;">
                    <li data-step-target="step1">รอผลประเมิน</li>
                    <li data-step-target="step2">แจ้งผลประเมิน</li>
                    <li data-step-target="step3">นัดทำสัญญา</li>
                    <li data-step-target="step4">อนุมัติสินเชื่อ</li>
                    <li data-step-target="step4">นัดวันทำสัญญาที่ ที่ดิน</li>
                </ul>
                <div class="step-content" style="background: rgb(140,140,254);
background: radial-gradient(circle, rgba(140,140,254,0.08757006220456931) 0%, rgba(0,212,255,0.073564459963673) 100%);border-radius: 0px 0px 10px 10px;">
                    <div class="step-tab-panel" data-step="step1">
                        <br />
                        <h3 style="text-align: center;">รอผลประเมิน</h3>
                        <?php $check = 2;
                        if ($check == 1) { ?>
                        <?php } else { ?>
                            <p>กำลังดำเนินการประเมิน</p>
                        <?php } ?>

                    </div>
                    <div class="step-tab-panel" data-step="step2">
                        <br />
                        <h3 style="text-align: center;">แจ้งผลประเมิน</h3>
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                                <form name="frmtypeproties" id="frmtypeproties">
                                    <label class="mb-0">ประเภททรัพย์ : </label>
                                    <select class="form-select" aria-label="Default select example" name="typeproties" required>
                                        <option selected value=""> --เลือกประเภททรัพย์-- </option>
                                        <option value="1">ขายฝาก</option>
                                        <option value="2">จดจำนอง</option>
                                        <!-- <option value="3">เช่าอสังหาริมทรัพย์</option> -->
                                    </select>
                                </form>
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                        <div style="margin: 150px;"></div>
                    </div>
                    <div class="step-tab-panel" data-step="step3">
                        <h3 style="text-align: center;">นัดทำสัญญา</h3>
                        <div align="center">
                            <img src="<?php echo base_url('assets/img/deed2.png'); ?>" style="width:70%;border:  2px solid #049bba;">
                        </div>
                        <br />
                        <form name="frmdeed" id="frmdeed">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="mb-0">หน้าสำรวจ : </label>
                                        <input type="text" class="form-control " name="dealing_file_no" id="dealing_file_no" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="mb-0">เลขที่โฉนด : </label>
                                        <input type="text" class="form-control " name="number" id="number" required />
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
                                    <input class="form-control" id="formdeed" name="formdeed" type="file" required />
                                    <div class="small text-muted mt-2">Upload ไฟล์โฉนด</div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="step-tab-panel" data-step="step4">
                        <h3 style="text-align: center;">อนุมัติสินเชื่อ</h3>
                        <form name="frmimage" id="frmimage">
                            <div class="row align-items-center py-3">
                                <div class="col-md-3 ps-5">
                                    <h6 class="mb-0">Upload รูปภาพทรัพย์</h6>
                                </div>
                                <div class="col-md-9 pe-5">
                                    <input class="form-control " id="formFileLg" type="file" multiple required />
                                    <div class="small text-muted mt-2">Upload ไฟล์โฉนด</div>
                                </div>
                            </div>
                        </form>
                        <div style="margin: 150px;"></div>
                    </div>
                    <div class="step-tab-panel" data-step="step4">
                        <h3 style="text-align: center;">นัดวันทำสัญญาที่ ที่ดิน</h3>
                        <form name="frmimage" id="frmimage">
                            <div class="row align-items-center py-3">
                                <div class="col-md-3 ps-5">
                                    <h6 class="mb-0">Upload รูปภาพทรัพย์</h6>
                                </div>
                                <div class="col-md-9 pe-5">
                                    <input class="form-control " id="formFileLg" type="file" multiple required />
                                    <div class="small text-muted mt-2">Upload ไฟล์โฉนด</div>
                                </div>
                            </div>
                        </form>
                        <div style="margin: 150px;"></div>
                    </div>
                </div>

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
            // step0
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


        }
    });
</script>