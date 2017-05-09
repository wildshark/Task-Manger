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
                       <input name='receiver'  type='text' id='form-field-8' class='col-xs-10 col-sm-10' placeholder='Receiver's mobile number'>
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
                    <button type='submit' class='btn btn-primary no-border'>
                       <i class='ace-icon fa fa-tasks align-top bigger-125'></i>
                       Submit Task
                    </button>

                </div>
            </form>
        </div>
        <div class='col-sm-6'>
        </div>";
$pageConfig->pagecontent= $pageSMS;
