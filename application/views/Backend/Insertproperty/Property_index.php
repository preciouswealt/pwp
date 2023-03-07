<main>
    <style>
        table {
            /* table-layout: fixed; */
            width: 100%;
            border: 1px solid red;
        }

        td {
            border: 1px solid blue;
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
        }

        .tableFix {
            /* Scrollable parent element */
            position: relative;
            overflow: auto;
            height: 100px;
        }

        .tableFix table {
            width: 100%;
            border-collapse: collapse;
        }

        .tableFix th,
        .tableFix td {
            padding: 8px;
            text-align: left;
        }

        .tableFix thead th {
            position: sticky;
            /* Edge, Chrome, FF */
            top: 0px;
            background: #808080;
            /* Some background is needed */
        }
    </style>
    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css"> -->
    <div class="container-fluid px-4">
        <h1 class="mt-4">ทรัพย์</h1>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                ข้อมูล ทรัพย์
            </div>
            <div class="card-body">
                <!-- <button type="button" class="btn btn-primary" data-toggle="modal"
                    data-target="#insertmodal">เพิ่มข้อมูลทรัพย์</button> -->

                <a class="btn btn-primary" href="<?php echo site_url('Control_admin/Propertyforminsert'); ?>">เพิ่มข้อมูลทรัพย์</a>
                <br /><br />
                <div style="overflow: auto;width: 100%;height:450px" class="tableFix">
                    <table id='users' class="table table-bordered">
                        <!-- <div style="overflow-x:auto;">
                    <table > -->
                        <thead>
                            <tr>
                                <th scope="col" style=" white-space: nowrap;">ลำดับ</th>
                                <th scope="col" style="white-space: nowrap;">Code Touch To Coney</th>
                                <th scope="col" style="white-space: nowrap;">รหัสโปรดักส์</th>
                                <th scope="col" style="white-space: nowrap;">รหัสทรัพย์</th>
                                <th scope="col" style="white-space: nowrap;">หัวข้อทรัพย์</th>
                                <th scope="col" style="white-space: nowrap;">วันที่บันทึ</th>
                                <th scope="col" style="white-space: nowrap;">วันที่แก้ไข</th>
                                <th scope="col" style="white-space: nowrap;">ประเภททรัพย์</th>
                                <th scope="col" style="white-space: nowrap;">ประเภทโปรดักซ์</th>
                                <th scope="col" style="white-space: nowrap;">สถานะ</th>
                                <th scope="col" style="white-space: nowrap;">สเตตัสแสดงหน้าเว็บ</th>
                                <!-- <th scope="col" >รูปภาพ</th> -->

                                <th scope="col" style="white-space: nowrap;">รายละเอียด</th>
                                <!-- <th scope="col">ลบข้อมูล</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($Property_index as $Property) { ?>
                                <tr>

                                    <!-- p.p_touch,p.p_id,p.p_code,p.p_name,p.p_savedate,p.p_status,p.p_updatedate,td.productname,tp.nametype -->
                                    <td scope="row"><?php echo $Property->row ?></td>
                                    <td><?php echo $Property->p_touch ?></td>
                                    <td><?php echo $Property->p_id ?></td>
                                    <td><?php echo $Property->p_code ?></td>
                                    <!-- <td>
                                </?php if (strlen($Property->detail) > 70) { ?>
                                <p><b></?php echo  mb_substr($Property->detail, 0, 70,'UTF-8') . "..."; ?></b></p>
                                </?php  } else { ?>
                                <p><b></?php echo  $Property->detail ?></b></p>
                                </?php  } ?>
                            </td> -->
                                    <td><?php echo $Property->p_name ?></td>
                                    <td><?php echo $Property->p_savedate ?></td>
                                    <td><?php echo $Property->p_updatedate ?></td>
                                    <td><?php echo $Property->nametype ?></td>
                                    <td><?php echo $Property->productname ?></td>
                                    <td>
                                        <!-- </?php echo $Property->status_match ?> -->

                                        <div id="Status<?php echo  $Property->id; ?>">
                                            <?php if ($Property->status_match == 'done') { ?>
                                                <button type="button" class="btn btn-danger btn-xs" style="color:white;font-size: 13px;border-radius: 5px;" onclick="statusmatchupdate(<?php echo $Property->id; ?>)">
                                                    done
                                                </button>
                                            <?php } else if ($Property->status_match == 'available') { ?>
                                                <button type="button" class="btn btn-success btn-xs" style="color:white;font-size: 13px;border-radius: 5px;" onclick="statusmatchupdate(<?php echo $Property->id; ?>)">
                                                    available
                                                </button>
                                            <?php } ?>

                                    </td>
                                    <td>
                                        <!-- </?php echo $Property->p_status ?> -->
                                        <div id="Statusshow<?php echo  $Property->id; ?>">
                                            <?php if ($Property->p_status == 0) { ?>
                                                <button type="button" class="btn btn-danger btn-xs" style="color:white;font-size: 13px;border-radius: 5px;" onclick="statusshowupdate(<?php echo $Property->id; ?>)">
                                                    ปิดการใช้งาน
                                                </button>
                                            <?php } else if ($Property->p_status == 1) { ?>
                                                <button type="button" class="btn btn-success btn-xs" style="color:white;font-size: 13px;border-radius: 5px;" onclick="statusshowupdate(<?php echo $Property->id; ?>)">
                                                    เปิดการใช้งาน
                                                </button>
                                            <?php } ?>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="<?php echo site_url('Control_admin/Propertyedit/' . $Property->id . ''); ?>">ดูรายละเอียด</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>




</main>
<!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script> -->
<!-- <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script> -->

<script>
    // $(document).ready(function() {
    //     $('#users').dataTable({
    //         serverSide: true,
    //         ajax: '</?php echo base_url('welcome/load_data'); ?>'
    //     });
    // });

    function showdetail(id) {
        var datas = "id=" + id;

        $.ajax({
            type: "POST",
            url: "<?php echo site_url('Control_admin/Property_detail') ?>",
            data: datas,
        }).done(function(data) {
            $('#newsdetail').html(data);
        });
    }

    function statusmatchupdate(SM_id) {
        var datas = "SM_id=" + SM_id;
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
                    url: "<?php echo site_url('Control_admin/Statusmatch') ?>",
                    data: datas,
                }).done(function(data) {
                    // console.log(data);
                    $('#Status' + SM_id).html(data);
                });
            }
        });
    }

    function statusshowupdate(sw_dis) {
        var datas = "sw_dis=" + sw_dis;
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
                    url: "<?php echo site_url('Control_admin/Statusshowe') ?>",
                    data: datas,
                }).done(function(data) {
                    $('#Statusshow' + sw_dis).html(data);
                });
            }
        });
    }

    // function deletenews(News_ID, Image) {
    //     var datas = "News_ID=" + News_ID + "&Image=" + Image;
    //     swal({
    //         title: "คุณต้องการที่จะลบข้อมูล ใช่ไหม ?",
    //         text: "",
    //         icon: "warning",
    //         showCancelButton: true,
    //         confirmButtonColor: '#3085d6',
    //         cancelButtonColor: '#d33',
    //         confirmButtonText: 'ตกลง',
    //         cancelButtonText: 'ยกเลิก',
    //         closeOnConfirm: false,
    //         closeOnCancel: false,
    //         showLoaderOnConfirm: true,
    //     }, function(isConfirm) {
    //         if (isConfirm) {
    //             $.ajax({
    //                 type: "POST",
    //                 url: "</?php echo site_url('Control_admin/delete_News')?>",
    //                 data: datas,
    //             }).done(function(data) {
    //                 swal({
    //                     title: data,
    //                     text: "",
    //                     type: "success"
    //                 }, function() {
    //                     location.href = '';
    //                 });

    //             });
    //         } else {
    //             swal("ยกเลิกการลบข้อมูล !", "", "warning");
    //         }
    //     });
    // }
