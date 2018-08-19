<?php

  //response generation function
  $response = "";

  //function to generate response
  function my_contact_form_generate_response($type, $message){
    global $response;

    if($type == "success") $response = "<div class='success'>{$message}</div>";
    else $response = "<div class='error'>{$message}</div>";
  }

// VARIABLES
  //response messages
  $not_human       = "Human verification incorrect.";
  $missing_content = "Please supply all information.";
  $email_invalid   = "Email Address Invalid.";
  $message_unsent  = "Message was not sent. Try Again.";
  $message_sent    = "Thanks! Your message has been sent.";

  //user posted variables
  $name = $_POST['message_name'];
  $email = $_POST['message_email'];
  $message = $_POST['message_text'];
  $human = $_POST['message_human'];

  //php mailer variables
  $to = get_option('admin_email');
  $subject = "Someone sent a message from ".get_bloginfo('name');
  $headers = 'From: '. $email . "\r\n" .
    'Reply-To: ' . $email . "\r\n";


// Conditional for humanity test
    if(!$human == 0){
      if($human != 2) my_contact_form_generate_response("error", $not_human); //not human!
      else {

        //validate email
        if(!filter_var($email, FILTER_VALIDATE_EMAIL))
          my_contact_form_generate_response("error", $email_invalid);
        else //email is valid
{
  //validate presence of name and message
  if(empty($name) || empty($message)){
    my_contact_form_generate_response("error", $missing_content);
  }
  else //ready to go!
  {
    $sent = wp_mail($to, $subject, strip_tags($message), $headers);
    if($sent) my_contact_form_generate_response("success", $message_sent); //message sent!
    else my_contact_form_generate_response("error", $message_unsent); //message wasn't sent
  }
  //send email
}
        //validate presence of name and message
        //send email
      }
    }
    else if ($_POST['submitted']) my_contact_form_generate_response("error", $missing_content);



?>


<?php get_header(); ?>

<?php get_template_part('template-parts/sidebar'); ?>


<div class="bg-image">

  <h1 class="faux-center">CONTACT</h1>

  <?php echo $response; ?>
  <form class="contact-form" action="<?php the_permalink(); ?>" method="post">

    <input
      class="field field__standard field__standard--name"
      type="text"
      autocomplete="name"
      placeholder="Your Name"
      name="message_name"
      value="<?php echo esc_attr($_POST['message_name']); ?>"
    />
    <br />

    <input
      class="field field__standard field__standard--email"
      type="email"
      autocomplete="email"
      placeholder="Email Address"
      name="message_email"
      value="<?php echo esc_attr($_POST['message_email']); ?>"
    />
    <br />

    <textarea
      class="field field__textarea" name="message_text" placeholder="Enter your message here..."><?php echo esc_textarea($_POST['message_text']); ?></textarea>
    <br />

    <div class="challenge__row">
      <p class="challenge__text">
        <label for="message_human">Human Verification: <span>*</span> <br><input type="text" class="contact__challenge" name="message_human"> + 3 = 5</label>
      </p>

      <button
        type="submit"
        name="button"
        class="btn btn-raise right">
        Submit
      </button>
    </div>

    <input type="hidden" name="submitted" value="1">

  </form>

</div>


<?php get_footer(); ?>
