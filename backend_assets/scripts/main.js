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



}); //End Jquery Block