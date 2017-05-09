<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 22-Apr-17
 * Time: 10:27 AM
 */

$pageData = new stdClass();

include_once"config.js.php";
include_once"config.css.php";
include "config.url.php";

//Program Title
$company_name="iQuipe";
$pageConfig->headertitle="Account";
$pageConfig->dashboardtitle="Task Manager";

//User Label
$pageConfig->welcomelabel="welcome,";
$pageConfig->usernamelabel="username";

//body content
$pageConfig->activepage="name of page";
$pageConfig->contenttitle="Dashboard test";
$pageConfig->pageoverview="overview &amp; stats";
$pageConfig->pagecontent="test";

//footer copyright.
//include </span> after the company's name

$pageConfig->footcopyright="Company Name</span> Application &copy; 2013-2014";

//Image file Path
$pageConfig->altName="Susan's Avatar";
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




