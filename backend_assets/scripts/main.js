//Base URL
var getUrl = window.location;
var baseUrl = getUrl.origin + "/" + getUrl.pathname.split('/')[1];

//Start Jquery block
jQuery(function ($) {

    //Image preview for landlord
    function readImgURLlnd(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.readAsDataURL(input.files[0]);
            reader.onload = function (e) {
                $('#renter_photo_preview').attr('src', e.target.result);
            }

        }
    }

    $("#renter_photo").change(function(){
        readImgURLlnd(this);
        console.log('File selected');
    });

    //addNewRenterTolet ajax
    $('#submit').click(function(){
       var data = $("#nid_renter").val(); //$("#newRenterAddform").serializeArray();
       var url  = $("#newRenterAddform").attr("action");
      
       if (data) {
            $.ajax({
                url:url,
                data:{renter_nid:data},
                type:"post",
                success: function(result){

                    $("#newRenterAddedHomeMsg").html(result);
                    $("#nid_renter").val('');
                },

                error: function(error){
                    $("#newRenterAddedHomeMsg").html("<p style='color:red'>"+error+"</p>")
                }

            });
               
        }else{
            $("#newRenterAddedHomeMsg").html('<p style="color:red">Please Enter Renter NID</p>');
            return false;
        }
         
        $("#newRenterAddform").submit(function(){
            return false;
        });
    });

    //Find Renter Location with details
    $('#search_renter').bind("enterKey",function(e){
       
        var data = $(this).val(); //$("#newRenterAddform").serializeArray();
        var url = $("#search_renter_form").attr("action");
      
        if (data) {
            $.ajax({
                url:url,
                data:{search_renter:data},
                type:"post",
                success: function(result){
                    console.log('Ok');
                    $("#search_renter_msg").html(result);
                    $("#print_download_area").css({'min-height': '400px', 'background': '#fff', 'padding' : '5px', 'border-radius': '8px'});
                    $("#search_renter").val('');
                },

                error: function(error){
                    $("#search_renter_msg").html("<p style='color:red'>"+error+"</p>")
                }

            });
               
        }else{
            $("#search_renter_msg").html('<p style="color:red; border:1px solid red; padding:10px;">Please Enter Renter NID</p>');
        }
         
    });

    //Form submisson prevented
    $("#search_renter_form").submit(function(e){
        e.preventDefault();
    });

    //Custom Enter key Event
    $('#search_renter').keyup(function(e){
        if(e.keyCode == 13)
        {
            $(this).trigger("enterKey");
        }
    });

    //End Find Renter Location with details

    //Data send to url for Download
    $('#search_renter').bind("enterKey",function(e){
        console.log('Hiiiiiiiiiiii');
        var data = $(this).val();

            $('#download__print_search_result').html('<a href="'+baseUrl+'/super_admin/findRenterLocationFromDB/'+data+'" class="btn btn-primary" style="float: right; margin-right: 5px;" target="_blank">Download</a>  <a href="#" id="url_metro_result_print" class="btn btn-primary" style="float: right; margin-right: 5px;" target="_blank">print</a>');

    });

    //Print for Renter search result
    $(document).on('click', '#url_metro_result_print', function(e) {
        
        e.preventDefault();
        var originalContent = $('body').html();
        var printArea = $('#search_renter_msg').html();

        $('body').html(printArea);
        window.print();
        $('body').html(originalContent);

    });

}); //End Jquery Block