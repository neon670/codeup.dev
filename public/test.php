<?php
//add the recipient's address here
$myemail = 'noe@globalmedia.com';
 
//grab named inputs from html then post to #thanks
if (isset($_POST['name'])) {
$name = strip_tags($_POST['name']);
$email = strip_tags($_POST['email']);
$message = strip_tags($_POST['message']);
echo "<span class=\"alert alert-success\" >Your message has been received. Thanks! Here is what you submitted:</span><br><br>";
echo "<stong>Name:</strong> ".$name."<br>";   
echo "<stong>Email:</strong> ".$email."<br>"; 
echo "<stong>Message:</strong> ".$message."<br>";
 
//generate email and send!
$to = $myemail;
$email_subject = "Contact form submission: $name";
$email_body = "You have received a new message. ".
" Here are the details:\n Name: $name \n ".
"Email: $email\n Message \n $message";
$headers = "From: $myemail\n";
$headers .= "Reply-To: $email";
mail($to,$email_subject,$email_body,$headers);
}
?>

<DOCTYP	<html>
<head>
	<title></title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


</head>
<body>
		<div id="form-content" class="modal hide fade in" style="display: none;">
		    <div class="modal-header">
		        <a class="close" data-dismiss="modal">×</a>
		        <h3>Send me a message</h3>
		    </div>
		    <div class="modal-body">
		        <form class="contact" name="contact">
		            <label class="label" for="name">Your Name</label><br>
		            <input type="text" name="name" class="input-xlarge"><br>
		            <label class="label" for="email">Your E-mail</label><br>
		            <input type="email" name="email" class="input-xlarge"><br>
		            <label class="label" for="message">Enter a Message</label><br>
		            <textarea name="message" class="input-xlarge"></textarea>
		        </form>
		    </div>
		    <div class="modal-footer">
		        <input class="btn btn-success" type="submit" value="Send!" id="submit">
		        <a href="#" class="btn" data-dismiss="modal">Nah.</a>
		    </div>
		</div>
		<div id="thanks"><p><a data-toggle="modal" href="#form-content" class="btn btn-primary btn-large">Modal powers, activate!</a></p></div>


<script type="text/javascript">
	$(document).ready(function () {
    $("input#submit").click(function(){
        $.ajax({
            type: "POST",
            url: "process.php", //process to mail
            data: $('form.contact').serialize(),
            success: function(msg){
                $("#thanks").html(msg) //hide button and show thank you
                $("#form-content").modal('hide'); //hide popup  
            },
            error: function(){
                alert("failure");
            }
        });
    });
});
</script>
</body>
</html>
