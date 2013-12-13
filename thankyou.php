


  
      <section class="maincontent">
        <h1>Thank you!</h1>

        <?php 
          $to="hemarodil@yahoo.com";
          $subject="Message from contact form";
          $message=$_POST["firstname"]. " " .$_POST["lastname"]. "sent a comment \r\n";
          $message .= $_POST["comments"] . "\r\n" . "\r\n";
          $message .= $_POST["email"] . "\r\n" . "\r\n";
          $message .= $_POST["address"] . "\r\n";
          $message .= $_POST["firstname"]. " " .$_POST["lastname"]. "\r\n";
          $message .= $_POST["postalcode"] . "\r\n";
          $message .= $_POST["address"] . "\r\n";


          $message .= $_POST["phone"] . "\r\n" . "\r\n";
          $from = $_POST["email"];
          mail($to,$subject,$message);


        ?>
        <h2>Hi <?php echo $_POST["firstname"]; ?></h2>
        <h2> <?php echo $_POST["lastname"]; ?></h2>

        <h2>Your email address is <?php echo $_POST["email"]; ?></h2>
        <h2><?php echo $_POST["address"]; ?></h2>
        <h2> <?php echo $_POST["city"]; ?></h2>
        <h2> <?php echo $_POST["country"]; ?></h2>
        <h2><?php echo $_POST["postalcode"]; ?></h2>
        <h2> <?php echo $_POST["phone"]; ?></h2>
        <h2>comments <?php echo $_POST["comment"]; ?></h2>

      </section>

      
