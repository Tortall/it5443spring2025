<!DOCTYPE html>
<html>
<head>
	<title>Student Assistants</title>
	<link rel="stylesheet" type="text/css" href="mystyle.css" />
    <script>
        function submitRadio() {
            var radiobuttons = document.forms[0].status;  

            if (radiobuttons[0].checked)
                status=radiobuttons[0].value;
            else if (radiobuttons[1].checked)
                status=radiobuttons[1].value;
            
            dropDown()
        }

        function dropDown(){
            if (status == "grad"){
                document.getElementById("hideDrop").style.display = "block"; 
                document.getElementById("submitButton").style.display = "block";
                document.getElementById("finalResult").innerHTML = "";
            }
            else if (status == "undergrad"){
                document.getElementById("hideDrop").style.display = "block"; 
                document.getElementById("submitButton").style.display = "block";
                document.getElementById("finalResult").innerHTML = "";
            }
            
            var x = document.getElementsByClassName("gradform");
            var y = document.getElementsByClassName("undergradform");

            if (status == "undergrad") {
                y[0].style.display = "block";
                y[1].style.display = "block";
                y[2].style.display = "block";
                y[3].style.display = "block";
                x[0].style.display = "none";
                x[1].style.display = "none";
                x[2].style.display = "none";
                x[3].style.display = "none";
            }
            else if (status == "grad"){
                y[0].style.display = "none";
                y[1].style.display = "none";
                y[2].style.display = "none";
                y[3].style.display = "none";
                x[0].style.display = "block";
                x[1].style.display = "block";
                x[2].style.display = "block";
                x[3].style.display = "block";
            }
        }

        function submitGrades() {
            var grade1 = document.getElementById("grade1").value;
            var grade2 = document.getElementById("grade2").value;
            var grade3 = document.getElementById("grade3").value;
            var grade4 = document.getElementById("grade4").value;
console.log(typeof grade1)
            result = 0

            //let dictionary = {};
                //Object.assign(dictionary, { "4": 4, "3": 3, "2": 2, "1": 1, "0": 0});
            

            if (status == "undergrad") {
                var result=(parseFloat(grade1)+parseFloat(grade2)+parseFloat(grade3)+parseFloat(grade4))/4;
            }
            else if (status == "grad") {
                var result=(parseFloat(grade1)+parseFloat(grade2)+parseFloat(grade3)+parseFloat(grade4))/4;
            }
            console.log(result)


            var result = result.toFixed(1);

            if (status == "grad" && result > 3.7) {
                document.getElementById("finalResult").innerHTML = "Your GPA is " + result +
                ". Congratulations! You are eligible to apply for the student assistant position. Application form coming soon.";
            }
            else if (status == "grad" && result <= 3.7) {
                document.getElementById("finalResult").innerHTML = "Your GPA is " + result + 
                ". Unfortunately, your GPA does not meet the minimum requirements to apply for the student assistant position.";
            }
            else if (status =="undergrad" && result > 3.2) {
                document.getElementById("finalResult").innerHTML = "Your GPA is " + result + 
                ". Congratulations! You are eligible to apply for the student assistant position. Application coming soon.";
            }
            else if (status =="undergrad" && result <= 3.2) {
                document.getElementById("finalResult").innerHTML = "Your GPA is " + result +
                ". Unfortunately, your GPA does not meet the minimum requirements to apply for the student assistant position.";
            }
        }
    </script>
</head>
<body>

    <?php include 'header.php'; ?>

	<div id="content">
		<h1>Student Assistant Positions</h1>
        <p>This summer CARIT wil be hiring four student assistants. To be eligable the student must have completed the courses listed below.
            <a href="#eligability">Check your eligability</a>.
        </p>
		<table>
			<tr>
				<th>Student Status</th>
				<th>Courses Required Completion</th>
				<th>Grade Average Requirement<br />(for the four courses required)</th>
			</tr>
			<tr>
				<td data-cell="student status">Undergraduate</td>
				<td data-cell="courses required">
                    <ol>
                        <li>CSE 3203 Overview of Mobile System</li>
                        <li>IT 4403 Advanced Web and Mobile Applications</li>
                        <li>IT 4733 Big Data System Administration</li>
                        <li>CSE 3125 Database Systems</li>
                    </ol>
                </td>
				<td data-cell="grade average">>3.2</td>
			</tr>
			<tr>
				<td data-cell="student status">Graduate</td>
				<td data-cell="courses required">
                    <ol>
                        <li>IT 7113 Data Visualization</li>
                        <li>IT 6203 IT Design Studio</li>
                        <li>IT 7103 Pratical Data Analytics</li>
                        <li>IT 7143 Cloud Analytics Technology</li>
                    </ol>
                </td>
				<td data-cell="grade average">>3.7</td>
			</tr>
		</table>
	</div>
    <p id="eligability"></p>
    <div id="radioForm">
        <form name="profile">
            <h2>Select your current status then click 'Submit'.</h2>
            <br>
            <div id="status">
                <input type="radio" name="status" value="undergrad">Undergraduate 
                <input type="radio" name="status" value="grad">Graduate
            </div>   
                <br>
                <input type="button" class="button" value="Submit" onclick="submitRadio()">
                <br>
        </form>
    </div>
    <br />
    <div id="hideDrop">
        <h2>Select your grades for the classes below then click 'Evaluate'.</h2>
        <br />
        <span class="undergradform">CSE 3203 Overview of Mobile System:</span>
        <span class="gradform">IT 7113 Data Visualization:</span>
            <select name="grade1" id="grade1">
                <option value="" selected="selected">-</option>
                <option value="4">A</option>
                <option value="3">B</option>
                <option value="2">C</option>
                <option value="1">D</option>
                <option value="0">F</option>
            </select>
        <br>
        <span class="undergradform">IT 4403 Advanced Web and Mobile Applications:</span>
        <span class="gradform">IT 6203 IT Design Studio:</span>
            <select name="grade2" id="grade2">
                <option value="" selected="selected">-</option>
                <option value="4">A</option>
                <option value="3">B</option>
                <option value="2">C</option>
                <option value="1">D</option>
                <option value="0">F</option>
            </select>
    
        <span class="undergradform">IT 4733 Big Data System Administration: </span>
        <span class="gradform">IT 7103 Pratical Data Analytics: </span>
        <select name="grade3" id="grade3">
            <option value="" selected="selected">-</option>
            <option value="4">A</option>
            <option value="3">B</option>
            <option value="2">C</option>
            <option value="1">D</option>
            <option value="0">F</option>
        </select>
    
        <span class="undergradform">CSE 3125 Database Systems: </span>
        <span class="gradform">IT 7143 Cloud Analytics Technology: </span>
        <select name="grade4" id="grade4">
            <option value="" selected="selected">-</option>
            <option value="4">A</option>
            <option value="3">B</option>
            <option value="2">C</option>
            <option value="1">D</option>
            <option value="0">F</option>
        </select>
    </div>
    <br />
    <div id="submitButton">
        <input type="button" class="button" value="Evaluate" onclick="submitGrades()">
    </div>
    <br />
    <div>
        <p id="finalResult"></p>
    </div>
	<p></p>
    <footer>This website is for Kennesaw State University course IT 5443 section W01 in spring 2025.<br />
    <a href="http://it5443.azurewebsites.net">Class Website</a>
    </footer>
</body>
</html>