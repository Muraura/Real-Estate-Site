<?php include'header.php';?>
<?php
//Message Vars
$msg='';
$msgClass = '';
//Check for submit
   if(filter_has_var(INPUT_POST, 'submit')){
   //Get Form Data
    $name=htmlspecialchars($_POST['name']);
    $email= htmlspecialchars($_POST['email']);
    $message=htmlspecialchars($_POST['message']);

    //check Required Fields
    if(!empty($email) && !empty($name) && !empty($message)){
      //passed
      //Check Email

      if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){

        //failed
          $msg = 'please use a valid email';
          $msgClass = 'alert-danger';

      }else{
       //passed
        $toEmail = 'support@serenidad.co.ke';
        $subject = 'Contact Request From' .$name;
        $body = '<h2>Contact Request</h2>
              // <h4>Name</h4<p>'.$name.'</p>
               //<h4>Email</h4<p>'.$email.'</p>
              // <h4>Message</h4<p>'.$message.'</p>
              // ';
         //Email Headers

        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers.="Content-Type:text/html;charset=UTF-8" . "\r\n";

        //Additional Headers
        $headers.="From: " .$name. "<".$email.">". "\r\n";

        //Additional Headers
        $headers .="From: ".$name. "<".$email.">"."\r\n";
        if(mail($toEmail,$subject,$body,$headers)){
          //Email Sent

          $msg = 'Your email has been sent';
          $msgClass= 'alert-success';
        }else
        {       $msg = 'Your email was not sent';
                $msgClass = 'alert-danger';
              }
      }
    
 }else{
      //failed
    
      $msg = 'please fill in all fields';
      $msgClass = 'alert-danger';
    }
  }
 ?>



<div class="container">
<div class="spacer">
<div class="row contact">
  <div class="col-lg-6 col-sm-6 ">
    <?php if($msg !=''): ?>
      <div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
    <?php endif; ?>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"
     >

                <input type="text" class="form-control" placeholder="Full Name" name="name" value="<?php echo isset($_POST['name']) ? $name : ''; ?>"
                >
                <input type="text" class="form-control" placeholder="Email Address"name='email'value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
                <textarea rows="6" class="form-control" placeholder="Message"name="message"><?php echo isset($_POST['message']) ? $message : ''; ?></textarea>
      <button type="submit" class="btn btn-success" name="submit">Send Message</button>
          


                
        </div>
  
</div>
</div>
</div>

<?php include'footer.php';?>