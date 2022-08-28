<html>
    <head>
        <h1>Registration Form</h1>
    </head>
    <body>
        <div class="regform">
            <hr>
        </div>
        <form action="" method="POST" enctype ="multipart/form-data" onsubmit="return formcheck()" >
            <table>
                <tr>
                    <td>First Name :</td>
                    <td><input type="text"  name = "fname" id="f1" onkeyup="fnameval()"  ></td>
                </tr>
                <tr>
                    <label id="lnameerror">Please enter your last name</label>
                    <td>Last Name :</td>
                    <td><input type="text"  name = "lname" id="l1" onkeyup="lnameval()" ></td>
                </tr>
                <tr>
                    <td>Age :</td>
                    <td><input type="text" name="age" id="ag1" onkeyup="ageval()"></td>
                </tr>
                <tr>
                    <td>Designation :</td>
                    <td>
                        <input type="radio" name="designation" value="Junior Programmer" id="Junior" onclick="getradioval()" >Junior Programmer
                        <input type="radio" name="designation" value="Senior Programmer" id="Senior" onclick="getradioval()">Senior Programmer
                        <input type="radio" name="designation" value="Project Lead" id ="PL" onclick="getradioval()">Project Lead
                    </td>
                    <p id="radiovalue">Please select a radio Button.</p>
                </tr>
                <tr>
                    <td>Preferred Language : </td>
                    <td>
                        <input type="checkbox" name="skills[]" value="Java" id="java" onclick="checkval()" >Java
                        <input type="checkbox" name="skills[]" value="PHP" id="php" onclick="checkval()">PHP
                        <input type="checkbox" name="skills[]" value="C++" id="cplusplus" onclick="checkval()">C++
                    </td>
                    <p id="checkvalue">Please select a checkbox.</p>
                </tr>
                <tr>
                    <p id="mailerror"> Please enter your email</p>
                    <td>Email :</td>
                    <td><input type="text`" name="email" id="mail" onkeyup="emailcheck()"></td>
                </tr>
                <label id="nameerror">
                    Please enter your first name
                </label>
                <tr>
                    <p id="passw">Enter correct password</p>
                    <td>Password :</td>
                    <td><input type="password" name="pass" id="p1"  onkeyup="passval()"></td>
                </tr>
                <tr>
                    <p id="Fileerror">Please upload a file.</p>
                    <td>Please choose a file : </td>
                    <td><input type="file" name="myfile" id="f1" onclick="fileval()"></td>
                </tr>
                <p id="sub"></p>
            </table>
            <input type="submit" name="submit" class="button" value="Submit">
            <input type="reset" name="reset" class="button" value="Reset">
        </form>
        <script src="../js/JSFT3.php"></script>
    </body>
</html>
