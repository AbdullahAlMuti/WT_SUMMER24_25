<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Donor</title>
    <link rel="stylesheet" href="/WT_SUMMER24_25/MID/LAB3/css/lab3.css">
</head>
<body>
    <div class="toal">

    <h2>Donor Information</h2>
    <form>
        <label for="firstname"> First Name</label>
        <input type="text" id="firstname" name ="firstname">


        <label for="lastname">last Name</label>
        <input type="text" id="lastname" name ="lastname">


        <label for="address">Address</label>
        <input type="text" id="address" name ="address">

        <label for="city">City </label>
        <input type="text" id="city" name = "city">

        <label for="state">State</label>
        <select name="state" id="state">
        <option value="__Select State__"></option>
        <option value="Dhaka"></option>
        <option value="Rajshahi"></option>
        </select>

        <label for="phone">Phone</label>
        <input type="number" id="phone" name="phone">

        <label for="email">Email</label>
        <input type="email" id="email" name="email">

        <label for="password">Password</label>
        <input type="password" id="password" name = "password">


        <label for="password">Confirm Password</label>
        <input type="confirmpassword" id="confirmpassword" name = "confirmpassword">

        <label for="donationamount">Donation Amount</label>
        <div class="amounts">

        <label><input type="radio" value="none"> None</label>
        <label><input type="radio" value="500"> 500</label>
        <label><input type="radio" value="200"> 200</label>

        <label><input type="radio" value="otheramount"> other</label>

        </div>

        <label for="otheramount">otheramount</label>
        <input type="otheramount" id="otheramount" name = "otheramount">


        <label for="checkbox">

        <input type="checkbox" id ="checkbox" name ="checkbox"> I am interested in giving on a Reglar basis.
        </label>

        <h2>Addiional Information</h2>

        <label for="checkbox">
        <input type="checkbox" id ="checkbox1" name ="checkbox1"> I would like my gift to remain anonyomus
        </label>

        <label for="checkbox2">
        <input type="checkbox" id ="checkbox2" name ="checkbox2"> My Employeee offers a matching gift program

        <label for="checkbox3">
        <input type="checkbox" id ="checkbox3" name ="checkbox3"> Please dont send thank you letter.
        </label>

        <label for="comments">Comments</label>
        <input type="textarea" id="comments" name="comments">

        <button>Submit</button>
    </form>
    </div>
</body>
</html>