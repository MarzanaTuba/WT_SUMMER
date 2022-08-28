<html>
    <head>
        <title>Page Title</title>
        <link rel="stylesheet" type="text/css"  href="../css/RegCFT2.css">
    </head>
    <?php   include("../control/RegPFT2.php"); ?>
    <div class="body">
        <body>
            <div class="heading">
                <h1> ABC Management System <h1>
                <h3> We Create Future</h3>
            </div>
            <div class="bar" >
                Home   About us  Shop
            </div>
            <h2 >Registration Form</h2>
            <div class="line-1"></div>
            <br>
            <form method="POST" enctype="multipart/form-data">
                <table class="table">
                    <tr>
                        <td  >First Name: </td>
                        <td><input type="text" name="fname"></td>
                    </tr>
                    <tr>
                        <td>Last Name: </td>
                        <td><input type="text" name="lname"></td>
                    </tr> 
                    <tr>
                        <td>Age: </td>
                        <td><input type="number" name="age"></td>
                    </tr> 
                    <tr>
                        <td>Designation: </td>
                        <td>
                            <input type="radio" name="designation" value="Junior Programmer">Junior Programmer
                            <input type="radio" name="designation" value="Senior Programmer">Senior Programmer
                            <input type="radio" name="designation" value="Project Lead">Project Lead
                        </td>
                    </tr>
                    <tr>
                        <td>Preferred Language: </td>
                        <td>
                            <input type="checkbox"  name="java" value="JAVA" >JAVA
                            <input type="checkbox"  name="php" value="PHP">PHP
                            <input type="checkbox"  name="cp" value="Cp">C++
                        </td>
                    </tr>
                    <tr>
                        <td>Email: </td>
                        <td><input type="email" name="email"></td>
                    </tr> 
                    <tr>
                        <td>Password: </td>
                        <td><input type="password" name="password"></td>
                    </tr>
                    <tr>
                        <td>Please choose a file: </td>
                        <td><input type="file" name="file"></td>
                    </tr> 
                </table>
                <input type="submit" name="Submit" class="button " value="Submit">
                <input type="reset" value="Reset" class="button ">
            </form>
        </body>
</html> 
