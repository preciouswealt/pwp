<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ข้อมูลข่าวสาร</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <form id="save_edit" method="post" action="javascript:void(0)" enctype="multipart/form-data">
        <div class="modal-body">
            <?php foreach($evendetail as $detail){ ?>
            <p><b>รูปภาพ</b></p>
            <div style="text-align:center">
                <img src="<?php echo base_url('assets/img/even/' . $detail->image_even); ?>" class="card-img-top"
                    src="..." alt="Card image cap" style="width:30%">
                <br /><br />
                <input type="file" id="imageeven" name="imageeven" class="form-control" multiple>
            </div>
            <br />
            <p><b>หัวข้อ อีเว้น</b></p>
            <textarea name="Title" id="Title"><?php echo $detail->title; ?></textarea>
            <br />
            <p><b>รายละเอียด อีเว้น</b></p>
            <textarea name="Detail" id="Detail"><?php echo $detail->detail; ?></textarea>
            <?php } ?>
            <input type="hidden" id="ideven" name="ideven" value="<?php echo $detail->id ?>">
            <input type="hidden" id="imageevendelete" name="imageevendelete"  value="<?php echo $detail->image_even ?>">

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
            <button type="submit" class="btn btn-primary">แก้ไข</button>
        </div>
    </form>
</div>



<script src="<?php echo base_url(); ?>assets/ckeditor/ckeditor.js"></script>
<script>
$(function() {
    CKEDITOR.replace('Title', {
        customConfig: '<?php base_url('assets/ckeditor/config.js') ?>',
    });
    CKEDITOR.replace('Detail', {
        customConfig: '<?php base_url('assets/ckeditor/config.js') ?>',
    });
});

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
                    url: "<?php echo site_url('Control_admin/Even_edit') ?>",
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