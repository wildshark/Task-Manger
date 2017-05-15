<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 12-May-17
 * Time: 8:01 PM
 */

$warming_page=$_GET['success'];

$pageData = new stdClass();

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
    $pageData->css = $css;
    $pageData->pagewarming = $pageWarming;

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
    $pageData->css = $css;
    $pageData->pagewarming = $pageWarming;

}