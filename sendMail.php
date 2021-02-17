<?php
    use PHPMailer\PHPMailer\PHPMailer;

    require_once 'phpmailer/Exception.php';
    require_once 'phpmailer/PHPMailer.php';
    require_once 'phpmailer/SMTP.php';

    $mail = new PHPMailer(true);

    $alert = '';

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $subject = $_POST['subject'];

        try{
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = $_ENV['MAIL_SEND_USERNAME'];
            $mail->Password = $_ENV['MAIL_SEND_PASSWORD'];
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = '587';

            $mail->setFrom($_ENV['MAIL_SEND_USERNAME']);
            $mail->addAddress($_ENV['MAIL_RECEIVE_USERNAME']);

            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body = "<strong>Name: </strong> $name <br><strong>Email: </strong> $email <br><br><strong>Message: </strong><br>$message";

            $mail->send();
            $alert = '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        <span>Message sent. Thank you for contacting me.</span>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>';
        } catch (Exception $e) {
            $alert = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <span>Something went wrong. Please try again.</span>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>';         
        }
    }
?>
