<div class="section-title" style="padding-bottom: 10px;">
    <h3>ติดต่อเรา</h3>
</div>
<form id="save_contract" class="php-email-form" method="post" action="javascript:void(0)" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
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
                    <input type="email" class="form-control" name="email" id="email" required>
                </div>


            </div>
            <div class="form-group mt-3">
                <label for="name">เรื่องที่ติดต่อ</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
            </div>
            <div class="form-group mt-3">
                <label for="name">หมายเหตุ</label>
                <textarea class="form-control" name="message" id="message" rows="2" required></textarea>
            </div>
            <!-- <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div> -->
            <br />
            <div class="text-center"><button type="submit" class="btn btn-primary">ติดต่อเรา</button></div>
        </div>
        <div class="col-md-4"></div>
    </div>
</form>

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