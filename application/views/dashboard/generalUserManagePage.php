 <style>
    table th{text-align:center;}
    .modal-content {border: none !important;}
    /* .modal-header {border-bottom: none !important; } */
    .panel-default {border-color: transparent !important;}
 </style>
 <div class="row" style="margin-top:40px;">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="text-muted bootstrap-admin-box-title">Manage Renter</div>
            </div>
            <div class="bootstrap-admin-panel-content">
                <table class="text-center table table-striped table-bordered" style="table-layout:fixed; width:100%; word-wrap:break-word">
                    <thead>
                        <tr>
                            <th style="width:5%">SL.</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Phone No.</th>
                            <th>Photo</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i=0; foreach ($generalUserAll as $key1=>$row1): $i++ ?>
                        <tr>
                            <?php echo '<td style="width:5%">'.$i.'</td>'; ?>
                            <?php echo '<td>'.$row1->ad_lnd_first_name.'</td>'; ?>
                            <?php echo '<td>'.$row1->ad_lnd_last_name.'</td>'; ?>
                            <?php echo '<td>'.$row1->ad_lnd_mobile.'</td>'; ?>
                            <?php echo '<td><img src="'.base_url('uploads/general_user/').$row1->ad_user_photo.'" width="70" alt="General User Photo"></td>'; ?>
                            <td class="actions">
                                <button id="lnd_edit" data-id="<?php echo $row1->ad_id; ?>" class="btn btn-sm btn-primary general_user_edit">
                                    <i class="glyphicon glyphicon-pencil"></i>
                                    Edit
                                </button>
                                <button id="lnd_delete" data-id="<?php echo $row1->ad_id; ?>" class="btn btn-sm btn-danger general_user_delete">
                                    <i class="glyphicon glyphicon-trash"></i>
                                    Delete
                                </button>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Update dialog -->
<div class="row">
    <button style="visibility: hidden;" type="button" id="general_user_update_dialog_btn" class="btn btn-default btn-create" data-toggle="modal" data-target="#general_user_update_dialog_target">Update General</button>
    <?php $this->load->view('dialogs/general_user_update_dialog'); ?>
</div>

<script>

    window.onload = function(){
        //delete
        $('.lnd_delete').on('click',function(){
            var deleted_row = $(this).parent().parent();
            var id = $(this).data('id');
            var url = '<?php echo base_url("renter/delete"); ?>';

            if (confirm('Are you sure to delete?')) {
                $.ajax({
                    type:'post',
                    url:url,
                    cache: false,
                    data:{renter_id:id},
                    success:function(data){
                        if (data=='yes') {
                            deleted_row.fadeOut().remove();
                            alert("Deleted successfully"); 
                        }
                    },
                    error:function(){
                        alert('Error deleting');
                    }
                });
            }
        });

        //Update Form
        $('.general_user_edit').on('click',function(){
            var id = $(this).data('id');
            //alert(id);
            var url = '<?php echo base_url("super_admin/general_user_update_form"); ?>';

            $.ajax({
                type:'post',
                url:url,
                data:{ad_id:id},
                success:function(data){
                    $('#general_user_update_dialog_btn').trigger('click');
                    $("#general_user_update_data").html(data);
                    $('.datetimepicker').datetimepicker({
                        format: 'DD/MM/YYYY'
                    });
                },
                error:function(){
                    alert('Error updating');
                }
            });
        });

        //Update
        /*$(document).on('submit', '#renterUpdateForm', function(event){
            event.preventDefault();
            event.stopPropagation();
            var renterUpdateSubmitData = new FormData(this);
            //var renterUpdateSubmitData = $('#renterUpdateForm').serialize();
            console.log(renterUpdateSubmitData);
            var url = '<php echo base_url("renter/update"); ?>';

            $.ajax({
                type:'POST',
                url: url,
                data:renterUpdateSubmitData,
                cache:false,
                contentType: false,
                processData: false,
                success:function(data){
                    //$("#renterUpdateForm")[0].reset();
                    if (data=='yes') {
                        alert("Success! Updated successfully");
                        $('.modal').modal('hide');
                        window.location = "<php echo base_url('renter/renter_action'); ?>";
                    }
                },
                error: function(data){
                    console.log("Error: "+data);
                    if (data=='no') {
                        alert("Failure! Not Updated successfully");
                        $('.modal').modal('hide');
                        window.location = "<php echo base_url('renter/renter_action'); ?>";
                    }
                }
            });

        });
        
        $(document).on("change","#renter_photo",function() {
            $("#renterUpdateForm").submit();
        });*/
        //End Update


        //update image preview
        function lnd_update_image(input) {
            if (input.files && input.files[0]) {
            var reader = new FileReader();
                reader.onload = function (e) {
                    $('#general_user_photo_preview').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $(document).on("change","#ad_user_photo",function(){
            lnd_update_image(this);
            console.log('File selected');
        });
        //End update image preview

        //Add Member dynamically to form field add
        $(document).on("click","#addMember", function(){
            var count = $('#member-add-table tbody tr').length;
            count = count + 1;
            var html_code = "<tr id='row"+count+"'>";
            html_code +="<td>"+count+"</td>";
            html_code +='<td><input type="text" name="new_family_member_name[]" required="required"></td>';
            html_code +='<td><input type="text" name="new_family_member_age[]" required="required"></td>';
            html_code +='<td><input type="text" name="new_family_member_job[]" required="required"></td>';
            html_code +='<td><input type="text" name="new_family_member_phone[]" required="required"></td>';
            html_code +='<td><button type="button" data-row="row'+count+'" class="btn btn-danger btn-xs remove"><i class="fa fa-trash-o" aria-hidden="true"></i></button></td>';
            html_code +='</tr>';
            $('#member-add-table').append(html_code);
        });


    } //End document ready


</script>