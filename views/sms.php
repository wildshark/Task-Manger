<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 25-Apr-17
 * Time: 4:29 PM
 */

$pageSMS="
        <div class='col-sm-6'>
            <h3 class='header smaller light-green'>Text Message</h3>
            <form action='module/sms_alert.php' method='get' class='form-horizontal' role='form' enctype='application/x-www-form-urlencoded'>
                <div class='form-group'>
                    <label  class='col-sm-2 control-label no-padding-right' for='form-field-1'>Receiver's Mobile</label>

                    <div class='col-sm-8'>
                       <input name='receiver'  type='text' id='form-field-8' class='col-xs-10 col-sm-10' placeholder='Receiver mobile number'>
                    </div>
                </div>

                <div class='form-group'>
                    <label  class='col-sm-2 control-label no-padding-right' for='form-field-1'>Sender's Mobile</label>

                    <div class='col-sm-8'>
                       <input name='sender'  type='text' id='form-field-8' class='col-xs-10 col-sm-10' placeholder='Your mobile number'>
                    </div>
                </div>

                <div class='form-group'>
                    <label  class='col-sm-2 control-label no-padding-right' for='form-field-1'>Message</label>

                    <div class='col-sm-8'>
                       <textarea name='message'  type='text' id='form-field-8' class='col-xs-10 col-sm-10' placeholder='Type your message here'></textarea>
                    </div>
                </div>

                <div class='form-group'>
                    <button type='submit' class='btn btn-sm btn-primary '>
                       <i class='ace-icon fa fa-envelope align-top bigger-125'></i>
                       Send SMS
                    </button>
                </div>
            </form>
        </div>
        <div class='col-sm-6'>
           <h3 class='header smaller lighter red'>Task Wells</h3>
                <div class='well'>
                    <h4 class='green smaller lighter'>Normal Well</h4>
                    Use the well as a simple effect on an element to give it an inset effect.
                </div>
        </div>
        
        <div class='col-sm-6 center'>
			<div class=\"progress progress-striped active\">
													<div class=\"progress-bar progress-bar-yellow\" style=\"width: 60%\"></div>
												</div>
		</div>";
$pageData->pagecontent= $pageSMS;
