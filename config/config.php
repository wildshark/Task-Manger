<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 22-Apr-17
 * Time: 10:27 AM
 */

$pageConfig = new stdClass();

//Include other configuration
include_once"config.js.php";
include_once"config.css.php";
include_once "config.url.php";

//Program Title
$company_name="iQuipe";
$pageConfig->headertitle="Account";
$pageConfig->dashboardtitle="Task Manager";

//Interface Label
$pageConfig->welcomelabel="welcome,";
$pageConfig->usernamelabel="username";

//Body Content
$pageConfig->activepage="name of page";
$pageConfig->contenttitle="Dashboard";
$pageConfig->pageoverview="overview &amp; stats";
$pageConfig->pagecontent="<h2>Test Page</h2><p>Create your view page</p>";

//footer copyright.
//include </span> after the company's name
$pageConfig->footcopyright="iQuipe Digital Enterprises</span> Application &copy; 2013-2017";

//alt label
$pageConfig->altName="alt name";
$pageConfig->altName2="alt name";

//Image file Path
$pageConfig->userimages="upload/avatar4.png";
$pageConfig->avatar1="template/assets/images/avatars/avatar.png";
$pageConfig->avatar2="template/assets/images/avatars/avatar3.png";
$pageConfig->avatar3="template/assets/images/avatars/avatar4.png";


//href for social network
//twitter
$pageConfig->twitterurl="#";
//face book
$pageConfig->facebookurl="#";
//RSS
$pageConfig->rssurl="#";

//$pageConfig->css="";
//$pageConfig->pagewarming="";



