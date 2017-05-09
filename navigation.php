<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 22-Apr-17
 * Time: 10:44 AM
 *
 * Navigation system using select case
 *
 * Note:
 *      In creating a page the order start with the below list eg
 *      include_once"config/config.php";
 *      include_once"template/widgets.php";
 *      $pageConfig->headertitle=$load_page;
 *      $pageConfig->contenttitle=$load_page;
 *      $pageConfig->css="";
 *      $pageConfig->pagewarming="";
 *
 *      $pageLogout=include_once "template/default.php";
 *      echo $pageLogout;. config.php
 * if your page do not follow the order, your page will display as
 * default
 *
 * for default page use "template/default.php"
 * fot forms page use "template/form.php"
 *
 */

// get page url to getLoadPage Function

$load_page = $_GET['page'];
$warming_page=$_GET['success'];

// function to load pages
    function getLoadPage($load_page, $warming_page)
    {
        $pageConfig = new stdClass();

        if (!empty($warming_page)) {
            $css = "alert alert-block alert-success";
            $pageWarming = "
						<button type='button' class='close' data-dismiss='alert'>
							<i class='ace-icon fa fa-times'></i>
						</button>
						<strong>
							<i class='ace-icon fa fa-check'></i>
								Well done!
						</strong>
						    	You successfully read this important alert message.
								<br />";
            $pageConfig->css = $css;
            $pageConfig->pagewarming = $pageWarming;

        } else {
            $css = "alert alert-danger";
            $pageWarming = "
						<button type='button' class='close' data-dismiss='alert'>
							<i class='ace-icon fa fa-times'></i>
						</button>
						<strong>
							<i class='ace-icon fa fa-times'></i>
								Oh snap!
						</strong>
								Change a few things up and try submitting again.
								<br />";
            $pageConfig->css = $css;
            $pageConfig->pagewarming = $pageWarming;

        }

        switch ($load_page) {
/*
 * Note: to create a page using the includes
 *       Start with config.php and next session.php
 *              include_once"module/session.php";
                include_once "module/logout.php";
                $pageConfig->headertitle = "Qua Account";
                $pageConfig->css = "";
                $pageConfig->pagewarming = "";

                $page = include_once "template/login.php";
                echo $page;
                break;
 * */
            case "logout":
                //logout user
                include_once"config/config.php";
                include_once"module/session.php";
                include_once "module/logout.php";
                $pageConfig->headertitle = "Qua Account";

                $page = include_once "template/login.php";
                echo $page;
                break;

            case "login":
                include_once"config/config.php";
                include_once "module/login.php";
                include_once"module/session.php";
                $pageConfig->headertitle = "Qua Account";

                $page = include_once "template/login.php";
                echo $page;
                break;

            case "chat":

                include_once "config/config.php";
                include_once "module/session.php";
                include_once "template/widgets.php";
                include_once "views/chat.php";
                $pageConfig->activepage=$load_page;
                $pageConfig->headertitle = "Chat";
                $pageConfig->contenttitle = "Chat room";
                $pageConfig->pageoverview="Send short messages";
                $pageConfig->css = "";
                $pageConfig->pagewarming = "";

                $page = include_once "template/form.php";
                echo $page;
                break;

            case "view":

                include_once "config/config.php";
                include_once "module/session.php";
                include_once "template/widgets.php";
                require_once "views/test2.php";
                $pageConfig->activepage=$load_page;
                $pageConfig->headertitle = "table";
                $pageConfig->contenttitle = "table";
                $pageConfig->pageoverview="Send short messages";

                $page = include_once "template/table.php";
                echo $page;
                break;

            case "sms":

                include_once "config/config.php";
                include_once"module/session.php";
                include_once "template/widgets.php";
                include_once "views/sms.php";
                $pageConfig->activepage=$load_page;
                $pageConfig->headertitle = "SMS";
                $pageConfig->contenttitle = "SMS Alert";
                $pageConfig->pageoverview="Send short messages";

                $page = include_once "template/form.php";
                echo $page;
                break;

            case "task":

                include_once "config/config.php";
                include_once"module/session.php";
                include_once "template/widgets.php";
                include_once "views/addtask.php";
                $pageConfig->activepage=$load_page;
                $pageConfig->headertitle = "Task";
                $pageConfig->contenttitle = "Task";
                $pageConfig->pageoverview="Things to do today";

                $page = include_once "template/form.php";
                echo $page;
                break;

            case "profile":

                include_once "config/config.php";
                include_once"module/session.php";
                include_once "template/widgets.php";
                include_once "views/profile.php";
                $pageConfig->headertitle = "profile";
                $pageConfig->contenttitle = "Profile";

                $page = include_once "template/profile.php";
                echo $page;
                break;

            case "dashboard":
                //Display dashboard
                include_once "config/config.php";
                include_once"module/session.php";
                include_once"module/session.php";
                include_once "template/widgets.php";
                include_once "views/dashboard.php";
                $pageConfig->headertitle = "Dashboard";
                $pageConfig->contenttitle = "Dashboard";
                $pageConfig->css = "";
                $pageConfig->pagewarming = "";

                $page = include_once "template/form.php";
                echo $page;
                break;

            //start here
            default:

                //Display error 404 page
                include_once "config/config.php";
                include_once"module/session.php";
                include_once "template/widgets.php";
                include_once "template/error404.php";
                $pageConfig->headertitle = "404 Error - Que";
                $pageConfig->contenttitle = "Page Error";
                $pageConfig->css = "";
                $pageConfig->pagewarming = "";

                $page = include_once "template/default.php";
                echo $page;
        }
    }
    getLoadPage($load_page, $warming_page);
