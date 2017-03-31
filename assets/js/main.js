//Default of login form
$("#loginForm").addClass("display_none");

//Login Button Restricted area of dialog
$(document).on("click", function(event){
    console.log('Document click');
    if ($(event.target).parents("#loginForm").length > 0 || $(event.target).closest("#loginBtn").length > 0) {
        console.log('Form click');
        return false;
    }else{
        console.log('Outside click');
        $("#loginForm").addClass("display_none");
    }

});

//Login Button
$("#loginBtn").on('click', function(){
    console.log('Clicked button');
    $("#loginForm").toggleClass("display_none");
});