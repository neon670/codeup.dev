<DOCTYPE <html>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
	 <script src="//code.jquery.com/jquery-1.10.2.js"></script>
 	 <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

	
<style type="text/css">

	body{
		background-color: #C0EFFF;

	}
	#name{
		max-width: 30%;
	}
	.ui-widget-header {
		border: none;
		background: none;
  
}
	#ui-datepicker-div{
	  font-size: 85%;	
}
	#price-range{
		max-width: 30%;
		font-size: 75%;

	}

	
	#state{
		background-color: orange;
	}
	

	#para{
		background-color: red;
		margin-top: 10px;
		margin-right: 50px;
		z-index: 5;
	}
	#tabs{
		width: 500px;
		height: 200px;
		position: relative;
		bottom: 900px;
		left: 570px
	}

	#dialog{
		left: -100px;
		position: relative;
		left: 700px;
	}
	/*.box{
		left: -500px;
	}
*/

</style>
<head>
	<title>BOOM</title>
</head>
<body>
	<?php require 'navbars.php'; ?> 
	<h1 id = "main-header">This is just practice work</h1>
	<form>
		 <fieldset>
		<div class="pure-control-group">	
			<p id = 'price'>
				<input type = "text" id = "amount"/>
				<br>
				<label for = "amount">Price range:</label>
				
				
			</p>
		</div>
		 <div class="pure-control-group">
			<div id = "price-range"></div>
		</div>	
			<p>
				<label for = "arrival">Arrival Dates</label>
				<br>
				<input type = "text" id = "arrival"/>
			</p>
			<br>
	</form>

	<form id = "name" class="pure-form pure-form-stacked">
    
      

        <div class="pure-g">
            <div class="pure-u-1 pure-u-md-1-3">
                <label for="first-name">First Name</label>
                <input id="first-name" class="pure-u-23-24" type="text">
            </div>

            <div class="pure-u-1 pure-u-md-1-3">
                <label for="last-name">Last Name</label>
                <input id="last-name" class="pure-u-23-24" type="text">
            </div>

            <div class="pure-u-1 pure-u-md-1-3">
                <label for="email">E-Mail</label>
                <input id="email" class="pure-u-23-24" type="email" required>
            </div>

            <div class="pure-u-1 pure-u-md-1-3">
                <label for="city">City</label>
                <input id="city" class="pure-u-23-24" type="text">
            </div>

            <div id= "state" class="pure-u-1 pure-u-md-1-3">
                <label for="state">State</label>
                <select id="state" class="pure-input-1-2">
                    
					<option value="AK">AK</option>
					<option value="AZ">AZ</option>
					<option value="AR">AR</option>
					<option value="CA">CA</option>
					<option value="CO">CO</option>
					<option value="CT">CT</option>
					<option value="DE">DE</option>
					<option value="DC">DC</option>
					<option value="FL">FL</option>
					<option value="GA">GA</option>
					<option value="HI">HI</option>
					<option value="ID">ID</option>
					<option value="IL">IL</option>
					<option value="IN">IN</option>
					<option value="IA">IA</option>
					<option value="KS">KS</option>
					<option value="KY">KY</option>
					<option value="LA">LA</option>
					<option value="ME">ME</option>
					<option value="MD">MD</option>
					<option value="MA">MA</option>
					<option value="MI">MI</option>
					<option value="MN">MN</option>
					<option value="MS">MS</option>
					<option value="MO">MO</option>
					<option value="MT">MT</option>
					<option value="NE">NE</option>
					<option value="NV">NV</option>
					<option value="NH">NH</option>
					<option value="NJ">NJ</option>
					<option value="NM">NM</option>
					<option value="NY">NY</option>
					<option value="NC">NC</option>
					<option value="ND">ND</option>
					<option value="OH">OH</option>
					<option value="OK">OK</option>
					<option value="OR">OR</option>
					<option value="PA">PA</option>
					<option value="RI">RI</option>
					<option value="SC">SC</option>
					<option value="SD">SD</option>
					<option value="TN">TN</option>
					<option value="TX">TX</option>
					<option value="UT">UT</option>
					<option value="VT">VT</option>
					<option value="VA">VA</option>
					<option value="WA">WA</option>
					<option value="WV">WV</option>
					<option value="WI">WI</option>
					<option value="WY">WY</option>
                </select>
            </div>
        </div>

        <label for="terms" class="pure-checkbox">
            <input id="terms" type="checkbox"> I've read the terms and conditions
        </label>

        <button type="submit" class="pure-button pure-button-primary">Submit</button>
    </fieldset>
</form>	
	<div id='container' style="width: 600px;height: 400px;top:50px;left:50px;"> 
		<div id="draggable">
		 	<table class = "table table-striped">
			 	<tr>
			 	<td>something</td>
			 	</tr>
		</div>
		<div id = "draggable">
			 	<tr>
			 	<td>more</td>
			 	</tr>
		</div>
			</table>
	</div>
	<div id="new">
		<div id="content" class="one">
			<pre id="para">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</pre>
		</div>
	</div>
	<div id="tabs">
		  <ul>
		    <li><a href="#tabs-1">Breakfast</a></li>
		    <li><a href="#tabs-2">Lunch</a></li>
		    <li><a href="#tabs-3">Desserts</a></li>
		    <li><a href="#tabs-4">Surprise<a></li>
		  </ul>
		  <div id="tabs-1">
		    <p>Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante.</p>
		  </div>
		  <div id="tabs-2">
		    <p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor.</p>
		  </div>
		  <div id="tabs-3">
		    <p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante.</p>
		    <p>Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. </p>
		  </div>
		  <div id="tabs-4">
		  	<p><img src="/img/codeup-arrow.png">surpise</p>
	</div>

	<div class="box">
		<div  id="dialog" title="Basic dialog">
		  <p>This is the default dialog which is useful for displaying information. The dialog window can be moved, resized and closed with the 'x' icon.</p>
		</div>
	<div>
</body>

	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

	 <script type="text/javascript">

	  $(function() {
	   $( "#dialog" ).dialog();
	 	});
	  $(function(){
	  	$('#dialog').animate({left:0});
	  })

	  $(function() {
	  $( "#tabs" ).tabs();
	  });


	  var listener = function (event) {
            document.getElementById('main-header').innerHTML= "change";
        }
         

 	$(function(){
 		$('#arrival').datepicker();

 		var $amount = $('#amount');
 		var $range = $('#price-range');

 		$('#price-range').slider({
 			range: true,
 			min: 0,
 			max: 400,
 			values: [175, 300],
 			slide: function(event,ui){
 				$amount.val('$' + ui.values[0] + '- $' + ui.values[1]);
 			}
 		});
 		$amount
 			.val('$' + $range.slider('values', 0)
 				+ '- $' +$range.slider('values', 1));
 	});
 	$(function(){
 		$( "#draggable" ).draggable();
 	});
 	$(function(){
 		$('#para').click();
 	});

 	$(function(){
 		$( "#content" ).draggable();
 	});

 </script>
</html>