  <?php
  if (isset($_POST['gett'])) {
    $n = $_POST['fname'];
    $onen = $_POST['meyl'];
    $p = $_POST['tele'];
    $q = $_POST['mess'];

  require("PHPMailer/src/PHPMailer.php");
  require("PHPMailer/src/SMTP.php");

    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->IsSMTP(); // enable SMTP

    $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true; // authentication enabled
    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 465; // or 587
    $mail->IsHTML(true);
    $mail->Username = "dfcamclpitmailbot@gmail.com";
    $mail->Password = "Abc_123456";
    $mail->SetFrom($onen);
    $mail->Subject = "Website Feedback/Contact";
    $mail->Body = "Name: ".$n."<br> Email: ".$onen."<br> Contact No.:".$p."<br><br>".$q;
    $mail->AddAddress("rodneyarceno01@gmail.com");

    if (!$mail->send()) {
    echo "<script>alert('Sended failed.');window.location='index.php';</script>";
    }else{
      echo "<script>alert('Sended Successfully');window.location='index.php';</script>";
    }
  }
  ?>