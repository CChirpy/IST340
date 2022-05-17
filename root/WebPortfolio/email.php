<?php
// https://codepen.io/badcat/pen/yLYVmqo
 
if(isset($_POST['email'])) {
   // EDIT THE 2 LINES BELOW AS REQUIRED
   $email_to = "huangc8@tcnj.edu";
   $email_subject = "IST 340 Feedback Form Submission";

   function died($error) {
      // your error code can go here
      echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"../css/base.css\">";
      echo "<h1>Whoops!</h1><h2>There appears to be something wrong with your completed form.</h2>";
      echo "<strong><p>The following items are not specified correctly.</p></strong><br>";
      echo $error."<br>";
      echo "<p>Return to the form and try again.</p><br>";
      echo "<p><a href='form.html'>Return to form</a></p>";
      die();
   }

   // required
   $first_name    = $_POST['first_name'];
   $last_name     = $_POST['last_name'];
   $email_from    = $_POST['email'];
   $feedback_type = $_POST['feedback_type'];
   
   // not required
   $comments           = $_POST['comments']; 
   $rating_design      = $_POST['rating_design']; 
   $rating_navigation  = $_POST['rating_navigation']; 
   $rating_usefulness  = $_POST['rating_usefulness']; 
   $discovery_method_1 = $_POST['discovery_method_1']; 
   $discovery_method_2 = $_POST['discovery_method_2']; 
   $discovery_method_3 = $_POST['discovery_method_3']; 
   $discovery_method_4 = $_POST['discovery_method_4']; 
   
   $error_message = "";
   $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
   
   if(!preg_match($email_exp,$email_from)) {
      $error_message .= '<li><p>The completed e-mail address appears to be incorrect.<p></li>';
   }

   $string_exp = "/^[A-Za-z .'-]+$/";
   
   if(!preg_match($string_exp,$first_name)) {
      $error_message .= '<li><p>First name appears to be wrong.</p></li>';
   }
   
   if(!preg_match($string_exp,$last_name)) {
      $error_message .= '<li><p>Last name appears to be wrong.</p></li>';
   }
 
   if(strlen($error_message) > 0) {
      died($error_message);
   }
   
   $email_message = "Form details are given below...\n\n";
 
   function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
   }
 
   $email_message .= "Feedback Type: ".clean_string($feedback_type)."\n\n";
   
   $email_message .= "First Name: ".clean_string($first_name)."\n";
   $email_message .= "Last Name: ".clean_string($last_name)."\n";
   $email_message .= "Email Address: ".clean_string($email_from)."\n\n";
   
   $email_message .= "Comments:\n".clean_string($comments)."\n\n";
   
   $email_message .= "RATINGS\n";
   $email_message .= "Layout and design: ".clean_string($rating_design)."\n";
   $email_message .= "Ease of navigation: ".clean_string($rating_navigation)."\n";
   $email_message .= "Usefulness of content: ".clean_string($rating_usefulness)."\n\n";
   
   $email_message .= "DISCOVERY METHOD\n";
   $email_message .= "IST 340 Student Links: ".clean_string($discovery_method_1)."\n";
   $email_message .= "Shoutouts: ".clean_string($discovery_method_2)."\n";
   $email_message .= "Peer: ".clean_string($discovery_method_3)."\n";
   $email_message .= "Other: ".clean_string($discovery_method_4)."\n";
   
   // create email headers
   $headers = 'From: '.$email_from."\r\n".
   'Reply-To: '.$email_from."\r\n" .
   'X-Mailer: PHP/' . phpversion();
   @mail($email_to, $email_subject, $email_message, $headers);
?>

<!-- include your own success html here -->
<?php echo file_get_contents('success.html'); ?>

<?php
}
?>
