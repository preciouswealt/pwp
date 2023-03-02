<div style="margin: 20px;">
    <div class="container">
        <div class="property">
            <div style="text-align:center;">
                ลงทะเบียนนักฝากขาย
            </div>
        </div>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>คำนำหน้า</label>
                                <select class="form-control">
                                    <option>โปรดระบุ</option>
                                    <option value="mr">นาย</option>
                                    <option value="miss">นางสาว</option>
                                    <option value="mrs">นาง</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>ชื่อ - นามสกุล</label>
                                <input type="text" class="form-control" placeholder="โปรดระบุ">
                                <!-- <small class="form-text text-muted">กรุณากรอกเป็นข้อมูลภาษาไทย</small> -->
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>เบอร์โทรศัพท์</label>
                                <input type="text" class="form-control" placeholder="โปรดระบุ">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>LINE ID</label>
                                <input type="text" class="form-control" placeholder="โปรดระบุ">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>อีเมล</label>
                                <input type="text" class="form-control" placeholder="โปรดระบุ">
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
                                <input type="text" class="form-control" placeholder="โปรดระบุ">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>ยืนยันรหัสผ่าน</label>
                                <input type="text" class="form-control" placeholder="โปรดระบุ">
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
                                <input type="text" class="form-control" placeholder="โปรดระบุ">
                            </div>
                        </div>
                        <div class=" col-md-6">
                            <div class="form-group">
                                <label>ประเภททรัพย์ที่ต้องการลงทุน</label>
                                <!-- <input type="text" class="form-control" placeholder="โปรดระบุ"> -->
                                <select class="form-control">
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
                                <select class="form-control">
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
                                <input type="text" class="form-control" placeholder="โปรดระบุ">
                            </div>
                        </div>
                        <div class=" col-md-6">
                            <div class="form-group">
                                <label>วงเงินที่ต้องการลงทุน</label>
                                <input type="text" class="form-control" placeholder="โปรดระบุ">
                            </div>
                        </div>
                        <div class=" col-md-6">
                            <div class="form-group">
                                <label>ประสบการณ์รับซื้อฝาก</label>
                                <br />
                                <input type="checkbox">เคยรับซื้อฝาก
                                <input type="checkbox">ไม่เคยรับซื้อฝาก
                            </div>
                        </div>
                    </div>
                        <br />
                        
                        <div>
                            <input id="verified" type="checkbox" class="ant-checkbox-input" aria-required="true" value="">ฉันได้อ่านและยอมรับ<span><a target="_blank" href="/privacy-policy">ข้อตกลงและเงื่อนไขทุกประการ</a></span>
                        </div>
                        <br />
                        <button type="submit" class="btn btn-primary">ลงทะเบียน</button>
                </form>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
</div>