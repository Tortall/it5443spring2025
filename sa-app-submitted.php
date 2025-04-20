<!DOCTYPE HTML>
<html>
<head>
    <title>Student Assistant Application Submission</title>
    <link rel="stylesheet" type="text/css" href="mystyle.css" />
</head>
<body>

    <?php include 'header.php'; ?>

    <div id="content">
        <h1>CARIT Student Assistant Application Submission Complete!</h1>
        <p>Thank you for your submission to serve as a Student Assistant with CARIT!
        <br />The details of your submission are below.
        </p>
    </div>
    <div id="submitted-data">
        <p><strong>First Name:</strong> <?php echo htmlspecialchars($_POST['firstName'] ?? ''); ?></p>
        <p><strong>Last Name:</strong> <?php echo htmlspecialchars($_POST['lastName'] ?? ''); ?></p>
        <p><strong>Email:</strong> <?php echo htmlspecialchars($_POST['email'] ?? ''); ?></p>
        <p><strong>Student Status:</strong> <?php echo htmlspecialchars($_POST['status'] ?? ''); ?></p>
        <p><strong>Major:</strong> <?php echo htmlspecialchars($_POST['major'] ?? ''); ?></p>
        <p><strong>Why You Should Be Selected:</strong><br>
            <?php echo nl2br(htmlspecialchars($_POST['reason'] ?? '')); ?>
        </p>
    </div>

    <p></p>

    <?php include 'footer.php'; ?>
</body>
</html>