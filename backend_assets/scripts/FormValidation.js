$(function () {
    //Renter Info Validation
    //Check Email
    $("#renter_email").on('keyup change', function(){
        var renter_email = $(this).val();
        var url = "checkDuplicateDataRenter";

        $.ajax({
            url: url,
            type: "POST",
            data: {renter_email: renter_email},
            success: function(data){
                if(data==1){
                    $("#renter_emailMsg").text("E-mail Already Exists!");
                    $("#renter_emailMsg").css({"color": "red"});
                    $("#renter_email").css({"border": "1px solid red"});
                    $("#renter_emailMsg").fadeIn(1000);
                    $(".accExistLnd").removeClass('display_none');
                    $(".submit").attr("disabled", "disabled");
                }else{
                    $("#renter_emailMsg").fadeOut(2000);
                    $("#renter_email").css({"border":"1px solid #ccc"});
                    $(".accExistLnd").addClass('display_none');
                    $(".submit").removeAttr("disabled", "disabled");
                }
            }
        });
    });

    //Check National ID
    $("#renter_nid").on('keyup change', function(){
        var renter_nid = $(this).val();
        var url = "checkDuplicateDataRenter";
        console.log("Key pressed");
        $.ajax({
            url: url,
            type: "POST",
            data: {renter_nid:renter_nid},
            success: function(data){
                if(data==1){
                    $("#renter_nidMsg").text("National ID Already Exists!");
                    $("#renter_nidMsg").css({"color": "red"});
                    $("#renter_nid").css({"border": "1px solid red"});
                    $("#renter_nidMsg").fadeIn(1000);
                    $(".accExistLnd").removeClass('display_none');
                    $(".submit").attr("disabled", "disabled");
                }else{
                    $("#renter_nidMsg").fadeOut(2000);
                    $("#renter_nid").css({"border":"1px solid #ccc"});
                    $(".accExistLnd").addClass('display_none');
                    $(".submit").removeAttr("disabled", "disabled");
                }
            }
        });
    });

    //Check passport
    $("#renter_passport").on('keyup change', function(){
        var renter_passport = $(this).val();
        var url = "checkDuplicateDataRenter";

        $.ajax({
            url: url,
            type: "POST",
            data: {renter_passport:renter_passport},
            success: function(data){
                if(data==1){
                    $("#renter_passportMsg").text("Passport Already Exists!");
                    $("#renter_passportMsg").css({"color": "red"});
                    $("#renter_passport").css({"border": "1px solid red"});
                    $("#renter_passportMsg").fadeIn(1000);
                    $(".accExistLnd").removeClass('display_none');
                    $(".submit").attr("disabled", "disabled");
                }else{
                    $("#renter_passportMsg").fadeOut(2000);
                    $("#renter_passport").css({"border":"1px solid #ccc"});
                    $(".accExistLnd").addClass('display_none');
                    $(".submit").removeAttr("disabled", "disabled");
                }
            }
        });
    });
    //End Renter Info Validation

    //Landlord Info Validation
    //Check Email
    $("#lnd_email").on('keyup change', function(){
        var lnd_email = $(this).val();
        var url = "registration/checkDuplicateDataLandlord";

        $.ajax({
            url: url,
            type: "POST",
            data: {lnd_email: lnd_email},
            success: function(data){
                if(data==1){
                    $("#lnd_emailMsg").text("E-mail Already Exists!");
                    $("#lnd_emailMsg").css({"color": "red"});
                    $("#lnd_email").css({"border": "1px solid red"});
                    $("#lnd_emailMsg").fadeIn(1000);
                    $(".accExistLnd").removeClass('display_none');
                    $(".submit").attr("disabled", "disabled");
                }else{
                    $("#lnd_emailMsg").fadeOut(2000);
                    $("#lnd_email").css({"border":"1px solid #ccc"});
                    $(".accExistLnd").addClass('display_none');
                    $(".submit").removeAttr("disabled", "disabled");
                }
            }
        });
    });

    //Check National ID
    $("#lnd_nid").on('keyup change', function(){
        var lnd_nid = $(this).val();
        var url = "registration/checkDuplicateDataLandlord";
        console.log("Key pressed");
        $.ajax({
            url: url,
            type: "POST",
            data: {lnd_nid:lnd_nid},
            success: function(data){
                if(data==1){
                    $("#lnd_nidMsg").text("National ID Already Exists!");
                    $("#lnd_nidMsg").css({"color": "red"});
                    $("#lnd_nid").css({"border": "1px solid red"});
                    $("#lnd_nidMsg").fadeIn(1000);
                    $(".accExistLnd").removeClass('display_none');
                    $(".submit").attr("disabled", "disabled");
                }else{
                    $("#lnd_nidMsg").fadeOut(2000);
                    $("#lnd_nid").css({"border":"1px solid #ccc"});
                    $(".accExistLnd").addClass('display_none');
                    $(".submit").removeAttr("disabled", "disabled");
                }
            }
        });
    });

    //Check passport
    $("#lnd_passport").on('keyup change', function(){
        var lnd_passport = $(this).val();
        var url = "registration/checkDuplicateDataLandlord";
        console.log("Key pressed");

        $.ajax({
            url: url,
            type: "POST",
            data: {lnd_passport:lnd_passport},
            success: function(data){
                if(data==1){
                    console.log("Ok");
                    $("#lnd_passportMsg").text("Passport Already Exists!");
                    $("#lnd_passportMsg").css({"color": "red"});
                    $("#lnd_passport").css({"border": "1px solid red"});
                    $("#lnd_passportMsg").fadeIn(1000);
                    $(".accExistLnd").removeClass('display_none');
                    $(".submit").attr("disabled", "disabled");
                }else{
                    console.log("Not Ok");
                    $("#lnd_passportMsg").fadeOut(2000);
                    $("#lnd_passport").css({"border":"1px solid #ccc"});
                    $(".accExistLnd").addClass('display_none');
                    $(".submit").removeAttr("disabled", "disabled");
                }
            }
        });
    });
    //End Landlord Info Validation

}); //End jQuery Block