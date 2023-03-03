<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">รายละเอียดทรัพย์</h5>
        <button type="button" class="btn btn-primary" onclick="history.back();">ย้อนกลับ</button>
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button> -->
    </div>
    <form id="save_edit" method="post" action="javascript:void(0)" enctype="multipart/form-data">
        <div class="modal-body">
            <div class="container-fluid">
                <?php foreach ($propertydetail as $detail) { ?>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-2">
                                <p><b>รูปภาพทรัพย์หลัก</b></p>
                                <div>
                                    <div>
                                        <table class="table table-bordered">
                                            <tr>
                                                <td style="width:50%;text-align:center">
                                                    <img src="<?php echo base_url('property/' . $detail->p_code . '/' . $detail->p_image); ?>" alt="properties" style="width:50%;text-align:center;" />
                                                    <!-- <a class="btn btn-danger" href="<?php echo site_url('Control_admin/Propertyedit/' . $detail->p_image . ''); ?>">ลบ</a> -->
                                                </td>
                                                <!-- <td>
                                                <a class="btn btn-danger" href="</?php echo site_url('Control_admin/Propertyedit/' . $detail->p_image . ''); ?>">ลบ</a>
                                                </td> -->
                                            </tr>
                                        </table>
                                    </div>
                                    <input type="file" id="imageproperty" style="border: 1px solid #0597b5;" name="imageproperty" class="form-control" multiple>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-2">
                                <p><b>รูปภาพทรัพย์ย่อย</b></p>
                                <div>
                                <div>
                                    <div>
                                        <table class="table table-bordered">
                                            <tr>
                                                <td style="width:50%;text-align:center">
                                                    <img src="<?php echo base_url('property/' . $detail->p_code . '/' . $detail->p_image); ?>" alt="properties" style="width:50%;text-align:center;" />
                                                    <!-- <a class="btn btn-danger" href="<?php echo site_url('Control_admin/Propertyedit/' . $detail->p_image . ''); ?>">ลบ</a> -->
                                                </td>
                                                <!-- <td>
                                                <a class="btn btn-danger" href="</?php echo site_url('Control_admin/Propertyedit/' . $detail->p_image . ''); ?>">ลบ</a>
                                                </td> -->
                                            </tr>
                                        </table>
                                    </div>
                                    <input type="file" id="imageproperty2" style="border: 1px solid #0597b5;" name="imageproperty2" class="form-control" multiple>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="mb-2">
                                <p><b>รหัส product </b></p>
                                <div>
                                    <input type="text" name="codepoduct" id="codepoduct" style="border: 1px solid #0597b5;" class="form-control" minlength="3" placeholder="รหัส product" value="<?php echo $detail->p_id ?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-2">
                                <p><b>รหัส ทรัพย์ </b></p>

                                <div>
                                    <input type="text" name="codeproperty" id="codeproperty" style="border: 1px solid #0597b5;" class="form-control" minlength="3" placeholder="รหัส ทรัพย์" value="<?php echo $detail->p_code ?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-2">
                                <p><b>ประเภททรัพย์ </b></p>
                                <div>
                                    <select name="typeproperty" id="typeproperty" style="border: 1px solid #0597b5;" class="form-control">
                                        <?php foreach ($tppt as $pt) { ?>
                                            <?php if ($pt->id == $detail->p_typeproperties) { ?>
                                                <option value="<?php echo $pt->id; ?>" selected> <?php echo $pt->nametype; ?> </option>
                                            <?php } else { ?>
                                                <option value="<?php echo $pt->id; ?>"> <?php echo $pt->nametype; ?> </option>
                                            <?php } ?>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-2">
                                <p><b>ประเภท product </b></p>
                                <div>
                                    <select name="typeproduct" id="typeproduct" style="border: 1px solid #0597b5;" class="form-control">
                                        <?php foreach ($tpd as $pd) { ?>
                                            <?php if ($pd->id == $detail->type_product) { ?>
                                                <option value="<?php echo $pd->id; ?>" selected> <?php echo $pd->productname; ?> </option>
                                            <?php } else { ?>
                                                <option value="<?php echo $pd->id; ?>"> <?php echo $pd->productname; ?> </option>
                                            <?php } ?>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-2">
                                <p><b>หัวข้อทรัพย์</b></p>
                                <div>
                                    <textarea name="titleroperty" id="titleroperty" style="width:100%;height: 144px;"><?php echo $detail->p_name; ?></textarea>
                                    <!-- <input type="text" name="titleroperty" id="titleroperty" style="border: 1px solid #0597b5;" class="form-control" minlength="3" placeholder="หัวข้อทรัพย์" value="<ฝ?php echo $detail->p_name ?>"> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-2">
                                <p><b>ลายระเอียดทรัพย์</b></p>
                                <div>
                                    <textarea name="detailproperty" id="detailproperty"><?php echo $detail->p_detail; ?></textarea>
                                    <!-- <input type="text" name="detailproperty" id="detailproperty" style="border: 1px solid #0597b5;" class="form-control" minlength="3" placeholder="ลายระเอียดทรัพย์" value="<ฝ?php echo $detail->p_detail ?>"> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-2">
                                <p><b>ที่อยู่</b></p>
                                <div>
                                    <textarea name="address" id="address"><?php echo $detail->p_address; ?></textarea>
                                    <!-- <input type="text" name="address" id="address" style="border: 1px solid #0597b5;" class="form-control" minlength="3" placeholder="ที่อยู่" </?php echo $detail->p_address; ?>> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-2">
                                <p><b>จังหวัด</b></p>
                                <div>
                                    <select class="form-control csscall js-example-basic-single" id="province" name="province" style="border: 1px solid #0597b5;" onchange="getdistrict(this.value)">
                                        <option value="">เลือกจังหวัด</option>
                                        <?php foreach ($province as $pv) { ?>
                                            <?php if ($detail->p_province == $pv->id) { ?>
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
                        </div>
                        <div class="col-md-4">
                            <div class="mb-2">
                                <p><b>อำเภอ</b></p>
                                <div>
                                    <select class="form-control csscall js-example-basic-single" id="dristrict" name="dristrict" style="border: 1px solid #0597b5;" onchange="getsubdistrict(this.value)">
                                        <?php if ($this->session->userdata("dristrict")) { ?>
                                            <option value="<?php echo  $this->session->userdata("dristrict"); ?>" selected>
                                                <?php echo  $this->session->userdata("dristrictname"); ?>
                                            </option>
                                        <?php } else { ?>
                                            <option value="<?php echo $detail->p_district; ?>" selected>
                                                <?php echo $detail->district;   ?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-2">
                                <p><b>ตำบล</b></p>
                                <div>
                                    <select class="form-control csscall js-example-basic-single" style="border: 1px solid #0597b5;" id="sub_dristrict" name="sub_dristrict" onchange="getapostcode(this.value)">
                                        <option value="">เลือกตำบล</option>
                                        <?php if ($this->session->userdata("sub_dristrict")) { ?>
                                            <option value="<?php echo  $this->session->userdata("sub_dristrict"); ?>" selected>
                                                <?php echo  $this->session->userdata("sub_dristrictname"); ?>
                                            </option>
                                        <?php } else { ?>
                                            <option value="<?php echo $detail->p_subdistrict; ?>" selected>
                                                <?php echo $detail->supdistrict;   ?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-2">
                                <p><b>postcode</b></p>
                                <div>
                                    <select name="postcode" id="postcode" style="border: 1px solid #0597b5;" disabled class="form-control">
                                        <option value=" <?php echo $detail->zipcode;  ?>"> <?php echo $detail->zipcode;  ?></option>
                                    </select>
                                    <!-- <input type="text" name="postcode" id="postcode" class="form-control"  minlength="3" placeholder="postcode"> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-2">
                                <p><b>ขนาด ไร่</b></p>
                                <div>
                                    <input type="text" name="squarerai" id="squarerai" style="border: 1px solid #0597b5;" class="form-control" minlength="3" placeholder="ขนาด ไร่" value="<?php echo $detail->square_rai ?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-2">
                                <p><b>ขนาด งาน</b></p>
                                <div>
                                    <input type="text" name="squarengan" id="squarengan" style="border: 1px solid #0597b5;" class="form-control" minlength="3" placeholder="ขนาด งาน" value="<?php echo $detail->square_ngan ?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-2">
                                <p><b>ขนาด ตารางวา</b></p>
                                <div>
                                    <input type="text" name="squarewah" id="squarewah" style="border: 1px solid #0597b5;" class="form-control" minlength="3" placeholder="ขนาด ตารางวา" value="<?php echo $detail->square_wah ?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-2">
                                <p><b>ขนาด ตารางเมตร</b></p>
                                <div>
                                    <input type="text" name="squaremeter" id="squaremeter" style="border: 1px solid #0597b5;" class="form-control" minlength="3" placeholder="ขนาด ตารางเมตร" value="<?php echo $detail->square_meter ?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-2">
                                <p><b>ราคา</b></p>
                                <div>
                                    <input type="text" name="price" id="price" style="border: 1px solid #0597b5;" class="form-control" minlength="3" placeholder="ราคา" value="<?php echo $detail->p_price ?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-2">
                                <p><b>เปอร์เซ็น</b></p>
                                <div>
                                    <input type="text" name="percen" id="percen" style="border: 1px solid #0597b5;" class="form-control" minlength="3" placeholder="เปอร์เซ็น" value="<?php echo $detail->percen ?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-2">
                                <p><b>ประเภททรัพย์ (ทรัพย์ เปิด/เปิด)</b></p>
                                <div>
                                    <select name="typeopen" id="typeopen" style="border: 1px solid #0597b5;" class="form-control">
                                        <!-- <option value="">เลือกประเภททรัพย์ (ทรัพย์ เปิด/ปิด)</option> -->
                                        <?php if ($detail->type_open_property == "ํYES") { ?>
                                            <option value="ํYES" selected>เปิด</option>
                                            <option value="NO">ปิด</option>
                                        <?php } else { ?>
                                            <option value="ํYES">เปิด</option>
                                            <option value="NO" selected>ปิด</option>
                                        <?php } ?>

                                    </select>
                                    <!-- <input type="text" name="typeopen" id="typeopen" style="border: 1px solid #0597b5;" class="form-control" minlength="3" placeholder="ทรัพย์ เปิด/เปิด"> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-2">
                                <p><b>วงเงิน (จดจำนอง/ขายฝาก)</b></p>
                                <div>
                                    <input type="text" name="limit_price" id="limit_price" style="border: 1px solid #0597b5;" class="form-control" minlength="3" placeholder="จดจำนอง/ขายฝาก" value="<?php echo $detail->price_limit ?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-2">
                                <p><b>วันที่เริ่มสัญญา</b></p>
                                <div>
                                    <input type="date" name="start_date" id="start_date" style="border: 1px solid #0597b5;" class="form-control" minlength="3" value="<?php echo $detail->start_date ?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-2">
                                <p><b>วันที่สิ้นสุดสัญญา</b></p>
                                <div>
                                    <input type="date" name="end_date" id="end_date" style="border: 1px solid #0597b5;" class="form-control" minlength="3" value="<?php echo $detail->end_date ?>">
                                </div>
                            </div>
                        </div>
                        <!-- </form> -->

                    </div>

                <?php } ?>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">แก้ไขข้อมูล</button>
        </div>
    </form>
</div>


<script src="<?php echo base_url(); ?>assets/ckeditor/ckeditor.js"></script>
<script src="<?php echo base_url(); ?>assets/jquery.datetimepicker.js"></script>
<script>
    $(function() {
        // CKEDITOR.replace('titleroperty', {
        //     customConfig: '</?php base_url('assets/ckeditor/config.js') ?>',
        // });
        CKEDITOR.replace('detailproperty', {
            customConfig: '<?php base_url('assets/ckeditor/config.js') ?>',
        });
        CKEDITOR.replace('address', {
            customConfig: '<?php base_url('assets/ckeditor/config.js') ?>',
        });
    });


    function getdistrict(v) {
        $.getJSON('<?php echo site_url('Control_admin/getdistrict?dis=') ?>' + v, function(res) {

            $('#dristrict').find('option').remove();
            $('#dristrict').append('<option value="">เลือกอำเภอ</option>');
            for (const i in res) {
                $('#dristrict').append('<option value="' + res[i].id + '">' + res[i].name_th + '</option>')
            }
        });
    }

    function getsubdistrict(v) {
        $.getJSON('<?php echo site_url('Control_admin/getsubdistrict?subdis=') ?>' + v, function(res) {

            $('#sub_dristrict').find('option').remove();
            $('#sub_dristrict').append('<option value="">เลือกตำบล</option>');
            for (const i in res) {
                $('#sub_dristrict').append('<option value="' + res[i].id + '">' + res[i].name_th + '</option>')
                // $('#postcode').append()
                // zipcode
            }
        });
    }

    function getapostcode(v) {
        $.getJSON('<?php echo site_url('Control_admin/getpostcode?postcode=') ?>' + v, function(res) {
            $('#postcode').prop("disabled", false)
            $('#postcode').find('option').remove();
            // $('#postcode').append('<option value="">รหัสไปรษณี</option>');
            for (const i in res) {
                $('#postcode').append('<option value="' + res[i].zipcode + '">' + res[i].zipcode + '</option>');
            }
        });
    }

    $(document).ready(function() {
        $("#save_edit").submit(function(e) {
            e.preventDefault();
            for (instance in CKEDITOR.instances) {
                CKEDITOR.instances[instance].updateElement();
            }

            var imageproperty = document.getElementById('imageproperty').files.length;
            var imageproperty2 = document.getElementById('imageproperty2').files.length;

            var codepoduct = document.getElementById('codepoduct').value;
            var codeproperty = document.getElementById('codeproperty').value;
            var typeproduct = document.getElementById('typeproduct').value;
            var typeproperty = document.getElementById('typeproperty').value;
            var titleroperty = document.getElementById('titleroperty').value;
            var detailproperty = document.getElementById('detailproperty').value;
            var address = document.getElementById('address').value;
            var province = document.getElementById('province').value;
            var dristrict = document.getElementById('dristrict').value;
            var sub_dristrict = document.getElementById('sub_dristrict').value;
            var postcode = document.getElementById('postcode').value;
            var squarerai = document.getElementById('squarerai').value;

            var squarengan = document.getElementById('squarengan').value;
            var squarewah = document.getElementById('squarewah').value;
            var squaremeter = document.getElementById('squaremeter').value;

            var price = document.getElementById('price').value;
            var percen = document.getElementById('percen').value;
            var typeopen = document.getElementById('typeopen').value;
            var limit_price = document.getElementById('limit_price').value;
            var start_date = document.getElementById('start_date').value;
            var end_date = document.getElementById('end_date').value;

            var datas = new FormData();
            datas.append("codepoduct", codepoduct);
            datas.append("codeproperty", codeproperty);
            datas.append("typeproduct", typeproduct);
            datas.append("typeproperty", typeproperty);
            datas.append("titleroperty", titleroperty);
            datas.append("detailproperty", detailproperty);
            datas.append("address", address);
            datas.append("province", province);
            datas.append("dristrict", dristrict);
            datas.append("sub_dristrict", sub_dristrict);
            datas.append("postcode", postcode);
            datas.append("squarerai", squarerai);

            datas.append("squarengan", squarengan);
            datas.append("squarewah", squarewah);
            datas.append("squaremeter", squaremeter);
            datas.append("price", price);
            datas.append("percen", percen);
            datas.append("typeopen", typeopen);
            datas.append("limit_price", limit_price);
            datas.append("start_date", start_date);
            datas.append("end_date", end_date);

            for (var x = 0; x < imageproperty; x++) {
                datas.append("imageproperty[]", document.getElementById('imageproperty').files[x]);
            }

            for (var x = 0; x < imageproperty2; x++) {
                datas.append("imageproperty2[]", document.getElementById('imageproperty2').files[x]);
            }


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
                        url: "<?php echo site_url('Control_admin/Editproperty') ?>",
                        dataType: 'json',
                        type: 'POST',
                        data: datas,
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