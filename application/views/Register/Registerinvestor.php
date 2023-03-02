<div style="margin: 20px;">
    <div class="container">
        <div class="property">
            <div style="text-align:center;">
                ลงทะเบียนนักลงทุน
            </div>
        </div>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <form id="save_investor" method="post" action="javascript:void(0)" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>คำนำหน้า</label>
                                <select class="form-control" id= "title" name="title">
                                    <option>โปรดระบุ</option>
                                    <option value="นาย">นาย</option>
                                    <option value="นางสาว">นางสาว</option>
                                    <option value="นาง">นาง</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>ชื่อ - นามสกุล</label>
                                <input type="text" class="form-control" id= "nameall" name = "nameall"  placeholder="โปรดระบุ">
                                <!-- <small class="form-text text-muted">กรุณากรอกเป็นข้อมูลภาษาไทย</small> -->
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>เบอร์โทรศัพท์</label>
                                <input type="text" class="form-control" id="phonenumber" name="phonenumber" placeholder="โปรดระบุ">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>ไอดี ไลน์</label>
                                <input type="text" class="form-control" id="lineid" name="lineid" placeholder="โปรดระบุ">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>อีเมล</label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="โปรดระบุ">
                            </div>
                        </div>
                    </div>

                    <br />
                    <hr />
                    <div style="text-align:center;">
                        รหัสผ่าน
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>รหัสผ่าน</label>
                                <input type="text" class="form-control"  id="password" name="password" placeholder="โปรดระบุ">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>ยืนยันรหัสผ่าน</label>
                                <input type="text" class="form-control" id="activpassword" name="activpassword" placeholder="โปรดระบุ">
                            </div>
                        </div>
                    </div>
                    <br />
                    <hr />
                    <div style="text-align:center;">
                        ข้อมูลเพิ่มเติม
                    </div>

                    <br />
                    <div class="row">
                        <div class=" col-md-6">
                            <div class="form-group">
                                <label>อาชีพปัจจุบัน</label>
                                <select class="form-control" id="current_oc" name="current_oc" >
                                    <option> -- อาชีพปัจจุบัน-- </option>
                                    <option value="ผู้มีรายได้ประจำ">ผู้มีรายได้ประจำ</option>
                                    <option value="ธุระกิจส่วนตัว">ธุระกิจส่วนตัว</option>
                                </select>
                            </div>
                        </div>
                        <div class=" col-md-6">
                            <div class="form-group">
                                <label>ประเภททรัพย์ที่ต้องการลงทุน</label>
                                <!-- <input type="text" class="form-control" placeholder="โปรดระบุ"> -->
                                <select class="form-control" id="property_type" name="property_type" >
                                    <option> -- โปรดเลือกประเภททรัพย์-- </option>
                                    <?php foreach ($typeproperty as $type) { ?>
                                    <option value="<?php echo $type->id ?>"><?php echo $type->nametype ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class=" col-md-6">
                            <div class="form-group">
                                <label>ช่วงเวลาที่สะดวกให้ติดต่อกลับ (จันทร์-ศุกร์)</label>
                                <select class="form-control" id="convenient_time" name="convenient_time" >
                                    <option value="">เลือกช่วงเวลา</option>
                                    <option value="AM">09.00น - 12.00น</option>
                                    <option value="PM">13.00น - 18.00น</option>
                                    <option value="All">ทุกช่วงเวลา</option>
                                </select>
                            </div>
                        </div>
                        <div class=" col-md-6">
                            <div class="form-group">
                                <label>พื้นที่ที่ต้องการลงทุน</label>
                                <select class="form-control" id="investment_area" name="investment_area" >
                                    <option> -- พื้นที่ที่ต้องการลงทุน-- </option>
                                    <option value="">กรุงเทพและปริมณฑล</option>
                                    <option value="">ภาคเหนือ</option>
                                    <option value="">ภาคกลาง</option>
                                    <option value="">ทั่วประเทศ</option>
                                    <option value="">ภาคใต้</option>
                                    <option value="">ภาคตะวันออกเฉียงเหนือ</option>
                                </select>
                            </div>
                        </div>
                        <div class=" col-md-6">
                            <div class="form-group">
                                <label>วงเงินที่ต้องการลงทุน</label>
                                <select class="form-control" id="Amount_invest" name="Amount_invest" >
                                    <option> -- วงเงินที่ต้องการลงทุน-- </option>
                                    <option value="">ต่ำกว่า 1 ล้าน</option>
                                    <option value="">1-3 ล้านบาท</option>
                                    <option value="">3-5 ล้านบาท</option>
                                    <option value="">5-10 ล้านบาท</option>
                                    <option value="">10-50 ล้านบาท</option>
                                    <option value="">50 ล้านขึ้นไป</option>
                                </select>
                            </div>
                        </div>
                        <div class=" col-md-6">
                            <div class="form-group">
                                <label>ประสบการณ์รับซื้อฝาก</label>
                                <br />
                                <input id="experience_buy1" name="experience_buy1" type="checkbox" value="Y">เคยรับซื้อฝาก
                                <input id="experience_buy2" name="experience_buy2" type="checkbox" value="N">ไม่เคยรับซื้อฝาก
                            </div>
                        </div>
                    </div>
                    <br />

                    <div>
                        <input id="verified" name="verified" type="checkbox" class="ant-checkbox-input" aria-required="true"
                            value="Y">ฉันได้อ่านและยอมรับ<span><a target="_blank"
                            href="/privacy-policy">ข้อตกลงและเงื่อนไขทุกประการ</a></span>
                    </div>
                    <br />
                    <button type="submit" class="btn btn-primary">ลงทะเบียน</button>
                </form>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {
    $("#save_investor").submit(function(e) {
        // e.preventDefault();
        // for (instance in CKEDITOR.instances) {
        //     CKEDITOR.instances[instance].updateElement();
        // }
        var formData = new FormData($("#save_investor")[0]);
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
                    url: "<?php echo site_url('Control_user/insertvestor') ?>",
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