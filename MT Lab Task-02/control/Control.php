<?php
$usernameError="";
if(isset($_POST["submission"]))
{
    $username=$_REQUEST["username"];
    if($username =="")
    {
        $usernameError = "Name can not be empty";
    }
    else
    {
        $usernameError = "Name correct";
    }
    $password=$_REQUEST["password"];
    $designation = $_REQUEST["designation"];
    $email = $_REQUEST["email"];
    $file = $_FILES["myfile"];

    if(empty($username))
    {
        $usernameError= "The name is empty!"."<br>";
    }
    else
    {
        $username = $_REQUEST["username"];
        echo "Name: " . $username  . "<br>";
    }
    if(strlen($password) <6)
    {
        echo "Password should be more than 6 characters." ."<br>";
    }
    else
    {
        echo "Password is correct." ."<br>";
    }   
    if(isset($_REQUEST["designation"]))
    {
        $designation = $_REQUEST["designation"];
        echo "Designation is " . $designation ."<br>";   
    }
    else
    {
        echo "Must select designation." . "<br>";
    }
    
    $preferredlanguage = "";
    if(isset($_REQUEST["Java"]) || isset($_REQUEST["PHP"]) || isset($_REQUEST["C++"]))
    {
        if(isset($_REQUEST["Java"]) && isset($_REQUEST["PHP"]))
        {
            $preferredlanguage= $_REQUEST["Java"] . " and " . $_REQUEST["PHP"];
            echo "Preferred language is " . $preferredlanguage . "<br>";
        }
        elseif(isset($_REQUEST["PHP"]) && isset($_REQUEST["C++"]))
        {
            $preferredlanguage= $_REQUEST["PHP"] . " and " . $_REQUEST["C++"];
            echo "Preferred language is " . $preferredlanguage . "<br>";
        }
        elseif(isset($_REQUEST["Java"]) && isset($_REQUEST["C++"]))
        {
            $preferredlanguage= $_REQUEST["Java"] . " and " . $_REQUEST["C++"];
            echo "Preferred language is " . $preferredlanguage . "<br>";
        }
        elseif(isset($_REQUEST["Java"]))
        {
            $preferredlanguage= $_REQUEST["Java"];
            echo "Preferred language is " . $preferredlanguage . "<br>";
        }
        elseif(isset($_REQUEST["PHP"]))
        {
            $preferredlanguage= $_REQUEST["PHP"];
            echo "Preferred language is " . $preferredlanguage . "<br>";
        }
        elseif(isset($_REQUEST["C++"]))
        {
            $preferredlanguage= $_REQUEST["C++"];
            echo "Preferred language is " . $preferredlanguage . "<br>";
        }
    }
    else
    {
        echo "Must select preferred language." . "<br>";
    }
    if($email == "")
    {
        echo "Email should not be empty.";
    }
    else
    {
        echo "Email is " . $email."<br>";
    }
    $file = "";
    if(empty($_FILES["myfile"]["name"]))
    {
        $fileError= "No file attached";
    }
    else
    {
        if(move_uploaded_file($_FILES['myfile']['tmp_name'], "../upload/".$_FILES["myfile"]["name"]))
        {  
            $file = "../upload/".$_FILES["myfile"]["name"]; 
        }
        else
        {  
            echo "Sorry, file not uploaded, please try again!" . "<br>";
        }
    }
    $filecontents=file_get_contents("../data/Data.json",true);
    $arrphp=json_decode($filecontents);
    $myarray = array(
        "Username"=>$username,
        "Password"=>$password,
        "Designation"=>$designation,
        "Preferred Language"=>$preferredlanguage,
        "Email"=>$email,
        "File name"=>$file
    );

    $arrphp []=$myarray;
    $jsonarr= json_encode($arrphp,JSON_PRETTY_PRINT);
    if(file_put_contents("../data/Data.json",$jsonarr))
    {
        echo "Data is stored.";
    }
    else
    {
        echo "No data stored.";
    }
}
?>
