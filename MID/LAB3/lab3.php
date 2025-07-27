<!DOCTYPE html>
<html lang="en">
<head>

    <title>Student Profile</title>
</head>
<body>
    <center>
    <h1>Student Profile</h1>
    <center>

    <script>

    console.log("Student Info")

    var name = "Abdullah Al Murti";
    var age = 21;
    var math = 90;
    var web = 91;
    var eng = 95;


    console.log("Name : " name);
    console.log("Age : " age);
    console.log("Math Mark : " math);
    console.log("Web Mark : "web);
    console.log("Eng Mark : " eng);

    console.log("Calculations")

    var total = math = web + eng;
    var avg = total / 3;

    console.log("Total Marks : " total);
    console.log("Average Marks : "avg);

    console.log("Condition ");
    console.log("------------");
     
    var adult = age >= 18;

    var passed = avg >= 33;

    var subject = ["math", "web", "eng"];
    var marks = [math, web, eng];
     for( var i = 0; i < 3; i++){
        console.log(subject[i] + marks[i]);
     }  

     console.log("SUMMARY FUNCTION");

    function Summary() {
      console.log("----- Student Summary -----");
      console.log("Name:", name);
      console.log("Age:", age);
      console.log("Total:", total);
      console.log("Average:", avg);
    }

    Summary();

    function pop(){
        alert(
            "Name : " + name +
            "\nAge : " + age +
            "\nTotal : " + total +
            "\nAvg : " + avg
        );
    }
    </script>
 <button onclick="pop()">Student</button>
</body>
</html>