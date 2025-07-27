<!DOCTYPE html>
<html>
<head>
  <title>Student Profile Checker</title>
</head>
<body>

  <h1>Student Profile Checker</h1>
  <p>Open your browser console to see the output. Click the button for result popup.</p>

  <script>

    // STEP 1: STORE STUDENT INFORMATION
    console.log("STEP 1: STUDENT INFORMATION");

    var name = "Hamim";
    var age = 19;
    var mathMark = 85;
    var englishMark = 78;
    var scienceMark = 92;

    console.log("Name:", name);
    console.log("Age:", age);
    console.log("Math Mark:", mathMark);
    console.log("English Mark:", englishMark);
    console.log("Science Mark:", scienceMark);

    // STEP 2: CALCULATE TOTAL AND AVERAGE
    console.log("\nSTEP 2: CALCULATIONS");

    var total = mathMark + englishMark + scienceMark;
    var average = total / 3;

    console.log("Total Marks:", total);
    console.log("Average Marks:", average);

    // STEP 3: CHECK ADULT AND PASS STATUS
    console.log("\nSTEP 3: CONDITIONS");

    var isAdult = age >= 18;
    var isPassed = average >= 40;

    console.log("Is Adult?", isAdult);
    console.log("Has Passed?", isPassed);

    // STEP 4: SHOW MARKS USING LOOP
    console.log("\nSTEP 4: SUBJECT MARKS (LOOP)");

    var subjects = ["Math", "English", "Science"];
    var marks = [mathMark, englishMark, scienceMark];

    for (var i = 0; i < 3; i++) {
      console.log(subjects[i] + ":", marks[i]);
    }

    // STEP 5: FUNCTION TO SHOW SUMMARY
    console.log("\nSTEP 5: SUMMARY FUNCTION");

    function showSummary() {
      console.log("----- Student Summary -----");
      console.log("Name:", name);
      console.log("Age:", age);
      console.log("Total:", total);
      console.log("Average:", average);
      console.log("Result:", isPassed ? "Passed" : "Failed");
    }

    showSummary();

    // STEP 6: POPUP BUTTON FUNCTION
    function showPopup() {
      alert("Student: " + name +
            "\nAge: " + age +
            "\nTotal Marks: " + total +
            "\nAverage: " + average +
            "\nResult: " + (isPassed ? "Passed" : "Failed"));
    }

  </script>

  <br><br>
  <button onclick="showPopup()">Show Student Result</button>

</body>
</html>
