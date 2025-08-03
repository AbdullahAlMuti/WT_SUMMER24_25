<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Donor Information</title>
    <link rel="stylesheet" href="/css/lab3.css" />
</head>
<body>
 
    <h2>Donor Information</h2>
 
    <div class="donationform">
 
        <form id="donationForm">
 
            <div class="form">
                <label>Full Name</label>
 
                <input type="text" id="name" />
            </div>
 
 
 
            <div class="form">
                <label>Email Address</label>
                <input type="email" id="email" />
 
            </div>
 
 
 
            <div class="form">
                <label>Phone (11 Digits)</label>
                <input type="text" id="phone" />
            </div>
 
 
 
            <div class="form">
 
                <label>Password</label>
                <input type="password" id="password" />
 
            </div>
 
 
            <div class="form">
                <label>Donation Amount</label><br />
                <input type="radio" value="500"> 500
                <input type="radio" value="1000"> 1000
                <input type="radio" value="2000"> 2000
                <input type="radio" value="other"> Other:
                <input type="number" id="otherAmount" />
            </div>
 
            <div class="form checkbox">
                <input type="checkbox" id="terms"> I agree to the terms and conditions
            </div>
 
            <div class="form">
                <button id="button" type="submit">Submit</button>
            </div>
 
        </form>
    </div>
 
    <script src="/js/lab3.js"></script>
 
</body>
</html>
 
 