<?php

session_start();

$_SESSION['name'] = $_REQUEST['name'];
$_SESSION['email'] = $_REQUEST['email'];
$_SESSION['dob'] = $_REQUEST['dob'];
$_SESSION['site'] =  $_REQUEST['site'];
$_SESSION['phone'] = $_REQUEST['phone'];
$_SESSION['designation']= $_REQUEST['designation'];
$_SESSION['home-address'] = $_REQUEST['home-address'];
$_SESSION['work-address'] = $_REQUEST['work-address'];
$_SESSION['location']= $_REQUEST['location'];
$_SESSION['current-employer'] = $_REQUEST['current-employer'];
$_SESSION['previous-employer']= $_REQUEST['previous-employer'];
$_SESSION['skills'] = $_REQUEST['skills'];
$_SESSION['pwork-address'] = $_REQUEST['pwork-address'];
$_SESSION['gender'] = $_REQUEST['gender'];
$_SESSION['password'] = $_REQUEST['password'];
$_SESSION['pass_confirm'] = $_REQUEST['pass_confirm'];


?>

<?php
if($_SESSION['name']==""||$_SESSION['email']==""|| $_SESSION['dob']==""||$_SESSION['site']==""|| $_SESSION['phone']==""||
$_SESSION['home-address']==""|| $_SESSION['designation']==""||$_SESSION['current-employer']==""|| $_SESSION['previous-employer']==""|| $_SESSION['skills']==""|| $_SESSION['work-address']==""
|| $_SESSION['location']=="" || $_SESSION['pwork-address']==""||$_SESSION['gender']==""|| $_SESSION['password']==""||$_SESSION['pass_confirm']=="" )
{
    echo "The system could not save your information";
}else{
    echo " Your Account has been created successfuly Please wait....";
    header('Refresh: 2; URL = dashboard.php');
}

?>
