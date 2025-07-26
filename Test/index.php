<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bank Registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Bank Management System</h1>
    <h3>Your Trusted Partner</h3>
    <h4>Customer Registration Form</h4>
    <h3>Complete the Registration</h3>

    <div class="form-box">
        <form>
            <table>
                <tr>
                    <td>Full Name:</td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Date of Birth:</td>
                    <td><input type="date"></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password"></td>
                </tr>
                <tr>
                    <td>Gender:</td>
                    <td>
                        <input type="radio" name="gender"> Male
                        <input type="radio" name="gender"> Female
                        <input type="radio" name="gender"> Other
                    </td>
                </tr>
                <tr>
                    <td>Account Type:</td>
                    <td>
                        <select>
                            <option>Savings</option>
                            <option>Current</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Initial Deposit:</td>
                    <td><input type="number"></td>
                </tr>
                <tr>
                    <td>Mobile No:</td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>National ID:</td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Upload ID Proof:</td>
                    <td><input type="file"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="checkbox"> I agree to the terms and conditions
                    </td>
                </tr>
                <tr>
                    <td><button type="submit">Register</button></td>
                    <td><button type="reset">Clear</button></td>
                </tr>
            </table>
        </form>
    </div>

</body>
</html>
