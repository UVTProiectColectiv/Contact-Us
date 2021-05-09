<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css" type="text/css">
  </head>
  <body>
    <div class="contact-title">
      <h1>Hello,</h1>
      <h2>We are always ready to serve you!</h2>
    </div>

    <div class="contact-form">
      <form id="contact-form" action="contactus.php" method="post">
        <input type="text" name="name" class="form-control" placeholder="Your Name" required>
        <br>
        <input type="email" name="email" class="form-control" placeholder="Your Email" required>
        <br>
        <textarea name="massage" rows="4" class="form-control" placeholder="Message" required></textarea>
        <br>
        <input type="submit"  class="form-control submit">
        <span class="success"><?php if (!empty($msg)) {echo "<h2>$msg</h2>";} ?></span>
      </form>

    </div>
  </body>
</html>
