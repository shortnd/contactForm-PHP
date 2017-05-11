$(document).ready(

  $("form").submit( function(e){
    e.preventDefault();

    var err = "";
    /*Checks if the subject field is blank and throws error
    if it is empty */
    if($("#subject").val() === ""){
      err += "The Subject field is Required!<br/>";
    }
    /*Check if the content field is blank and throws error
    if it is empty*/
    if($("#content").val() === ""){
      err += "The Content field is Required!<br/>";
    }
    /*Checks if the email field is blank and throws error
    if it is empty*/
    if($("#userEmail").val() === ""){

      err += "Enter an Email address";
      
    }

    if(err !== ""){
      $(".error").html(
        '<div class="alert alert-danger"><p><strong>Please fix these errors to submit the contact form.</strong><br/>' + err +'</p></div>'
      );
    } else {
      //Breaks the validation and allows the from to submit completely
      $('form').unbind('submit').submit();

    }

  })

);
