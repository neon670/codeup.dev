<?php
$selecteddate=strtotime($timetables[0]['cdate']);
if($selecteddate > $today){$link="enabled";} else {$link="disabled";}
$uid=$_SESSION['userid'];
$headerdate=date('D M j, Y',$selecteddate);
 if($today!=$selecteddate AND $cstatus=='during'){ $goto="<p><a href='/timetables?day=".$tttt."'/>Go to Today</a></p>";};?>
<h4><?php echo $headerdate;?></h4>
<p><?php echo $confstatus;?></p>
<?php echo $goto;?>
<div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
											<th>Time</th>
											<th>Company</th>

                                            <th>Company</th>
											<th>Table No.</th>
											<th>Status</th>

                                        </tr>
                                    </thead>
                                    <tbody>
<?php
foreach ($timetables as $t){
$booked="";
if(isset($_SESSION['bookto'])){$tid=$_SESSION['bookto'];
$booked=$database->select("cslot","*",["AND"=>["fulldatetime"=>$t['fulldatetime'],"num_day"=>$ccday,"OR"=>["fid"=>[$uid,$tid],"tid"=>[$uid,$tid]]]]);}
else
	{$booked=$database->select("cslot","*",["AND"=>["fulldatetime"=>$t['fulldatetime'],"num_day"=>$ccday,"OR"=>["fid"=>$uid,"tid"=>$uid]]]);};

if (count($booked)==1) {$vdata=$booked[0];
	if ($vdata['fid']==$uid or $vdata['tid']==$uid){$bstatus="Bookedmy";$fcompany=getdetailscompany($vdata['fid']);$tcompany=getdetailscompany($vdata['tid']);} else{

		$bstatus="Booked";}} else {
	$checkempty=$database->select("cslot","*",["AND"=>["fulldatetime"=>$t['fulldatetime'],"num_day"=>$ccday,"status"=>"empty"]]);

	$cempty= count($checkempty);
	if ($cempty==0){$bstatus="Full";} else {$bstatus="Available";}
	}

?>
<tr class="<?php echo $bstatus;?>">
<td><?php if ($bstatus=='Available' AND $link=="enabled"){ ?>
	<a href='/bookmeeting?bookslot=<?php echo $t['fulldatetime'];?>'><?php echo $t['fulldatetime']." - ".date("H:i",strtotime($t['fulldatetime'])+$conf['itime']*60);;?></a>
<?php } elseif($bstatus=='Available' AND $link!="enabled"){ echo $t['fulldatetime']." - ".date("H:i",strtotime($t['fulldatetime'])+$conf['itime']*60);} else {echo $t['fulldatetime']." - ".date("H:i",strtotime($t['fulldatetime'])+$conf['itime']*60);}?></td>
<?php
switch($bstatus){
case "Bookedmy":
	?>
		<td><?php echo $fcompany['name']." / ".$fcompany['company'];?></td>
		<td><?php echo $tcompany['name']." / ".$tcompany['company'];?></td>
		<td><?php echo $vdata['slot'];?></td>
		<td><?php echo ucfirst($vdata['status']);?></td>
	<?php
	break;
case "Full":
	?>
		<td colspan='4'> All meeting tables are full for this time.</td>

	<?php
	Break;
case "Booked":
	?>
		<td colspan='4'>Selected attendee is already booked this slot.</td>

	<?php
	Break;
case "Available":
	 if ($link=="enabled"){ ?>
	<td colspan='4'>You can book this slot </td>
	<?php } else {?><td colspan='4'>You cannot book now. you should book before 1day </td><?php }
	Break;
}
?>

</tr>
<?php

}?>

         </tbody>
                                </table>
                            </div>
							</div>