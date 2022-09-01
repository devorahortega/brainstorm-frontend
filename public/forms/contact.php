<!-- 
// **
//   * Requires the "PHP Email Form" library
//   * The "PHP Email Form" library is available only in the pro version of the template
//   * The library should be uploaded to: vendor/php-email-form/php-email-form.php
//   * For more info and help: https://bootstrapmade.com/php-email-form/
//   *

// Replace contact@example.com with your real receiving email address
// $receiving_email_address = 'brainstormjournaling@gmail.com';

// if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
//  include( $php_email_form );
//   } else {
//   die( 'Unable to load the "PHP Email Form" Library!');
//  }

//  $contact = new PHP_Email_Form;
//   $contact->ajax = true;
  
//  $contact->to = $receiving_email_address;
//  $contact->from_name = $_POST['name'];
//  $contact->from_email = $_POST['email'];
//  $contact->subject = $_POST['subject'];

//  Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
//   *
//   $contact->smtp = array(
//     'host' => 'example.com',
//     'username' => 'example',
//     'password' => 'pass',
//     'port' => '587'
//   );
//   *

//   $contact->add_message( $_POST['name'], 'From');
//   $contact->add_message( $_POST['email'], 'Email');
//    $contact->add_message( $_POST['message'], 'Message', 10);

//    echo $contact->send();
?> -->

<article id="contact">
          <h2 class="major">Contact</h2>
          <form action="https://formspree.io/f/meqvblbd" method="POST">
            <div class="fields">
              <div class="field half">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" />
              </div>
              <div class="field half">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" />
              </div>
              <div class="field">
                <label for="message">Message</label>
                <textarea name="message" id="message" rows="4"></textarea>
              </div>
            </div>
            <ul class="actions">
              <li><input type="submit" value="Send Message" class="primary" /></li>
              <li><input type="reset" value="Reset" /></li>
            </ul>
          </form>
          <ul class="icons">
            <li>
              <a href="https://github.com/devorahortega" class="icon brands fa-github">
                <span class="label">GitHub</span>
              </a>
              <a href="https://www.linkedin.com/in/devorahortega/" class="icon brands fa-linkedin">
                <span class="label">LinkedIn</span>
              </a>
            </li>
          </ul>
        </article>