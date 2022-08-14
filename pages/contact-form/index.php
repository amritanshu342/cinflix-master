<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Form | CodingNepal</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
  <div class="wrapper">
    <header>Send us a Message</header>
    <form action="form-process.php" method="post">
      <div class="dbl-field">
        <div class="field">
          <input type="text" name="firstname" placeholder="Enter your firstname" require>
          <i class='fas fa-user'></i>
        </div>
        <div class="field">
          <input type="text" name="lastname" placeholder="Enter your lastname" require>
          <i class='fas fa-envelope'></i>
        </div>
      </div>
      <div class="dbl-field">
        <div class="field">
          <input type="text" name="phone" placeholder="Enter your phone" require>
          <i class='fas fa-phone-alt'></i>
        </div>
        <div class="field">
          <input type="text" name="email" placeholder="Enter your email" require>
          <i class='fas fa-globe'></i>
        </div>
      </div>
      <div class="message">
        <textarea name="message" placeholder="Write your message" require></textarea>
        <i class="material-icons">message</i>
      </div>
      <div class="button-area">
        <button type="submit">Send Message</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <button type="reset">Reset</button>
        <span></span>
      </div>
    </form>
  </div>
</body>
</html>
