<?php
$data=include_once 'views/test2.php';
    $x="<div>
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
            <th class='hidden-480'>Task Subject</th>
            <th>
                <i class='ace-icon fa fa-clock-o bigger-110 hidden-480'></i>
                Due Date
            </th>
            <th class='hidden-480'>Priority</th>

            <th></th>
        </tr>
        </thead>
        <tbody>
            ".$data."      

       </tbody> </table></div>";
$pageData->data=$x;
