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
$pageData->headertitle="Account";
$pageData->dashboardtitle="Task Manager";

//User Label
$pageData->welcomelabel="welcome,";
$pageData->usernamelabel="username";

//body content
$pageData->activepage="name of page";
$pageData->contenttitle="Dashboard test";
$pageData->pageoverview="overview &amp; stats";
$pageData->pagecontent="test";

//footer copyright.
//include </span> after the company's name

$pageData->footcopyright="Company Name</span> Application &copy; 2013-2014";

//Image file Path
$pageData->altName="Susan's Avatar";
$pageData->userimages="upload/avatar4.png";
$pageData->avatar="template/assets/images/avatars/avatar.png";
$pageData->avatar3="template/assets/images/avatars/avatar3.png";
$pageData->avatar4="template/assets/images/avatars/avatar4.png";

//href for social network
//twitter
$pageData->twitterurl="#";
//face book
$pageData->facebookurl="#";
//RSS
$pageData->rssurl="#";




