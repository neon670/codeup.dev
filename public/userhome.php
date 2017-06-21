<?php
$total=$database->count("ctime","*");
$confirmed=$database->count("cslot","*",["AND"=>["status"=>"confirmed","OR"=>["fid"=>$_SESSION['userid'],"tid"=>$_SESSION['userid']]]]);
$yourpending=$database->count("cslot","*",["AND"=>["status"=>"pending","fid"=>$_SESSION['userid']]]);
$request=$database->count("cslot","*",["AND"=>["status"=>"pending","tid"=>$_SESSION['userid']]]);
$attendees=$database->count("attendee","*",["status"=>"Approved"]);
?>
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-check-square-o fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $confirmed."/".$total;?></div>
                                    <div>Confirmed</div>
                                </div>
                            </div>
                        </div>
                        <a href="/timetables">
                            <div class="panel-footer">
                                <span class="pull-left">Book Now</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-pause fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $yourpending;?></div>
                                    <div>Pending</div>
                                </div>
                            </div>
                        </div>
                        <a href="/pendingyours">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-sign-in fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $request;?></div>
                                    <div>Requests</div>
                                </div>
                            </div>
                        </div>
                        <a href="/confirmrequest">
                            <div class="panel-footer">
                                <span class="pull-left">Confirm now!</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-users fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $attendees;?></div>
                                    <div>Attendees</div>
                                </div>
                            </div>
                        </div>
                        <a href="/attendeelist">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">


                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-clock-o fa-fw"></i> Conference Detail
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <?php echo $conf['description'];?>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-8 -->

            </div>
            <!-- /.row -->