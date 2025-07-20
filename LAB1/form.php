<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration</title>
</head>
<body>
    <center>
    <h1 style="color: blue">AIUB</h1>
    <h4 style="color: blue">Registration Form</h4>
</center>
    <h3>Complete the Registration</h3>

        <table>
            <tr>
                <td>Full Name: </td>
                <td><input type="text"></td>
            </tr>
            <tr>
                <td>Email: </td>
                <td>
                    <input type="text">
                </td>
            </tr>

            <tr>
                <td>Password: </td>
                <td><input type="text"></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>
                    <input type="radio"/> Female
                    <input type="radio"/> Others
                </td>
            </tr>
            <tr>
                <td>Language Known :</td>
                <td><input type="checkbox" >English</td>
                <td><input type="checkbox">Hindi</td>
                <td><input type="checkbox">Bangla</td>
            </tr>

            <td>Country:</td>
                <td>
                    <select name="country">
                        <option value="">--Select--</option>
                        <option value="usa">USA</option>
                        <option value="uk">UK</option>
                        <option value="india">India</option>
                        <option value="australia">Australia</option>
                        <option value="canada">Canada</option>
                    </select>
                </td>
            </tr>
             <tr>
                <td>Date of Birth:</td>
                <td><input type="date"></td>
            </tr>
            <tr>
                <td>Upload photo</td>
                <td><input type="file"></td>
            </tr>
            <tr>
                <td>Comments</td>
                <td><input type="texbox"></td>
            </tr>       
            
        </table>
            <button>Register</button>
    
</html>