<?php


$table = new stdClass();
$table->data='';
function getData(){
    $conn = new mysqli('localhost', 'root', 'usbw', 'cu_task','3307');
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = 'SELECT * FROM  user_task';
    $result = $conn->query($sql);
    while ($row= $result->fetch_assoc()) {
    echo"<tr>
                <td class='center'>
                   <label class='pos-rel'>
                       <input type='checkbox' class='ace' />
                       <span class='lbl'></span>
                   </label>
                </td>
                <td>
                  <a href='#'>" . $row['taskDate'] . "</a>
                </td>
                <td>" . $row['Assign_to'] . "</td>
                <td class='hidden-480'>3,330</td>
                <td>Feb 12</td>
      
                <td class='hidden-480'>
                  <span class='label label-sm label-warning'>" . $row['Priority'] . "'</span>
                </td>
                <td>
                                                        <div class='hidden-sm hidden-xs action-buttons'>
                                                            <a class='blue' href='#'>
                                                                <i class='ace-icon fa fa-search-plus bigger-130'></i>
                                                            </a>
        
                                                            <a class='green' href='#'>
                                                                <i class='ace-icon fa fa-pencil bigger-130'></i>
                                                            </a>
        
                                                            <a class='red' href='#'>
                                                                <i class='ace-icon fa fa-trash-o bigger-130'></i>
                                                            </a>
                                                        </div>
        
                                                        <div class='hidden-md hidden-lg'>
                                                            <div class='inline pos-rel'>
                                                                <button class='btn btn-minier btn-yellow dropdown-toggle' data-toggle='dropdown' data-position='auto'>
                                                                    <i class='ace-icon fa fa-caret-down icon-only bigger-120'></i>
                                                                </button>
        
                                                                <ul class='dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close'>
                                                                    <li>
                                                                        <a href='#' class='tooltip-info' data-rel='tooltip' title='View'>
                                                                                        <span class='blue'>
                                                                                            <i class='ace-icon fa fa-search-plus bigger-120'></i>
                                                                                        </span>
                                                                        </a>
                                                                    </li>
        
                                                                    <li>
                                                                        <a href='#' class='tooltip-success' data-rel='tooltip' title='Edit'>
                                                                                        <span class='green'>
                                                                                            <i class='ace-icon fa fa-pencil-square-o bigger-120'></i>
                                                                                        </span>
                                                                        </a>
                                                                    </li>
        
                                                                    <li>
                                                                        <a href='#' class='tooltip-error' data-rel='tooltip' title='Delete'>
                                                                                        <span class='red'>
                                                                                            <i class='ace-icon fa fa-trash-o bigger-120'></i>
                                                                                        </span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <div class='hidden-md hidden-lg'>
                                            <div class='inline pos-rel'>
                                                <button class='btn btn-minier btn-yellow dropdown-toggle' data-toggle='dropdown' data-position='auto'>
                                                    <i class='ace-icon fa fa-caret-down icon-only bigger-120'></i>
                                                </button>

                                                <ul class='dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close'>
                                                    <li>
                                                        <a href='#' class='tooltip-info' data-rel='tooltip' title='View'>
																				<span class='blue'>
																					<i class='ace-icon fa fa-search-plus bigger-120'></i>
																				</span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href='#' class='tooltip-success' data-rel='tooltip' title='Edit'>
																				<span class='green'>
																					<i class='ace-icon fa fa-pencil-square-o bigger-120'></i>
																				</span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href='#' class='tooltip-error' data-rel='tooltip' title='Delete'>
																				<span class='red'>
																					<i class='ace-icon fa fa-trash-o bigger-120'></i>
																				</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        </td>
                                        </tr>";
    }
   // return $p;
}

                       $t = "<div class='row'>
                            <div class='col-xs-12'>

                                <div class='clearfix'>
                                    <div class='pull-right tableTools-container'></div>
                                </div>
                                <div class='table-header'>
                                    Results for 'Latest Registered Domains'
                                </div>

                                <!-- div.table-responsive -->

                                <!-- div.dataTables_borderWrap -->
                                <div>
                                    <table id='dynamic-table' class='table table-striped table-bordered table-hover'>
                                        <thead>
                                        <tr>
                                            <th class='center'>
                                                <label class='pos-rel'>
                                                    <input type='checkbox' class='ace' />
                                                    <span class='lbl'></span>
                                                </label>
                                            </th>
                                            <th>Date</th>
                                            <th>Assign To</th>
                                            <th class='hidden-480'>Subject</th>

                                            <th>
                                                <i class='ace-icon fa fa-clock-o bigger-110 hidden-480'></i>
                                                Due Date
                                            </th>
                                            <th class='hidden-480'>Priority</th>

                                            <th></th>
                                        </tr>
                                        </thead>

                                        <tbody>".array(getData())
                                                                                    
                                       ."</tbody>
                                    </table>
                                </div>
                            </div>
                        </div>";

$pageConfig->pagecontent=$t;
echo $pageConfig->pagecontent;
