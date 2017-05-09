<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 29-Apr-17
 * Time: 2:14 AM
 */

    include_once"../db/db.php";

    function getMessager($conn){


        $sql="SELECT * FROM messager";

        $result=$conn->query($sql);
        $row=$result->$result->fetch_assoc();
        $msg_to=$row['userTo'];
        $msg_from=$row['userForm'];
        $date=$row['createDate'];
        echo"<li>
			    <a href='#' class='clearfix'>
			    	<img src='$pageConfig->avatar2' class='msg-photo' alt='$pageConfig->altName' />
						<span class='msg-body'>
							<span class='msg-title'>
								<span class='blue'>$msg_from:</span>
									Ciao sociis natoque penatibus et auctor ...
					    	</span>

								<span class='msg-time'>
									<i class='ace-icon fa fa-clock-o'></i>
										<span>$date</span>
								</span>
						</span>
				</a>
			</li>";
    }



