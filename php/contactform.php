<form data-toggle="validator" role="form" method="POST" action="https://www.enformed.io/tvfa8tt1">
  <legend>Contact Us</legend>
  <div class="form-group">
    <input type="text" class="form-control" id="inputName" placeholder="Name" name="name" data-error="Please enter your name" required>
    <div class="help-block with-errors"></div>
  </div>
  <div class="form-group">
    <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email" data-error="Invalid email address" required>
    <div class="help-block with-errors"></div>
  </div>
  <div class="form-group">
    <textarea class="form-control" rows="5" id="inputMessage" placeholder="Message" name="message" data-error="Field cannot be empty" required></textarea>
    <div class="help-block with-errors"></div>
  </div>
  <div class="form-group">
    <input type="hidden" name="*honeypot" />
    <input id="submit" name="submit" type="submit" value="Submit" class="btn btn-primary">
    <input type="hidden" name="*redirect" value="http://www.rocketfracservices.com/contact?submit=success" />
    <input type="hidden" name="*default_email" value="webform@rocketfrac.com" />
    <input type="hidden" name="*subject" value="New message from web form" />
  </div>
</form>
