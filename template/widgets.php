<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 22-Apr-17
 * Time: 10:57 AM
 */

$pageData->pagewidgets="
                <ul class='nav nav-list'>
					<li class='active'>
						<a href='$pageData->url_dashboard'>
							<i class='menu-icon fa fa-tachometer'></i>
							<span class='menu-text'> Dashboard </span>
						</a>

						<b class='arrow'></b>
					</li>

					<li class=''>
						<a href='$pageData->url_add_task'>
							<i class='menu-icon fa fa-cogs'></i>
							<span class='menu-text'> New Task </span>
						</a>

						<b class='arrow'></b>
					</li>

					<li class=''>
						<a href='#' class='dropdown-toggle'>
							<i class='menu-icon fa fa-list'></i>
							<span class='menu-text'>
							    Task Schedule
							</span>

							<b class='arrow fa fa-angle-down'></b>
						</a>

						<b class='arrow'></b>

						<ul class='submenu'>
							<li class=''>
								<a href='$pageData->url_all_task'>
									<i class='menu-icon fa fa-caret-right'></i>
									All Task
								</a>

								<b class='arrow'></b>
							</li>

							<li class=''>
								<a href='$pageData->url_achieved_task'>
									<i class='menu-icon fa fa-caret-right'></i>
									Achieved Task
								</a>

								<b class='arrow'></b>
							</li>

							<li class=''>
								<a href='$pageData->url_pending_task'>
									<i class='menu-icon fa fa-caret-right'></i>
									Pending Task
								</a>

								<b class='arrow'></b>
							</li>
						</ul>
					</li>
					<li class=''>
						<a href='$pageData->url_sms_alert'>
							<i class='menu-icon fa fa-envelope'></i>
							<span class='menu-text'> SMS Alert </span>
						</a>

						<b class='arrow'></b>
					</li>

					<li class=''>
						<a href='$pageData->url_profile'>
							<i class='menu-icon fa fa-list-alt'></i>
							<span class='menu-text'> Profile </span>
						</a>

						<b class='arrow'></b>
					</li>

					<li class=''>
						<a href='$pageData->url_chat'>
							<i class='menu-icon fa fa-list-alt'></i>
							<span class='menu-text'> Chat </span>
						</a>

						<b class='arrow'></b>
					</li>
				</ul>";