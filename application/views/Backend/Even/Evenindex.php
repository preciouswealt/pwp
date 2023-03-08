<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">อีเว้น</h1>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                อีเว้น
            </div>
            <div class="card-body">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#insertmodal">เพิ่มข้อมูลอีเว้น</button>
                <br /><br />
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">ลำดับ</th>
                            <th scope="col">หัวข้อ</th>
                            <th scope="col">วันที่บันทึ</th>
                            <th scope="col">วันที่แก้ไข</th>
                            <th scope="col">สถานะ</th>
                            <th scope="col">รูปภาพ</th>
                            <th scope="col">รายละเอียด</th>
                            <th scope="col">ลบข้อมูล</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($Evenall as $Even) { ?>
                            <tr>
                                <!-- `id``title``detail``savedate``update_date``status_even``image_even``userupdate` -->

                                <td scope="row"><?php echo $Even->id ?></td>
                                <td><?php echo $Even->title ?></td>
                                <!-- <td>
                                </?php if (strlen($Even->detail) > 70) { ?>
                                <p><b></?php echo  mb_substr($Even->detail, 0, 70,'UTF-8') . "..."; ?></b></p>
                                </?php  } else { ?>
                                <p><b></?php echo  $Even->detail ?></b></p>
                                </?php  } ?>
                            </td> -->
                                <td><?php echo $Even->savedate ?></td>
                                <td><?php echo $Even->update_date ?></td>
                                <td>
                                    <!-- </?php echo $Even->status_Even ?> -->
                                    <div id="Status<?php echo  $Even->id; ?>">
                                        <?php if ($Even->status_even == 0) { ?>
                                            <button type="button" class="btn btn-danger btn-xs" style="color:white;font-size: 13px;border-radius: 5px;" onclick="statusupdate(<?php echo $Even->id; ?>)">
                                                ปิดการใช้งาน
                                            </button>
                                        <?php } else if ($Even->status_even == 1) { ?>
                                            <button type="button" class="btn btn-success btn-xs" style="color:white;font-size: 13px;border-radius: 5px;" onclick="statusupdate(<?php echo $Even->id; ?>)">
                                                เปิดการใช้งาน
                                            </button>
                                        <?php } ?>
                                    </div>
                                </td>
                                <td><?php echo $Even->image_even ?></td>
                                <td><button type="button" onclick="showdetail(id = '<?php echo $Even->id ?>')" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">ดูรายละเอียด</button></td>

                                <td>
                                    <button type="button" class="btn btn-danger btn-xs" style="color:white;font-size: 13px;border-radius: 5px;" onclick="deleteEvens(id ='<?php echo $Even->id; ?>', imag = '<?php echo $Even->image_even ?>')">
                                        ลบ
                                    </button>
                                </td>
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
            url: "<?php echo site_url('Control_admin/Even_detail') ?>",
            data: datas,
        }).done(function(data) {
            $('#evendetail').html(data);
        });
    }

    function statusupdate(Even_ID) {
        var datas = "Even_ID=" + Even_ID;
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
                    url: "<?php echo site_url('Control_admin/Status_Even') ?>",
                    data: datas,
                }).done(function(data) {
                    $('#Status' + Even_ID).html(data);
                });
            }
        });
    }

    function deleteEvens(Even_ID, Image) {
        var datas = "Even_ID=" + Even_ID + "&Image=" + Image;
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
                    url: "<?php echo site_url('Control_admin/delete_Even') ?>",
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
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div id="evendetail">

        </div>
    </div>
</div>

<div class="modal fade" id="insertmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                        <input type="file" id="imageeven" name="imageeven" class="form-control" multiple>
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

<table id="table_id" class="display table table-hover table-striped table-bordered">
    <thead>
        <tr>
            <th>ชื่อลูกค้า</th>
            <th>เบอร์โทร</th>
            <th>แฟกซ์</th>
            <th>สถานะ</th>
            <th>&nbsp;</th>
        </tr>
    </thead>
    <tbody>
    </tbody>
</table>

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
                        url: "<?php echo site_url('Control_admin/Insert_Even') ?>",
                        dataType: 'json',
                        type: 'POST',
                        data: formData,
                        contentType: false,
                        processData: false,
                        success: function(resp) {
                            if (resp.success == true) {
                                swal({
                                    title: "อัพเดทข้อมูลสำเร็จ",
                                    text: "ท่านได้ทำเพิ่มข้อมูล เรียบร้อย",
                                    type: "success"
                                }, function() {
                                    location.href = '';
                                });
                            } else {
                                swal("อัพเดทข้อมูลไม่สำเร็จ",
                                    "บันทึกข้อมูลไม่สำเร็จ กรุณาเลือกรูปภาพสำหรับ อีเว้น",
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

<script>
       $(document).ready(function() {
        var table = $('#table_id').DataTable({
            pageLength: 10,
            serverSide: true,
            processing: true,
            ajax: {
                url: '<?php echo site_url('customer/find_with_page'); ?>'
            },
            'columns': [{
                    data: 'name',
                    render: function(data, type, row) {
                        return '<a href="<?php echo site_url('customer/edit/'); ?>' + row[
                            'id'] + '">' + data + '</a> ';
                    }
                },
                {
                    data: 'phone'
                },
                {
                    data: 'fax'
                },
                {
                    data: 'state',
                    render: function(data, type, row) {
                        var active = '<span class="label label-success">ใช้งาน</span>';
                        var inactive = '<span class="label label-danger">ยกเลิก</span>';
                        var status = (data == true) ? active : inactive;
                        return status;
                    }
                },
                {
                    data: 'id',
                    render: function(data, type, row) {
                        var dataName = row['name'];
                        var btnDelete =
                            '<a href="#" data-href="<?php echo site_url('customer/delete'); ?>" data-id="' +
                            data + '" data-name="' + dataName +
                            '" role="button" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i> ลบ</a>';
                        return btnDelete;
                    },
                    orderable: false
                }
            ]
        });
    })
    </script>
</script>