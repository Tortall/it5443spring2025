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
    <table>
        <tr>
            <td><strong>First Name</strong></td>
            <td><?php echo htmlspecialchars($_POST['firstName'] ?? ''); ?></td>
        </tr>
        <tr>
            <td><strong>Last Name</strong></td>
            <td><?php echo htmlspecialchars($_POST['lastName'] ?? ''); ?></td>
        </tr>
        <tr>
            <td><strong>Email</strong></td>
            <td><?php echo htmlspecialchars($_POST['email'] ?? ''); ?></td>
        </tr>
        <tr>
            <td><strong>Student Status</strong></td>
            <td><?php echo htmlspecialchars($_POST['status'] ?? ''); ?></td>
        </tr>
        <tr>
            <td><strong>Major</strong></td>
            <td><?php echo htmlspecialchars($_POST['major'] ?? ''); ?></td>
        </tr>
        <tr>
            <td><strong>Why You Should Be Selected</strong></td>
            <td><?php echo nl2br(htmlspecialchars($_POST['reason'] ?? '')); ?></td>
        </tr>
    </table>
    </div>

    <p></p>

    <?php include 'footer.php'; ?>
</body>
</html>