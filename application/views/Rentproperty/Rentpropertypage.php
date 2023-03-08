<div style="margin: 20px;">
    <div class="container">
        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
            <h2 style="text-align: center; text-shadow: 1px 1px 3px #000000;" >สัญญาเช่าอสังหาริมทรัพย์คืออะไร</h2>
            <p>สัญญาเช่าเป็นสัญญาต่างตอบแทนและไม่มีการโอนกรรมสิทธิ์ในทรัพย์สินที่เช่า
                ผู้เช่าจึงมีสิทธิเพียงได้ใช้หรือได้รับประโยชน์ในทรัพย์สินในเวลาหนึ่งตามสัญญาเท่านั้น
                สัญญาเช่าอสังหาริมทรัพย์กฎหมายให้ทำสัญญาเช่ากันนานที่สุดถึง 30 ปี จะทำเกิน 30 ปีไม่ได้
                แต่สามารถต่อสัญญาได้คราวละไม่เกิน 30 ปี
                แม้จะทำสัญญาเช่ากันนานเท่าอายุของผู้เช่าหรือผู้ให้เช่าก็สามารถทำได้แต่ไม่ว่าจะทำสัญญาต่อกันนานเพียงใด
                กรรมสิทธิ์ในทรัพย์สินที่เช่าก็ไม่โอนไปยังผู้เช่า ยังคงเป็นกรรมสิทธิ์ของผู้ให้เช่าอยู่เสมอ</p>
            <p>การเช่าอสังหาริมทรัพย์ทำเพื่อจุดประสงค์หลายอย่าง เช่น เช่าบ้าน เช่าอพาร์ทเมนท์ เช่าคอนโดเพื่ออยู่อาศัย
                หรือ เช่าตึกแถว เช่าที่ดินเพื่อทำการค้าขาย เป็นต้น</p>
            <p>*การทำสัญญาเช่าอสังหาริมทรัพย์นั้นกฎหมายได้กำหนดแบบของสัญญาหรือกฎหมายบังคับให้ต้องทำตามแบบที่กฎหมายกำหนด
                การเช่าอสังหาริมทรัพย์จึงจะมีผลสามารถฟ้องร้องบังคับคดีต่อกันได้</p>
            <br />
            <form id="insurance" method="GET" action="<?php echo site_url("Home/rentproperty") ?>">
                <input type="hidden" name="IDtype" id="IDtype" value="3">
                <div class="row">
                    <div class="col-md-4 ">
                        <table>
                            <td style="width: 120px;">
                                <label
                                    style="border: 1px solid #0597b5;background-color:#0597b5;color:#fff;padding:1px;border-radius:5px;width:117px;text-align:center;font-weight: 2;">ประเภททรัพย์</label>
                            </td>
                        </table>
                        <div style="padding: 3px">
                            <select class="form-control csscall js-example-basic-single" placeholder="Pick a state..."
                                id="typeproperties" name="typeproperties" style="border: 1px solid #0597b5;">
                                <option value="">ประเภททรัพย์</option>
                                <?php foreach ($typeproperty as $type) { ?>
                                <?php if ($this->session->userdata("typeproperties") == $type->id) { ?>
                                <option value="<?php echo $type->id ?>" selected><?php echo $type->nametype ?></option>
                                <?php } else { ?>
                                <option value="<?php echo $type->id ?>"><?php echo $type->nametype ?></option>
                                <?php } ?>
                                <?php   } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <table>
                            <td style="width: 120px;">
                                <label
                                    style="border: 1px solid #0597b5;background-color:#0597b5;color:#fff;padding:1px;border-radius:5px;width:117px;text-align:center;font-weight: 2;">จังหวัด</label>
                            </td>
                        </table>
                        <div style="padding: 3px">
                            <select class="form-control csscall js-example-basic-single" id="province" name="province"
                                style="border: 1px solid #0597b5;" onchange="getdistrict(this.value)">
                                <option value="">เลือกจังหวัด</option>
                                <?php foreach ($province as $pv) { ?>

                                <?php if ($this->session->userdata("province") == $pv->id) { ?>
                                <option value="<?php echo $pv->id; ?>" selected><?php echo $pv->name_th; ?> </option>
                                <?php } else { ?>
                                <option value="<?php echo $pv->id; ?>"><?php echo $pv->name_th; ?> </option>
                                <?php } ?>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <table>
                            <td style="width: 120px;">
                                <label
                                    style="border: 1px solid #0597b5;background-color:#0597b5;color:#fff;padding:1px;border-radius:5px;width:117px;text-align:center;font-weight: 2;">อำเภอ</label>
                            </td>
                        </table>
                        <div style="padding: 3px">
                            <select class="form-control csscall js-example-basic-single" id="dristrict" name="dristrict"
                                style="	border: 1px solid #0597b5;" onchange="getsubdistrict(this.value)">
                                <option value="">เลือกอำเภอ </option>
                                <?php if ($this->session->userdata("dristrict")) { ?>
                                <option value="<?php echo  $this->session->userdata("dristrict"); ?>" selected>
                                    <?php echo  $this->session->userdata("dristrictname"); ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <table>
                            <td style="width: 120px;">
                                <label
                                    style="border: 1px solid #0597b5;background-color:#0597b5;color:#fff;padding:1px;border-radius:5px;width:117px;text-align:center;font-weight: 2;">ตำบล</label>
                            </td>
                        </table>
                        <div style="padding: 3px">
                            <select class="form-control csscall js-example-basic-single"
                                style="border: 1px solid #0597b5;" id="sub_dristrict" name="sub_dristrict">
                                <option value="">เลือกตำบล</option>
                                <?php if ($this->session->userdata("sub_dristrict")) { ?>
                                <option value="<?php echo  $this->session->userdata("sub_dristrict"); ?>" selected>
                                    <?php echo  $this->session->userdata("sub_dristrictname"); ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <table>
                            <td style="width: 120px;">
                                <label
                                    style="border: 1px solid #0597b5;background-color:#0597b5;color:#fff;padding:1px;border-radius:5px;width:117px;text-align:center;font-weight: 2;">ขนาด</label>
                            </td>
                        </table>
                        <div style="padding: 3px">
                            <select class="form-control csscall js-example-basic-single"
                                style="border: 1px solid #0597b5;" id="size" name="size">
                                <option value="">เลือกขนาด</option>
                                <?php foreach ($square_wah as $sq) { ?>
                                <?php if ($this->session->userdata("size") == $sq->square_wah) { ?>
                                <option value="<?php echo $sq->square_wah; ?>" selected><?php echo $sq->square_wah; ?>.
                                    ตารางวา </option>
                                <?php } else { ?>
                                <option value="<?php echo $sq->square_wah; ?>"><?php echo $sq->square_wah; ?>. ตารางวา
                                </option>
                                <?php } ?>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <table>
                            <td style="width: 120px;">
                                <label
                                    style="border: 1px solid #0597b5;background-color:#0597b5;color:#fff;padding:1px;border-radius:5px;width:117px;text-align:center;font-weight: 2;">สถานะ</label>
                            </td>
                        </table>
                        <div style="padding: 3px">
                            <select class="form-control csscall js-example-basic-single" id="statusmatch"
                                name="statusmatch" style="border: 1px solid #0597b5;">
                                <option value="">สถานะ</option>
                                <?php if ($this->session->userdata("statusmatch") == "available") { ?>
                                <option value="available" selected>available</option>
                                <option value="done">done</option>
                                <?php } else if ($this->session->userdata("statusmatch") == "done") { ?>
                                <option value="available">available</option>
                                <option value="done" selected>done</option>
                                <?php } else { ?>
                                <option value="available">available</option>
                                <option value="done">done</option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div style="padding: 20px;"></div>
                        <input type="submit" class="form-control btn "
                            style="font-size: 13px;background-color: #0597b5;height: 35px;color:#fff" value="ค้นหา">
                    </div>
                </div>
            </form>
            <br />
            <div class="row">
                <?php
                if(count($properties) == 0){
                    echo "<div style='text-align:center'><h2>coming soon</h2></div>";
                }else{
                foreach ($properties as $ipro) { 
                    
                    ?>

                <div class="col-md-3">
                    <div class="card">
                        <!-- <img src="</?php echo base_url('assets/img/slide/' . $ipro->p_image); ?>" class="card-img-top"   alt="Card image cap"> -->
                        <img src="<?php echo base_url('property/'.$ipro->p_code .'/'. $ipro->p_image); ?>"
                            class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body" style="height: 300px;">
                            <div class="row">
                                <?php if ($ipro->status_match == "available") { ?>
                                <span class="badge bg-success">Available</span>
                                <?php } else { ?>
                                <span class="badge bg-danger">Done</span>
                                <?php } ?>
                            </div>
                            <hr style="border: 0px;" />
                            <p style="font-size: 15px; margin-bottom: 0rem;"><i style="color:#049bba"
                                    class="bi bi-house"></i> รหัสทรัพย์ : <?php echo $ipro->p_code ?></p>
                            <hr style="margin: 0.3rem 0;" />
                            <p style="font-size: 15px; margin-bottom: 0rem;"><i class="bi bi-geo-alt"
                                    style="color:#049bba"></i> <?php echo $ipro->district.','.$ipro->supdistrict ?></p>
                            <hr style="margin: 0.3rem 0;" />
                            <p style="font-size: 15px; margin-bottom: 0rem;"><i class="bi bi-plus-square"
                                    style="color:#049bba"></i> พื้นที่ <?php echo $ipro->square_wah ?> ตร.วา</p>
                            <hr style="margin: 0.3rem 0;" />
                            <p style="font-size: 15px; margin-bottom: 0rem;"><i class="bi bi-credit-card"
                                    style="color:#049bba"></i> มูลค่าทรัพย์ <?php echo $ipro->p_price ?> บาท</p>
                            <!-- <hr style="margin: 0.3rem 0;" />
                                <p style="font-size: 15px; margin-bottom: 0rem;"><i class="bi bi-credit-card" style="color:#049bba"></i> วงเงินขายฝาก xxx,xxx</p>
                                <hr style="margin: 0.3rem 0;" />
                                <p style="font-size: 15px; margin-bottom: 0rem;"><i class="bi bi-coin" style="color:#049bba"></i> ดอกเบี้ย 90,000 บาท/ปี(9%) </p> -->
                            <hr style="margin: 0.3rem 0;" />
                            <a onclick="loading()"
                                href="<?php echo site_url('Detail_Rentproperty/' . $ipro->id . ''); ?>">...ดูรายละเอียด</a>
                        </div>
                    </div>
                    <!-- </?php echo $n->title; ?>
                             </?php echo $n->detail; ?>
                             </?php echo $n->image_new; ?>
                        -->
                    <br />
                </div>
                <?php } } ?>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <?php echo $pagelinks; ?>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
        <hr>
        <div>
            <?php $this->load->view("Contractproduct") ?>
        </div>
    </div>
</div>
<script>
$('#typeproperties').select2({
    placeholder: 'ประเภททรัพย์',
    width: '100%',
    allowClear: true
});
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
$('#size').select2({
    placeholder: 'ขนาด',
    width: '100%',
    allowClear: true
});
$('#statusmatch').select2({
    placeholder: 'สถานะ',
    width: '100%',
    allowClear: true
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
</script>