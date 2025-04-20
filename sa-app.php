<!DOCTYPE HTML>
<html>
<head>
    <title>Student Assistant Application</title>
    <link rel="stylesheet" type="text/css" href="mystyle.css" />
    <script>
    const checkbox = document.getElementById('agreement');
    const submitBtn = document.getElementById('submitBtn');

    checkbox.addEventListener('change', function () {
        submitBtn.disabled = !this.checked;
    });
    </script>
</head>
<body>

    <?php include 'header.php'; ?>

    <div id="content">
        <h1>CARIT Student Assistant Application</h1>

        <form action="sa-app-submitted.php" method="post" id="caritAppForm">
    
            <label for="firstName">First Name:</label>
            <input type="text" name="firstName" id="firstName" required><br />

            <label for="lastName">Last Name:</label>
            <input type="text" name="lastName" id="lastName" required><br />

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required><br /><br />

            <label>Student Status:</label>
            <div id="radioForm">
                <input type="radio" name="status" id="undergrad" value="Undergraduate" required>
                <label for="undergrad" style="display:inline;">Undergraduate</label>
                <br />
                <input type="radio" name="status" id="grad" value="Graduate">
                <label for="grad" style="display:inline;">Graduate</label>
            </div><br />

            <label for="major">Major:</label>
            <select name="major" id="major" required>
                <option value="">-- Select Major --</option>
                <option value="Computer Science">Computer Science</option>
                <option value="Information Technology">Information Technology</option>
                <option value="Software Engineering">Software Engineering</option>
                <option value="Game Design and Development">Game Design and Development</option>
                <option value="Data Science">Data Science</option>
                <option value="Artificial Intelligence">Artificial Intelligence</option>
            </select><br />

            <label for="reason">Why should you be selected as a Student Assistant for CARIT?</label><br />
            <textarea name="reason" id="reason" required></textarea><br /><br />

            <div id="checkboxForm">
                <input type="checkbox" id="agreement" name="agreement">
                <label for="agreement" style="display:inline;">I understand that filling out this form does not guarantee me a position with CARIT</label>
            </div><br />

            <div id="submitButton">
                <button type="button" class="button" value="Submit" onclick="getElementById('submitBtn')"></button>
            </div>
        </form>
    </div>

    <p></p>

    <?php include 'footer.php'; ?>
</body>
</html>