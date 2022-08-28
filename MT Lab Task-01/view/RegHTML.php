<html>
    <head>
        <title>Registration Form</title>
    </head>
    <body>
        <h1>Registration Form</h1>
        <form action="../control/RegPHP.php" method="POST" >
        <table>
            <tr>
                <td>First Name:</td>
                <td><input type="text" name="first_name"></td>
            </tr>           
            <tr>
                <td>Last Name:</td>
                <td><input type="text" name="last_name"></td>
            </tr>
            <tr>
                <td>Age:</td>
                <td><input type="number" name = "age"></td>
            </tr>
            <tr>
                <td>Designation:</td>
                <td>
                    <input type="radio" name="Designation">Junior Programmer
                    <input type="radio" name="Designation">Senior Programmer
                    <input type="radio" name="Designation">Project Lead
                </td>
            </tr>
            <tr>
                <td>Preferred Language</td>
                <td>
                    <input type="checkbox" name="preferredlanguage" >Java
                    <input type="checkbox" name="preferredlanguage">PHP
                    <input type="checkbox" name="preferredlanguage">C++   
                </td>
            </tr>
            <tr>
                <td>Enter your Email:</td>
                <td><input type="email" name = "email"></td>
            </tr>
            <tr>
                <td>Enter your Password:</td>
                <td><input type="password" name = "password"></td>
            </tr>
            <tr>
                <td>Please choose a file:</td>
                <td><input type="file" name = "file"></td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Submit">
                    <input type="reset" value="Reset">
                </td>   
            </tr>
        </table>
        </form>
    </body>
</html>
