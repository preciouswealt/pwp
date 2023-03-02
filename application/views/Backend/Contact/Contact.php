<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">ข่าวสาร</h1>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                ข้อมูล ข่าวสาร
            </div>
            <div class="card-body">
                <button type="button" class="btn btn-primary" data-toggle="modal"
                    data-target="#insertmodal">เพิ่มข้อมูลข่าวสาร</button>
                <br /><br />
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">ลำดับ</th>
                            <th scope="col">ชื่อ-นามสกุล</th>
                            <th scope="col">เบอร์โทร</th>
                            <th scope="col">ไอดีไลน์</th>
                            <th scope="col">อีเมล</th>
                            <th scope="col">หัวข้อติดต่อ</th>
                            <th scope="col">หมายเหตุ</th>
                            <th scope="col">วันที่บันทึก</th>
                            <th scope="col">รายละเอียด</th>
                            <th scope="col">ลบข้อมูล</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($Contact as $CT){ ?>
                        <tr>
                            <td scope="row"><?php echo $CT->row ?></td>
                            <td><?php echo $CT->name ?></td>
                            <!-- <td>
                                </?php if (strlen($CT->detail) > 70) { ?>
                                <p><b></?php echo  mb_substr($CT->detail, 0, 70,'UTF-8') . "..."; ?></b></p>
                                </?php  } else { ?>
                                <p><b></?php echo  $CT->detail ?></b></p>
                                </?php  } ?>
                            </td> -->
                            <td><?php echo $CT->phone ?></td>
                            <td><?php echo $CT->idline ?></td>
                            <td><?php echo $CT->email ?></td>
                            <td><?php echo $CT->subject ?></td>
                            <td><?php echo $CT->remark ?></td>
                            <td><?php echo $CT->savedate ?></td> 
                            <td></td>  
                            <td></td>                       
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>

<script>
function showdetail(id) {
    var datas = "id=" + id;

    $.ajax({
        type: "POST",
        url: "<?php echo site_url('Control_admin/News_detail') ?>",
        data: datas,
    }).done(function(data) {
        $('#newsdetail').html(data);
    });
}

function statusupdate(News_ID) {
    var datas = "News_ID=" + News_ID;
    swal({
        title: "change status?",
        text: "",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    }, function(isConfirm) {
        if (isConfirm) {
            $.ajax({
                type: "POST",
                url: "<?php echo site_url('Control_admin/Status_News')?>",
                data: datas,
            }).done(function(data) {
                $('#Status' + News_ID).html(data);
            });
        }
    });
}

function deletenews(News_ID, Image) {
    var datas = "News_ID=" + News_ID + "&Image=" + Image;
    swal({
        title: "คุณต้องการที่จะลบข้อมูล ใช่ไหม ?",
        text: "",
        icon: "warning",
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
                type: "POST",
                url: "<?php echo site_url('Control_admin/delete_News')?>",
                data: datas,
            }).done(function(data) {
                swal({
                    title: data,
                    text: "",
                    type: "success"
                }, function() {
                    location.href = '';
                });

            });
        } else {
            swal("ยกเลิกการลบข้อมูล !", "", "warning");
        }
    });
}
</script>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div id="newsdetail">

        </div>
    </div>
</div>

<div class="modal fade" id="insertmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ข้อมูลข่าวสาร</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="save_insert" method="post" action="javascript:void(0)" enctype="multipart/form-data">
                <div class="modal-body">
                    <p><b>รูปภาพ</b></p>
                    <div style="text-align:center">
                        <br /><br />
                        <input type="file" id="imagenews" name="imagenews" class="form-control" multiple>
                    </div>
                    <br />
                    <p><b>หัวข้อ ข่าวสาร</b></p>
                    <textarea name="Titleinsert" id="Titleinsert"></textarea>
                    <br />
                    <p><b>รายละเอียด ข่าวสาร</b></p>
                    <textarea name="Detailinsert" id="Detailinsert"></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                    <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
                </div>
            </form>
        </div>

    </div>
</div>
<script src="<?php echo base_url(); ?>assets/ckeditor/ckeditor.js"></script>
<script>
$(function() {
    CKEDITOR.replace('Titleinsert', {
        customConfig: '<?php base_url('assets/ckeditor/config.js') ?>',
    });
    CKEDITOR.replace('Detailinsert', {
        customConfig: '<?php base_url('assets/ckeditor/config.js') ?>',
    });
});

$(document).ready(function() {
    $("#save_insert").submit(function(e) {
        e.preventDefault();
        for (instance in CKEDITOR.instances) {
            CKEDITOR.instances[instance].updateElement();
        }
        var formData = new FormData($("#save_insert")[0]);
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
                    url: "<?php echo site_url('Control_admin/Insert_News') ?>",
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