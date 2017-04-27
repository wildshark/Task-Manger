<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 22-Apr-17
 * Time: 1:19 PM
 */

//Page content for page 404 ERROR

$pageData->pagecontent="
                                <div class=\"error-container\">
									<div class=\"well\">
										<h1 class=\"grey lighter smaller\">
											<span class=\"blue bigger-125\">
												<i class=\"ace-icon fa fa-sitemap\"></i>
												404
											</span>
											Page Not Found
										</h1>

										<hr />
										<h3 class=\"lighter smaller\">We looked everywhere but we couldn't find it!</h3>

										<div>
											<form class=\"form-search\">
												<span class=\"input-icon align-middle\">
													<i class=\"ace-icon fa fa-search\"></i>

													<input type=\"text\" class=\"search-query\" placeholder=\"Give it a search...\" />
												</span>
												<button class=\"btn btn-sm\" type=\"button\">Go!</button>
											</form>

											<div class=\"space\"></div>
											<h4 class=\"smaller\">Try one of the following:</h4>

											<ul class=\"list-unstyled spaced inline bigger-110 margin-15\">
												<li>
													<i class=\"ace-icon fa fa-hand-o-right blue\"></i>
													Re-check the url for typos
												</li>

												<li>
													<i class=\"ace-icon fa fa-hand-o-right blue\"></i>
													Read the faq
												</li>

												<li>
													<i class=\"ace-icon fa fa-hand-o-right blue\"></i>
													Tell us about it
												</li>
											</ul>
										</div>

										<hr />
										<div class=\"space\"></div>

										<div class=\"center\">
											<a href=\"$pageData->url_page_go_back\" class=\"btn btn-grey\">
												<i class=\"ace-icon fa fa-arrow-left\"></i>
												Go Back
											</a>

											<a href=\"$pageData->url_dashboard\" class=\"btn btn-primary\">
												<i class=\"ace-icon fa fa-tachometer\"></i>
												Dashboard
											</a>
										</div>
									</div>
								</div>";
