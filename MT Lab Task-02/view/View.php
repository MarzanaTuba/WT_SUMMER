<?php
require ("../control/Control.php");
?>
<html>
    <head>
        <title>Registration Form</title>
    </head>
    <body>
        <h1>Registration Form</h1>
        <form action="" method="POST" >
        <table>
            <tr>
                <td>username:</td>
                <td>
                    <input type="text" name="username">
                </td>
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
                <td>
                    <input type="email" name = "email">
                </td>
            </tr>
            <tr>
                <td>Enter your Password:</td>
                <td>
                    <input type="password" name = "password">
                </td>
            </tr>
            <tr>
                <td>Please choose a file:</td>
                <td>
                    <input type="file" name = "file">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submission" value="Submit">
                    <input type="reset" name="submission" value="Reset">
                </td>   
            </tr>
        </table>
        </form>
    </body>
</html>
