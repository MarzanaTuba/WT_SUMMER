<?php
include("../model/DatabaseFT1.php");

$fname="";
$lname="";
$age="";
$designation="";
$planguage="";
$email="";
$password="";
$picture= "";
$p1=$p2=$p3="";
$conobj=$rslt1=$rslt2="";

if (isset($_POST["Submit"]))
{
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $age = $_POST["age"];
    $password = strlen($_POST["password"]);
    $designation=$_POST["designation"];;

    if(isset($_POST["java"]))
    {
        $p1="Java";
    }
    if(isset($_POST["php"]))
    {
        $p2="PHP";
    }
    if(isset($_POST["cp"]))
    {
        $p3="C++";
    }
    
    $planguage=$p1.$p2.$p3;
    $email=$_POST["email"];;
    $picture= $_FILES["file"]["name"];
    $mydb=new database();
    $conobj=$mydb->openCon();
    $rslt1= $mydb->InsertData($fname,$lname,$age,$designation,$planguage,$email,$password,$picture,$conobj);
    $rslt2= $mydb->show ($conobj);
    if ($rslt2 ->num_rows >0)
    {
        while ($myrow = $rslt2 ->fetch_assoc())
        {
            $vdfname=$myrow["fname"];
            $vdlname=$myrow["lname"];
            $vdage=$myrow["age"];
            $vddesignation=$myrow["designation"];
            $vdplanguage=$myrow["planguage"];
            $vdemail=$myrow["email"];
            $vdpassword=$myrow["password"];
            $vdpicture=$myrow["picture"];
            
            echo $vdfname;
            echo $vdlname;
            echo $vdage;
            echo $vddesignation;
            echo $vdplanguage;
            echo $vdemail;
            echo $vdpassword;
            echo $vdpicture;
        }
    }
}
?>
