jQuery(function ($) {

    //Login Button Restricted area of dialog
    $(document).on("click", function(event){
        if ($(event.target).parents("#loginForm").length > 0 || $(event.target).closest("#loginBtn").length > 0) {
            return;
        }else{
            $("#loginForm").addClass("display_none");
        }

    });

    //Login Button
    $("#loginBtn").on('click', function(){
        $("#loginForm").toggleClass("display_none");
    });

    //Registration Button
    $("#onlineRegBtn").on('click', function(){
        $("#loginForm").addClass("display_none");
    });

    //If form validation error for landlord
    if ($(".error").size()) {
        $('#registrationOnline').removeClass('display_none');
        var button = $('<button type="button" id="onlineRegBtn" class="btn btn-default btn-create" data-toggle="modal" data-target="#registrationOnline">Create account</button>').appendTo('body');
        button.trigger('click');
         
    }

}); //End Jquery Block