<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Touch to money</h1>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Touch to money
            </div>
            <div class="card-body">
                <button type="button" class="btn btn-primary" data-toggle="modal"
                    data-target="#insertmodal">สร้างข้อมูล Touch to money</button>
                <br /><br />
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">ลำดับ</th>
                            <th scope="col">code</th>
                            <th scope="col">ชื่อ</th>
                            <th scope="col">นามสกุล</th>
                            <th scope="col">สถานะ</th>
                            <!-- <th scope="col">รูปภาพ</th> -->
                            <th scope="col">รายละเอียด</th>
                            <!-- <th scope="col">ลบข้อมูล</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($Touchtomoney as $touch){ ?>
                        <tr>
                            <td scope="row"><?php echo $touch->id ?></td>
                            <td><?php echo $touch->id_code ?></td>
                            <td><?php echo $touch->fristname ?></td>
                            <td><?php echo $touch->lastname ?></td>
                            <!-- <td></?php echo $touch->update_date ?></td> -->
                            <td>
                                <!-- </?php echo $touch->status_new ?> -->
                                <div id="Status<?php echo  $touch->id;?>">
                                    <?php if($touch->status == 1) {?>
                                    <!-- <button type="button" class="btn btn-danger btn-xs"
                                        style="color:white;font-size: 13px;border-radius: 5px;"
                                        onclick="statusupdate(</?php echo $touch->id ;?>)"> -->
                                        ยังไม่ได้ทำการประเมิน
                                    <!-- </button> -->
                                    <?php }else if($touch->status == 2) { ?>
                                    <!-- <button type="button" class="btn btn-success btn-xs"
                                        style="color:white;font-size: 13px;border-radius: 5px;"
                                        onclick="statusupdate(</?php echo $touch->id ;?>)"> -->
                                        แจ้งผลประเมิน
                                    <!-- </button> -->
                                    <?php }else if($touch->status == 3) { ?>
                                    <!-- <button type="button" class="btn btn-success btn-xs"
                                        style="color:white;font-size: 13px;border-radius: 5px;"
                                        onclick="statusupdate(</?php echo $touch->id ;?>)"> -->
                                        นัดทำสัญญา
                                    </button>
                                    <?php }else if($touch->status == 4) { ?>
                                    <!-- <button type="button" class="btn btn-success btn-xs"
                                        style="color:white;font-size: 13px;border-radius: 5px;"
                                        onclick="statusupdate(</?php echo $touch->id ;?>)"> -->
                                        อนุมัติสินเชื่อ
                                    <!-- </button> -->
                                    <?php }else if($touch->status == 5) { ?>
                                    <!-- <button type="button" class="btn btn-success btn-xs"
                                        style="color:white;font-size: 13px;border-radius: 5px;"
                                        onclick="statusupdate(</?php echo $touch->id ;?>)"> -->
                                        นัดวันทำสัญญากับที่ดิน
                                    <!-- </button> -->
                                    <?php } ?>
                                    
                                </div>
                            </td>
                            <!-- <td></?php echo $touch->image_new ?></td> -->
                            <td>
                                <button type="button" onclick="showdetail(id = '<?php echo $touch->id ?>')"
                                    class="btn btn-primary" data-toggle="modal"
                                    data-target="#exampleModal">ดูรายละเอียด</button>

                                    <a
                                href="<?php echo site_url('Control_admin/Appraisal/' . $touch->id . ''); ?>">ทำการประเมิน</a>
                                </td>

                            <!-- <td>
                                <button type="button" class="btn btn-danger btn-xs"
                                    style="color:white;font-size: 13px;border-radius: 5px;"
                                    onclick="deletenews(id ='</?php echo $touch->id ;?>', imag = '</?php echo $touch->image_new ?>')">
                                    ลบ
                                </button>
                            </td> -->
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
        url: "<?php echo site_url('Control_admin/Touchtomoney_detail') ?>",
        data: datas,
    }).done(function(data) {
        $('#touchmoneydetail').html(data);
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
        <div id="touchmoneydetail">

        </div>
    </div>
</div>

<div class="modal fade" id="insertmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">บันทึก</h5>
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