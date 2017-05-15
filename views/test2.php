<?php
include_once "db/db.php";
function getDataSheet($conn)
{

    $sql = "SELECT * FROM  user_task";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
        $Status = $row['Priority'];
        switch ($Status) {
            case 1:
                $priority = "High";
                break;
            case 2:
                $priority = "Medium";
                break;
            case 3:
                $priority = "Low";
                break;
            default:
                $priority = "No Priority";
                break;
        }

        return "
            <tr>
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
                <td class='hidden-480'>" . $row['Subject'] . "</td>
                <td>" . $row['DueDate'] . "</td>
                <td class='hidden-480'>
                    <span class='label label-sm label-warning'>" . $priority . "</span>
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
            </tr>";
    }
}
getDataSheet($conn);
