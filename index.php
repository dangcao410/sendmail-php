<?php include 'sendMail.php'; ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Send mail</title>
</head>
<body>

<div class="container">
    <div class="contact">
        <h2>Contact</h2>
        <div class="d-flex justify-content-around">
            <div class="contact-form">
                <?php echo $alert; ?>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="name">Your Name</label>
                        <input class="form-control" required type="text" name="name" id="name" pattern="^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$" title="Number and special characters not allowed.">
                    </div>
                    <div class="form-group">
                        <label for="email">Your Email</label>
                        <input class="form-control" required type="email" name="email" id="email">
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input class="form-control" required type="text" name="subject" id="subject">
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" required name="message" id="message" rows="4" wrap="hard"></textarea>
                    </div>
                    <input type="submit" class="btn btn-outline-primary btn-block float-right" name="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>
</div>

<script src="javascript/jquery-3.5.1.slim.min.js"></script>
<script src="javascript/bootstrap.min.js"></script>
</body>
</html>