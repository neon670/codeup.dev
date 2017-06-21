 <ul class="nav navbar-top-links navbar-right">
 <?php if($_SESSION['userrole']=="user"){?>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-sign-out fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
					<?php $incoming=$database->query("select * from cslot where fid=".$_SESSION['userid']." AND status='pending' ORDER BY stime DESC LIMIT 3")->fetchAll();
					if (count($incoming)==0){?>
					<li class="text-center"> No Pending request.</li>
					<?php } else {
				?>
					<li><a class="text-center" href="/pendingyours">
                                <strong>Your Pending Request</strong>
                                <i class="fa fa-angle-right"></i>
                            </a></li>
						<li class="divider"></li>
                        <?php


					foreach($incoming as $i){
							$tocompany=getdetailscompany($i['tid']);
						?>

						<li>
                            <a href="/pendingyours">
                                <div>

                                    <p>
                                        <em>Update:<?php echo $i['stime'];?></em>
                                    </P>
									 <strong>J<?php echo $tocompany['name'];?></strong>
                                </div>
                                <div>from <?php echo $tocompany['company'];?>,1 on 1 meeting at <?php  echo $i['fulldatetime'];?> is pending. </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <?php } ?>
                        <li>
                            <a class="text-center" href="/pendingyours">
                                <strong>All your pending Request</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
						<?php }?>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-sign-in fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>

                    <ul class="dropdown-menu dropdown-messages">
					<?php $incoming=$database->query("select * from cslot where tid=".$_SESSION['userid']." AND status='pending'ORDER BY stime DESC LIMIT 3")->fetchAll();
					if (count($incoming)==0){?>
					<li class="text-center"> No Received request.</li>
					<?php } else {
				?>
					<li><a class="text-center" href="/confirmrequest">
                                <strong>Your received request</strong>
                                <i class="fa fa-angle-right"></i>
                            </a></li>
						<li class="divider"></li>
                        <?php
							$incoming=$database->query("select * from cslot where tid=".$_SESSION['userid']." AND status='pending'ORDER BY stime DESC LIMIT 3")->fetchAll();

					foreach($incoming as $i){
							$tocompany=getdetailscompany($i['fid']);
						?>

						<li>
                            <a href="/confirmrequest">
                                <div>

                                    <p>
                                        <em>Update:<?php echo $i['stime'];?></em>
                                    </P>
									 <strong>J<?php echo $tocompany['name'];?></strong>
                                </div>
                                <div>from <?php echo $tocompany['company'];?> request 1 on 1 meeting at <?php  echo $i['fulldatetime'];?>. </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <?php } ?>
                        <li>
                            <a class="text-center" href="/confirmrequest">
                                <strong>All recieved request</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
						<?php }?>
                    </ul>

                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-pencil-square-o fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="/timetables">
                                <div>
                                    <i class="fa fa-clock-o fa-fw"></i> Book by time

                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="/companies">
                                <div>
                                    <i class="fa fa-building fa-fw"></i> Book by company

                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="/attendeelist">
                                <div>
                                    <i class="fa fa-user-plus fa-fw"></i> Book by attendee

                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>

                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
				<?php }?>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
					<?php if ($_SESSION['userrole']=='user'){?>
                        <li><a href="/addattendees?id=<?php echo $_SESSION['userid'];?>"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="/changepassword"><i class="fa fa-gear fa-fw"></i> Change Password</a>
                        </li>
                        <li class="divider"></li><?php }?>
                        <li><a href="/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>