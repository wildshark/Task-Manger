<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 22-Apr-17
 * Time: 10:54 PM
 */


$page="
<!DOCTYPE html>
<html lang='en'>
	<head>
		<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1' />
		<meta charset='utf-8' />
		<title>$pageData->headertitle</title>

		<meta name='description' content='Common form elements and layouts' />
		<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0' />

		<!-- bootstrap & fontawesome -->
		<link rel='stylesheet' href='$pageData->bootstrap_css' />
		<link rel='stylesheet' href='$pageData->font_awesome' />

		<!-- page specific plugin styles -->
		<link rel='stylesheet' href='$pageData->jquery_ui_min_css' />
		<link rel='stylesheet' href='$pageData->jquery_custom_min_css'>
		<link rel='stylesheet' href='$pageData->css_chosen' />
		<link rel='stylesheet' href='$pageData->bootstrap_date_picker3_css' />
		<link rel='stylesheet' href='$pageData->bootstrap_time_picker_css' />
		<link rel='stylesheet' href='$pageData->date_range_picker_css' />
		<link rel='stylesheet' href='$pageData->bootstrap_date_time_picker_css' />
		<link rel='stylesheet' href='$pageData->bootstrap_color_picker_css' />
		<link rel='stylesheet' href='$pageData->jquery_gritter_min_css'/>

		<!-- text fonts -->
		<link rel='stylesheet' href='$pageData->google_fonts' />

		<!-- ace styles -->
		<link rel='stylesheet' href='$pageData->ace_styles' class='ace-main-stylesheet' id='main-ace-style' />

		<!--[if lte IE 9]>
			<link rel='stylesheet' href='template/assets/css/ace-part2.min.css' class='ace-main-stylesheet' />
		<![endif]-->
		<link rel='stylesheet' href='$pageData->aceskins_style_sheet' />
		<link rel='stylesheet' href='$pageData->acertl_style_sheet' />

		<!--[if lte IE 9]>
		  <link rel='stylesheet' href='template/assets/css/ace-ie.min.css' />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src='$pageData->ace_setting_handler'></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src='template/assets/js/html5shiv.min.js'></script>
		<script src='template/assets/js/respond.min.js'></script>
		<![endif]-->
	</head>

	<body class='no-skin'>
		<div id='navbar' class='navbar navbar-default          ace-save-state'>
			<div class='navbar-container ace-save-state' id='navbar-container'>
				<button type='button' class='navbar-toggle menu-toggler pull-left' id='menu-toggler' data-target='#sidebar'>
					<span class='sr-only'>Toggle sidebar</span>

					<span class='icon-bar'></span>

					<span class='icon-bar'></span>

					<span class='icon-bar'></span>
				</button>

				<div class='navbar-header pull-left'>
					<a href='$pageData->url_dashboard' class='navbar-brand'>
						<small>
							<i class='fa fa-leaf'></i>
							    $pageData->dashboardtitle
						</small>
					</a>
				</div>

				<div class='navbar-buttons navbar-header pull-right' role='navigation'>
					<ul class='nav ace-nav'>
						<li class='grey dropdown-modal'>
							<a data-toggle='dropdown' class='dropdown-toggle' href='#'>
								<i class='ace-icon fa fa-tasks'></i>
								<span class='badge badge-grey'>4</span>
							</a>

							<ul class='dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close'>
								<li class='dropdown-header'>
									<i class='ace-icon fa fa-check'></i>
									4 Tasks to complete
								</li>

								<li class='dropdown-content'>
									<ul class='dropdown-menu dropdown-navbar'>
										<li>
											<a href='#'>
												<div class='clearfix'>
													<span class='pull-left'>Software Update</span>
													<span class='pull-right'>65%</span>
												</div>

												<div class='progress progress-mini'>
													<div style='width:65%' class='progress-bar'></div>
												</div>
											</a>
										</li>

										<li>
											<a href='#'>
												<div class='clearfix'>
													<span class='pull-left'>Hardware Upgrade</span>
													<span class='pull-right'>35%</span>
												</div>

												<div class='progress progress-mini'>
													<div style='width:35%' class='progress-bar progress-bar-danger'></div>
												</div>
											</a>
										</li>

										<li>
											<a href='#'>
												<div class='clearfix'>
													<span class='pull-left'>Unit Testing</span>
													<span class='pull-right'>15%</span>
												</div>

												<div class='progress progress-mini'>
													<div style='width:15%' class='progress-bar progress-bar-warning'></div>
												</div>
											</a>
										</li>

										<li>
											<a href='#'>
												<div class='clearfix'>
													<span class='pull-left'>Bug Fixes</span>
													<span class='pull-right'>90%</span>
												</div>

												<div class='progress progress-mini progress-striped active'>
													<div style='width:90%' class='progress-bar progress-bar-success'></div>
												</div>
											</a>
										</li>
									</ul>
								</li>

								<li class='dropdown-footer'>
									<a href='#'>
										See tasks with details
										<i class='ace-icon fa fa-arrow-right'></i>
									</a>
								</li>
							</ul>
						</li>

						<li class='purple dropdown-modal'>
							<a data-toggle='dropdown' class='dropdown-toggle' href='#'>
								<i class='ace-icon fa fa-bell icon-animated-bell'></i>
								<span class='badge badge-important'>8</span>
							</a>

							<ul class='dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close'>
								<li class='dropdown-header'>
									<i class='ace-icon fa fa-exclamation-triangle'></i>
									8 Notifications
								</li>

								<li class='dropdown-content'>
									<ul class='dropdown-menu dropdown-navbar navbar-pink'>
										<li>
											<a href='#'>
												<div class='clearfix'>
													<span class='pull-left'>
														<i class='btn btn-xs no-hover btn-pink fa fa-comment'></i>
														New Comments
													</span>
													<span class='pull-right badge badge-info'>+12</span>
												</div>
											</a>
										</li>

										<li>
											<a href='#'>
												<i class='btn btn-xs btn-primary fa fa-user'></i>
												Bob just signed up as an editor ...
											</a>
										</li>

										<li>
											<a href='#'>
												<div class='clearfix'>
													<span class='pull-left'>
														<i class='btn btn-xs no-hover btn-success fa fa-shopping-cart'></i>
														New Orders
													</span>
													<span class='pull-right badge badge-success'>+8</span>
												</div>
											</a>
										</li>

										<li>
											<a href='#'>
												<div class='clearfix'>
													<span class='pull-left'>
														<i class='btn btn-xs no-hover btn-info fa fa-twitter'></i>
														Followers
													</span>
													<span class='pull-right badge badge-info'>+11</span>
												</div>
											</a>
										</li>
									</ul>
								</li>

								<li class='dropdown-footer'>
									<a href='#'>
										See all notifications
										<i class='ace-icon fa fa-arrow-right'></i>
									</a>
								</li>
							</ul>
						</li>

						<li class='green dropdown-modal'>
							<a data-toggle='dropdown' class='dropdown-toggle' href='#'>
								<i class='ace-icon fa fa-envelope icon-animated-vertical'></i>
								<span class='badge badge-success'>5</span>
							</a>

							<ul class='dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close'>
								<li class='dropdown-header'>
									<i class='ace-icon fa fa-envelope-o'></i>
									5 Messages
								</li>

								<li class='dropdown-content'>
									<ul class='dropdown-menu dropdown-navbar'>
										<li>
											<a href='#' class='clearfix'>
												<img src='$pageData->avatar' class='msg-photo' alt='$pageData->altName' />
												<span class='msg-body'>
													<span class='msg-title'>
														<span class='blue'>Alex:</span>
														Ciao sociis natoque penatibus et auctor ...
													</span>

													<span class='msg-time'>
														<i class='ace-icon fa fa-clock-o'></i>
														<span>a moment ago</span>
													</span>
												</span>
											</a>
										</li>

										<li>
											<a href='#' class='clearfix'>
												<img src='$pageData->avatar3' class='msg-photo' alt='$pageData->altName' />
												<span class='msg-body'>
													<span class='msg-title'>
														<span class='blue'>Susan:</span>
														Vestibulum id ligula porta felis euismod ...
													</span>

													<span class='msg-time'>
														<i class='ace-icon fa fa-clock-o'></i>
														<span>20 minutes ago</span>
													</span>
												</span>
											</a>
										</li>
										<!---More of the above-->
									</ul>
								</li>

								<li class='dropdown-footer'>
									<a href='#'>
										See all messages
										<i class='ace-icon fa fa-arrow-right'></i>
									</a>
								</li>
							</ul>
						</li>

						<li class='light-blue dropdown-modal'>
							<a data-toggle='dropdown' href='#' class='dropdown-toggle'>
								<img class='nav-user-photo' src='$pageData->userimages' alt='$pageData->altName' />
								<span class='user-info'>
									<small>$pageData->welcomelabel</small>
									$pageData->usernamelabel
								</span>

								<i class='ace-icon fa fa-caret-down'></i>
							</a>

							<ul class='user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close'>
								<li>
									<a href='#'>
										<i class='ace-icon fa fa-cog'></i>
										Settings
									</a>
								</li>

								<li>
									<a href='#'>
										<i class='ace-icon fa fa-user'></i>
										Profile
									</a>
								</li>

								<li class='divider'></li>

								<li>
									<a href='$pageData->url_logout'>
										<i class='ace-icon fa fa-power-off'></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div><!-- /.navbar-container -->
		</div>

		<div class='main-container ace-save-state' id='main-container'>
			<script type='text/javascript'>
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div id='sidebar' class='sidebar responsive ace-save-state'>
				<script type='text/javascript'>
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				<div class='sidebar-shortcuts' id='sidebar-shortcuts'>
					<div class='sidebar-shortcuts-large' id='sidebar-shortcuts-large'>
						<button class='btn btn-success'>
							<i class='ace-icon fa fa-signal'></i>
						</button>

						<button class='btn btn-info'>
							<i class='ace-icon fa fa-pencil'></i>
						</button>

						<button class='btn btn-warning'>
							<i class='ace-icon fa fa-users'></i>
						</button>

						<button class='btn btn-danger'>
							<i class='ace-icon fa fa-cogs'></i>
						</button>
					</div>

					<div class='sidebar-shortcuts-mini' id='sidebar-shortcuts-mini'>
						<span class='btn btn-success'></span>

						<span class='btn btn-info'></span>

						<span class='btn btn-warning'></span>

						<span class='btn btn-danger'></span>
					</div>
				</div><!-- /.sidebar-shortcuts -->
				<!--widgets menu bar-->

                    $pageData->pagewidgets

				<!-- /.Widget menu bar-list -->

				<div class='sidebar-toggle sidebar-collapse' id='sidebar-collapse'>
					<i id='sidebar-toggle-icon' class='ace-icon fa fa-angle-double-left ace-save-state' data-icon1='ace-icon fa fa-angle-double-left' data-icon2='ace-icon fa fa-angle-double-right'></i>
				</div>
			</div>

			<div class='main-content'>
				<div class='main-content-inner'>
					<div class='breadcrumbs ace-save-state' id='breadcrumbs'>
						<ul class='breadcrumb'>
							<li>
								<i class='ace-icon fa fa-home home-icon'></i>
								<a href='#'>Home</a>
							</li>
							<li class='active'>$pageData->activepage</li>
						</ul><!-- /.breadcrumb -->

						<div class='nav-search' id='nav-search'>
							<form class='form-search'>
								<span class='input-icon'>
									<input type='text' placeholder='Search ...' class='nav-search-input' id='nav-search-input' autocomplete='off' />
									<i class='ace-icon fa fa-search nav-search-icon'></i>
								</span>
							</form>
						</div><!-- /.nav-search -->
					</div>

					<div class='page-content'>
						<div class='ace-settings-container' id='ace-settings-container'>
							<div class='btn btn-app btn-xs btn-warning ace-settings-btn' id='ace-settings-btn'>
								<i class='ace-icon fa fa-cog bigger-130'></i>
							</div>

							<div class='ace-settings-box clearfix' id='ace-settings-box'>
								<div class='pull-left width-50'>
									<div class='ace-settings-item'>
										<div class='pull-left'>
											<select id='skin-colorpicker' class='hide'>
												<option data-skin='no-skin' value='#438EB9'>#438EB9</option>
												<option data-skin='skin-1' value='#222A2D'>#222A2D</option>
												<option data-skin='skin-2' value='#C6487E'>#C6487E</option>
												<option data-skin='skin-3' value='#D0D0D0'>#D0D0D0</option>
											</select>
										</div>
										<span>&nbsp; Choose Skin</span>
									</div>

									<div class='ace-settings-item'>
										<input type='checkbox' class='ace ace-checkbox-2 ace-save-state' id='ace-settings-navbar' autocomplete='off' />
										<label class='lbl' for='ace-settings-navbar'> Fixed Navbar</label>
									</div>

									<div class='ace-settings-item'>
										<input type='checkbox' class='ace ace-checkbox-2 ace-save-state' id='ace-settings-sidebar' autocomplete='off' />
										<label class='lbl' for='ace-settings-sidebar'> Fixed Sidebar</label>
									</div>

									<div class='ace-settings-item'>
										<input type='checkbox' class='ace ace-checkbox-2 ace-save-state' id='ace-settings-breadcrumbs' autocomplete='off' />
										<label class='lbl' for='ace-settings-breadcrumbs'> Fixed Breadcrumbs</label>
									</div>

									<div class='ace-settings-item'>
										<input type='checkbox' class='ace ace-checkbox-2' id='ace-settings-rtl' autocomplete='off' />
										<label class='lbl' for='ace-settings-rtl'> Right To Left (rtl)</label>
									</div>

									<div class='ace-settings-item'>
										<input type='checkbox' class='ace ace-checkbox-2 ace-save-state' id='ace-settings-add-container' autocomplete='off' />
										<label class='lbl' for='ace-settings-add-container'>
											Inside
											<b>.container</b>
										</label>
									</div>
								</div><!-- /.pull-left -->

								<div class='pull-left width-50'>
									<div class='ace-settings-item'>
										<input type='checkbox' class='ace ace-checkbox-2' id='ace-settings-hover' autocomplete='off' />
										<label class='lbl' for='ace-settings-hover'> Submenu on Hover</label>
									</div>

									<div class='ace-settings-item'>
										<input type='checkbox' class='ace ace-checkbox-2' id='ace-settings-compact' autocomplete='off' />
										<label class='lbl' for='ace-settings-compact'> Compact Sidebar</label>
									</div>

									<div class='ace-settings-item'>
										<input type='checkbox' class='ace ace-checkbox-2' id='ace-settings-highlight' autocomplete='off' />
										<label class='lbl' for='ace-settings-highlight'> Alt. Active Item</label>
									</div>
								</div><!-- /.pull-left -->
							</div><!-- /.ace-settings-box -->
						</div><!-- /.ace-settings-container -->

						<div class='page-header'>
							<h1>
								$pageData->contenttitle
								<small>
								    <i class='ace-icon fa fa-angle-double-right'></i>
									$pageData->pageoverview
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class='row'>
							<div class='col-xs-12'>
								<!-- PAGE CONTENT BEGINS -->

								 <div>
								    $pageData->pagewarming
								 </div>
								 $pageData->pagecontent

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			<div class='footer'>
				<div class='footer-inner'>
					<div class='footer-content'>
						<span class='bigger-120'>
							<span class='blue bolder'>
							    $pageData->footcopyright
						</span>

						&nbsp; &nbsp;
						<span class='action-buttons'>
							<a href='$pageData->twitterurl'>
								<i class='ace-icon fa fa-twitter-square light-blue bigger-150'></i>
							</a>

							<a href='$pageData->facebookurl'>
								<i class='ace-icon fa fa-facebook-square text-primary bigger-150'></i>
							</a>

							<a href='$pageData->rssurl'>
								<i class='ace-icon fa fa-rss-square orange bigger-150'></i>
							</a>
						</span>
					</div>
				</div>
			</div>

			<a href='#' id='btn-scroll-up' class='btn-scroll-up btn btn-sm btn-inverse'>
				<i class='ace-icon fa fa-angle-double-up icon-only bigger-110'></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src='$pageData->jquery'></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src='template/assets/js/jquery-1.11.3.min.js'></script>
