<div style="margin: 50px;">
    <div class="container">
        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
            
                <h2 style="text-align: center; text-shadow: 1px 1px 3px #000000;"><b>ขายฝาก คืออะไร</b></h2>
              <b>  <p> ขายฝาก เป็นสัญญาซื้อขายรูปแบบหนึ่ง ซึ่งกรรมสิทธิ์(ความเป็นเจ้าของ) ในทรัพย์สิน
                    จะกลายเป็นของผู้ซื้อฝากทันที เหมือนสัญญาซื้อขายทั่วไป แต่แตกต่างกันตรงที่
                    ผู้ขายฝากสามารถไถ่ถอนทรัพย์สินนั้น คืนไปได้ตามสัญญาที่ได้ทำกันไว้ </p>
                <p> ซึ่ง จุดเด่น ของ การขายฝาก ก็คือ สิทธ์การถือครอง
                    ที่เราสามารถไถ่ถอนกลับมาเป็นของเราได้(ในระยะเวลากำหนดของสัญญา) แม้ว่าจะขายฝากไปแล้ว
                    เมื่อเทียบกับการขายขาดที่เป็นการเปลี่ยนผู้ถือครองถาวร ที่สำคัญคือวงเงินที่เหมาะสม
                    ทำให้หาผู้ซื้อฝากได้ง่าย และไม่ต้องใช้จ่ายในการทำโฆษณา ลงประกาศขาย</p>
            </b>
            <br />
            <form id="insurance" method="GET" action="<?php echo site_url("Home/consignment") ?>">
                <input type="hidden" name="IDtype" id="IDtype" value="1">
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
                        <!-- <img src="</?php echo base_url('assets/img/slide/' . $ipro->p_image); ?>" class="card-img-top" src="..." alt="Card image cap"> -->
                        <img src="<?php echo base_url('property/'.$ipro->p_code .'/'. $ipro->p_image); ?>"
                            class="card-img-top" src="..." alt="Card image cap" style="height:200px">
                        <div class="card-body" style="height:300px">
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
                            <a
                                href="<?php echo site_url('Detail_Consignment/' . $ipro->id . ''); ?>">...ดูรายละเอียด</a>
                        </div>
                    </div>
                    <!-- </?php echo $n->title; ?>
            </?php echo $n->detail; ?>
            </?php echo $n->image_new; ?> -->
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
// getdistrict('</?php echo $this->session->userdata("province") ?>');
// getsubdistrict('</?php echo $this->session->userdata("dristrict") ?>');

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
    // let str = t.split(",");
    $.getJSON('<?php echo site_url('Home/getdistrict?dis=') ?>' + v, function(res) {

        $('#dristrict').find('option').remove();
        $('#dristrict').append('<option value="">เลือกอำเภอ</option>');
        for (const i in res) {
            // if (str[0] == res[i].id) {
            //     $('#dristrict').append('<option value="' + res[i].id + ',' + res[i].name_th + '" selected>' + res[i].name_th + '</option>')
            // } else {
            $('#dristrict').append('<option value="' + res[i].id + ',' + res[i].name_th + '">' + res[i]
                .name_th + '</option>')
            // }
        }
    });
}

function getsubdistrict(v) {
    // let str = t.split(",");
    $.getJSON('<?php echo site_url('Home/getsubdistrict?subdis=') ?>' + v, function(res) {

        $('#sub_dristrict').find('option').remove();
        $('#sub_dristrict').append('<option value="">เลือกตำบล</option>');
        for (const i in res) {
            // if (str[0] == res[i].id) {
            //     $('#sub_dristrict').append('<option value="' + res[i].id + ',' + res[i].name_th + '" selected>' + res[i].name_th + '</option>')
            // } else {
            $('#sub_dristrict').append('<option value="' + res[i].id + ',' + res[i].name_th + '">' + res[i]
                .name_th + '</option>')
            // }
        }
    });
}
</script>