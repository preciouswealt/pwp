<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container">

        <div class="section-title">
            <h2>ติดต่อเรา</h2>
            <p>ติดต่อ หรือ สอบถามเพิ่ม กับเรา </p>
        </div>
        <div class="row">
            <div class="col-lg-5 d-flex align-items-stretch">
                <div class="info">
                    <div class="address">
                        <i class="bi bi-geo-alt"></i>
                        <h4>ที่อยู่ของเรา:</h4>
                        <p>540 Mercury Tower
                            5 floor, room 506
                             Ploenchit Road Lumpini
                            Pathumwan Bangkok 10330</p>
                    </div>
                    <div class="email">
                        <i class="bi bi-envelope"></i>
                        <h4>อีเมล:</h4>
                        <p>info@precious-asset.com</p>
                    </div>
                    <div class="phone">
                        <i class="bi bi-phone"></i>
                        <h4>เบอร์โทร:</h4>
                        <p>098-555-2956 หรือ 02-115-0105 </p>
                    </div>
                    <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=540%20Ploenchit%20Road%20Lumpini%20Pathumwan%20Bangkok%2010330+(Mercury%20Tower%205%20floor,%20room%20506)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.maps.ie/distance-area-calculator.html">measure distance on
                            map</a></iframe>
                </div>

            </div>

            <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                <form id="save_contract" class="php-email-form"  method="post" action="javascript:void(0)" enctype="multipart/form-data">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="name">ชื่อ-นามสกุล</label>
                            <input type="text" name="name" class="form-control" id="name" required>
                        </div>
                        <div class="form-group col-md-6 mt-3 mt-md-0">
                            <label for="name">เบอร์โทร</label>
                            <input type="phone" class="form-control" name="phone" id="phone" required>
                        </div>
                        <div class="form-group col-md-6 mt-3 mt-md-0">
                            <label for="name">ไลน์</label>
                            <input type="text" class="form-control" name="line" id="line" required>
                        </div>
                        <div class="form-group col-md-6 mt-3 mt-md-0">
                            <label for="name">อีเมล</label>
                            <input type="email" class="form-control" name="email" id="email" >
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <label for="name">เรื่องที่ติดต่อ</label>
                        <input type="text" class="form-control" name="subject" id="subject" required>
                    </div>
                    <div class="form-group mt-3">
                        <label for="name">หมายเหตุ</label>
                        <textarea class="form-control" name="message" id="message" rows="10" required></textarea>
                    </div>
                    <!-- <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div> -->
                    <div class="text-center"><button type="submit">ติดต่อเรา</button></div>
                </form>
            </div>

        </div>

    </div>
</section><!-- End Contact Section -->

<script>
    $(document).ready(function() {
        $("#save_contract").submit(function(e) {

            swal({
                title: "แน่ใจหรือไม่ ?",
                text: "ต้องการบันทึกข้อมูล",
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
                        url: "<?php echo site_url("Home/insert_contract") ?>",
                        dataType: 'json',
                        type: 'POST',
                        data: $('#save_contract').serialize(),
                        // contentType: false,
                        // processData: false,
                        success: function(resp) {
                            if (resp.success == true) {
                                swal({
                                    title: "บันทึกข้อมูลสำเร็จ",
                                    text: "เจ้าหน้าที่จะทำการติดต่อกลับ ให้เร็วที่สุด ",
                                    type: "success"
                                }, function() {
                                    location.href = '';
                                    // $("#showdetail").html(response);
                                });
                            } else {
                                swal("บันทึกข้อมูลไม่สำเร็จ", "บันทึกข้อมูลไม่สำเร็จ ", "error");
                            }
                        }
                    });
                } else {
                    swal("บันทึกข้อมูลไม่สำเร็จ", "บันทึกข้อมูลไม่สำเร็จ ", "error");
                }
            });
        });
    });
</script>