</script>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div id="newsdetail">

        </div>
    </div>
</div>


<script src="<?php echo base_url(); ?>assets/ckeditor/ckeditor.js"></script>
<script src="<?php echo base_url(); ?>assets/jquery.datetimepicker.js"></script>
<script>
    // $(function() {
    //     CKEDITOR.replace('Titleinsert', {
    //         customConfig: '</?php base_url('assets/ckeditor/config.js') ?>',
    //     });
    //     CKEDITOR.replace('Detailinsert', {
    //         customConfig: '</?php base_url('assets/ckeditor/config.js') ?>',
    //     });
    // });

    $(document).ready(function() {
        $("#save_insert").submit(function(e) {
            // alert('tttt');
            // e.preventDefault();
            // for (instance in CKEDITOR.instances) {
            //     CKEDITOR.instances[instance].updateElement();
            // }
            // var formData = new FormData($("#save_insert")[0]);
            // $('#send_form').html('Sending..');

            var imageproperty = document.getElementById('imageproperty').files.length;
            var imageproperty2 = document.getElementById('imageproperty2').files.length;

            var codepoduct = document.getElementById('codepoduct').value;
            var codeproperty = document.getElementById('codeproperty').value;
            var typeproduct = document.getElementById('typeproduct').value;
            var typeproperty = document.getElementById('typeproperty').value;
            var titleroperty = document.getElementById('titleroperty').value;
            var detailproperty = document.getElementById('detailproperty').value;
            var address = document.getElementById('address').value;
            var province = document.getElementById('province').value;
            var dristrict = document.getElementById('dristrict').value;
            var sub_dristrict = document.getElementById('sub_dristrict').value;
            var postcode = document.getElementById('postcode').value;
            var squarerai = document.getElementById('squarerai').value;

            var squarengan = document.getElementById('squarengan').value;
            var squarewah = document.getElementById('squarewah').value;
            var squaremeter = document.getElementById('squaremeter').value;

            var price = document.getElementById('price').value;
            var percen = document.getElementById('percen').value;
            var typeopen = document.getElementById('typeopen').value;
            var limit_price = document.getElementById('limit_price').value;
            var start_date = document.getElementById('start_date').value;
            var end_date = document.getElementById('end_date').value;

            var datas = new FormData();
            datas.append("codepoduct", codepoduct);
            datas.append("codeproperty", codeproperty);
            datas.append("typeproduct", typeproduct);
            datas.append("typeproperty", typeproperty);
            datas.append("titleroperty", titleroperty);
            datas.append("detailproperty", detailproperty);
            datas.append("address", address);
            datas.append("province", province);
            datas.append("dristrict", dristrict);
            datas.append("sub_dristrict", sub_dristrict);
            datas.append("postcode", postcode);
            datas.append("squarerai", squarerai);

            datas.append("squarengan", squarengan);
            datas.append("squarewah", squarewah);
            datas.append("squaremeter", squaremeter);
            datas.append("price", price);
            datas.append("percen", percen);
            datas.append("typeopen", typeopen);
            datas.append("limit_price", limit_price);
            datas.append("start_date", start_date);
            datas.append("end_date", end_date);

            for (var x = 0; x < imageproperty; x++) {
                datas.append("imageproperty[]", document.getElementById('imageproperty').files[x]);
            }

            for (var x = 0; x < imageproperty2; x++) {
                datas.append("imageproperty2[]", document.getElementById('imageproperty2').files[x]);
            }


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
                        url: "<?php echo site_url('Control_admin/Insertproperty') ?>",
                        dataType: 'json',
                        type: 'POST',
                        data: datas,
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

    function getdistrict(v) {
        $.getJSON('<?php echo site_url('Control_admin/getdistrict?dis=') ?>' + v, function(res) {

            $('#dristrict').find('option').remove();
            $('#dristrict').append('<option value="">เลือกอำเภอ</option>');
            for (const i in res) {
                $('#dristrict').append('<option value="' + res[i].id + '">' + res[i].name_th + '</option>')
            }
        });
    }

    function getsubdistrict(v) {
        $.getJSON('<?php echo site_url('Control_admin/getsubdistrict?subdis=') ?>' + v, function(res) {

            $('#sub_dristrict').find('option').remove();
            $('#sub_dristrict').append('<option value="">เลือกตำบล</option>');
            for (const i in res) {
                $('#sub_dristrict').append('<option value="' + res[i].id + '">' + res[i].name_th + '</option>')
                // $('#postcode').append()
                // zipcode
            }
        });
    }

    function getapostcode(v) {
        $.getJSON('<?php echo site_url('Control_admin/getpostcode?postcode=') ?>' + v, function(res) {
            $('#postcode').prop("disabled", false)
            $('#postcode').find('option').remove();
            // $('#postcode').append('<option value="">รหัสไปรษณี</option>');
            for (const i in res) {
                $('#postcode').append('<option value="' + res[i].zipcode + '">' + res[i].zipcode + '</option>');
            }
        });
    }
</script>