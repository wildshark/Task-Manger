<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 22-Apr-17
 * Time: 10:27 AM
 */

$pageData = new stdClass();

//Include other configuration
include_once"config.js.php";
include_once"config.css.php";
include_once "config.url.php";

//Program Title
$company_name="iQuipe";
$pageData->headertitle="Task Manager";
$pageData->dashboardtitle="Task Manager";

//Interface Label
$pageData->welcomelabel="welcome,";
$pageData->usernamelabel="username";

//Body Content
$pageData->activepage="name of page";
$pageData->contenttitle="Dashboard";
$pageData->pageoverview="overview &amp; stats";
$pageData->pagecontent="<h2>Test Page</h2><p>Create your view page</p>";

//footer copyright.
//include </span> after the company's name
$pageData->footcopyright="iQuipe Digital Enterprises</span> Application &copy; 2013-2017";

//alt label
$pageData->altName="alt name";
$pageData->altName2="alt name";

//Image file Path
$pageData->userimages="upload/avatar4.png";
$pageData->avatar1="template/assets/images/avatars/avatar.png";
$pageData->avatar2="template/assets/images/avatars/avatar3.png";
$pageData->avatar3="template/assets/images/avatars/avatar4.png";


//href for social network
//twitter
$pageData->twitterurl="#";
//face book
$pageData->facebookurl="#";
//RSS
$pageData->rssurl="#";

$pageData->css="";
$pageData->pagewarming="";



