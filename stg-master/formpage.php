<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-121238823-2"></script>
  <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-121238823-2');
  </script>
  <meta charset="utf-8" dir="ltr">
  <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Contact</title>
  <!-- Google Code for contact form Conversion Page -->
  <script type="text/javascript">
    /* <![CDATA[ */
    var google_conversion_id = 805616962;
    var google_conversion_label = "Wg5uCKbs8oQBEML6koAD";
    var google_remarketing_only = false;
    /* ]]> */
  </script>
  <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
  </script>
  <noscript>
    <div style="display:inline;">
      <img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/805616962/?label=Wg5uCKbs8oQBEML6koAD&amp;guid=ON&amp;script=0"/>
    </div>
  </noscript>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <link rel="stylesheet" href="../css/form.css" >
  <script src="../scripts/form.js"></script>
      <?php include('head-links.php'); ?>
</head>
<body >
    <?php include('header.php'); ?>
  <div class="form-container">
    <form role="form" method="post" id="reused_form" class="contact-form">
      <div class="contact-form-headline">
        <h2>Let's Chat!</h2>
        <hr>
        <p>Once you send your message I will get back to you as soon as possible</p>
      </div>

      <div class="form-element">
        <input type="text" class="form-control" id="firstname" name="firstname" maxlength="50" placeholder="First Name">
      </div>
      <div class="form-element">
        <input type="text" class="form-control" id="lastname" name="lastname" maxlength="50" placeholder="Last Name">
      </div>

      <div class="form-element">
        <input type="text" class="form-control" id="email" name="email" maxlength="50" placeholder="Email">
      </div>
      <div class="form-element">
        <input type="tel" class="form-control" id="phone" name="phone" required maxlength="50" placeholder="Phone">
      </div>

      <div class="form-textarea">
        <textarea class="form-control" type="textarea" id="message" name="message" placeholder="Your Message Here" maxlength="6000" rows="7"></textarea>
      </div>

      <div class="form-element form-btn">
        <button type="submit" class="btn btn-lg btn-success btn-block" id="btnContactUs">SEND </button>
      </div>

    </form>
    <div id="success_message" style="width:100%; height:100%; display:none; "> <h3>Sent your message successfully!</h3> </div>
    <div id="error_message" style="width:100%; height:100%; display:none; "> <h3>Error</h3> Sorry there was an error sending your form. </div>
  </div>
    <?php include('footer.php'); ?>
</body>
</html>
