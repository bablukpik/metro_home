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
    $("#search_renter").on("change", function(){

        var data = $(this).val(); //$("#newRenterAddform").serializeArray();
        var url  = $("#search_renter_form").attr("action");
      
        if (data) {
            $.ajax({
                url:url,
                data:{search_renter:data},
                type:"post",
                success: function(result){
                    console.log('Ok');
                    $("#search_renter_msg").html(result);
                    $("#search_renter").val('');
                },

                error: function(error){
                    $("#search_renter_msg").html("<p style='color:red'>"+error+"</p>")
                }

            });
               
        }else{
            $("#search_renter_msg").html('<p style="color:red">Please Enter Renter NID</p>');
            return false;
        }
         
        $("#search_renter_form").submit(function(){
            return false;
        });

    });



}); //End Jquery Block