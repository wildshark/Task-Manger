<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 22-Apr-17
 * Time: 2:05 PM
 */


    $page="
            <div class='col-sm-6'>
               <h3 class='header smaller lighter green'>Welcome to Task Management!</h3>
               <p></p>
			    <a href='#' class='btn btn-default btn-app radius-4'>
					<i class='ace-icon fa  fa-calendar bigger-250'></i>
				    	New Task
				</a>
				<a href='#' class='btn btn-default btn-app radius-4'>
					<i class='ace-icon fa fa-users bigger-250'></i>
				    	View Task
						<span class='badge badge-pink'>+3</span>
				</a>
				<a href='#' class='btn btn-default btn-app radius-4'>
					<i class='ace-icon fa fa-coffee bigger-250'></i>
				    	Achieved
						<span class='badge badge-pink'>+3</span>
				</a>
				<a href='#' class='btn btn-default btn-app radius-4'>
					<i class='ace-icon fa fa-cogs bigger-250'></i>
				    	Pending
						<span class='badge badge-pink'>+3</span>
				</a>
				<a href='#' class='btn btn-default btn-app radius-4'>
					<i class='ace-icon fa fa-users bigger-250'></i>
				    	teams
						<span class='badge badge-pink'>+3</span>
				</a>
				<h3 class='header smaller lighter green'>Quick Task</h3>
				<form action='#' method='get' class='form-horizontal' role='form' enctype='application/x-www-form-urlencoded'>

                    <div class='form-group'>
                        <label  class='col-xs-2 control-label no-padding-right' for='id-date-picker-1'>Start Date</label>
                        <div class='col-xs-8 col-sm-7'>
							<div class='input-group'>
								<input class='form-control date-picker' id='id-date-picker-1' type='text' data-date-format='dd-mm-yyyy' />
							    <span class='input-group-addon'>
								    <i class='fa fa-calendar bigger-110'></i>
								</span>
							</div>
						</div>
                    </div>

                    <div class='form-group'>
						<label class='col-sm-2 control-label no-padding-right' for='form-field-1'> Task Subject</label>

						<div class='col-sm-8'>
							<input type='text' id='form-field-1' placeholder='Task Subject' class='col-xs-10 col-sm-10' />
						</div>
					</div>

                    <div class='form-group'>
                        <label class='col-sm-2 control-label no-padding-right' for='form-field-1'>Task</label>

                        <div class='col-sm-8'>
                            <textarea type='text' id='form-field-8' class='col-xs-10 col-sm-10' placeholder='Task'></textarea>
                        </div>
                    </div>

					<div class='form-group'>
                        <label  class='col-xs-2 control-label no-padding-right' for='id-date-picker-1'>End Date</label>
                        <div class='col-xs-8 col-sm-7'>
							<div class='input-group'>
								<input class='form-control date-picker' id='id-date-picker-1' type='text' data-date-format='dd-mm-yyyy' />
							    <span class='input-group-addon'>
								    <i class='fa fa-calendar bigger-110'></i>
								</span>
							</div>
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
                <div class='row'>
                   <h3 class='header smaller lighter green'>Personal Evolution</h3>
                    <div class='form-group'>
                        <label class='col-sm-2 control-label no-padding-right' for='form-field-1'>yest</label>
                            <div class='col-sm-8 progress pos-rel' data-percent='66%'>
                            <div class='progress-bar' style='width:11%;'></div>
                        </div>
                    </div>
                </div>
                <div class='row'>
                    <div class='form-group'>
                            <label class='col-sm-2 control-label no-padding-right' for='form-field-1'>yest</label>
                                <div class='col-sm-8 progress pos-rel' data-percent='66%'>
                                <div class='progress-bar' style='width:11%;'></div>
                            </div>
                    </div>
                </div>
                <div class='row'>
                    <div class='form-group'>
                            <label class='col-sm-2 control-label no-padding-right' for='form-field-1'>yest</label>
                                <div class='col-sm-8 progress pos-rel' data-percent='66%'>
                                <div class='progress-bar' style='width:11%;'></div>
                            </div>
                    </div>
                </div>
         </div>";
$pageConfig->pagecontent=$page;
