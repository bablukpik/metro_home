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

    //Image preview for landlord
    function readImgURLlnd(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#lnd_photo_preview').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#lnd_photo").change(function(){
        readImgURLlnd(this);
        console.log('File selected');
    });

    //login dialog when login failed
    if ( document.location.href.indexOf('login') > -1 ) {
        console.log('Ok');
        $("#loginBtn").trigger('click');
    }else{
        console.log('Not Ok');
    }

    /*Ads Script*/
      $('#ads_signupORlogin_form').find('input, textarea').on('keyup blur focus', function (e) {
  
      var $this = $(this),
          label = $this.prev('label');

        if (e.type === 'keyup') {
          if ($this.val() === '') {
              label.removeClass('active highlight');
            } else {
              label.addClass('active highlight');
            }
        } else if (e.type === 'blur') {
          if( $this.val() === '' ) {
            label.removeClass('active highlight'); 
          } else {
            label.removeClass('highlight');   
          }   
        } else if (e.type === 'focus') {
          
          if( $this.val() === '' ) {
            label.removeClass('highlight'); 
          } 
          else if( $this.val() !== '' ) {
            label.addClass('highlight');
          }
        }

    });

    $('.tab a').on('click', function (e) {
      
      e.preventDefault();
      
      $(this).parent().addClass('active');
      $(this).parent().siblings().removeClass('active');
      
      target = $(this).attr('href');

      $('.tab-content > div').not(target).hide();
      
      $(target).fadeIn(600);
      
    });
  /*End ads Script*/

  //Add Member/dynamically form field add
  var count = 1;
  $('#addMember').click(function(){
      //alert('hi');
      count = count + 1;
      var html_code = "<tr id='row"+count+"'>";
      html_code +="<td>"+count+"</td>";
      html_code +='<td><input type="text" name="family_member_name[]"></td>';
      html_code +='<td><input type="text" name="family_member_age[]"></td>';
      html_code +='<td><input type="text" name="family_member_job[]"></td>';
      html_code +='<td><input type="text" name="family_member_phone[]"></td>';
      html_code +='<td><button type="button" data-row="row'+count+'" class="btn btn-danger btn-xs remove"><i class="fa fa-trash-o" aria-hidden="true"></i></button></td>';
      html_code +='</tr>';
      $('#member-add-table').append(html_code);
  });

  $(document).on('click', '.remove', function(){
      var delete_row = $(this).data("row");
      $('#' + delete_row).remove();
  });

  //


}); //End Jquery Block