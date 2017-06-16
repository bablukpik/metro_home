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
                <div class="text-muted bootstrap-admin-box-title">Manage Ads</div>
            </div>
            <div class="bootstrap-admin-panel-content">
                <table class="text-center table table-striped table-bordered" style="table-layout:fixed; width:100%; word-wrap:break-word">
                    <thead>
                        <tr>
                            <th style="width:5%">SL.</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Created Date</th>
                            <th>Photo</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i=0; foreach ($all_publicity as $key1=>$object): $i++ ?>
                        <tr>
                            <?php echo '<td style="width:5%">'.$i.'</td>'; ?>
                            <?php echo '<td>'.$object->publicity_title.'</td>'; ?>
                            <?php echo '<td>'.$object->publicity_description.'</td>'; ?>
                            <?php echo '<td>'.date('d/m/Y', strtotime($object->publicity_created_date)).'</td>'; ?>
                            <?php echo '<td><img src="'.base_url('publicity/images/publicity_img/').$object->publicity_photo.'" width="70" alt="Ads Photo"></td>'; ?>
                            <td class="actions">
                                <button id="publicity_edit" data-id="<?php echo $object->publicity_id; ?>" class="btn btn-sm btn-primary publicity_edit">
                                    <i class="glyphicon glyphicon-pencil"></i>
                                    Edit
                                </button>
                                <button id="publicity_delete" data-id="<?php echo $object->publicity_id; ?>" class="btn btn-sm btn-danger publicity_delete">
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
    <button style="visibility: hidden;" type="button" id="publicity_update_dialog_btn" class="btn btn-default btn-create" data-toggle="modal" data-target="#publicity_update_dialog">Update Publicity</button>
    <?php $this->load->view('dialogs/publicity_update_dialog'); ?>
</div>

<script src='<?php echo base_url('assets/js/jquery.min.js'); ?>'></script>
<script src='https://code.jquery.com/jquery.min.js'></script>
<script>
    jQuery(function(){
        //delete
        $('.publicity_delete').on('click',function(){
            var deleted_row = $(this).parent().parent();
            var id = $(this).data('id');
            var url = '<?php echo base_url("publicity/delete"); ?>';

            if (confirm('Are you sure to delete?')) {
                $.ajax({
                    type:'post',
                    url:url,
                    cache: false,
                    data:{publicity_id:id},
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
        $('.publicity_edit').on('click',function(){
            var id = $(this).data('id');
            var url = '<?php echo base_url("publicity/update_form"); ?>';

            $.ajax({
                type:'post',
                url:url,
                data:{publicity_id:id},
                success:function(data){
                    if (data) {
                        $('#publicity_update_dialog_btn').trigger('click');
                        $('#publicity_update_data').html(data);
                    }
                },
                error:function(){
                    alert('Error updating');
                }
            });
        });

        //Update
        $(document).on('submit', '#publicityUpdateForm', function(event){
            event.preventDefault();
            var publicityUpdateSubmitData = $('#publicityUpdateForm').serializeArray();
            var url = '<?php echo base_url("publicity/update"); ?>';
            $.ajax({
                type:'post',
                url:url,
                data:publicityUpdateSubmitData,
                success:function(data){
                    if (data=='yes') {
                        alert("Updated successfully");
                        $('.modal').modal('hide');
                        window.location = "<?php echo base_url('publicity/publicity_action'); ?>";
                    }
                },
                error:function(){
                    alert('Error updating');
                }
            });

        });


    });
</script>