<![endif]-->
		<script src='$pageData->js_mobile'></script>
		<script src='$pageData->bootstrap'></script>

		<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src='template/assets/js/excanvas.min.js'></script>
		<![endif]-->
		<script src='$pageData->jquery_ui_custom_min'></script>
		<script src='$pageData->jquery_ui_touch_punch_min'></script>
		<script src='$pageData->chosen_jquery_min'></script>
		<script src='$pageData->spin_box'></script>
		<script src='$pageData->bootstrap_date_picker'></script>
		<script src='$pageData->bootstrap_time_picker'></script>
		<script src='$pageData->moment'></script>
		<script src='$pageData->date_range_picker_css'></script>
		<script src='$pageData->bootstrap_date_time_picker_css'></script>
		<script src='$pageData->bootstrap_color_picker_css'></script>
		<script src='$pageData->jquery_knob_min'></script>
		<script src='$pageData->autosize_min'></script>
		<script src='$pageData->jquery_input_limiter_min'></script>
		<script src='$pageData->jquery_masked_input_min'></script>
		<script src='$pageData->bootstrap_tag'></script>

		<!-- ace scripts -->
		<script src='$pageData->ace_elements'></script>
		<script src='$pageData->ace'></script>

		<!-- inline scripts related to this page -->
<script src='$pageData->js_forms'></script>
	</body>
</html>";
echo $page;
