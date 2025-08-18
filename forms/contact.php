<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  <form action="https://formspree.io/f/mnnzyvqo" method="POST">
  <div class="form-group">
    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
  </div>
  <div class="form-group">
    <input type="email" name="email" class="form-control" id="email" placeholder="Your Email" required>
  </div>
  <div class="form-group">
    <input type="text" name="subject" class="form-control" id="subject" placeholder="Subject" required>
  </div>
  <div class="form-group">
    <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
  </div>
  
  <!-- Optional hidden fields -->
  <input type="hidden" name="_subject" value="New Contact Message from The Story Loom International">
  <input type="hidden" name="_next" value="https://vichu749.github.io/thestoryloominternational/thankyou.html">
  <input type="text" name="_gotcha" style="display:none">

  <div class="text-center">
    <button type="submit">Send Message</button>
  </div>
</form>
