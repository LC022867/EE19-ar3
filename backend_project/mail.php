<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kontakta via mail</title>
    <!-- Bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="mail.css">
</head>

<body>
    <div class="kontainer">
        <div class="mail-block">
            <h2 class="text-center">Skicka SMS</h2>
            <p class="text-center">Skicka mail till någon som du vill</p>
            <!--Start PHP kodning-->

            <?php
            /*
            // Aktivera felmeddelanden under utveckling
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);
            */


            $rdir = str_replace("\\", "/", __DIR__);                    //Root Dir

            require $rdir . '/PHPMailer/src/Exception.php';
            require $rdir . '/PHPMailer/src/PHPMailer.php';
            require $rdir . '/PHPMailer/src/SMTP.php';


            use PHPMailer\PHPMailer\PHPMailer;

            $mail = new PHPMailer;

            if (isset($_POST['skicka'])) {
                //$mail->SMTPDebug = 3;                                 // Enable verbose debug output

                //Hämta data 
                $message = $_POST['message'];
                $email = $_POST['email'];
                $subject = $_POST['handling'];
                $name = $_POST['name'];

                $mail->isSMTP();                                      // Set mailer to use SMTP
                $mail->Host = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
                $mail->SMTPAuth = true;                               // Enable SMTP authentication
                $mail->Username = 'tbaba1882@gmail.com';                              // SMTP username
                $mail->Password = 'K?R?JLX$9kqq5fdti3bDYn';                              // SMTP password
                $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
                $mail->Port = 587;                                    // TCP port to connect to

                $mail->setFrom('tbaba1882@gmail.com', 'Mailer');
                $mail->addAddress($email, $name);     // Add a recipient
                //$mail->addAddress('ellen@example.com');               // Name is optional
                //$mail->addReplyTo('info@example.com', 'Information');
                //$mail->addCC('cc@example.com');
                //$mail->addBCC('bcc@example.com');

                //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
                //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
                //$mail->isHTML(true);                                  // Set email format to HTML


                $mail->Subject = $subject;
                $mail->Body    = $message;
                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                if (!$mail->send()) {
                    echo 'Message could not be sent.';
                    echo 'Mailer Error: ' . $mail->ErrorInfo;
                } else {
                    echo 'Message has been sent';
                }
            }


            ?>
            <?php
            /*
            //Om användaren trycker på knappen
            if (isset($_POST['skicka'])) {

                //Hämta data 
                $message = $_POST['message'];
                $email = $_POST['email'];
                $subject = $_POST['handling'];
                $sender = "From: luciano.cucarano@gmail.com";


                //Om användaren lämnar tomnt en av inputs
                if (empty($message) || empty($email) || empty($subject)) {
                    //Display en alert message om en av inputs är tomma
                    echo "<div class=\"alert alert-warning\" role=\"alert\">
                     Något fattas i en av inputs!
                    </div>";
                } else {
                    if (mail($email, $subject, $message, $sender)) {
                        //Om den funkar så har den blivit skickat
                        echo "<div class=\"alert alert-success\" role=\"alert\">
                        Ditt mail har blivit skcikat till $email! :)
                        </div>";
                    } else {
                        //Då något har gått fel
                        echo "<div class=\"alert alert-danger\" role=\"alert\">
                        Något gick fel...
                        </div>";
                    }
                }
            }
            */
            ?>
            <!--Slut PHP kodning-->
            <form action="mail.php" method="POST" autocapitalize="off">
                <div class="form-group">
                    <input name="name" type="text" class="form-control" placeholder="Ditt namn..">
                </div>
                <div class="form-group">
                    <input name="email" type="email" class="form-control" placeholder="admin.lol@gmail.com">
                </div>
                <div class="form-group">
                    <input name="handling" type="text" class="form-control" placeholder="handling..">
                </div>
                <div class="form-group">
                    <textarea name="message" cols="30" rows="10" class="form-control" placeholder="Skriv här"></textarea>
                </div>
                <div class="form-group">
                    <button name="skicka" type="submit" class="form-control btn-primary" value="skicka">Skicka</button>
                </div>
                <div class="form-group">
                    <a href="index.php" class="btn btn-primary">Tabellen</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>