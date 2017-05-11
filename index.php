<?php

print_r($_POST);

  if($_POST){
    $err = "";
    // Checks to make sure there is a $_POST variable of email
    if(!$_POST['userEmail']){
      $err .= 'An email address is required!<br/>';
    }
    // Checks to make sure there is a $_POST variable of subject
    if(!$_POST['subject']){
      $err .= 'Please enter a Subject line.<br/>';
    }
    //Checks to make sure there is a $_POST variable of content
    if(!$_POST['content']){
      $err .= 'Please enter some content.<br/>';
    }

    //Validate email to make sure it is a valid email address
    if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
      $err .= $_POST['email'].' is not a valid email address';
    }

    //Creates div to display if there is an error on the serverside
    if($err !== ""){

      $err = '<div class="alert alert-danger"><p><strong>Please fix these errors to submit the contact form.</strong><br/>'.$err.'</p></div>';

    }

  }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">

        <h1>Contact me!</h1>

        <div class="error">
          <!-- ERRORS WHEN SUBMITTING IF SOMETHING IS EMPTY -->
          <?php echo $err; ?>
        </div>

        <form method="POST">
          <div class="form-group">
            <label for="userEmail">Email Address</label>
            <input class="form-control" type="email" name="userEmail" id="userEmail" placeholder="Enter your Email">
          </div>
          <div class="form-group">
            <label for="subject">Subject</label>
            <input class="form-control" type="text" name="subject" placeholder="Enter a Subject" id="subject">
          </div>
          <div class="form-group">
            <label for="content">Content:</label>
            <textarea style="resize: none;" class="form-control" name="content" rows="8" cols="80" placeholder="Enter your content" id="content"></textarea>
          </div>
          <button class="float-right btn btn-primary" id="submit" type="submit">Submit</button>
        </form>
    </div>


    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
  </body>
</html>
