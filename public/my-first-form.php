<?php
  var_dump($_GET);
  var_dump($_POST);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>My First Form</title>
        <script type="text/javascript">
        body{   
            backgroung-color:blue;

        }

        </script>
    </head>

<body>

    <form method="POST" action="/my-first-form.php">
        <p>
            <h3>User Login</h3>
            <label for="username">Username</label>
            <input id="username" name="username" type="text">
        </p>
        <p>
            <label for="password">Password</label>
            <input id="password" name="password" type="password">
        </p>
        <p>
        <p>
            <h1>Compose Email</h1>
            <textarea id="email_body" name="email_body" rows="5" cols="40">Email</textarea>
        </p>  
            <input type="submit">
        
    </form> 

    <form method="POST" action="/my-first-form.php">
        <p>
            <label for="recipent">To</label>
            <input id="recipent" name="To" type="text">
        </p>
        
        <p>
            <label for="sender">From:</label>
            <input id="sender" name="sender" type="text">
        </p>
            <input type="checkbox" id="mailing" name="mailing" value="compose email">
            <label for="mailing"> Save a copy in your sent folder</label>
        

        <h4>Mailing List</h4>
        <input type="checkbox" id="mailing_list" name="mailing_list" value="yes">
        <label for="mailing_list">Sign me up for the mailing list!</label>

        <p>What is the capital of Texas?</p>
        <label>
            <input type="radio" id="q1a" name="q1" value="houston">
            Houston
        </label>
        <br>
        <label>
            <input type="radio" id="q2b" name="q1" value="dallas">
            Dallas
        </label>
        <br>
        <label>
            <input type="radio" id="q3c" name="q1" value="san antonio">
            San Antonio
        </label>
        <br>
        <label>
            <input type="radio" id="q4d" name="q1" value="austin">
            Austin
        </label>
        <h1>Multiple Choice Test</h1>

        <p>What is your favorite food?</p>
            <lable><input type="checkbox" is="os1" name="os[]" value="Italian"> Italian</lable>
            <label><input type="checkbox" is="os2" name="os[]" value="Chinese">Chinese</label>
            <label><input type="checkbox" is="os3" name="os[]" value="American">American</label>
        <p>What country would you likek to vist?</p>

        <label>
            <input type="radio" id="q1a" name="q1" value"mexico">
            Mexico
        </label>
        <br>
        <label>
            <input type="radio" id="q2b" name="q1" value"Australia">
            Australia
        </label>
        <br>
        <label>
            <input type="radio" id="q3c" name="q1" value"China">
            China
        </label>

        <h3>Type of transmission</h3>

        <label for="transmission"> Select your transmission type:</label>
        
        <select> id="transmission" name="transmisson[]"multiple>
            <option disabled selected> Select your favorite</option>
            <option value="automatic">Automatic</option>
            <option value="manual">Manual</option>
            <option value="flinstones">Flinstones</option>
        </select>
        <input type="submit">
    </form>

    <form method="POST" action="/my-first-form.php">
    <h3>Select Testing</h3>

        <label for="likes">Do you like to workout?</label>
        <select> id="likes"> name="likes[]"multiple>
            <option value="yes">Yes</option>
            <option value="no">No</option>
        </select>
        <input type="submit">
    </form>




</body>
</head>